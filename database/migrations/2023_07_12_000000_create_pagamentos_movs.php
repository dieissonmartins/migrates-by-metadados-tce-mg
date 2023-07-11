<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes as Movimentações dos Pagamentos.
     */
    protected const TABLE = 'pagamentos_movs';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {

            $table->id();

            $table->integer('seq_mov_pagamento');
            $table->integer('seq_pagamento');
            $table->integer('seq_orgao');
            $table->integer('num_ano_referencia');
            $table->integer('num_mes_referencia');
            $table->text('dsc_tipo_doc');
            $table->text('dsc_tipo_doc_livre');
            $table->text('num_documento');
            $table->date('dat_emissao')->nullable();
            $table->text('dsc_inst_financeira');
            $table->text('dsc_agencia');
            $table->text('dsc_conta_bancaria');
            $table->text('dsc_finalidade_conta');
            $table->enum('dsc_tipo_aplicacao', [
                1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13
            ]);
            $table->integer('num_aplicacao');
            $table->float('vlr_movimentacao', 8, 3);
            $table->text('num_versaoarq');

            $table->timestamps();
        });
    }
//

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
