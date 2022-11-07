<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('physical_person');
            $table->string('fone');
            $table->string('state_registration');
            $table->string('cpf_cnpj');
            $table->string('address');
            $table->integer('number');
            $table->string('complement');
            $table->string('district');
            $table->string('zip_code');
            $table->string('city');
            $table->char('fu', 2);
            $table->char('contributor', 1)->default(1);
            $table->string('fantasy');
            $table->string('tax_regime_code');
            $table->string('municipal_registration');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
