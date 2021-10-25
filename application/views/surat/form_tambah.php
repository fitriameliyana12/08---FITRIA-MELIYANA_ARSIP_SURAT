<html>
	<head>
		<title>Form Tambah</title>
	</head>
	<body>
		<div style="margin-left:20%">
     <div class="w3-container"><br>
     <h1>Arsip Surat >> Unggah</h1>
     
      <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan.<br>
			Catatan :
		<ol>
			<ul> - Gunakan file berformat PDF</ul>
		</ol></p>
		</div>
		

 <!-- MAIN CONTENT-->
 <div class="main-content">
      <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <!-- <?php echo $this->session->flashdata('alert'); ?> -->
              <form action="<?= base_url(); ?>surat/simpan_surat" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body card-block">
                    <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nomor Surat</label>
                      </div>
                      <div class="col-12 col-md-9">
                        <input required="" type="text" class="form-control" name="nomor_surat" placeholder="" value="<?=set_value('nomor_surat'); ?>" >
                      </div>
                    </div>
					<div class=" row form-group">
                    <div class="col col-md-3">
                      <label>Kategori</label>
                      </div>
                      <div class="col-12 col-md-9">
                      <select name="kategori" class="form-control">
                        <option value="Undangan">Undangan</option>
                        <option value="Pengumuman">Pengumuman</option>
                        <option value="Nota Dinas">Nota Dinas</option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                        </select>
                      </div>
                      </div>
					  <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Judul</label>
                      </div>
                      <div class="col-12 col-md-9">
                        <input required="" type="text" class="form-control" name="judul" placeholder="" value="<?=set_value('judul'); ?>" >
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Waktu Pengarsipan</label>
                      </div>
                      <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="waktu" readonly value="<?php 
                        date_default_timezone_set('Asia/Jakarta');
                        echo date('Y-m-d H:i:s'); ?>" class="form-control">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">File Surat (PDF)</label>
                      </div>
                      <div class="col-12 col-md-9">
                        <input type="file" name="file" required="">
                      </div>
                    </div>
                  <div class="card-footer">
				          <a href="<?php echo base_url().'surat'?>"><input type="button" class="btn btn-primary" value="<<Kembali"></a>
                    <button type="submit" name="submit" class="btn btn-success btn-md">
                       Simpan
                    </button> 
                  </div>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- END MAIN CONTENT-->
      <!-- END PAGE CONTAINER-->
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
