/*!
=========================================================
* ekilie profile for all ekilie users
=========================================================

* Copyright: 2024 ekilie (https://ekilie.com)
* CEO Tachera sasi (https://tachera.com)

=========================================================
*/

// smooth scroll
$(document).ready(function(){
    $(".navbar .nav-link").on('click', function(event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, function(){
                window.location.hash = hash;
            });
        } 
    });
});

// navbar toggle
$('#nav-toggle').click(function(){
    $(this).toggleClass('is-active')
    $('ul.nav').toggleClass('show');
});
//form
const forms = document.querySelectorAll('form')

forms.forEach(form=>{
    form.onsubmit = (e)=>{
        e.preventDefault()
        let formData = new FormData(form)
        console.log(formData,"This form was submitted")

    }
})

//activity count 

