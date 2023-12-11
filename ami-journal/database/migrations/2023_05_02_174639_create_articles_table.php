<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->integer('id', true)->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('editor_id')->nullable()->unsigned()->default(null);
			$table->string('title')->nullable();
			$table->text('abstract')->nullable();
			$table->enum('state', array('SUBMITTED', 'UNDER_REVIEW', 'ACCEPTED', 'REJECTED'))->nullable();
			$table->integer('page_count')->nullable()->default(null);
			$table->text('note')->nullable()->default(null);
			$table->string('language')->default('en')->nullable();
			$table->string('doi')->nullable()->default(null);
			$table->text('source')->nullable()->default(null);
			$table->integer('type_id')->unsigned()->nullable();
			$table->string('latex_path')->nullable()->default(null);
			$table->timestamp('deleted_at')->nullable()->default(null);
		}); 
	}

	public function down()
	{
		Schema::drop('articles');
	}
}