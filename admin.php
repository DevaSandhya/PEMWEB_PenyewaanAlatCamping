<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="css/admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rinjani Adventure | Admin</title>
    <style>
        /* Styles omitted for brevity */
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">Rinjani Adventure</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Admin</span>
                </a>
            </li>
            <li>
                <a href="categories/categories.php">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Kategori</span>
                </a>
            </li>
            <li>
                <a href="transaction/transaction.php">
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
                <span class="admin_name">Rinjani Adventure Admin</span>
            </div>
        </nav>
        <div class="home-content">
            <h2 id="text">
                <?php
                echo $_SESSION['username'];
                ?>
            </h2>
            <h3 id="date"></h3>
            <p>Selamat Datang Di Halaman Admin Rinjani Adventure</p>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };

        function myFunction() {
            const months = ["Januari", "Februari", "Maret", "April", "Mei",
                "Juni", "Juli", "Agustus", "September",
                "Oktober", "November", "Desember"
            ];
            const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
                "Jumat", "Sabtu"
            ];
            let date = new Date();
            let jam = date.getHours();
            let tanggal = date.getDate();
            let hari = days[date.getDay()];
            let bulan = months[date.getMonth()];
            let tahun = date.getFullYear();
            let m = date.getMinutes();
            let s = date.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
            requestAnimationFrame(myFunction);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        window.onload = function() {
            let date = new Date();
            let jam = date.getHours();
            let text = document.getElementById("text");
            if (jam >= 4 && jam <= 10) {
                text.insertAdjacentText("afterbegin", "Selamat Pagi, ");
            } else if (jam >= 11 && jam <= 14) {
                text.insertAdjacentText("afterbegin", "Selamat Siang, ");
            } else if (jam >= 15 && jam <= 18) {
                text.insertAdjacentText("afterbegin", "Selamat Sore, ");
            } else {
                text.insertAdjacentText("afterbegin", "Selamat Malam, ");
            }
            myFunction();
        };
    </script>
</body>
</html>
