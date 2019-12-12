<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientCoursePivotTable extends Migration
{
    public function up()
    {
        Schema::create('client_course', function (Blueprint $table) {
            $table->unsignedInteger('client_id');

            $table->foreign('client_id', 'client_id_fk_720836')->references('id')->on('clients')->onDelete('cascade');

            $table->unsignedInteger('course_id');

            $table->foreign('course_id', 'course_id_fk_720836')->references('id')->on('courses')->onDelete('cascade');
        });
    }
}
