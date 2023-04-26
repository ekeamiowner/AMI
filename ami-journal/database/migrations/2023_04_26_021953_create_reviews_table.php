<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	public function up()
	{
		Schema::create('reviews', function(Blueprint $table) {
			$table->id();
			$table->text('content');
			$table->boolean('public')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('reviews');
	}
}