<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Index Routes*/
Route::get('/', [IndexController::class, 'index']);

/*More Department Routes*/
Route::get('/department', [IndexController::class, 'department']);

/*Faculty Routes*/
Route::get('/faculties', [IndexController::class, 'faculty']);

/*About Us Routes*/
Route::get('/about', [IndexController::class, 'about']);

/*Contact Us Routes*/
Route::get('/contact', [IndexController::class, 'contact']);

/*Send Query Routes*/
Route::post('/send_contact', [IndexController::class, 'send_contact']);

/*Department Details Routes*/
Route::get('department_details/{id}', [IndexController::class, 'department_details']);

/*Branch Details Routes*/
Route::get('branch_details/{id}', [IndexController::class, 'branch_details']);

/*Faculty Details Routes*/
Route::get('faculty_details/{id}', [IndexController::class, 'faculty_details']);








/*Start Admin Pannel Route*/
Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth']);

Route::group(['middleware'=>'admin_auth'], function(){

    /*Dashboard Route*/
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

    /*Department Route*/
    Route::get('admin/department', [DepartmentController::class, 'index']);
    Route::get('admin/department/add_department', [DepartmentController::class, 'add_department']);
    Route::post('admin/department/add_department_process', [DepartmentController::class, 'add_department_process'])->name('department.insert');
    Route::get('admin/department/status/{status}/{id}', [DepartmentController::class, 'status']);
    Route::get('admin/department/delete_department/{id}', [DepartmentController::class, 'delete']);

    /*Category Route*/
    Route::get('admin/branch', [BranchController::class, 'index']);
    Route::get('admin/branch/add_branch', [BranchController::class, 'add_branch']);
    Route::post('admin/branch/add_branch_process', [BranchController::class, 'add_branch_process'])->name('branch.insert');
    Route::get('admin/branch/status/{status}/{id}', [BranchController::class, 'status']);
    Route::get('admin/branch/delete_branch/{id}', [BranchController::class, 'delete']);

    /*Student Route*/
    Route::get('admin/student', [StudentController::class, 'index']);
    Route::get('admin/student/add_student', [StudentController::class, 'add_student']);
    Route::post('admin/student/add_student_process', [StudentController::class, 'add_student_process'])->name('student.insert');
    Route::get('admin/student/view_student/{id}', [StudentController::class, 'view_student']);
    Route::get('admin/student/edit_student/{id}', [StudentController::class, 'edit_student']);
    Route::post('admin/student/update_student/{id}', [StudentController::class, 'update_student']);
    Route::get('admin/student/status/{status}/{id}', [StudentController::class, 'status']);
    Route::get('admin/student/delete_student/{id}', [StudentController::class, 'delete']);

    /*Faculty Route*/
    Route::get('admin/faculty', [FacultyController::class, 'index']);
    Route::get('admin/faculty/add_faculty', [FacultyController::class, 'add_faculty']);
    Route::post('admin/faculty/add_faculty_process', [FacultyController::class, 'add_faculty_process'])->name('faculty.insert');
    Route::get('admin/faculty/view_faculty/{id}', [FacultyController::class, 'view_faculty']);
    Route::get('admin/faculty/edit_faculty/{id}', [FacultyController::class, 'edit_faculty']);
    Route::post('admin/faculty/update_faculty/{id}', [FacultyController::class, 'update_faculty']);
    Route::get('admin/faculty/status/{status}/{id}', [FacultyController::class, 'status']);
    Route::get('admin/faculty/delete_faculty/{id}', [FacultyController::class, 'delete']);

    /*Subject Route*/
    Route::get('admin/subject', [SubjectController::class, 'index']);
    Route::get('admin/subject/add_subject', [SubjectController::class, 'add_subject']);
    Route::post('admin/subject/add_subject_process', [SubjectController::class, 'add_subject_process'])->name('subject.insert');
    Route::get('admin/subject/status/{status}/{id}', [SubjectController::class, 'status']);
    Route::get('admin/subject/delete_subject/{id}', [SubjectController::class, 'delete']);

    /*Lecture Route*/
    Route::get('admin/lecture', [LectureController::class, 'index']);
    Route::get('admin/lecture/add_lecture', [LectureController::class, 'add_lecture']);
    Route::post('admin/lecture/add_lecture_process', [LectureController::class, 'add_lecture_process'])->name('lecture.insert');
    Route::get('admin/lecture/status/{status}/{id}', [LectureController::class, 'status']);
    Route::get('admin/lecture/delete_lecture/{id}', [LectureController::class, 'delete']);

    /*Notice Route*/
    Route::get('admin/notice', [NoticeController::class, 'index']);
    Route::get('admin/notice/add_notice', [NoticeController::class, 'add_notice']);
    Route::post('admin/notice/add_notice_process', [NoticeController::class, 'add_notice_process'])->name('notice.insert');
    Route::get('admin/notice/status/{status}/{id}', [NoticeController::class, 'status']);
    Route::get('admin/notice/delete_notice/{id}', [NoticeController::class, 'delete']);

    /*Examination Route*/
    Route::get('admin/exam', [ExaminationController::class, 'index']);
    Route::get('admin/exam/add_exam', [ExaminationController::class, 'add_exam']);
    Route::post('admin/exam/add_exam_process', [ExaminationController::class, 'add_exam_process'])->name('exam.insert');
    Route::get('admin/exam/edit_exam/{id}', [ExaminationController::class, 'edit_exam']);
    Route::post('admin/exam/update_exam/{id}', [ExaminationController::class, 'update_exam']);
    Route::get('admin/exam/status/{status}/{id}', [ExaminationController::class, 'status']);
    Route::get('admin/exam/delete_exam/{id}', [ExaminationController::class, 'delete']);

    /*Question Route*/
    Route::get('admin/question', [QuestionController::class, 'index']);
    Route::post('admin/question/add_question_process', [QuestionController::class, 'add_question_process'])->name('question.insert');
    Route::get('admin/question/edit_question/{id}', [QuestionController::class, 'edit_question']);
    Route::post('admin/question/update_question/{id}', [QuestionController::class, 'update_question']);
    Route::get('admin/question/view_question/{id}', [QuestionController::class, 'view_question']);
    Route::get('admin/question/status/{status}/{id}', [QuestionController::class, 'status']);
    Route::get('admin/question/delete_question/{id}', [QuestionController::class, 'delete']);

    /*Logout Route*/
    Route::get('admin/logout', function(){
        session()->forget("ADMIN_LOGIN");
        session()->forget("ADMIN_ID");
        session()->flash('error', 'Logout successfully');
        return redirect('admin');
    });
});

/*End Admin Pannel Route*/



/*Start Student Pannel Routes*/
Route::get('student', [StudentController::class, 'student_login']);
Route::post('student/auth', [StudentController::class, 'auth']);

Route::group(['middleware', 'student_auth'], function(){
    /*Dashboard Route*/
    Route::get('student/dashboard', [StudentController::class, 'dashboard']);

    /*View Student*/
    Route::get('student/classmate', [StudentController::class, 'classmate']);

    /*View Faculty*/
    Route::get('student/my_faculty', [StudentController::class, 'faculty']);

    /*View Subject*/
    Route::get('student/my_subject', [StudentController::class, 'subject']);

    /*View Lecture*/
    Route::get('student/my_lecture', [StudentController::class, 'lecture']);

    /*Playlist*/
    Route::get('student/view_lecture/{id}', [StudentController::class, 'view_lecture']);

    /*Exam list*/
    Route::get('student/examination', [StudentController::class, 'examination']);

    /*Take Exam*/
    Route::get('student/take_exam/{id}', [StudentController::class, 'take_exam']);

    /*Logout Route*/
    Route::get('student/logout', function(){
        session()->forget("STUDENT_LOGIN");
        session()->forget("STUDENT_ID");
        session()->flash('error', 'Logout successfully');
        return redirect('student');
    });
});
/*End Student Pannel Route*/

