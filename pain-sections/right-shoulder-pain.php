<div id="section-right-shoulder-pain" class="row pb-5" style="display:none">
    <div class="col-md-12">
        <h4 class="section-title row pb-3 pl-2">Right Shoulder Exam Questions</h4>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="ratingSPR">On a scale from 1 to 10 how bad is your pain? with 10 being the
                            worst.</label>
                    </div>
                    <div class="col-md-6">
                        <label for="persistedSPR">How long have you had this pain? When did it start? &nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="ratingSPR" id="ratingSPR" class="custom-select required_field" db-table="prod_left_shoulder">
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
                            <select class="custom-select required_field" db-table="prod_right_shoulder" name="persistedSPR" id="persistedSPR">
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
                            <label class="fw-bold" for="causeSPR">Do you know what is the cause of the pain?</label>
                            <span style="display: block; font-size:12px">Cause of the Shoulder Pain Specify 'In Detail'
                                the cause of patient s pain (one word descriptions are not adequate, enter a narrative
                                statement of the issues causing pain)</span>
                            <textarea class="form-control required_field" name="causeSPR" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-6">
                        <label for="">Was there an Injury related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="patientInjurySPR" id="patientInjurySPR_yes" value="Yes" />
                            <label class="form-check-label" for="patientInjurySPR_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="patientInjurySPR" id="patientInjurySPR_no" value="No" />
                            <label class="form-check-label" for="patientInjurySPR_no">No</label>
                        </div>
                    </div>
                    <div class="col-md-6 patientInjurySPR_details" style="position:relative; display:none;">
                        <div class="form-group">
                            <label for="dateofInjurySPR">If Yes, when was the Injury?</label>
                            <input type="text" name="dateofInjurySPR" id="dateofInjurySPR" value="" placeholder="mm-dd-yy"
                                class="form-control required_field datepicker">
                        </div>
                    </div>
                </div>
                <div class="row pb-3 patientInjurySPR_details" style="display:none;">
                    <div class="col-md-12">
                        <label for="injurySPR">If Yes, what were the details of the injury?</label>
                        <textarea value="" name="injurySPR" id="injurySPR" data-gramm="false" wt-ignore-input="true"
                            class="form-control required_field"></textarea>
                    </div>
                </div>

                
                <div class="row pb-3">
                    <div class="col-md-6">
                        <label for="">Was there an Surgery related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="surgerySPR" id="surgerySPR_yes" value="Yes" />
                            <label class="form-check-label" for="surgerySPR_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="surgerySPR" id="surgerySPR_no" value="No" />
                            <label class="form-check-label" for="surgerySPR_no">No</label>
                        </div>
                    </div>
                    <div class="col-md-6 surgerySPR_details" style="position:relative; display:none;">
                        <div class="form-group">
                            <label for="dateofsurgerySPR">If Yes, when was the surgery?</label>
                            <input type="text" name="dateofsurgerySPR" id="dateofsurgerySPR" value="" placeholder="mm-dd-yy"
                                class="form-control required_field datepicker">
                        </div>
                    </div>
                </div>


                <div class="row pb-3">
                    <div class="col-md-12">
                        <label for="">Is the pain Constant or does it Comes and go?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="frequencySPR" id="frequencySPR_yes" value="constant" />
                            <label class="form-check-label" for="frequencySPR_yes">constant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="radio" name="frequencySPR" id="frequencySPR_no" value="intermittent" />
                            <label class="form-check-label" for="frequencySPR_no">intermittent</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ptName">What aggravates the pain? Bending, Walking, standing, Lifting?</label>
                            <select name="aggravatesSPR[]" class="choices-multiple required_field" placeholder="Can select multiple pains" multiple>
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
                            <label for="ptName">What treatments have you tried to alleviate the pain?</label>
                            <select name="treatmentsSPR[]" class="choices-multiple required_field" placeholder="Can select multiple pain treatments" multiple>
                                <option value="Over the counter medication">Over the counter medication</option>
                                <option value="Prescription medication">Prescription medication</option>
                                <option value="Physical therapy">Physical therapy</option>
                                <option value="Rest">Rest</option>
                                <option value="Ice/Heat Therapy">Ice/Heat Therapy</option>
                                <option value="Orthotic Device">Orthotic Device</option>
                                <option value="Topical Pain Cream">Topical Pain Cream</option>
                                <option value="Shots">Shots</option>
                                <option value="none">none</option>
                                <option value="tension machine">tension machine</option>
                                <option value="Excersice">Excersice</option>
                                <option value="PAIN PATCHES">PAIN PATCHES</option>
                                <option value="CREAMS">CREAMS</option>
                                <option value="PATCH">PATCH</option>
                                <option value="STEROIDS">STEROIDS</option>
                                <option value="INJECTIONS">INJECTIONS</option>
                                <option value="SURGERY">SURGERY</option>
                                <option value="Essential Oils">Essential Oils</option>
                                <option value="Cold packs">Cold packs</option>
                                <option value="MEDICATED RUBS">MEDICATED RUBS</option>
                                <option value="TYLENOL">TYLENOL</option>
                                <option value="PAIN GELS">PAIN GELS</option>
                                <option value="MASSAGE">MASSAGE</option>
                                <option value="Pain killers">Pain killers</option>
                                <option value="Nothing">Nothing</option>
                                <option value="Leaf and bio spray">Leaf and bio spray</option>
                                <option value="leaf">leaf</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>