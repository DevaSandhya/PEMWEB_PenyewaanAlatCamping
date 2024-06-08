<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
    exit();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../koneksi.php';

$sql = "SELECT * FROM tb_penyewaan";
$result = mysqli_query($koneksi, $sql);
if (!$result) {
    die('Query invalid: ' . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="../css/admin.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rinjani Adventure | Kategori</title>
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
                <span class="admin_name">Rinjani Adventure</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Kategori</h3>
            <button type="button" class="btn btn-tambah">
                <a href="categories-entry.php">Tambah Data</a>
            </button>
            <table class="table-data">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20%">Foto</th>
                        <th>Nama Pelanggan</th>
                        <th scope="col" style="width: 30%">Deskripsi</th>
                        <th scope="col" style="width: 15%">Harga</th>
                        <th scope="col" style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) == 0) {
                        echo "
                        <tr>
                            <td colspan='5' align='center'>
                                Data Kosong
                            </td>
                        </tr>
                        ";
                    } else {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "
                            <tr>
                                <td>
                                    <img src='../img_categories/{$data['photo']}' width='200px'>
                                </td>
                                <td>{$data['nama']}</td>
                                <td>{$data['deskripsi']}</td>
                                <td>{$data['harga']}</td>
                                <td>
                                    <a class='btn-edit' href='categories-edit.php?id={$data['id']}'>Edit</a> | 
                                    <a class='btn-delete' href='categories-hapus.php?id={$data['id']}'>Hapus</a>
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
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        };
    </script>
</body>

</html>
