<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Department;
use App\Models\Branch;
use App\Models\Faculty;
use App\Models\Subject;
use App\Models\Lecture;
use App\Models\Admin;
use App\Models\Examination;
use App\Models\Question;
use App\Models\Notice;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $students = Student::get();
        return view('admin.student')->with(compact('students', 'admin'));
    }

    public function add_student(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $departments = Department::where(['status'=>1])->get();
        $branches = Branch::where(['status'=>1])->get();
        return view('admin.student.add_student')->with(compact('departments', 'branches', 'admin'));
    }

    public function add_student_process(Request $request){
        $request->validate([
            'email'=>'required|unique:students',
            'phone'=>'required|unique:students'
        ]);

        $model = new Student();
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

        $request->session()->flash('success', 'Student Inserted');
        return redirect('admin/student');
    }

    public function view_student($id){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $student = Student::where(['id'=>$id])->first();
        return view('admin.student.view_student')->with(compact('student', 'admin'));
    }

    public function edit_student($id){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $student = Student::where(['id'=>$id])->first();
        $departments = Department::where(['status'=>1])->get();
        $branches = Branch::where(['status'=>1])->get();
        return view('admin.student.edit_student')->with(compact('student', 'departments', 'branches', 'admin'));
    }

    public function update_student(Request $request, $id){
        Student::where(['id'=>$id])->update(['fname'=>$request->post('fname'), 'lname'=>$request->post('lname'), 'gender'=>$request->post('gender'), 'email'=>$request->post('email'),'phone'=>$request->post('phone'),'dob'=>$request->post('dob'),'department_id'=>$request->post('department_id'),'branch_id'=>$request->post('branch_id'),'address'=>$request->post('address')]);
        $request->session()->flash('success', 'Student updated');
        return redirect('admin/student');
    }

    public function status(Request $request, $status, $id){
        $model = Student::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success', 'Student status successfully changed');
        return redirect('admin/student');
    }

    public function delete(Request $request, $id){
        $model = Student::find(['id'=>$id]);
        $model->delete();
        $request->session()->flash('success', 'Student deleted');
        return redirect('admin/student');
    }
    public function student_login(){
        return view('student.login');
    }

    public function auth(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');

        $result = Student::where(['email'=>$email, 'password'=>$password])->get();

        if(isset($result[0]->id)){
            $request->session()->put('STUDENT_LOGIN', true);
            $request->session()->put('STUDENT_ID', $result[0]->id);
            return redirect('student/dashboard');
        }else{
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('student');
        }
    }

    /*Dashboard Function*/
    public function dashboard(){
        $id = session('STUDENT_ID');
        $student = Student::where(['id'=>$id])->first();
        $branch_id = $student->branch_id;
        $ts = Student::where(['branch_id'=>$branch_id])->count();
        $te = Examination::where(['branch_id'=>$branch_id])->count();
        $tsu = Subject::where(['branch_id'=>$branch_id])->count();
        $tf = Faculty::where(['branch_id'=>$branch_id])->count();
        $notices = Notice::where(['status'=>1])->get();
        return view('student.dashboard')->with(compact('student', 'ts', 'te', 'tsu', 'tf', 'notices'));
    }

    /*Classmate Function*/
    public function classmate(){
        $id = session('STUDENT_ID');
        $student = Student::where(['id'=> $id])->first();
        $department_id = $student->department_id;
        $students = Student::where(['department_id'=>$department_id])->get();
        return view('student.student_list')->with(compact('students', 'student'));
    }

    /*My Faculty Function*/
    public function faculty(){
        $id = session('STUDENT_ID');
        $student = Student::where(['id'=> $id])->first();
        $department_id = $student->department_id;
        $faculties = Faculty::where(['department_id'=>$department_id])->get();
        return view('student.faculty')->with(compact('faculties', 'student'));
    }

    /*My Subject Function*/
    public function subject(){
        $id = session('STUDENT_ID');
        $student = Student::where(['id'=> $id])->first();
        $department_id = $student->department_id;
        $branch_id = $student->branch_id;
        $subjects = Subject::where(['department_id'=>$department_id, 'branch_id'=>$branch_id])->get();
        return view('student.subject')->with(compact('subjects', 'student'));
    }

    /*My Lecture Function*/
    public function lecture(){
        $id = session('STUDENT_ID');
        $student = Student::where(['id'=> $id])->first();
        $department_id = $student->department_id;
        $branch_id = $student->branch_id;
        $lectures = Lecture::where(['department_id'=>$department_id, 'branch_id'=>$branch_id])->get();
        return view('student.lecture')->with(compact('lectures', 'student'));
    }

    /*View Lecture Function*/
    public function view_lecture($id){
        $sid = session('STUDENT_ID');
        $student = Student::where(['id'=> $sid])->first();
        $lecture = Lecture::where(['subject_id'=>$id])->first();
        return view('student.view_lecture')->with(compact('lecture','student'));
    }

    /*Examination Function*/
    public function examination(){
        $sid = session('STUDENT_ID');
        $student = Student::where(['id'=> $sid])->first();
        $exams = Examination::where(['status'=>1])->get();
        return view('student.examination')->with(compact('exams', 'student'));
    }

    /*Take Exam Function*/
    public function take_exam($id){
        $sid = session('STUDENT_ID');
        $student = Student::where(['id'=> $sid])->first();
        $exam = Examination::where(['id'=>$id])->first();
        $subject_id = $exam->subject_id;
        $subject = Subject::where(['id'=>$subject_id])->first();
        $qn = Question::where(['exam_id'=>$id])->count();
        return view('student/take_exam')->with(compact('exam', 'student', 'subject', 'qn'));
    }
}
