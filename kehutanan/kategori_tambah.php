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
        padding: 60px 15px 0;
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
<form class="form-signin" method="post" action="./core/process.php?action=tambah_kategori">
    <center>
        <h1 class="h3 mb-3 font-weight-normal">Tambah Kategori</h1>
    </center>
    <br />
    <div class="form-group">
        <label for="nama">Nama Kategori</label>
        <input type="text" name="nama" class="form-control" id="nama" value="" required="true">
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Simpan</button>
    <br />
    <a href="./kategori.php"><button class="btn btn-lg btn-warning btn-block" type="button">Kembali</button></a>
</form>
<?php include("./footer.php"); ?>