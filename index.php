<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas_Basis_Data_eza</title>
</head>
<body>
   <div class="container">
      <center><h1>AGEN TIKET BUS NYAMAN</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM bus';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>TABEL BUS</h3>
         <table>
          <tr>
            <th>ID BUS</th>
            <th>NOMOR PLAT</th>
            <th>KAPASITAS</th>
            <th>MEREK</th>
        </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Bus'];?></td>
               <td><?= $row['Nomor_Plat'];?></td>
               <td><?= $row['Kapasitas'];?></td>
               <td><?= $row['Merek'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM pelanggan';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>TABEL PELANGGAN</h3>
         <table>
          <tr>
            <th>ID PELANGGAN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>TANGGAL LAHIR</th>
            <th>NOMOR TELEPON</th>
            <th>STATUS KEANGGOTAAN</th>
            <th>TANGGAL BERGABUNG</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Pelanggan'];?></td>
               <td><?= $row['Nama'];?></td>
               <td><?= $row['Alamat'];?></td>
               <td><?= $row['Tanggal_Lahir'];?></td>
               <td><?= $row['Nomor_Telepon'];?></td>
               <td><?= $row['Status_Keanggotaan'];?></td>
               <td><?= $row['Tanggal_Bergabung'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM pemesanan';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>TABEL PEMESANAN</h3>
         <table>
          <tr>
            <th>ID PEMESANAN</th>
            <th>ID PELANGGAN</th>
            <th>ID JADWAL</th>
            <th>TANGGAL PEMESANAN</th>
            <th>JUMLAH TIKET</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Pemesanan'];?></td>
               <td><?= $row['ID_Pelanggan'];?></td>
               <td><?= $row['ID_Jadwal'];?></td>
               <td><?= $row['Tanggal_Pemesanan'];?></td>
               <td><?= $row['Jumlah_Tiket'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM jadwal';
         $result = mysqli_query($conn, $sql4);
         ?>
         <h3>TABEL JADWAL</h3>
         <table>
          <tr>
            <th>ID JADWAL</th>
            <th>ID BUS</th>
            <th>TUJUAN</th>
            <th>TANGGAL BERANGKAT</th>
            <th>WAKTU BERANGKAT</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Jadwal'];?></td>
               <td><?= $row['ID_Bus'];?></td>
               <td><?= $row['Tujuan'];?></td>
               <td><?= $row['Tanggal_Berangkat'];?></td>
               <td><?= $row['Waktu_Berangkat'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
      </div>
   </div>
</body>
</html>
</table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM Detail_Pemesanan';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>TABEL DETAIL PEMESANAN</h3>
         <table>
          <tr>
            <th>ID PEMESANAN</th>
            <th>ID BUS</th>
            <th>NOMOR KURSI</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Pemesanan'];?></td>
               <td><?= $row['ID_Bus'];?></td>
               <td><?= $row['Nomor_Kursi'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");