<?php

namespace App\Http\Controllers;
use App\Http\Requests\GuestinfoRequest;
use App\Model\Booking;
use App\Model\GuestInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Stripe;

class BookingController extends Controller {

	/**
	 * Insert Booking information to database.
	 *
	 */
	public function bookinginfo(Request $request) {
		$arrival = $request->arrival;
		$departure = $request->departure;
		$today_date = Carbon::now()->format('m/d/Y');

		if ($arrival < $departure) {
			if ($today_date <= $arrival) {
				$booking_id = Booking::insertGetId([
					'booking_no' => rand(5, 15),
					'room_id' => $request->room_id,
					'arrival' => $arrival,
					'departure' => $departure,
					'guest_no' => $request->guest_no,
					'room_type' => $request->room_type,
					'created_at' => Carbon::now(),
				]);
			} else {
				alert()->warning('You are Enter priveus date.', 'OPPS!')->persistent("Close this");
				return back();
			}
		} else {
			alert()->warning('You are Enter Invlid Date.', 'OPPS!')->persistent("Close this");
			return back();
		}

		$bookinginfo = Booking::where('id', $booking_id)->first();
		// return view('front-end.booking.guestinfo', compact('bookinginfo'));
		return redirect()->route('guest.form');

	}

	// Show to guest create form

	public function guestcreateform() {
		if (!isset($_SERVER['HTTP_REFERER'])) {
			alert()->warning('Sory! Direct URL access is forbident.', 'OPPS!')->persistent("Close this");
			return redirect('/');
		} else {
			$bookinginfo = Booking::where('id', 15)->first();
			return view('front-end.booking.guestinfo', compact('bookinginfo'));
		}

	}

	/**
	 * Insert Guest information to database.
	 *
	 */

	public function guestcreate(GuestinfoRequest $request) {
		$guest_id = GuestInfo::insertGetId([
			'booking_id' => $request->booking_id,
			'customar_ip' => $_SERVER['REMOTE_ADDR'],
			'fname' => $request->fname,
			'lname' => $request->lname,
			'email' => $request->email,
			'phone_no' => $request->phone_no,
			'address' => $request->address,
			'country' => $request->country,
			'postcode' => $request->postcode,
			'town_city' => $request->town_city,
			'payment_method' => $request->payment_method,
			'created_at' => Carbon::now(),
		]);

		if ($request->hasFile('image')) {
			$user_img = $request->file('image');
			$imagename = $guest_id . '.' . $user_img->getClientOriginalExtension();
			Image::make($user_img)->resize(320, 240)->save(base_path('public/back-end/images/guest/' . $imagename), 50);

			GuestInfo::findOrFail($guest_id)->update([
				'image' => $imagename,
			]);
		}

		$bookinginfo = Booking::where('id', $request->booking_id)->first();
		$guestinfo = GuestInfo::where('id', $guest_id)->first();

		if ($request->payment_method == 3) {
			return view('front-end.booking.booking_details', compact('bookinginfo', 'guestinfo'));
		}
	}

	/**
	 * show Guest information in admin panal.
	 *
	 */

	public function guestinfo() {
		$guestinfos = GuestInfo::all();

		return view('back-end.guests.guests', compact('guestinfos'));
	}

	/**
	 * Guest information in delete.
	 *
	 */

	public function guestdestroy($id) {
		if (GuestInfo::findOrFail($id)->image != 'defaultuserimages.jpg') {

			$link = base_path('public/back-end/images/guest/') . GuestInfo::findOrFail($id)->image;
			unlink($link);

		}

		GuestInfo::findOrFail($id)->delete();
		return redirect()->route('guest.info')->with('del_msg', 'Guest Delete Successfully!');
	}

	/**
	 * Single Guest information in show.
	 *
	 */

	public function guestshow($id) {
		$guestinfo = GuestInfo::findOrFail($id);
		return view('back-end.guests.guest_show', compact('guestinfo'));
	}

	/**
	 * All booking information are show.
	 *
	 */
	public function getbookinginfo() {
		$bookinginfos = Booking::where('status', 1)->get();
		return view('back-end.bookings.bookings', compact('bookinginfos'));
	}

	/**
	 * Stripe Payment form.
	 *
	 */
	public function stripePayment() {
		return view('front-end.payments.stripe_payment_method');
	}

	/**
	 * Stripe Payment.
	 *
	 */
	public function stripePost(Request $request) {
		Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
		Stripe\Charge::create([
			"amount" => 100 * 100,
			"currency" => "usd",
			"source" => $request->stripeToken,
			"description" => "Test payment from itsolutionstuff.com.",
		]);

		return redirect('/');
	}
}
