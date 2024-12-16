@extends('layouts.header')

@section('content')
<div class="container">
    <h2>Pembayaran Berhasil</h2>
    <p>Terima kasih telah melakukan pembayaran. Pesanan Anda sedang diproses.</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Beranda</a>
</div>
@endsection