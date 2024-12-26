<!-- resources/views/errorPage.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Error</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-danger">
            <h4 class="alert-heading">Terjadi Kesalahan</h4>
            <p>{{ session('error') }}</p>
            <hr>
            <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>
</body>

</html>