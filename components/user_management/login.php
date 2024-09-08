<?php include_once 'includes/header.php'; ?>

<div id="page-" class="col-md-4 col-md-offset-4">
	<form class="form loginform" method="POST" action="components/user_management/authenticate.php">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">Please Sign in</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="control-label">username</label>
					<input type="text" name="username" value="admin" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label class="control-label">password</label>
					<input type="password" name="passwd" value="admin" class="form-control" required="required">
				</div>
				<!-- <div class="checkbox">
					<label>
						<input name="remember" type="checkbox" value="1">Remember Me
					</label>
				</div> -->
				<?php if (isset($_SESSION['login_failure'])): ?>
				<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					echo $_SESSION['login_failure'];
					unset($_SESSION['login_failure']);
					?>
				</div>
				<?php endif; ?>
				<button type="submit" class="btn btn-success loginField">Login</button>
			</div>
		</div>
	</form>
</div>

<?php include_once 'includes/footer.php'; ?>
