<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('coursecategory_id');
            $table->string('course_name');
            $table->string('course_slug');
            $table->string('course_code');
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->string('short_descp');
            $table->string('long_descp');
            $table->string('course_thambnail');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('courses');
    }
}
