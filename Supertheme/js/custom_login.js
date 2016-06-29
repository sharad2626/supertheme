$(document).ready(function() {
    $(".loginLink").click(function( event ){
           event.preventDefault();
           $(".overlay").fadeToggle("fast");
     });
    
    $(".overlayLink").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');
        
        $("#loginTarget").load("ajax/" + action);
        
        $(".overlay").fadeToggle("fast");
    });
    
    $(".close").click(function(){
        $(".overlay").fadeToggle("fast");
    });
    
    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) { 
            event.preventDefault();
            $(".overlay").fadeToggle("fast");
        }
    });
});

/*this is for  popup slide js*/
  $(function() {
                $('#activator').click(function(){
                    $('#overlay').fadeIn('fast',function(){
                        $('#box').animate({'top':'160px'},500);
                    });
                });
                $('#boxclose').click(function(){
                    $('#box').animate({'top':'-350px'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

            });