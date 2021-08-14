<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Admin;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $departments = Department::get();
        return view('admin.department')->with(compact('departments', 'admin'));
    }

    public function add_department(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        return view('admin.department.add_department')->with(compact('admin'));
    }
   
    public function add_department_process(Request $request){
        $request->validate([
            'department_name'=>'required|unique:departments'
        ]);

        $model = new Department();
        $model->department_name = $request->post('department_name');
        $model->description = $request->post('description');
        $model->status = 1;
        $model->save();

        $request->session()->flash('success', 'Department Inserted');
        return redirect('admin/department');

    }

    public function status(Request $request, $status, $id){
        $model = Department::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success', 'Department status successfully changed');
        return redirect('admin/department');
    }

    public function delete(Request $request, $id){
        $model = Department::find(['id'=>$id]);
        $model->delete();
        $request->session()->flash('success', 'Department deleted');
        return redirect('admin/department');
    }
}
