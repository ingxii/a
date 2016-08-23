<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">


<textarea name="content" id="" style="width:800px;height:300px;">
{!! $content !!}
</textarea>
{!! $b !!}
<input type="submit" value="提交哈哈">
{{ csrf_field() }}
</form>
</body>
</html>
