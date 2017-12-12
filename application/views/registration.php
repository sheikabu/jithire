<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $registration_data; ?></title>
	 
</head>
<body>
<div class="row">
	<div class="container">
		<div class="col-md-6">
		<div id="message"></div>
			<?php echo form_open('user/regis',array('id' => 'user_details' ));?>
			
			<div class="form-group">
				<label>First_name</label>
				<input type="text" name="first_name" class="form-control" placeholder="first_name"/>
			</div>
			<div class="form-group">
				<label>Last_name</label>
				<input type="text" name="last_name" class="form-control" placeholder="last_name"/>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" placeholder="email"/>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" class="form-control" placeholder="password"/>
			</div>
			<div class="form-group">
				<label>Confirm_password</label>
				<input type="text" name="confirm_password" class="form-control" placeholder="confirm_password"/>
			</div>
			<div class="form-group">
				
				<input type="hidden" name="role" class="form-control" value="candidate" va placeholder="role"/>
			</div>
			<div class="form-group">
				
				<input type="hidden" name="status" class="form-control" placeholder="status" value="active"/>
			</div>
			<button type="submit" class="btn btn-primary" onclick="validation_c()">submit</button>
			<a href="<?php echo base_url('user/registration'); ?>"> </a>
				
		</div>
	</div>

</div>

</body>
</html>