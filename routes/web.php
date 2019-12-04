<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use App\Mail\BookinginfoEmailable;
Route::get('/', 'FrontendController@homepage');

Route::get('/contact/page', 'FrontendController@showcontactpage')->name('contact.page');
Route::post('/message/send', 'FrontendController@messageSendtoAdmin')->name('message.send');

Route::view('/admin', 'back-end.master');

Route::get('/rooms', 'FrontendController@roomlist')->name('room.list');

Route::get('/room/{id}/details', 'FrontendController@roomdetails')->name('room.details');
Route::post('/room/search', 'FrontendController@roomsearch')->name('room.search');

Route::get('/about/us', 'FrontendController@aboutus')->name('about.us');

Route::get('/blog/lists', 'FrontendController@bloglists')->name('blog.lists');

// ghhjkfdsjakhf dsafjkdshaklf dshakjfds afhkjsdlafh
// fsaddfldshlkaf sdafjhkdsfhdsfhjds afjdsafhdsafhdsa

Route::post('/insert/booking/info', 'BookingController@bookinginfo')->name('booking.info');
Route::get('/guest/create', 'BookingController@guestcreateform')->name('guest.form');

Route::post('/insert/personal/info', 'BookingController@guestcreate')->name('guest.create');

Route::get('/admin/guests/info', 'BookingController@guestinfo')->name('guest.info');

Route::get('/admin/guest/{id}/destroy', 'BookingController@guestdestroy')->name('guestinfo.destroy');

Route::get('/admin/guest/{id}/show', 'BookingController@guestshow')->name('guestinfo.show');

Route::get('/admin/booking/info', 'BookingController@getbookinginfo')->name('book.info');

// fsadhfksdahfk dsafhkdshafhdsafhdsafhsd
// sdafdslafhkdshfkjdshfhdsfkdshjfhdsfhhfd

Route::get('/payment/{id}/stripe', 'BookingController@stripePayment')->name('stripe.post');
Route::post('/stripe/post', 'BookingController@stripePost')->name('stripe.get');

Route::get('/messages', 'FrontendController@getMessages')->name('messages.index');
Route::get('/message/{id}/show', 'FrontendController@showMessage')->name('message.show');
Route::get('/message/{id}/delete', 'FrontendController@deleteMessage')->name('message.delete');

Route::get('/offers', 'FrontendController@offersList')->name('offers.list');
Route::get('/offer/{id}/show', 'FrontendController@offerShow')->name('offer.show');

Route::resources([
	'room' => 'RoomController',
	'roomtype' => 'RoomTypeController',
	'amenitie' => 'AmenitieController',
	'employee' => 'EmployeeController',
	'department' => 'DepartmentController',
	'slider' => 'SliderController',
	'service' => 'ServiceController',
	'contact' => 'ContactController',
	'blog' => 'BlogController',
	'about' => 'AboutController',
	'video' => 'VideoController',
	'testimonial' => 'TestimonialController',
	'extraservices' => 'ExtraServiceController',
	'logos' => 'LogoController',
	'pageoptions' => 'PageOptionController',
	'socialmedias' => 'SocialMediaController',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('sendmail', function () {
	Mail::to('dev.qayumhasan@gmail.com')->send(new BookinginfoEmailable());
});
