const dataWilayah = {
    "Jawa Tengah": {
        "Semarang": ["Semarang Utara", "Semarang Timur", "Semarang Selatan"],
        "Magelang": ["Mertoyudan", "Muntilan", "Salaman"]
    },
    "DIY": {
        "Sleman": ["Depok", "Ngaglik", "Mlati"],
        "Bantul": ["Banguntapan", "Kasihan", "Pandak"]
    }
};


// Fungsi untuk memuat provinsi ke dropdown
window.onload = function () {
    let provinsiSelect = document.getElementById('provinsi');

    // Mengisi dropdown provinsi
    for (let provinsi in dataWilayah) {
        let option = document.createElement('option');
        option.value = provinsi;
        option.textContent = provinsi;
        provinsiSelect.appendChild(option);
    }
};

// Fungsi untuk memuat kabupaten berdasarkan pilihan provinsi
function loadKabupaten() {
    let provinsiSelect = document.getElementById('provinsi');
    let kabupatenSelect = document.getElementById('kabupaten');
    let kecamatanSelect = document.getElementById('kecamatan');

    // Kosongkan dropdown kabupaten dan kecamatan
    kabupatenSelect.innerHTML = '<option selected>Pilih Kabupaten</option>';
    kecamatanSelect.innerHTML = '<option selected>Pilih Kecamatan</option>';

    let provinsi = provinsiSelect.value;
    if (provinsi) {
        let kabupatens = dataWilayah[provinsi];

        // Tambahkan kabupaten yang tersedia di provinsi terpilih
        for (let kabupaten in kabupatens) {
            let option = document.createElement('option');
            option.value = kabupaten;
            option.textContent = kabupaten;
            kabupatenSelect.appendChild(option);
        }
    }
}

// Fungsi untuk memuat kecamatan berdasarkan pilihan kabupaten
function loadKecamatan() {
    let kabupatenSelect = document.getElementById('kabupaten');
    let kecamatanSelect = document.getElementById('kecamatan');

    // Kosongkan dropdown kecamatan
    kecamatanSelect.innerHTML = '<option selected>Pilih Kecamatan</option>';

    let provinsiSelect = document.getElementById('provinsi');
    let provinsi = provinsiSelect.value;
    let kabupaten = kabupatenSelect.value;

    if (provinsi && kabupaten) {
        let kecamatans = dataWilayah[provinsi][kabupaten];

        // Tambahkan kecamatan yang tersedia di kabupaten terpilih
        for (let kecamatan of kecamatans) {
            let option = document.createElement('option');
            option.value = kecamatan;
            option.textContent = kecamatan;
            kecamatanSelect.appendChild(option);
        }
    }
}

