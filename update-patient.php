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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />


</head>

<body>
    <!-- Start your project here-->
    <!--Main Navigation-->
    <?php include 'layouts/header.php'; ?>

    <!--Main layout-->
    <main class="main">
        <div class="container-fluid pb-4">
            <div class="row">
                <div class="col-md-3 px-3 mt-10 pt-4 pb-4">
                    <div class="card">
                        <ul class="list-group list-group-light">
                            <li class="list-group-item px-3 border-0 fw-bold fs-6">Patient Demographics</li>
                            <li class="list-group-item px-3 border-0 fw-bold fs-6">Insurance Information</li>
                            <li class="list-group-item px-3 border-0 fw-bold fs-6">Medical History Questionnaire</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 px-3 mt-10 pt-4 pb-4">
                    <div class="row pb-5">
                        <div class="col-md-12">
                            <h4 class="section-title">Patient Demographics</h4>
                            <div class="card">
                                <div class="card-header">Patient ID#<?php echo isset($_GET['user_id']) ? $_GET['user_id'] : ''; ?></div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="language">Language *</label>
                                                    <select id="language" name="language" required="required" class="custom-select">
                                                        <option value="">English</option>
                                                        <option value="">Spanish</option>
                                                        <option value="">French</option>
                                                        <option value="">Arabic</option>
                                                        <option value="">Hindi</option>
                                                        <option value="">Japanese</option>
                                                        <option value="">Mandarin</option>
                                                        <option value="">Korean</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="patientFirstName">First Name *</label>
                                                    <input id="patientFirstName" name="patientFirstName" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="patinetMi">Middle Initial</label>
                                                    <input id="patinetMi" name="patinetMi" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="patientLastname">Last Name *</label>
                                                    <input id="patientLastname" name="patientLastname" type="text" class="form-control">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="patientDOB">Date of Birth *</label>
                                                    <input id="patientDOB" name="patientDOB" type="text" class="form-control" placeholder="DD-MM-YYYY">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gender">Gender *</label>
                                                    <input id="gender" name="gender" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Address *</label>
                                                    <input id="address" name="address" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="city">City *</label>
                                                    <input id="city" name="city" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="state">State *</label>
                                                    <input id="state" name="state" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="postsalCode">Zipcode *</label>
                                                    <input id="postsalCode" name="postsalCode" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="primaryPhone">Primary Phone *</label>
                                                    <input id="primaryPhone" name="primaryPhone" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="secPhn">Secondary Phone</label>
                                                    <input id="secPhn" name="secPhn" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">Email Address</label>
                                                    <input id="email" name="email" type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="section-title">Insurance Information</h4>
                            <div class="card">
                                <div class="card-header">
                                    * Enter your name and insurance info below "as it appears on your card with any middle initial or middle name included" <br />
                                    - If none, enter "none"
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="insureType">Insurance Type *</label>
                                                    <select id="insureType" name="insureType" required="required" class="custom-select">
                                                        <option value="Medicare" selected="">Medicare</option>
                                                        <option value="PPO">PPO</option>
                                                        <option value="HMO">HMO</option>
                                                        <option value="Champs VA">Champs VA</option>
                                                        <option value="Tri-Care">Tri-Care</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="medicare">Medicare # *</label>
                                                    <input id="medicare" name="medicare" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="patientDOB">Date of Birth *</label>
                                                    <input id="patientDOB" name="patientDOB" type="text" class="form-control" placeholder="DD-MM-YYYY">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gender">Gender *</label>
                                                    <input id="gender" name="gender" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Address *</label>
                                                    <input id="address" name="address" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="city">City *</label>
                                                    <input id="city" name="city" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="state">State *</label>
                                                    <input id="state" name="state" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="postsalCode">Zipcode *</label>
                                                    <input id="postsalCode" name="postsalCode" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="primaryPhone">Primary Phone *</label>
                                                    <input id="primaryPhone" name="primaryPhone" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="secPhn">Secondary Phone</label>
                                                    <input id="secPhn" name="secPhn" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">Email Address</label>
                                                    <input id="email" name="email" type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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