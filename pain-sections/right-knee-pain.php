<div id="section-right-knee-pain" class="row pb-5" style="display:none">
    <div class="col-md-12">
        <h4 class="section-title row pb-3 pl-2">Right Knee Exam Questions</h4>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="KPrating">On a scale from 1 to 10 how bad is your pain? with 10 being the worst.</label>
                    </div>
                    <div class="col-md-6">
                        <label for="persistedKP">How long have you had this pain? When did it start?</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="KPrating" id="KPratingR" class="custom-select required_field" db-table="prod_left_knee">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="custom-select required_field" name="persistedKPR" id="persistedKP">
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
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="fw-bold" for="causeKPR">Do you know what is the cause of the pain?</label>
                            <span style="display: block; font-size:12px">Cause of the Knee Pain Specify 'In Detail' the cause of patient's pain (one word descriptions are
                                not
                                adequate, enter a narrative statement of the issues causing pain)</span>
                            <textarea class="form-control required_field" name="causeKPR" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row pb-3">
                    <div class="col-md-12">
                        <label for="">Was there an Injury related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="patientInjuryKPR" id="patientInjuryKPR_yes" value="Yes" />
                            <label class="form-check-label" for="patientInjuryKPR_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="patientInjuryKPR" id="patientInjuryKPR_no" value="No" />
                            <label class="form-check-label" for="patientInjuryKPR_no">No</label>
                        </div>
                    </div>
                </div>


                <div class="row pb-3">
                    <div class="col-md-12">
                        <label for="">Was there an Surgery related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="surgeryKPR" id="surgeryKPR_yes" value="Yes" />
                            <label class="form-check-label" for="surgeryKPR_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="surgeryKPR" id="surgeryKPR_no" value="No" />
                            <label class="form-check-label" for="surgeryKPR_no">No</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-12">
                        <label for="">Is the pain Constant or does it Comes and goes?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="frequencyKPR" id="frequencyKPR_yes" value="constant" />
                            <label class="form-check-label" for="frequencyKPR_yes">constant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="frequencyKPR" id="frequencyKPR_no" value="intermittent" />
                            <label class="form-check-label" for="frequencyKPR_no">intermittent</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="aggravatesKPR">What aggravates the pain? Bending, Walking, standing, Lifting?</label>
                            <select id="aggravatesKPR" name="aggravatesKPR[]" class="choices-multiple" placeholder="Can select multiple pains" multiple>
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
                            <label for="treatmentsKPR">What treatments have you tried to alleviate the pain?</label>
                            <select id="treatmentsKPR" name="treatmentsKPR[]" class="choices-multiple" placeholder="Can select multiple pain treatments" multiple>
                                <option value="Over the counter medication">Over the counter medication</option>
                                <option value="Prescription medication">Prescription medication</option>
                                <option value="Physical therapy">Physical therapy</option>
                                <option value="Rest">Rest</option>
                                <option value="Ice/Heat Therapy">Ice/Heat Therapy</option>
                                <option value="Orthotic Device">Orthotic Device</option>
                                <option value="Topical Pain Cream">Topical Pain Cream</option>
                                <option value="Shots">Shots</option>
                                <option value="Nothing">Nothing</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col-md-12">
                        <label for="">Do you feel any weakness in the knees?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="weaknessKPR" id="weaknessKPR_yes" value="Yes" />
                            <label class="form-check-label" for="weaknessKPR_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="weaknessKPR" id="weaknessKPR_no" value="No" />
                            <label class="form-check-label" for="weaknessKPR_no">No</label>
                        </div>
                    </div>
                </div>


                <div class="row pb-3">
                    <h6><strong>Knee Exam Maneuvers</strong>
                        <h6>
                            <p style="font-size: 12px;">Please be careful while performing these knee maneuvers as you might be at risk of falling. Please ask for
                                assistance if possible.</p>
                </div>

                <div class="row pb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="PivotShiftTestright">If you were to stand on both feet and twist your knee to the outside, Will that cause pain?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="PivotShiftTestright" id="PivotShiftTestright" db-table="prod_left_knee" class="custom-select required_field"
                                    >
                                        <option value="">Please select</option>
                                        <option value="Positive">Positive</option>
                                        <option value="Negative">Negative</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-primary" role="alert" data-mdb-color="primary">
                            <i class="fas fa-info-circle me-3"></i><strong>Cabot's Maneuver (figure of '4' knee bend)</strong>
                            <ul>
                                <li><strong>Positive</strong>: Test produces lateral joint line pain, indicating LCL instability and ligament laxity</li>
                                <li><strong>Negative</strong>: Test DOES NOT produce lateral joint line pain</li>
                            </ul>
                            <strong>(Leave positive and negative both unchecked for the knee if you did not perform this test on the knee)</strong>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="cabotmaneuverRight">If you were to stand with your ankles together, knees facing out and bend them Will that cause
                                        pain?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="cabotmaneuverRight" id="cabotmaneuverRight" db-table="prod_left_knee" class="custom-select required_field"
                                    >
                                        <option value="">Please select</option>
                                        <option value="Positive">Positive</option>
                                        <option value="Negative">Negative</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-primary" role="alert" data-mdb-color="primary">
                            <i class="fas fa-info-circle me-3"></i><strong>One-Legged Stand Test</strong> (Stabilization to avoid fall advised for this test. Patient can
                            stabilize themselves by holding onto a chair or kitchen counter)
                            <ul>
                                <li><strong>Positive</strong>: Patient experiences increased knee rotational pain on weight bearing leg</li>
                                <li><strong>Negative</strong>: Patient DOES NOT experience increased knee rotational pain on weight bearing leg</li>
                            </ul>
                            <strong>(Leave positive and negative both unchecked for the knee if you did not perform this test on the knee)</strong>
                        </div>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="oneleggedtestRight">If you were to stand on one leg will that cause pain?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select id="oneleggedtestRight" name="oneleggedtestRight" db-table="prod_left_knee" class="custom-select required_field"
                                    >
                                        <option value="">Please select</option>
                                        <option value="Positive">Positive</option>
                                        <option value="Negative">Negative</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h6><strong>Do you ever experience any of the following sounds?</strong>
                        <h6>
                            <p style="font-size: 12px;">Suggest all the following (Check all that apply)</p>
                </div>

                <div class="row pb-5">
                    <div class="col-md-12">
                        <label for="">Do you ever hear any Clicking, Grinding or Popping sounds in the knee?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="checkbox" value="ClickingR" id="ClickingR" />
                            <label class="form-check-label" for="ClickingR">Clicking</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="checkbox" value="GrindingR" id="GrindingR" />
                            <label class="form-check-label" for="GrindingR">Grinding</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="checkbox" value="PoppingR" id="PoppingR" />
                            <label class="form-check-label" for="PoppingR">Popping</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col-md-12">
                        <label for=""><strong>Do you have loose ligaments or laxity in the knee that causes weakness and instability of the knee?</strong></label><br />
                        <div class="form-check">
                            <input class="form-check-input required_field" type="checkbox" id="findingsCB1R" name="findingsCB1R" />
                            <label class="form-check-label" for="findingsCB1R">Joint laxity is present causing weakness and instability of the knee.</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col-md-12">
                        <label for=""><strong>Do you feel like you can move around freely but function of the knee is limited because of weakness?</strong></label><br />
                        <div class="form-check">
                            <input class="form-check-input required_field" type="checkbox" id="findingsCB2R" name="findingsCB2R" />
                            <label class="form-check-label" for="findingsCB2R">Patient is ambulatory but functionally limited due to weakness of knee.</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col-md-12">
                        <label for=""><strong>Do you feel like when you stand on your knee that your at high risk of falling down?</strong></label><br />
                        <div class="form-check">
                            <input class="form-check-input required_field" type="checkbox" id="findingsCB3R" name="findingsCB3R" />
                            <label class="form-check-label" for="findingsCB3R">Patient is a high fall risk due to knee instability.</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col-md-12">
                        <label for=""><strong>Is your knee tender and soft to the touch or visibly present when looking at the knee(s)?</strong></label><br />
                        <div class="form-check">
                            <input class="form-check-input required_field" type="checkbox" id="findingsCB4R" name="findingsCB4R" />
                            <label class="form-check-label" for="findingsCB4R">Knee is tender and soft tissue swelling is present.</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="KneeLcodeRPCC">DME</label>
                            <select name="KneeLcodeRPCC" id="KneeLcodeRPCC" class="custom-select required_field">
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
                        <div class="form-group" style="position:relative;">
                            <label for="RightKneePharmPrescriptionNumber">Pharmacy</label>
                            <select class="choices-multiple required_field" multiple name="RightKneePharmPrescriptionNumber" id="RightKneePharmPrescriptionNumber">
                                <option value="0" prescription="Not Covered/Not Available"></option>
                                <option value="83" prescription="PLIAGLIS 7-7% EXTERNAL CREAM">Apply 1gm topically to affected area(s) up to 4 times daily. Peel off
                                    after waiting the required application time as directed. (Max application time of 60 min) - 120 grams</option>
                                <option value="82" prescription="Kamdoy Skin Emulsion">Apply 2ml (6 sprays=1ml) to affected area 3 - 4 times a day - 240mL</option>
                                <option value="80" prescription="HAPRODERM GEL">Apply 1-2 grams of gel to the affected area(s) and allow to dry. Reapply up to 3 times
                                    daily (or as needed) 1 gram = 1 dime size - 180 Grams</option>
                                <option value="81" prescription="Atopaderm cream">Apply 2 to 3 grams into palm and apply to affected area 3 times daily. Massage gently
                                    into dry skin until completely absorbed. If skin is broken, cover with appropriate dressing - 200 gm</option>
                                <option value="67" prescription="Fenoprofen 200mg">Take 1 tablet every 4 to 6 hours as needed - 540 Capsules</option>
                                <option value="68" prescription="Chlorzoxazone 250mg">Take 1 to 2 tablets by mouth 3-4 times daily as needed for muscle spasms - 360
                                    Tablets</option>
                                <option value="69" prescription="Ketoprofen 25mg Capsule">Take 2-3 capsules with a full glass of water up to three times daily - 720
                                    Capsules</option>
                                <option value="70" prescription="TRIAMCINOLONE OINTMENT 0.05%">Apply 2 to 4 g to the affected area 2 to 4 times daily as needed - 430G
                                </option>
                                <option value="72" prescription="DOXEPIN 5% CREAM">Apply 1-2 grams of cream to affected area up to 4 times daily as needed for pain -
                                    225GRMS</option>
                                <option value="73" prescription="Calcipotriene/Betamethasone 0.005%/0.064% Ointment">Apply 1-3 grams topically to affected area(s) up
                                    to 4 times daily - 240 grams</option>
                                <option value="77" prescription="Diclovix">Apply 2.5ml of diclofenac solution to affected areas 4 times daily as needed (20 drops=1ml)
                                    and apply 1 patch up to twice daily as needed - 1 Tube</option>
                                <option value="66" prescription="Orphenadrine/Aspirin/Caffeine 50/770/60 MG Tablets">½ to 1 tablet PO 3 to 4 times daily. - 360 Tablets
                                </option>
                                <option value="33" prescription="Pliaglis">Pliaglis (Lidocaine and Tetracaine) Cream 7% / 7%
                                    Apply 2-3 grams topically to affected area(s) up to four times daily. Peel off after waiting the
                                    required application time as directed. (Maximum application time of 60 minutes) Qty: 240 grams - 240 grams</option>
                                <option value="34" prescription="Chlorzoxazone 375 mg Tablet">Take 1 tablet by mouth 3-4 times daily as needed for muscle spasms - 120
                                    Tablets/ 375 mg each tablet</option>
                                <option value="35" prescription="Cyclobenzaprine 7.5 mg Tablet">Take 1 tablet by mouth 3 times daily as needed for muscle spasms - 90
                                    Tablets 7.5mg each tablet</option>
                                <option value="47" prescription="Ketoprofen 25mg Capsule">Take 2-3 capsules with a full glass of water up to three times daily - 270
                                    Capsules</option>
                                <option value="50" prescription="Chlorzoxazone 250mg">Take 1 tablet by mouth 3-4 times daily as needed for muscle spasms - 120 Tablets
                                </option>
                                <option value="52" prescription="Fluovix">Apply 2-3 grams once or twice daily to affected pain area(s). - 1 TUBE</option>
                                <option value="56" prescription="Dermacinrx Lexitral Pharmapak -">Pharmapak - A 40 DROPS (2-3 ML) TO BACK/JOINTS/KNEES AND CREAM QID PP
                                    - 387 mL</option>
                                <option value="60" prescription="Diclofenac Potassium Tablets USP 25mg">Take 2 tablets by mouth three times daily as needed for pain -
                                    total daily dose of 150mg divided into three doses. Each tablet equals 25mg - 180 Tablets</option>
                                <option value="62" prescription="Fenoprofen 200mg">Take 1-2 capsules by mouth 3-4 times daily as needed for pain - 180 Capsules
                                </option>
                                <option value="63" prescription="Orphenadrine/Aspirin/Caffeine 50/770/60 MG Tablets">1/2 to 1 tablet PO 3 to 4 times daily. - 120
                                    Tablets</option>
                                <option value="64" prescription="Diclofenac Potassium 25mg Tablets">Take 1 to 2 tablets PO Three time daily - 540 Tablets</option>
                                <option value="85" prescription="Metaxalone 800mg">Take 1 tablet 3-4 times daily as needed for muscle spasms - Qty 120 Tablets</option>
                                <option value="86" prescription="Lidocaine 5% Ointment">Apply 1-2 grams to affected area(s) 3-4 times daily. 1 gram =1 dime size - Qty
                                    70.88 Grams</option>
                                <option value="87" prescription="Diclofenac 3% Gel">Apply 1-2 grams to affected area(s) 3-4 times daily. 1 gram=1 dime size - Qty 100
                                    Grams</option>
                                <option value="88" prescription="Naproxen ER 375mg">Take 1 tablet once daily as needed for pain - Qty 60 Tablets</option>
                                <option value="89" prescription="Desonide 0.05% Gel">Apply to affected area 2 to 4 times daily as needed. - Qty 240gm - 30 day supply
                                </option>
                                <option value="91" prescription="Desonide 0.05% Gel">Apply to affected area 2 to 4 times daily as needed. - Qty 720gm - 90 day supply
                                </option>
                                <option value="93" prescription="Cyclobenzaprine ER 15mg Capsule">Take 1 capsule by mouth once daily as needed for muscle spasms - 30
                                    Capsules</option>
                                <option value="94" prescription="Naproxen 125mg/5ml Suspension">Take 10-20ml's by mouth twice daily as needed for pain - 946mls
                                </option>
                                <option value="95" prescription="Diclofenac 3% Gel">Apply 1-2 grams to affected area(s) 3-4 times daily. 1 gram=1 dime size - QTY 200
                                    Grams</option>
                                <option value="97" prescription="Diclofenac Potassium 25 MG Oral Capsule">Take 2 capsules by mouth up to 3 times daily as needed for
                                    pain - total daily dose of 150mg divided into three doses. Each capsule equals 25mg. - Qty 180 Capsules</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>