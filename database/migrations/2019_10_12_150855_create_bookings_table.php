<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('bookings', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('booking_no');
			$table->integer('room_id');
			$table->string('arrival');
			$table->string('departure');
			$table->integer('guest_no');
			$table->integer('room_type');
			$table->integer('status')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('bookings');
	}
}
