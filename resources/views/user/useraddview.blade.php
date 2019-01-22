<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/user/add" method="post">
        <div><input type="text" name="username" placeholder="请输入用户名"></div>
        <div><input type="text" name="password" placeholder="请输入密码"></div>
        <div><input type="text" name="mobile" placeholder="请输入手机号码"></div>
        <div><input type="text" name="email" placeholder="请输入邮箱"></div>
        <div><input type="text" name="address" placeholder="请输入地址"></div>
        <div><input type="number" name="age" placeholder="请输入年龄" ></div>
        <div>
            <input type="radio" name="sex" value="1">男
            <input type="radio" name="sex" value="0">女
        </div>
        <div><input type="submit" value="添加用户"></div>
        <div><input type="hidden" name="_token" value="<?php echo csrf_token() ?>"></div>
    </form>
</body>
</html>