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

    <!-- mt-3 artinya margin top 3 -->
    <div class="row-mt-4">
        <div class="col-md-12 p-2">
        <h3>Sistem Informasi Tata Usaha SMANSA</h3>

            <table class="table table-bordered table-striped">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Verification</th>
            </tr>
                <?php foreach ($kepegawaian as $kpw){?> 
                <tr>
                <td><?= $kpw["Id"];?></td>
                <td><?= $kpw["Username"];?></td>
                <td><?= $kpw["Email"];?></td>
                <td><?= $kpw["Password"];?></td>
                <td><a href="<?=base_url();?>admin/pegawai/register/<?=$kpw['Id'];?>"
                class="badge badge-primary float-right fas fa-trash-alt ml-2 mr-2"
                onclick="return confirm('Verifikasi pengguna ini?');">Confirm</a></td>
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


