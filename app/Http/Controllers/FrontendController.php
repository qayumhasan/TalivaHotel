<?php

namespace App\Http\Controllers;
use Alert;
use App\Http\Requests\MessageRequest;
use App\Model\About;
use App\Model\Blog;
use App\Model\Contact;
use App\Model\ExtraService;
use App\Model\Message;
use App\Model\Room;
use App\Model\RoomType;
use App\Model\Service;
use App\Model\Slider;
use App\Model\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller {

	/**
	 * Show the application front end  Home Page.
	 *
	 */
	public function homepage() {
		$sliders = Slider::Active()->get();
		$rooms = Room::Active()->get();
		$services = Service::Active()->get();
		$offers = ExtraService::Active()->get();
		$video = Video::Active()->first();
		$roomtypes = RoomType::Active()->get();
		return view('front-end.home.home', compact('sliders', 'rooms', 'services', 'offers', 'video', 'roomtypes'));

	}

	/**
	 * Show the application front end  Home Page.
	 *
	 */

	public function showcontactpage() {
		$contact = Contact::where('status', 1)->first();
		return view('front-end.contact.contact', compact('contact'));
	}

	/**
	 * Show the application Room List  Page.
	 *
	 */

	public function roomlist() {
		$rooms = Room::where('status', 2)->get();
		return view('front-end.room.rooms', compact('rooms'));
	}

	/**
	 * Show the application Room details  Page.
	 *
	 */

	public function roomdetails($id) {
		$roomdetails = Room::where('id', $id)->first();
		return view('front-end.room.roomdetails', compact('roomdetails'));
	}

	/**
	 * Show the application About Us Page.
	 *
	 */

	public function aboutus() {
		$aboutus = About::where('status', 1)->first();
		return view('front-end.about.about', compact('aboutus'));

	}

	/**
	 * Show the application bloglist Page.
	 *
	 */
	public function bloglists() {
		$blogs = Blog::where('status', 1)->get();
		return view('front-end.blogs.blogs', compact('blogs'));
	}

	/**
	 * Send a Message t0 admin via customar.
	 *
	 */
	public function messageSendtoAdmin(MessageRequest $request) {
		Message::insert([
			'name' => $request->name,
			'email' => $request->email,
			'message' => $request->message,
			'created_at' => Carbon::now(),
		]);

		alert()->basic('Your Message was Send Successfully.A Message will sending your email with necessary information.', 'Message Send Successfully!')->autoclose(4000);
		return back();
	}

	/**
	 * Show the messages to admin.
	 *
	 */
	public function getMessages() {
		$messages = Message::all();
		return view('back-end.messages.messages', compact('messages'));
	}

	/**
	 * Get a single message
	 *
	 */
	public function showMessage($id) {
		$message = Message::find($id);
		return view('back-end.messages.single_message_show', compact('message'));

	}

	/**
	 * Single Message Delete
	 *
	 */
	public function deleteMessage($id) {
		Message::find($id)->delete();
		return redirect()->route('messages.index')->with('del_msg', 'Message Delete Successfully!');
	}

	/**
	 * Show all offers in offer page
	 *
	 */

	public function offersList() {
		$offers = ExtraService::where('status', 1)->get();
		return view('front-end.offers.offers', compact('offers'));
	}

	/**
	 * Single offers show
	 *
	 */
	public function offerShow($id) {
		$offer = ExtraService::find($id);
		return view('front-end.offers.single_offer_show', compact('offer'));
	}

	/**
	 * Room Search Area
	 *
	 */
	public function roomsearch(Request $request) {
		$arrival = $request->arrival;
		$departure = $request->departure;
		$today_date = Carbon::now()->format('m/d/Y');

		if ($arrival < $departure) {
			if (Room::max('room_guest') >= $request->room_guest) {
				if ($today_date <= $arrival) {
					$rooms = Room::where('room_type', $request->roomtype)->paginate(6);

					return view('front-end.room.rooms', compact('rooms'));
				} else {
					alert()->warning('You are enter a previous date.', 'OPPS!')->persistent("Close this");
					return back();
				}
			} else {
				alert()->warning('This Number Of beds are not Available Now.', 'Sorry!')->persistent("Close this");
				return redirect('/');
			}
		} else {
			alert()->warning('You are Enter Invlid Date.', 'OPPS!')->persistent("Close this");
			return redirect('/');
		}
	}
}
