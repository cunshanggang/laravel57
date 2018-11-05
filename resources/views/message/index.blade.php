<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
</head>
<body>
    <form method="post" action="{{url('message/add')}}" >
        <textarea name="content" value="" rows="15" cols="50"></textarea>
        <input type="submit" value="提交">
    </form>
</body>
</html>