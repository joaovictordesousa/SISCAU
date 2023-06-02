<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('auxagencias', function (Blueprint $table) {
            $table->id();
            $table->integer('auxinstituicaofinanceiraid');
            $table->string('codigo', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auxagencias');
    }
};
