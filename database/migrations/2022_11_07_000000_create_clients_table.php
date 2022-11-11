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
            $table->string('email');
            $table->char('person_type')->default('F');
            $table->string('fone')->nullable();
            $table->string('state_registration')->nullable();
            $table->string('cpf_cnpj');
            $table->string('adress');
            $table->integer('number');
            $table->string('complement')->nullable();
            $table->string('district');
            $table->string('zipcode');
            $table->string('city');
            $table->char('fu', 2);
            $table->char('contributor', 1)->default(1);
            $table->string('fantasy')->nullable();
            $table->char('tax_regime_code')->nullable();
            $table->string('observation')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
