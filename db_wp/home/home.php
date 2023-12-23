<?php include '../blade/header.php' ?>

<div class="container">
    <div class="card">
        <div class="card-header bg-info">
            <!-- judul sistem -->
            <?php include '../blade/namaProgram.php'; ?>
        </div>
        <!-- nav -->
        <?php include '../blade/nav.php' ?>
        <!-- body -->
        <div class="card-body">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 shadow py-3">
                    <!-- judul -->
                    <p class="text-center fw-bold">Pemilihan Motor Second</p>
                    <hr>
                    <!-- gambar -->
                    <div class="gambar bg-light bg-gradient">
                        <div class="text-center">
                            <img src="../img/pnsImage.JPG" class="rounded" alt="..."> <!-- gambar ukm awards e nur -->
                        </div>
                    </div>
                    <hr>
                    <!-- pengantar -->
                    <p>
                        Pembuatan website ini berguna untuk mempermudah masyarakat dalam membeli kendaraan roda dua dengan kondisi second
                        <br>
                        Pemilihan rekomendasi motor second dipilih berdasarkan faktor faktor penting yang harus diperhatikan oleh pengendara
                        <br>

                    </p>

                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include '../blade/footer.php' ?>