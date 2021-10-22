<?php
session_start();

echo "Nama anda ".$_SESSION['nama'];
echo "<br/><a href='session_01.php'>Menuju ke halaman pertama</a>";
?>