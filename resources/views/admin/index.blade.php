<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Pendakian Muncak Jateng</title>
  <link rel="stylesheet" href="{{ asset('css/admin.pendakian.css') }}">
  <link rel="icon" href="{{ asset('img/muncak.png') }}">
</head>

<body>
  <div class="dashboard">
    <aside class="sidebar">
      <div class="logo">
        <img src="{{ asset('img/muncak.png') }}" alt="muncak logo">
      </div>
      <nav class="menu">
        <a href="#" class="active">Pendakian</a>
        <a href="#">Cuaca</a>
        <a href="#">Pengaturan</a>
      </nav>
      <div class="busy-mode">
        <span>Admin Mode</span>
      </div>
    </aside>

    <main class="content">
      <section class="order-history">
        <div class="header">
          <h1>Daftar Pendakian</h1>
          <div class="search-bar">
            <form method="GET" action="">
              <input type="text" name="id_tiket" id="id_tiket" placeholder="Cari Nomor Tiket" required>
              <button type="button" onclick="submitSearch()">Cari</button>
            </form>
          </div>

          <script>
            function submitSearch() {
              // Ambil nilai input ID Tiket
              let idTiket = document.getElementById('id_tiket').value;
              // Redirect ke route dengan parameter id_tiket
              if (idTiket) {
                window.location.href = `/cari-pendakian/${idTiket}`;
              }
            }
          </script>



        </div>
        <table class="order-table">
          <thead>
            <tr>
              <th>ID Pendakian</th>
              <th>Jumlah</th>
              <th>Tanggal</th>
              <th>Waktu Naik</th>
              <th>Waktu Turun</th>
              <th>Status</th>
              <th>ID User</th>
              <th>ID Via</th>
              <th>No Telepon Darurat</th>
              <th>Data Rilis</th>
              <th>Update Data</th>
            </tr>
          </thead>
          <tbody>
            @if (isset($pendakian) && $pendakian)
            <tr>
              <td>{{ $pendakian->id_pendakian }}</td>
              <td colspan="10">Data ditemukan untuk ID Tiket: {{ $id_tiket }}</td>
            </tr>
            @else
            <tr>
              <td colspan="10">Data tidak ditemukan untuk ID Tiket: {{ $id_tiket ?? 'N/A' }}</td>
            </tr>
            @endif
          </tbody>

          <!-- -->
        </table>
      </section>
    </main>
  </div>
</body>

</html>