<?php

namespace App\Http\Controllers;

use App\Model\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DepartmentController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$departments = Department::all();
		return view('back-end.department.departments', compact('departments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.department.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$request->validate(
			[
				'name' => 'required|unique:departments',
			],
			[
				'name.required' => 'Department Name must not be empty!',
			]

		);

		Department::insert([

			'name' => $request->name,
			'status' => $request->status,
			'created_at' => Carbon::now(),

		]);
		return redirect()->route('department.index')->with('msg', 'Department Insert successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Department  $department
	 * @return \Illuminate\Http\Response
	 */
	public function show(Department $department) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Department  $department
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Department $department) {
		return view('back-end.department.edit', compact('department'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Department  $department
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Department $department) {
		$request->validate(
			[
				'name' => 'required|unique:departments,name,' . $department->id,
			],
			[
				'name.required' => 'Department Name must not be empty!',
			]

		);
		$department->update([
			'name' => $request->name,
			'status' => $request->status,
		]);

		return redirect()->route('department.index')->with('update_msg', 'Department Update successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Department  $department
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Department $department) {
		$department->delete();
		return redirect()->route('department.index')->with('del_msg', 'Department Delete successfully!');

	}
}
