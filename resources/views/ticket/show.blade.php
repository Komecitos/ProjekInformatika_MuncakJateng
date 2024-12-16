@extends('layouts.header')

@section('content')
<div class="container">
    Tes
    <h2>Detail Pemesanan Tiket</h2>
    <table class="table table-bordered">
        <tr>
            <th>Nomor Pemesanan</th>
            <td>{{ $order->nomor_pemesanan ?? 'Data kosong' }}</td>
        </tr>
        <tr>
            <th>Nama Pengguna</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Destinasi</th>
            <td>{{ $destination }}</td>
        </tr>
        <tr>
            <th>Jalur Pendakian</th>
            <td>{{ $trail }}</td>
        </tr>
        <tr>
            <th>Tanggal Pendakian</th>
            <td>{{ $date }}</td>
        </tr>
        <tr>
            <th>Total Pembayaran</th>
            <td>Rp {{ number_format($total_price, 0, ',', '.') }}</td>
        </tr>
    </table>

    <a href="{{ route('payment.gateway', ['id_pemesanan' => $order->id_pemesanan]) }}" class="btn btn-primary">
        Lanjutkan ke Pembayaran
    </a>

</div>


@endsection