<?php 
	$root = "";
	$root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';
	$root .= '://' . $_SERVER['HTTP_HOST'];
?>
<header class="with-sidebar">
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a class="text-center" href="#">
                    <img src="<?php echo $root; ?>/img/top-logo-main.png" height="35" alt="TelevisitMD Logo" loading="lazy" />
                </a>

                <h5 class="filters">FILTERS</h5>

                <div class="sidebar-scroller">
                    <h6 class="filter-label filter-agent">
                        <a data-mdb-toggle="collapse" href="#agentList" role="button" aria-expanded="false" aria-controls="collapseExample">Agents</a>
                    </h6>

                    <div id="agentList" class="collapse mt-3 show agent-list sidebar-filter-list" data-mdb-perfect-scrollbar='true'>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agent " value="John Doe">
                            <label class="form-check-label" for="">John Doe</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agent" value="Sara Smith">
                            <label class="form-check-label" for="">Sara Smith</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agent" value="Dan Russell">
                            <label class="form-check-label" for="">Dan Russell</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agent" value="Andrew Navarro">
                            <label class="form-check-label" for="">Andrew Navarro</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agent" value="Barbara Diesel">
                            <label class="form-check-label" for="">Barbara Diesel</label>
                        </div>
                    </div>

                    <h6 class="filter-label filter-consult-status">
                        <a data-mdb-toggle="collapse" href="#consultStatus" role="button" aria-expanded="false" aria-controls="collapseExample">Consult Status</a>
                    </h6>

                    <div id="consultStatus" class="collapse mt-3 show consult-status-list sidebar-filter-list" data-mdb-perfect-scrollbar='true'>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="status " value="Waiting Room">
                            <label class="form-check-label" for="">Waiting Room</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="status" value="Consult In Process">
                            <label class="form-check-label" for="">Consult In Process</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="status" value="Consult Completed">
                            <label class="form-check-label" for="">Consult Completed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="status" value="Cancelled">
                            <label class="form-check-label" for="">Cancelled</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="status" value="Intake">
                            <label class="form-check-label" for="">Intake</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="status" value="Untracked/Unpaid (0)">
                            <label class="form-check-label" for="">Untracked/Unpaid</label>
                        </div>
                    </div>

                    <h6 class="filter-label filter-state">
                        <a data-mdb-toggle="collapse" href="#stateList" role="button" aria-expanded="false" aria-controls="collapseExample">States</a>
                    </h6>
                    <?php include 'sidebar-nav.php'; ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top" data-mdb-mode="side" data-mdb-content="#content">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <button type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="<?php echo $root; ?>/img/top-logo-main.png" height="35" alt="TelevisitMD Logo" loading="lazy" />
            </a>
            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link  hidden-arrow dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
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
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu2" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul id="sidebarMenu2" class="nav navbar-nav nav-flex-icons mr-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active': ''; ?>"><span
                            class="clearfix d-none d-sm-inline-block">Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="patient.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'patient.php' ? 'active': ''; ?>"><span
                            class="clearfix d-none d-sm-inline-block">Patients</span></a>
                </li>
                <li class="nav-item">
                    <a href="cases-consults.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'cases-consults.php' ? 'active': ''; ?>"><span
                            class="clearfix d-none d-sm-inline-block">Consults</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><span class="clearfix d-none d-sm-inline-block">Tickets</span></a>
                </li>
            </ul>

    </nav>
</header>
<!--Main Navigation-->