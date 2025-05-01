<?php
require_once './template/top.php';
$tittle = "Dashboard - puskesmas pocin";

?>
        <!-- Sidebar -->
         <?php
        require_once './template/sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <?php
                require_once './template/topbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Puskesmas Tugu</h1>

                    <div class = "card">
                        <div class="card-header">
                        Created By
                    </div>
                        <div class="card-body">
                            <p class="card-tittle">Syaddad Muslim Kamil</p>
                            <p class="card-text">Nim : 0110124018</p>
                            <p class="card-text">Prodi : Sistem Informasi</p>
                            <p class="card-text">STT NF  </p>
                        </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            require_once './template/footer.php';
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
         <?php
         require_once './template/bottom.php';
         ?>

    