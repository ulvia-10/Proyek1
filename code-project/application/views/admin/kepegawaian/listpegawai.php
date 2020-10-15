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

    <div class="row mt-3">
        <div class="col-md-12 p-3">
            <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari data siswa..." name="keyword">
            <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
            </form>
        </div>
    </div>

    <!-- mt-3 artinya margin top 3 -->
    <div class="row-mt-4">
        <div class="col-md-12 p-2">
        <center><h3>Sistem Informasi Tata Usaha SMAN 1 KESAMBEN</h3>
		Jl. A Yani Blitar 66191, Indonesia. Telepon : 0342-456789</center><br>
            
            <!-- alert -->
            <?php if (empty($kepegawaian)) :?>
            <div class="alert alert-danger" role="alert">
                Data Pegawai tidak ditemukan!
            </div>
            <?php endif; ?>

            <table class="table table-bordered table-striped">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">NISN</th>
                <th scope="col">Alamat Siswa</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Nama Orang Tua</th>
                <!-- <th scope="col">Foto</th> -->
                <th scope="col">Detail</th>
                <th scope="col">Hapus</th>
                <th scope="col">Edit</th>
            </tr>
                <?php foreach ($kepegawaian as $kpw){?> 
                <tr>
                <td><?= $kpw["Id"];?></td>
                <td><?= $kpw["Nama_siswa"];?></td>
                <td><?= $kpw["NISN"];?></td>
                <td><?= $kpw["Alamat_siswa"];?></td>
                <td><?= $kpw["Jurusan"];?></td>              
                <td><?= $kpw["Nama_Ortu"];?></td>
                <td><a href="<?= base_url();?>admin/pegawai/detail/<?= $kpw['Id'];?>"
                class="badge badge-secondary float-right fas fa-info-circle ml-2 mr-2"> Detail</a></td>
                <td><a href="<?=base_url();?>admin/pegawai/hapus/<?=$kpw['Id'];?>"
                class="badge badge-primary float-right fas fa-trash-alt ml-2 mr-2"
                onclick="return confirm('Yakin data ini akan di hapus?');"> Hapus</a></td>
                <td><a href="<?= base_url();?>admin/pegawai/edit/<?= $kpw['Id'];?>"
                class="badge badge-success float-right fas fa-user-edit ml-2 mr-2"> Edit</a>
                <?php } ?>
                </tr>
        </div>
    </div>

<!-- Scroll to Top Button-->
<?php $this->load->view("admin/_partials/scrolltop.php") ?>

<!-- Logout Modal-->
<?php $this->load->view("admin/_partials/modal.php") ?>

<!-- Bootstrap core JavaScript-->
<?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>


