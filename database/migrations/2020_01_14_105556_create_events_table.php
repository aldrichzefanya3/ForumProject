<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::create('events', function (Blueprint $table) {
                $table->bigIncrements('id_event');
                $table->string('title_event',45);
                $table->string('subtitle_event',45);
                $table->string('description_event',45);
                $table->dateTime('datetime_start_event');
                $table->dateTime('datetime_finish_event');
                $table->string('address_event',95);
                $table->string('geolocation_event',25);
                $table->string('city_event',35);
                $table->string('termandcondition_event',200);
                $table->integer('slot_event');
                //foreignkey
                $table->unsignedBigInteger('id_categories');
                $table->unsignedBigInteger('id_admin');
                $table->foreign('id_categories')->references('id_categories')->on('categories')->onUpdate('cascade')->onDelete('cascade');
                $table->foreign('id_admin')->references('id_categories')->on('categories')->onUpdate('cascade')->onDelete('cascade');;
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
        Schema::dropIfExists('events');
    }
}
