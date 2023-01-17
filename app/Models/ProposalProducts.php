<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalProducts extends Model
{
    use HasFactory;

    protected $fillable = [
        'proposal_id',
        'product_id',
        'user_id',
        'discount',
        'amount',
        'total'
    ];

    protected $cast = [];

    public function proposal()
    {
        return $this->hasMany(Proposal::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
