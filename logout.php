<?php
    session_start();
    session_unset();
    echo "
        <script>
            alert('Berhasil Keluar')
            window.location = 'login.php'
        </script>
    ";
?>
        