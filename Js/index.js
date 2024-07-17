// =========================================================Log

console.log('ładoanie JS...');

// =========================================================Loading

window.addEventListener('load', function () {

    // =========================================================Sleep

    // =========================================================Paralax

    window.onscroll = function () { move() };

    function move() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById('progres-item').style.width = scrolled + '%';
    }

    // =========================================================Go To

    $('.goTo').find('a').click(function (e) {
        e.preventDefault();

        var section = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(section).offset().top - 250
        });
    });

    // =========================================================Load Page

    var styleElem = document.head.appendChild(document.createElement("style"));

    styleElem.innerHTML = "#loader {z-index: -1; opacity: 0;}";

    // =========================================================Log

    console.log('pomyślnie załadowano! :)');
})