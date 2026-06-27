<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        //dd('Hola desde EmployeeController');
        return view('employees.index');
    }

    //Listado por ID ascendente byId
    public function byId()
    {
        $employees = Employee::orderBy('emp_id')->get();
        return view('employees.index', compact('employees'));
    }
    //Listado por apellidos y nombre byLastName
    public function byLastName()
    {
        $employees = Employee::orderBy('emp_lastname')->orderBy('emp_lastname')->orderBy('emp_firstname')->get();
        return view('employees.index', compact('employees'));
    }
    //Subconjunto por letra inicial del apellido lastNameStartsWith
    public function lastNameStartsWith(string $letter)
    {
        $employees = Employee::where('emp_lastname', 'LIKE', $letter . '%')->orderBy('emp_lastname')->orderBy('emp_firstname')->get();
        //$usuarios = User::where('name', 'LIKE', 'M%')->get();
        return view('employees.index', compact('employees'));
    }
    //Subconjunto por año de nacimiento bornIn
    public function bornIn(string $year)
    {
        $employees = Employee::whereBetween('emp_birth_date', 
        [$year . '-01-01', $year . '-12-31'] )->orderBy('emp_lastname')->orderBy('emp_firstname')->get();

        return view('employees.index', compact('employees'));

    }
}
