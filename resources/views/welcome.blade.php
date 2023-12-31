<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('backend/img/logo/logo.png') }}" rel="icon">
  <title>Sistem Manajemen Persediaan</title>


  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

  <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="app">
    <div id="wrapper">

      <!-- Sidebar -->
      <nav id="sidebar" v-show="$route.path === '/' || $route.path === '/register' || $route.path === 'forget' ? false : true " style="display: none;">
        <ul class= "navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
              <img src="{{ asset('backend/img/logo/logo2.png') }}">
            </div>
            <div class="sidebar-brand-text mx-3">CV Semangat 12</div>
          </a>
          <hr class="sidebar-divider my-0">
          <li class="nav-item active">
            <router-link class="nav-link" to="/home">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Beranda</span></router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/pos">
                <i class="fas fa-fw fa-table"></i>
                <span>Pembelian</span></router-link>
              </li>
              <hr class="sidebar-divider">
              <div class="sidebar-heading">
                Fitur
              </div>
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa fa-users"></i>
                <span>Karyawan</span>
              </a>
              <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <router-link class="collapse-item" to="/store-employee">Tambah Karyawan</router-link>
                  <router-link class="collapse-item" to="/employee">Semua Karyawan</router-link>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
              aria-expanded="true" aria-controls="collapseBootstrap1">
              <i class="far fa-fw fa-window-maximize"></i>
              <span>Pemasok</span>
            </a>
            <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <router-link class="collapse-item" to="/store-supplier">Tambah Pemasok</router-link>
                <router-link class="collapse-item" to="supplier">Semua Pemasok</router-link>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
            aria-expanded="true" aria-controls="collapseBootstrap2">
            <i class="far fa fa-list"></i>
            <span>Kategori</span>
          </a>
          <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <router-link class="collapse-item" to="/store-category">Tambah Kategori</router-link>
              <router-link class="collapse-item" to="category">Semua Kategori</router-link>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
          aria-expanded="true" aria-controls="collapseBootstrap3">
          <i class="far fa fa-shopping-bag"></i>
          <span>Produk</span>
        </a>
        <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <router-link class="collapse-item" to="/store-product">Tambah Produk</router-link>
            <router-link class="collapse-item" to="product">Semua Produk</router-link>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <router-link to="stock" class="nav-link" aria-expanded="true">
          <i class="far fa fa-credit-card"></i>
          <span>Stok</span>
        </router-link>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap4"
        aria-expanded="true" aria-controls="collapseBootstrap4">
        <i class="far fa fa-book"></i>
        <span>Beban</span>
      </a>
      <div id="collapseBootstrap4" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <router-link class="collapse-item" to="/store-expense">Tambah Beban</router-link>
          <router-link class="collapse-item" to="expense">Semua Beban</router-link>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapcustomer"
      aria-expanded="true" aria-controls="collapseBootstrapcustomer">
      <i class="far fa fa-user"></i>
      <span>Pelanggan</span>
    </a>
    <div id="collapseBootstrapcustomer" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <router-link class="collapse-item" to="/store-customer">Tambah Pelanggan</router-link>
        <router-link class="collapse-item" to="customer">Semua Pelanggan</router-link>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap5"
    aria-expanded="true" aria-controls="collapseBootstrap5">
    <i class="far fa fa-credit-card"></i>
    <span>Gaji</span>
  </a>
  <div id="collapseBootstrap5" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <router-link class="collapse-item" to="/given-salary">Tambah Gaji</router-link>
      <router-link class="collapse-item" to="salary">Semua Gaji</router-link>
    </div>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstraporder"
  aria-expanded="true" aria-controls="collapseBootstraporder">
  <i class="fab fa fa-database"></i>
  <span>Pesanan</span>
</a>
<div id="collapseBootstraporder" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
    <router-link class="collapse-item" to="/today-orders">Pesanan Hari ini</router-link>
  </div>
</div>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
  Dikembangkan oleh Kelompok 12 (Annisa, Milda, Nasywa, Vinda) {{ date('Y') }}
</div>
</ul>
</nav>
<!-- Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <!-- TopBar -->
    <nav class="navbar navbar-expand navbar-light bg-warning topbar mb-4 static-top" id="topbar" v-show="$route.path === '/' || $route.path === '/register' || $route.path === 'forget' ? false : true " style="display: none;">
      <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="/" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="{{ asset('backend/img/boy.png') }}" style="max-width: 60px">
        <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
        <router-link to="/logout" class="ml-2 d-none d-lg-inline text-white small">Keluar</router-link>
      </a>
    </li>
  </ul>
</nav>
<!-- Topbar -->

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <router-view></router-view>
</div>
<!---Container Fluid-->

</div>
</div>
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="{{ asset('js/app.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script> --}}
<script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script>
  let token = localStorage.getItem('token')
  if (token) {
    $('#sidebar').css('display', '')
    $('#topbar').css('display', '')
  }
</script>

<script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('backend/js/ruang-admin.min.js') }}"></script>
<script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
</body>

</html>