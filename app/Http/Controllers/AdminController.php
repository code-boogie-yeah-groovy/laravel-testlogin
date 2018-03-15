<?php

namespace App\Http\Controllers;








use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Employee;

class AdminController extends Controller
{
    public function registerIndex() {
        $employees = Employee::all();
        $admins = DB::table('admin')->get();
        return view('admin.adminregister')->with(['employees' => $employees, 'admins' => $admins]);
    }

    public function makeAdmin($id) {
        DB::table('admin')->insert(['emp_id' => $id]);
        return back();
    }
}
