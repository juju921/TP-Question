<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
            $table->integer('id')->unsigned();// non autoincrémenté pour pouvoir gérer les id dans les seeds et tests
            $table->string('title', 200);
            $table->string('content', 200);
            $table->enum('class_level', ['facile', 'moyen', 'difficile'])->nullable();
            $table->enum('status',['publish','unpublish'])->default('unpublish');

            $table->timestamps();
            $table->primary('id');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questions');
	}

}
