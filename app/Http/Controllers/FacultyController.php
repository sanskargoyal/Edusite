<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Department;
use App\Models\Branch;
use App\Models\Admin;
use App\Models\Lecture;
use App\Models\Subject;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $faculties = Faculty::get();
        return view('admin.faculty')->with(compact('faculties', 'admin'));
    }

    public function add_faculty(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $departments = Department::where(['status'=>1])->get();
        $branches = Branch::where(['status'=>1])->get();
        return view('admin.faculty.add_faculty')->with(compact('departments', 'branches', 'admin'));
    }

    public function add_faculty_process(Request $request){
        $request->validate([
            'email'=>'required|unique:faculties',
            'phone'=>'required|unique:faculties'
        ]);

        $model = new Faculty();
        $model->fname = $request->post('fname');
        $model->lname = $request->post('lname');
        $model->gender = $request->post('gender');
        $model->email = $request->post('email');
        $model->phone = $request->post('phone');
        $model->dob = $request->post('dob');
        $model->department_id = $request->post('department_id');
        $model->branch_id = $request->post('branch_id');
        $model->address = $request->post('address');
        $model->status = 1;
        $model->save();

        $request->session()->flash('success', 'Faculty Inserted');
        return redirect('admin/faculty');
    }

    public function view_faculty($id){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $faculty = Faculty::where(['id'=>$id])->first();
        return view('admin.faculty.view_faculty')->with(compact('faculty', 'admin'));
    }

    public function edit_faculty($id){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $faculty = Faculty::where(['id'=>$id])->first();
        $departments = Department::where(['status'=>1])->get();
        $branches = Branch::where(['status'=>1])->get();
        return view('admin.faculty.edit_faculty')->with(compact('faculty', 'departments', 'branches', 'admin'));
    }

    public function update_faculty(Request $request, $id){
        Faculty::where(['id'=>$id])->update(['fname'=>$request->post('fname'), 'lname'=>$request->post('lname'), 'gender'=>$request->post('gender'), 'email'=>$request->post('email'),'phone'=>$request->post('phone'),'dob'=>$request->post('dob'),'department_id'=>$request->post('department_id'),'branch_id'=>$request->post('branch_id'),'address'=>$request->post('address')]);
        $request->session()->flash('success', 'Faculty updated');
        return redirect('admin/faculty');
    }

    public function status(Request $request, $status, $id){
        $model = Faculty::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success', 'Faculty status successfully changed');
        return redirect('admin/faculty');
    }

    public function delete(Request $request, $id){
        $model = Faculty::find(['id'=>$id]);
        $model->delete();
        $request->session()->flash('success', 'Faculty deleted');
        return redirect('admin/faculty');
    }
}
