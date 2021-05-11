<?php include("./header.php"); ?>
<?php if (empty($_SESSION['id_user'])) {
    echo '<script language="javascript">';
    echo 'alert("Silahkan login terlebih dahulu");';
    echo 'window.location.href = "./login.php";';
    echo '</script>';
} ?>
<style>
    .container {
        padding: 60px 0px 0;
    }
</style>
<div class="container">
    <h2>Data Barang</h2>
    <br />
    <a href="./data_barang_tambah.php" class="btn btn-sm btn-primary btn-block col-md-2" type="button" style="color: white;">Tambah</button></a>
    <br />
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Qty</th>
                <th>Kondisi</th>
                <th>Tanggal Input</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqll_1 = "SELECT `brg`.`id` AS `id_barang`, `brg`.`id_kategori` AS `id_kategori`, `brg`.`nama_barang` AS `nama_barang`, `ktg`.`nama` AS `nama_kategori`, `brg`.`qty` AS `qty`, `brg`.`kondisi` AS `kondisi`, `brg`.`tanggal_input` AS `tanggal_input`
            FROM `data_barang` AS `brg` INNER JOIN `kategori_barang` AS `ktg` ON `ktg`.`id` = `brg`.`id_kategori`;";
            $resultt_1 = $conn->query($sqll_1);
            $seq_number = 1;
            while ($hasill_1 = $resultt_1->fetch_assoc()) {
            ?>
                <tr>
                    <td><?= $seq_number; ?></td>
                    <td><?= $hasill_1['nama_barang']; ?></td>
                    <td><?= $hasill_1['nama_kategori'] ?></td>
                    <td><?= $hasill_1['qty']; ?></td>
                    <td><?= $hasill_1['kondisi']; ?></td>
                    <td><?= $hasill_1['tanggal_input']; ?></td>
                    <td>
                        <a href="./data_barang_edit.php?id_barang=<?= $hasill_1['id_barang']; ?>"><button class="btn btn-sm btn-info col-md-3" type="button">Edit</button></a>
                        <a href="./core/process.php?action=hapus_barang&id_barang=<?= $hasill_1['id_barang']; ?>" onclick="return confirm('Anda yakin ingin menghapus data barang ini?')"><button class="btn btn-sm btn-danger col-md-4" type="button">Hapus</button></a>
                    </td>
                </tr>
                <?php $seq_number++; ?>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include("./footer.php"); ?>