<?php include("./header.php"); ?>
<?php if (empty($_SESSION['id_user'])) {
    echo '<script language="javascript">';
    echo 'alert("Silahkan login terlebih dahulu");';
    echo 'window.location.href = "./login.php";';
    echo '</script>';
} ?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Laporan Barang</h1>
</div>
<?php
$sqll_1 = "SELECT * FROM kategori_barang";
$resultt_1 = $conn->query($sqll_1);
$datanya = mysqli_num_rows($resultt_1);
$seq_number = 1;
if ($datanya > 0) {
?>
    <center>
        <a type="button" class="btn btn-lg btn-block btn-primary col-md-2" style="color: white;" href="./print_data.php?id_kategori=all" target="_blank">Print Semua Data</a>
    </center>
    <br />
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <?php
            while ($hasill_1 = $resultt_1->fetch_assoc()) {
            ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><?= $hasill_1['nama']; ?></h4>
                        </div>
                        <div class="card-body">
                            <?php
                            $sqll_2 = "SELECT * FROM `data_barang` WHERE `id_kategori` = '" . $hasill_1['id'] . "'";
                            $resultt_2 = $conn->query($sqll_2);
                            $data_barang = mysqli_num_rows($resultt_2);
                            ?>
                            <h1 class="card-title pricing-card-title"><?= $data_barang; ?> <small class="text-muted">Barang</small></h1>
                            <a type="button" class="btn btn-lg btn-block btn-info" style="color: white;" href="./print_data.php?id_kategori=<?= $hasill_1['id']; ?>" target="_blank">Print Data</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } else { ?>
    <center>
        <p>Data kosong.</p>
    </center>
<?php } ?>
<?php include("./footer.php"); ?>