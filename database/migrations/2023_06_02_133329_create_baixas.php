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
        Schema::create('baixas', function (Blueprint $table) {
            $table->id();
            $table->integer('guiarecolhimentoid');
            $table->string('processo', 19);
            $table->date('data');
            $table->string('numeronl', 15);
            $table->string('mensagem', 15);
            $table->date('datamensagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baixas');
    }
};
