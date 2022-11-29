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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/eyv0fnb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" />

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
                    <form id="consult-form" action="">
                        <!-- Create a Consult -->
                        <div id="section-patient-demographics" class="row pb-5">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Create a Consult</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group chief-complaints-box">
                                                    <label for="ptName">Chief Complaints *</label>

                                                    <select name="complaints" id="choices-multiple-remove-button" placeholder="Can select multiple complaints" multiple>
                                                        <option value="Back Pain">Back Pain</option>
                                                        <option value="Left Knee Pain">Left Knee Pain</option>
                                                        <option value="Right Knee Pain">Right Knee Pain</option>
                                                        <option value="Left Shoulder Pain">Left Shoulder Pain</option>
                                                        <option value="Right Shoulder Pain">Right Shoulder Pain</option>
                                                        <option value="Left Ankle Pain">Left Ankle Pain</option>
                                                        <option value="Right Ankle Pain">Right Ankle Pain</option>
                                                        <option value="Left Wrist Pain">Left Wrist Pain</option>
                                                        <option value="Right Wrist Pain">Right Wrist Pain</option>
                                                        <option value="Left Elbow Pain">Left Elbow Pain</option>
                                                        <option value="Right Elbow Pain">Right Elbow Pain</option>
                                                        <option value="Left Hip Pain">Left Hip Pain</option>
                                                        <option value="Right Hip Pain">Right Hip Pain</option>
                                                        <option value="CGM">CGM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="supplierCode">Supplier Code</label>
                                                    <input disabled="disabled" value="<?php echo isset($_GET['supplierCode']) ? $_GET['supplierCode'] : ''; ?>"
                                                        id="supplierCode" name="supplierCode" type="text" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Upload Intake Audio</label>
                                                    <input name="audio_file[]" id="audio_file" class="form-control form-control-lg" id="formFileLg" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Create a Consult -->

                        <!-- #section-back-pain -->
                        <?php include 'pain-sections/back-pain.php'; ?>
                        <!-- #section-back-pain -->

                        <!-- #section-left-knee-pain -->
                        <?php include 'pain-sections/left-knee-pain.php'; ?>
                        <!-- #section-left-knee-pain -->

                        <!-- #section-right-knee-pain -->
                        <?php include 'pain-sections/right-knee-pain.php'; ?>
                        <!-- #section-left-knee-pain -->

                        <!-- #section-left-shoulder-pain -->
                        <?php include 'pain-sections/left-shoulder-pain.php'; ?>
                        <!-- #section-left-shoulder-pain -->

                        <!-- #section-right-shoulder-pain -->
                        <?php include 'pain-sections/right-shoulder-pain.php'; ?>
                        <!-- #section-left-shoulder-pain -->

                        <!-- #section-left-ankle-pain -->
                        <?php include 'pain-sections/left-ankle-pain.php'; ?>
                        <!-- #section-left-ankle-pain -->

                        <!-- #section-right-ankle-pain -->
                        <?php include 'pain-sections/right-ankle-pain.php'; ?>
                        <!-- #section-right-ankle-pain -->

                        <!-- #section-left-wrist-pain -->
                        <div id="section-left-wrist-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Left Wrist Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Left Wrist here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-left-wrist-pain -->

                        <!-- #section-right-wrist-pain -->
                        <div id="section-right-wrist-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Right Wrist Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Right Wrist here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-right-wrist-pain -->

                        <!-- #section-left-elbow-pain -->
                        <div id="section-left-elbow-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Left Elbow Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Left Elbow here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-left-elbow-pain -->

                        <!-- #section-right-elbow-pain -->
                        <div id="section-right-elbow-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Right Elbow Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Right Elbow here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-right-elbow-pain -->

                        <!-- #section-left-hip-pain -->
                        <div id="section-left-hip-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Left Hip Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Left Hip here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-left-hip-pain -->

                        <!-- #section-right-hip-pain -->
                        <div id="section-right-hip-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Right Hip Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Right Hip here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-right-hip-pain -->

                        <!-- #section-cgm -->
                        <div id="section-cgm" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">CGM Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        CGM here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-cgm -->

                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="patientInjuryBP" id="patientInjuryBP" type="checkbox" class="custom-control-input">
                                    <label for="domSticker" class="custom-control-label">Domicile/Same State providers only (optional)</label>
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

    <script src="//cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="js/custom.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0 "></script>

</body>

</html>