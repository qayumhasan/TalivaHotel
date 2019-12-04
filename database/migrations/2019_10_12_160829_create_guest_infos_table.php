<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestInfosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('guest_infos', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->ipAddress('customar_ip');
			$table->integer('booking_id');
			$table->string('fname');
			$table->string('lname');
			$table->string('email');
			$table->string('phone_no');
			$table->text('address');
			$table->string('country');
			$table->string('postcode');
			$table->string('town_city');
			$table->integer('payment_method');
			$table->string('image')->default('defaultuserimages.jpg');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('guest_infos');
	}
}
