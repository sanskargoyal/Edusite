<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Department;
use App\Models\Branch;
use App\Models\Subject;
use App\Models\Admin;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $lectures = Lecture::get();
        return view('admin.lecture')->with(compact('lectures', 'admin'));
    }

    public function add_lecture(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $departments = Department::where(['status'=>1])->get();
        $branches = Branch::where(['status'=>1])->get();
        $subjects = Subject::where(['status'=>1])->get();
        return view('admin.lecture.add_lecture')->with(compact('branches', 'departments', 'subjects', 'admin'));
    }

    public function add_lecture_process(Request $request){

        $model = new Lecture();
        $model->department_id = $request->post('department_id');
        $model->branch_id = $request->post('branch_id');
        $model->subject_id = $request->post('subject_id');
        $model->topic = $request->post('topic');

        if($request->hasfile('lecture_video')){
            $lecture_video = $request->file('lecture_video');
            $ext = $lecture_video->extension();
            $lecture_video_name = time().'.'.$ext;
            $lecture_video->storeAs('/public/media', $lecture_video_name);
            $model->lecture_video = $lecture_video_name;
        }
        $model->status = 1;
        $model->save();

        $request->session()->flash('success', 'Lecture Inserted');
        return redirect('admin/lecture');
    }

    public function status(Request $request, $status, $id){
        $model = Lecture::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success', 'Lecture status successfully changed');
        return redirect('admin/lecture');
    }

    public function delete(Request $request, $id){
        $model = Lecture::find(['id'=>$id]);
        $model->delete();
        $request->session()->flash('success', 'Lecture deleted');
        return redirect('admin/lecture');
    }
}
