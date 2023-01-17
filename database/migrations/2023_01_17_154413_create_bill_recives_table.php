<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_recives', function (Blueprint $table) {
            $table->id();
            $table->string('idBling');
            $table->string('situacao')->nullable();
            $table->string('dataEmissao')->nullable();
            $table->string('vencimentoOriginal')->nullable();
            $table->string('vencimento')->nullable();
            $table->string('competencia')->nullable();
            $table->string('nroDocumento')->nullable();
            $table->string('valor')->nullable();
            $table->string('saldo')->nullable();
            $table->string('historico')->nullable();
            $table->string('categoria')->nullable();
            $table->string('idFormaPagamento')->nullable();
            $table->string('portador')->nullable();
            $table->string('linkBoleto')->nullable();
            $table->string('vendedor')->nullable();
            $table->json('pagamento')->nullable();
            $table->string('ocorrencia')->nullable();
            $table->json('cliente')->nullable();
            $table->string('tipo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_recives');
    }
};
