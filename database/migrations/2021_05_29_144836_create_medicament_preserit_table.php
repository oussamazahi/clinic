<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentPreseritTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicament_preserit', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('id_med');
            $table->unsignedBigInteger('id_patient');
            $table->unsignedBigInteger('id_ord');
            $table->string('posologie');
            $table->foreign('id_patient')->references('id')->on('patient')
            ->onDelete('cascade');
            // $table->foreign('id_ord')->references('id')->on('ordonnance')
            // ->onDelete('cascade');
            $table->foreign('id_med')->references('id')->on('medicament')
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
        Schema::dropIfExists('medicament_preserit');
    }
}
