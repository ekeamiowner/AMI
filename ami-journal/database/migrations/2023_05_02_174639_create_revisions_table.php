<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRevisionsTable extends Migration {

	public function up()
	{
		Schema::create('revisions', function(Blueprint $table) {
			$table->integer('id', true)->unsigned();
			$table->integer('article_id')->unsigned();
			$table->text('note');
			$table->string('pdf_path');
			$table->timestamp('deleted_at')->nullable(null);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('revisions');
	}
}