<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes aos órgãos municipais.
     */
    protected const TABLE = 'orgaos';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->id();
            $table->integer('seq_orgao');
            $table->integer('num_anoexercicio');
            $table->text('cod_orgao');
            $table->text('nom_orgao');
            $table->text('tipo_orgao');
            $table->integer('cod_municipio');
            $table->text('nom_municipio');
            $table->text('cod_uf');
            $table->text('sgl_uf');
            $table->text('nom_uf');
            $table->text('dsc_regiaoplanejamento');
            $table->text('num_versao_arq');

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
