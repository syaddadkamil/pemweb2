<?php
require './dbkoneksi.php';

if (isset($_POST['submit'])) 
// Tangkap Data dari Form
$kec_id = $_POST['kec_id'];
$nama = $_POST['nama'];
if (isset($_POST['id'])) {



    switch ($_POST['submit']) {
        case 'simpan':
           
            // proses insert ke database
            try {
                $sql = "INSERT INTO kelurahan (nama, kec_id) VALUES (?,?)";
                // definisikan statement
                $stmt = $db ->prepare($sql);
                // eksekusi statement
            
            // jika berhasil redirect ke list kelurahan
            header('location: listkelurahan.php');
                $stmt->execute([$nama, $kec_id]);
            } catch (\Throwable $e) {
                echo "Error while insert data kelurahan: ";
                echo $e;
            }
            
            
            break;
            case 'ubah':
                //Proses update ke database
                $id = $_POST['id'];
                
                break;
                
                default;
                $id = $_POST['id'];
                try {
                    $sql = "DELETE FROMkelurahan WHERE id = ?";
                    // definisikan statement
                    $stmt = $db ->prepare($sql);
                    // eksekusi statement
                    $stmt->execute([$id]);
                    // jika berhasil redirect ke list kelurahan
                header('location: listkelurahan.php');
                } catch (\Throwable $e) {
                    echo "Error while delete data kelurahan: ";
                    echo $e;
                }
                break;
            }
        }

?>
