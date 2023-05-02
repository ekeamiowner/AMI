<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevisionsTable extends Migration {

	public function up()
	{
		Schema::create('revisions', function(Blueprint $table) {
			$table->integer('id', true);
			$table->string('article_id');
			$table->text('note');
			$table->string('pdf_path');
			$table->timestamp('deleted_at')->nullable(null);
		});
	}

	public function down()
	{
		Schema::drop('revisions');
	}
}