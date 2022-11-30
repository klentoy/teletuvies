<div id="section-cgm" class="row pb-5" style="display: none">
    <div class="col-md-12">
        <h4 class="section-title row pb-3 pl-2">CGM Exam Questions</h4>
        <div class="card">
            <div class="card-body">
                <span class="pb-3" style="display:block; font-size: 12px;">*Current Insulin Regimen</span>

                <div class="row pb-3">
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="checkbox" name="cgmInsulinPump" id="cgmInsulinPump" value="Yes" />
                            <label class="form-check-label" for="cgmInsulinPump">Insulin Pump</label>
                        </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-5">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="checkbox" name="cgmMultiDailyInjections" id="cgmMultiDailyInjections" value="Yes" />
                            <label class="form-check-label" for="cgmMultiDailyInjections">Multiple Daily Injections - Number Per Day</label>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <select name="cgmMultiDailyInjectionsPerDay" id="cgmMultiDailyInjectionsPerDay" class="custom-select" disabled>
                            <option value="">Please select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-md-5">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input required_field" type="checkbox" name="cgmOther" id="cgmOther" value="Yes" />
                            <label class="form-check-label" for="cgmOther">Other</label>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <textarea name="cgmOtherText" id="cgmOtherText" class="form-control required_field" disabled></textarea>
                    </div>
                </div>
 

            </div>
        </div>
    </div>
</div>