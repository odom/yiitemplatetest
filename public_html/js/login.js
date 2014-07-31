/**
 * Created by cnpisit on 7/31/14.
 */

/*
* Utility function
* */

socket = io.connect('http://54.221.195.231:3000');
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

var login = function(username, password){
	var input = {
		UserName: username,
		Password: password
	}
	message.Body.Data = input;
	socket.emit('login', JSON.stringify(message));
	socket.on('login-result', function(result){
		var output = JSON.parse(result);
		var usageData = JSON.parse(output.Body.Data);
		if(usageData.code == "1"){
			$.cookie('AccessKey', usageData.data.AccessKey);
			$.cookie('UserID', usageData.data.UserID );
			window.location.pathname = '/site/home';
		}
	});
};

/*
Main function of login
* */
$(document).ready(function(){

	$('body').on('click', '#login',function(){
		var username = $('#username').val();
		var password = $('#password').val();
		login(username, password);
		return false;
	});
});