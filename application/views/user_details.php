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
	My Profile
	<hr>
		<div class="col-md-6">
		<div id="message"></div>
			<?php echo form_open('user/insert_user_profile');?>

			 <div class="form-group">
                <!-- First Name --><label>Name</label>
                <input name="first_name" class="form-control" placeholder="First Name*" type="text" value="<?php echo $get_candidate_info['first_name']; ?>" required>
            </div>
          <div class="form-group">
                <!-- First Name --><label>Resume Headline:</label><br>

                <textarea rows="4" cols="50" name="resume_headline" required><?php echo $get_candidate_info['resume_headline']; ?></textarea>
            </div> 

            <div class="form-group">
                <!-- Email --><label>Email</label>
                <input name="email" class="form-control" placeholder="Email*" type="email" value="<?php echo $get_candidate_info['email']; ?>" required>
            </div>
			<div class="form-group">
				<label>Pancard</label>
				<input type="text" name="pancard" class="form-control" placeholder="Pancard" value="<?php echo $get_candidate_info['pancard']; ?>" required/>
			</div>
			<div class="form-group">
				<label>Mobile_number</label>
				<input type="text" name="mobile_number" class="form-control" placeholder="Mobile_number*" value="<?php echo $get_candidate_info['mobile_number']; ?>" required/>
			</div>
			<div class="form-group">
				<label>DOB</label>
				<input type="date" name="bday" class="form-control"  value="<?php echo $get_candidate_info['dob']; ?>" required> 
			</div>
			
			Industry Selection:
			<hr>
			<div class="form-group">
				<label>Industry</label>
				<select name="industry"  class="form-control" required>
					<option value=''>--select--</option>
					<option value ='1' <?php if($get_candidate_info['industry'] == '1') echo"selected"; ?> >Accounting/Finance</option>
					<option value ='2' <?php if($get_candidate_info['industry'] == '2') echo"selected"; ?> >Advertising/PR/MR/Events</option>
					<option value ='3' <?php if($get_candidate_info['industry'] == '3') echo"selected"; ?> >Animation</option>
					<option value ='4' <?php if($get_candidate_info['industry'] == '4') echo"selected"; ?> >IT-Software/Software Services</option>
					<option value ='5' <?php if($get_candidate_info['industry'] == '5') echo"selected"; ?> >KPO / Research /Analytics</option>
				</select>
			</div>

			<div class="form-group">
				<label>Functional Area</label>
				<select class="form-control" name="functional_area" required>
					<option value=''>--select--</option>
					<option value ='1' <?php if($get_candidate_info['functional_area'] == '1') echo"selected"; ?>>Accounts / Finance / Tax / CS / Audit</option>
					<option value ='2' <?php if($get_candidate_info['functional_area'] == '2') echo"selected"; ?>>IT Software - Client Server</option>
					<option value ='3' <?php if($get_candidate_info['functional_area'] == '3') echo"selected"; ?>>IT Software - Mainframe</option>
					<option value ='4' <?php if($get_candidate_info['functional_area'] == '4') echo"selected"; ?>>IT Software - Middleware</option>
					<option value ='5' <?php if($get_candidate_info['functional_area'] == '5') echo"selected"; ?>>IT Software - Mobile</option>
				</select>
			</div>

			<div class="form-group">
				<label>Role</label>
				<select name="role" required class="form-control">
					<option value=''>--select--</option>
					<option value ='1' <?php if($get_candidate_info['role'] == '1') echo"selected"; ?>>Software Developer</option>
					<option value ='2' <?php if($get_candidate_info['role'] == '2') echo"selected"; ?>>Team Lead/Tech Lead</option>
					<option value ='3' <?php if($get_candidate_info['role'] == '3') echo"selected"; ?>>System Analyst</option>
					<option value ='4' <?php if($get_candidate_info['role'] == '4') echo"selected"; ?>>Tech Architect</option>
					<option value ='5' <?php if($get_candidate_info['role'] == '5') echo"selected"; ?>>Release Mgr</option>
				</select>
			</div>

			<div class="form-group">
				<label>Total Experience</label>
				<select name="total_experience" required class="form-control">
					<option value=''>--YEAR--</option>
					<option value ='1' <?php if($get_candidate_info['total_experience'] == '1') echo"selected"; ?>>Fresher</option>
					<option value ='2' <?php if($get_candidate_info['total_experience'] == '2') echo"selected"; ?>>1</option>
					<option value ='3' <?php if($get_candidate_info['total_experience'] == '3') echo"selected"; ?>>2</option>
					<option value ='4' <?php if($get_candidate_info['total_experience'] == '4') echo"selected"; ?>>3</option>
					<option value ='5' <?php if($get_candidate_info['total_experience'] == '5') echo"selected"; ?>>4</option>
				</select>
			</div>

			<div class="form-group">
				<label>Gender</label>
				<select name="gender" required class="form-control">
					<option value=''>--select--</option>
					<option value ='m' <?php if($get_candidate_info['gender'] == 'm') echo"selected"; ?>>Male</option>
					<option value ='f' <?php if($get_candidate_info['gender'] == 'f') echo"selected"; ?>>Female</option>
				</select>
			</div>

			<div class="form-group">
				<label>Salary</label>
				 <div>Lakhs
					<select name="lakhs" required class="form-control">
					<option value=''>--Lakhs--</option>
					<option value ='0' <?php if($get_candidate_info['salary_lakhs'] == '0') echo"selected"; ?>>0</option>
					<option value ='1' <?php if($get_candidate_info['salary_lakhs'] == '1') echo"selected"; ?>>1</option>
					<option value ='2' <?php if($get_candidate_info['salary_lakhs'] == '2') echo"selected"; ?>>2</option>
					<option value ='3' <?php if($get_candidate_info['salary_lakhs'] == '3') echo"selected"; ?>>3</option>
					<option value ='4' <?php if($get_candidate_info['salary_lakhs'] == '4') echo"selected"; ?>>4</option>
				</select>
				</div>
				<div>Thousands
					<select name="thousands" required class="form-control">
					<option value=''>--Thousands--</option>
					<option value ='0' <?php if($get_candidate_info['salary_thousands'] == '0') echo"selected"; ?>>0</option>
					<option value ='5' <?php if($get_candidate_info['salary_thousands'] == '5') echo"selected"; ?>>5</option>
					<option value ='10' <?php if($get_candidate_info['salary_thousands'] == '10') echo"selected"; ?>>10</option>
					<option value ='15' <?php if($get_candidate_info['salary_thousands'] == '15') echo"selected"; ?>>15</option>
					<option value ='20' <?php if($get_candidate_info['salary_thousands'] == '20') echo"selected"; ?>>20</option>
				</select>
				</div>
			</div>

			<div class="form-group">
				<label>Preferred Location</label>
				<?php $locations  = json_decode($get_candidate_info['preferred_location']); ?>
				<select name="preferred_location[]" required class="form-control" multiple>
					<option value=''>--select--</option>
					<option value ='1' <?php if (in_array('1', $locations)) { echo"selected"; } ?>>Trivandrum</option>
					<option value ='2' <?php if (in_array('2', $locations)) { echo"selected"; } ?>>Chennai</option>
					<option value ='3' <?php if (in_array('3', $locations)) { echo"selected"; } ?>>Madurai</option>
					<option value ='4' <?php if (in_array('4', $locations)) { echo"selected"; } ?>>Kochi</option>
					<option value ='5' <?php if (in_array('5', $locations)) { echo"selected"; } ?>>Bengalore</option>
				</select>
			</div>

			<div class="form-group">
			  <div id="sections">
			  <div class="section">
			  <?php $previous_experience  = json_decode($get_candidate_info['previous_experience']);
			  print_r($previous_experience);
			  echo $count = count($previous_experience); ?>
			    <fieldset>
			        <legend>Add Employer/Designation</legend>

			        <p>
			           <label>Employer Name</label>
			            <input name="employer_name[]" id="employer_name" value="" placeholder="Employer Name" type="text" required />
			        </p>

			        <p>
			            <label for="lastName">Designation</label>
			            <input name="designation[]" id="designation" value="" placeholder="Designation"  type="text" required/>
			        </p>
			            <label for="lastName">Duration</label>
			            From<input name="duration_start[]" id="duration_start" value="" placeholder="Duration"  type="text" required/>
			            TO<input name="duration_end[]" id="duration_end" value="" placeholder="Duration"  type="text" required/>
			        </p>


			        <p><a href="#" class='remove'>Remove Section</a></p>

			    </fieldset>
			  </div>
			</div>

			<p><a href="#" class='addsection'>Add More</a></p>
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




       
 
     

