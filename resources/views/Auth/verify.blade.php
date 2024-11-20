@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Alamat Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Link verifikasi baru telah dikirim ke alamat email Anda.') }}
                    </div>
                    @endif

                    {{ __('Sebelum melanjutkan, harap periksa email Anda untuk link verifikasi.') }}
                    {{ __('Jika Anda tidak menerima email tersebut') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline" id="resend-button">
                            {{ __('klik di sini untuk mengirim ulang') }}
                        </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const resendButton = document.getElementById("resend-button");
        resendButton.addEventListener("click", function() {
            resendButton.disabled = true;
            resendButton.textContent = "Mengirim ulang...";
        });
    });
</script>
@endsection