<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
		
		    $table->integer('id_task');
		    $table->integer('id_category');
		    $table->integer('id_user');
		    $table->string('title', 255);
		    $table->text('description');
		    $table->date('due_date');
		    $table->enum('statut', ['todo', 'ongoing', 'done']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
