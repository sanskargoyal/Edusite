<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Admin;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        $notices = Notice::get();
        return view('admin.notice')->with(compact('notices', 'admin'));
    }

    public function add_notice(){
        $id = session('ADMIN_ID');
        $admin = Admin::where(['id'=>$id])->first();
        return view('admin.notice.add_notice')->with(compact('admin'));
    }

    public function add_notice_process(Request $request){

        $model = new Notice();
        $model->title = $request->post('title');
        $model->description = $request->post('description');
        $model->status = 1;
        $model->save();

        $request->session()->flash('success', 'Notice Inserted');
        return redirect('admin/notice');
    }

    public function status(Request $request, $status, $id){
        $model = Notice::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success', 'Notice status successfully changed');
        return redirect('admin/notice');
    }

    public function delete(Request $request, $id){
        $model = Notice::find(['id'=>$id]);
        $model->delete();
        $request->session()->flash('success', 'Notice deleted');
        return redirect('admin/notice');
    }
}
