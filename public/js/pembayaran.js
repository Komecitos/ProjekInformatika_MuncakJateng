document.getElementById('skip-button').onclick = function () {
    console.log('Snap Pay triggered!');
    snap.pay('{{ $snapToken }}', {
        onSuccess: function (result) {
            console.log('Payment success:', result);
            alert('Pembayaran berhasil!');
            document.getElementById('snap_token').value = result.token;
            document.getElementById('payment-form').submit();

            // Redirect to another page after payment success (e.g., payment confirmation page)
            window.location.href = '/payment/success';  // Ganti URL sesuai kebutuhan
        },
        onPending: function (result) {
            console.log('Payment pending:', result);
            alert('Pembayaran sedang diproses!');
            document.getElementById('snap_token').value = result.token;
            document.getElementById('payment-form').submit();

            // Redirect to a waiting page for pending payment (optional)
            window.location.href = '/payment/pending'; // Ganti URL jika Anda ingin halaman lain
        },
        onError: function (result) {
            console.log('Payment error:', result);
            alert('Terjadi kesalahan dalam pembayaran. Silakan coba lagi.');
        },
        onClose: function () {
            alert('Pembayaran dibatalkan.');
        }
    });
};

document.getElementById('pay-button').onclick = function () {
    console.log('Snap Pay triggered!');
    snap.pay('{{ $snapToken }}', {
        onSuccess: function (result) {
            console.log('Payment success:', result);
            alert('Pembayaran berhasil!');
            document.getElementById('snap_token').value = result.token;
            document.getElementById('payment-form').submit();
        },
        onPending: function (result) {
            console.log('Payment pending:', result);
            alert('Pembayaran sedang diproses!');
            document.getElementById('snap_token').value = result.token;
            document.getElementById('payment-form').submit();
        },
        onError: function (result) {
            console.log('Payment error:', result);
            alert('Terjadi kesalahan dalam pembayaran. Silakan coba lagi.');
        },
        onClose: function () {
            alert('Pembayaran dibatalkan.');
        }
    });
};