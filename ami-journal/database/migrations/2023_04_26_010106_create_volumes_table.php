<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolumesTable extends Migration {

	public function up()
	{
		Schema::create('volumes', function(Blueprint $table) {
			$table->id();
			$table->string('title_str')->nullable();
			$table->year('release_year');
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('volumes');
	}
}