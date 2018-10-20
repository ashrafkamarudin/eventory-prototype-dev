<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('slug');
            $table->integer('user_id', false, true)->length(10);
            $table->string('title');
            $table->longText('content');
            $table->string('image', 50)->nullable();
            $table->text('seo')->nullable();
            $table->string('keyword')->nullable();
            $table->date('start_at');
            $table->date('end_at');
            $table->tinyInteger('status', false, true)->length(2);
            $table->integer('view', false, true)->length(10)->nullable();
            $table->string('plugin')->nullable();
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
