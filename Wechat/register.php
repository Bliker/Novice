<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2016/8/9
 * Time: 22:52
 */
    include 'SqlConn.php';
     $username = $_POST['usernanme'];//注册者的用户名
     $password = $_POST['password'];//密码
     $p_num = $_POST['p_num'];//注册者的手机号
     $send = $_POST['send'];//点击发送验证码短信
     $message = $_POST['message'];//输入的验证码

    if (isset($send))
    {
        $number = new SendMsg($p_num);//获取发送的验证码
    }
    if(isset($_POST['sub'])){
        if($message!=$number){
            echo "<script>alert('验证码错误！');history.go(-1);</script>";
            $result = 1;
        }
        if($result==1){
            $sql = "INSERT INTO regist(name,pass,phone_num) VALUES ('$username','$password','$p_num')";//插入注册信息
            mysql_query($sql);//执行sql语句
            echo "<script>alert('注册成功!');history.go(-1);</script>";
        }
    }
?>