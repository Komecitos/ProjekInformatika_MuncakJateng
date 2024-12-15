<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script></script>
</head>

<body>
    @include('layouts.header')
    <main class="mt-5">
        <section class="section1">
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <!-- Destinasi pendakian -->
            <form action="{{ route('ticket.store') }}" method="post" id="mainForm">
                @csrf
                <div style="display: flex; flex-direction: row; justify-content: left;" class="mb-2">
                    <div class="mb-3 me-3">
                        <label for="gunung" class="form-label">Destinasi Pendakian</label>
                        <select id="gunung" class="form-select" style="width: 280px;" name="gunung">
                            <option selected disabled>Pilih Gunung</option>
                            @foreach ($gunungData as $gunung)
                            <option value="{{ $gunung->nama_gunung }}">{{ $gunung->nama_gunung }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 me-3">
                        <label for="via" class="form-label">Jalur/Via Pendakian</label>
                        <select id="via" class="form-select" style="width: 280px;" name="via">
                            <option selected disabled>Pilih Jalur</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Select Date</label>
                        <input type="text" id="date" class="form-control datepicker" name="date" placeholder="MM/DD/YYYY">
                    </div>
                </div>
                <div class="mb-3">
                    <h3 style="font-weight: normal;">Identitas Pendaki</h3>
                </div>
                <ul class="nav nav-tabs" id="tabMenu">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab1" data-bs-toggle="tab" href="#form1">Pendaki Utama</a>
                    </li>
                </ul>
                <!-- Tab Content -->
                <div class="tab-content" id="tabContent">
                    <!-- Form 1 -->
                    <div class="tab-pane fade show active" id="form1">
                        <!-- Nama -->
                        <div id="form-container">
                            <div class="form-section">
                                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label">Nama depan</label>
                                        <input type="text" class="form-control" aria-label="First name"
                                            style="width: 400px;" name="f-name[]" id="f-name" autocomplete="off">
                                    </div>
                                    <div class="mb-3 me-3">
                                        <label for="inputState" class="form-label">Nama belakang</label>
                                        <input type="text" class="form-control" aria-label="Last name"
                                            style="width: 400px;" name="l-name[]" id="l-name" autocomplete="off">
                                    </div>
                                </div>
                                <!-- Kontak -->
                                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <div class="mb-3">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email[]"
                                            style="width: 280px;" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputEmail4" class="form-label">No Telepon</label>
                                        <input type="text" class="form-control" id="no_telp" name="no_telp[]"
                                            style="width: 280px;">
                                    </div>
                                    <div class="mb-3 me-3">
                                        <label for="inputEmail4" class="form-label">No Telepon Darurat</label>
                                        <input type="text" class="form-control" id="no_telp_darurat"
                                            name="no_telp_darurat[]" style="width: 280px;">
                                    </div>
                                </div>
                                <!-- identitas -->
                                <div
                                    style="display: flex; flex-direction: row; align-items: left; justify-content: space-between;">
                                    <div class="mb-3">
                                        <label for="Kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                        <select id="Kewarganegaraan" class="form-select" style="width: 280px;"
                                            name="Kewarganegaraan[]">
                                            <option selected>Pilih</option>
                                            <option value="WNI">WNI (Warga Negara Indonesia)</option>
                                            <option value="WNA">WNA (Warga Negara Asing)</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="identitas" class="form-label">Identitas</label>
                                        <select id="identitas" class="form-select" style="width: 280px;"
                                            name="identitas[]">
                                            <option selected>Pilih</option>
                                            <option value="KTP">KTP (Kartu Tanda Penduduk)</option>
                                            <option value="PASSPORT">Passport</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 me-3">
                                        <label for="Lampiran Identitas" class="form-label">Lampiran Identitas</label>
                                        <input class="form-control" type="file" id="lampiran_identitas"
                                            name="lampiran_identitas[]">
                                    </div>
                                </div>

                                <!-- No Identitas -->
                                <div style="display: flex; flex-direction: row; justify-content: left">
                                    <div class="mb-3 me-5">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" style="width: 400px;"
                                            name="alamat[]">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label">No Identitas</label>
                                        <input type="text" class="form-control" id="no_identitas" name="no_identitas[]"
                                            style="width: 300px;" autocomplete="off">
                                    </div>
                                </div>

                                <!-- Alamat -->
                                <div style="display: flex; flex-direction: row; justify-content: none;">
                                    <div class="mb-3 me-5">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <select id="provinsi" name="provinsi[]" class="form-select" style="width: 200px;" onchange="loadKabupaten()">
                                            <option selected>Pilih Provinsi</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 me-5">
                                        <label for="kabupaten" class="form-label">Kabupaten</label>
                                        <select id="kabupaten" class="form-select" style="width: 200px;" name="kabupaten[]" onchange="loadKecamatan()">
                                            <option selected>Pilih Kabupaten</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 me-5">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <select id="kecamatan" class="form-select" style="width: 200px;" name="kecamatan[]">
                                            <option selected>Pilih Kecamatan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-secondary me-2" id="addFormBtn">Tambah Pendaki</button>
                            <button type="submit" class="btn btn-primary">Pesan Tiket</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="{{ asset(path: 'js/ticket.js') }}"></script>
    <script src="{{ asset(path: 'js/dataWilayah.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Bootstrap JS -->
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bootstrap CSS (if using Bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include Bootstrap JS (or datepicker, if used separately) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Include Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css">

    <!-- Include Bootstrap Datepicker JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>


</body>

</html>