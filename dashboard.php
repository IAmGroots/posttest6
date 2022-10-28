<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
  <div class="bg">
    <div class="container">
      <div class="head">
        <h2>Dashboard Next Update Games</h2>
        <div class="search">
          <input type="search" name="" id="" placeholder="Genshin Impact">
          <i class="uil uil-search" onclick="search()"></i>
        </div>
      </div>
      <a href="index.html" class="back">Kembali</a>
      <div class="table-box">
        <table>
          <tr>
            <td class="data nomor">No</td>
            <td class="tNama">Nama</td>
            <td class="tGenre">Genre</td>
            <td class="tDeskripsi">Deskripsi</td>
            <td class="tGambar">Gambar</td>
            <td class="tWaktu">Keterangan</td>
            <td class="tActionHead">Action</td>
          </tr>
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM listGames");
          $no = 1;

          while ($row = mysqli_fetch_array($query)) {
            echo "<tr class='row'>";
            echo "<td class='tNomor'>$no</td>";
            echo "<td class='tNama'>$row[nama]</td>";
            echo "<td class='tGenre'>$row[genre]</td>";
            echo "<td class='tDeskripsi'>$row[deskripsi]</td>";
            echo "<td class='tGambar'><img src='databaseImages/$row[gambar]' class='gambar-cover' width='100%' height='100%' alt='Gambar'></td>";
            echo "<td class='tWaktu'>$row[waktu]</td>";
            echo "<td class='tAction'>
                <a href='halaman/editData.php?id=$row[id]' class='kuning'><i class='uil uil-edit'></i></a>
                <a href='proses/deleteData.php?id=$row[id]' class='merah'><i class='uil uil-trash-alt'></i></a>
                </td>";
            echo "</tr>";
            $no++;
          }
          ?>
          <tr>
            <td class="tombol" colspan="7">
              <a href="halaman/addData.php">Tambah Data</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

<script>
  function search() {
    alert("To Be Continue ...");
  }
</script>

</html>