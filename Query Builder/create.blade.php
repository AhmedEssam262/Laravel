<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <h1>Welcome and create your post</h1>

    <form action="{{route('posts.insert')}}" method="post">
        @csrf
        <input type="text" name ="title" placeholder="Enter the title">
        <input type="text" name ="body" placeholder="Enter the body">
        <button type="submit">Submit</button>

    </form>
</body>
</html>
