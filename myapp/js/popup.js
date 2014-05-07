/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(e) {
    $("#popup-changbackground").popover({
        html: true,
//        title: '<span class="title-popup">Change Background</span><a class="close" href="#");">&nbsp;&times;</a>',
        title: '<span class="title-popup">Change Background</span>',
        content: function() {
            return $(".chang_background_box").html();
        }
    });
//    $(document).click(function(e) {
//
//        if ($(e.target).is('.close')) {
//            $("#popup-changbackground").popover('hide');
//        }
//    })
    
  $("#popup-select-room").popover({
        html: true,
        title: '<span class="title-popup">Select Room</span>',
        content: function() {
            return $(".select-room-box").html();
        }
    });
    
    
      $("#popup-change-them").popover({
        html: true,
        title: '<span class="title-popup">Change Them</span>',
        content: function() {
            return $(".chang-them-box").html();
        }
    });

});