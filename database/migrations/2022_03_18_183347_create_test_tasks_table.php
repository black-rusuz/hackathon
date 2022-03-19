<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_tasks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('task_id');


            $table->timestamps();

            $table->index('test_id', 'test_task_test_idx');
            $table->index('task_id', 'test_task_task_idx');


            $table->foreign('test_id', 'test_task_test_fk')->on('tests')->references('id');
            $table->foreign('task_id', 'test_task_task_fk')->on('tasks')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_tasks');
    }
}
