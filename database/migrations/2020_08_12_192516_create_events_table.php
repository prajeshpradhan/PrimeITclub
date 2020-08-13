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
            $table->id();
            $table->text('name');
            $table->date('date');
            $table->time('time');
            $table->text('resource_person');
            $table->mediumText('resource_person_pic');
            $table->text('resource_person_designation');
            $table->mediumText('description');
            $table->mediumText('banner_image');
            $table->text('price');
            $table->longText('content')->nullable();
            $table->foreignId('category_id')->constrained();

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
