<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Informações referentes aos Pagamentos realizados pelos órgãos municipais.
     */
    protected const TABLE = 'despesas_pagamentos';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {

            $table->id();

            $table->integer('seq_pagamento');
            $table->integer('seq_orgao');
            $table->integer('seq_unidade');
            $table->integer('seq_empenho');
            $table->integer('seq_rsp');
            $table->integer('seq_liquidacao');
            $table->integer('seq_orgao_empenho');
            $table->integer('seq_unid_empenho');
            $table->integer('num_ano_referencia');
            $table->integer('num_mes_referencia');
            $table->text('num_doc_resp');
            $table->text('nom_resp');
            $table->text('num_doc_credor');
            $table->text('nom_credor');
            $table->integer('num_empenho');
            $table->date('dat_empenho')->nullable();
            $table->integer('num_liquidacao');
            $table->date('dat_liquidacao')->nullable();
            $table->integer('num_ord_pagamento');
            $table->date('dat_pagamento');
            $table->string('dsc_pagamento');
            $table->string('dsc_tipo_pagamento');
            $table->string('dsc_fonte_recurso');
            $table->float('vlr_pag_fonte', 8, 3);
            $table->float('vlr_ret_fonte', 8, 3);
            $table->float('vlr_ant_fonte', 8, 3);
            $table->float('vlr_anu_fonte', 8, 3);
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
