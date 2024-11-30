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
                        Peraturan pendakian Gunung Lawu mengatur berbagai hal yang harus dipatuhi oleh para pendaki demi keamanan dan kelestarian alam. Berikut beberapa hal penting yang perlu diperhatikan:
                    </p>
                    <ol>
                        <li>
                            <b>Kewajiban Pendaki</b>:
                            <ul>
                                <li>Pendaki wajib melapor kepada petugas sebelum dan sesudah pendakian.</li>
                                <li>Menggunakan peralatan standar dan membawa perbekalan yang cukup untuk pendakian.</li>
                                <li>Menjaga kebersihan dan keseimbangan lingkungan, serta membawa sampah kembali turun.</li>
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
                                <li>Tidak membuat atau melewati jalur terobosan dan tidak memisahkan diri dari kelompok.</li>
                                <li>Dilarang menggunakan obor atau membuat api unggun yang tidak terkontrol.</li>
                                <li>Tidak boleh merusak alam, seperti memotong pohon atau merusak rambu.</li>
                                <li>Pendaki dilarang melakukan tindakan tidak sopan atau merusak tempat-tempat yang dianggap keramat.</li>
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
                                <li>Cemoro Kandang, Cendo Cetho, Cemoro Sewu, Singolangu, dan Tambak.</li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>


        </div>

    </section>

</body>

</html>