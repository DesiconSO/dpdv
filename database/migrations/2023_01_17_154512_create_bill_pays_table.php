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
        Schema::create('bill_pays', function (Blueprint $table) {
            $table->id();
            $table->string('idBling')->unique();
            $table->string('situacao')->nullable();
            $table->string('tipo')->nullable();
            $table->string('dataEmissao')->nullable();
            $table->string('vencimentoOriginal')->nullable();
            $table->string('vencimento')->nullable();
            $table->string('nomeFornecedor')->nullable();
            $table->string('competencia')->nullable();
            $table->string('nroDocumento')->nullable();
            $table->text('historico')->nullable();
            $table->string('categoria')->nullable();
            $table->float('valor')->nullable();
            $table->float('saldo')->nullable();
            $table->string('idFormaPagamento')->nullable();
            $table->json('fornecedor')->nullable();
            $table->json('pagamento')->nullable();
            $table->string('portador')->nullable();
            $table->string('linkBoleto')->nullable();
            $table->string('vendedor')->nullable();
            $table->string('ocorrencia')->nullable();
            $table->json('cliente')->nullable();
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
        Schema::dropIfExists('bill_pays');
    }
};
