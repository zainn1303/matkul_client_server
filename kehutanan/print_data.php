<?php include("./core/connection.php"); ?>
<?php if (empty($_GET['id_kategori'])) {
    echo '<script language="javascript">';
    echo 'alert("Data Kategori tidak valid");';
    echo 'window.location.href = "./laporan_barang.php";';
    echo '</script>';
} ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Data</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }

        @page {
            size: 29.7cm 21cm;
            margin: 15mm 16mm 15mm 16mm;
        }

        body {
            background: rgb(204, 204, 204);
        }

        page {
            background: white;
            display: block;
            margin: 0 auto;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        page[size="A4"] {
            padding: 15mm 16mm 26mm 16mm;
            height: 18cm;
            width: 29.7cm;
            margin-bottom: 20px;
        }

        @media print {

            body,
            page {
                margin: 0;
                box-shadow: unset;
            }
        }
    </style>
</head>
<?php
if ($_GET['id_kategori'] == 'all') {
    $sqll_1 = "SELECT `brg`.`id` AS `id_barang`, `brg`.`id_kategori` AS `id_kategori`, `brg`.`nama_barang` AS `nama_barang`, `ktg`.`nama` AS `nama_kategori`, `brg`.`qty` AS `qty`, `brg`.`kondisi` AS `kondisi`, `brg`.`tanggal_input` AS `tanggal_input`
FROM `data_barang` AS `brg` INNER JOIN `kategori_barang` AS `ktg` ON `ktg`.`id` = `brg`.`id_kategori`;";
} else {
    $sqll_1 = "SELECT `brg`.`id` AS `id_barang`, `brg`.`id_kategori` AS `id_kategori`, `brg`.`nama_barang` AS `nama_barang`, `ktg`.`nama` AS `nama_kategori`, `brg`.`qty` AS `qty`, `brg`.`kondisi` AS `kondisi`, `brg`.`tanggal_input` AS `tanggal_input`
FROM `data_barang` AS `brg` INNER JOIN `kategori_barang` AS `ktg` ON `ktg`.`id` = `brg`.`id_kategori` WHERE `brg`.`id_kategori` = '" . $_GET['id_kategori'] . "';";
}
$resultt_1 = $conn->query($sqll_1);
$data_all = mysqli_num_rows($resultt_1); ?>

<body onload="window.print();">
    <?php if ($data_all > 0) { ?>
        <h1>
            <center>Print Data</center>
        </h1>
        <h4>
            <center>Tanggal Cetak : <?php echo date('d-m-Y'); ?></center>
        </h4>
        <table style="width: 100%" border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Qty</th>
                    <th>Kondisi</th>
                    <th>Tanggal Input</th>
                </tr>
            </thead>
            <tbody>
                <?php
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
                    </tr>
            </tbody>
            <?php $seq_number++; ?>
        <?php } ?>
        </table>
        </page>
    <?php } else { ?>
        <page size="A4">
            <h1> Data Tidak Tersedia. </h1>
        </page>
    <?php } ?>
</body>

</html>