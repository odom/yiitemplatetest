<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<?php if( isset($message) ) echo '<div class="alert alert-danger">'.$message.'</div>';?>
		<form class="form-signin" role="form" action="<?php echo $this->createUrl('user/reset');?>" method="POST">
			<h2 class="form-signin-heading">Reset Password</h2>
			<input type="password" class="form-control" placeholder="New Password" name="password[0]" pattern=".{6,}" required autofocus title="6 characters minimum of password length.">
			<br>
			<input type="password" class="form-control" placeholder="ConfirmPassword" name="password[1]" pattern=".{6,}" required title="6 characters minimum of password length.">
			<br>
			<input type="hidden" value="<?php echo $env; ?>" name="env" >
			<input type="hidden" value="<?php echo $ID; ?>" name="user[ID]" >
			<input type="hidden" value="<?php echo $sessionExpired; ?>" name="user[SessionExpired]">
			<div>
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</form>
	</div>
</div>