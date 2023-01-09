<?php

namespace App\Models;

use App\Enums\SaleMode;
use App\Enums\ShippingCompany;
use App\Enums\ShippingMode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_company',
        'sale_mode',
        'shipping_mode',
        'seller_discount',
        'shipping_price',
        'seller_note',
        'status',
        'user_id',
        'client_id',
    ];

    private $cast = [
        'shipping_mode' => ShippingMode::class,
        'sale_mode' => SaleMode::class,
        'shipping_company' => ShippingCompany::class,
        'status' => Status::class,
        'shipping_price' => 'money:BRL',
    ];

    public function getShippingPriceAttribute($value)
    {
        return moneyFormat($value);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function productsProposal(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
