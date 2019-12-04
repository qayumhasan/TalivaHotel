<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageOptionRequest;
use App\Model\PageOption;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageOptionController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$pageoptions = PageOption::all();
		return view('back-end.pageoption.pageoptions', compact('pageoptions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.pageoption.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(PageOptionRequest $request) {
		PageOption::insert([
			'email' => $request->email,
			'address' => $request->address,
			'copyright' => $request->copyright,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);
		return redirect()->route('pageoptions.index')->with('msg', 'Header & Footer Option Insert successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\PageOption  $pageOption
	 * @return \Illuminate\Http\Response
	 */
	public function show(PageOption $pageOption) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\PageOption  $pageOption
	 * @return \Illuminate\Http\Response
	 */
	public function edit(PageOption $pageoption) {
		return view('back-end.pageoption.edit', compact('pageoption'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\PageOption  $pageOption
	 * @return \Illuminate\Http\Response
	 */
	public function update(PageOptionRequest $request, PageOption $pageoption) {
		$pageoption->update([
			'email' => $request->email,
			'address' => $request->address,
			'copyright' => $request->copyright,
			'status' => $request->status,
		]);
		return redirect()->route('pageoptions.index')->with('update_msg', 'Header & Footer Option Update successfully');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\PageOption  $pageOption
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(PageOption $pageoption) {
		$pageoption->delete();
		return redirect()->route('pageoptions.index')->with('del_msg', 'Header & Footer Option Delete successfully');
	}
}
