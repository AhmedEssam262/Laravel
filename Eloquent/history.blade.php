<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>History</title>
</head>
<body>
<h1 style="text-align: center;color: cornflowerblue " >This is the soft deleted posts</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Author</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($softdeleted as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->author}}</td>
            <td>{{$d->title}}</td>
            <td>{{$d->body}}</td>
            <td>
                <a class="btn btn-success" href="{{route('posts.restore',$d->id)}}" role="button">Restore</a>
{{--                delete--}}
                <form action="{{route('posts.forceDelete',$d->id)}}" method="get" style="display: inline">
                    @csrf
                    <button type="submit" style="color: crimson">forceDelete</button>
                </form>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
<a href="/laraproject2/public/posts/">return to The main posts</a>
</body>
</html>
