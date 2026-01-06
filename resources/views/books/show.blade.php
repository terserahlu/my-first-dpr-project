<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Show Book</h1>
        <p class="text-center">Title: {{ $book->title }}</p>
        <div class="d-flex justify-content-center">
            <img src="{{ $book->image ? asset('storage/'.$book->image) : '' }}" alt="" width="500">
        </div>
        <p class="text-center mt-3">Author: {{ $book->author->name ?? 'N/A' }}</p>
        <p class="text-center">Description: {{ $book->description }}</p>
        <a href="{{ route('books.index') }} " class="btn btn-secondary">Back</a>
    </div>
</body>
</html>