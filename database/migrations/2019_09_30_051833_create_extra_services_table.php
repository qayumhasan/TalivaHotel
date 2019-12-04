<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraServicesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('extra_services', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('fheading');
			$table->string('sheading');
			$table->longtext('text');
			$table->string('image')->default('defaultextraserviceimg.jpg');
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
		Schema::dropIfExists('extra_services');
	}
}
