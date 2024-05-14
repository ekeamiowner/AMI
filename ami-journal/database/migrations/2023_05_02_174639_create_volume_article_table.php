<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolumeArticleTable extends Migration {

	public function up()
	{
		Schema::create('volume_article', function(Blueprint $table) {
			$table->integer('id', true)->unsigned();
			$table->integer('volume_id')->unsigned();
			$table->integer('article_id')->unsigned();
			$table->integer('from_page')->unsigned();
			$table->integer('to_page')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('volume_article');
	}
}