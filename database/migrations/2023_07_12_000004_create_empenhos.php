<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes aos Empenhos por Fonte de Recurso.
     */
    protected const TABLE = 'empenhos';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {

            $table->id();

            $table->integer('seq_empenho');
            $table->integer('cod_municipio');
            $table->integer('seq_orgao');
            $table->integer('seq_unidade');
            $table->integer('cod_unidade');
            $table->integer('cod_subunidade');
            $table->integer('num_anoexercicio');
            $table->integer('num_mesexercicio');
            $table->integer('num_empenho');
            $table->date('dat_empenho')->nullable();
            $table->enum('dsc_modalidade', [1, 2]);
            $table->text('dsc_tipo_empenho');
            $table->text('dsc_empenho');
            $table->text('ind_dec_contrato');
            $table->text('ind_dec_convenio');
            $table->text('ind_dec_licitacao');
            $table->text('ind_dec_instr_conge');
            $table->integer('seq_contrato');
            $table->integer('seq_termo_aditivo');
            $table->integer('seq_convenio');
            $table->integer('seq_licitacao');
            $table->integer('seq_dispensa');
            $table->integer('seq_instr_conge');
            $table->text('dsc_dotacao');
            $table->text('dsc_funcao');
            $table->text('dsc_subfuncao');
            $table->text('dsc_programa');
            $table->text('dsc_acao');
            $table->text('dsc_subacao');
            $table->text('dsc_naturezadespesa');
            $table->float('vlr_empenhado', 8, 3);
            $table->float('vlr_reforco', 8, 3);
            $table->float('vlr_anulempenho', 8, 3);
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
