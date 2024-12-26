<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/about.css') }}" type="text/css">
</head>

<body>
  @include('layouts.header')

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="px-5 col-md-8 text-center mx-auto">
          <h3 class="text-primary display-4"> <b>Tentang Kami</b></h3>
          <h2 class="my-3">Selamat Datang di Muncak Jateng</h2>
          <p class="mb-3">Kami hadir sebagai platform yang didedikasikan untuk para pecinta alam, khususnya pendaki yang ingin mengeksplorasi keindahan gunung-gunung di Jawa Tengah seperti Merbabu, Lawu, Sindoro, Sumbing, dan Slamet. Dengan semangat mencintai alam dan menjaga kelestariannya, kami bertujuan untuk menjadi teman perjalanan Anda dalam setiap langkah mendaki</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="ml-auto col-lg-5">
          <div class="card my-2">
            <div class="card-body p-4 h-50">
              <div class="row">
                <div class="col-md-4"> <img class="img-fluid d-block rounded-circle mb-3" src="https://static.pingendo.com/img-placeholder-3.svg"> </div>
                <div class="d-flex flex-column col-md-8 text-dark">
                  <p class="mb-3">Menjadi platform utama bagi para pendaki dan pecinta alam di Indonesia yang menyediakan informasi lengkap, edukasi, dan inspirasi untuk menjelajahi serta melestarikan keindahan alam</p>
                  <p class="mb-0">VISI</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mr-auto col-lg-5">
          <div class="card my-2">
            <div class="card-body p-4 h-50">
              <div class="row">
                <div class="col-md-4"> <img class="img-fluid d-block rounded-circle mb-3" src="https://static.pingendo.com/img-placeholder-1.svg"> </div>
                <div class="d-flex flex-column col-md-8 text-dark">
                  <p class="mb-3">1. Memberikan informasi akurat dan terperinci mengenai jalur pendakian, kondisi gunung, serta tips keamanan.&nbsp;<br>2. Mengedukasi masyarakat tentang pentingnya mendaki secara bertanggung jawab dan menjaga lingkungan.&nbsp;<br>3. Membentuk komunitas pendaki yang solid dan saling mendukung dalam berbagi pengalaman.&nbsp;<br>4. Mendorong pelestarian alam melalui program dan kampanye sadar lingkungan. </p>
                  <p class="mb-0">MISI</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-12 text-center">
          <h1 class="mb-4" contenteditable="true">Layanan Kami</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="row mb-4">
            <div class="col-3"> <img class="img-fluid d-block mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-1.svg" width="100" alt="Card image cap"> </div>
            <div class="col-9">
              <h4>Panduan Pendakian</h4>
              <p class="mb-0">Informasi terperinci mengenai jalur pendakian, durasi, tingkat kesulitan, dan tips keselamatan</p>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-3"> <img class="img-fluid d-block mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-2.svg" width="100" alt="Card image cap"> </div>
            <div class="col-9">
              <h4>Rekomendasi Gunung</h4>
              <p class="mb-0">Eksplorasi gunung-gunung terbaik di Jawa Tengah, termasuk kisah unik dan daya tarik masing-masing gunung</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row mb-4">
            <div class="col-3"> <img class="img-fluid d-block mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-2.svg" width="100" alt="Card image cap"> </div>
            <div class="col-9">
              <h4>Fitur Pemesanan Tiket</h4>
              <p class="mb-0"> Memudahkan Anda memesan tiket pendakian secara online dengan pengaturan kuota maksimal per hari</p>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-3"> <img class="img-fluid d-block mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-3.svg" width="100" alt="Card image cap"> </div>
            <div class="col-9">
              <h4>Artikel Edukasi</h4>
              <p class="mb-0">Artikel tentang persiapan mendaki, perlengkapan wajib, dan cara mendaki yang ramah lingkungan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-12">
          <h1>Motto Kami&nbsp;</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 p-4 text-center col-lg-4">
          <p class="mb-3">Menjadikan alam sebagai rumah kedua yang harus dijaga dan dihormati</p>
          <p class="mb-1"> <b>Cinta Alam</b></p>
        </div>
        <div class="col-md-4 p-4 text-center col-lg-4">
          <p class="mb-3">Menempatkan keselamatan pendaki sebagai prioritas utama</p>
          <p class="mb-1"> <b>Keamanan</b></p>
        </div>
        <div class="col-lg-4 p-4 text-center" style="">
          <p class="mb-3">Berkontribusi dalam melestarikan keindahan alam untuk generasi mendatang</p>
          <p class="mb-1">
            <b>Keberlanjutan</b>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Mengapa Harus Kami</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-md-8">
          <ul>
            <li class="mb-2"> <b>Informasi Terpercaya</b>&nbsp;- Semua konten kami dibuat berdasarkan riset dan pengalaman dari pendaki profesional</li>
            <li class="mb-2"> <b>Kemudahan Akses</b> - Dengan platform kami, semua informasi pendakian ada di ujung jari Anda</li>
            <li class="mb-2"> <b>Dukungan Ramah Lingkungan</b>&nbsp;- Kami berkomitmen untuk mempromosikan praktik mendaki yang minim dampak terhadap lingkungan</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center" style="">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-8">
          <h1>Mari Mulai Petualangan Anda!</h1>
          <p class="mb-4"> Bersama Muncak Jateng, mari kita jelajahi keindahan gunung-gunung di Jawa Tengah sambil menjaga kelestariannya. Setiap langkah kecil Anda akan menjadi bagian dari perjalanan besar dalam mencintai dan melindungi alam.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 d-flex align-items-center justify-content-center my-3"> <a href="#">
            <i class="d-block fa fa-facebook-official text-muted fa-lg mr-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-google-plus-official text-muted fa-lg mx-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
          </a> </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© 2024 All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>