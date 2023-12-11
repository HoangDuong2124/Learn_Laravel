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
        Schema::create('all_category_hospital', function (Blueprint $table) {
            $table->increments('hospital_id');
            $table->string('hospital_code')->unique();
            $table->string('img_hospital');
           $table->string('name_hospital');
           $table->string('address_hospital');
           $table->integer('book_hospital');
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
        Schema::dropIfExists('all_category_hospital');
    }
};
