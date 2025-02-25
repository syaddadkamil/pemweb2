<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gradient-custom {
            background: linear-gradient(to right, #667eea, #764ba2);
        }
        .table-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 20px;
        }
        .table thead th {
            background-color: #667eea;
            color: white;
            border: none;
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="gradient-custom min-vh-100 py-5">
    <?php
    $ns1 = ['id' => 1,'nim' => '0110124018','uts' => 79,'uas' => 78,'tugas' => 70];
    $ns2 = ['id' => 2,'nim' => '0110124018','uts' => 75,'uas' => 91,'tugas' => 78];
    $ns3 = ['id' => 3,'nim' => '0110124018','uts' => 79,'uas' => 75,'tugas' => 80];
    $ns4 = ['id' => 4,'nim' => '0110124018','uts' => 80,'uas' => 86,'tugas' => 89];
    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
    ?>

    <div class="container">
        <div class="table-container">
            <h2 class="text-center mb-4">Daftar Nilai Siswa</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>NIM</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Tugas</th>
                            <th>Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach($ar_nilai as $ns){
                            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                        ?>
                        <tr class="text-center">
                            <td><?= $nomor ?></td>
                            <td><?= $ns['nim'] ?></td>
                            <td><?= $ns['uts'] ?></td>
                            <td><?= $ns['uas'] ?></td>
                            <td><?= $ns['tugas'] ?></td>
                            <td><?= number_format($nilai_akhir,2,',','.') ?></td>
                        </tr>
                        <?php
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>