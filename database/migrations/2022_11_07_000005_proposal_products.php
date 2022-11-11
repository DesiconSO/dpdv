<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proposal_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proposal_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->float('discount', 10, 2);
            $table->string('amount');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propostal_products');
    }
};
