<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('specialist_doctor_id');
            $table->unsignedBigInteger('patient_id');
            $table->string('symptom', 300);
            $table->datetime('assignment_date');
            $table->datetime('assigned_date');
            $table->timestamps();

            //Relations
            $table->foreign('specialist_doctor_id')->references('id')->on('specialist_doctors');
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_appointments');
    }
}
