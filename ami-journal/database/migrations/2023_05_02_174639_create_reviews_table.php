<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration 
{

	public function up()
	{
		Schema::create('reviews', function(Blueprint $table) 
		{
			$table->integer('id', true)->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('revision_id')->unsigned();
			$table->enum('state', array('SUBMITTED', 'UNDER_REVIEW', 'ACCEPTED', 'REJECTED'))->nullable();
			$table->text('content')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('reviews');
	}
}