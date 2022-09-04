<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employee = Employee::all();
        return view('employees.index', compact('employee'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->names = $request->post('names');
        $employee->surnames = $request->post('surnames');
        $employee->position = $request->post('position');
        $employee->birth_date = $request->post('birth_date');
        $employee->num_document = $request->post('num_document');
        $employee->email = $request->post('email');
        $employee->phone = $request->post('phone');
        $employee->save();
        return redirect()->route('employees.index')->with('success', 'Successfully added');
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.delete', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->names = $request->post('names');
        $employee->surnames = $request->post('surnames');
        $employee->position = $request->post('position');
        $employee->birth_date = $request->post('birth_date');
        $employee->num_document = $request->post('num_document');
        $employee->email = $request->post('email');
        $employee->phone = $request->post('phone');
        $employee->update();
        return redirect()->route('employees.index')->with('success', 'Successfully updated');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Successfully deleted');
    }
}
