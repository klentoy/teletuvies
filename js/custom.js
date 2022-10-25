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
});