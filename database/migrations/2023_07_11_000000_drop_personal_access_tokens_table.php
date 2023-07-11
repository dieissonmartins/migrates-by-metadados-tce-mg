<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    protected const TABLE = 'personal_access_tokens';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists(self::TABLE);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
