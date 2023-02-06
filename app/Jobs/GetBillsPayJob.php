<?php

namespace App\Jobs;

use App\Models\BillPay;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class GetBillsPayJob implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1;

    public int $timeout = 240;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function handle(): bool
    {
        try {
            $count = 1;
            $request = '';
            while (! isset($request['retorno']['erros'][0]['erro']['cod'])) {
                $request = Http::get("https://bling.com.br/Api/v2/contaspagar/page=$count/json&apikey=".env('API_KEY_BLING'));

                if (isset($request['retorno']['contaspagar'])) {
                    if ($this->salvarContasBling($request['retorno']['contaspagar'])) {
                        print_r("\nNumero do contador contas $count");
                        $count++;
                    }
                } elseif (isset($request['retorno']['erros'][0]['erro']['cod'])) {
                    break;
                } else {
                    print_r("\nsoninho ein!");
                    sleep(1);
                }
            }
        } catch (\Exception $e) {
            dd($e);
        }

        print_r("\n*********** Finalizado! ***********");

        return true;
    }

    public function salvarContasBling($contas): bool
    {
        if (isset($contas)) {
            foreach ($contas as $conta) {
                $conta['contapagar']['pagamento'] = json_encode($conta['contapagar']['pagamento'], true);
                $conta['contapagar']['fornecedor'] = json_encode($conta['contapagar']['fornecedor'], true);
                $conta['contapagar']['nomeFornecedor'] = json_decode($conta['contapagar']['fornecedor'], true)['nome'];

                if ($this->array_replace_key($conta['contapagar'], 'id', 'idBling')) {
                    $conta = BillPay::updateOrCreate(['idBling' => $conta['contapagar']['idBling']], $conta['contapagar']);
                    $conta->tipo = 'pagar';
                    $conta->save();
                }
            }
        }

        return true;
    }

    public function array_replace_key(&$arr, $old, $new, $overwrite = true): bool
    {
        if (isset($arr[$new]) and ! $overwrite) {
            return false;
        }

        $arr[$new] = $arr[$old];
        unset($arr[$old]);

        return true;
    }
}
