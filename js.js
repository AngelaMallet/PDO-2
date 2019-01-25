$(document).ready(function () {
    $('.fixed-action-btn').floatingActionButton();
    $(".dropdown-trigger").dropdown();
    $('.modal').modal();
    
    (function($){
        $(function(){
            // Plugin initialization
            $('select').not('.disabled').formSelect();
        }); 
    })(jQuery); // end of jQuery name space
    
});


