@extends('layouts.header')

@section('content')
<div class="container">
    <h2>Detail Pemesanan Tiket</h2>
    <table class="table table-bordered">
        <tr>
            <th>Nomor Pemesanan</th>
            <td>{{ $order_id }}</td>
        </tr>
        <!-- Info lainnya seperti destinasi, tanggal, harga -->
    </table>

    <h3>Silakan lakukan pembayaran</h3>

    <!-- Tombol untuk lanjutkan pembayaran -->
    <button id="pay-button">Bayar dengan Midtrans</button>

    <form id="payment-form" action="/payment/success" method="POST" style="display:none;">
        <input type="hidden" name="snap_token" id="snap_token" />
        <button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
    </form>
</div>

<script type="text/javascript">
    // Inisialisasi Snap Midtrans
    document.getElementById('pay-button').onclick = function() {
        // Mengambil Snap Token dari controller
        snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                console.log(result);
                document.getElementById('snap_token').value = result.token;
                document.getElementById('payment-form').submit();
            },
            onPending: function(result) {
                console.log(result);
                alert("Pembayaran masih menunggu konfirmasi!");
                document.getElementById('payment-form').submit();
            },
            onError: function(result) {
                console.log(result);
                alert("Terjadi masalah saat pembayaran.");
            }
        });
    };
</script>

@endsection