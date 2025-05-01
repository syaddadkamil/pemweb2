<?php
require './dbkoneksi.php';

if (isset($_POST['submit'])) {


    // Tangkap Data dari Form
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kelurahan_id = $_POST['kelurahan_id'];

    // proses insert ke database
    try {
        $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (?,?,?,?,?,?,?,?)";
        // definisikan statement
        $stmt = $db ->prepare($sql);
        // eksekusi statement
        $stmt->execute([$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan_id]);
        // jika berhasil redirect ke list kelurahan
        header('location: listpasien.php');
    } catch (\Throwable $e) {
        echo "Error while insert data pasien: ";
        echo $e;
    }

}
?>
