<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeCollection;
use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\EmployeeCollection
     */
    public function test(Request $request)
    {
        $employee = Employee::find($request->id);

        return new EmployeeCollection($employee);
    }
}