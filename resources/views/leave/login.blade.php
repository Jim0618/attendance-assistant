<form class="form-horizontal" action="" method="POST">

    {{ csrf_field() }}

    <label for="student_id">学号：</label>
    <input type="text" name="Student[student_id]" id="student_id" placeholder="请输入姓名">

    <label for="password">密码：</label>
    <input type="text" id="password" name="Student[password]" placeholder="请输入密码">

    <button type="submit">提交</button>
</form>