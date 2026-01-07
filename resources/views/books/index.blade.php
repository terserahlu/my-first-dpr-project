<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Books</h1>
    <a href="{{ route('index') }} " class="btn btn-secondary">Back</a>
    <a href="{{ route('books.create') }} " class="btn btn-primary">Create Book</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th class="text-center">Title</th>
                <th class="text-center">Image</th>
                <th class="text-center">Author</th>
                <th class="text-center">Description</th>
                <th class="text-center">release_date</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td class="text-center">{{ $book->title }}</td>
                    <td class="text-center">
                        <img src="{{ $book->image ? asset('storage/'.$book->image) : '' }}" alt="" width="100">
                    </td>
                    <td class="text-center">{{ $book->author->name ?? 'N/A' }}</td>
                    <td class="text-center">{{ $book->description }}</td>
                    <td class="text-center">{{ $book->release_date}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('books.show', $book->id) }}">Show</a>
                        <a class="btn btn-warning" href="{{ route('books.edit', $book->id) }}">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="post" class="d-inline">
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