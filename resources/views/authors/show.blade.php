<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Author</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header text-center bg-primary text-white">
                    <h4 class="mb-0">Author Detail</h4>
                </div>

                <div class="card-body">

                    <h3 class="text-center fw-bold mb-4">
                        {{ $author->name }}
                    </h3>

                    <table class="table table-borderless">
                        <tr>
                            <th width="30%">Phone Number</th>
                            <td>: {{ $author->phone ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Birth Date</th>
                            <td>: {{ $author->birth_date }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>: {{ $author->description }}</td>
                        </tr>
                    </table>

                    <div class="text-center mt-4">
                        <a href="{{ route('authors.index') }}" class="btn btn-secondary px-4">
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
