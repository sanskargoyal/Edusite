<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Department;
use App\Models\Branch;
use App\Models\Admin;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $subjects = Subject::get();
        return view('admin.subject')->with(compact('subjects', 'admin'));
    }

    public function add_subject(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $departments = Department::where(['status'=>1])->get();
        $branches = Branch::where(['status'=>1])->get();
        return view('admin.subject.add_subject')->with(compact('branches', 'departments', 'admin'));
    }

    public function add_subject_process(Request $request){

        $model = new Subject();
        $model->department_id = $request->post('department_id');
        $model->branch_id = $request->post('branch_id');
        $model->subject_name = $request->post('subject_name');
        $model->description = $request->post('description');
        $model->status = 1;
        $model->save();

        $request->session()->flash('success', 'Subject Inserted');
        return redirect('admin/subject');
    }

    public function status(Request $request, $status, $id){
        $model = Subject::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success', 'Subject status successfully changed');
        return redirect('admin/subject');
    }

    public function delete(Request $request, $id){
        $model = Subject::find(['id'=>$id]);
        $model->delete();
        $request->session()->flash('success', 'Subject deleted');
        return redirect('admin/subject');
    }
}
