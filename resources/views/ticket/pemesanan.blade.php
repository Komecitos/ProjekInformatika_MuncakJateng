@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pemesanan Tiket #{{ $pemesanan->id }}</h1>

    <div class="card">
        <div class="card-header">
            Detail Pemesanan
        </div>
        <div class="card-body">
            <h5 class="card-title">Informasi Pendakian</h5>
            <p class="card-text"><strong>ID Gunung:</strong> {{ $pemesanan->id_gunung }}</p>
            <p class="card-text"><strong>ID Pendakian:</strong> {{ $pemesanan->pendakian->id_pendakian }}</p>
            <p class="card-text"><strong>Tanggal Pendakian:</strong> {{ $pemesanan->pendakian->tanggal }}</p>

            <h5 class="card-title mt-4">Detail Pendaki</h5>
            @foreach($pemesanan->pendakian->pendaki as $pendaki)
            <ul>
                <li><strong>{{ $pendaki->nama_depan }} {{ $pendaki->nama_belakang }}</strong></li>
                <li><strong>Email:</strong> {{ $pendaki->email ?? 'N/A' }}</li>
                <li><strong>No. Telepon:</strong> {{ $pendaki->no_telepon }}</li>
                <li><strong>No. Telepon Darurat:</strong> {{ $pendaki->no_telepon_darurat ?? 'N/A' }}</li>
                <li><strong>Kewarganegaraan:</strong> {{ $pendaki->kewarganegaraan }}</li>
                <li><strong>Identitas:</strong> {{ $pendaki->jenis_identitas }} - {{ $pendaki->no_identitas }}</li>
                <li><strong>Alamat:</strong> {{ $pendaki->alamat }}</li>
                <hr>
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection