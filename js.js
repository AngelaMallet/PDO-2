$(document).ready(function () {
    $('.fixed-action-btn').floatingActionButton();
    $(".dropdown-trigger").dropdown();
    
    (function($){
        $(function(){
            // Plugin initialization
            $('select').not('.disabled').formSelect();
        }); 
    })(jQuery); // end of jQuery name space
    
});


