/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(e) {
    /* jquery apply theme from cookie*/
    $("#changetheme").attr("href", $.cookie('mapring-afinos-theme'));
    $(".main-content").css({
        "background": "url('"+$.cookie('mapring-afinos-background')+"') scroll center"
        });
        
$(document).click(function (e) {
    if (($('#popup-changbackground').has(e.target).length == 0)) {
        $('#popup-changbackground').popover('hide');
    }
});
$(document).click(function (e) {
    if (($('#popup-change-them').has(e.target).length == 0)) {
        $('#popup-change-them').popover('hide');
    }
});
$(document).click(function (e) {
    if (($('#popup-select-room').has(e.target).length == 0)) {
        $('#popup-select-room').popover('hide');
    }
});

    $changeBackground = $("#popup-changbackground").popover({
        html: true,
        //        title: '<span class="title-popup">Change Background</span><a class="close" href="#");">&nbsp;&times;</a>',
        title: '<span class="title-popup">Change background</span>',
        content: function() {
            return $(".chang_background_box").html();
        }
    });

    $changeBackground.on('shown.bs.popover', function() {
        $(".list-chang-background a").click(function() {
            $(".main-content").css({
                "background": "url('"+$(this).children('img').data('css')+"') scroll center"
                });
            $.cookie('mapring-afinos-background', $(this).children('img').data("css"), {
                expires: 30,
                path:'/'
            });
        });
    });

    $changeTheme = $("#popup-change-them").popover({
        html: true,
        title: '<span class="title-popup">Change theme</span>',
        content: function() {
            return $(".chang-them-box").html();
        }
    });

    $changeTheme.on('shown.bs.popover', function() {
        $('.chang-them-list a').click(function() {
            $("#changetheme").attr("href", $(this).data('css'));
            $.cookie('mapring-afinos-theme', $(this).data('css'), {
                expires: 30, 
                path:'/'
            });
        });
       
       
    });

    $("#popup-select-room").popover({
        html: true,
        title: '<span class="title-popup">Select room</span>',
        content: function() {
            return $(".select-room-box").html();
        }
    });
 
    $("#create_room").click(function(){
        $( "#dialog-modal" ).dialog({
            resizable: false,
            height: 250,
            width:  550,
            title:'Create new room'
        });
        $("#dialog-modal").dialog("widget").draggable("option","containment",".main-content");
//        $( "#dialog-modal" ).resizable('disable').removeClass('ui-state-disabled');
    });


    /* Mouseover action navigation right*/
    $(".nav-list ul li a").mouseover(function(){
        $(this).children('img').attr('src',$(this).children('img').attr('img-over'));

    }); 
    
    /* Mouseout action navigation right*/
    $(".nav-list ul li a").mouseout(function(){
        $(this).children('img').attr('src',$(this).children('img').attr('img-mouseout'));

    });
    /* click action navigation right*/
    $(".nav-list ul li a").click(function(){
        $(this).children('img').attr('src',$(this).children('img').attr('img-click'));

    });
    
    $("#cancel").click(function(){
        $("#dialog-modal").dialog( "close" );
    
    });
       
    /*slide panel right action*/
    
    $("#directionright").click(function(){
        var mr=$(".menu-right");
        $(".main-content").animate({width:'+=10.5%'},1);
        mr.animate({width:'0px',opacity:'1'},"fast",function(){
        
         mr.hide();
         $(".nav-right").append("<span class='direction-right'><a href='#' id='directionright'><i class='fa fa-angle-double-left'></i></a></span>");
       });
    });
    
 $("body").on("click",".nav-right .direction-right",function(){
        var mr=$(".menu-right");
        mr.show();
        
        mr.animate({width:'200px',opacity:'1'},"fast",function(){
        $(".nav-right .direction-right").hide();
       $(".main-content").animate({width:'-=10.5%'},1);
    });
     
    });
    
    /*slide panel left action*/ 
   $("#directionleft").click(function(){
        var ml=$(".menu-left");
        $(".main-content").animate({width:'+=10.5%',margin:"0 0 0 -=10.5%"},1);
        ml.animate({width:'0px',opacity:'1'},"fast",function(){
        ml.hide();
        $(".nav-left").append("<span class='direction-left'><a href='#'><i class='fa fa-angle-double-right'></i></a></span>");
        $(".nav-left").css({"position":"relative"});
       });
    });
 $("body").on("click",".nav-left .direction-left",function(){
        var mr=$(".menu-left");
        mr.show();
        
        mr.animate({width:'200px',opacity:'1'},"fast",function(){
        $(".nav-left .direction-left").hide();
        $(".nav-left").css({"position":"static"});
        $(".main-content").animate({width:'-=10.5%',margin:"0 0 0 +=10.5%"},1);
    });
    });

}); //End of Document Ready

