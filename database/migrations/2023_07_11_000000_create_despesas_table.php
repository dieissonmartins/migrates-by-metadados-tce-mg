<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes as Despesas do órgão.
     */
    protected const TABLE = 'despesas';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->id();

            $table->integer('seq_orgao');
            $table->integer('cod_municipio');
            $table->text('seq_unidade');
            $table->text('cod_unidade');
            $table->text('cod_subunidade');
            $table->integer('num_anoexercicio');
            $table->integer('num_mesexercicio');
            $table->text('dsc_funcao');
            $table->text('dsc_subfuncao');
            $table->text('dsc_programa');
            $table->text('dsc_acao');
            $table->text('dsc_subacao');
            $table->text('dsc_naturezadespesa');
            $table->text('dsc_fonterecurso');
            $table->float('vlr_previsto', 8, 3);
            $table->float('vlr_acrescimo', 8, 3);
            $table->float('vlr_deducao', 8, 3);
            $table->float('vlr_empenhado', 8, 3);
            $table->float('vlr_liquidado', 8, 3);
            $table->float('vlr_pago', 8, 3);
            $table->float('vlr_rspprocessado', 8, 3);
            $table->float('vlr_rspnprocprocessado', 8, 3);
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
