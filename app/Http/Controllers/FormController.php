<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function post(Request $request){
        // dd($request->input('username'));
        // dd($request);
        // dd($request->input('password.0.password','123456'));
        return back() -> withInput(
            $request->only('username')
        );
    }
    // public function store(Request $request){
    //     $id = $request->query('id');
    //     return dd($id);
    // }
    // public function query(){
    //     return view('forms');
    // }

    // public function index()
    // {
    //     return view('uploadfile');
    // }
    public function uploadFile(Request $request)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $fileSize = $file->getSize() / (1024 * 1024);
            $fileType = $file->getMimeType();

            $ext = $request->image->extension();  /// kiểu tệp file 
            $path = $request->image->storeAs('', 'duchung.' . $ext);  /// đổi file thành 1 tên khác
            //Lấy Tên files
            $fileName = $file->getClientOriginalName();
            //Lấy Đuôi File
            $fileExtension = $file->getClientOriginalExtension();
            echo $path . "<br/>";
            echo "Duoi file" . $fileExtension;
        }
        else {
            echo "vui long chon file";
        }
    }
}
