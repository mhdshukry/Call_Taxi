

var url = new URL('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
var url = new URL('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js');

jQuery(document).ready(function ($) {
    $(".dropdown-button").dropdown();
    $('.modal').modal();
    $(".signup-toggle").click(function () {
        $(this).hide();
        $(".signupForm").show(300);
        $(".policy").css("visibility", "visible");
    });
});
