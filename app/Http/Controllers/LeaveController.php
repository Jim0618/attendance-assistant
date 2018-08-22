<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeaveController extends Controller
{
    function ask_for_leave(Request $request) {
        $leave_data = $request->input('Leave');
        $file = $request->file('leave_materials');

        $student_id = $leave_data['student_id'];
        $leave_type = $leave_data['type'];
        $leave_reason = $leave_data['reason'];
        if ($file && $file->isValid()) {
            $leave_materials_originaName = $file->getClientOriginalName();
            $leave_materials_ext = $file->getClientOriginalExtension();
            $leave_materials_type = $file->getClientMimeType();
            $leave_materials_realPath = $file->getRealPath();
            $leave_materials_filename = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$leave_materials_ext;
            $leave_materials_is_store = Storage::disk('leave_materials')->put($leave_materials_filename, file_get_contents($leave_materials_realPath));
        }
        // TODO：对$leave_data做处理
        return view('leave.success');
    }
}
