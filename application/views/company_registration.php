<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $registration_company; ?></title>
	 
</head>
<body>
<div class="row">
	<div class="container">
		<div class="col-md-6">
		<div id="message"></div>
			<?php echo form_open('user/company_details',array('id' => 'nizam' ));?>
			
			
			<div class="form-group">
				<label>Company Name</label>
				<input type="text" name="company_name" class="form-control" placeholder="company_name"/>
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="address" class="form-control" placeholder="address"/>
			</div>
			<div class="form-group">
				<label>Url</label>
				<input type="text" name="url" class="form-control" placeholder="url"/>
			</div>
			
			<div class="form-group">
				<label>city</label>
				<input type="text" name="city" class="form-control" placeholder="city"/>
			</div>
			<div class="form-group">
				<label>State</label>
				<input type="text" name="state" class="form-control" placeholder="state"/>
			</div>
			<div class="form-group">
				<label>Country</label>
				<input type="text" name="country" class="form-control" placeholder="country"/>
			</div>
			<div class="form-group">
				<label>Role</label>
				<input type="hidden" name="role" class="form-control" value="company" placeholder="role"/>
			</div>
			<div class="form-group">
				<input type="hidden" name="status" class="form-control" placeholder="status" value="active"/>
			</div>
			<button type="submit" class="btn btn-primary" onclick="validation_c()">submit</button>
			<a href="<?php echo base_url('welcome/registration'); ?>"> </a>
				
		</div>
	</div>

</div>

</body>
</html>