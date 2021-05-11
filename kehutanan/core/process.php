<?php
include("../core/connection.php");

if ($_GET['action'] == "login") {
    // Login Process
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while ($hasil = $result->fetch_assoc()) {
            $_SESSION['id_user'] = $hasil['id'];
        }
        echo '<script language="javascript">';
        echo 'alert("Selamat datang, ' . $_POST['username'] . '");';
        echo 'window.location.href = "../index.php";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Periksa kembali username dan password Anda.");';
        echo 'window.location.href = "../index.php";';
        echo '</script>';
    }
} else if ($_GET['action'] == "tambah_kategori") {
    if (!empty($_POST['nama'])) {
        $nama = addslashes(trim($_POST['nama']));
        $sql = "INSERT INTO kategori_barang VALUES (null, '$nama')";
        $result = $conn->query($sql);
        if ($result) {
            echo '<script language="javascript">';
            echo 'alert("Data berhasil ditambahkan.");';
            echo 'window.location.href = "../kategori.php";';
            echo '</script>';
        }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Nama Kategori wajib diisi.");';
        echo 'window.location.href = "../kategori_tambah.php";';
        echo '</script>';
    }
} else if ($_GET['action'] == "edit_kategori") {
    $id = $_POST['id'];
    if (!empty($_POST['nama'])) {
        $nama = addslashes(trim($_POST['nama']));
        $sql = "UPDATE `kategori_barang` SET `nama` = '$nama' WHERE `id` = '$id'";
        $result = $conn->query($sql);
        if ($result) {
            echo '<script language="javascript">';
            echo 'alert("Berhasil mengubah data.");';
            echo 'window.location.href = "../kategori.php";';
            echo '</script>';
        }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Nama Kategori wajib diisi.");';
        echo 'window.location.href = "../kategori_edit.php?id_kategori" + "=" + ' . $id . ';';
        echo '</script>';
    }
} else if ($_GET['action'] == "hapus_kategori") {
    $sql1 = "SELECT * FROM `data_barang` WHERE `id_kategori` = '" . $_GET['id_kategori'] . "'";
    $result1 = $conn->query($sql1);
    if (mysqli_num_rows($result1) > 0) {
        while ($hasil1 = $result1->fetch_assoc()) {
            $sql2 = "DELETE FROM data_barang WHERE id = '" . $hasil1['id'] . "'";
            $result2 = $conn->query($sql2);
        }
    }

    $sql = "DELETE FROM kategori_barang WHERE id = '" . $_GET['id_kategori'] . "'";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">';
        echo 'alert("Berhasil menghapus data kategori");';
        echo 'window.location.href = "../kategori.php";';
        echo '</script>';
    }
} else if ($_GET['action'] == "tambah_barang") {
    $id_kategori = addslashes(trim($_POST['kategori']));
    $nama_barang = addslashes(trim($_POST['nama']));
    $qty = addslashes(trim($_POST['qty']));
    $kondisi = addslashes(trim($_POST['kondisi']));
    $tanggal_input = addslashes(trim($_POST['tanggal_input']));

    $sql = "INSERT INTO data_barang VALUES (null, '$id_kategori', '$nama_barang', '$qty', '$kondisi', '$tanggal_input')";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">';
        echo 'alert("Data berhasil ditambahkan.");';
        echo 'window.location.href = "../data_barang.php";';
        echo '</script>';
    }
} else if ($_GET['action'] == "edit_barang") {
    $id = $_POST['id'];

    $id_kategori = addslashes(trim($_POST['kategori']));
    $nama_barang = addslashes(trim($_POST['nama']));
    $qty = addslashes(trim($_POST['qty']));
    $kondisi = addslashes(trim($_POST['kondisi']));
    $tanggal_input = addslashes(trim($_POST['tanggal_input']));

    $sql = "UPDATE `data_barang` SET `id_kategori` = '$id_kategori', `nama_barang` = '$nama_barang', `qty` = '$qty', `kondisi` = '$kondisi', `tanggal_input` = '$tanggal_input' WHERE `id` = '$id'";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">';
        echo 'alert("Berhasil mengubah data.");';
        echo 'window.location.href = "../data_barang.php";';
        echo '</script>';
    }
} else if ($_GET['action'] == "hapus_barang") {
    $sql = "DELETE FROM `data_barang` WHERE id = '" . $_GET['id_barang'] . "'";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script language="javascript">';
        echo 'alert("Berhasil menghapus data barang");';
        echo 'window.location.href = "../data_barang.php";';
        echo '</script>';
    }
} else {
    session_destroy();
    echo '<script language="javascript">';
    echo 'alert("Anda berhasil logout.");';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
}
