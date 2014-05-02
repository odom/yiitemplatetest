<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>
<!--<div class="form">-->
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));
?>
<div class ="well col-sm-6 col-sm-offset-3">
    <div class="input-group col-sm-8 col-sm-offset-4">
        <h2>Sign in</h2>
    </div>

    <div class="login_field">
        <div class="input-group col-sm-8 col-sm-offset-4">
            <?php //echo $form->labelEx($model,'username'); ?>
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>
        </div>
        <div class="input-group col-sm-8 col-sm-offset-4">
            <?php echo $form->error($model, 'username'); ?>
        </div>
    </div>

    <div class="login_field">
        <div class="input-group col-sm-8 col-sm-offset-4">
            <?php //echo $form->labelEx($model,'password'); ?>
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>	
        </div>
        <div class="input-group col-sm-8 col-sm-offset-4">
            <?php echo $form->error($model, 'password'); ?>
        </div>
    </div>

    <div class="login_field">
        <div class="input-group col-sm-8 col-sm-offset-4">
            <?php echo $form->checkBox($model, 'rememberMe', array('class' => 'remember')); ?>
            <?php echo $form->label($model, 'rememberMe', array('class' => 'remember')); ?>
            <?php echo $form->error($model, 'rememberMe'); ?>
        </div>

        <div class="input-group col-sm-4 col-sm-offset-6">
            <?php echo CHtml::submitButton('ENTER', array('class' => 'btn btn btn-primary btn-block')); ?>
        </div>
        <div>

            <?php $this->endWidget(); ?>
            <!--</div> -->
            <!--form -->
        </div>
