<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientEventPivotTable extends Migration
{
    public function up()
    {
        Schema::create('client_event', function (Blueprint $table) {
            $table->unsignedInteger('client_id');

            $table->foreign('client_id', 'client_id_fk_720837')->references('id')->on('clients')->onDelete('cascade');

            $table->unsignedInteger('event_id');

            $table->foreign('event_id', 'event_id_fk_720837')->references('id')->on('events')->onDelete('cascade');
        });
    }
}
