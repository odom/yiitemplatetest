
<div class="loginform">
	<form role="form"  method="">
		<div class="col-sm-10 col-sm-offset-1">
			<h3> Sign in</h3>
			<div class="text-center">
				<div class="input-group input-md">
					<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
					<input id="username" class="form-control input-lg" type="text" name="username" placeholder="User Name">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
					<input id="password" class="form-control input-lg" type="password" name="password" placeholder="Password">
				</div>
				<br>
				<!--<a href="#" style="color: #FFFFFF" id="forgotpassword">Forget password</a>-->
				<a  class="ajax" href="<?php echo $this->createUrl('site/Forgotpassword') ?>"><span
						style="color:#ffffff">Forgot
						Password</span></a>
				<br/>
				<br/>
				<button id="login" class="btn btn-lg btn-primary">&nbsp;&nbsp;&nbsp; ENTER &nbsp;&nbsp;&nbsp;</button>
				<!--
				<div class="social-sign-in">
					<p><a class="btn btn-primary" href="#"><i class="fa fa-facebook"></i> &nbsp;Sign in with
							Facebook</a></p>
					<p><a class="btn btn-info" href="#"><i class="fa fa-twitter"></i>&nbsp;Sign in with Twitter</a></p>
					<p><a class="btn btn-danger" href="#"><i class="fa fa-google-plus"></i>&nbsp;Sign in with Google</a>
					</p>
				</div>
				-->
			</div>
		</div>
	</form>
</div>

