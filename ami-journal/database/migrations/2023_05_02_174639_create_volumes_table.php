<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolumesTable extends Migration {

	public function up()
	{
		Schema::create('volumes', function(Blueprint $table) {
			$table->integer('id', true)->unsigned();
			$table->string('title')->nullable()->default(null);
			$table->text('description');
			$table->year('release_year');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('volumes');
	}
}