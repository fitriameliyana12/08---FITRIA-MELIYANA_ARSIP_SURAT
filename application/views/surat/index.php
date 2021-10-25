<html>
	<head>
		<title>Arsip Surat XYZ</title>
	</head>
	<body>
		<!-- Page Content -->
    <div style="margin-left:20%">
     <div class="w3-container"><br>
     <h1>Arsip Surat</h1>
      <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.
      <br>Klik "lihat" pada kolom aksi untuk menampilkan surat</p>
      </div>
     <div class="w3-container">
                <br>
      <table class="table table-hover" id="myTable">
        <thead>
          <th>Nomor Surat</th>
          <th>Kategori</th>
          <th>Judul</th>
          <th>Waktu Pengarsipan</th>
          <th>Aksi</th>
        </thead>
        <tbody id="isi_kelas">
          <?php $no=1; foreach ($surat as $key) { ?>
            <tr>
              <td><?php echo $key->nomor_surat; ?></td>
              <td><?php echo $key->kategori; ?></td>
              <td><?php echo $key->judul; ?></td>
              <td><?php echo $key->waktu; ?></td>
                
              <td>
              <a onclick="return confirm('Apakah yakin ingin hapus?')" href="<?php echo base_url('index.php/surat/hapus/');echo $key->id; ?>" class="btn btn-danger">Hapus</a>
                <a href="<?= base_url() . "index.php/surat/downloadSurat/" . $key->file ?>" class="btn btn-warning">Unduh</a> 
                <a href="<?php echo base_url('surat/detail/');echo $key->id; ?>" class="btn btn-primary">Lihat>></a>  
            </td>
    
            </tr>
          <?php $no++; } ?>
        </tbody>
      </table>

		<a href='<?php echo base_url("Surat/tambahData"); ?>'> <input type="button" name="btn btn-success" value="Arsipkan Surat"></a><br><br>
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
$(document).ready( function () {
$('#myTable').DataTable();


} );

</script>
    
    
    </body>
</html>

