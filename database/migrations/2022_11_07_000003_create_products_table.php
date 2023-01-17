<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->float('price', 10, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propostal_products');
        Schema::dropIfExists('products');
    }
};
