<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show author</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Show author</h1>
        <p class="text-center">Name: {{ $author->name }}</p>
        <p class="text-center">Birth date: {{ $author->birth_date }}</p>
        <p class="text-center">Description: {{ $author->description }}</p>
    
        <a href="{{ route('authors.index') }} " class="btn btn-secondary">Back</a>
    </div>
</body>
</html>