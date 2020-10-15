<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Siswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong><?= $kepegawaian['Nama_siswa']; ?></strong></h5>
                <p class="card-text">
                    <label for=""><b> NISN : </b></label>
                    <?= $kepegawaian['NISN']; ?></p>
                <p class="card-text">
                    <label for=""><b> Alamat Siswa : </b></label>
                    <?= $kepegawaian['Alamat_siswa']; ?></p>    
                <p class="card-text">
                    <label for=""><b> Tempat Lahir : </b></label>
                    <?= $kepegawaian['Tempat_lahir']; ?></p>
                <p class="card-text">
                    <label for=""><b> Tanggal Lahir : </b></label>
                    <?= $kepegawaian['Tanggal_lahir']; ?></p>
                <p class="card-text">
                    <label for=""><b> Jurusan : </b></label>
                    <?= $kepegawaian['Jurusan']; ?></p>
                
                <a href="<?= base_url();?>admin/pegawai" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>
