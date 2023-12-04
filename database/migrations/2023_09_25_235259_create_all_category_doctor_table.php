<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_category_doctor', function (Blueprint $table) {
            $table->increments('doctor_id');
            $table->string('img_doctor');
            $table->string('name_doctor');
            $table->integer('book_doctor');
            $table->integer('star_doctor');
            $table->string('hospital_doctor');
            $table->string('hospital_code');
            $table->string('specialist_doctor');
            $table->integer('price_book');
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
        Schema::dropIfExists('all_category_doctor');
    }
};
