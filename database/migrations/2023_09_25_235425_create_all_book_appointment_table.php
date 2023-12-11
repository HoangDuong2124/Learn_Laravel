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
        Schema::create('all_book_appointment', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->integer('user_id')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_email');
            $table->string('book_type');
            $table->string('customer_status');
            $table->string('describe')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_book_appointment');
    }
};
