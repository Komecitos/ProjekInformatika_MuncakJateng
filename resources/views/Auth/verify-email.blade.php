<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
</head>

<body>
    <div class="container">
        <h1>Verifikasi Email Anda</h1>
        <p>Silakan periksa email Anda dan klik link verifikasi yang telah kami kirimkan.</p>
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <button type="submit">Kirim Ulang Email Verifikasi</button>
        </form>
    </div>
</body>

</html> 