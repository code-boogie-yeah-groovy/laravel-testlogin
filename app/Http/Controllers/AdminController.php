<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Employee;
use App\Admin;

class AdminController extends Controller
{
    public function registerIndex() {
        $employees = Employee::all();
        $admins = Admin::all();
        return view('admin.adminregister')->with(['employees' => $employees, 'admins' => $admins]);
    }

    public function makeAdmin($id) {
        $admin = new Admin;
        $admin->emp_id = $id;
        $admin->save();
        return back();
    }

    public function removeAdmin($id) {
        Admin::where('emp_id', $id)->delete();
        return back();
    }
}
