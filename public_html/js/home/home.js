/**
 * Created by cnpisit on 7/31/14.
 */

/*
* utility data
* */

socket = io.connect('http://54.221.195.231:3000');
userData = {};
message = {
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
/*
* View function
* */
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

 function testExtension(strFile) {
	var ft = ["png", "jpg"];
	for(var j=0; j<ft.length; j++){
		if(ft[j] == strFile.substring(strFile.lastIndexOf('.')+1)){
			return true;
		}
	}
	return false;
}
var listProfile=function(myprofile){
	var thumbnail='../images/avatar.png';
	var thum = myprofile.ImageUrl==''?thumbnail:myprofile.ImageUrl;
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

		if(roomMyWorld[i].ThumnailUrl!='' && testExtension(roomMyWorld[i].ThumnailUrl)){
			thum=roomMyWorld[i].ThumnailUrl;
		} else{
			thum=thumbnail;
		}
		strMyWorld += '<li> <a href="#" id="'+ roomMyWorld[i].RoomID +'">' +
			'<div class="div-avatar">' +
			'<img src="'+thum+'">' +
			'<span class="status offline"><i class="fa fa-circle"></i></span>' +
			'<span class="list-view">' + roomMyWorld[i].RoomName + '</span><i class="fa fa-dropbox dropbox"></i></div></a></li>';
	}
	$('#roomMyWorld').html(strMyWorld);
}

 var listRoomYourworld = function (roomYourWorld) {
	var strYourWorld = "";
	var thumbnail = '../images/Santa_Place.jpg';
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
var listProfile=function(myprofile){
//	console.log(myprofile);
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

// End View function

/*
* Request function
 *  */

var requestRoomYourWorld = function(id, key){
	var input = {
		UserID : id,
		AccessKey : key
	};
	message.Body.Data = input;
	socket.emit('getRoomYourWorld', JSON.stringify(message));
	socket.on('getRoomYourWorld-result', function(result){
		var output = JSON.parse(result);
		var usageData = JSON.parse(output.Body.Data);
		if(usageData.code == "1"){
			userData.yourWorlds = usageData.data;
			listRoomYourworld(usageData.data);
		}
	});
}
var requestRoomMyWorld = function(id, key){
	var input = {
		UserID : id,
		AccessKey : key
	};
	message.Body.Data = input;
	socket.emit('getRoomMyWorld', JSON.stringify(message));
	socket.on('getRoomMyWorld-result', function(result){
		var output = JSON.parse(result);
		var usageData = JSON.parse(output.Body.Data);
		if(usageData.code == "1"){
			userData.myWorlds = usageData.data;
			listRoomMyWord(usageData.data);
		}
	});
}

var requestProfileInfo = function(id, key){
	var input = {
		UserID : id,
		AccessKey : key
	};
	message.Body.Data = input;
	socket.emit('getProfile', JSON.stringify(message));
	socket.on('getProfile-result', function(result){
		var output = JSON.parse(result);
		var usageData = JSON.parse(output.Body.Data);
		if(usageData.code == "1"){
			userData.profile = usageData.data;
			listProfile(usageData.data);
		}
	});
}

var requestGetContact = function(id, key){
	var input = {
		UserID : id,
		AccessKey : key
	};
	message.Body.Data = input;
	socket.emit('getContact', JSON.stringify(message));
	socket.on('getContact-result', function(result){
		var output = JSON.parse(result);
		var usageData = JSON.parse(output.Body.Data);
		if(usageData.code == "1"){
			userData.contacts = usageData.data;
			listContact(usageData.data);
		}
	});
}

var login = function(key){
	var input = {
		AccessKey: key
	};
	message.Body.Data = input;
	socket.emit('login', JSON.stringify(message));
	socket.on('login-result', function(result){
		var output = JSON.parse(result);
		var usageData = JSON.parse(output.Body.Data);
		if(usageData.code == "1"){
			$.cookie('AccessKey', $.cookie('AccessKey'), {path:'/'});
			$.cookie('UserID', usageData.data.UserID, {path:'/'});
			requestRoomYourWorld(usageData.data.UserID ,$.cookie('AccessKey'));
			requestRoomMyWorld(usageData.data.UserID ,$.cookie('AccessKey'));
			requestProfileInfo(usageData.data.UserID ,$.cookie('AccessKey'));
			requestGetContact(usageData.data.UserID ,$.cookie('AccessKey'));
		}
	});
};

// End request function



/*
* Main javascript in home
* */
$(document).ready(function(){
	$('html, #listContact, #roomYourWorld, #roomMyWorld').niceScroll();
	login($.cookie('AccessKey'));
	$('textarea').text(JSON.stringify(userData));
});
