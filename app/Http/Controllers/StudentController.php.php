<?php

namespace App\Http\Controllers;

use App\EduAdminInfo;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function login(Request $request) {
        if ($request->isMethod("POST")) {
            // 请求学生账号数据库，发现有这个学生，通过验证
            $request_login_data = $request->input('Student');
            $account_is_exist = $this->accountValidate($request_login_data);

            if ($account_is_exist) {
                $stu_id = $request_login_data['student_id'];
                $stu_edu_info = EduAdminInfo::find($stu_id);
                return view('leave.index', [
                    'student_info' => $stu_edu_info
                ]);
            }

        }
        return view('leave.login');
    }

    // 验证账号
    public function accountValidate($request_login_data) {
        $request_student_id = $request_login_data['student_id'];
        $request_password = $request_login_data['password'];

        $student_data = Student::find($request_student_id);
        if ($student_data && !strcmp($student_data['password'], $request_password)) {
            return true;

        }
        return false;
    }


}
