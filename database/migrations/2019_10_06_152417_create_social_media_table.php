<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('social_media', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('facebook')->nullable()->unique();
			$table->string('twitter')->nullable()->unique();
			$table->string('instagram')->nullable()->unique();
			$table->string('youtube')->nullable()->unique();
			$table->string('google_pluse')->nullable()->unique();
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
		Schema::dropIfExists('social_media');
	}
}
