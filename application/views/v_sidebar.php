<body id="page-top">
 
  <!-- Page Wrapper -->
  <div id="wrapper">
 
    <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-1">Sistem FilMa</div>
      </a>
 
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
 
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href=<?php echo base_url('Dashboard') ?>>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
      <!--Form Search-->
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
       method="GET" action="<?php echo base_url('Dashboard/hasilPencarian'); ?>">
        <div class="input-group">
           <input type="text" name="search" class="form-control bg-light border-1 small" placeholder="Search..."
           aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
               <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
               </button>
             </div>
         </div>
        </form>
      </li>
 
      <!-- Nav Item - Pages Collapse Menu -->
      <!-- upload video-->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span> Sub-Menu </span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-Menu :</h6>
            <a class="collapse-item" href="<?php echo base_url('Dashboard/tahun') ?>">Tahun</a>
            <a class="collapse-item" href="<?php echo base_url('Dashboard/kategori') ?>">Kategori</a>
            <a class="collapse-item" href="<?php echo base_url('Dashboard/program') ?>">Program</a>
            <a class="collapse-item" href="<?php echo base_url('Dashboard/kegiatan') ?>">Kegiatan</a>
            <a class="collapse-item" href="<?php echo base_url('Dashboard/belanja') ?>">Belanja</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/logout') ?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
     
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->
 
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
 
      <!-- Main Content -->
      <div id="content">
 
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow bg-gradient-primary">
        </nav>