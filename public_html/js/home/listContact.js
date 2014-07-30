

function testExtension(strFile) {
	var ft = ["png", "jpg"];
	for( var j=0; j<ft.length; j++){
		if(ft[j] == strFile.substring(strFile.lastIndexOf('.')+1)){
			return true;
		}
	}
	return false;
}


/**
* Prototype
* */
var listProfile=function(myprofile){
	var thumbnail='../images/avatar.png';
	var thum = myprofile.ImageUrl==''?thumbnail:myprofile.ImageUrl;
	console.log(myprofile);
	var detailProfile = '<div class="hidden" id="detailProfile">'
	detailProfile += '<h3>'+ myprofile.PersonalProfile.DisplayName +'</h3>';
	detailProfile += '</div>';
	var strProfile='<span class="profile-image">'+
		'<a href="#"><img src="'+thum+'" /></a></span>'+
		'<ul><li><i class="fa fa-circle icon-online"></i></li>'+
		'<li><i class="fa fa-info-circle icon-info"></i></li></ul>'+
		'<span class="profile-name">'+myprofile.PersonalProfile.DisplayName+'</span>'

	$('#menu-item').html(strProfile + detailProfile);
}

 var listRoomMyWord = function (roomMyWorld) {
    var strMyWorld = "";
    var thumbnail = '../images/Santa_Place.jpg';

    for(var i=0; i< roomMyWorld.length; i++) {
        var thum ='';

	    if(myWorlds[i].ThumnailUrl!='' && testExtension(myWorlds[i].ThumnailUrl)){
		    thum=myWorlds[i].ThumnailUrl;
	    } else{
		    thum=thumbnail;
	    }
        strMyWorld += '<li> <a href="#" id="'+ myWorlds[i].RoomID +'">' +
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
//	console.log(contact[20].DisplayName);
	for(i=0 ; i< contact.length; i++){

		var thum = contact[i].ImageAvatar == '' ? defaultAvata:contact[i].ImageAvatar;
		if(contact[i].ImageAvatar !='' && testExtension(contact[i].ImageAvatar)){
			thum=contact[i].ImageAvatar;
		} else{
			thum=defaultAvata;
		}

		strContact += '<li><a href="#" id="'+contact[i].FriendID+'">'+
							'<div class="div-avatar">'+
								'<img src="'+thum+'" />'+
								'<span class="list-view">'+contact[i].DisplayName +'</span>'+
							'</div>' +
						'</a>'+
					'</li>'

	}
	$('#listContact').html(strContact);
}


var listRoomYourworld = function (roomYourWorld) {
    var strYourWorld = "";
    var thumbnail = '../images/Santa_Place.jpg';
//	console.log(roomYourWorld[0].ThumnailUrl)
	for(var i=0; i< roomYourWorld.length; i++) {
	   var thum ='';
	    if(roomYourWorld[i].ThumnailUrl != '' && testExtension(roomYourWorld[i].ThumnailUrl)){
		    thum=roomYourWorld[i].ThumnailUrl;
	    } else{
		    thum=thumbnail;
	    }
        strYourWorld += '<li> <a href="#" id="'+roomYourWorld[i].RoomID+'">' +
            '<div class="div-avatar">' +
            '<img src="'+thum+'">' +
            '<span class="status offline"><i class="fa fa-circle"></i></span>' +
            '<span class="list-view">' + roomYourWorld[i].RoomName + '</span><i class="fa fa-dropbox dropbox"></i></div></a></li>';
    }
    $('#roomYourWorld').html(strYourWorld);
}





/**
 * MAIN
 */
$('document').ready(function(){

    var data = $.parseJSON($('#userData').val());
    myWorlds = data.myWorlds;
	contact = data.contacts;
    yourworlds=data.yourWorlds;
    myprofile=data.profile;

    listRoomMyWord(myWorlds);
	listContact(contact);

    listRoomYourworld(yourworlds);

    listProfile(myprofile);
	$('html, #listContact, #roomYourWorld, #roomMyWorld').niceScroll();

});





