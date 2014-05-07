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
    
  $("#popup-select-room").click(function(){
      alert(11111111111111);
  });
          
//            popover({
//        html: true,
//        title: '<span class="title-popup">Change Background</span><a class="close" href="#");">&nbsp;&times;</a>',
//        content: function() {
//            return $(".select-room-box").html();
//        }
//    });

});