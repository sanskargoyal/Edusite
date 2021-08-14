<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Admin;
use App\Models\Department;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $branches = Branch::get();
        return view('admin.branch')->with(compact('branches', 'admin'));
    }

    public function add_branch(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $departments = Department::where(['status'=>1])->get();
        return view('admin.branch.add_branch')->with(compact('departments', 'admin'));
    }

    public function add_branch_process(Request $request){
        $request->validate([
            'branch_name'=>'required|unique:branches'
        ]);

        $model = new Branch();
        $model->department_id = $request->post('department_id');
        $model->branch_name = $request->post('branch_name');
        $model->description = $request->post('description');
        $model->status = 1;
        $model->save();

        $request->session()->flash('success', 'Branch Inserted');
        return redirect('admin/branch');
    }

    public function status(Request $request, $status, $id){
        $model = Branch::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success', 'Branch status successfully changed');
        return redirect('admin/branch');
    }

    public function delete(Request $request, $id){
        $model = Branch::find(['id'=>$id]);
        $model->delete();
        $request->session()->flash('success', 'Branch deleted');
        return redirect('admin/branch');
    }
}
