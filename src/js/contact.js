(function() {

    var form = document.querySelector('.contact-form');
    var name = document.querySelector('.name');
    var email = document.querySelector('.email');
    var subject = document.querySelector('.subject');
    var message = document.querySelector('.message');
    var xmlhttp, obj, str;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        return;
    }

    form.addEventListener('submit', function( e ) {
        e.preventDefault();
        str = '\nName: ' + name.value + '\nEmail: ' + email.value + '\nMessage: ' + message.value;

        obj = {
            'from': 'dajoker29@gmail.com',
            'to': 'captain@zerodaedalus.net',
            'subject': subject.value,
            'message': str, 
        };

        xmlhttp.open('POST', 'http://zerodaedalus.com/mailer/', true);
        xmlhttp.setRequestHeader('Content-Type', 'application/json');
        xmlhttp.send(JSON.stringify(obj));        
    });

})();