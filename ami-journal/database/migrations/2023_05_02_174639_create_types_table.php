<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypesTable extends Migration 
{

	public function up()
	{
		Schema::create('types', function(Blueprint $table) 
		{
			$table->integer('id', true)->unsigned();
			$table->string('name');
			$table->boolean('active')->default(1);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('types');
	}
}