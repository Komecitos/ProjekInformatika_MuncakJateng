<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>
    <link rel="stylesheet" href="{{ asset('css/mountainWeather.css') }}">
</head>

<style>

</style>

<body>
    @include('layouts.header')
    <section class="mountain-main" id="weather2">
        <div class="text">
            <h5><b>Lokasi basecamp: {{ $location }}.</b></h5>
            <div>
                <button type="button" onclick="toggleSection()" id="toggleButton">Keterangan</button>
                <button type="button" onclick="window.history.back()">Gunung</button>
            </div>
        </div>
        <section id="keterangan" class="hidden">
            <table>
                <tr>
                    <td colspan="2">
                        <h6 style="font-weight: normal;">Prediksi cuaca untuk hari ini dan 5 hari kedepan by <a href="https://openweathermap.org/" target="_blank">OpenWeather API</a></h6>
                    </td>
                </tr>
                <tr>
                    <td><b>Suhu:</b> Menampilkan suhu di lokasi tersebut pada waktu tertentu. Data ini diperoleh dalam satuan Celsius (°C), karena menggunakan parameter units=metric.</td>
                    <td><b>Kelembapan:</b> Menunjukkan persentase kelembapan udara pada waktu tertentu. Kelembapan tinggi menunjukkan udara yang lebih lembap, sementara kelembapan rendah menunjukkan udara yang lebih kering.</td>
                </tr>
                <tr>
                    <td><b>Curah hujan: </b>Menampilkan jumlah curah hujan dalam satuan milimeter (mm) dalam periode waktu tertentu. Curah hujan tinggi bisa meningkatkan risiko bahaya seperti tanah longsor, kebasahan, dan visibilitas yang rendah.</td>
                    <td><b>Kecepatan angin: </b>
                        Menunjukkan kecepatan angin di lokasi pada waktu tertentu dalam satuan meter per detik (m/s).
                        Contoh: 5 m/s berarti angin bertiup dengan kecepatan 5 meter per detik.
                        Kecepatan angin mempengaruhi kenyamanan saat pendakian. Angin kencang bisa membuat suhu terasa lebih dingin dan berbahaya untuk pendaki, terutama di daerah puncak gunung.</td>
                </tr>
                <tr>
                    <td><b>Tekanan : </b>
                        Mengindikasikan kestabilan cuaca dan membantu memprediksi kondisi cuaca yang akan datang. Tekanan tinggi cenderung mendatangkan cuaca cerah, sementara tekanan rendah biasanya menandakan cuaca buruk seperti hujan atau badai.</td>
                    <td><b>Visibilitas : </b>
                        Menggambarkan seberapa jauh pandangan dapat diterima dalam cuaca tertentu. Visibilitas yang baik memungkinkan pendakian yang aman dan nyaman, sedangkan visibilitas yang buruk (misalnya karena kabut atau hujan) dapat menyebabkan kesulitan dan berisiko tinggi bagi pendaki.</td>
                </tr>
                <tr>
                    <td><b>Arah angin : </b>Angin dari arah tertentu dapat membawa udara dingin atau hangat, serta mempengaruhi visibilitas dan stabilitas cuaca untuk aktivitas luar ruangan.</td>
                    <td><b>Deskripsi cuaca: </b>
                        Sebuah ringkasan atau catatan tambahan mengenai kondisi cuaca yang menjelaskan apa yang terjadi secara umum pada hari tersebut, seperti apakah cerah, berawan, hujan, atau ada potensi badai.</td>
                </tr>
            </table>
        </section>
        <section id="weather1">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Suhu Max</th>
                        <th>Suhu Min</th>
                        <th>Kelembapan</th>
                        <th>Tekanan</th>
                        <th>Visibilitas</th>
                        <th>Kecepatan Angin</th>
                        <th>Arah Angin</th>
                        <th>Curah Hujan</th>
                        <th>Deskripsi Cuaca</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forecast as $day)
                    <tr style="background-color: #f0f0f0;">
                        <td style="text-align: left;" colspan="10"><b>{{ \Carbon\Carbon::parse($day['dt_txt'])->locale('id')->isoFormat('dddd, DD MMMM YYYY') }},
                                {{ date('H:i', strtotime($day['dt_txt'])) }}</b></td>
                        <!-- <td colspan="10"></td> -->
                    </tr>
                    <tr>
                        <td style="text-align: left;">Data Cuaca:</td>
                        <td>{{ $day['main']['temp_max'] }}°C</td>
                        <td>{{ $day['main']['temp_min'] }}°C</td>
                        <td>{{ $day['main']['humidity'] }}%</td>
                        <td>{{ $day['main']['pressure'] }} hPa</td>
                        <td>{{ $day['visibility'] ?? 'N/A' }} m</td>
                        <td>{{ $day['wind']['speed'] }} m/s</td>
                        <td>{{ $day['wind']['deg'] }}°</td>
                        <td>{{ $day['rain']['3h'] ?? 0 }} mm</td>
                        <td>{{ $day['weather'][0]['description'] }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Catatan: </td>
                        <td colspan="10">{{ $recommendations[date('Y-m-d', strtotime($day['dt_txt']))] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </section>

    <script>
        function toggleSection() {
            var section = document.getElementById("keterangan");
            var button = document.getElementById("toggleButton");

            section.classList.toggle("hidden");

            if (section.classList.contains("hidden")) {
                button.classList.remove("showing");
                button.classList.add("hidden-button");
            } else {
                button.classList.remove("hidden-button");
                button.classList.add("showing");
            }
        }
    </script>
</body>

</html>