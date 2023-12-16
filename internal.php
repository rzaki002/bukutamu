<?php
include "header.php";

if (isset($_POST['bsimpan'])) {
    include "koneksi.php";
    

    $tgl = date('Y-m-d');
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $nip = htmlspecialchars($_POST['nip'], ENT_QUOTES);
    $unit = htmlspecialchars($_POST['unit'], ENT_QUOTES);
    $menemui = htmlspecialchars($_POST['menemui'], ENT_QUOTES);
    $keterangan = htmlspecialchars($_POST['keterangan'], ENT_QUOTES);
    $jam_masuk = htmlspecialchars($_POST['jam_masuk'], ENT_QUOTES);
    

    if(isset($_FILES['photo'])){
        $file_name = $_FILES['photo']['name'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        move_uploaded_file($file_tmp,"assets/img/".$file_name);
    }


    // Prepared Statement
    $stmt = mysqli_prepare($koneksi, "INSERT INTO internal (tanggal, nama, nip, unit, menemui, keterangan, jam_masuk, signature) VALUES (?, ?, ?, ?, ?, ?, ?)");


// Periksa apakah prepared statement berhasil dibuat
if ($stmt) {
    // Bind parameter ke prepared statement
    mysqli_stmt_bind_param($stmt, "ssssssss", $tgl, $nama, $nip, $unit, $menemui, $keterangan, $jam_masuk, $signature);


    // Eksekusi prepared statement
    $simpan = mysqli_stmt_execute($stmt);

    // Tutup prepared statement
    mysqli_stmt_close($stmt);

    // Tutup koneksi
    mysqli_close($koneksi);

    if ($simpan) {
        echo "<script>alert('Simpan data sukses, terima kasih..!');
              document.location='?';</script>";
    } else {
        echo "<script>alert('Simpan gagal!');</script>";
    }
} else {
    echo "<script>alert('Prepared statement error: " . mysqli_error($koneksi) . "');</script>";
}

   
}
?>

<!--Head-->
<div class="head text-center mt-4" >
    
</div>
<!--end Head-->

<!-- Awal Row-->
<div class="row mt-2">
    <!--col-lg-7-->
    <div class="col-lg-7 mb-3">
        <div class="card shadow ">
            <!--card body-->
            <div class="card-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">IDENTITAS PENGUNJUNG INTERNAL</h1>
                </div>
                <form class="user" method="POST">
                <b><p class="mb-2" style="color: black;">Nama</p></b>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nama" placeholder="--Masukkan Nama--"
                            required>
                    </div>
                    <b><p class="mb-2" style="color: black;">NIP</p></b>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nip" placeholder="--Masukkan Nip--"
                            required>
                    </div>

                    <b><p class="mb-2" style="color: black;">Unit</p></b>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nip" placeholder="--Masukkan Unit--"
                            required>
                    </div>

                    <b><p class="mb-2" style="color: black;">Person/Bidang Yang DiTuju</p></b>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="menemui"
                            placeholder="--Masukkan Person/Bidang Yang DiTuju--" required>
                    </div>

                    <b><p class="mb-2" style="color: black;">Tujuan</p></b>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="keterangan"
                            placeholder="--Masukkan Tujuan--" required>
                    </div>
                    
                    <b><p class="mb-2" style="color: black;">Jam Masuk</p></b>
                    <div class="form-group">
                        <input type="time" class="form-control form-control-user " name="jam_masuk" 
                        placeholder ="Jam Masuk" required>
                    </div>
                    

                    <body>

                    <h1>Akses dan Ambil Gambar dari Kamera</h1>

                        <center><video id="videoElement" autoplay width="400" height="300"></video></center>
                      <center><button onclick="startCamera()">Mulai Kamera</button> <button onclick="stopCamera()">Stop Kamera</button> <button onclick="captureImage()">Ambil Gambar</button></center> 
     
                        <canvas id="canvas" width="400" height="300"></canvas>
                    </h1>           

                    <div class="form-group">
                        <label for="signature">Tanda Tangan</label>
                        <canvas id="signatureCanvas" width="400" height="200" style="border:1px solid #000;"></canvas>
                        <center><button type="button" onclick="clearSignature()">Hapus Tanda Tangan </button></center>
                        <input type="hidden" name="signature" id="signatureInput" required>
                    </div>
                    
                    <button type="submit" name="bsimpan" class="btn btn-primary btn-user btn-block">Simpan Data</button>
                </form>
      
                
                <script>
    let videoStream;
    let canvas = document.getElementById('canvas');
    let context = canvas.getContext('2d');

    // Fungsi untuk memulai kamera
    function startCamera() {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                videoStream = stream;
                var video = document.getElementById('videoElement');
                video.srcObject = stream;
            })
            .catch(function (error) {
                console.error('Error accessing camera: ', error);
            });
    }

    // Fungsi untuk menghentikan kamera
    function stopCamera() {
        if (videoStream) {
            var tracks = videoStream.getTracks();

            tracks.forEach(function (track) {
                track.stop();
            });

            var video = document.getElementById('videoElement');
            video.srcObject = null;
        }
    }

   // Fungsi untuk mengambil gambar dari video
   function captureImage() {
            context.drawImage(videoElement, 0, 0, canvas.width, canvas.height );
            // Hasil gambar sekarang dapat disimpan atau diproses lebih lanjut
            // Misalnya, bisa diupload ke server atau diolah menggunakan JavaScript
        }
</script>

<script>
    // JavaScript for capturing and saving the signature
    var canvasSignature = document.getElementById('signatureCanvas');
    var ctxSignature = canvasSignature.getContext('2d');
    var isDrawing = false;
    var signatureData = "";

    canvasSignature.addEventListener('mousedown', startDrawing);
    canvasSignature.addEventListener('mousemove', draw);
    canvasSignature.addEventListener('mouseup', stopDrawing);
    canvasSignature.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        isDrawing = true;
        draw(e); // Start drawing immediately
    }

    function draw(e) {
        if (!isDrawing) return;

        ctxSignature.lineWidth = 2;
        ctxSignature.lineCap = 'round';
        ctxSignature.strokeStyle = '#000';

        ctxSignature.lineTo(e.clientX - canvasSignature.getBoundingClientRect().left, e.clientY - canvasSignature.getBoundingClientRect().top);
        ctxSignature.stroke();

        // Save signature data (coordinates)
        signatureData += e.clientX - canvasSignature.getBoundingClientRect().left + ',' + (e.clientY - canvasSignature.getBoundingClientRect().top) + ',';
    }

    function stopDrawing() {
        isDrawing = false;

        // Set the signature data to the hidden input field
        document.getElementById('signatureInput').value = signatureData.slice(0, -1);
    }

    function clearSignature() {
        ctxSignature.clearRect(0, 0, canvasSignature.width, canvasSignature.height);
        signatureData = "";
        document.getElementById('signatureInput').value = "";
    }
</script>

                <hr>

            </div>
            <!--end card body-->
        </div>
    </div>
    <!--end col-lg-7-->

    <!--col-lg-5-->
    <div class="col-lg-5 mb-3">
        <!--card-->
        <div class="card shadow">
            <!--card body-->
            <div class="card-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">STATISTIK PENGUNJUNG</h1>
                </div>
                <?php
                // deklarasi tanggal

                //menampilkan tanggal sekarang
                $tgl_sekarang = date('Y-m-d');

                //menampilkan tgl kemarin
                $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

                // mendapatkan 6 hari sebelum tgl sekarang
                $seminggu = date('Y-m-d h:i:s', strtotime('-1 week +1 day', strtotime
                ($tgl_sekarang)));

                $sekarang = date('Y-m-d h:i:s');

                //persiapan quey tampilkan jumlah data penggunjung/tamu

                $tgl_sekarang = mysqli_fetch_array(mysqli_query(
                    $koneksi, 
                    "SELECT count(*) FROM internal where tanggal like '%$tgl_sekarang%'"));
                
                $kemarin = mysqli_fetch_array(mysqli_query(
                    $koneksi, 
                    "SELECT count(*) FROM internal where tanggal like '%$kemarin%'"));
                
                $seminggu = mysqli_fetch_array(mysqli_query(
                    $koneksi, 
                    "SELECT count(*) FROM internal where tanggal BETWEEN '$seminggu' and
                    '$sekarang'"));

                $bulan_ini = date('m');

                $sebulan = mysqli_fetch_array(mysqli_query(
                    $koneksi, 
                    "SELECT count(*) FROM internal where month(tanggal) = '$bulan_ini'"));

                $keseluruhan = mysqli_fetch_array(mysqli_query(
                    $koneksi, 
                    "SELECT count(*) FROM internal "));

                ?>

                <table class="table table-bordered">
                    <tr>
                        <td>Hari Ini</td>
                        <td>: <?= $tgl_sekarang[0] ?></td>
                    </tr>
                    <tr>
                        <td>Kemarin</td>
                        <td>: <?= $kemarin[0] ?></td>
                    </tr>
                    <tr>
                        <td>Minggu Ini</td>
                        <td>: <?= $seminggu[0] ?></td>
                    </tr>
                    <tr>
                        <td>Bulan Ini</td>
                        <td>: <?= $sebulan[0] ?></td>
                    </tr>
                    <tr>
                        <td>Keseluruhan</td>
                        <td>: <?= $keseluruhan[0] ?></td>
                    </tr>
                </table>
            </div>
            <!--card body-->
        </div>
        <!-- end card body-->
    </div>
    <!--col-lg-5-->
</div>
<!-- End Row-->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tamu Hari Ini [<?=date ('d-m-Y') ?>]</h6>
    </div>
    <div class="card-body">
        <a href="rekapitulasi.php" class="btn btn-success mb-3"><i class="fa
                     fa-table"></i> Rekapitulasi Pengunjung</a>
        <a href="logout.php" class="btn btn-danger mb-3"><i class="fa 
                     fa-sign-out-alt"></i>Logout</a>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Pengunjung</th>
        <th>NIP</th>
        <th>Unit</th>
        <th>Person/Bidang Yang Dituju</th>
        <th>Tujuan</th>
        <th>Jam Masuk</th>

    </tr>
    <tbody>
    <?php
    $tgl = date('Y-m-d');
    $tampil = mysqli_query($koneksi, "SELECT * FROM internal WHERE tanggal LIKE '%$tgl%' ORDER BY id DESC");
    $no = 1;
    while ($data = mysqli_fetch_array($tampil)) {
    ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['tanggal'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nip'] ?></td>
            <td><?= $data['unit'] ?></td>
            <td><?= $data['menemui'] ?></td>
            <td><?= $data['keterangan'] ?></td>
            <td><?= $data['jam_masuk'] ?></td>
 
        </tr>
    <?php } ?>
</tbody>
            </table>
        </div>
    </div>
</div>
<div class="text-center">
    <a class="small bg-white" href="#">By. PT PLN (Persero) | 2023 - <?=date('Y') ?></a>
</div>

<?php include "footer.php"; ?>