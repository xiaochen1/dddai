<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/msg/dopostmsg" method="post">
        <div><input type="text" name="title" placeholder="请输入标题"></div>
        <div><input type="text" name="content" placeholder="输入内容"></div>
        <div><input type="submit" value="点击提交表单"></div>
        <div><input type="hidden" name="_token" value="<?php echo csrf_token() ?>"></div>
    </form>
</body>
</html>