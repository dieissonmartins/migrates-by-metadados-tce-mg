<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes aos Empenhos por Fonte de Recurso.
     */
    protected const TABLE = 'empenhos_fontes';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {

            $table->id();

            $table->integer('seq_empenho_fonte');
            $table->integer('seq_empenho');
            $table->integer('seq_orgao');
            $table->integer('seq_unidade');
            $table->integer('num_ano_referencia');
            $table->integer('num_mes_referencia');
            $table->text('dsc_fonte_recurso');
            $table->float('vlr_empenho', 8, 3);
            $table->float('vlr_reforco_emp', 8, 3);
            $table->float('vlr_anulacao_emp', 8, 3);
            $table->float('vlr_liquidacao', 8, 3);
            $table->float('vlr_anu_liquidacao', 8, 3);
            $table->float('vlr_pagamento', 8, 3);
            $table->float('vlr_anu_pagamento', 8, 3);
            $table->float('vlr_outras_baixas', 8, 3);
            $table->float('vlr_anu_outras_baixas', 8, 3);
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
