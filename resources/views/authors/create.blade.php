<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Author</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f2f7ff;
        }
        .card {
            border: none;
            border-radius: 12px;
        }
        .card-header {
            background-color: #5dade2;
            color: white;
            border-radius: 12px 12px 0 0;
        }
        .btn-primary {
            background-color: #5dade2;
            border: none;
        }
        .btn-primary:hover {
            background-color: #3498db;
        }
        label {
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header text-center">   </div>
<body>
    <div class="container">
        <h1 class="text-center">Create author</h1>
        <form action="{{ route('authors.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control">
            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth date</label>
                <input type="date" name="birth_date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('authors.index') }} " class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>