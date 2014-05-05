<ul class="nav nav-pills footernav">
    <li class="<?php if( Yii::app()->controller->action->id =='login') echo 'active';?>"><a href="<?php echo $this->createUrl('site/login') ?>" class="btn btn-default">Sign In</a></li>
    <li class="<?php if( Yii::app()->controller->action->id =='register') echo 'active';?>"><a href="<?php echo $this->createUrl('site/register') ?>" class="btn btn-default">Sign Up</a></li>
</ul>
