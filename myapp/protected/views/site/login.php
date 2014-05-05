<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<div clas="row">
	<div class="login  col-sm-offset-3 col-sm-6">
        <form role="form">
            <h3> Sign in</h3>
            <div class="text-center">
               <div class="input-group input-md">
                  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                  <input class="form-control input-lg" type="text" placeholder="User Name">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                  <input class="form-control input-lg" type="password" placeholder="Password">
                </div>
                <br>
                <p><button type="submit" class="btn btn-primary btn-lg"> &nbsp;&nbsp;&nbsp; ENTER &nbsp;&nbsp;&nbsp; </button></p>
                <div class="social-sign-in">
                    <p><a class="btn btn-primary" href="#"><i class="fa fa-facebook"></i> &nbsp;Sign in with Facebook</a></p>
                    <p><a class="btn btn-info" href="#"><i class="fa fa-twitter"></i>&nbsp;Sign in with Twitter</a></p>
                    <p><a class="btn btn-danger" href="#"><i class="fa fa-google-plus"></i>&nbsp;Sign in with Google</a></p>
                </div>
            </div>
        </form>
    </div>
</div>

<!--<div class="form">-->
<?php
/**
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));
 */
?>
<!--
<div class ="well col-sm-6 col-sm-offset-3">
    <div class="input-group col-sm-8 col-sm-offset-4">
        <h2>Sign in</h2>
    </div>

    <div class="login_field">
        <div class="input-group col-sm-8 col-sm-offset-4">
            <?php //echo $form->labelEx($model,'username'); ?>
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <?php 
            // echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>
        </div>
        <div class="input-group col-sm-8 col-sm-offset-4">
             <?php
            //  echo $form->error($model, 'username'); ?>
        </div>
    </div>

    <div class="login_field">
        <div class="input-group col-sm-8 col-sm-offset-4">
            <?php //echo $form->labelEx($model,'password'); ?>
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
            <?php 
            // echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>	
        </div>
        <div class="input-group col-sm-8 col-sm-offset-4">
            <?php 
            // echo $form->error($model, 'password'); ?>
        </div>
    </div>

    <div class="login_field">
        <div class="input-group col-sm-8 col-sm-offset-4">
            <?php
            // echo $form->checkBox($model, 'rememberMe', array('class' => 'remember')); ?>
            <?php 
            // echo $form->label($model, 'rememberMe', array('class' => 'remember')); ?>
            <?php
            // echo $form->error($model, 'rememberMe'); ?>
        </div>

        <div class="input-group col-sm-3 col-sm-offset-6">
            <?php 
            // echo CHtml::submitButton('ENTER', array('class' => 'btn btn btn-primary btn-block')); ?>
        </div>
        <div>

            <?php 
            // $this->endWidget(); ?>
            <!--</div> -->
            <!--form -->
<!--        </div>
    </div>
    <div class="input-group col-sm-4 col-sm-offset-3" id="social_signin">
        <a type="button" class="btn btn-primary" id="" href=""><i class=" glyphicon glyphicon-thumbs-up"></i>&nbsp; Sign in with Facebook</a>
    </div>
    <div class="input-group col-sm-4 col-sm-offset-3" id="social_signin">
        <a type="button" class="btn btn-info" id="social_signinTwitter" href=""><i class=" glyphicon glyphicon-thumbs-up"></i>&nbsp; Sign in with Twitter</a>
    </div>
    <div class="input-group col-sm-4 col-sm-offset-3" id="social_signin">
        <a type="button" class="btn btn-danger" id="social_signinGoogle" href=""><i class=" glyphicon glyphicon-thumbs-up"></i>&nbsp; Sign in with Google</a>
    </div>
</div>
-->
