@extends('layouts.header')

@section('content')
<div class="container">
    <form action="{{ route('payment.gateway') }}" method="post">
        @csrf
        <h2>Detail Pemesanan Tiket</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nomor Pemesanan</th>
                <td>{{ $order->nomor_pemesanan ?? 'Data kosong' }}</td>
            </tr>
            <tr>
                <th>Nama Pengguna</th>
                <td>{{ $user->name ?? 'Data kosong'}}</td>
            </tr>
            <tr>
                <th>ID Pendakian</th>
                <td>{{ $order->id_pendakian ?? 'Data kosong'}}</td>
            </tr>
            <tr>
                <th>Destinasi</th>
                <td>{{ $destination ?? 'Data kosong'}}</td>
            </tr>
            <tr>
                <th>Jalur Pendakian</th>
                <td>{{ $trail ?? 'Data kosong'}}</td>
            </tr>
            <tr>
                <th>Tanggal Pendakian</th>
                <td>{{ $date ?? 'Data kosong'}}</td>
            </tr>
            <tr>
                <th>Total Pembayaran</th>
                <td>Rp {{ number_format($total_price, 0, ',', '.') }}</td>
            </tr>
        </table>
        <input type="hidden" name="id_pemesanan" value="{{ $order->id_pemesanan }}">
        <input type="hidden" name="total_price" value="{{ $total_price }}">
        <input type="hidden" name="name" value="{{ $user->name ?? 'Pengguna' }}">
        <input type="hidden" name="email" value="{{ $user->email ?? 'no-email@example.com' }}">
        <input type="hidden" name="destination" value="{{ $destination ?? 'Destinasi Tidak Tersedia' }}">
        <input type="hidden" name="trail" value="{{ $trail ?? 'Jalur Tidak Tersedia' }}">
        <input type="hidden" name="date" value="{{ $date ?? 'Tanggal Tidak Tersedia' }}">
        <input type="hidden" name="date" value="{{ $order->id_pendakian ?? 'Id Pendakian Tidak Tersedia' }}">

        <button type="submit" class="btn btn-primary"><b>Pesan Tiket</b></button>
    </form>
</div>


@endsection