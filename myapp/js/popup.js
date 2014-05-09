/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(e) {
   $changeBackground = $("#popup-changbackground").popover({
        html: true,
//        title: '<span class="title-popup">Change Background</span><a class="close" href="#");">&nbsp;&times;</a>',
        title: '<span class="title-popup">Change background</span>',
        content: function() {
            return $(".chang_background_box").html();
        }
    });
     $changeBackground.on('shown.bs.popover', function () {
        $(".wood").click(function(){
            $(".main-content").css({"background":"url('../images/wood.jpg') no-repeat scroll center"});
        });
        $(".leather").click(function(){
            $(".main-content").css({"background":"url('../images/leather.jpg') no-repeat scroll center"}); 
        });
        $(".default").click(function(){
            $(".main-content").css({"background":"url('../images/default.jpg') no-repeat scroll center"});  
        });
    });
    
      $("#popup-change-them").popover({
        html: true,
        title: '<span class="title-popup">Change theme</span>',
        content: function() {
            return $(".chang-them-box").html();
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
        title: '<span class="title-popup">Select room</span>',
        content: function() {
            return $(".select-room-box").html();
        }
    });
    
//    $( "#dialog-modal" ).dialog({
//      autoOpen: false,
//      show: {
//        effect: "blind",
//        duration: 1000
//      },
//      hide: {
//        effect: "explode",
//        duration: 1000
//      }
//    });
 
$("#create_room").click(function(){
  $( "#dialog-modal" ).dialog({
      height: 250,
      width:  550,
      title:'Create new room'
  });
  $("#dialog-modal").dialog("widget").draggable("option","containment",".main-content");
  $( "#dialog-modal" ).resizable('disable').removeClass('ui-state-disabled');
});

});

//$(function() {
//    $( "#dialog-modal" ).dialog({
////      height: 140,
////      modal: true
//    });
//  });

//  $("#dialog-modal").each(function() { 
//    alert("Hello"); 
//});


//$( "#create_room" ).click(function() {
//  //alert( "Hello" );
//  $( "#dialog-modal" ).dialog({
//     height: 140,
//     modal: true
//    });
//});

  