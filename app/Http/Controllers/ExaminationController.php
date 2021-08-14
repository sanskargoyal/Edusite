<?php

namespace App\Http\Controllers;

use App\Models\Examination;
use App\Models\Department;
use App\Models\Branch;
use App\Models\Subject;
use App\Models\Admin;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function index()
    {
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $exams = Examination::get();
        return view('admin.exam')->with(compact('exams', 'admin'));
    }

    public function add_exam(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $departments = Department::where(['status'=>1])->get();
        $branches = Branch::where(['status'=>1])->get();
        $subjects = Subject::where(['status'=>1])->get();
        return view('admin.exam.add_exam')->with(compact('departments', 'branches', 'subjects', 'admin'));
    }
   
    public function add_exam_process(Request $request){

        $model = new Examination();
        $model->department_id = $request->post('department_id');
        $model->branch_id = $request->post('branch_id');
        $model->subject_id = $request->post('subject_id');
        $model->exam_name = $request->post('exam_name');
        $model->start_date = $request->post('start_date');
        $model->deadline = $request->post('deadline');
        $model->start_time = $request->post('start_time');
        $model->end_time = $request->post('end_time');
        $model->pass_mark = $request->post('pass_mark');
        $model->re_exam = $request->post('re_exam');
        $model->terms = $request->post('terms');

        $model->status = 1;
        $model->save();

        $request->session()->flash('success', 'Exam Inserted');
        return redirect('admin/exam');

    }

    public function edit_exam($id){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $exam = Examination::where(['id'=>$id])->first();
        $departments = Department::where(['status'=>1])->get();
        $branches = Branch::where(['status'=>1])->get();
        $subjects = Subject::where(['status'=>1])->get();
        return view('admin.exam.edit_exam')->with(compact('exam', 'departments', 'branches', 'subjects', 'admin'));
    }

    public function update_exam(Request $request, $id){
        Examination::where(['id'=>$id])->update(['department_id'=>$request->post('department_id'), 'branch_id'=>$request->post('branch_id'), 'subject_id'=>$request->post('subject_id'), 'exam_name'=>$request->post('exam_name'),'start_date'=>$request->post('start_date'),'deadline'=>$request->post('deadline'),'start_time'=>$request->post('start_time'),'end_time'=>$request->post('end_time'),'pass_mark'=>$request->post('pass_mark'),'re_exam'=>$request->post('re_exam'),'terms'=>$request->post('terms')]);
        $request->session()->flash('success', 'Exam updated');
        return redirect('admin/exam');
    }

    public function status(Request $request, $status, $id){
        $model = Examination::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success', 'Examination status successfully changed');
        return redirect('admin/exam');
    }

    public function delete(Request $request, $id){
        $model = Examination::find(['id'=>$id]);
        $model->delete();
        $request->session()->flash('success', 'Exam deleted');
        return redirect('admin/exam');
    }
}
