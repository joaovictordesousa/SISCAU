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
        Schema::create('auxempresas', function (Blueprint $table) {
            $table->id();
            $table->string('razaosocial', 50);
            $table->string('endereco', 50);
            $table->string('telefone', 14);
            $table->string('contato', 30);
            $table->string('tipo', 1);
            $table->string('CNPJ', 14);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auxempresas');
    }
};
