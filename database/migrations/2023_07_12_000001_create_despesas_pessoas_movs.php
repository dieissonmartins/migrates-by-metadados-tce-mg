<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes as despesas com pessoal.
     */
    protected const TABLE = 'despesas_pessoas';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {

            $table->id();

            $table->integer('cod_municipio');
            $table->integer('num_ano_referencia');
            $table->integer('num_mes_referencia');
            $table->text('cod_nat_despesa');
            $table->text('dsc_nat_despesa');
            $table->float('vlr_executivo', 8, 3);
            $table->float('vlr_legislativo', 8, 3);
            $table->float('vlr_municipio', 8, 3);
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
