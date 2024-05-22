<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryArticleTable extends Migration 
{

	public function up()
	{
		Schema::create('category_article', function(Blueprint $table) 
		{
			$table->integer('category_id')->unsigned();
			$table->integer('article_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('category_article');
	}
}