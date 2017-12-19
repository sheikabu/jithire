<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');

if(!$email){

  redirect('user');
}

 ?>

<div class="row">
	<div class="container">
		<div class="col-md-6">
		<div id="message"></div>
			<?php echo form_open('user/regis');?>
			<div class="form-group">
				<label>Pancard</label>
				<input type="text" name="pancard" class="form-control" placeholder="Pancard"/>
			</div>
			<div class="form-group">
				<label>Mobile_number</label>
				<input type="text" name="mobile_number" class="form-control" placeholder="Mobile_number"/>
			</div>
			<div class="form-group">
				<label>DOB</label>
				<input type="text" name="dob" class="form-control" placeholder="dob"/>
			</div>
			<div class="form-group">
				<label>Total_experience</label>
				<input type="text" name="total_experience" class="form-control" placeholder="Total_experience"/>
			</div>
			<div class="form-group">
				<label>Industry</label>
				<select name="industry" id="industry" class="form-control input-lg"  placeholder="Industry">
    			<option value="">Select industry</option>
				</select>
				
			</div>
			
			<div class="form-group">
				<label>Role</label>
				
				<select name="role" id="role" class="form-control input-lg" placeholder="Role">
			    <option value="">Select role</option>
			    </select>
			</div>
			<div class="form-group">
				<label>Skill</label>
				<select name="skill" id="skill" class="form-control input-lg">
			    <option value="">Select skill</option>
			    </select>
			</div>
			<div class="form-group">
				<label>Prefered_location</label>
				<input type="text" name="prefered_location" class="form-control" placeholder="Prefered_location" />
			</div>
			<div class="form-group">
				<label>Minimum_salary</label>
				<input type="text" name="minimum_salary" class="form-control" placeholder="Minimum_salary"/>
			</div>
			<div class="form-group">
				<label>Company</label>
				<input type="text" name="Company" class="form-control" placeholder="Company" />
			</div>
			<div class="form-group">
				<label>Previous_experience</label>
				<input type="text" name="previous_experience" class="form-control" placeholder="Previous_experience" />
			</div>
			<div class="form-group">
				<label>User_id</label>
				<input type="text" name="user_id" class="form-control" placeholder="user_id" value="<?php print_r($this->session->userdata('id')) ;  ?>" disabled/>
			</div>
			
			<button type="submit" class="btn btn-primary" onclick="validation_c()">submit</button>
			<a href="<?php echo base_url('user/registration'); ?>"> </a>
				
		</div>
	</div>

</div>
	<script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

 	
<script>
$(document).ready(function(){
 load_json_data('industry');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('assets/country_state_city.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   $.each(data, function(key, value){
    if(id == 'industry')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#industry', function(){
  var industry_id = $(this).val();
  if(industry_id != '')
  {
   load_json_data('role', industry_id);
  }
  else
  {
   $('#role').html('<option value="">Select role</option>');
   $('#skill').html('<option value="">Select skill</option>');
  }
 });
 $(document).on('change', '#role', function(){
  var role_id = $(this).val();
  if(role_id != '')
  {
   load_json_data('skill', role_id);
  }
  else
  {
   $('#skill').html('<option value="">Select skill</option>');
  }
 });
});
</script>