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
			<?php echo form_open('user/user_insert');?>
			 <div class="form-group">
                <!-- First Name --><label>First Name</label>
                <input name="first_name" class="form-control" placeholder="First Name*" type="text">
            </div>
           <div class="form-group">
                <!-- Last Name --><label>Middle Name</label>
                <input name="middle_name" class="form-control" placeholder="Middle Name" type="text">
            </div>
            <div class="form-group">
                <!-- Last Name --><label>Last Name</label>
                <input name="last_name" class="form-control" placeholder="Last Name*" type="text">
            </div>
            <div class="form-group">
                <!-- Email --><label>Email</label>
                <input name="email" class="form-control" placeholder="Email*" type="email">
            </div>
			<div class="form-group">
				<label>Pancard</label>
				<input type="text" name="pancard" class="form-control" placeholder="Pancard"/>
			</div>
			<div class="form-group">
				<label>Mobile_number</label>
				<input type="text" name="mobile_number" class="form-control" placeholder="Mobile_number*"/>
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
				<select name="industry[]" id="industry" class="form-control input-lg"  placeholder="Industry*" multiple>
    			<option value="">Select industry</option>
    			<option value="1">IT</option>
    			<option value="2">ECE</option>
				</select>
				
			</div>
			
			<div class="form-group">
				<label>Role</label>
				
				<select name="role[]" id="role" class="form-control input-lg" placeholder="Role*" multiple>
			    <option value="">Select role</option>
			    <option value="1">software</option>
			    <option value="2">hardware</option>
			    </select>
			</div>
			<div class="form-group">
				<label>Skill</label>
				<select name="skill[]" id="skill" class="form-control input-lg" placeholder="skill*" multiple>
			    <option value="">Select skill</option>
			    <option value="1">php</option>
			    <option value="2">java</option>
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
				<div class="form-group" id='duplicater'>
				
				<input type="text" name="company[]" class="form-control" placeholder="Company" />
				<input type="button" name="addmore" value="Add More" class='button small white' onclick='duplicate();'/>
                 </div>    
			</div>
			<div class="form-group">
				<label>Previous_experience</label>
				<input type="text" name="previous_experience" class="form-control" placeholder="Previous_experience" />
			</div>
			<div class="form-group">
				<label>User_id</label>
				<input type="text" name="user_id" class="form-control" value='<?php echo($this->session->userdata("id")) ;  ?>' />
			</div>
			
			<button type="submit" class="btn btn-primary" >submit</button>
		
		</div>
	</div>

</div>
 <script src="assets/jquery/jquery.min.js"></script>
<script>
 var i = 0;
 var original = document.getElementById('duplicater');

  function duplicate(){ 
    var clone = original.cloneNode(true); // "deep" clone
    i = ++i;
    clone.id = "duplicetor"+ i; // there can only be one element with  an ID
    original.parentNode.appendChild(clone);
    clearCloneForm(clone.id);
  }

  function clearCloneForm(id){ 
    var divId = '#'+id;
    $(divId).find("input[type^='text'], input[type^='date']").each(function() {
        $(this).val('');
    }); 
  }
</script>
	

 	
