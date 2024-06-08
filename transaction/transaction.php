<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Rinjani Adventure | Transaksi</title>
</head>
<body>
   <div class="sidebar">
      <div class="logo-details">
         <i class="bx bx-category"></i>
         <span class="logo_name">Rinjani Adventure</span>
      </div>
      <ul class="nav-links">
         <li>
            <a href="../admin.php" class="active">
               <i class="bx bx-grid-alt"></i>
               <span class="links_name">Admin</span>
            </a>
         </li>
         <li>
            <a href="../categories/categories.php">
               <i class="bx bx-box"></i>
               <span class="links_name">Kategori</span>
            </a>
         </li>
         <li>
            <a href="../transaction/transaction.php">
               <i class="bx bx-list-ul"></i>
               <span class="links_name">Transaksi</span>
            </a>
         </li>
         <li>
            <a href="../logout.php">
               <i class="bx bx-log-out"></i>
               <span class="links_name">Keluar</span>
            </a>
         </li>
      </ul>
   </div>
   <section class="home-section">
      <nav>
         <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
         </div>
         <div class="profile-details">
            <span class="admin_name"> Rinjani Adventure</span>
         </div>
      </nav>

      <div class="home-content">
         <h3>Transaksi</h3>
         <div class="button-group">
            <button type="button" class="btn btn-tambah">
               <a href="transaction-cetak.php">Cetak Data</a>
            </button>
         </div>
         <table class="table-data">
            <thead>
               <tr>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Harga</th>
                  <th>Alamat</th>
                  <th>No. HP</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               include '../koneksi.php';
               $sql = "SELECT * FROM tb_transaksi";
               $result = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($result) == 0) {
                  echo "
                  <h3 style='text-align: center; color: red;'>Data Kosong</h3>
               ";
               } else {
                  while ($data = mysqli_fetch_assoc($result)) {
                     echo "
                     <tr>
                        <td>$data[nama]</td>
                        <td>$data[tanggal]</td>
                        <td>$data[harga]</td>
                        <td>$data[alamat]</td> 
                        <td >$data[nomor]</td>
                        <td>
                        <button class='btn_detail' data-nomor='$data[nomor]' onclick='showDetails(\"$data[tanggal]\", \"$data[harga]\", \"$data[nama]\", \"$data[alamat]\")'>Detail</button>
                        </td>
                     </tr>
                     ";
                  }
               }
               ?>
            </tbody>
         </table>
      </div>
   </section>
   <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
         sidebar.classList.toggle("active");
         if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
         } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
      function showDetails(tanggal, nama, harga, alamat, deskripsi, nomor) {
         let nomor = event.target.getAttribute('data-nomor');
         alert(`Tanggal: ${tanggal}\nNama: ${nama}\nHarga: ${harga}\nAlamat: ${alamat}\nDeskripsi: ${deskripsi}\nNomor: ${nomor}`);
      }
   </script>
</body>
</html>
