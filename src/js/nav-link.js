// /* Build Navigation Links automatically */
// function buildNav() {
//     'use strict';

//     // Create nav element
//     var nav = document.createElement('nav');
//     var ul = document.createElement('ul');

//     nav.className += ' nav';

//     // Populate Nav Element
//     var sections = document.querySelectorAll('main > section');
//     for(var i = 0; i < sections.length; i++) {
//         var id = sections[i].id;
//         var text = sections[i].querySelector('h1').textContent;

//         var li = document.createElement('li');
//         var a = document.createElement('a');
//         a.href = '#' + id;
//         a.textContent = text;

//         li.appendChild(a);
//         ul.appendChild(li);
//     }

//     nav.appendChild(ul);

//     // Prepend Nav Element
//     for( var j = 0; j < sections.length; j++) {
//         sections[j].insertBefore(nav.cloneNode(true), sections[j].childNodes[0]);
//     }

// }

function mapDom() {
    'use strict';
    var sects = document.querySelectorAll('main > section');
    var obj = [];

    for (var i = 0; i < sects.length; i++) {
        var el = {};
        var children = [];

        //Build Top Level
        el.text = sects[i].querySelector('h1').textContent;
        el.href = clean(el.text);
        sects[i].id = el.href;

        // Build Second Level
        var h2 = sects[i].querySelectorAll('h2');
        for(var j = 0; j < h2.length; j++) {
            if(h2[j].textContent === 'Level 2 Link') {
                continue;
            }
            var child = {};
            child.text = h2[j].textContent;
            child.href = clean(child.text);
            h2[j].id = child.href;
            children.push(child);
        }

        el.children = children;

        // Push to obj
        obj.push(el);
    }

    return obj;
}

function clean(text) {
    'use strict';
    return text.replace(/[^a-z0-9]/g, function(s) {
            var c = s.charCodeAt(0);
            if (c === 32) {
                return '-';
            }
            if (c >= 65 && c <= 90) {
                return s.toLowerCase();
            }
            return '__' + ('000' + c.toString(16)).slice(-4);
        });
}

function buildNav() {
    'use strict';
    var map = mapDom();
    var nav = document.querySelector('#nav > ul');

    for(var i = 0; i < map.length; i++) {
        var li = document.createElement('li');
        var a = document.createElement('a');
        var children = map[i].children;
        a.href = '#' + map[i].href;
        a.textContent = map[i].text;
        li.appendChild(a);

        // Build second level
        var ul = document.createElement('ul');
        for(var j = 0; j < children.length; j++) {
            var x = document.createElement('li');
            var y = document.createElement('a');
            y.href = '#' + children[j].href;
            y.textContent = children[j].text;
            x.appendChild(y);
            ul.appendChild(x);
        }



        // Add to page
        li.appendChild(ul);
        nav.appendChild(li);
    }
}

/* HTML5 feature test*/
if( 'querySelector' in document && 'addEventListener' in window && 'localStorage' in window ) {
    // Load scripts here
    buildNav();
}