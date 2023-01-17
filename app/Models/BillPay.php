<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillPay extends Model
{
    use HasFactory;

    protected $cast = [
        'pagamento' => 'array',
        'fornecedor' => 'array',
        'cliente' => 'array',
    ];

    protected $fillable = [
        'idBling',
        'fornecedor',
        'situacao',
        'dataEmissao',
        'vencimentoOriginal',
        'vencimento',
        'competencia',
        'nroDocumento',
        'nomeFornecedor',
        'valor',
        'saldo',
        'historico',
        'categoria',
        'idFormaPagamento',
        'portador',
        'linkBoleto',
        'vendedor',
        'pagamento',
        'ocorrencia',
        'cliente',
    ];

    public function dataEmissao(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-m-Y'),
            set: fn ($value) => Carbon::parse($value)->format('Y-m-d')
        );
    }

    public function vencimentoOriginal(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-m-Y')
        );
    }

    public function vencimento(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-m-Y')
        );
    }
}
