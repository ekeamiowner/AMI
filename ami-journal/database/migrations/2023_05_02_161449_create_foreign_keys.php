<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('category_article', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('category_article', function(Blueprint $table) {
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('volume_article', function(Blueprint $table) {
			$table->foreign('volume_id')->references('id')->on('volumes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('volume_article', function(Blueprint $table) {
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reviews', function(Blueprint $table) {
			$table->foreign('user_id')->references('user_id')->on('articles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('category_article', function(Blueprint $table) {
			$table->dropForeign('category_article_category_id_foreign');
		});
		Schema::table('category_article', function(Blueprint $table) {
			$table->dropForeign('category_article_article_id_foreign');
		});
		Schema::table('volume_article', function(Blueprint $table) {
			$table->dropForeign('volume_article_volume_id_foreign');
		});
		Schema::table('volume_article', function(Blueprint $table) {
			$table->dropForeign('volume_article_article_id_foreign');
		});
		Schema::table('reviews', function(Blueprint $table) {
			$table->dropForeign('reviews_user_id_foreign');
		});
	}
}