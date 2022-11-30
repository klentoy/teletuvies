<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TelevisitMD | Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/eyv0fnb.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />


</head>

<body>
    <!-- Start your project here-->
    <!--Main Navigation-->
    <?php include 'layouts/header-with-sidebar-consults.php'; ?>

    <!--Main layout-->
    <main class="main-layout">
        <div class="container-fluid pb-4">
            <div class="row">
                <div class="col-md-6 px-3 mt-10 pt-4 pb-4">
                    <h4 class="section-title">State List</h4>
                </div>
                <div class="col-md-6 px-3 mt-10 pt-4 pb-4 text-end">
                    <button type="button" class="btn btn-success"> Add patient </button>
                    <button type="button" class="btn btn-primary"> Create a consult </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="consults-table" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ACTION</th>
                                    <th scope="col">CONSULT ID</th> 
                                    <th scope="col">NAME</th>
                                    <th scope="col">STATE</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">COMPLAINTS</th>
                                    <th scope="col">DATE SUBMITTED</th>
                                    <th scope="col">SUBMITTED BY</th>
                                    <th scope="col">SUPPLIER CODE</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </main> <!-- .main-layout -->

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

    <script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>

    <script src="//cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="js/custom.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0 "></script>

    <script>
    // Initialize the plugin
    const newScroll = document.querySelector('.sidebar-scroller');
    const ps = new PerfectScrollbar(newScroll);


    </script>

</body>

</html>