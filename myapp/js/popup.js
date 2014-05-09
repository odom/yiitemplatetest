/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(e) {
    /* jquery apply theme from cookie*/
    $("#changetheme").attr("href", $.cookie('mapring-afinos-theme'));
    $(".main-content").css({"background": "url('"+$.cookie('mapring-afinos-background')+"') no-repeat scroll center"});

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
           $(".main-content").css({"background": "url('"+$(this).children('img').data('css')+"') no-repeat scroll center"});
           $.cookie('mapring-afinos-background', $(this).children('img').data("css"), {expires: 30,path:'/'});
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
            $.cookie('mapring-afinos-theme', $(this).data('css'), {expires: 30, path:'/'});
        });
       
       
    });



    $("#popup-select-room").popover({
        html: true,
        title: '<span class="title-popup">Select room</span>',
        content: function() {
            return $(".select-room-box").html();
        }
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
}); //End of Document Ready