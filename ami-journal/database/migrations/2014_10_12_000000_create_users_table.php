<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
          $table->integer('id',true)->unsigned();
          $table->string('name');
          $table->string('email');
          $table->string('password');
          $table->string('remember_token')->nullable();
          $table->integer('accepted_reviewer')->default(0);
          $table->integer('completed_review')->default(0);
          $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
