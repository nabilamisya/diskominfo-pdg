<!DOCTYPE html>
<html lang="en">
<?php include ('header.php');?>
<?php include ('../../conf/config.php');?>

<title>Diskominfo | Dashboard</title>
<div class="wrapper">

  <!-- Preloader -->

  <!-- Navbar -->
  <?php include ('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include ('logo.php');?>

    <!-- Sidebar -->
    <?php include ('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
    include ('../../conf/config.php'); 
    $get1 = mysqli_query($koneksi, "SELECT * FROM tb_barang");
    $count1 = mysqli_num_rows($get1);

    $get2 = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
    $count2 = mysqli_num_rows($get2);

    $get3 = mysqli_query($koneksi, "SELECT * FROM tb_bidang");
    $count3 = mysqli_num_rows($get3);

    $get4 = mysqli_query($koneksi, "SELECT * FROM tb_ruangan");
    $count4 = mysqli_num_rows($get4);

    $get5 = mysqli_query($koneksi, "SELECT * FROM tb_pegawai");
    $count5 = mysqli_num_rows($get5);
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-6">
            <div class="sticky-top mb-3">
            <div class=" card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-bullseye mr-2"></i>
                Visi Misi</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <b>VISI</b>
                    <p>1. hdgfadyuifskf</p>
                    <p>2. bhfidlsdfsbghn</p>
                  </div>
                  <div class="col-md-6">
                    frgdthfgjfhd
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class=" card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-calendar-alt mr-2"></i>  
                Kalender</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            </div>

            <!-- /.card -->
          </div>
          
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">
                  <span class="info-box-icon bg-primary"><i class="fas fa-box"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Barang</span>
                    <span class="info-box-number"><?=$count1?> Barang</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">

                  <span class="info-box-icon bg-primary"><i class="fas fa-cube"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Kategori Barang</span>
                    <span class="info-box-number"><?=$count2?> Kategori</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">

                  <span class="info-box-icon bg-primary"><i class="fas fa-building"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Bidang</span>
                    <span class="info-box-number"><?=$count3?> Bidang</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">

                  <span class="info-box-icon bg-primary"><i class="fas fa-desktop"></i></span>


                  <div class="info-box-content">
                    <span class="info-box-text">Ruangan</span>
                    <span class="info-box-number"><?=$count4?> Ruangan</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">
                  <span class="info-box-icon bg-primary"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Pegawai</span>
                    <span class="info-box-number"><?=$count5?> Pegawai</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include ('footer.php');?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
