<h1>学生信息：</h1>
<form class="form-horizontal" action="{{ url('ask_for_leave') }}" method="POST" enctype="multipart/form-data">

    {{ csrf_field() }}
    <h2>名字：{{ $student_info['name'] }}</h2>
    <h2>学号：{{ $student_info['student_id'] }}</h2>
    <h2>班级：{{ $student_info['class'] }}</h2>
    <h2>二级学院：{{ $student_info['secondary_college'] }}</h2>
    <h2>辅导员：{{ $student_info['teacher'] }}</h2>
    <h2>辅导员电话：{{ $student_info['teacher_tel'] }}</h2>

    <input type="text" name="Leave[student_id]" id="_j&=y+y*jv+yy-vv&wE!j17$T7MPCNU$E-Ej&v-O*K^yHH:Ovm+UMMkBMMTO:H1=7\O&OH:OH7E~U0H1BB7CfvM1H1jB-j1wHhHh*-$B)B-BkJUk^HI\OHjN1OHOK~H$HDajP\NOvHTT~" style="display: none;" value="{{ $student_info['student_id'] }}">

    <label for="leave_type">请假类型：</label>
    <input type="text" name="Leave[type]" id="leave_type" placeholder="请选择请假类型">

    <label for="leave_materials">证明材料：</label>
    <input type="file" id="leave_materials" name="leave_materials" placeholder="请上传证明材料">

    <label for="leave_reason">请假原因：</label>
    <input type="text" id="leave_reason" name="Leave[reason]" placeholder="请输入请假原因">

    <button type="submit">提交</button>
</form>