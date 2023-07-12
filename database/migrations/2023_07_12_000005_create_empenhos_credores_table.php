<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes aos Credores do Empenho
     */
    protected const TABLE = 'empenhos_credores';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {

            $table->id();

            $table->integer('seq_emp_credor');
            $table->integer('seq_empenho');
            $table->integer('seq_orgao');
            $table->integer('seq_unidade');
            $table->integer('num_ano_referencia');
            $table->integer('num_mes_referencia');
            $table->text('num_doc_credor');
            $table->text('nom_credor');
            $table->text('num_versao_arq');

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
