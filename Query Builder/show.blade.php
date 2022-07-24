<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Show Data</title>
</head>
<body>
<h1>Show Data</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col"></th>
        <th scope="col">Body</th>
        <th scope="col">process</th>
    </tr>
    </thead>
    <tbody>
    @foreach($mydata as $d)
    <tr>
        <th scope="row">{{$d->id}}</th>
        <td colspan="2">{{$d->title}}</td>
        <td>{{$d->body}}</td>
        <td>
            <a class="btn btn-success" href="{{route('posts.edit',$d->id)}}" role="button">Edit</a>
            <a class="btn btn-danger" href="{{route('posts.delete',$d->id)}}" role="button">Delete</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
<a class="btn btn-danger" href="{{route('posts.delete.all')}}" role="button">Delete All</a>

</body>
</html>
