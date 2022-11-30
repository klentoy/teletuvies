<div id="section-right-hip-pain" class="row pb-5" style="display:none">
    <div class="col-md-12">
        <h4 class="section-title row pb-3 pl-2">Right Hip Exam Questions</h4>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="ratingHipPR">On a scale from 1 to 10 how bad is your pain? with 10 being the
                            worst.</label>
                    </div>
                    <div class="col-md-6">
                        <label for="persistedHipPR">How long have you had this pain? When did it start? &nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="ratingHipPR" id="ratingHipPR" class="custom-select required_field" db-table="prod_left_shoulder">
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
                        <div class="form-group"><select class="custom-select required_field" db-table="prod_left_shoulder" name="persistedHipPR" id="persistedHipPR">
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
                <div class="row pb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="fw-bold" for="causeHipPR">Do you know what is the cause of the pain?</label>
                            <span style="display: block; font-size:12px">Cause of the Wrist Pain Specify 'In Detail' the cause of patient s pain (one word descriptions
                                are not adequate, enter a narrative statement of the issues causing pain)</span>
                            <textarea class="form-control required_field" name="causeHipPR" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-6">
                        <label for="patientInjuryHipPR">Was there an Injury related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="patientInjuryHipPR" id="patientInjuryHipPR_yes" value="Yes" />
                            <label class="form-check-label" for="patientInjuryHipPR_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="patientInjuryHipPR" id="patientInjuryHipPR_no" value="No" />
                            <label class="form-check-label" for="patientInjuryHipPR_no">No</label>
                        </div>
                    </div>
                    <div class="col-md-6 patientInjuryHipPR_details" style="position:relative; display:none;">
                        <div class="form-group">
                            <label for="dateofInjuryHipPR">If Yes, when was the Injury?</label>
                            <input type="text" name="dateofInjuryHipPR" id="dateofInjuryHipPR" value="" placeholder="mm-dd-yy"
                                class="form-control required_field datepicker">
                        </div>
                    </div>
                </div>
                <div class="row pb-3 patientInjuryHipPR_details" style="display:none;">
                    <div class="col-md-12">
                        <label for="detailInjuryHipPR">If Yes, what were the details of the injury?</label>
                        <textarea value="" name="detailInjuryHipPR" id="detailInjuryHipPR" data-gramm="false" wt-ignore-input="true"
                            class="form-control required_field"></textarea>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-6">
                        <label for="surgeryHipPR">Was there an Surgery related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="surgeryHipPR" id="surgeryHipPR_yes" value="Yes" />
                            <label class="form-check-label" for="surgeryHipPR_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="surgeryHipPR" id="surgeryHipPR_no" value="No" />
                            <label class="form-check-label" for="surgeryHipPR_no">No</label>
                        </div>
                    </div>
                    <div class="col-md-6 surgeryHipPR_details" style="position:relative; display:none;">
                        <div class="form-group">
                            <label for="dateofsurgeryHipPR">If Yes, when was the surgery?</label>
                            <input type="text" name="dateofsurgeryHipPR" id="dateofsurgeryHipPR" value="" placeholder="mm-dd-yy"
                                class="form-control required_field datepicker">
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-12">
                        <label for="frequencyHipPR">Is the pain Constant or does it Comes and go?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="frequencyHipPR" id="frequencyHipPR_yes" value="constant" />
                            <label class="form-check-label" for="frequencyHipPR_yes">constant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="frequencyHipPR" id="frequencyHipPR_no" value="intermittent" />
                            <label class="form-check-label" for="frequencyHipPR_no">intermittent</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="aggravatesHipPR">What aggravates the pain? Bending, Walking, standing, Lifting?</label>
                            <select id="aggravatesHipPR" name="aggravatesHipPR[]" class="choices-multiple required_field" placeholder="Can select multiple pains" multiple>
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="painIncreasesHipPR">Does the pain increase while bending forward or leaning back?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="painIncreasesHipPR" id="painIncreasesHipPR" class="custom-select required_field">
                                        <option value="">Please select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="painIncreasesHipPRleft">Does the pain increase while leaning to the LEFT?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="painIncreasesHipPRleft" id="painIncreasesHipPRleft" class="custom-select required_field">
                                        <option value="">Please select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="painIncreasesHipPRright">Does the pain increase while leaning to the RIGHT?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="painIncreasesHipPRright" id="painIncreasesHipPRright" class="custom-select required_field">
                                        <option value="">Please select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="treatmentsHipPR">What treatments have you tried to alleviate the pain?</label>
                            <select id="treatmentsHipPR" name="treatmentsHipPR[]" class="choices-multiple required_field" placeholder="Can select multiple pain treatments"
                                multiple>
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

            </div>
        </div>
    </div>
</div>