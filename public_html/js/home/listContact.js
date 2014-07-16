
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

var listRoomYourworld = function (roomYourWorld) {
    var strYourWorld = "";
    var thumbnail = '../images/Santa_Place.jpg';
    for(i=0; i< roomYourWorld.length; i++) {
        var thum = roomYourWorld[i].ThumnailUrl == '' ? thumbnail:roomYourWorld[i].ThumnailUrl;
        strYourWorld += '<li> <a href="#">' +
            '<div class="div-avatar">' +
            '<img src="'+thum+'">' +
            '<span class="status offline"><i class="fa fa-circle"></i></span>' +
            '<span class="list-view">' + roomYourWorld[i].RoomName + '</span><i class="fa fa-dropbox dropbox"></i></div></a></li>';
    }
    $('#roomYourWorld').html(strYourWorld);
}


/**
 * Created by cnpisit on 7/16/14.
 */
$('document').ready(function(){

    var data = $.parseJSON($('#userData').val());
    myWorlds = data.myWorlds;

    yourworlds=data.yourWorlds;

    listRoomMyWord(myWorlds);

    listRoomYourworld(yourworlds);

});


