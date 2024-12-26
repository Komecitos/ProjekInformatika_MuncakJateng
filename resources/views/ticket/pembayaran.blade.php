@extends('layouts.header')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Detail Pemesanan Tiket</h2>
    <table class="table table-bordered">
        <tr>
            <th>Nomor Pemesanan</th>
            <td>{{ $order_id }}</td>
            <th>Total Price</th>
            <td>{{ $total_price }}</td>
            <th>Id Pendakian</th>
            <td>{{ $id_pendakian }}</td>
        </tr>
        <!-- Tambahkan detail tambahan seperti nama, destinasi, harga -->
    </table>

    <h3 class="mt-4">Silakan lakukan pembayaran</h3>
    <button id="pay-button" class="btn btn-primary mt-3">Bayar dengan Midtrans</button>

    <form id="payment-form" action="{{ route('payment.success') }}" method="POST">
        @csrf
        <input type="hidden" name="snap_token" id="snap_token" value="{{ $snapToken }}" />
        <input type="hidden" name="order_id" id="order_id" value="{{ $order_id }}" />
        <input type="hidden" name="total_price" id="total_price" value="{{ $total_price ?? 'default_value' }}" />
        <input type="hidden" name="id_pendakian" id="id_pendakian" value="{{ $id_pendakian ?? 'default_value' }}" />
        <button type="submit" class="btn btn-success" id="skip-button">Konfirmasi Pembayaran</button>
    </form>



</div>

<!-- Midtrans Snap JS -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script>
    document.getElementById('pay-button').onclick = function() {
        console.log('Snap Pay triggered!');
        snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                console.log('Payment success:', result);
                alert('Pembayaran berhasil!');
                document.getElementById('snap_token').value = result.token;
                document.getElementById('order_id').value = '{{ $order_id }}';

                // Setelah pembayaran berhasil, kirim form secara otomatis
                document.getElementById('payment-form').submit();
            },
            onPending: function(result) {
                console.log('Payment pending:', result);
                alert('Pembayaran sedang diproses!');
                document.getElementById('snap_token').value = result.token;
                document.getElementById('order_id').value = '{{ $order_id }}';
                document.getElementById('payment-form').submit();
            },
            onError: function(result) {
                console.log('Payment error:', result);
                alert('Terjadi kesalahan dalam pembayaran. Silakan coba lagi.');
            },
            onClose: function() {
                alert('Pembayaran dibatalkan.');
            }
        });
    };

    // Fungsi untuk tombol 'skip' yang akan mengonfirmasi pembayaran sebagai berhasil
    document.getElementById('skip-button').onclick = function(event) {
        event.preventDefault(); // Menghentikan aksi formulir
        console.log('Skipping payment, auto-confirming as success.');

        // Log untuk memeriksa apakah elemen formulir ditemukan
        console.log('Element snap_token:', document.getElementById('snap_token'));
        console.log('Element order_id:', document.getElementById('order_id'));
        console.log('Element id_pendakian:', document.getElementById('id_pendakian'));
        console.log('Element total_price:', document.getElementById('total_price'));

        // Set nilai untuk masing-masing elemen
        document.getElementById('snap_token').value = 'AUTO_CONFIRMED'; // Set token otomatis
        console.log('snap_token set to:', document.getElementById('snap_token').value);

        document.getElementById('order_id').value = '{{ $order_id }}';
        console.log('order_id set to:', document.getElementById('order_id').value);

        document.getElementById('id_pendakian').value = '{{ $id_pendakian }}';
        console.log('id_pendakian set to:', document.getElementById('id_pendakian').value);

        // document.getElementById('total_price').value = '{{ $total_price }}';
        // console.log('total_price set to:', document.getElementById('total_price').value);

        // Mengirimkan formulir
        console.log('Submitting the form...');
        document.getElementById('payment-form').submit(); // Kirim form untuk menandai pembayaran berhasil
    };
</script>
@endsection