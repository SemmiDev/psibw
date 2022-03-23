<?php
$produkMobil = array(
    array('XX', 22, 18),
    array('XXX', 23, 18),
    array('XXXX', 42, 28),
    array('XXXXX', 52, 13),
    array('XXXXXX', 62, 14)
);

$nomor = 1;
$banyakMobil = count($produkMobil);
$tahun  =  date('Y');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas 4</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 50%;
    }
    tr:nth-child(even) {
        background-color: #efd082;
    }
    tr:nth-child(odd) {
        background-color: #f0f057;
    }
</style>
<body>
    <table border="1">
        <thead>
            <tr>
                <td colspan="4" style="background-color: white">PRODUK MOBIL TAHUN <?php echo $tahun; ?></td>
            </tr>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Persediaan</th>
                <th>Terjual</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            </tr>
            <?php for ($i=0; $i < count($produkMobil); $i++): ?>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $produkMobil[$i][0]; ?></td>
                    <td><?php echo $produkMobil[$i][1]; ?></td>
                    <td><?php echo $produkMobil[$i][2]; ?></td>
            </tr>
            <?php endfor; ?>
            <tr>
                <td colspan="4"> Jumlah Data : <?php echo $banyakMobil; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>