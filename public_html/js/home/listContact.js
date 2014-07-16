
/**
* Prototype
* */
var listRoomMyWord = function (roomMyWorld) {
    var strMyWorld = "";
    var thumbnail = '../images/Santa_Place.jpg';
    for(i=0; i< roomMyWorld.length; i++) {
        var thum = myWorlds[i].ThumnailUrl == '' ? thumbnail:myWorlds[i].ThumnailUrl;
        strMyWorld += '<li> <a href="#">' +
            '<div class="div-avatar">' +
                '<img src="'+thum+'">' +
                    '<span class="status offline"><i class="fa fa-circle"></i></span>' +
                    '<span class="list-view">' + myWorlds[i].RoomName + '</span><i class="fa fa-dropbox dropbox"></i></div></a></li>';
    }
    $('#roomMyWorld').html(strMyWorld);
}

var listContact = function(contact){
	var strContact = "";
	var defaultAvata = '../images/avatar.png';
	for(i=0 ; i< contact.length; i++){
		var thum = contact[i].ImageAvatar == '' ? defaultAvata:contact[i].ImageAvatar;
		strContact += '<li><a href="#">'+
							'<div class="div-avatar">'+
								'<img src="'+thum+'" />'+
								'<span class="list-view">'+contact[i].DisplayName+'</span>'+
							'</div>' +
						'</a>'+
					'</li>'

	}
	$('#listContact').html(strContact);
}

/**
 * MAIN
 */
$('document').ready(function(){
    var data = $.parseJSON($('#userData').val());
    myWorlds = data.myWorlds;
	contact = data.contacts;
    listRoomMyWord(myWorlds);
	listContact(contact);

});


