<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->string('shipping_company');
            $table->char('sale_mode', 1)->default(0);
            $table->string('shipping_mode');
            $table->float('seller_discount', 5, 2)->default(0);
            $table->float('shipping_price', 10, 2)->default(0);
            $table->text('seller_note');
            $table->char('status', 1)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
