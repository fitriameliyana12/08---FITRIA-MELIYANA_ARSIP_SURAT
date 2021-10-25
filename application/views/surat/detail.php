<html>
	<head>
		<title>Arsip Surat Kelurahan XYZ</title>
	</head>
	<body>
		<!-- Page Content -->
    <div style="margin-left:20%">
     <div class="w3-container">
     <h1>Arsip Surat >> Lihat</h1><br>
        <h6>Nomor Surat : <?php echo ($surat['nomor_surat']) ?></h6>
        <h6>Judul : <?php echo ($surat['judul']) ?></h6>
        <h6>Kategori : <?php echo ($surat['kategori']) ?></h6>
        <h6>Waktu Pengarsipan : <?php echo ($surat['waktu']) ?></h6>     
<br>
    <iframe src="<?php echo base_url() ?>assets/surat/<?php echo $surat['file'] ?>" width="100%" height="500">
            </iframe>
</div>

    <br>
            <a href="<?php echo base_url().'surat'?>">
            <input type="button" class="btn btn-primary" value="<<Kembali"></a>

            <a href="<?php echo base_url().'surat/downloadSurat/'.$surat['file'] ?>">
            <input type="button" class="btn btn-warning" value="Unduh"></a>

            <a href="<?php echo base_url('surat/editData/'. $surat['id']); ?>">
            <input type="submit" class="btn btn-success" value="Edit/Ganti file">

            
            <!-- <a href="<?= base_url() . "index.php/surat/downloadSurat/" . $data->file ?>" class="btn btn-warning">Unduh</a>  -->
    </div>

    	<!-- Bootstrap core CSS-->
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

<!-- ... -->
<!-- di sini ada kode yang panjang -->
<!-- ... -->

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
<!-- Demo scripts for this page-->
<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">




</script>
    
</body>
</html>