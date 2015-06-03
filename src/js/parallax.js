(function () {
    var el = document.querySelector('.intro');
    var speed = -1.5;


    window.addEventListener('scroll', function() {
        var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        var yPos = -(scrollTop / speed);
        var coords = '0% ' + yPos + 'px';

        el.style.backgroundPosition = coords;
    });
})();