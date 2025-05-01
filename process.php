<?php
// filepath: d:\KULIAH UNPAM\Semester 4\Algoritma\Project Printing Cloudcomputing\process.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $sisi = htmlspecialchars($_POST['sisi']);
    $pengambilan = htmlspecialchars($_POST['pengambilan']);

    // Simpan data ke file (database sederhana)
    $data = "Nama: $nama\nEmail: $email\nJenis Cetak: $jenis\nSisi Cetak: $sisi\nOpsi Pengambilan: $pengambilan\n\n";
    file_put_contents("orders.txt", $data, FILE_APPEND);

    // Tampilkan pesan sukses
    echo "<h1>Terima kasih, $nama!</h1>";
    echo "<p>Pesanan Anda telah diterima.</p>";
    echo "<p>Detail Pesanan:</p>";
    echo "<ul>";
    echo "<li>Email: $email</li>";
    echo "<li>Jenis Cetak: $jenis</li>";
    echo "<li>Sisi Cetak: $sisi</li>";
    echo "<li>Opsi Pengambilan: $pengambilan</li>";
    echo "</ul>";
    echo "<a href='website.html'>Kembali ke Form</a>";
}
else {
    echo "<h1>Invalid Request</h1>";
    echo "<p>Silakan isi form dengan benar.</p>";
    echo "<a href='website.html'>Kembali ke Form</a>";
}
?>