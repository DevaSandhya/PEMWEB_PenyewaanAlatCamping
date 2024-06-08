<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/icon.png" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }
        header {
            background-color: #3c6382;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #000;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        .form-login {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 40px auto;
        }
        .form-login h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-login input {
            width: calc(100% - 22px); /* Adjusted width to account for padding and border */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            box-sizing: border-box; /* Ensure padding and border are included in the width */
        }
        .btn_login {
            padding: 10px 20px;
            background-color: #3c6382;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn_login:hover {
            background-color: #2b4967;
        }
        footer {
            background-color: #3c6382;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
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
            </form>
        </div>
    </main>
    <footer>
        <h4>&copy; Rinjani Adventure</h4>
    </footer>
</body>
</html>
