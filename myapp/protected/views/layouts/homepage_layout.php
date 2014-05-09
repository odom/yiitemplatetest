<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css" />  
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/homepage.css" />
        <link rel="stylesheet" type="text/css" href="" id="changetheme" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body class="homepage">    
        <div class="whole-content">
            <!--Start Panel Left-->
            <div class="panel-left">
                <div class="menu-left">
                    <div class="menu-header banner-big">
                        <span class="menu-header-left"></span>
                        <i class="triangle-topleft"></i>
                        <div class="menu-item">
                            <span class="profile-image"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/../images/avatar.png" /></a></span>
                            <ul>
                                <li><i class="fa fa-circle icon-online"></i></li>
                                <li><i class="fa fa-info-circle icon-info"></i></li>
                            </ul>
                            <span class="profile-name">Sopheak</span>
                        </div>
                    </div>

                    <div class="title-bar-right banner-md">
                        <span class="menu-header-left"></span>
                        <i class="triangle-topleft"></i>
                        <span class="span-left">
                            <i class="fa fa-sort-desc"></i> <span>My World</span>
                        </span>
                        <span class="span-right">
                            <a href="#"><i class="fa fa-plus"></i></a>
                            <a href="#"><img src="../images/magnifier.png" class="search-image"/></a>
                        </span>
                    </div> 
                    <div class="list-view-group">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="div-avatar">     
                                        <img src="../images/Santa_Place.jpg"/>                                  
                                        <span class="list-view">Sopheak Room</span>
                                        <i class="fa fa-dropbox dropbox"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="div-avatar">     
                                        <img src="../images/Santa_Place.jpg"/>                                
                                        <span class="list-view">Dara Room</span>
                                        <i class="fa fa-dropbox dropbox"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="div-avatar">     
                                        <img src="../images/Santa_Place.jpg"/>                                   
                                        <span class="list-view">Business Room</span>
                                        <i class="fa fa-dropbox dropbox"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="title-bar-right banner-md">
                        <span class="menu-header-left"></span>
                        <i class="triangle-topleft"></i>
                        <span class="span-left">
                            <i class="fa fa-sort-desc"></i> <span>Your World</span>
                        </span>
                        <span class="span-right">
                            <a href="#"><img src="../images/magnifier.png" class="search-image"/></a>
                        </span>
                    </div> 
                    <div class="list-view-group">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="div-avatar">     
                                        <img src="../images/Santa_Place.jpg"/>                                  
                                        <span class="list-view">Jeen Room</span>
                                        <i class="fa fa-dropbox dropbox"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="div-avatar">     
                                        <img src="../images/Santa_Place.jpg"/>                                
                                        <span class="list-view">Odom Room</span>
                                        <i class="fa fa-dropbox dropbox"></i>
                                    </div>
                                </a>
                            </li>                           
                        </ul>
                    </div>
                    <span class="direction-left"><a href="#" id="directionleft"><i class="fa fa-angle-double-left"></i></a></span>
                </div>
                <div class="nav-left">
                    <div class="nav-list nav-list-bordertop">
                        <ul>
                            <li>
                                <a href="#" id="create_room">
                                    <img src="../images/newRoom.png" img-over="../images/newRoom_hover.png" img-mouseout="../images/newRoom.png" img-click="../images/newRoom_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#" id="popup-select-room" data-placement="right">
                                    <img src="../images/changeRoom.png" img-over="../images/changeRoom_hover.png" img-mouseout="../images/changeRoom.png" img-click="../images/changeRoom_click.png"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-list nav-list-bordermiddle">
                        <ul>
                            <li>
                                <a href="#" class="img-list">
                                    <img src="../images/multimedia.png" img-over="../images/multimedia_hover.png" img-mouseout="../images/multimedia.png" img-click="../images/multimedia_click.png"/>
                                </a>
                            </li> 
                            <li>
                                <a href="#">
                                    <img src="../images/copy.png" img-over="../images/copy_hover.png" img-mouseout="../images/copy.png" img-click="../images/copy_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../images/cut.png" img-over="../images/cut_hover.png" img-mouseout="../images/cut.png" img-click="../images/cut_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../images/paste.png" img-over="../images/paste_hover.png" img-mouseout="../images/paste.png" img-click="../images/paste_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#" id="popup-change-them" data-placement="right">
                                    <img src="../images/palette.png" img-over="../images/palette_hover.png" img-mouseout="../images/palette.png" img-click="../images/palette_click.png"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-list">
                        <ul>
                            <li>
                                <a href="#" class="img-list">
                                    <img src="../images/trash.png" img-over="../images/trash_hover.png" img-mouseout="../images/trash.png" img-click="../images/trash_click.png"/>
                                </a>
                            </li>                             
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Panel Left-->

            <!--Start Main Content-->
            <div class="main-content">
                <?php //echo $content; ?>

                <!--Start Social Share (fb, twitter,...)-->
                <div class="social-share">
                    <a href="http://www.facebook.com/CoSync" class="" target="_blank"><img src="../images/facebook.png" /></a>
                    <a href="http://twitter.com/" class="" target="_blank"><img src="../images/twitter.png" /></a>
                    <a href="http://www.linkedin.com/" class="" target="_blank"><img src="../images/linkedin.png" /></a>
                    <a href="http://plus.google.com/" class="" target="_blank"><img src="../images/google.png" /></a>
                </div>
                <!--End Social Share (fb, twitter,...)-->                

                <!--Dialog create new room-->
                <div id="dialog-modal">                   
                    <form class="form-horizontal" role="form">
                        <div class="form-group col-sm-12 col-sm-offset-3">
                            <label for="inputEmail3" class="col-sm-4 control-label">Room name</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Enter room name">
                                    <i class="glyphicon glyphicon-remove"></i>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-sm-offset-3 storage">
                            <label for="inputPassword3" class="col-sm-4 control-label">Storage</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>Local storage</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>                         
                        </div>                       
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-default" id="cancel">Cancel</button>                              
                                <button type="submit" class="btn btn-default-create">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--End Dialog create new room-->

                <div class="chang_background_box hidden">
                    <div class="list-chang-background">
                        <ul>
                            <li>
                                <a href="#" class="default">
                                    <img src="../images/displayCanvas.png" data-css="../images/default.jpg"/>
                                    <span class="popup-list">Default</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="wood">
                                    <img src="../images/displayCanvas.png" data-css="../images/wood.jpg"/>
                                    <span class="popup-list">Wood</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="leather">
                                    <img src="../images/displayCanvas.png" data-css="../images/leather.jpg"/>
                                    <span class="popup-list">Leather</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="select-room-box hidden">
                    <div class="select-room-list">
                        <ul>
                            <li><input type="radio" name="room" value="keysaw"/> <span class="popup-list">Keysaw Room</span><img src="../images/displayCanvas.png"/></li>
                            <li><input type="radio" name="room" value="test"/> <span class="popup-list">Test Room</span><img src="../images/displayCanvas.png"/></li>
                            <li><input type="radio" name="room" value="busines"/> <span class="popup-list">Business Room</span><img src="../images/displayCanvas.png"/></li>
                            <li><input type="radio" name="room" value="floophie"/> <span class="popup-list">Floophie Room</span><img src="../images/displayCanvas.png"/></li>
                        </ul>
                    </div>  
                </div>

                <div class="chang-them-box hidden">
                    <div class="chang-them-list">
                        <ul>
                            <li><a href="#" data-css="/css/theme/theme_default.css" class="color-black"></a></li>
                            <li><a href="#" data-css="/css/theme/theme_blue.css" class="color-blue"></a></li>
                            <li><a href="#" data-css="/css/theme/theme_green.css" class="color-green"></a></li>
                            <li><a href="#" data-css="/css/theme/theme_orange.css" class="color-orange"></a></li>
                            <li><a href="#" data-css="/css/theme/theme_red.css" class="color-red"></a></li>
                            <li><a href="#" data-css="/css/theme/theme_puple.css" class="color-pink"></a></li>
                            <li><a href="#" data-css="/css/theme/theme_white.css" class="color-white"></a></li>
                        </ul>
                    </div>                   
                </div>

            </div>
            <!--End Main Content-->

            <!--Start Panel Right-->
            <div class="panel-right">
                <div class="nav-right">
                    <div class="nav-list nav-list-top">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="../images/share.png" img-over="../images/share_hover.png" img-mouseout="../images/share.png" img-click="../images/share_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#" id="popup-changbackground" data-placement="left">
                                    <img src="../images/changeBackground.png" img-over="../images/changeBackground_hover.png" img-mouseout="../images/changeBackground.png" img-click="../images/changeBackground_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../images/displayCanvas.png" img-over="../images/displayCanvas_hover.png" img-mouseout="../images/displayCanvas.png" img-click="../images/displayCanvas_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../images/displayThumbnails.png" img-over="../images/displayThumbnails_hover.png" img-mouseout="../images/displayThumbnails.png" img-click="../images/displayThumbnails_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../images/displayList.png" img-over="../images/displayList_hover.png" img-mouseout="../images/displayList.png" img-click="../images/displayList_click.png"/>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <div class="nav-list">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="../images/cosync.png" img-over="../images/cosync_hover.png" img-mouseout="../images/cosync.png" img-click="../images/cosync_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../images/dashboard.png" img-over="../images/dashboard_hover.png" img-mouseout="../images/dashboard.png" img-click="../images/dashboard_click.png"/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../images/whiteboard.png" img-over="../images/whiteboard_hover.png" img-mouseout="../images/whiteboard.png" img-click="../images/whiteboard_click.png"/>
                                </a>
                            </li>                            
                        </ul>
                    </div>
                </div>
                <div class="menu-right">
                    <div class="title-bar-right banner-md">
                        <span class="triangle-top-right"></span>
                        <i class="triangle-top-right-conner"></i>
                        <span class="span-left">
                            <i class="fa fa-sort-desc"></i> <span>Contact</span>
                        </span>
                        <span class="span-right">
                            <a href="#"><i class="fa fa-plus-circle"></i></a>
                            <a href="#"><i class="fa fa-minus-circle"></i></a>
                        </span>
                    </div>

                    <div class="list-view-group">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="div-avatar">
                                        <img src="../images/avatar.png"/>
                                        <span class="list-view">Floophie</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="div-avatar">
                                        <img src="../images/avatar.png"/>
                                        <span class="list-view">Floophie</span>
                                    </div>
                                </a> 
                            </li>
                        </ul>
                    </div>

                    <div class="title-bar-right banner-md">
                        <span class="triangle-top-right"></span>
                        <i class="triangle-top-right-conner"></i>
                        <span class="span-left">
                            <i class="fa fa-sort-desc"></i> <span>Guests in Room</span>
                        </span>
                        <span class="span-right">
                            <a href="#"><i class="fa fa-minus-circle"></i></a>
                        </span>
                    </div>
                    <div class="list-view-group">
                        <ul>
                            <li>
                                <div class="div-avatar"> 
                                    <img src="../images/avatar.png"/>
                                    <i class="fa fa-circle fa-online"></i>
                                    <span>Floophie</span>
                                    <div class="group-sm-link">
                                        <a href="#"><i class="fa fa-phone"></i></a>
                                        <a href="#"><i class="fa fa-comment"></i></a>
                                        <a href="#"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#"><i class="fa fa-info-circle"></i></a>
                                        <a href="#"><i class="fa fa-eye"></i></a>                                
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <span class="direction-right"><a href="#" id="directionright"><i class="fa fa-angle-double-right"></i></a></span>
                </div>
            </div>
            <!--End Panel Right-->
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
        </script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cookie.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/popup.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
    </body>

</html>