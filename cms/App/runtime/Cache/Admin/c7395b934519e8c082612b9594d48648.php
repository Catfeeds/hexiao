<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>添加预约课程时间</title>
    <script src="jquery.min.js"></script>
</head>
<body>

<center>
    <form method="post" action="<?php echo U(CourseTeacher/addTime);?>">
        <h1 style="margin-top:200px">添加预约课程时间</h1>
        <table>
            <tr>
                <td>课程老师信息</td>
            </tr>
            <tr>
                <td>老师unique_id：</td>
                <td><input type="text" name="course_name" value="0"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;老师原名称：</td>
                <td><input type="text" name="discribe" value="30分钟学会弹钢琴"></td>
            </tr>
            <tr>
                <td>联系方式：</td>
                <td><input type="text" name="course_name" value="15510996092"></td>
            </tr>
            <tr>
                <td>添加课程时间段A</td>
            </tr>
            <tr>
                <td>开始时间：</td>
                <td><input type="text" name="course_name" value="1511170130"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;结束时间：</td>
                <td><input type="text" name="discribe" value="1511170130"></td>
            </tr>
            <tr>
                <td>上课人数：</td>
                <td><input type="text" name="course_name" value="4"></td>
            </tr>
            <tr>
                <td>添加课程时间段B</td>
            </tr>
            <tr>
                <td>开始时间：</td>
                <td><input type="text" name="course_name" value="1511170130"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;结束时间：</td>
                <td><input type="text" name="discribe" value="1511170130"></td>
            </tr>
            <tr>
                <td>上课人数：</td>
                <td><input type="text" name="course_name" value="1"></td>
            </tr>
            <tr>
                <td><input type="submit" value="下一步"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>