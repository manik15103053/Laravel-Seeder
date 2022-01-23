<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>All Post</title>
</head>
<body>
    <div style="padding: 15px"></div>
    <div class="container">
        <form action="{{ route('search') }}" method="GET">
            @csrf
            <div class="form-group" style="width: 40%">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search Post">
                <button style="float: right;margin-top:5px" type="submit" class="btn btn-primary btn-sm">Serch</button>
            </div>
        </form>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Category</th>
                <th scope="col">Post Title</th>
                <th scope="col">Description</th>
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key=>$post )
                    <tr>
                        <td>{{ $key +1 }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>
