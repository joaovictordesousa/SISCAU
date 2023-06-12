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
        Schema::create('guiasrecolhimento', function (Blueprint $table) {
            $table->id();
            $table->integer('auxtiporecolhimentoid');
            $table->integer('auxinstituicaofinanceiraid');
            $table->integer('auxagenciaid');
            $table->integer('auxempresaid');
            $table->date('datagr');
            $table->date('datavalidade');
            $table->integer('auxtipodocumentoid');
            $table->string('numero', 10);
            $table->string('numeroconta', 10);
            $table->string('numerocontrato', 10);
            $table->string('aditivo', 25);
            $table->decimal('valor');
            $table->string('numerodocumento', 25);
            $table->string('numeronl', 11);
            $table->string('historico', 512);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('guiasrecolhimento');
    }
};
