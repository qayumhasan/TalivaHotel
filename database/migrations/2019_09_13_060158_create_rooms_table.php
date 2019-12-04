<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('rooms', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('room_no');
			$table->string('room_name');
			$table->longText('room_desc');
			$table->integer('room_price');
			$table->integer('room_size');
			$table->integer('room_guest');
			$table->longText('room_amenities');
			$table->string('room_type');
			$table->integer('status')->nullable();
			$table->string('room_img')->default('defaultroomimg.jpg');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('rooms');
	}
}
