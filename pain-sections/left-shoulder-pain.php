<div id="section-back-pain" class="row pb-5" style="display:none;">
    <div class="col-md-12">
        <h4 class="section-title row pb-3 pl-2">Left Shoulder Exam Questions</h4>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">On a scale from 1 to 10 how bad is your pain? with 10 being the
                                worst.</label>
                            <select name="ratingSP" id="ratingSP" class="custom-select shoulder_valid"
                                db-table="prod_left_shoulder" required="required">
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
                            <label for="">How long have you had this pain? When did it start?<br />&nbsp;</label>
                            <select name="locationBP" id="locationBP" size="1" class="custom-select back_valid"
                                db-table="prod_back" required="required">
                                <option value="">Choose...</option>
                                <option value="Lower Lumbar">Lower Lumbar</option>
                                <option value="Thoracic Lumbar">Thoracic Lumbar</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="fw-bold" for="">Do you know what is the cause of the pain?</label>
                            <span style="display: block; font-size:12px">Cause of the Shoulder Pain Specify 'In Detail'
                                the cause of patient s pain (one word descriptions are not adequate, enter a narrative
                                statement of the issues causing pain)</span>
                            <textarea class="form-control" name="causeSP" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-12">
                        <label for="">Was there an Injury related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="patientInjurySP" id="patientInjurySP_yes"
                                value="Yes" required="required" />
                            <label class="form-check-label" for="patientInjurySP_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="patientInjurySP" id="patientInjurySP_no"
                                value="No" required="required" />
                            <label class="form-check-label" for="patientInjurySP_no">No</label>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-12">
                        <label for="">Was there an Surgery related to the cause of the pain?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="surgerySP" id="surgerySP_yes" value="Yes"
                                required="required" />
                            <label class="form-check-label" for="surgerySP_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="surgerySP" id="surgerySP_no" value="No"
                                required="required" />
                            <label class="form-check-label" for="surgerySP_no">No</label>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-12">
                        <label for="">Is the pain Constant or does it Comes and go?</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="frequencySP" id="frequencySP_yes"
                                value="constant" required="required" />
                            <label class="form-check-label" for="frequencySP_yes">constant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="frequencySP" id="frequencySP_no"
                                value="intermittent" required="required" />
                            <label class="form-check-label" for="frequencySP_no">intermittent</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ptName">What aggravates the pain? Bending, Walking, standing, Lifting?</label>
                            <select name="aggravatesSP[]" class="choices-multiple"
                                placeholder="Can select multiple pains" multiple>
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
                            <select name="treatmentsSP[]" class="choices-multiple"
                                placeholder="Can select multiple pain treatments" multiple>
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