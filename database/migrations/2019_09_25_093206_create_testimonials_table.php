<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('testimonials', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('user');
			$table->text('testimonial');
			$table->string('image')->default('defaulttestimonialimg.jpg');
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
		Schema::dropIfExists('testimonials');
	}
}
