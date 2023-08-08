<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('guiasrecolhimento', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('auxtiporecolhimentoid');
            $table->unsignedBigInteger('auxinstituicaofinanceiraid');
            $table->unsignedBigInteger('auxagenciaid');
            $table->unsignedBigInteger('auxempresaid');
            $table->date('datagr');
            $table->date('datavalidade');
            $table->unsignedBigInteger('auxtipodocumentoid');
            $table->string('numero', 10);
            $table->string('numeroconta', 10);
            $table->string('numerocontrato', 10);
            $table->string('aditivo', 25);
            $table->decimal('valor');
            $table->string('numerodocumento', 25);
            $table->string('numeronl', 11);
            $table->string('historico', 512);
            $table->bit('ativo')->default(1);
            $table->timestamps();

            $table->foreign('auxtiporecolhimentoid')->references('id')->on('auxtiporecolhimento');
            $table->foreign('auxinstituicaofinanceiraid')->references('id')->on('auxinstituicaofinanceiras');
            $table->foreign('auxagenciaid')->references('id')->on('auxagencias');
            $table->foreign('auxempresaid')->references('id')->on('auxempresas');
            $table->foreign('auxtipodocumentoid')->references('id')->on('auxtipodocumento');
        });
   }
   
    public function down(): void
    {
        Schema::dropIfExists('guiasrecolhimento');
    }
};

