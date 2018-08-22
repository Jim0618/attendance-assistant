<form class="form-horizontal" action="ask_for_leave" method="POST">

    {{ csrf_field() }}

    <label for="name">姓名：</label>
    <input type="text" name="Student[name]" id="name" placeholder="请输入姓名">

    <label for="class">班级：</label>
    <input type="text" id="class" name="Student[class]" placeholder="请输入班级">

    <button type="submit">提交</button>
</form>