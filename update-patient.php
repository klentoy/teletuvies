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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />


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
                    <!-- Patient Demographics -->
                    <div class="row pb-5">
                        <div class="col-md-12">
                            <h4 class="section-title">Patient Demographics</h4>
                            <div class="card">
                                <div class="card-header">Patient ID#<?php echo isset($_GET['user_id']) ? $_GET['user_id'] : ''; ?></div>
                                <div class="card-body">
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
                                                <input id="patientFirstName" name="patientFirstName" type="text" class="form-control" required="required">
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
                                                <input id="patientLastname" name="patientLastname" type="text" class="form-control" required="required">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="patientDOB">Date of Birth *</label>
                                                <input id="patientDOB" name="patientDOB" type="text" class="form-control" placeholder="DD-MM-YYYY" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Gender *</label>
                                                <input id="gender" name="gender" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Address *</label>
                                                <input id="address" name="address" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="city">City *</label>
                                                <input id="city" name="city" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="state">State *</label>
                                                <input id="state" name="state" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="postsalCode">Zipcode *</label>
                                                <input id="postsalCode" name="postsalCode" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="primaryPhone">Primary Phone *</label>
                                                <input id="primaryPhone" name="primaryPhone" type="text" class="form-control" required="required">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Patient Demographics -->

                    <!-- Insurance Information -->
                    <div class="row pb-5">
                        <div class="col-md-12">
                            <h4 class="section-title">Insurance Information</h4>
                            <div class="card">
                                <div class="card-header">
                                    * Enter your name and insurance info below "as it appears on your card with any middle initial or middle name included" <br />
                                    - If none, enter "none"
                                </div>
                                <div class="card-body">
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
                                            <div class="form-group insurance-medicare insurance-toggle">
                                                <label for="medicare"><span class="medicare-label">Medicare</span> # *</label>
                                                <input id="medicare" name="medicare" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="insuranceCarrier">Insurance Name *</label>
                                                <select onchange="toggleField(this);" class="insuranceCarrier-select custom-select" id="insuranceCarrier"
                                                    name="insuranceCarrier" required="required" style="display:none">
                                                    <option value="">Choose...</option>
                                                    <option value="Aetna">Aetna</option>
                                                    <option value="Blue Cross/Blue Shield">Blue Cross/Blue Shield</option>
                                                    <option value="Humana">Humana</option>
                                                    <option value="United Healthcare">United Healthcare</option>
                                                    <option value="Florida Blue">Florida Blue</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <input onblur="toggleFieldOnBlur(this);" id="insuranceCarrier" name="insuranceCarrier" type="text"
                                                    class="form-control insuranceCarrier-text" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="insuredRelationship">Insured Relationship *</label>
                                                <select id="insuredRelationship" name="insuredRelationship" required="required" class="custom-select">
                                                    <option value="Self" selected="">Self</option>
                                                    <option value="Spouse">Spouse</option>
                                                    <option value="Child">Child</option>
                                                    <option value="Champs VA">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row insurance-ppo insurance-toggle" style="display:none">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="privateInsurance">Policy # *</label>
                                                <input id="privateInsurance" name="privateInsurance" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="medgroup">Group *</label>
                                                <input id="medgroup" name="medgroup" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="rxBin">Rx BIN *</label>
                                                <input id="rxBin" name="rxBin" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="pcn">PCN</label>
                                                <input id="pcn" name="pcn" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="coi">Do you have a Co-Pay? *</label>
                                                <select name="coi" id="coi" class="custom-select" required="required">
                                                    <option value="">Choose...</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group co-pay-container" style="display:none">
                                                <label for="coi">How much is your Co-Pay? *</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-dollar"></i>
                                                        </div>
                                                    </div>
                                                    <input id="coi" name="coi" type="text" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row other-insurance" style="display:none">
                                        <div class="col-lg-3 col-md-6">
                                            <label for="insureanceFirstName">First Name</label>
                                            <input class="form-control" id="insureanceFirstName" name="insureanceFirstName" />
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <label for="insureanceMiddleName">Middle Name</label>
                                            <input class="form-control" id="insureanceMiddleName" name="insureanceMiddleName" />
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <label for="insureanceLastName">Last Name</label>
                                            <input class="form-control" id="insureanceLastName" name="insureanceLastName" />
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <label for="insureanceLastName">Date of Birth</label>
                                            <input class="form-control" id="insureanceLastName" name="insureanceLastName" placeholder="DD/MM/YYYY" />
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <label for="insureanceLastName">Gender</label>
                                            <select name="coi" id="coi" class="custom-select">
                                                <option value="">Choose...</option>
                                                <option value="Yes">Male</option>
                                                <option value="No">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-4 mb-4">
                                        <div class="col-md-12">
                                            <h6 class="fs-6 h6 fw-bold">Secondary Insurance</h6>
                                        </div>
                                    </div>

                                    <!-- secondary section -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="secInsureType">Insurance Type *</label>
                                                <select id="secInsureType" name="secInsureType" required="required" class="custom-select">
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
                                            <div class="form-group sec-insurance-medicare sec-insurance-toggle">
                                                <label for="secInsureMedicare"><span class="sec-medicare-label">Medicare</span> # *</label>
                                                <input id="secInsureMedicare" name="secInsureMedicare" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="secInsuranceCarrier">Insurance Name *</label>
                                                <select onchange="toggleField(this, true);" class="secInsuranceCarrier-select custom-select" id="secInsuranceCarrier"
                                                    name="secInsuranceCarrier" required="required" style="display:none">
                                                    <option value="">Choose...</option>
                                                    <option value="Aetna">Aetna</option>
                                                    <option value="Blue Cross/Blue Shield">Blue Cross/Blue Shield</option>
                                                    <option value="Humana">Humana</option>
                                                    <option value="United Healthcare">United Healthcare</option>
                                                    <option value="Florida Blue">Florida Blue</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <input onblur="toggleFieldOnBlur(this, true);" id="secInsuranceCarrier" name="secInsuranceCarrier" type="text"
                                                    class="form-control secInsuranceCarrier-text" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="secInsuredRelationship">Insured Relationship *</label>
                                                <select id="secInsuredRelationship" name="secInsuredRelationship" required="required" class="custom-select">
                                                    <option value="Self" selected="">Self</option>
                                                    <option value="Spouse">Spouse</option>
                                                    <option value="Child">Child</option>
                                                    <option value="Champs VA">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row sec-insurance-ppo sec-insurance-toggle" style="display:none">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="privateSecInsurance">Policy # *</label>
                                                <input id="privateSecInsurance" name="privateSecInsurance" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="secInsurMedgroup">Group *</label>
                                                <input id="secInsurMedgroup" name="secInsurMedgroup" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="secInsureRxBin">Rx BIN *</label>
                                                <input id="secInsureRxBin" name="secInsureRxBin" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="secInsurePcn">PCN</label>
                                                <input id="secInsurePcn" name="secInsurePcn" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- secondary section -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Insurance Information -->

                    <!-- Medical History Questionnaire -->
                    <div class="row pb-5">
                        <div class="col-md-12">
                            <h4 class="section-title">Medical History Questionnaire</h4>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="height">Height</label>
                                                <input id="height" name="height" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="weight">Weight</label>
                                                <input id="weight" name="weight" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="PQ3">
                                                    <strong>Current prescription Medications</strong><br />
                                                    <span style="font-weight: 400; font-size: 14px; line-height: 17px;">Are you taking any prescription medication(s)? if
                                                        so what are they? (please list all medications one by one) (if none, type "NONE")</span>
                                                </label>
                                                <textarea name="PQ3" id="pq3" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="PQ4">
                                                    <strong>Current over-the-counter Medications</strong><br />
                                                    <span style="font-weight: 400; font-size: 14px; line-height: 17px;">Are you taking any over the counter medication(s)?
                                                        if so, what are they? (please list all medications one by one) (if none, type "NONE")</span>
                                                </label>
                                                <textarea name="PQ4" id="pq4" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="ALLERGIES">
                                                    <strong>Allergies to Medications</strong><br />
                                                    <span style="font-weight: 400; font-size: 14px; line-height: 17px;">Do you have any Allergies to any Medication(s)? if
                                                        so, what are they? (please list all allergies one by one) (if none, type "NONE")</span>
                                                </label>
                                                <textarea name="PQ1" id="pq1" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="allergies">
                                                    <strong>Allergies other than Medications</strong><br />
                                                    <span style="font-weight: 400; font-size: 14px; line-height: 17px;">Do you have any Allergies other than medications?
                                                        if so, what are they? (please list all allergies one by one) (if none, type "NONE")</span>
                                                </label>
                                                <textarea name="allergies" id="allergies" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="medInsulin">Do you take insulin?*</label>
                                                <select name="medInsulin" id="medInsulin" class="custom-select" required="">
                                                    <option selected="" value="">Choose...</option>
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="hypertension">Diagnosed with hypertension? *</label>
                                                <select name="hypertension" id="hypertension" class="custom-select" required="">
                                                    <option selected="" value="">Choose...</option>
                                                    <option value="Yes" selected="">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="obesity">Diagnosed with obesity? *</label>
                                                <select name="obesity" id="obesity" class="custom-select" required="">
                                                    <option selected="" value="">Choose...</option>
                                                    <option value="Yes" selected="">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="CHF">Diagnosed with Congestive Heart Failure (CHF)? *</label>
                                                <select name="CHF" id="CHF" class="custom-select" required="">
                                                    <option selected="" value="">Choose...</option>
                                                    <option value="Yes" selected="">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="COPD">Diagnosed with Chronic Lower Respiratory Disease (COPD)? *</label>
                                                <select name="COPD" id="COPD" class="custom-select" required="">
                                                    <option selected="" value="">Choose...</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected="">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="obesity">Diagnosed with diabetes? *<br />&nbsp;</label>
                                                <select name="diabetes" id="profile_diabetes" class="custom-select" required="">
                                                    <option selected="" value="">Choose...</option>
                                                    <option value="Yes" selected="">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="PQ23">Have you seen you Primary Care Physician with in the last year? *</label>
                                                <select id="PQ23" name="PQ23" class="custom-select" required="">
                                                    <option selected="" value="">Choose...</option>
                                                    <option value="Yes" selected="">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="physicianName">Primary Care Physician Name</label>
                                                <input id="physicianName" name="physicianName" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="physicianPhn">Primary Care Physician Phone #</label>
                                                <input id="physicianPhn" name="physicianPhn" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="physicianFax">Primary Care Fax Number #&nbsp;</label>
                                                <input id="physicianFax" name="physicianFax" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Medical History Questionnaire -->

                    <button type="button" class="btn btn-success"> Update patient and create consult </button>
                    <button type="button" class="btn btn-primary"> Save and return </button>
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