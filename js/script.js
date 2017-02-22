
$(document).ready(function(){
    var elem = $('ul.nav > li');
    console.log(elem);
    elem.click(function(){
       elem.removeClass('active');
        $(this).addClass('active');
    });   
});
