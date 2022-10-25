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
    <div class="main-layout">
        <div class="container-fluid pb-4">
            <div class="row">
                <div class="col-md-12 px-3 mt-10 pt-4 pb-4">
                    <h4 class="section-title">State List</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
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
                <div class="col-md-2">
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
        <hr class="hr" />

        <div class="container-fluid py-4">
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

        <div class="container-fluid pb-4">
            <div class="row">
                <div class="col-md-12 px-3 mt-10 pt-4 pb-4">
                    <h4 class="section-title">Visits by Status</h4>
                    <div style="height:430px;display: block;position: relative;">
                        <canvas id="chBar"></canvas>
                    </div>
                    <!-- JAVASCRIPT AT THE BOTTOM -->
                </div>
            </div>
        </div>

    </div> <!-- .main-layout -->

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

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0 "></script>

    <script type="text/javascript">
    var colors = ['#007bff', '#28a745', '#333333', '#c3e6cb', '#dc3545', '#6c757d'];

    var chBar = document.getElementById("chBar");
    if (chBar) {
        new Chart(chBar, {
            type: 'bar',
            data: {
                labels: [
                    "Cancelled",
                    "Consult Completed",
                    "Consult in Process",
                    "Intake",
                    "Awaiting Provider",
                    "Patient Confirmed Appointment",
                    "Saved/Pending"
                ],
                datasets: [{
                    barThickness: 16,
                    axis: 'y',
                    label: 'Number of Leads',
                    data: [35, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    backgroundColor: [
                        '#C0E6C6',
                        '#C0E6C6',
                        '#C0E6C6',
                        '#C0E6C6',
                        '#C0E6C6',
                        '#C0E6C6',
                        '#C0E6C6'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    datalabels: {
                        // anchor: 'end',
                        // align: 'top',
                        // offset: 10
                    }
                    // borderWidth: 1
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                maintainAspectRatio: false,
                // responsive: true,    
                indexAxis: 'y',

                scales: {
                    y: {
                        grid: {
                            display: false,
                        },
                        ticks: {
                            maxTicksLimit: 20,
                        },
                    },
                    x: {
                        grid: {
                            borderDash: [10, 4]
                        }
                    }
                },
                
            }
        });
    }
    </script>

</body>

</html>