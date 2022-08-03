
<!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="<?= base_url('admin/dashboard')?>" class="brand-link">

      <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

      <span class="brand-text font-weight-light">AdmissionsKey</span>

    </a>

  <?php
         $header_id=$this->session->userdata['logged_in']['id'];
         $this->db->where('id',$header_id);
         $header= $this->db->get('users')->result_array();
         foreach ($header as $key => $header_data);

         ?>

    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="image">

          <img src="<?= base_url() ?>assets/img/<?= $header_data['profile'];?>" class="img-circle elevation-2" alt="User Image">

        </div>

        <div class="info">
       

          <a href="#" class="d-block"><?= $header_data['name'];?></a>

        </div>

      </div>



      <!-- SidebarSearch Form -->

     <!--  <div class="form-inline">

        <div class="input-group" data-widget="sidebar-search">

          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">

          <div class="input-group-append">

            <button class="btn btn-sidebar">

              <i class="fas fa-search fa-fw"></i>

            </button>

          </div>

        </div>

      </div> -->


<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="<?= site_url('admin/dashboard');?>" class="nav-link <?php if($this->uri->segment(2)=='dashboard') echo "active"?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
           <!--  <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item <?php if($this->uri->segment(2)=='manage_professor' or $this->uri->segment(2)=='manage_student') echo "menu-open"?> ">
            <a href="#" class="nav-link <?php if($this->uri->segment(2)=='manage_professor' or $this->uri->segment(2)=='manage_student') echo "active"?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('admin/manage_professor')?>" class="nav-link <?php if($this->uri->segment(2)=='manage_professor') echo "active"?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Professor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('admin/manage_student')?>" class="nav-link <?php if($this->uri->segment(2)=='manage_student') echo "active"?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Students</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="pages/#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li> -->
            </ul>
          </li>

<!--           <li class="nav-item <?php if($this->uri->segment(2)=='add_professor_form' or $this->uri->segment(2)=='add_student_form') echo "menu-open"?> ">
            <a href="#" class="nav-link <?php if($this->uri->segment(2)=='add_professor_form' or $this->uri->segment(2)=='add_student_form') echo "active"?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('admin/add_professor_form')?>" class="nav-link <?php if($this->uri->segment(2)=='add_professor_form') echo "active"?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Professor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('admin/add_student_form')?>" class="nav-link <?php if($this->uri->segment(2)=='add_student_form') echo "active"?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Students</p>
                </a>
              </li>
           
            </ul>
          </li> -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

  </aside>