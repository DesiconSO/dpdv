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
            $table->foreignId('proposal_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('product_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');
            $table->float('discount', 10, 2)->default(0);
            $table->string('amount');
            $table->float('total', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropForeign('proposal_id');
        Schema::dropForeign('product_id');
        Schema::dropForeign('user_id');
        Schema::dropIfExists('propostal_products');
    }
};
