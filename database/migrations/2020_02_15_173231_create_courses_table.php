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
            $table->integer('id', true);
            $table->string('sectionName', 150);
            $table->string('term', 45);
            $table->string('location', 150);
            $table->string('info', 200);
            $table->string('faculty', 150);
            $table->string('comments', 250);
            $table->integer('available', false);
            $table->integer('capacity', false);
            $table->integer('waitList', false);
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
