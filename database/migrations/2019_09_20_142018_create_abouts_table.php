<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('abouts', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title');
			$table->string('stitle');
			$table->text('text');
			$table->string('image')->default('defaultaboutimg.jpg');
			$table->boolean('status')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('abouts');
	}
}
