<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<h1>Welcome and Edit your post</h1>

<form action="{{route('posts.update',$myd->id)}}" method="post">
    @csrf
    <input type="text" name ="title" value={{$myd->title}}>
    <input type="text" name ="body" value="{{$myd->body}}">
    <button type="submit">Submit</button>

</form>
</body>
</html>
