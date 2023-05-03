<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('editor_id')->nullable()->default(null)->unsigned();
			$table->string('title');
			$table->text('abstract');
			$table->enum('state', array('SUBMITTED', 'UNDER_REVIEW', 'ACCEPTED', 'REJECTED'));
			$table->integer('page_count')->nullable()->default(null);
			$table->text('note')->nullable()->default(null);
			$table->string('language')->default('en');
			$table->string('doi')->nullable()->default(null);
			$table->text('source')->nullable()->default(null);
			$table->integer('type_id')->unsigned();
			$table->string('latex_path')->nullable()->default(null);
			$table->timestamp('deleted_at')->nullable()->default(null);
		});
	}

	public function down()
	{
		Schema::drop('articles');
	}
}