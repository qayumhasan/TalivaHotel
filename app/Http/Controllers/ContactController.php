<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Model\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class ContactController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$contacts = Contact::all();
		return view('back-end.contact.contacts', compact('contacts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.contact.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ContactRequest $request) {

		$contact_id = Contact::insertGetId([
			'address' => $request->address,
			'phone' => $request->phone,
			'email' => $request->email,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		if ($request->hasFile('image')) {
			$contact_img = $request->file('image');
			$imagename = $contact_id . '.' . $contact_img->getClientOriginalExtension();
			Image::make($contact_img)->resize(756, 300)->save(base_path('public/back-end/images/contact/' . $imagename), 100);
			Contact::findOrFail($contact_id)->update([
				'image' => $imagename,
			]);
		}
		return redirect()->route('contact.index')->with('msg', 'Contact Insert Successfully!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function show(Contact $contact) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Contact $contact) {
		return view('back-end.contact.edit', compact('contact'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function update(ContactRequest $request, Contact $contact) {

		$contact->update([
			'address' => $request->address,
			'phone' => $request->phone,
			'email' => $request->email,
			'status' => $request->status,
		]);
		$contact_id = $contact->id;
		if ($request->hasFile('image')) {

			if (Contact::findOrFail($contact_id)->image != 'defaultcontactimg.jpg') {
				$link = base_path('public/back-end/images/contact/') . Contact::findOrFail($contact_id)->image;
				unlink($link);
			}
			$contact_img = $request->file('image');
			$imagename = $contact_id . '.' . $contact_img->getClientOriginalExtension();
			Image::make($contact_img)->resize(756, 300)->save(base_path('public/back-end/images/contact/' . $imagename), 100);
			Contact::findOrFail($contact_id)->update([
				'image' => $imagename,
			]);
		}
		return redirect()->route('contact.index')->with('update_msg', 'Contact Update Successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Contact $contact) {
		$contact_id = $contact->id;
		if (Contact::findOrFail($contact_id)->image != 'defaultcontactimg.jpg') {
			$link = base_path('public/back-end/images/contact/') . Contact::findOrFail($contact_id)->image;
			unlink($link);
		}
		$contact->delete();

		return redirect()->route('contact.index')->with('del_msg', 'Contact Delete Successfully!');
	}
}
