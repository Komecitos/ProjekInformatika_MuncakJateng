@extends('layouts.header')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Status Pembayaran</h2>
    <table class="table table-bordered">
        <tr>
            <th>Nomor Pemesanan</th>
            <td>{{ $orderId }}</td>
        </tr>
        <tr>
            <th>Status Pembayaran</th>
            <td>{{ $status }}</td>
        </tr>
        <tr>
            <th>Pesan</th>
            <td>{{ $message }}</td>
        </tr>
        <tr>
            <th>ID Pendakian</th>
            <td>{{ $idPendakian }}</td>
        </tr>
    </table>
    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Kembali ke Home</a>
</div>
@endsection