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
          $table->string('id')->primary();
          $table->string('full_name');
          $table->string('email');
          $table->string('password');
          $table->string('remember_token');
          $table->integer('appointed_as_reviwer')->default(0);
          $table->integer('accepted_reviewer')->default(0);
          $table->integer('completed_review')->default(0);
          $table->timestamp('deteled_at')->default(null);
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
