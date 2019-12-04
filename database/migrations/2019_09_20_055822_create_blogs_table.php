<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('blogs', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('author');
			$table->string('title');
			$table->longText('text');
			$table->string('image')->default('defaultblogimg.jpg');
			$table->integer('view')->default(0);
			$table->integer('status')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('blogs');
	}
}
