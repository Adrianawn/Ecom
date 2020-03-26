<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Add Product</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>

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
</div>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>Product</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_product" class="nav-link active">
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
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
              <p><?php echo $this->session->flashdata('msg') ?></p>
              <form action="<?php echo base_url(''); ?>add_product/upload" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Id Product</label>
                      <input type="text" name="id_produk" value="<?php echo set_value('id_produk');?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Nama Product</label>
                      <input type="text" name="nama_produk" value="<?php echo set_value('nama_produk');?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                      <input type="text" name="harga" value="<?php echo set_value('harga');?>" class="form-control" placeholder="Enter">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Kategori</label>
                        <select class="custom-select" name="kategori">
                          <option>--Select Kategori--</option>
                          <?php 
                            foreach($kategori as $u){
                          ?>
                          <option  value="<?php echo $u->id_kategori ?>"><?php   echo $u->nama_kategori ?></option>
                        <?php   }; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea type="text" class="form-control" rows="3" placeholder="Enter ..." name="deskripsi" value="<?php echo set_value('deskripsi');?>">
                    </textarea>
                  </div>
                <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                <input type="file" name="gambar">
                </div>
                </div>
                <input type="submit" value="Tambah" class="btn btn-primary btn-block">
              <?php echo form_close() ?>  
              </form>
      </div>
        </div>
          </div>
    </section>

</body>
</html>