<html>
<head>
    <meta http-equiv="content-type" content="text/html"charset="utf-8">
</head>
<script language = "javascript">
    function checkform()//使用JS来验证用户输入是否符合规范
    {
        if(myform.usrname.value == "")//姓名不能为空
        {
            alert("姓名不能为空！");
            myform.username.focus();
            return false;
        }
        if(myform.name.value.length < 2 || myform.name.value.length > 5)//当用户输入的姓名小于4或者大于8时
        {
            alert("姓名不符合规范！");
            myform.name.focus();
            return false;
        }
        if(myform.p_num.value == "")//手机号不能为空
        {
            alert("手机号必须填写！");
            myform.email.focus();
            return false;
        }
        if(myform.email.value.length =11)//手机号不只能11个字符，否则不符合规范
        {
            alert("手机号不符合规范！");
            myform.p_num.focus();
            return false;
        }
        if(myform.password.value == "")//密码不能为空
        {
            alert("密码不能为空！");
            myform.password.focus();
            return false;
        }
        if(myform.password1.value == "")//密码不能为空
        {
            alert("密码不能为空！");
            myform.password1.focus();
            return false;
        }
        if(myform.password.value.length < 6)//如果密码小于6位
        {
            alert("密码不能少于6位！");
            myform.password.focus();
            return false;
        }
        if(myform.password.value != myform.password1.value)//判断两次输入的密码是否一致
        {
            alert("两次输入的密码不一致！");
            myform.mi2.focus();
            return false;
        }
    }
</script>
<h1>注册</h1>
<form action="login.php" method="post">
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
            <td>确认密码:</td>
            <td><input type="password" name="password1"></td>
        </tr>
        <tr>
            <td>手机号:</td>
            <td><input type="text" name="p_num"></td>
            <td><input type="button" name="send" value="发送验证码"></td>
        </tr>
        <tr>
            <td><input type="text" name="message"></td>
        </tr>
        <tr>
            <td><input type="submit" value="注册" name="sub"></td>
            <td><a href="login.php">登陆</a></td>
        </tr>
    </table>
</form>
