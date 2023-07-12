<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes as despesas com Educação.
     */
    protected const TABLE = 'despesas_educacao';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {

            $table->id();

            $table->integer('cod_municipio');
            $table->integer('seq_orgao');
            $table->integer('seq_unidade');
            $table->integer('num_ano_referencia');
            $table->integer('num_mes_referencia');
            $table->text('dsc_funcao');
            $table->text('dsc_subfuncao');
            $table->text('dsc_programa');
            $table->text('dsc_acao');
            $table->text('dsc_subacao');
            $table->text('dsc_nat_despesa');
            $table->text('dsc_fonte_recurso');
            $table->integer('num_empenho');
            $table->date('dat_empenho')->nullable();
            $table->float('vlr_empenho', 8, 3);
            $table->float('vlr_ref_empenho', 8, 3);
            $table->float('vlr_anu_empenho', 8, 3);
            $table->float('vlr_liquidado', 8, 3);
            $table->float('vlr_anu_liquidado', 8, 3);
            $table->float('vlr_pagamento', 8, 3);
            $table->float('vlr_anu_pagamento', 8, 3);
            $table->float('vlr_outras_baixas', 8, 3);
            $table->float('vlr_anu_outras_baixas', 8, 3);
            $table->float('vlr_rsp_proc', 8, 3);
            $table->float('vlr_rsp_nao_proc', 8, 3);
            $table->text('num_versaoarq');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
