{{-- resources/views/ticket/pemesanan.blade.php --}}
<?php @include 'layouts.header'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #333;
        }

        .order-info {
            margin-bottom: 30px;
        }

        .order-info h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
        }

        .print-btn {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border-radius: 4px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>Pemesanan Tiket Pendakian</h1>
            <p>Nomor Pemesanan: {{ $pendakian->nomor_pemesanan }}</p>
        </div>

        <div class="order-info">
            <h2>Informasi Pemesanan</h2>
            <table>
                <tr>
                    <th>Gunung</th>
                    <td>{{ $gunung->nama_gunung }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pendakian</th>
                    <td>{{ \Carbon\Carbon::parse($pendakian->tanggal)->format('d M Y') }}</td>
                </tr>
                <tr>
                    <th>Jumlah Pendaki</th>
                    <td>{{ $pendakian->jumlah_pendaki }}</td>
                </tr>
            </table>
        </div>

        <div class="order-info">
            <h2>Daftar Pendaki</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendaki as $p)
                    <tr>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->no_telepon }}</td>
                        <td>{{ $p->alamat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="footer">
            <p>Terima kasih telah memesan tiket pendakian melalui kami!</p>
            <a href="javascript:window.print()" class="print-btn">Cetak Pemesanan</a>
        </div>
    </div>

</body>

</html>