<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UserController extends Controller
{   
    private $student;

    public function __construct()
    {
        $this->student = new Users;
    }

    public function index() {

        $data = $this->student->getdata();

        return view('users.home', compact('data'));
    }
    public function getAdd() {

        return view('users.add');
    }
    public function postAdd(Request $request) {
        
        $request->validate([
            'fullname' => 'required|min:4',
            'email' => 'required|email',
            'class' => 'required',
            'address' => 'required|min:4'
        ],[
            'required' => 'Không được để trống trường này',
            'min' => 'Không được nhỏ hơn :min kí tự',
            // 'unique' => 'Email này đã được sử dụng'
        ]);
        $data = [
            $request -> fullname,
            $request -> email,
            $request -> class,
            $request -> address
        ];
        $this->student->insertdata($data);
       
        return redirect()->route('users.index');
    }
    public function getEdit($id) {

        $data = $this->student->getstudent($id);

        $student = $data[0];

        return view('users.edit',compact('student'));
    }
    public function updateStudent(Request $request, $id) {
        $request->validate([
            'fullname' => 'required|min:4',
            'email' => 'required|email',
            'class' => 'required',
            'address' => 'required|min:4'
        ],[
            'required' => 'Không được để trống trường này',
            'min' => 'Không được nhỏ hơn :min kí tự',
            // 'unique' => 'Email này đã được sử dụng'
        ]);
        $data = [
            $request -> fullname,
            $request -> email,
            $request -> class,
            $request -> address,
            $id
        ];

        $this->student->updatedata($data);
       
        return redirect()->route('users.index');
    }
    public function deleteStudent($id) {

        if(!empty($id)) {

            $status = $this->student-> deleteStd($id);

            if($status) {
                $msg = 'Xóa sinh viên thành công';
            } else {
                $msg = 'Xóa sinh viên không thành công';
            }
        } else {
            $msg = 'Không tồn tại sinh viên!!!';
        }

        return redirect() ->route('users.index')->with('msg', $msg);
    }
}
