body = document.getElementsByTagName("BODY")[0];

document.addEventListener('DOMContentLoaded', function() {
    var elems_dropdown = document.querySelectorAll('.dropdown-trigger');
    var instances_dropdown = M.Dropdown.init(elems_dropdown);

    instance = M.Dropdown.getInstance(elems_dropdown[0]);
    console.log(instance);
    
    var elems_parallax = document.querySelectorAll('.parallax');
    var instances_parallax = M.Parallax.init(elems_parallax);

    var elems_spy = document.querySelectorAll('.scrollspy');
    var instances_spy = M.ScrollSpy.init(elems_spy);

    var elems_sidebar = document.querySelectorAll('.sidenav');
    var instances_sidebar = M.Sidenav.init(elems_sidebar);

    var elems_collapsible = document.querySelectorAll('.collapsible');
    var instances_collapsible = M.Collapsible.init(elems_collapsible);

    var toastElement = document.querySelector('.toast');
    var toastInstance = M.Toast.getInstance(toastElement);
});