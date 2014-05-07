/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(e) {
    $("#popup-changbackground").popover({
        html: true,
        title: '<span class="title-popup">Chang Background</span><a class="close" href="#");">&nbsp;&times;</a>',
        content: function() {
            return $(".chang_background_box").html();
        }
    });
    $(document).click(function(e) {

        if ($(e.target).is('.close')) {
            $("#popup-changbackground").popover('hide');
        }
    })

});