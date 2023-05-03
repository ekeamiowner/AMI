<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	public function up()
	{
		Schema::create('reviews', function(Blueprint $table) {
			$table->integer('id', true)->unsigned();
			$table->string('user_id');
			$table->integer('revision_id');
			$table->tinyInteger('state')->nullable()->default(0);
			$table->text('content');
		});
	}

	public function down()
	{
		Schema::drop('reviews');
	}
}