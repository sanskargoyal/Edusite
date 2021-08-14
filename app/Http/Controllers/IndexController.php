<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Branch;
use App\Models\Contact;
use App\Models\Subject;
use App\Models\Faculty;
use App\Models\Notice;
use App\Models\Examination;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /*Index Function*/
    public function index(){
        $departments = Department::where(['status'=>1])->get();
        $notices = Notice::where(['status'=>1])->get();
        $exams = Examination::where(['status'=>1])->get();
        return view('index')->with(compact('departments', 'notices', 'exams'));
    }

    /*Contact Us Function*/
    public function contact(){
        return view('contact');
    }

    /*Send Contact Details Function*/
    public function send_contact(Request $request){
        $model = new Contact();
        $model->name = $request->post('name');
        $model->email = $request->post('email');
        $model->subject = $request->post('subject');
        $model->message = $request->post('message');
        $model->save();

        $request->session()->flash('success', 'Your query has been submited');
        return redirect('contact');
    }

    /*More Department Function*/
    public function department(){
        $departments = Department::where(['status'=>1])->get();
        return view('department')->with(compact('departments'));
    }

    /*Department Details Function*/
    public function department_details($id){
        $department = Department::where(['id'=>$id])->first();
        $department_id = $department->id;
        $branches = Branch::where(['department_id'=>$department_id, 'status'=>1])->get();
        return view('department_details')->with(compact('department', 'branches'));
    }

    /*Branch Details Function*/
    public function branch_details($id){
        $branch = Branch::where(['id'=>$id])->first();
        $branch_id = $branch->id;
        $subjects = Subject::where(['branch_id'=>$branch_id, 'status'=>1])->get();
        $faculties = Faculty::where(['branch_id'=>$branch_id, 'status'=>1])->get();
        return view('branch_details')->with(compact('branch', 'subjects', 'faculties'));
    }

    /*Faculty Detail Function*/
    public function faculty_details($id){
        $faculty = Faculty::where(['id'=>$id])->first();
        return view('faculty_details')->with(compact('faculty'));
    }

    /*About Us Function*/
    public function about(){
        return view('about');
    }
}
