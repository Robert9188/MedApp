<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\AddPersonnel;
use App\Http\Requests\Employee\AddPersonnelRequest;
use App\Models\Employee;
use App\Models\Role;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
//        $role = Role::where('name','admin')->get();

//        dd($role);

//        dd(Auth::guard('employee')->user()->allPermissions());
//        dd(Auth::guard('employee')->user()->hasRole(2));

        $employees = Employee::latest()->get();

        return view('admin.dashboard.profile.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name', '!=' ,'admin')->get();
        $services = Service::all();

        return view('admin.dashboard.profile.create', [
            'roles' => $roles,
            'services' => $services,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AddPersonnelRequest $request)
    {

        $request->validate([
            'email' => 'required|string|email|max:255|unique:employees',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $request->addPersonnel();

//       Return temporaire

        return redirect()->route('employee.profiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('admin.dashboard.profile.show', [
            'employee' => $employee,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $roles = Role::where('name', '!=' ,'admin')->get();
        $services = Service::all();

        return view('admin.dashboard.profile.edit', [
            'employee' => $employee,
            'roles' => $roles,
            'services' => $services,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(AddPersonnelRequest $request, Employee $employee)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);
        $request->updatePersonnel($employee);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->detachRoles($employee->roles);

        $employee->delete();

        return redirect()->route('employee.profiles');
    }
}
