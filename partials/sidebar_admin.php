<!DOCTYPE html>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
 <li><a href="http://localhost/ssaa/admin/index.php">Dashboard</a></li>
        <li><a href="#">Master Data</a>
            <ul>
                <li><a href="http://localhost/ssaa/admin/master_data/data_anggota/index.php">Data Anggota</a></li>
                <li><a href="http://localhost/ssaa/admin/master_data/data_admin/index.php">Data Admin</a></li>
                <li><a href="http://localhost/ssaa/admin/master_data/data_peminjaman/index.php">Data Peminjaman</a></li>
            </ul>
        </li>
        <li><a href="#">Katalog Buku</a>
            <ul>
                <li><a href="http://localhost/ssaa/admin/katalog_buku/data_buku/index.php">Data Buku</a></li>
                <li><a href="http://localhost/ssaa/admin/katalog_buku/data_kategori/index.php">Data Kategori</a></li>
                <li><a href="http://localhost/ssaa/admin/katalog_buku/data_penerbit/index.php">Data Penerbit</a></li>
            </ul>
        </li>
        <li><a href="http://localhost/ssaa/admin/laporan_perpustakaan/index.php">Laporan Perpustakaan</a></li>
        <li><a href="http://localhost/ssaa/admin/identitas.php">Identitas</a></li>
        <li><a href="http://localhost/ssaa/admin/pesan.php">Pesan</a></li>
        <li><a href="http://localhost/ssaa/logout.php">Keluar</a>
        </li>
    </ul>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Selamat Datang Admin</h1>
  </div>
</div>

<div class="w3-container">
<div class="sidebar">
    <ul>

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html> 