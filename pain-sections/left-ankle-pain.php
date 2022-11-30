<div id="section-left-ankle-pain" class="row pb-5" style="display:none">
    <div class="col-md-12">
        <h4 class="section-title row pb-3 pl-2">Left Ankle Exam Questions</h4>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="ratingAP">On a scale from 1 to 10 how bad is your pain? with 10 being the
                            worst.</label>
                    </div>
                    <div class="col-md-6">
                        <label for="persistedAP">How long have you had this pain? When did it start? &nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="ratingAP" id="ratingAP" class="custom-select required_field" db-table="prod_left_shoulder">
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
                        <div class="form-group"><select class="custom-select required_field" db-table="prod_left_shoulder" name="persistedAP" id="persistedAP"
                               >
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
                            <label class="fw-bold" for="causeAP">Do you know what is the cause of the pain?</label>
                            <span style="display: block; font-size:12px">Cause of the Ankle Pain Specify 'In Detail' the cause of patient s pain (one word descriptions
                                are not adequate, enter a narrative statement of the issues causing pain)</span>
                            <textarea class="form-control required_field" name="causeAP" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-6">
                        <label for="">Was there an Injury related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="patientInjuryAP" id="patientInjuryAP_yes" value="Yes" />
                            <label class="form-check-label" for="patientInjuryAP_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="patientInjuryAP" id="patientInjuryAP_no" value="No" />
                            <label class="form-check-label" for="patientInjuryAP_no">No</label>
                        </div>
                    </div>
                    <div class="col-md-6 patientInjuryAP_details" style="position:relative; display:none;">
                        <div class="form-group">
                            <label for="dateofInjuryAP">If Yes, when was the Injury?</label>
                            <input type="text" name="dateofInjuryAP" id="dateofInjuryAP" value="" placeholder="mm-dd-yy"
                                class="form-control required_field datepicker">
                        </div>
                    </div>
                </div>
                <div class="row pb-3 patientInjuryAP_details" style="display:none;">
                    <div class="col-md-12">
                        <label for="injuryAP">If Yes, what were the details of the injury?</label>
                        <textarea value="" name="injuryAP" id="injuryAP" data-gramm="false" wt-ignore-input="true"
                            class="form-control required_field"></textarea>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-6">
                        <label for="">Was there an Surgery related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="surgeryAP" id="surgeryAP_yes" value="Yes" />
                            <label class="form-check-label" for="surgeryAP_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="surgeryAP" id="surgeryAP_no" value="No" />
                            <label class="form-check-label" for="surgeryAP_no">No</label>
                        </div>
                    </div>
                    <div class="col-md-6 surgeryAP_details" style="position:relative; display:none;">
                        <div class="form-group">
                            <label for="dateofsurgeryAP">If Yes, when was the surgery?</label>
                            <input type="text" name="dateofsurgeryAP" id="dateofsurgeryAP" value="" placeholder="mm-dd-yy"
                                class="form-control required_field datepicker">
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-12">
                        <label for="">Is the pain Constant or does it Comes and go?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="frequencyAP" id="frequencyAP_yes" value="constant" />
                            <label class="form-check-label" for="frequencyAP_yes">constant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="frequencyAP" id="frequencyAP_no" value="intermittent" />
                            <label class="form-check-label" for="frequencyAP_no">intermittent</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ptName">What aggravates the pain? Bending, Walking, standing, Lifting?</label>
                            <select name="aggravatesAP[]" class="choices-multiple required_field" placeholder="Can select multiple pains" multiple>
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
                            <label for="ptName">Treatments Tried for Ankle Pain</label>
                            <select name="treatmentsAP[]" class="choices-multiple required_field" placeholder="Can select multiple pain treatments" multiple>
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

                <div class="row pb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="shoeSize">Shoe Size</label>
                            <select name="shoeSize" id="shoeSize" class="custom-select required_field" db-table="prod_left_ankle">
                                <option value="">Choose...</option>
                                <option value="4.5">4.5</option>
                                <option value="5">5</option>
                                <option value="5.5">5.5</option>
                                <option value="6">6</option>
                                <option value="6.5">6.5</option>
                                <option value="7">7</option>
                                <option value="7.5">7.5</option>
                                <option value="8">8</option>
                                <option value="8.5">8.5</option>
                                <option value="9">9</option>
                                <option value="9.5">9.5</option>
                                <option value="10">10</option>
                                <option value="10.5">10.5</option>
                                <option value="11">11</option>
                                <option value="11.5">11.5</option>
                                <option value="12">12</option>
                                <option value="12.5">12.5</option>
                                <option value="13">13</option>
                                <option value="13.5">13.5</option>
                                <option value="14">14</option>
                                <option value="14.5">14.5</option>
                                <option value="15">15</option>
                                <option value="15.5">15.5</option>
                                <option value="16">16</option>
                            </select>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>