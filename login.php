<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/icon.png" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<header>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="#">Kategori</a>
        <a href="login.php">Masuk</a>
    </nav>
</header>
<main>
    <div class="form-login">
        <h3>Masuk</h3>
        <form action="login-proses.php" method="post">
        <input type="text" name="username" placeholder="Nama/Email" />
        <input type="password" name="password" placeholder="Kata Sandi" />
        <button type="submit" class="btn_login" name="login" id="login"> Login</button>
        <p>Tidak punya akun? <a href="register.php">Daftar Disini</a></p>
    </div>
</main>
<footer>
    <h4 style="text-align: center;">&copy; Rinjani Adventure</h4>
</footer>
<script>
    function login() {
        var username = document.querySelector(".form-login input[name='username']").value;
        var password = document.querySelector(".form-login input[name='password']").value;

        if (username.trim() === "" || password.trim() === "") {
            alert("Harap isi semua kolom!");
            return;
        }

        // Simulate login process (you can replace this with actual login logic)
        alert("Berhasil login sebagai " + username);
        window.location.href = "admin.php";
    }
</script>
</body>
</html>
