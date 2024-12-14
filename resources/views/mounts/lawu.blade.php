<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung Merbabu</title>
    <!-- <link rel="icon" type="png" href="WelcomeLogo.png"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mounts/gunung.css') }}">
</head>

<body>
    @include ('layouts.header')
    <section class="hero" id="main4">
        <div class="mount-container">
            <h2 class="center">Gunung Lawu</h2>
            <h3 class="">lihat cuaca terkini</h3>
            <div style="display: flex; flex-direction: rows; justify-content: space-around; padding-right: 50px; ">
                <a href="">
                    <h3>Jalur Cemoro</h3>
                </a><a href="{{ route('openWeather', ['latitude' => -7.595063, 'longitude' => 111.156063, 
                    'location' => 'Gumeng, Karanganyar, Jawa Tengah, Indonesia']) }}">
                    <h3>Jalur Candi Cetho</h3>
                </a><a href="">
                    <h3>Cemoro Sewu</h3>
                </a><a href="">
                    <h3>Tambak</h3>
                </a><a href="">
                    <h3>Cemoro Singolangu</h3>
                </a>
            </div>
            <div class="con1">
                <img src="{{ asset('images/mounts/lawu.jpg') }}" alt="Gunung Lawu" class="center-img">
                <div class="content">
                    <p>
                        Peraturan pendakian Gunung Lawu mengatur berbagai hal yang harus dipatuhi oleh para pendaki demi
                        keamanan dan kelestarian alam. Berikut beberapa hal penting yang perlu diperhatikan:
                    </p>
                    <ol>
                        <li>
                            <b>Kewajiban Pendaki</b>:
                            <ul>
                                <li>Pendaki wajib melapor kepada petugas sebelum dan sesudah pendakian.</li>
                                <li>Menggunakan peralatan standar dan membawa perbekalan yang cukup untuk pendakian.</li>
                                <li>Menjaga kebersihan dan keseimbangan lingkungan, serta membawa sampah kembali turun</li>
                            </ul>
                        </li>
                        <li>
                            <b>Persyaratan Dokumen</b>:
                            <ul>
                                <li>WNI: KTP, SIM, Kartu Pelajar, atau KIA.</li>
                                <li>WNA: Paspor atau KITAS.</li>
                            </ul>
                        </li>
                        <li>
                            <b>Larangan dan Tata Tertib</b>:
                            <ul>
                                <li>Tidak membuat atau melewati jalur terobosan dan tidak memisahkan diri dari kelompok.
                                </li>
                                <li>Dilarang menggunakan obor atau membuat api unggun yang tidak terkontrol.</li>
                                <li>Tidak boleh merusak alam, seperti memotong pohon atau merusak rambu</li>
                                <li>Pendaki dilarang melakukan tindakan tidak sopan atau merusak tempat-tempat yang dianggap
                                    keramat​
                                </li>
                            </ul>
                        </li>
                        <li>
                            <b>Prosedur Keamanan</b>:
                            <ul>
                                <li>Wajib membawa peralatan standar, seperti tenda dan pakaian hangat.</li>
                                <li>Melapor ke pos pendakian sebelum dan sesudah mendaki.</li>
                            </ul>
                        </li>
                        <li>
                            <b>Penutupan Jalur dan Pemeliharaan</b>:
                            <ul>
                                <li>Jalur dapat ditutup sewaktu-waktu untuk alasan cuaca buruk atau pemeliharaan.</li>
                            </ul>
                        </li>
                        <li>
                            <b>Jalur Pendakian Resmi</b>:
                            <ul>
                                <li>
                                    <button class="info-button"
                                        data-info="Titik Awal: Basecamp Cemoro Kandang, Karanganyar (1.850 mdpl)
                            Estimasi Waktu Pendakian: 6–8 jam
                            Pos 1 (2.000 mdpl): Jalur awal melewati hutan cemara dengan medan yang relatif landai.
                            Pos 2 (2.300 mdpl): Jalur mulai menanjak, dengan pemandangan pegunungan yang indah.
                            Pos 3 (2.500 mdpl): Jalur semakin menantang, pendaki akan melewati kawasan hutan lebat.
                            Pos 4 (2.800 mdpl): Tempat peristirahatan terakhir sebelum menuju puncak.
                            Puncak: Puncak Hargo Dumilah (3.265 mdpl), dengan panorama luas dan spot terbaik untuk menikmati matahari terbit."
                                        data-link="https://maps.app.goo.gl/S4RgHUQcXWciqh3r7">Cemoro Kandang</button>
                                </li>
                                <li>
                                    <button class="info-button"
                                        data-info="Titik Awal: Candi Cetho, Karanganyar (1.400 mdpl)
                          Estimasi Waktu Pendakian: 6-8 jam
                          Pos 1 (1.550 mdpl): Setelah melewati medan yang relatif datar, pendaki akan memasuki jalur yang lebih terjal menuju pos pertama.
                          Pos 2 (1.850 mdpl): Tempat peristirahatan berikutnya, di sini pendaki bisa menikmati pemandangan.
                          Pos 3 (2.150 mdpl): Pos ini lebih tinggi dan lebih dekat dengan puncak.
                          Pos 4 (2.350 mdpl): Pos terakhir sebelum menuju puncak. Di sini pendaki akan merasakan hawa dingin dan mulai terasa seperti mencapai puncak.
                          Puncak (3.265 mdpl): Puncak Gunung Lawu, yang menawarkan pemandangan luas dan menjadi tempat favorit pendaki untuk menikmati sunrise."
                                        data-link="https://maps.app.goo.gl/NFY3NDBFJKvFcrsL7">Cendo Cetho</button>
                                </li>
                                <li><button class="info-button"
                                        data-info="Titik Awal: Cemoro Sewu, Magetan (1.820 mdpl)
                            Estimasi Waktu Pendakian: 6-8 jam
                            Pos 1 (Wes-Wesan): Setelah melewati jalur berbatu dan pepohonan cemara, perjalanan dari basecamp ke pos pertama memakan waktu ±1,5 jam.
                            Pos 2 (Watu Gedeg): Lanjutan perjalanan membutuhkan ±2 jam. Di sini terdapat area istirahat yang nyaman.
                            Pos 3 (Watu Gede): Jalur semakin menanjak dengan durasi ±2 jam menuju pos ini.
                            Pos 4 (Watu Kapur): Pendakian lebih berat dengan waktu ±2 jam.
                            Pos 5 (Jolotundo): Tempat ini merupakan pemberhentian terakhir sebelum menuju Sendang Drajat (±30 menit perjalanan).
                            Sendang Drajat: Area ini memiliki musala kecil dan warung. Dari sini ke Puncak Hargo Dumilah membutuhkan ±1 jam.
                            Puncak: Hargo Dumilah (3.265 mdpl) merupakan titik tertinggi Gunung Lawu dengan pemandangan memukau, ideal untuk menikmati sunrise"
                                        data-link="https://maps.app.goo.gl/GMD3DJAEdzLGZkJh8">Cemoro Sewu</button>
                                </li>
                                <li><button class="info-button" data-info="Titik Awal: Basecamp Singolangu, Plaosan, Magetan (1.400 mdpl)
                            Estimasi Waktu Pendakian: 8-10 jam
                            Pos 1: Batu tempat Prabu Brawijaya sembahyang, jalur spiritual dengan banyak prasasti bersejarah.
                            Pos 2: Jalur menuju Cemoro Lawang yang cukup terjal.
                            Pos 3: Tanjakan Penggik, bagian paling menantang dengan kemiringan tinggi.
                            Pos 4: Hargo Dumilah, puncak dengan napak tilas sejarah dan pemandangan luas"
                                        data-link="https://maps.app.goo.gl/z3JG7qjMxC6isEib6">Singolangu</button>
                                </li>
                                <li><button class="info-button"
                                        data-info="Titik Awal: Desa Tambak, Ngargoyoso, Karanganyar (1.400 mdpl)
                            Estimasi Waktu Pendakian: 2-3 hari
                            Pos 1: Jalur melewati kawasan air terjun dan hutan lebat.
                            Pos 2: Jalur yang bertemu dengan Cemoro Kandang, cocok untuk mendirikan tenda.
                            Puncak (3.265 mdpl): Jalur ini sempat ditutup karena kebakaran hutan, namun menawarkan pengalaman mendaki di tengah alam yang masih asri​"
                                        data-link="https://maps.app.goo.gl/H11hjD3FA7nF6z268">Tambak</button></li>
                            </ul>
                        </li>
                </div>
            </div>


        </div>

    </section>
    <script src="{{ asset(path: 'js/infojalur.js') }}"></script>

</body>

</html>