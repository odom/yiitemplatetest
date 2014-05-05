<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/homepage.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="homepage">
    
<div class="whole-content">
  <div class="panel-left">
      <div class="menu-left">
          
      </div>
      <div class="nav-left"></div>
  </div>
 <div class="main-content">
     <?php //echo $content; ?>
 </div>
 <div class="panel-right">
            <div class="nav-right"></div>
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
                
                <div class="contact-list">
                    <ul>
                          <li><a href="#Floophie">Floophie</a></li>
                          <li><a href="#Bill">Bill</a></li>
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
               <div class="contact-list">
                    <ul>
                          <li><a href="#Floophie">Floophie</a></li>
                    </ul>
                </div>
            </div>
            
           
 </div>


     
</div>
            

</body>
</html>
