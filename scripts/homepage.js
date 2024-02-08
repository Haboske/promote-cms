$( document ).ready(function() {

    // ABOUT SECTION ICON DIVIDERS
    // GETTING THE PARENT DIV WIDTH TO APPLY TO THE ICON'S DIVIDER CHILD

    let mesureing_Tape = document.querySelector('.mesureing-tape')
    let width = mesureing_Tape.offsetWidth
    console.log(width)
    $('.homepage-about-dividers').css('width',"calc("+width+'px - 100%)')

    // UPDATING IT EVERYTIME THE WINDOW IS RESIZE

    window.onresize = function () {
        let mesureing_Tape = document.querySelector('.mesureing-tape')
        let width = mesureing_Tape.offsetWidth
        console.log(width)
        $('.homepage-about-dividers').css('width',"calc("+width+'px - 100%)')
    }

});