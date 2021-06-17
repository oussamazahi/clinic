<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->bigIncrements('id_rdv');
            $table->unsignedBigInteger('id_patient');
            $table->string('etat_rdv');
            $table->date('date_rdv');
            $table->time('heure_rdv');
            $table->timestamps();
            $table->foreign('id_patient')->references('id')->on('patient')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendez_vous');
    }
}
