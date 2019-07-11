<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-0">
            <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Smart Count Bussiness </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">

    <!----- menu ----->
    <div class="sidebar-heading">
        Admin
    </div>

        <!---submenu--->
        <li class="nav-item <?php if($tittle == "Dashboard"){echo 'active';} ?>">
            <a class="nav-link" href="<?= base_url('admin'); ?>"><i class="fas fa-user"></i>
                <span>Dashboard</span>
            </a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider ">

    <!----- menu ----->
    <div class="sidebar-heading">
        User
    </div>

        <!---submenu--->
        <li class="nav-item <?php if($tittle == "Profil Saya"){echo 'active';} ?>">
            <a class="nav-link pb-0" href="<?= base_url('user'); ?>"><i class="fas fa-user"></i>
                <span>My Profil</span>
            </a>
        </li>

        <!---submenu--->
        <li class="nav-item <?php if($tittle == "Edit Profil"){echo 'active';} ?>">
            <a class="nav-link pb-0" href="<?= base_url('user/edit'); ?>"><i class="fas fa-user"></i>
                <span>Edit Profil</span>
            </a>
        </li>

        <!---submenu--->
        <li class="nav-item <?php if($tittle == "Ubah Password"){echo 'active';} ?>">
            <a class="nav-link" href="<?= base_url('user/changepassword'); ?>"><i class="fas fa-user"></i>
                <span>Change Password</span>
            </a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider ">

    <!----- menu ----->
    <div class="sidebar-heading">
        Kelola Berita
    </div>

        <!---submenu--->
        <li class="nav-item <?php if($tittle == "Tambah Berita"){echo 'active';} ?>">
            <a class="nav-link pb-0" href="<?= base_url('berita') ?>"><i class="fas fa-edit"></i>
                <span>Tambah Berita</span>
            </a>
        </li>

        <!---submenu--->
        <li class="nav-item <?php if($tittle == "Daftar Berita"){echo 'active';} ?>">
            <a class="nav-link" href="<?= base_url('berita/list') ?>"><i class="fas fa-edit"></i>
                <span>Daftar Berita</span>
            </a>
        </li>

    <hr class="sidebar-divider pb-0">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

</ul>
<!-- End of Sidebar -->