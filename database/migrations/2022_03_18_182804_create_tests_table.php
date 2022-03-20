<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('time');
            $table->integer('levelup_id')->nullable();
            $table->integer('topic_id')->nullable();
            $table->timestamps();

            $table->index('levelup_id', 'test_levelup_idx');
            $table->foreign('levelup_id', 'test_levelup_fk')->on('levelups')->references('id');

            $table->index('topic_id', 'test_topic_idx');
            $table->foreign('topic_id', 'test_topic_fk')->on('topics')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
