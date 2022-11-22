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
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/eyv0fnb.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

    <style>
        .sticky-top {
            top: 110px;
        }
    </style>
</head>

<body>
    <!-- Start your project here-->
    <!--Main Navigation-->
    <?php include 'layouts/header.php'; ?>

    <!--Main layout-->
    <main class="main">
        <div class="container-fluid pb-4">
            <div class="row">
                <div class="col-md-3 px-3 mt-10 pt-4 pb-4"></div>
                <div class="col-md-7 px-3 mt-10 pt-4 pb-4">
                    <form action="">
                        <!-- Create a Consult -->
                        <div id="section-patient-demographics" class="row pb-5">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Create a Consult</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="ptName">Chief Complaints *</label>

                                                    <select id="choices-multiple-remove-button"
                                                        placeholder="Can select multiple complaints" multiple>
                                                        <option value="Back Pain">Back Pain</option>
                                                        <option value="Left Knee Pain ">Left Knee Pain</option>
                                                        <option value="Right Knee Pain">Right Knee Pain</option>
                                                        <option value="Left Shoulder Pain">Left Shoulder Pain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="supplierCode">Supplier Code</label>
                                                    <input disabled="disabled"
                                                        value="<?php echo isset($_GET['supplierCode']) ? $_GET['supplierCode'] : ''; ?>"
                                                        id="supplierCode" name="supplierCode" type="text"
                                                        class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Upload Intake Audio</label>
                                                    <input name="audio_file[]" id="audio_file"
                                                        class="form-control form-control-lg" id="formFileLg"
                                                        type="file" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Create a Consult -->

                        <div id="section-back-pain" class="row pb-5">
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Back Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">On a scale from 1 to 10 how bad is your pain? with 10
                                                        being the worst.</label>
                                                    <select name="ratingBP" id="ratingBP" class="custom-select back_valid"
                                                        db-table="prod_back" required="required">
                                                        <option value="">Choose...</option>
                                                        <option value="1 (Mild)">1 (Mild)</option>
                                                        <option value="2 (Mild)">2 (Mild)</option>
                                                        <option value="3 (Mild)">3 (Mild)</option>
                                                        <option value="4 (Moderate)">4 (Moderate)</option>
                                                        <option value="5 (Moderate)">5 (Moderate)</option>
                                                        <option value="6 (Moderate)">6 (Moderate)</option>
                                                        <option value="7 (Severe)">7 (Severe)</option>
                                                        <option value="8 (Severe)">8 (Severe)</option>
                                                        <option value="9 (Severe)">9 (Severe)</option>
                                                        <option value="10 (Severe)">10 (Severe)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Is it the Lower back or the Upper back?</label>
                                                    <select name="locationBP" id="locationBP" size="1"
                                                        class="custom-select back_valid" db-table="prod_back"
                                                        required="required">
                                                        <option value="">Choose...</option>
                                                        <option value="Lower Lumbar">Lower Lumbar</option>
                                                        <option value="Thoracic Lumbar">Thoracic Lumbar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">How long have you had this pain? When did it
                                                        start?</label>
                                                    <select class="custom-select back_valid" db-table="prod_back" name="persistedBP"
                                                        id="persistedBP" required="required">
                                                        <option value="">Choose...</option>
                                                        <option value="0-1 year">0-1 year</option>
                                                        <option value="1-2 years">1-2 years</option>
                                                        <option value="2-3 years">2-3 years</option>
                                                        <option value="3-4 years">3-4 years</option>
                                                        <option value="4-5 years">4-5 years</option>
                                                        <option value="5 years or more">5 years or more</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- .row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="fw-bold" for="">Do you know what is the cause of the pain?</label>
                                                    <span style="display: block; font-size:12px">Please specify 'In Detail' the cause of patient's pain (one word descriptions are not adequate, enter a narrative statement of the issues causing pain if possible)</span>
                                                    <textarea class="form-control" name="causeBP" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success"> Next </button>
                    </form>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">

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

    <script type="text/javascript" src="src/js/bootstrap/dist/dropdown.js"></script>

    <script src="//cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="js/custom.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0 "></script>

    <script>
        // Initialize the plugin
        const newScroll = document.querySelector('#stateList');
        const ps = new PerfectScrollbar(newScroll);
    </script>

</body>

</html>