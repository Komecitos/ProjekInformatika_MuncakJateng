

document.getElementById('addFormBtn').addEventListener('click', function () {
    // Mendapatkan jumlah tab saat ini
    const currentTabCount = document.querySelectorAll('.nav-item').length;

    // Membuat tab baru
    const newTab = document.createElement('li');
    newTab.classList.add('nav-item');
    newTab.innerHTML = `
         <a class="nav-link" id="tab${currentTabCount + 1}" data-bs-toggle="tab" href="#form${currentTabCount + 1}">Form Pendaki</a>
     `;

    // Menambahkan tab baru ke menu tab
    document.getElementById('tabMenu').appendChild(newTab);

    // Membuat konten form baru
    const newFormContent = document.createElement('div');
    newFormContent.classList.add('tab-pane', 'fade');
    newFormContent.id = `form${currentTabCount + 1}`;
    newFormContent.innerHTML = `
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
                                        <select id="provinsi2" name="provinsi[]" class="form-select" style="width: 200px;" onchange="loadKabupaten()">
                                            <option selected>Pilih Provinsi</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 me-5">
                                        <label for="kabupaten" class="form-label">Kabupaten</label>
                                        <select id="kabupaten2" class="form-select" style="width: 200px;" name="kabupaten[]" onchange="loadKecamatan()">
                                            <option selected>Pilih Kabupaten</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 me-5">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <select id="kecamatan2" class="form-select" style="width: 200px;" name="kecamatan[]">
                                            <option selected>Pilih Kecamatan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-danger removeTabBtn" onclick="removeTab(event, ${currentTabCount + 1})">Hapus Pendaki</button>
                        </div>
                    
    `;

    // Menambahkan form baru ke area konten tab
    document.getElementById('tabContent').appendChild(newFormContent);

    // Mengaktifkan tab dan form baru
    const newTabLink = document.getElementById(`tab1`);
    newTabLink.classList.add('active');
    const newForm = document.getElementById(`form1`);
    newForm.classList.add('show', 'active');

    // Menghapus kelas 'show' dan 'active' dari tab dan form sebelumnya
    const prevActiveForm = document.querySelector('.tab-pane.show');
    if (prevActiveForm) {
        prevActiveForm.classList.remove('show', 'active');
    }

    const prevActiveTab = document.querySelector('.nav-link.active');
    if (prevActiveTab) {
        prevActiveTab.classList.remove('active');
    }

    // Pastikan tab dan form baru aktif
    newTabLink.classList.add('active');
    newForm.classList.add('show', 'active');
});

// Fungsi untuk menghapus tab dan form
function removeTab(event, tabId) {
    // Mencari dan menghapus tab
    const tabToRemove = document.getElementById(`tab${tabId}`);
    const formToRemove = document.getElementById(`form${tabId}`);

    // Menghapus tab
    tabToRemove.parentNode.removeChild(tabToRemove);

    // Menghapus form
    formToRemove.parentNode.removeChild(formToRemove);

    // Mengaktifkan tab pertama (atau tab yang ada setelah tab yang dihapus)
    const newTabLink = document.getElementById(`tab1`);
    newTabLink.classList.add('active');
    const newForm = document.getElementById(`form1`);
    newForm.classList.add('show', 'active');
}



document.getElementById('gunung').addEventListener('change', function () {
    let namaGunung = this.value;  // Ambil nama_gunung yang dipilih

    let viaSelect = document.getElementById('via');
    viaSelect.innerHTML = '<option selected disabled>Pilih Jalur</option>';  // Reset dropdown via

    // Mengambil data jalur via melalui AJAX menggunakan fetch
    fetch(`/gunung/${namaGunung}/jalur`)
        .then(response => response.json())
        .then(data => {
            // Mengisi dropdown via dengan data yang diterima
            if (data.length === 0) {
                viaSelect.innerHTML = '<option selected disabled>Jalur tidak tersedia</option>';
            } else {
                data.forEach(function (jalur) {
                    let option = document.createElement('option');
                    option.value = jalur.id_via;
                    option.textContent = jalur.nama_via;
                    viaSelect.appendChild(option);
                });
            }
        })
        .catch(error => {
            console.error('Terjadi kesalahan:', error);
        });
});

jQuery(document).ready(function () {
    jQuery('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        autoclose: true,
        todayHighlight: true
    });
});

const dataProvinsi = [
    { id: 1, name: 'Jawa Tengah' },
    { id: 2, name: 'Jawa Barat' }
];
const dataKabupaten = {
    1: [
        { id: 1, name: 'Semarang' },
        { id: 2, name: 'Kendal' }
    ],
    2: [
        { id: 1, name: 'Bandung' },
        { id: 2, name: 'Bekasi' }
    ]
};
const dataKecamatan = {
    1: [
        { id: 1, name: 'Semarang Timur' },
        { id: 2, name: 'Semarang Barat' }
    ],
    2: [
        { id: 1, name: 'Kendal Kota' },
        { id: 2, name: 'Kendal Utara' }
    ],
    3: [
        { id: 1, name: 'Bandung Kota' },
        { id: 2, name: 'Bandung Barat' }
    ],
    4: [
        { id: 1, name: 'Bekasi Timur' },
        { id: 2, name: 'Bekasi Utara' }
    ]
};

// Mengisi dropdown Provinsi
function populateProvinsi() {
    const provinsiSelect = document.getElementById('provinsi2');
    dataProvinsi.forEach(provinsi => {
        const option = document.createElement('option');
        option.value = provinsi.id;
        option.textContent = provinsi.name;
        provinsiSelect.appendChild(option);
    });
}

// Memuat Kabupaten berdasarkan Provinsi yang dipilih
function loadKabupaten(provinsiSelect) {
    const kabupatenSelect = document.getElementById('kabupaten2');
    kabupatenSelect.innerHTML = '<option selected>Pilih Kabupaten</option>';  // Reset

    const provinsiId = provinsiSelect.value;
    if (dataKabupaten[provinsiId]) {
        dataKabupaten[provinsiId].forEach(kabupaten => {
            const option = document.createElement('option');
            option.value = kabupaten.id;
            option.textContent = kabupaten.name;
            kabupatenSelect.appendChild(option);
        });
    }
}

// Memuat Kecamatan berdasarkan Kabupaten yang dipilih
function loadKecamatan(kabupatenSelect) {
    const kecamatanSelect = document.getElementById('kecamatan2');
    kecamatanSelect.innerHTML = '<option selected>Pilih Kecamatan</option>';  // Reset

    const kabupatenId = kabupatenSelect.value;
    if (dataKecamatan[kabupatenId]) {
        dataKecamatan[kabupatenId].forEach(kecamatan => {
            const option = document.createElement('option');
            option.value = kecamatan.id;
            option.textContent = kecamatan.name;
            kecamatanSelect.appendChild(option);
        });
    }
}

// Menjalankan populateProvinsi saat halaman dimuat
window.onload = function () {
    populateProvinsi();
}





