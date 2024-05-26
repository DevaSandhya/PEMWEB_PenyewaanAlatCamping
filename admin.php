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
    <title>Rinjani Adventure Admin</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color:  #3c6382;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar .logo-details {
            padding-bottom: 30px;
            text-align: center;
        }
        .sidebar .logo-details .logo_name {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .nav-links {
            margin-top: 20px;
            list-style: none;
            padding: 0;
        }
        .nav-links li {
            margin-bottom: 10px;
        }
        .nav-links li a {
            display: flex;
            align-items: center;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            transition: all 0.3s ease;
        }
        .nav-links li a:hover {
            background-color: #3c6382;
        }
        .nav-links li a .links_name {
            margin-left: 15px;
        }
        .home-section {
            margin-left: 250px;
            padding: 20px;
        }
        .home-section h1 {
            color: #333;
            text-align: center;
        }
        .sidebar-button {
            display: none;
        }
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
            }
            .sidebar .logo-details {
                padding-bottom: 10px;
            }
            .sidebar .logo-details .logo_name {
                font-size: 1.2rem;
            }
            .sidebar .nav-links {
                margin-top: 10px;
            }
            .sidebar .nav-links li a .links_name {
                display: none;
            }
            .sidebar.active {
                display: none;
            }
            .sidebar-button {
                display: block;
                color: #fff;
                position: fixed;
                right: 10px;
                top: 10px;
                font-size: 24px;
                cursor: pointer;
            }
        }
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
            <h1>Selamat Datang Admin</h1>
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
    </script>
</body>
</html>
