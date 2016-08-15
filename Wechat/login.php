<html>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<script language = "javascript"><!--使用js验证-->
    function Checked()
    {
        if(myform.username.value == "")//如果用户名为空
        {
            alert("您还没有填写登录姓名！");
            myform.username.focus();
            return false;
        }
        if(myform.password.value == "")//如果密码为空
        {
            alert("您忘记填写密码了！");
            myform.password.focus();
            return false;
        }
    }
</script>
<body>
<form action="" method="post" name="myform">
    <table>
        <tr>
            <td>姓名:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>密码:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="登陆" name="denglu"></td>
        </tr>
    </table>
</form>
</body>

</html>
<?php
    include 'SqlConn.php';
    $id = $_POST['usernanme'];
    $password = $_POST['password'];
    $sql = "SELECT name,pass FRPM regist WHERE name = '$id";
    $query = mysql_query($sql);//执行sql语句
    $row = mysql_fetch_array($query);
    //获取查询结果
    $sql_id = $row['name'];
    $sql_pass = $row['pass'];

    if($_POST['denglu']){//点击登录
        if($sql_id==$id && $sql_pass==$password){
            setcookie('$sql_id','$sql_pass',time()+86400);
            echo "<script>location.href='admin.php';</script>";
        }else "<script>alert('登录失败!');history.go(-1);</script>";
    }

?>