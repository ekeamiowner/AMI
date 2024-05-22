<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisionsTable extends Migration 
{

	public function up()
	{
		Schema::create('revisions', function(Blueprint $table) 
		{
			$table->integer('id', true)->unsigned();
			$table->integer('article_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('revisions');
	}
}