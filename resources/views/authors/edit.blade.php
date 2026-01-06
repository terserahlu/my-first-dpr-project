<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit author</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Edit author</h1>
        <form action="{{ route('authors.update', $author->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $author->name }}">
            </div>
            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth date</label>
                <input type="date" name="birth_date" class="form-control" value="{{ $author->birth_date }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $author->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('authors.index') }} " class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>