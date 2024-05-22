<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration 
{

	public function up()
	{
		Schema::table('articles', function(Blueprint $table) 
		{
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('articles', function(Blueprint $table) 
		{
			$table->foreign('editor_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('articles', function(Blueprint $table) 
		{
			$table->foreign('type_id')->references('id')->on('types')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('revisions', function(Blueprint $table) 
		{
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('category_article', function(Blueprint $table) 
		{
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('category_article', function(Blueprint $table) 
		{
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('volume_article', function(Blueprint $table) 
		{
			$table->foreign('volume_id')->references('id')->on('volumes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('volume_article', function(Blueprint $table) 
		{
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reviews', function(Blueprint $table) 
		{
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reviews', function(Blueprint $table) 
		{
			$table->foreign('revision_id')->references('id')->on('revisions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('articles', function(Blueprint $table) 
		{
			$table->dropForeign('articles_user_id_foreign');
		});
		Schema::table('articles', function(Blueprint $table) 
		{
			$table->dropForeign('articles_editor_id_foreign');
		});
		Schema::table('articles', function(Blueprint $table) 
		{
			$table->dropForeign('articles_type_id_foreign');
		});
		Schema::table('revisions', function(Blueprint $table) 
		{
			$table->dropForeign('revisions_article_id_foreign');
		});
		Schema::table('category_article', function(Blueprint $table) 
		{
			$table->dropForeign('category_article_category_id_foreign');
		});
		Schema::table('category_article', function(Blueprint $table) 
		{
			$table->dropForeign('category_article_article_id_foreign');
		});
		Schema::table('volume_article', function(Blueprint $table) 
		{
			$table->dropForeign('volume_article_volume_id_foreign');
		});
		Schema::table('volume_article', function(Blueprint $table) 
		{
			$table->dropForeign('volume_article_article_id_foreign');
		});
		Schema::table('reviews', function(Blueprint $table) 
		{
			$table->dropForeign('reviews_user_id_foreign');
		});
		Schema::table('reviews', function(Blueprint $table) 
		{
			$table->dropForeign('reviews_revision_id_foreign');
		});
	}
}