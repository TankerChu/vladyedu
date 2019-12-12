<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('location_name');

            $table->string('address');

            $table->string('city');

            $table->datetime('time');

            $table->decimal('price', 15, 2);

            $table->longText('introduction');

            $table->longText('content');

            $table->string('slug');

            $table->string('link_video')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
