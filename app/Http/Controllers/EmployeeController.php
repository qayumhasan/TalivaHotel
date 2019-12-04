<?php

namespace App\Http\Controllers;

use App\Model\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class EmployeeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$employees = Employee::all();
		return view('back-end.employee.employees', compact('employees'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.employee.create');
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
				'name' => 'required',
				'department' => 'required',
				'image' => 'image',
			],
			[
				'name.required' => 'Employee Name must not be empty!',
			]

		);

		// Employee data Insert

		$employee_id = Employee::insertGetId([
			'name' => $request->name,
			'department' => $request->department,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		// Empoyee image data insert

		if ($request->hasFile('image')) {
			$employee_img = $request->file('image');
			$imagename = $employee_id . '.' . $employee_img->getClientOriginalExtension();
			Image::make($employee_img)->resize(756, 700)->save(base_path('public/back-end/images/employee/' . $imagename), 50);
			Employee::findOrFail($employee_id)->update([
				'image' => $imagename,
			]);
		}
		return redirect()->route('employee.index')->with('msg', 'Employee Insert Successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Employee  $employee
	 * @return \Illuminate\Http\Response
	 */
	public function show(Employee $employee) {

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Employee  $employee
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Employee $employee) {
		return view('back-end.employee.edit', compact('employee'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Employee  $employee
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Employee $employee) {
		$request->validate(
			[
				'name' => 'required',
				'department' => 'required',
				'image' => 'image',
			],
			[
				'name.required' => 'Employee Name must not be empty!',
			]

		);

		// Update Employee data

		$employee->update([
			'name' => $request->name,
			'department' => $request->department,
			'status' => $request->status,
		]);

		// Update Employee Image data
		$employee_id = $employee->id;
		if ($request->hasFile('image')) {
			if (Employee::findOrFail($employee_id)->image != 'defaultemployeeimg.jpg') {
				$link = base_path('public/back-end/images/employee/') . Employee::findOrFail($employee_id)->image;
				unlink($link);
			}
			$employee_img = $request->file('image');
			$imagename = $employee_id . '.' . $employee_img->getClientOriginalExtension();
			Image::make($employee_img)->resize(756, 700)->save(base_path('public/back-end/images/employee/' . $imagename), 50);

			Employee::findOrFail($employee_id)->update([
				'image' => $imagename,
			]);
		}
		return redirect()->route('employee.index')->with('update_msg', 'Employee Update Successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Employee  $employee
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Employee $employee) {
		if (Employee::findOrFail($employee->id)->image != 'defaultemployeeimg.jpg') {
			$link = base_path('public/back-end/images/employee/') . Employee::findOrFail($employee->id)->image;
			unlink($link);
		}
		$employee->delete();
		return redirect()->route('employee.index')->with('del_msg', 'Employee Information Delete Successfully!');
	}
}
