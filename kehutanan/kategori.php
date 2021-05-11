<?php include("./header.php"); ?>
<?php if (empty($_SESSION['id_user'])) {
    echo '<script language="javascript">';
    echo 'alert("Silahkan login terlebih dahulu");';
    echo 'window.location.href = "./login.php";';
    echo '</script>';
} ?>
<style>
    .container {
        padding: 60px 15px 0;
    }
</style>
<div class="container">
    <h2>Data Kategori</h2>
    <br />
    <a href="./kategori_tambah.php" class="btn btn-sm btn-primary btn-block col-md-2" type="button" style="color: white;">Tambah</button></a>
    <br />
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqll_1 = "SELECT * FROM kategori_barang";
            $resultt_1 = $conn->query($sqll_1);
            $seq_number = 1;
            while ($hasill_1 = $resultt_1->fetch_assoc()) {
            ?>
                <tr>
                    <td style="width: 5%;"><?= $seq_number; ?></td>
                    <td style="width: 70%;"><?= $hasill_1['nama']; ?></td>
                    <td style="width: 25%;">
                        <a href="./kategori_edit.php?id_kategori=<?= $hasill_1['id']; ?>"><button class="btn btn-sm btn-info col-md-3" type="button">Edit</button></a>
                        <a href="./core/process.php?action=hapus_kategori&id_kategori=<?= $hasill_1['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data kategori ini?, jika anda menghapusnya maka data barang dengan kategori tersebut juga akan terhapus.')"><button class="btn btn-sm btn-danger col-md-3" type="button">Hapus</button></a>
                    </td>
                </tr>
                <?php $seq_number++; ?>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include("./footer.php"); ?>