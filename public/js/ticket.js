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
                        <div id="form-container" class="me-3">
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
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label">No KTP/Passport</label>
                                        <input type="text" class="form-control" id="no_identitas" name="no_identitas[]"
                                            style="width: 300px;" autocomplete="off">
                                    </div>
                                </div>

                                <!-- Alamat -->
                                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" style="width: 240px;"
                                            name="alamat[]">
                                    </div>

                                    <div class="mb-3">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <select id="kecamatan" class="form-select" style="width: 200px;"
                                            name="kecamatan[]">
                                            <option selected>Pilih</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kabupaten" class="form-label">Kabupaten</label>
                                        <select id="kabupaten" class="form-select" style="width: 200px;"
                                            name="kabupaten[]">
                                            <option selected>Pilih</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 me-3">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <select id="provinsi" name="provinsi[]" class="form-select"
                                            style="width: 200px;" onchange="loadProvinsi()">
                                            <option selected>Choose...</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- End of form-section -->
                        </div> <!-- End of form-container -->

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

$(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        autoclose: true,
        todayHighlight: true
    });
});