<?php

namespace App\Jobs;

use App\Models\BillRecive;
use App\Models\Conta;
use App\Models\Receber;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class GetBillsReciveJob implements ShouldQueue
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
            while (!isset($request['retorno']['erros'][0]['erro']['cod'])) {
                $request = Http::get("https://bling.com.br/Api/v2/contasreceber/page=$count/json&apikey=" . env('API_KEY_BLING'));

                if (isset($request['retorno']['contasreceber'])) {
                    if ($this->salvarContasBling($request['retorno']['contasreceber'])) {
                        print_r("\nNumero do contador contas a receber $count");
                        $count++;
                    }
                } elseif (isset($request['retorno']['erros'][0]['erro']['cod'])) {
                    break;
                } else {
                    print_r("\nSoninho ein!");
                    sleep(1);
                }
            };
        } catch (\Exception $e) {
            dd($e);
        }
        print_r("\n*********** Finalizado! ***********");
        return true;
    }

    public function salvarContasBling($receber): bool
    {
        try {
            if (isset($receber)) {
                foreach ($receber as $item) {
                    $item['contaReceber']['pagamento'] = json_encode($item['contaReceber']['pagamento'], true);
                    $item['contaReceber']['cliente'] = json_encode($item['contaReceber']['cliente'], true);

                    if ($this->array_replace_key($item['contaReceber'], 'id', 'idBling')) {
                        $conta = BillRecive::updateOrCreate(['idBling' => $item['contaReceber']['idBling']], $item['contaReceber']);
                        $conta->tipo = 'receber';
                        $conta->save();
                    }
                }
            }
            return true;
        } catch (\Exception $e) {
            dd($e);
        }
    }

    function array_replace_key(&$arr, $old, $new, $overwrite = true): bool
    {
        if (isset($arr[$new]) and !$overwrite) {
            return false;
        }

        $arr[$new] = $arr[$old];
        unset($arr[$old]);

        return true;
    }
}
