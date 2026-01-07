<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Author</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container">
    <h1 class="text-center">Authors</h1>
    <a href="{{ route('index') }} " class="btn btn-secondary">Back</a>
    <a href="{{ route('authors.create') }} " class="btn btn-primary">Create author</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Phone Number</th>
                <th class="text-center">Birth Date</th>
                <th class="text-center">Description</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td class="text-center">{{ $author->name }}</td>
                    <td class="text-center">{{ $author->phone }}</td>
                    <td class="text-center">{{ $author->birth_date }}</td>
                    <td class="text-center">{{ $author->description }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('authors.show', $author->id) }}">Show</a>
                        <a class="btn btn-warning" href="{{ route('authors.edit', $author->id) }}">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>