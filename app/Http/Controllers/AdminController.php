<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Department;
use App\Models\Student;
use App\Models\Examination;
use App\Models\Subject;
use App\Models\Branch;
use App\Models\Notice;
use App\Models\Question;
use App\Models\Faculty;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /*Index Function*/
    public function index()
    {
        return view('admin.login');
    }

    /*Auth Function*/
    public function auth(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');

        $result = Admin::where(['email'=>$email, 'password'=>$password])->get();

        if(isset($result[0]->id)){
            $request->session()->put('ADMIN_LOGIN', true);
            $request->session()->put('ADMIN_ID', $result[0]->id);
            return redirect('admin/dashboard');
        }else{
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('admin');
        }
    }

    /*Dashboard Function*/
    public function dashboard(){

        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();

        $td = Department::where(['status'=>1])->count();
        $ts = Student::where(['status'=>1])->count();
        $te = Examination::where(['status'=>1])->count();
        $tsu = Subject::where(['status'=>1])->count();
        $tb = Branch::where(['status'=>1])->count();
        $tn = Notice::where(['status'=>1])->count();
        $tq = Question::where(['status'=>1])->count();
        $tf = Faculty::where(['status'=>1])->count();
        return view('admin.dashboard')->with(compact('td', 'ts', 'te', 'tsu', 'tb', 'tn', 'tq', 'tf', 'admin'));
    }
}
