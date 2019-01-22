<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/user/edit" method="post">
        <div><input type="text" name="username" value="<?php echo $result -> username; ?>" placeholder="请输入用户名"></div>
        <div><input type="text" name="password" value="<?php echo $result -> password; ?>" placeholder="请输入密码"></div>
        <div><input type="text" name="mobile" value="<?php echo $result -> mobile; ?>" placeholder="请输入手机号码"></div>
        <div><input type="text" name="email" value="<?php echo $result -> email; ?>" placeholder="请输入邮箱"></div>
        <div><input type="text" name="address" value="<?php echo $result -> address; ?>" placeholder="请输入地址"></div>
        <div><input type="number" name="age" value="<?php echo $result -> age; ?>" placeholder="请输入年龄" ></div>
        <div>
            <input type="radio" name="sex" value="1"  <?php echo (bool)($result->sex == '1')? "checked": ""; ?> > 男
            <input type="radio" name="sex" value="0"  selected=<?php echo (bool)($result->sex == '0')? "checked": "" ; ?> > 女
        </div>
       
        <div><input type="submit" value="保存编辑用户"></div>
        <div><input type="hidden" name="_token" value="<?php echo csrf_token() ?>"></div>
        <div><input type="hidden" name="id" value="<?php echo  $result -> id; ?>"></div>
    </form>
</body>
</html>