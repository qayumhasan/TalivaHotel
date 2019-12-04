<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('logos', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('main_logo')->default('defaullogomainimg.jpg');
			$table->string('footer_logo')->default('defaulfooterlogoimg.jpg');
			$table->string('favicon')->default('defaulfaviconimg.jpg');
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
		Schema::dropIfExists('logos');
	}
}
