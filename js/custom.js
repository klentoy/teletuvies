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
        paging:true,
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
            'url': "http://teletuvies.test/api_grab.php",
            'type': 'GET',
            'data': function (data) {
                var filter_state = $('input:checkbox[name="state"]:checked').map(function() {
                    return this.value;
                }).get().join('|');
                data.filter_state = filter_state; 
            }
        },
        columns: [
            { "data": "Active", 
            render: function ( data, type, full ) {
                return'<a href="update/'+ full.userId +'" type="button" class="btn btn-link" data-toggle="modal" data-target="update">Update</a><a type="button" class="btn btn-link" data-toggle="modal" data-target="update">Create a Consult</a>';
            } },
            { "data": "userId" },
            { "data": "Name" },
            { "data": "State" },
        ],
        "order": [[ 1, "desc" ]],
        
    });
    
});