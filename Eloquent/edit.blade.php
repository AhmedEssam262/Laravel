<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new post</title>
</head>
<body>
<h1 style="color: cornflowerblue " >Edit post</h1>
<form action="{{route('posts.update',$data->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="author" value={{$data->author}}<br><br>
    <input type="text" name="title" value={{$data->title}}><br><br>
    <input type="text" name="body" value={{$data->body}}><br><br>
    <button type="submit">UPDATE</button>
</form>

</body>
</html>
