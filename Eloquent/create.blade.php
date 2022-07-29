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
<h1 style="color: cornflowerblue " >Create new post</h1>
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="author" value="Enter the author of the post"><br><br>
    <input type="text" name="title" placeholder="Enter the title of the post"><br><br>
    <input type="text" name="body" placeholder="Enter the body of the post"><br><br>
    <button type="submit">Submit</button>
</form>

</body>
</html>
