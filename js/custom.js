// SideNav Button Initialization
// $(".button-collapse").sideNav();
// // SideNav Scrollbar Initialization
// var sideNavScrollbar = document.querySelector('.custom-scrollbar');
// Ps.initialize(sideNavScrollbar);

var patient_questions = [];

$(document).ready(function () {
    $('#table1').DataTable({
        "paging": false,
        "searching": false,
        "info": false
    });
    $('.dataTables_length').addClass('bs-select');

    $('.datepicker').datepicker({
        format: "mm-dd-yy"
    });

    load_patient_table();

    patients_insurance_form();

    patients_secondary_insurance_form();

    getPatients();

    addCaseFuncs();

    consult_form();
});

function load_patient_table() {
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
}

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
        $('#ptName').autocomplete({
            source: patient_obj,
            onSelectItem: function (selected, val) {
                $('#ptName').dropdown('hide');
                console.log(selected.value)
                $('#ptUserId').val(selected.value);
            },
            dropdownOptions: function () {
            }
        })
    });
}

function multiSelectPharmFormat(el) {
    if (!el.id) { return el.text; }
    var $state = $(
        '<span><strong>' + $(el.element).attr('prescription') + '</strong> ' + el.text + '</span>'
    );
    return $state;
}

function addCaseFuncs() {
    if (typeof Choices !== "undefined") {
        var chiefComplaints = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
            shouldSort: false
        });
        /*var multipleCancelButton = new Choices('.choices-multiple', {
            removeItemButton: true,
            shouldSort: false,
            allowHTML: true,
        });*/

        $('.choices-multiple').select2({
            width: "100%",
            templateResult: multiSelectPharmFormat,
            templateSelection: multiSelectPharmFormat
        });

        var questions = [];

        chiefComplaints.passedElement.element.addEventListener(
            'addItem',
            function (event) {
                // questions_sections("value of dropdown", "show section to the page; true|false")
                questions_sections(event.detail.label, true);
                add_field_requirement();
            },
            false,
        );
        chiefComplaints.passedElement.element.addEventListener(
            'removeItem',
            function (event) {
                // questions_sections("value of dropdown", "show section to the page; true|false")
                questions_sections(event.detail.label, false);
                remove_field_requirement();
            },
            false,
        );
    }

}

function add_field_requirement() {
    $('.required_field').prop('required', function () {
        return $(this).is(':visible');
    });
}

function remove_field_requirement() {
    $('.required_field').prop('required', false);
}

function questions_sections(sectionId, show) {
    sectionId = sectionId.replace(/\s+/g, '-').toLowerCase();
    if (show) {
        patient_questions.push(sectionId);
        $('#section-' + sectionId).fadeIn(500);
    } else {
        patient_questions = patient_questions.filter(e => e !== sectionId);
        $('#section-' + sectionId).fadeOut(200);
    }


}

function consult_form() {
    $('#consult-form').on('submit', function () {
        // do validation here
        if ($('#choices-multiple-remove-button').val().length == 0) {
            Swal.fire({
                text: "Please select a complaint",
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
            })
            $('.chief-complaints-box .choices__inner').addClass('focus-field');
            setTimeout(() => {
                $('.chief-complaints-box .choices__inner').removeClass('focus-field');
            }, 3000);
            return false;
        }
    });

    $('.required_field:radio').click(function(){
        var fieldValue = $(this).val();
        var fieldName = $(this).attr("name");
        if ( fieldValue == "Yes" ){
            $('.' + fieldName + '_details').fadeIn();
            add_field_requirement();
        }else{
            $('.' + fieldName + '_details').fadeOut();
            remove_field_requirement();
        }
        
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

