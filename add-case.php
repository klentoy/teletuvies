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

                                                    <select id="choices-multiple-remove-button" placeholder="Can select multiple complaints" multiple>
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
                        <div id="section-back-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Back Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">On a scale from 1 to 10 how bad is your pain? with 10
                                                        being the worst.</label>
                                                    <select name="ratingBP" id="ratingBP" class="custom-select back_valid" db-table="prod_back" required="required">
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
                                                    <label for="">Is it the Lower back or the Upper back?</br />&nbsp;</label>
                                                    <select name="locationBP" id="locationBP" size="1" class="custom-select back_valid" db-table="prod_back"
                                                        required="required">
                                                        <option value="">Choose...</option>
                                                        <option value="Lower Lumbar">Lower Lumbar</option>
                                                        <option value="Thoracic Lumbar">Thoracic Lumbar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">How long have you had this pain? When did it start?</label>
                                                    <select class="custom-select back_valid" db-table="prod_back" name="persistedBP" id="persistedBP" required="required">
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
                                                    <span style="display: block; font-size:12px">Please specify 'In Detail' the cause of patient's pain (one word
                                                        descriptions are not adequate, enter a narrative statement of the issues causing pain if possible)</span>
                                                    <textarea class="form-control" name="causeBP" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-md-12">
                                                <label for="">Was there an Injury related to the cause of the pain?</label><br />
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="patientInjuryBP" id="patientInjuryBP_yes" value="Yes"
                                                        required="required" />
                                                    <label class="form-check-label" for="patientInjuryBP_yes">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="patientInjuryBP" id="patientInjuryBP_no" value="No"
                                                        required="required" />
                                                    <label class="form-check-label" for="patientInjuryBP_no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-md-12">
                                                <label for="">Was there an Surgery related to the cause of the pain?</label><br />
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="surgeryBP" id="surgeryBP_yes" value="Yes" required="required" />
                                                    <label class="form-check-label" for="surgeryBP_yes">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="surgeryBP" id="surgeryBP_no" value="No" required="required" />
                                                    <label class="form-check-label" for="surgeryBP_no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-md-12">
                                                <label for="">Is the pain Constant or does it Comes and go?</label><br />
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="frequencyBP" id="frequencyBP_yes" value="constant"
                                                        required="required" />
                                                    <label class="form-check-label" for="frequencyBP_yes">constant</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="frequencyBP" id="frequencyBP_no" value="intermittent"
                                                        required="required" />
                                                    <label class="form-check-label" for="frequencyBP_no">intermittent</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ptName">What aggravates the pain? Bending, Walking, standing, Lifting?</label>
                                                    <select name="aggravatesBP[]" class="choices-multiple" placeholder="Can select multiple pains" multiple>
                                                        <option value="Bending">Bending</option>
                                                        <option value="Standing">Standing</option>
                                                        <option value="Walking">Walking</option>
                                                        <option value="Lifting">Lifting</option>
                                                        <option value="Sitting">Sitting</option>
                                                        <option value="Laying down">Laying down</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="painIncreases">Does the pain increase while bending forward or leaning back?</label>
                                                    <select id="painIncreases" name="painIncreases" class="custom-select">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="painIncreasesleft">Does the pain increase while leaning to the LEFT?</label>
                                                    <select id="painIncreasesleft" name="painIncreasesleft" class="custom-select">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="painIncreasesright">Does the pain increase while leaning to the RIGHT?</label>
                                                    <select id="painIncreasesright" name="painIncreasesright" class="custom-select">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ptName">What treatments have you tried to alleviate the pain?</label>
                                                    <select name="treatmentsBP[]" class="choices-multiple" placeholder="Can select multiple pain treatments" multiple>
                                                        <option value="Over the counter medication">Over the counter medication</option>
                                                        <option value="Prescription medication">Prescription medication</option>
                                                        <option value="Physical therapy">Physical therapy</option>
                                                        <option value="Rest">Rest</option>
                                                        <option value="Ice/Heat Therapy">Ice/Heat Therapy</option>
                                                        <option value="Orthotic Device">Orthotic Device</option>
                                                        <option value="Topical Pain Cream">Topical Pain Cream</option>
                                                        <option value="Shots">Shots</option>
                                                        <option value="Tension Machine">Tension Machine</option>
                                                        <option value="Excersice">Excersice</option>
                                                        <option value="Pain Patches">Pain Patches</option>
                                                        <option value="Creams">Creams</option>
                                                        <option value="Patch">Patch</option>
                                                        <option value="Steroids">Steroids</option>
                                                        <option value="Injections">Injections</option>
                                                        <option value="Surgery">Surgery</option>
                                                        <option value="Essential Oils">Essential Oils</option>
                                                        <option value="Cold packs">Cold packs</option>
                                                        <option value="Medicated Rubs">Medicated Rubs</option>
                                                        <option value="Tylenol">Tylenol</option>
                                                        <option value="Pain Gels">Pain Gels</option>
                                                        <option value="Massage">Massage</option>
                                                        <option value="Pain killers">Pain killers</option>
                                                        <option value="Leaf And Bio Spray">Leaf And Bio Spray</option>
                                                        <option value="Leaf">Leaf</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pb-5">
                                            <div class="col-md-12">
                                                <label for="">Waist Size</label><br />
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="waistSize" id="waist_small" value="Small(26'' to 34'')"
                                                        required="required" />
                                                    <label class="form-check-label" for="waist_small">Small(26'' to 34'')</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="waistSize" id="waist_medium" value="Medium(33'' to 42'')"
                                                        required="required" />
                                                    <label class="form-check-label" for="waist_medium">Medium(33'' to 42'')</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="waistSize" id="waist_large" value="Large(41'' to 51'')"
                                                        required="required" />
                                                    <label class="form-check-label" for="waist_large">Large(41'' to 51'')</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="waistSize" id="waist_xl" value="X-Large(50'' to 60'')"
                                                        required="required" />
                                                    <label class="form-check-label" for="waist_xl">X-Large(50'' to 60'')</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="waistSize" id="waist_xxl" value="XX-Large(60'' to 70'')"
                                                        required="required" />
                                                    <label class="form-check-label" for="waist_xxl">XX-Large(60'' to 70'')</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="waistSize" id="waist_xxxl" value="XXXL" required="required" />
                                                    <label class="form-check-label" for="waist_xxxl">XXXL</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="waistSize" id="waist_xxxxl" value="XXXXL" required="required" />
                                                    <label class="form-check-label" for="waist_xxxxl">XXXXL</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pb-3">
                                            <h6><strong>Items covered by insurance</strong>
                                                <h6>
                                        </div>

                                        <div class="row pb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="BackLcodePCC">DME</label>
                                                    <select name="BackLcodePCC" id="BackLcodePCC" class="custom-select" required="required">
                                                        <option value="">Choose...</option>
                                                        <option value="L0457">L0457</option>
                                                        <option value="L0637">L0637</option>
                                                        <option value="L0651">L0651</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pb-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="BackPharmPrescriptionNumber">Pharmacy</label>
                                                    <select class="choices-multiple" multiple name="BackPharmPrescriptionNumber" id="BackPharmPrescriptionNumber">
                                                        <option value="0" prescription="Not Covered/Not Available">Not Covered/Not Available</option>
                                                        <option value="83" prescription="PLIAGLIS 7-7% EXTERNAL CREAM">Apply 1gm topically to affected area(s) up to 4
                                                            times daily. Peel off after waiting the required application time as directed. (Max application time of 60
                                                            min) - 120 grams</option>
                                                        <option value="82" prescription="Kamdoy Skin Emulsion">Apply 2ml (6 sprays=1ml) to affected area 3 - 4 times a
                                                            day - 240mL</option>
                                                        <option value="80" prescription="HAPRODERM GEL">Apply 1-2 grams of gel to the affected area(s) and allow to
                                                            dry. Reapply up to 3 times daily (or as needed) 1 gram = 1 dime size - 180 Grams</option>
                                                        <option value="81" prescription="Atopaderm cream">Apply 2 to 3 grams into palm and apply to affected area 3
                                                            times daily. Massage gently into dry skin until completely absorbed. If skin is broken, cover with appropriate
                                                            dressing - 200 gm</option>
                                                        <option value="67" prescription="Fenoprofen 200mg">Take 1 tablet every 4 to 6 hours as needed - 540 Capsules
                                                        </option>
                                                        <option value="68" prescription="Chlorzoxazone 250mg">Take 1 to 2 tablets by mouth 3-4 times daily as needed
                                                            for muscle spasms - 360 Tablets</option>
                                                        <option value="69" prescription="Ketoprofen 25mg Capsule">Take 2-3 capsules with a full glass of water up to
                                                            three times daily - 720 Capsules</option>
                                                        <option value="70" prescription="TRIAMCINOLONE OINTMENT 0.05%">Apply 2 to 4 g to the affected area 2 to 4 times
                                                            daily as needed - 430G</option>
                                                        <option value="72" prescription="DOXEPIN 5% CREAM">Apply 1-2 grams of cream to affected area up to 4 times
                                                            daily as needed for pain - 225GRMS</option>
                                                        <option value="73" prescription="Calcipotriene/Betamethasone 0.005%/0.064% Ointment">Apply 1-3 grams topically
                                                            to affected area(s) up to 4 times daily - 240 grams</option>
                                                        <option value="77" prescription="Diclovix">Apply 2.5ml of diclofenac solution to affected areas 4 times daily
                                                            as needed (20 drops=1ml) and apply 1 patch up to twice daily as needed - 1 Tube</option>
                                                        <option value="66" prescription="Orphenadrine/Aspirin/Caffeine 50/770/60 MG Tablets">½ to 1 tablet PO 3 to 4
                                                            times daily. - 360 Tablets</option>
                                                        <option value="33" prescription="Pliaglis">Pliaglis (Lidocaine and Tetracaine) Cream 7% / 7%
                                                            Apply 2-3 grams topically to affected area(s) up to four times daily. Peel off after waiting the
                                                            required application time as directed. (Maximum application time of 60 minutes) Qty: 240 grams - 240 grams
                                                        </option>
                                                        <option value="34" prescription="Chlorzoxazone 375 mg Tablet">Take 1 tablet by mouth 3-4 times daily as needed
                                                            for muscle spasms - 120 Tablets/ 375 mg each tablet</option>
                                                        <option value="35" prescription="Cyclobenzaprine 7.5 mg Tablet">Take 1 tablet by mouth 3 times daily as needed
                                                            for muscle spasms - 90 Tablets 7.5mg each tablet</option>
                                                        <option value="47" prescription="Ketoprofen 25mg Capsule">Take 2-3 capsules with a full glass of water up to
                                                            three times daily - 270 Capsules</option>
                                                        <option value="50" prescription="Chlorzoxazone 250mg">Take 1 tablet by mouth 3-4 times daily as needed for
                                                            muscle spasms - 120 Tablets</option>
                                                        <option value="52" prescription="Fluovix">Apply 2-3 grams once or twice daily to affected pain area(s). - 1
                                                            TUBE</option>
                                                        <option value="56" prescription="Dermacinrx Lexitral Pharmapak -">Pharmapak - A 40 DROPS (2-3 ML) TO
                                                            BACK/JOINTS/KNEES AND CREAM QID PP - 387 mL</option>
                                                        <option value="60" prescription="Diclofenac Potassium Tablets USP 25mg">Take 2 tablets by mouth three times
                                                            daily as needed for pain - total daily dose of 150mg divided into three doses. Each tablet equals 25mg - 180
                                                            Tablets</option>
                                                        <option value="62" prescription="Fenoprofen 200mg">Take 1-2 capsules by mouth 3-4 times daily as needed for
                                                            pain - 180 Capsules</option>
                                                        <option value="63" prescription="Orphenadrine/Aspirin/Caffeine 50/770/60 MG Tablets">1/2 to 1 tablet PO 3 to 4
                                                            times daily. - 120 Tablets</option>
                                                        <option value="64" prescription="Diclofenac Potassium 25mg Tablets">Take 1 to 2 tablets PO Three time daily -
                                                            540 Tablets</option>
                                                        <option value="85" prescription="Metaxalone 800mg">Take 1 tablet 3-4 times daily as needed for muscle spasms -
                                                            Qty 120 Tablets</option>
                                                        <option value="86" prescription="Lidocaine 5% Ointment">Apply 1-2 grams to affected area(s) 3-4 times daily. 1
                                                            gram =1 dime size - Qty 70.88 Grams</option>
                                                        <option value="87" prescription="Diclofenac 3% Gel">Apply 1-2 grams to affected area(s) 3-4 times daily. 1
                                                            gram=1 dime size - Qty 100 Grams</option>
                                                        <option value="88" prescription="Naproxen ER 375mg">Take 1 tablet once daily as needed for pain - Qty 60
                                                            Tablets</option>
                                                        <option value="89" prescription="Desonide 0.05% Gel">Apply to affected area 2 to 4 times daily as needed. - Qty
                                                            240gm - 30 day supply</option>
                                                        <option value="91" prescription="Desonide 0.05% Gel">Apply to affected area 2 to 4 times daily as needed. - Qty
                                                            720gm - 90 day supply</option>
                                                        <option value="93" prescription="Cyclobenzaprine ER 15mg Capsule">Take 1 capsule by mouth once daily as needed
                                                            for muscle spasms - 30 Capsules</option>
                                                        <option value="94" prescription="Naproxen 125mg/5ml Suspension">Take 10-20ml's by mouth twice daily as needed
                                                            for pain - 946mls</option>
                                                        <option value="95" prescription="Diclofenac 3% Gel">Apply 1-2 grams to affected area(s) 3-4 times daily. 1
                                                            gram=1 dime size - QTY 200 Grams</option>
                                                        <option value="97" prescription="Diclofenac Potassium 25 MG Oral Capsule">Take 2 capsules by mouth up to 3
                                                            times daily as needed for pain - total daily dose of 150mg divided into three doses. Each capsule equals 25mg.
                                                            - Qty 180 Capsules</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-back-pain -->

                        <!-- #section-left-knee-pain -->
                        <div id="section-left-knee-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Left Knee Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Left knee here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-left-knee-pain -->

                        <!-- #section-right-knee-pain -->
                        <div id="section-right-knee-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Right Knee Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Right knee here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-left-knee-pain -->

                        <!-- #section-left-shoulder-pain -->
                        <div id="section-left-shoulder-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Left Shoulder Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Left Shoulder here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-left-shoulder-pain -->

                        <!-- #section-right-shoulder-pain -->
                        <div id="section-right-shoulder-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Right Shoulder Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Right shoulder here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-left-shoulder-pain -->

                        <!-- #section-left-ankle-pain -->
                        <div id="section-left-ankle-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Left Ankle Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Left Ankle here
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #section-left-ankle-pain -->

                        <!-- #section-right-ankle-pain -->
                        <div id="section-right-ankle-pain" class="row pb-5" style="display:none" ;>
                            <div class="col-md-12">
                                <h4 class="section-title row pb-3 pl-2">Right Ankle Exam Questions</h4>
                                <div class="card">
                                    <div class="card-body">
                                        Right Ankle here
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="js/custom.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0 "></script>

</body>

</html>