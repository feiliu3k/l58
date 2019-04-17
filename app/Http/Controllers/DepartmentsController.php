<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;

class DepartmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$departments = Department::paginate();
		return view('departments.index', compact('departments'));
	}

    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

	public function create(Department $department)
	{
		return view('departments.create_and_edit', compact('department'));
	}

	public function store(DepartmentRequest $request)
	{
		$department = Department::create($request->all());
		return redirect()->route('departments.show', $department->id)->with('message', 'Created successfully.');
	}

	public function edit(Department $department)
	{
        $this->authorize('update', $department);
		return view('departments.create_and_edit', compact('department'));
	}

	public function update(DepartmentRequest $request, Department $department)
	{
		$this->authorize('update', $department);
		$department->update($request->all());

		return redirect()->route('departments.show', $department->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Department $department)
	{
		$this->authorize('destroy', $department);
		$department->delete();

		return redirect()->route('departments.index')->with('message', 'Deleted successfully.');
	}
}