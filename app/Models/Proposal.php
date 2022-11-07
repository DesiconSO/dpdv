<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proposal extends Model
{
    use HasFactory;

    private $fillable = [
        'shipping_company',
        'sale_mode',
        'shipping_mode',
        'seller_discount',
        'shipping_price',
        'seller_note',
        'status',
    ];

    private $cast = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function products_proposal(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
