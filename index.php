<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TelevisitMD | Dashboard</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/eyv0fnb.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <!-- Start your project here-->
    <!--Main Navigation-->
    <?php include 'layouts/header.php'; ?>

    <!--Main layout-->
    <div class="container-fluid">
        <div class="row">
            <h4>State List</h4>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Domicile
                    </div>
                    <div class="card-body">
                        <ul class="list-group-light pl-0">
                            <li class="list-group-item pl-0 pt-3 pb-3 border-0">Alabama</li>
                            <li class="list-group-item pl-0 pt-3 pb-3 border-0">Arkansas</li>
                        </ul>
                    </div>
                    <div class="fw-bold border-0 card-footer text-muted text-right">Total: 2</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Non-domicile
                    </div>
                    <div class="card-body">
                        <ul class="list-group-light pl-0">
                            <li class="list-group-item pl-0 pt-3 pb-3 border-0">Alabama</li>
                            <li class="list-group-item pl-0 pt-3 pb-3 border-0">Alaska</li>
                            <li class="list-group-item pl-0 pt-3 pb-3 border-0">Arizona</li>
                            <li class="list-group-item pl-0 pt-3 pb-3 border-0">Arkansas</li>
                        </ul>
                    </div>
                    <div class="fw-bold border-0 card-footer text-muted text-right">Total: 4</div>
                </div>
            </div>
        </div>
    </div> 
    <!--Main layout-->
    <hr class="hr" />
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-table">
                    <div class="card-header"> Completed Leads Previous Month Report </div>
                    <div class="card-body pt-0 pb-0">
                        <table id="table1" class="table table-sm televisit-table">
                            <thead>
                                <tr>
                                    <th scope="col">Provider Full Name</th>
                                    <th scope="col">eSigned Date</th>
                                    <th scope="col"># of visits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>J Provider, M.D.</td>
                                    <td>Nov 11, 2022</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Z Provider, M.D.</td>
                                    <td>Nov 12, 2022</td>
                                    <td>2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="fw-bold border-0 card-footer text-muted row pt-0">
                        <div class="col-md-6 text-left">Total (1 Groups)</div>
                        <div class="col-md-6 text-right">1</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-table">
                    <div class="card-header">Completed Leads Previous Month Report</div>
                    <div class="card-body pt-0 pb-0">
                        <table class="table table-sm televisit-table">
                            <thead>
                                <tr>
                                    <th scope="col">Provider Full Name</th>
                                    <th scope="col">eSigned Date</th>
                                    <th scope="col"># of visits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <span>No data available</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="fw-bold border-0 card-footer text-muted row pt-0">
                        <div class="col-md-6 text-left">Total (1 Groups)</div>
                        <div class="col-md-6 text-right">0</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-table">
                    <div class="card-header">Completed Leads previous week</div>
                    <div class="card-body pt-0 pb-0">
                        <table class="table table-sm televisit-table">
                            <thead>
                                <tr>
                                    <th scope="col">Provider Full Name</th>
                                    <th scope="col">eSigned Date</th>
                                    <th scope="col"># of visits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <span>No data available</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="fw-bold border-0 card-footer text-muted row pt-0">
                        <div class="col-md-6 text-left">Total (1 Groups)</div>
                        <div class="col-md-6 text-right">0</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-table">
                    <div class="card-header"> Completed Leads this week </div>
                    <div class="card-body pt-0 pb-0">
                        <table class="table table-sm televisit-table">
                            <thead>
                                <tr>
                                    <th scope="col">Provider Full Name</th>
                                    <th scope="col">eSigned Date</th>
                                    <th scope="col"># of visits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <span>No data available</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="fw-bold border-0 card-footer text-muted row pt-0">
                        <div class="col-md-6 text-left">Total (1 Groups)</div>
                        <div class="col-md-6 text-right">0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript" src="js/addons/datatables.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="js/custom.js"></script>

    <script type="text/javascript"></script>

</body>

</html>