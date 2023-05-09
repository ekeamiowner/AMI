<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	public function up()
	{
		Schema::create('reviews', function(Blueprint $table) {
			$table->integer('id', true)->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('revision_id')->unsigned();
			$table->tinyInteger('state')->nullable()->default(0);
			$table->text('content');
		});
	}

	public function down()
	{
		Schema::drop('reviews');
	}
}