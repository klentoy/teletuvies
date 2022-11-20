// SideNav Button Initialization
// $(".button-collapse").sideNav();
// // SideNav Scrollbar Initialization
// var sideNavScrollbar = document.querySelector('.custom-scrollbar');
// Ps.initialize(sideNavScrollbar);



$(document).ready(function () {
    $('#table1').DataTable({
        "paging": false,
        "searching": false,
        "info": false
    });
    $('.dataTables_length').addClass('bs-select');

    $('#patients-table').DataTable({
        paging: true,
        language: {
            searchPlaceholder: "Search",
            search: "",
            loadingRecords: '&nbsp;',
            processing: "<span class='fa-stack fa-lg'>\n\
            <i class='fa fa-spinner fa-spin fa-stack-2x fa-fw'></i>\n\
       </span>&emsp;Processing ...",
        },
        processing: true,
        serverSide: true,
        loading: true,
        ajax: {
            'url': window.location.protocol + "//" + window.location.host + "/api_grab.php",
            'type': 'GET',
            'data': function (data) {
                var filter_state = $('input:checkbox[name="state"]:checked').map(function () {
                    return this.value;
                }).get().join('|');
                data.action = '_get_patients';
                data.filter_state = filter_state;
            }
        },
        columns: [{
                "data": "Active",
                render: function (data, type, full) {
                    return '<a href="update-patient.php?user_id=' + full.userId + '" type="button" class="btn btn-link">Update</a>' +
                        '<a href="create-consult.php?user_id=' + full.userId + '" type="button" class="btn btn-link">Create a Consult</a>';
                }
            },
            {
                "data": "userId"
            },
            {
                "data": "Name"
            },
            {
                "data": "State"
            },
        ],
        "order": [
            [1, "desc"]
        ],

    });

    patients_insurance_form();
    patients_secondary_insurance_form();
    getPatients();
});

function patients_insurance_form() {
    $('#privateInsurance, #medgroup, #rxBin').removeAttr('required');
    $('.insuranceCarrier-select').prop("disabled", true);

    $('#insureType').on('change', function () {
        const insuranceType = $("option:selected", this).text().toLowerCase();

        $('.insurance-toggle').hide();
        $('.insurance-' + insuranceType).fadeIn();

        if (insuranceType == 'medicare') {
            $('.insuranceCarrier-select').fadeOut();
            $('.insuranceCarrier-text').fadeIn();
        } else if (insuranceType == 'ppo') {
            $('.insuranceCarrier-text').hide();
            $('.insuranceCarrier-select').show();

            $('.insuranceCarrier-select').prop("disabled", false);
            $('#privateInsurance, #medgroup, #rxBin').attr('required', true);
        } else {
            $('.insuranceCarrier-select').fadeOut();
            $('.insuranceCarrier-text').fadeIn();
            $('.insuranceCarrier-select').val('Other').change();
            $('.insuranceCarrier-select').removeAttr('required');
            $('.insuranceCarrier-text').attr('required', true).prop("disabled", false);

            $('.medicare-label').text($("option:selected", this).text() + ' Policy');
            $('.insurance-medicare').fadeIn();
        }

    });

    $('#coi').on('change', function () {
        const text = $("option:selected", this).text().toLowerCase();
        if (text == 'yes') {
            $('.co-pay-container').fadeIn();
        } else {
            $('.co-pay-container').fadeOut();
        }
    });

    $('#insuredRelationship').on('change', function () {
        const text = $("option:selected", this).text().toLowerCase();
        if (text != 'self') {
            $('.other-insurance').fadeIn();
        } else {
            $('.other-insurance').fadeOut();
        }
    })
}

function patients_secondary_insurance_form() {
    $('#privateSecInsurance, #secInsurMedgroup, #secInsureRxBin').removeAttr('required');
    $('.secInsuranceCarrier-select').prop("disabled", true);

    $('#secInsureType').on('change', function () {
        const insuranceType = $("option:selected", this).text().toLowerCase();

        $('.sec-insurance-toggle').hide();
        $('.sec-insurance-' + insuranceType).fadeIn();

        if (insuranceType == 'medicare') {
            $('.secInsuranceCarrier-select').fadeOut();
            $('.secInsuranceCarrier-text').fadeIn();
        } else if (insuranceType == 'ppo') {
            $('.secInsuranceCarrier-text').hide();
            $('.secInsuranceCarrier-select').show();

            $('.secInsuranceCarrier-select').prop("disabled", false);
            $('#privateSecInsurance, #secInsurMedgroup, #secInsureRxBin').attr('required', true);
        } else {
            $('.secInsuranceCarrier-select').fadeOut();
            $('.secInsuranceCarrier-text').fadeIn();
            $('.secInsuranceCarrier-select').val('Other').change();
            $('.secInsuranceCarrier-select').removeAttr('required');
            $('.secInsuranceCarrier-text').attr('required', true);
            $('input[name="medicare"]').attr('required', true);
            $('.sec-medicare-label').text($("option:selected", this).text() + ' Policy');
            $('.sec-insurance-medicare').fadeIn();
        }

    });

    $('#coi').on('change', function () {
        const text = $("option:selected", this).text().toLowerCase();
        if (text == 'yes') {
            $('.co-pay-container').fadeIn();
        } else {
            $('.co-pay-container').fadeOut();
        }
    });

    $('#insuredRelationship').on('change', function () {
        const text = $("option:selected", this).text().toLowerCase();
        if (text != 'self') {
            $('.other-insurance').fadeIn();
        } else {
            $('.other-insurance').fadeOut();
        }
    })
}


function toggleField(thisField, secondary = false) {
    var insuranceName = $("option:selected", thisField).text().toLowerCase();
    if (insuranceName == 'other') {
        var showField = thisField.nextElementSibling;
        thisField.nextElementSibling.id;
        thisField.disabled = true;
        thisField.style.display = 'none';
        showField.disabled = false;
        showField.style.display = 'inline';

        var insuranceType = $('#insureType').val().toLowerCase();
        if (secondary) {
            var insuranceType = $('#secInsureType').val().toLowerCase();
        }
        if (insuranceType == 'ppo') {
            showField.focus();
        }
    }
}

function toggleFieldOnBlur(thisField, secondary = false) {
    var showField = thisField.previousElementSibling;
    showField.value = '';

    if (thisField.value == "") {

        thisField.previousElementSibling.id;

        var insuranceType = $('#insureType').val().toLowerCase();
        if (secondary) {
            var insuranceType = $('#secInsureType').val().toLowerCase();
        }
        if (insuranceType != 'ppo') {
            return;
        }
        thisField.disabled = true;
        thisField.style.display = 'none';
        showField.disabled = false;
        showField.style.display = 'inline';
        showField.focus();
    }
}

function getPatients() {
    $.ajax(window.location.protocol + "//" + window.location.host + '/mock_data/patients.json').then((data) => { 
        var patient_obj = {};
        data.forEach(e => {
            patient_obj[e.label] = e.value
        });

        $('#ptName').prop("disabled", false);

        $('#ptName').autocomplete({ 
            source: patient_obj,
            onSelectItem: function (selected, val){
                console.log(selected, val);
                $('#ptName').dropdown('close');
            },
            dropdownOptions: function () {
            }
         })
    });
}

const debounce = (func, delay, {
    leading
} = {}) => {
    let timerId

    return (...args) => {
        if (!timerId && leading) {
            func(...args)
        }
        clearTimeout(timerId)

        timerId = setTimeout(() => func(...args), delay)
    }
}