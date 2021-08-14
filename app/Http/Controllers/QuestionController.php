<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Examination;
use App\Models\Admin;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
   public function index(){
      $id = session('ADMIN_ID');
      $admin = Admin::where(['id'=>$id])->first();
      $exams = Examination::where(['status'=>1])->get();
      return view('admin.question.add_question')->with(compact('exams', 'admin'));
   }

   public function add_question_process(Request $request){
     $model = new Question();
     $model->exam_id = $request->post('exam_id');
     $model->question = $request->post('question');
     $model->opt1 = $request->post('opt1');
     $model->opt2 = $request->post('opt2');
     $model->opt3 = $request->post('opt3');
     $model->opt4 = $request->post('opt4');
     $model->answer = $request->post('answer');
     $model->status = 1;
     $model->save();
     $request->session()->flash('success', 'Question inserted');
     return redirect('admin/exam');
  }

  public function view_question($id){
   $id = session('ADMIN_ID');
   $admin = Admin::where(['id'=>$id])->first();
   $questions = Question::where(['exam_id'=>$id])->get();
   $exam = Examination::where(['id'=>$id])->first();
   return view('admin.question.view_question')->with(compact('questions', 'exam', 'admin'));
}

public function edit_question($id){
   $id = session('ADMIN_ID');
   $admin = Admin::where(['id'=>$id])->first();
   $exams = Examination::where(['status'=>1])->get();
   $question = Question::where(['id'=>$id])->first();
   return view('admin.question.edit_question')->with(compact('question', 'exams', 'admin'));
}

public function update_question(Request $request, $id){
   Question::where(['id'=>$id])->update(['exam_id'=>$request->post('exam_id'), 'question'=>$request->post('question'), 'opt1'=>$request->post('opt1'), 'opt2'=>$request->post('opt2'),'opt3'=>$request->post('opt3'),'opt4'=>$request->post('opt4'),'answer'=>$request->post('answer')]);
   $request->session()->flash('success', 'Question updated');
   return redirect('admin/exam');
}
public function status(Request $request, $status, $id){
 $model = Question::find($id);
 $model->status = $status;
 $model->save();
 $request->session()->flash('success', 'Question status successfully changed');
 return redirect('admin/exam');
}

public function delete(Request $request, $id){
 $model = Question::find(['id'=>$id]);
 $model->delete();
 $request->session()->flash('success', 'Question deleted');
 return redirect('admin/exam');
}
}
