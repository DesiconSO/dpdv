<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'price',
    ];

    protected $cast = [];

    public $timestamps = false;

    public function discount()
    {
        return $this->hasMany(Discount::class);
    }

    public function proposalProducts()
    {
        return $this->hasMany(ProposalProducts::class);
    }
}
