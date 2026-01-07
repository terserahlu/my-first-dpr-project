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
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-sm">
                    <div class="card-header text-center bg-primary text-white">
                        <h4 class="mb-0">Book Detail</h4>
                    </div>

                    <div class="card-body">

                        <h3 class="text-center fw-bold mb-3">
                            {{ $book->title }}
                        </h3>

                        <div class="text-center mb-4">
                            @if($book->image)
                                <img 
                                    src="{{ asset('storage/'.$book->image) }}" 
                                    class="img-fluid rounded shadow"
                                    style="max-height: 400px"
                                    alt="Book Image">
                            @else
                                <p class="text-muted">No image available</p>
                            @endif
                        </div>

                        <table class="table table-borderless">
                            <tr>
                                <th width="30%">Author</th>
                                <td>: {{ $book->author->name ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>: {{ $book->description }}</td>
                            </tr>
                            <tr>
                                <th>Release Date</th>
                                <td>: {{ $book->release_date }}</td>
                            </tr>
                        </table>

                        <div class="text-center mt-4">
                            <a href="{{ route('books.index') }}" class="btn btn-secondary px-4">
                                Back
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
