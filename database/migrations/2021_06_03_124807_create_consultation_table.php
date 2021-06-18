<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('id_patient');
            $table->unsignedBigInteger('id_ord')->nullable();
            $table->unsignedBigInteger('id_rdv');
            $table->string('concluion');
            $table->string('examen');
            $table->string('motif');
            $table->foreign('id_patient')->references('id')->on('patient')->onDelete('cascade');
            $table->foreign('id_ord')->references('id')->on('ordonnance')->onDelete('cascade');
            $table->foreign('id_rdv')->references('id_rdv')->on('rendez_vous')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultation');
    }
}
