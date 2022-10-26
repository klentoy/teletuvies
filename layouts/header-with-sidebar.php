<?php 
	$root = "";
	$root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';
	$root .= '://' . $_SERVER['HTTP_HOST'];
?>
<header class="with-sidebar">
    <!-- Sidebar -->
    <?php include 'sidebar-nav.php'; ?>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="<?php echo $root; ?>/img/top-logo-main.png" height="35" alt="TelevisitMD Logo"
                    loading="lazy" />
            </a>
            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link  hidden-arrow dropdown-toggle d-flex align-items-center" href="#"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                            height="22" alt="Avatar" loading="lazy" />
                        &nbsp;
                        Henry
                        &nbsp; <span class="material-symbols-rounded">expand_more</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#">
                        Logout &nbsp;<span class="material-symbols-rounded">logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>

    <nav class="navbar second-navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav navbar-light">
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu2"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul id="sidebarMenu2" class="nav navbar-nav nav-flex-icons mr-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active': ''; ?>"><span class="clearfix d-none d-sm-inline-block">Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="patient.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'patient.php' ? 'active': ''; ?>"><span
                            class="clearfix d-none d-sm-inline-block">Patients</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><span class="clearfix d-none d-sm-inline-block">Consults</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><span class="clearfix d-none d-sm-inline-block">Tickets</span></a>
                </li>
            </ul>

    </nav>
</header>
<!--Main Navigation-->