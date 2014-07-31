var socket = null;

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
	var detailProfile = '<div class="hidden" id="detailProfile">'
	detailProfile += '<b>Display Name='+ myprofile.PersonalProfile.DisplayName +'</b><br/>';
	detailProfile += '<b>First Name='+myprofile.PersonalProfile.FirstName+'</b><br/>';
	detailProfile += '<b>Last Name='+myprofile.PersonalProfile.LastName+'</b>';
	detailProfile += '</div>';
	var strProfile='<span class="profile-image">'+
		'<a href="#"><img src="'+thum+'" /></a></span>'+
		'<ul><li><i class="fa fa-circle icon-online"></i></li>'+
		'<li><i class="fa fa-info-circle icon-info" id="profileInfo"></i></li></ul>'+
		'<span class="profile-name">'+myprofile.PersonalProfile.DisplayName+'</span>';

	$('#menu-item').html(strProfile + detailProfile);
	$('#profileInfo').popover({html: true,content: $('#detailProfile').html()});
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


var getMyworldByOne = function (id){
	data=$.parseJSON($('#userData').val());
	l=data.myWorlds.length;
	var arr;
	for(var i=0;i <l ;i++){

		if(data.myWorlds[i].RoomID==id){
			arr=data.myWorlds[i];
			break;
		}
	}
	console.log(arr);
}

var getYourWorldByOne = function (id){
	data=$.parseJSON($('#userData').val());
	l=data.yourWorlds.length;
	var arr;
	for(var i=0;i <l ;i++){

		if(data.yourWorlds[i].RoomID==id){
			arr=data.yourWorlds[i];
			break;
		}
	}
	console.log(arr);
}

var getContactByOne = function (id){
	data=$.parseJSON($('#userData').val());
	l=data.contacts.length;
	var arr;
	for(var i=0;i <l ;i++){

		if(data.contacts[i].FriendID==id){
			arr=data.contacts[i];
			break;
		}
	}
	console.log(arr);
}


/**
 * MAIN
 */
var message = {
	Header:{
		From : 'world',
		To : '',
		DateTime :'',
		PartnerID : '',
		HubID : '',
		Type : '',
		DeviceType: '',
		DeviceOS : '',
		FromIP : '',
		Region : ''
	},
	Body:{
		ID : '',
		ObjectType : 10000,
		Action :10
	}

};

var getHubInfo = function() {
	var input ={
		FriendName: "titi",
		Offset : 0,
		Limit : 20,
		AccessKey : $.cookie('key')

	};
	message.Body.Data = input
	console.log(JSON.stringify(message));

	console.log("SPeeder1");
	console.log(socket);
	socket.emit('searchContact', JSON.stringify(message));
	console.log("SPeeder2");

	socket.on('searchContact-result', function(data) {
		console.log("SPeeder");
		console.log(data);
	});
};

$(document).ready(function(){
	socket = io.connect('http://192.168.1.88:3000');



	var data = $.parseJSON($('#userData').val());
    myWorlds = data.myWorlds;
	contact = data.contacts;
    yourworlds=data.yourWorlds;
    myprofile=data.profile;

	var input ={
		FriendName: "titi",
		Offset : 0,
		Limit : 20,
		AccessKey : $.cookie('key')

	};
	message.Body.Data = input
	console.log(JSON.stringify(message));

	console.log("SPeeder1");
	console.log(socket);
	socket.emit('searchContact', JSON.stringify(message));
	console.log("SPeeder2");

	socket.on('searchContact-result', function(data) {
		console.log("SPeeder");
		console.log(data);
	});

    listRoomMyWord(myWorlds);
	listContact(contact);

    listRoomYourworld(yourworlds);

    listProfile(myprofile);
	$('html, #listContact, #roomYourWorld, #roomMyWorld').niceScroll();


	$("#roomMyWorld li a").click(function(){
		getMyworldByOne($(this).attr('id'));
	});

	$("#roomYourWorld li a").click(function(){
		getYourWorldByOne($(this).attr('id'));
	});

	$("#listContact li a").click(function(){
		getContactByOne($(this).attr('id'));
	});

});





