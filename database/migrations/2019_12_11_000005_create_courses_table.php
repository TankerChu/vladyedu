<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');

            $table->datetime('date_time');

            $table->string('address');

            $table->longText('introduction');

            $table->longText('info');

            $table->longText('content');

            $table->string('slug');

            $table->boolean('is_featured')->default(0)->nullable();

            $table->string('video_link')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
