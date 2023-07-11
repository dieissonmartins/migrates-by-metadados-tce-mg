<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes as Receitas dos Órgãos Municipais.
     */
    protected const TABLE = 'receitas';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->id();

            $table->integer('seq_orgao');
            $table->integer('num_anoexercicio');
            $table->text('dsc_cateconomica');
            $table->text('num_mesexercicio');
            $table->text('dsc_origem');
            $table->text('dsc_especie');
            $table->text('dsc_rubrica');
            $table->text('dsc_alinea');
            $table->text('dsc_subalinea');
            $table->text('dsc_tipo');
            $table->text('dsc_fonterecurso');
            $table->float('vlr_previsaoinicial', 8, 3);
            $table->float('vlr_previsaoatualizada', 8, 3);
            $table->float('vlr_realizadoateperiodo', 8, 3);
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
