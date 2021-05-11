<?php include("./header.php"); ?>
<?php if (empty($_SESSION['id_user'])) {
    echo '<script language="javascript">';
    echo 'alert("Silahkan login terlebih dahulu");';
    echo 'window.location.href = "./login.php";';
    echo '</script>';
} ?>
<style>
    html,
    body {
        height: 100%;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 60px 0px 0;
        margin: 0 auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
<br />
<br />
<form class="form-signin" method="post" action="./core/process.php?action=tambah_barang">
    <center>
        <h1 class="h3 mb-3 font-weight-normal">Tambah Barang</h1>
    </center>
    <br />
    <div class="form-group">
        <label for="kategori">Kategori Barang</label>
        <select class="form-control" style="padding: 5px;font-size: 14px;" name="kategori" id="kategori" required="true">
            <?php
            $sqll_1 = "SELECT * FROM kategori_barang";
            $resultt_1 = $conn->query($sqll_1);
            $seq_number = 1;
            while ($hasill_1 = $resultt_1->fetch_assoc()) { ?>
                <option value="<?= $hasill_1['id'] ?>"><?= $hasill_1['nama'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="nama">Nama Barang</label>
        <input type="text" name="nama" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="nama">Qty</label>
        <input type="number" name="qty" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="nama">Kondisi</label>
        <input type="text" name="kondisi" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="nama">Tanggal Input</label>
        <input type="date" name="tanggal_input" class="form-control" required="true">
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Simpan</button>
    <br />
    <a href="./data_barang.php"><button class="btn btn-lg btn-warning btn-block" type="button">Kembali</button></a>
</form>
<?php include("./footer.php"); ?>