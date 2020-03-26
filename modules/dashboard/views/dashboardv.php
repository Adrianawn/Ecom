<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
	<?php echo ucfirst($this->session->userdata('username')); ?>

	<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

	<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
</nav>


	<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        	<li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>Product</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              </li>
      </ul>
  </nav>
</aside>

     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 25%" class="text-center">
                          Gambar
                      </th>
                      <th style="width: 20%">
                          Product Name
                      </th>
                      <th style="width: 10%">
                      	Kategori
                      </th>
                      <th>
                          Price
                      </th>
                      <th style="width: 20%" >
                          Desc
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>

              <tbody>
              	<?php 
              		$no = 1;
              		foreach($produk as $u){
              	 ?>
              	 <tr>
              	 	<td><?php echo $no++ ?></td>
              	 	<td><img src="<?php echo base_url('gambar/'.$u->gambar.''); ?>"height="50px" width="50px"></td>
              	 	<td><?php echo $u->nama_produk?></td>
              	 	<td><?php echo $u->kategori ?></td>
              	 	<td><?php echo $u->harga ?></td>
              	 	<td><?php echo $u->deskripsi ?></td>
              	 	<td class="project-actions text-right">
              	 		<div class="btn btn-outline-primary btn-sm">
              	 		<i class="fas fa-folder">
			      		<?php echo anchor(base_url('dashboard/edit/'.$u->id_produk),'Edit'); ?>
                        </i>
                        </div>
                        <div class="btn btn-outline-primary btn-sm">
              	 		<i class="fas fa-folder">
			      		<?php echo anchor('dashboard/hapus/'.$u->id_produk,'Hapus'); ?>
                        </i>
                        </div>
					</td>
              	 </tr>
              </tbody>
          <?php } ?>
              </table>


<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="assets/dist/js/adminlte.js"></script>

</body>
</html>