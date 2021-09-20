<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reveals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('drug');
            $table->string('price');
            $table->bigInteger('specialization_id');
            $table->bigInteger('doctor_id');
            $table->bigInteger('patient_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reveals');
    }
}
