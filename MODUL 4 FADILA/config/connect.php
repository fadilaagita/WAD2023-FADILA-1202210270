<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$connect = mysqli_connect("localhost:4306", "root", "", "modul4"); 
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// 
 
?>