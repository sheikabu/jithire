<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
<br><br><br><br>

<div class="row">
	<div class="container">
	Browse Jobs
	<hr>
		<div class="col-md-6">
		<div id="message"></div>
			<?php //echo form_open('post_job/insert_job_post');?>
			<?php foreach($job_list as $key=>$values) { ?>
				Role:<?php echo $values['role'];?><br>
				Location:
				Job Description: <?php echo $values['job_description'];?><br>
				No of Positions: <?php echo $values['no_positions'];?><br>
				Max Salary:<?php echo $values['salary_lakhs'];?> Lakhs <?php echo $values['salary_thousands'];?> Thousands<br>
				Skills: <?php $skills = json_decode($values['skills'], true); 
						foreach($skills as $skill) {
							echo $skill;
						} 
						?>
		    <hr>
			<?php } ?> 
			
			<div class="form-group">
				<label>company_id</label>
				<input type="text" name="company_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
			</div>
			
			<!--<button type="submit" class="btn btn-primary" >submit</button>-->
		
		</div>
	</div>

</div>




       
 
     

