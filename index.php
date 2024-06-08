<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/icon.png" />
    <title>Rinjani Adventure</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

.logo img {
    max-width: 300px;
    height: auto;
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

.jumbotron {
    background-color: #3c6382;
    color: #fff;
    padding: 40px;
    border-radius: 10px;
    margin-bottom: 40px;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.jumbotron h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.jumbotron p {
    font-size: 16px;
    margin-bottom: 20px;
}

.jumbotron button {
    padding: 10px 20px;
    background-color: #fff;
    color: #333;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.jumbotron button:hover {
    background-color: #333;
    color: #fff;
}

.cards-categories {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 20px;
}

.card {
    flex: 0 0 calc(33.333% - 20px);
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    margin-right: 20px; /* Add space between the cards */
}

.card img {
    max-width: 100%;
    max-height: 150px;
    border-radius: 5px;
    object-fit: cover;
}

footer {
    background-color: #3c6382;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

/* Modal */
.modal-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    color: #000;
}

.modal-dialog {
    width: 80%;
    max-width: 500px;
    background-color: #fff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.modal-header {
    border-bottom: none;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #3c6382;
    color: #fff;
    border-radius: 10px 10px 0 0;
}

.modal-title {
    margin: 0;
    font-size: 1.2rem;
}

.btn-close {
    font-size: 1.5rem;
    background: none;
    border: none;
    cursor: pointer;
    color: #fff;
}

.modal-body {
    padding: 20px;
    text-align: left;
}

.form-group {
    margin-bottom: 20px;
}

.form-group .labelmodal {
    display: block;
    margin-bottom: 5px;
}

.inputdata,
.inputalamat {
    width: calc(100% - 16px);
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 5px 0;
}

.modal-footer {
    border-top: none;
    padding: 10px 20px;
    display: flex;
    justify-content: flex-end;
    background-color: #3c6382;
    color: #fff;
    border-radius: 0 0 10px 10px;
}

.btn-secondary,
.btn-biru {
    padding: 8px 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    color: #fff;
}

.btn-secondary {
    background-color: #2b4967;
    margin-right: 10px;
}

.btn-biru {
    background-color: #2b4967;
}

.cards-categories {
    display: flex;
    justify-content: center; /* Center the container horizontally */
    flex-wrap: wrap;
    margin-top: 20px;
}

.card-categories {
    display: flex;
    flex-direction: column;
    flex: 0 0 calc(25% - 20px); /* Adjust the width as needed */
    margin: 0 10px; /* Adjust margin for proper spacing */
}

.card-container {
    display: flex;
    justify-content: space-between;
    flex: 1;
    margin-top: 20px;
    gap: 20px;
}

.card {
    flex: 1 1 calc(33.333% - 20px);
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="assets/rinjani adventure.png" alt="Rinjani Adventure" />
            </div>
            <a href="index.php">Beranda</a>
            <a href="categories.php">Kategori</a>
            <a href="login.php">Masuk</a>
        </nav>
    </header>
    <main>
        <div class="jumbotron">
            <div class="jumbotron-text">
                <h1>Sewa Alat Camping Berkualitas</h1>
                <p>Temukan Perlengkapan Camping Terbaik Untuk Petualangan Anda Bersama Rinjani Adventure</p>
                <button type="button">Mulai Petualanganmu</button>
            </div>
        </div>
        <div class="cards-categories">
            <div class="card">
                <img src="assets/tenda.jpeg" alt="Tenda" />
            </div>
            <div class="card">
                <img src="assets/carrier.jpeg" alt="Carrier" />
            </div>
            <div class="card">
                <img src="assets/kompor.jpeg" alt="Kompor" />
            </div>
            <div class="card">
                <img src="assets/nesting.jpeg" alt="Nesting" />
            </div>
        </div>
            <h2>Formulir Pemesanan</h2>
            <div class="cards-categories">
            <div class="card-categories" id="destinationCards">
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM tb_penyewaan";
                $result = mysqli_query($koneksi, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo "<h3 style='text-align: center; color: red;'>Data Kosong</h3>";
                }
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='card'>
                        <div class='card-image'>
                            <img src='img_categories/$data[photo]' alt='tidak ada gambar' />
                        </div>
                        <div class='card-content'>
                            <h5>$data[nama]</h5>
                            <p class='deskripsi'>Harga : Rp $data[harga]</p>
                            <p class='harga'>$data[deskripsi]</p>
                            <button class='btn_belanja' type='button' onclick='bukaModal(\"$data[id]\")'>Sewa</button>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
        <!-- Modal 1 -->
        <div id="myModal" class="modal-container" onclick="tutupModal()">
            <div class="modal-dialog" onclick="event.stopPropagation()">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Formulir Pemesanan</h1>
                        <button type="button" class="btn-close" aria-label="Close" onclick="tutupModal()"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type="hidden" name="category_id" id="category_id" value="">
                            <input type="hidden" name="category_name" id="category_name" value="">
                            <input type="hidden" name="harga" id="harga" value="">
                            <div class="form-group">
                                <label class="labelmodal" for="recipient-name" class="col-form-label">Nama : </label>
                                <input class="inputdata" type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label class="labelmodal" for="nomor" class="col-form-label">No. Hp : </label>
                                <input class="inputdata" type="text" class="form-control" id="nomor">
                            </div>
                            <div class="form-group">
                                <label class="labelmodal" for="alamat-text" class="col-form-label">Alamat : </label>
                                <textarea class="inputalamat" class="form-control" id="alamat-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="tutupModal()">Keluar</button>
                        <button type="button" class="btn btn-biru" onclick="bukaModal2()">Lanjutkan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div id="myModal2" class="modal-container" onclick="tutupModal2()">
            <div class="modal-dialog" onclick="event.stopPropagation()">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" style="color: #f1f1f1;">Data Transaksi</h1>
                        <button type="button" class="btn-close" aria-label="Close" onclick="tutupModal2()"></button>
                    </div>
                    <form action="transaction/transcation-proses.php" method="post">
                        <div class="modal-body">
                            <!-- <h4>Nama</h4> -->
                            <div class="form-group">
                                <label class="labelmodal" for="detail-nama" class="col-form-label">Nama : </label>
                                <input class="inputdata" type="text" name="detail-nama" class="form-control" id="detail-nama" readonly>
                            </div>
                            <div class="form-group">
                                <label class="labelmodal" for="detail-tanggal" class="col-form-label">Tanggal : </label>
                                <input class="inputdata" type="text" name="detail-tanggal" class="form-control" id="detail-tanggal">
                            </div>
                            <!-- <h4>Pembeli</h4> -->
                            <div class="form-group">
                                <label class="labelmodal" for="detail-harga" class="col-form-label">Harga : </label>
                                <input class="inputdata" name="detail-harga" type="text" class="form-control" id="detail-harga">
                            </div>
                            <div class="form-group">
                                <label class="labelmodal" for="detail-nomor" class="col-form-label">No. Hp : </label>
                                <input class="inputdata" name="detail-nomor" type="text" class="form-control" id="detail-nomor" readonly>
                            </div>
                            <div class="form-group">
                                <label class="labelmodal" for="detail-alamat" class="col-form-label">Alamat : </label>
                                <textarea class="inputalamat" name="detail-alamat" class="form-control" id="detail-alamat" readonly></textarea>
                            </div>
                            <input type="hidden" name="detail-status" value="success">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="kembaliKeModalPertama()">Kembali</button>
                            <button name="simpan" type="submit" class="btn btn-biru" onclick="lakukanPembayaran()">Lakukan Penyewaan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <h4>&copy; Rinjani Adventure</h4>
    </footer>

    <script>
        var selectedCategoryId;

function bukaModal(categoryId) {
    console.log('categoryId:', categoryId); // Debug log
    selectedCategoryId = categoryId;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var categoryData = JSON.parse(xhr.responseText);
            console.log('categoryData:', categoryData); // Debug log

            document.getElementById('category_id').value = categoryId;
            document.getElementById('category_name').value = categoryData.destinasi;
            document.getElementById('harga').value = categoryData.price;
            document.getElementById("myModal").style.display = "flex";
        } else if (xhr.readyState == 4 && xhr.status != 200) {
            console.error('Error fetching data'); // Debug log
        }
    };
    xhr.open("GET", "get-kategori.php?id=" + categoryId, true);
    xhr.send();
}

        function tutupModal() {
            document.getElementById("myModal").style.display = "none";
        }

        function tutupModal2() {
            document.getElementById("myModal2").style.display = "none";
        }

        function bukaModal2() {
            tutupModal();
            document.getElementById("myModal2").style.display = "flex";

            var nama = document.getElementById("recipient-name").value;
            var nomor = document.getElementById("nomor").value;
            var alamat = document.getElementById("alamat-text").value;
            var kategori = document.getElementById("category_name").value;
            var harga = document.getElementById("harga").value;

            document.getElementById("detail-nama").value = nama;
            document.getElementById("detail-nomor").value = nomor;
            document.getElementById("detail-alamat").value = alamat;
            document.getElementById("detail-taggal").value = kategori;
            document.getElementById("detail-harga").value = harga;
        }

        function kembaliKeModalPertama() {
            tutupModal2();
            document.getElementById("myModal").style.display = "flex";
        }

        function lakukanPembayaran() {
            alert("Pembayaran berhasil!");
            tutupModal2();
            document.getElementById("recipient-name").value = "";
            document.getElementById("nomor").value = "";
            document.getElementById("alamat-text").value = "";
        }
    </script>
</body>
</html>
