<?php
    include "koneksi.php";

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Export Excel Data Pengunjung.xls");
    header("Pragma: no-cache");
    header("Expires:0");
?>

<table border="1">
    <thead>
        <tr>
            <th colspan="6">Rekapitulasi Data Pengunjung</th>
        </tr>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Tamu</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Tanda Pengenal</th>
            <th>Tujuan</th>
            <th>Kepentingan</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
        </tr>
    </thead>
    <tbody>
       <?php
                                           
        $tgl1 = $_POST['tanggala'];
        $tgl2 = $_POST['tanggalb'];

        $tampil = mysqli_query($koneksi,"SELECT * FROM tamu where tanggal BETWEEN '$tgl1' and '$tgl2' order by tanggal asc");
        $no = 1;

        while($data = mysqli_fetch_array($tampil)){
        ?>
         <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['tanggal']?></td>
            <td><?= $data['nama']?></td>
            <td><?= $data['alamat']?></td>
            <td><?= $data['nohp']?></td>
            <td><?= $data['buktidiri']?></td>
            <td><?= $data['menemui']?></td>
            <td><?= $data['keterangan']?></td>
            <td><?= $data['jam_masuk'] ?></td>
            <td><?= $data['jam_keluar'] ?></td>
         </tr>
        <?php } ?>
    </tbody>
</table>