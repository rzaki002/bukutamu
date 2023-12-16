<?php include "header.php" ?>
<!--Awal Row-->
<div class = "row">
    <div class="col-md-12">
    <div class="card shadow mb-4 m-3">
             <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Tamu</h6>
                    </div>
                 <div class="card-body">
                    <form method="POST" action="" class="text-center">
                        <div class ="row">
                            <div class ="col-md-3"></div>
                            <div class ="col-md-3">
                                <div class ="form-group">
                                    <label>Dari Tanggal</label>
                                    <input class ="form-control" type="date"
                                    name = "tanggal1" value="<?= isset($_POST['tanggal1']) ?
                                    $_POST['tanggal1'] : date('Y-m-d') ?>" required>
                                </div>
                            </div>
                            <div class ="col-md-3">
                                <div class ="form-group">
                                    <label>Hingga Tanggal</label>
                                    <input class ="form-control" type="date"
                                    name = "tanggal2" value="<?= isset($_POST['tanggal2']) ?
                                    $_POST['tanggal2'] : date('Y-m-d') ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class ="col-md-4"></div>
                            <div class="col-md-2">
                                <button class="btn btn-primary form-control"
                                name ="btampilkan"><i class ="fa fa-search"></i> Tampilkan </button>
                            </div>
                            <div class="col-md-2">
                                <a href ="admin.php" class ="btn btn-danger form-control"><i 
                                class ="fa fa-backward"></i> Kembali</a>
                            </div>
                        </div>
                    </form>

                    <?php 
                    if (isset($_POST['btampilkan'])):

                    ?>

                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
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
                                           
                                            $tgl1 = $_POST['tanggal1'];
                                            $tgl2 = $_POST['tanggal2'];

                                            $tampil = mysqli_query($koneksi,"SELECT * FROM tamu where tanggal BETWEEN '$tgl1' and '$tgl2' order by id desc");
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

                                <center>
                                    <form method ="POST" action="exportexcel.php">
                                        <div class="col-md-4">
                                        <input type="hidden" name="tanggala" value ="<?= @$_POST
                                        ['tanggal1'] ?>">
                                         <input type="hidden" name="tanggalb" value ="<?= @$_POST
                                        ['tanggal2'] ?>">

                                        <button class="btn btn-success form-control"
                                        name="bexport"><i class="fa fa-download"></i> Export Data Ke Excel </button>
                                    </div>
                                    </form>
                                </center>
             </div>

            <?php endif; ?>
        </div>
    </div>
     <!--end card-->
    </div>
   
</div>
<!--Akhir Row-->

<?php include "footer.php" ?>