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
            <h2 class="center">Gunung Sumbing</h2>
            <h3 class="">lihat cuaca terkini</h3>
            <div style="display: flex; flex-direction: rows; justify-content: space-around; padding-right: 50px; ">
                <a href="">
                    <h3>Bambangan</h3>
                </a><a href="">
                    <h3>Baturraden</h3>
                </a><a href="">
                    <h3>Kaliwadas</h3>
                </a><a href="">
                    <h3>Tambak</h3>
                </a><a href="">
                    <h3>Guci</h3>
                </a>
            </div>
            <div class="con1">
                <img src="{{ asset('images/mounts/lawu.jpg') }}" alt="Gunung Lawu" class="center-img">
                <div class="content">
                    <p>
                        Untuk mendaki Gunung Slamet, yang terletak di Jawa Tengah, pendaki harus mengikuti sejumlah peraturan yang ditetapkan oleh pengelola. Berikut adalah beberapa hal yang perlu dipenuhi:
                    </p>
                    <ul>
                        <li>
                            <b>Wajib</b>:
                            <ul>
                                <li>Melakukan pendaftaran terlebih dahulu, termasuk pengisian data pendaki dan perlengkapan.</li>
                                <li>Menunjukkan surat keterangan sehat dan sertifikat vaksinasi.</li>
                                <li>Mematuhi protokol kesehatan seperti memakai masker, membawa hand sanitizer, dan menjaga jarak fisik.</li>
                                <li>Menunjukkan surat keterangan sehat dan sertifikat vaksinasi.Pendaki wajib membawa peralatan pendakian yang standar dan cukup untuk durasi pendakian.</li>
                                <li>Pendakian harus dimulai sebelum pukul 16:00 WIB, dan pendaki tidak diperbolehkan memulai pendakian setelah waktu tersebut.</li>
                                <li>Semua sampah harus dibawa turun dan diserahkan kepada petugas basecamp</li>
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
                                <li>Membawa senjata tajam lebih dari 20 cm, tisu basah, obat-obatan terlarang, atau minuman keras.</li>
                                <li>Dilarang menebang pohon, berburu satwa liar, dan membuat api unggun.</li>
                                <li>Pendaki tidak diperbolehkan mendirikan tenda di luar tempat yang telah ditentukan atau memberi makan satwa liar secara sengaja.</li>
                                <li>Tindakan asusila dan membuang sampah sembarangan juga dilarang​
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

                        </li>
                        <li>
                            <ul>
                                <b>Jalur Pendakian Resmi</b>:
                                <li>
                                    <button class="info-button"
                                        data-info="Titik Awal: Desa Bambangan, Kecamatan Karangreja, Kabupaten Purbalingga (1.200 mdpl)
                                  Estimasi Waktu Pendakian: 7-9 jam
                                  Pos Pendakian:
                                  Pos 1 (1.700 mdpl): Pendakian dimulai dengan jalur yang landai, melewati kebun warga dan hutan pinus. Pos ini menjadi tempat awal untuk beristirahat sejenak.
                                  Pos 2 (2.100 mdpl): Trek mulai menanjak dengan medan yang semakin terjal. Pos ini berada di dalam hutan lebat dan sering menjadi tempat pemberhentian untuk mempersiapkan tenaga.
                                  Pos 3 (2.500 mdpl): Trek menuju pos ini cukup berat dengan tanjakan curam. Pendaki akan melewati vegetasi hutan montane yang semakin jarang.
                                  Pos 4 (2.800 mdpl): Terletak di batas vegetasi, pos ini adalah titik terakhir sebelum zona terbuka menuju puncak. Udara dingin dan angin kencang mulai terasa di area ini.
                                  Puncak (3.428 mdpl): Puncak Gunung Slamet, disebut Puncak Surono, menawarkan pemandangan luar biasa ke seluruh arah. Di sini, pendaki dapat menikmati panorama sunrise yang menakjubkan dengan pemandangan pegunungan lain di Pulau Jawa seperti Sindoro, Sumbing, dan Merapi."
                                        data-link="https://maps.app.goo.gl/t4DF1XCdVgZsHMiLA">Bambangan</button>
                                </li>
                                <li>
                                    <button class="info-button"
                                        data-info="Titik Awal: Desa Baturraden, Kecamatan Baturraden, Kabupaten Banyumas (1.300 mdpl)
                              Estimasi Waktu Pendakian: 6-8 jam
                              Rute Pendakian:
                              Pos 1 (1.800 mdpl): Pendakian dimulai dengan jalur yang relatif landai, melewati hutan bambu dan vegetasi rendah. Pos ini sering dijadikan tempat istirahat awal.
                              Pos 2 (2.400 mdpl): Terletak di tengah hutan montane, medan mulai menanjak dengan keberadaan beberapa sungai kecil yang harus dilewati menggunakan jembatan kayu.
                              Pos 3 (2.900 mdpl): Area ini lebih terjal dengan vegetasi hutan yang semakin langka. Pendaki harus berhati-hati melewati batuan licin dan medan berbatu.
                              Pos 4 (3.200 mdpl): Pos terakhir sebelum mencapai puncak. Di sini, angin mulai kencang dan suhu udara turun drastis. Medan terbuka dengan pemandangan panorama yang luas.
                              Puncak (3.428 mdpl): Puncak Gunung Slamet dari jalur Baturraden menawarkan pemandangan matahari terbit yang spektakuler serta panorama sekitarnya yang indah."
                                        data-link="https://maps.app.goo.gl/keombH43F67Jm9PN7">Baturraden</button>
                                </li>
                                <li><button class="info-button"
                                        data-info="Titik Awal: Desa Kaliwadas, Brebes (1.200 mdpl)
                                Estimasi Waktu Pendakian: 7-9 jam
                                Pos Pendakian:
                                Pos 1 (1.500 mdpl): Pendakian dimulai dari area perkebunan warga, dengan trek yang landai. Cocok untuk pemanasan.
                                Pos 2 (1.900 mdpl): Jalur mulai menanjak dengan medan tanah bercampur akar pohon. Tempat ini memiliki area istirahat yang cukup luas.
                                Pos 3 (2.300 mdpl): Trek semakin menanjak tajam. Vegetasi mulai berganti dari hutan lebat ke semak belukar.
                                Pos 4 (2.700 mdpl): Terletak di batas vegetasi, angin mulai terasa kencang, dan trek terbuka langsung menuju puncak.
                                Puncak (3.428 mdpl): Dari puncak, pendaki dapat melihat panorama kawasan Pantura (Pantai Utara) Jawa. Jalur ini populer karena waktu pendakiannya lebih cepat dibandingkan jalur lain.​"
                                        data-link="https://maps.app.goo.gl/iHGbnuMgDK7GZ2K77">Kaliwadas</button>
                                </li>
                                <li><button class="info-button"
                                        data-info="Basecamp: Desa Bedakah, rute dengan pemandangan indah.
                                Pos 1: Jalur relatif landai melewati perkebunan teh, durasi sekitar 1 jam.
                                Pos 2: Trek menanjak menuju kawasan sabana, membutuhkan waktu 2,5-3 jam.
                                Puncak: Dari sabana menuju puncak memakan waktu 1-1,5 jam, dengan trek yang semakin curam"
                                        data-link="https://maps.app.goo.gl/YSchzCfe5UP48zQM9">Dipajaya</button>
                                </li>
                                <li><button class="info-button"
                                        data-info="Titik Awal: Desa Guci, Kecamatan Bumijawa, Kabupaten Tegal (1.400 mdpl)
                            Estimasi Waktu Pendakian: 8-10 jam
                            Rute Pendakian:
                            Pos 1 (1.750 mdpl): Perjalanan dimulai melalui jalur hutan pinus yang landai dengan pemandangan indah khas daerah Guci. Suhu udara sejuk membuat perjalanan awal ini cukup nyaman. Pos ini sering dijadikan tempat awal untuk beristirahat.
                            Pos 2 (2.100 mdpl): Setelah Pos 1, medan mulai menanjak dengan melewati hutan tropis yang lebih rapat. Terdapat beberapa sumber air kecil di sekitar pos ini, yang sering digunakan pendaki untuk mengisi perbekalan.
                            Pos 3 (2.600 mdpl): Jalur menuju Pos 3 semakin terjal dan berbatu. Vegetasi hutan mulai berkurang, dan pendaki akan merasakan udara semakin dingin. Area ini cukup menantang dengan beberapa jalur berbatu yang curam.
                            Pos 4 (3.000 mdpl): Pos terakhir sebelum zona terbuka menuju puncak. Medan berbatu dan terbuka ini menawarkan pemandangan luas ke bawah. Suhu udara di sini sangat dingin, dan angin kencang sering dirasakan oleh para pendaki.
                            Puncak (3.428 mdpl): Dari puncak Gunung Slamet, pendaki dapat menikmati panorama indah di seluruh penjuru Pulau Jawa, termasuk pemandangan matahari terbit yang spektakuler. Kawah aktif Gunung Slamet juga dapat terlihat jelas dari jalur ini.​"
                                        data-link="https://maps.app.goo.gl/FWznsxQK6mVtCQk59">Guci</button>
                                </li>
                            </ul>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset(path: 'js/infojalur.js') }}"></script>
</body>

</html>