<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pemesanan = $_POST['id_pemesanan'];
    $nama_pemesan = $_POST['nama_pemesan'];
    $nomor_identitas = $_POST['nomor_identitas'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $harga = $_POST['harga'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $durasi_menginap = $_POST['durasi_menginap'];
    $breakfast = isset($_POST['breakfast']) ? 1 : 0;

    $conn = new mysqli('localhost', 'root', '', 'db_anyahotel');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO pemesanan (id_pemesanan, nama_pemesan, nomor_identitas, tipe_kamar, harga, tanggal_pesan, durasi_menginap, breakfast)
            VALUES ('$id_pemesanan', '$nama_pemesan', '$nomor_identitas', '$tipe_kamar', '$harga', '$tanggal_pesan', '$durasi_menginap', '$breakfast')";

    if ($conn->query($sql) === TRUE) {
        echo "Pemesanan berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>