(function() {

    // Variables
    var menu = document.querySelector('.menu');
    var nav = document.querySelector('nav');
    var a = document.querySelectorAll('nav a');

    // Private functions
    function remove () {
        nav.classList.remove('open');
    }

    // Toggles nav menu on click
    menu.addEventListener('click', function() {
        nav.classList.toggle('open');
    });

    // Closes nav menu when link is clicked
    for(var i = 0; i < a.length; i++) {
        a[i].addEventListener('click', remove);
    }

})();