<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>


    
    <!-- Candidate dashboard -->
    <section id="">
      <div class="container">
      <!-- browse job start-->
    <div class="job-browse-block hidden">
      <form class="navbar-form navbar-right" role="search">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Jobs" name="srch-term" id="srch-term">
              <div class="input-group-btn">
                  <button class="btn btn-fill" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
          </div>
      </form>
      <!-- <div class="row">
        <div class="col-md-11">
          <input name="text" class="job-browse-field form-control" placeholder="Search Jobs" required="" type="text">

        </div>
        <div class="col-md-1">
          <button class="btn btn-fill"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
      </div> -->
    </div>
    <!-- browse job end-->
      <div class="dashboard-wrap">
        <div class="row">
          <div class="col-md-2 padding-5">
            <div class="left-block border padding-15">
              <ul class="nav-wrap">
              <li><h2 class="sub-title line">Profile</h2></li>
              <li id="view-profile"><a href="#">View Profile</a></li>
              <li id="basic-info"><a href="#">Basic Details</a></li>
              <li id="upload_photo"><a href="#">Upload Photo</a></li>
              <!--<li id="designation"><a href="#">Employer/Designation</a></li>-->
              <li id="resume"><a href="#">Attached Resume</a></li>
              <!--<li><a href="#">Projects</a></li>-->
              <li id="skills"><a href="#">Skills</a></li>
              <li><a href="#">Education</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-7">
            <!-- profile details start -->
            <div id="message"></div>
            <form method="post" name="basic-info" id="basic-info-view">
            <div class="details" id="basic-info">
              <h1 class="title line2"><?php echo $get_candidate_info['first_name']; ?></h1>
                <div class="col-xs-12">
                  <!-- First Name -->
                  <label class="col-md-4">First Name </label><span class="col-md-8"> <input name="first_name" class="form-control" placeholder="First Name*" type="text" value="<?php echo $get_candidate_info['first_name']; ?>" required></span>
                </div>
                
                <div class="col-xs-12">
                  <!-- Email -->
                  <label class="col-md-4">Email </label><span class="col-md-8"> <input name="email" class="form-control" placeholder="Email*" type="email" value="<?php echo $get_candidate_info['email']; ?>" required></span>
                </div>
                <div class="col-xs-12">
                  <!-- Email -->
                  <label class="col-md-4">Pancard </label><span class="col-md-8"> <input type="text" name="pancard" class="form-control" placeholder="Pancard" value="<?php echo $get_candidate_info['pancard']; ?>" required/></span>
                </div>
                <div class="col-xs-12">
                  <!-- Email -->
                  <label class="col-md-4">Mobile number</label><span class="col-md-8"> <input type="text" name="mobile_number" class="form-control" placeholder="Mobile_number*" value="<?php echo $get_candidate_info['mobile_number']; ?>" required/></span>
                </div>
                 <div class="col-xs-12">
                  <!-- Email -->
                  <label class="col-md-4">Date of Birth</label><span class="col-md-8"> <input type="date" name="bday" class="form-control"  value="<?php echo $get_candidate_info['dob']; ?>" required> </span>
                </div>
                 <div class="col-xs-12">
                  <label class="col-md-4">Gender</label><span class="col-md-8"> 
                  <select name="gender" required class="form-control">
        					<option value=''>--select--</option>
        					<option value ='m' <?php if($get_candidate_info['gender'] == 'm') echo"selected"; ?>>Male</option>
        					<option value ='f' <?php if($get_candidate_info['gender'] == 'f') echo"selected"; ?>>Female</option>
        				</select> 
				        </span>
                </div>

                <div class="col-xs-12">
                  <label class="col-md-4">Industry</label><span class="col-md-8"> 
                  <select name="industry"  class="form-control" required>
                    <option value=''>--select--</option>
                    <option value ='1' <?php if($get_candidate_info['industry'] == '1') echo"selected"; ?> >Accounting/Finance</option>
                    <option value ='2' <?php if($get_candidate_info['industry'] == '2') echo"selected"; ?> >Advertising/PR/MR/Events</option>
                    <option value ='3' <?php if($get_candidate_info['industry'] == '3') echo"selected"; ?> >Animation</option>
                    <option value ='4' <?php if($get_candidate_info['industry'] == '4') echo"selected"; ?> >IT-Software/Software Services</option>
                    <option value ='5' <?php if($get_candidate_info['industry'] == '5') echo"selected"; ?> >KPO / Research /Analytics</option>
                  </select>
                </span>
                </div>

                 <div class="col-xs-12">
                  <label class="col-md-4">Functional Area</label><span class="col-md-8"> 
                    <select class="form-control" name="functional_area" required>
                      <option value=''>--select--</option>
                      <option value ='1' <?php if($get_candidate_info['functional_area'] == '1') echo"selected"; ?>>Accounts / Finance / Tax / CS / Audit</option>
                      <option value ='2' <?php if($get_candidate_info['functional_area'] == '2') echo"selected"; ?>>IT Software - Client Server</option>
                      <option value ='3' <?php if($get_candidate_info['functional_area'] == '3') echo"selected"; ?>>IT Software - Mainframe</option>
                      <option value ='4' <?php if($get_candidate_info['functional_area'] == '4') echo"selected"; ?>>IT Software - Middleware</option>
                      <option value ='5' <?php if($get_candidate_info['functional_area'] == '5') echo"selected"; ?>>IT Software - Mobile</option>
                    </select>
                </span>
                </div>

                  <div class="col-xs-12">
                  <label class="col-md-4">Role</label><span class="col-md-8"> 
                    <select name="role" required class="form-control">
                      <option value=''>--select--</option>
                      <option value ='1' <?php if($get_candidate_info['role'] == '1') echo"selected"; ?>>Software Developer</option>
                      <option value ='2' <?php if($get_candidate_info['role'] == '2') echo"selected"; ?>>Team Lead/Tech Lead</option>
                      <option value ='3' <?php if($get_candidate_info['role'] == '3') echo"selected"; ?>>System Analyst</option>
                      <option value ='4' <?php if($get_candidate_info['role'] == '4') echo"selected"; ?>>Tech Architect</option>
                      <option value ='5' <?php if($get_candidate_info['role'] == '5') echo"selected"; ?>>Release Mgr</option>
                    </select>
                </span>
                </div>

                  <div class="col-xs-12">
                  <label class="col-md-4">Total Experience</label><span class="col-md-8"> 
                    <select name="total_experience" required class="form-control">
                    <option value=''>--YEAR--</option>
                    <option value ='1' <?php if($get_candidate_info['total_experience'] == '1') echo"selected"; ?>>Fresher</option>
                    <option value ='2' <?php if($get_candidate_info['total_experience'] == '2') echo"selected"; ?>>1</option>
                    <option value ='3' <?php if($get_candidate_info['total_experience'] == '3') echo"selected"; ?>>2</option>
                    <option value ='4' <?php if($get_candidate_info['total_experience'] == '4') echo"selected"; ?>>3</option>
                    <option value ='5' <?php if($get_candidate_info['total_experience'] == '5') echo"selected"; ?>>4</option>
                  </select>
                </span>
                </div>

                  <div class="col-xs-12">
                  <label class="col-md-4">Lakhs</label><span class="col-md-8"> 
                    <select name="lakhs" required class="form-control">
                      <option value=''>--Lakhs--</option>
                      <option value ='0' <?php if($get_candidate_info['salary_lakhs'] == '0') echo"selected"; ?>>0</option>
                      <option value ='1' <?php if($get_candidate_info['salary_lakhs'] == '1') echo"selected"; ?>>1</option>
                      <option value ='2' <?php if($get_candidate_info['salary_lakhs'] == '2') echo"selected"; ?>>2</option>
                      <option value ='3' <?php if($get_candidate_info['salary_lakhs'] == '3') echo"selected"; ?>>3</option>
                      <option value ='4' <?php if($get_candidate_info['salary_lakhs'] == '4') echo"selected"; ?>>4</option>
                    </select>
                </span>
                </div>

                  <div class="col-xs-12">
                  <label class="col-md-4">Thousands</label><span class="col-md-8"> 
                    <select name="thousands" required class="form-control">
                    <option value=''>--Thousands--</option>
                    <option value ='0' <?php if($get_candidate_info['salary_thousands'] == '0') echo"selected"; ?>>0</option>
                    <option value ='5' <?php if($get_candidate_info['salary_thousands'] == '5') echo"selected"; ?>>5</option>
                    <option value ='10' <?php if($get_candidate_info['salary_thousands'] == '10') echo"selected"; ?>>10</option>
                    <option value ='15' <?php if($get_candidate_info['salary_thousands'] == '15') echo"selected"; ?>>15</option>
                    <option value ='20' <?php if($get_candidate_info['salary_thousands'] == '20') echo"selected"; ?>>20</option>
                  </select>
                </span>
                </div>

                  <div class="col-xs-12">
                  <label class="col-md-4">Preferred Location</label><span class="col-md-8"> 
                    <?php $locations  = json_decode($get_candidate_info['preferred_location']); ?>
                  <select name="preferred_location[]" required class="form-control" multiple>
                    <option value=''>--select--</option>
                    <option value ='1' <?php if (in_array('1', $locations)) { echo"selected"; } ?>>Trivandrum</option>
                    <option value ='2' <?php if (in_array('2', $locations)) { echo"selected"; } ?>>Chennai</option>
                    <option value ='3' <?php if (in_array('3', $locations)) { echo"selected"; } ?>>Madurai</option>
                    <option value ='4' <?php if (in_array('4', $locations)) { echo"selected"; } ?>>Kochi</option>
                    <option value ='5' <?php if (in_array('5', $locations)) { echo"selected"; } ?>>Bengalore</option>
                  </select>
                </span>
                </div>

                <div class="btn-form text-right border-bottom mTop-10 col-xs-12">
                  <button class="btn btn-fill mBot-10">Update Profile</button>
                </div>
            </div>
            </form>
            <!-- profile details end -->

            <!-- Upload photo -->
            <div id="upload_photo-view">
                  <form method="post" name="upload_photo" id="upload_photo-view" enctype="multipart/form-data">
            <div class="details" id="basic-info">
              <h1 class="title line2">Upload Photo</h1>
                <div class="col-xs-12">
                  <!-- First Name -->
                  <div id="photo-view"></div>
                  <div id="photo-show">
                   <img src="<?php echo base_url();?>upload/photos/<?php echo $get_candidate_info['photos']; ?>" width="100" height="125" class="img-thumbnail" />
                  </div>
                  <label class="col-md-4">Upload your Latest Photo </label><span class="col-md-8"><input type="file" name="image_file" id="image_file" size="20" required />
</span>
                </div>
                <div class="btn-form text-right border-bottom mTop-10 col-xs-12">
                  <button class="btn btn-fill mBot-10">Update Photo</button>
                </div>
            </div>
            </form>
            </div>
            <!--End Upload Photo -->

            <!-- designation -->
            <div id="designation-view">
            <form method="post" name="designation" id="designation-view">
            <div class="details" id="basic-info">
              <h1 class="title line2">Add Employer/Designation</h1>

                <div class="form-group">
                    <div id="emp-sections">
                    <div class="emp-section">
                    <?php $previous_experience  = json_decode($get_candidate_info['previous_experience']);
                    $prev_array = (array) $previous_experience;
                    ?>
                    <fieldset>
                    <?php  foreach($prev_array as $key => $values ) {  ?>
                    <p>
                    <label>Employer Name</label>
                    <input name="employer_name[]" id="employer_name" value="<?php echo $values->name; ?>" placeholder="Employer Name" type="text" required />
                    </p>

                    <p>
                    <label for="lastName">Designation</label>
                    <input name="designation[]" id="designation" value="<?php echo $values->role; ?>" placeholder="Designation"  type="text" required/>
                    </p>
                    <label for="lastName">Duration</label>
                    From<input name="duration_start[]" id="duration_start" value="<?php echo $values->start; ?>" placeholder="Duration"  type="text" required/>
                    TO<input name="duration_end[]" id="duration_end" value="<?php echo $values->end; ?>" placeholder="Duration"  type="text" required/>
                    </p>
                    <p><a href="#" class='remove'>Remove Section</a></p>
                    <?php } ?>
                    </fieldset>
                    </div>
                    </div>
                    <p><a href="#" class='addsection'>Add More</a></p>
                    </div>

                <div class="btn-form text-right border-bottom mTop-10 col-xs-12">
                  <button class="btn btn-fill mBot-10">Update Profile</button>
                </div>
            </div>
            </form>
            </div>
            <!--End designation -->

             <!-- Resume -->

              <div id="upload_resume-view">
              <div id="resume-view-smsg"></div>
                  <form method="post" name="upload_resume" id="upload_resume-view" enctype="multipart/form-data">
            <div class="details" id="basic-info">
              <h1 class="title line2">Upload Resume</h1>
                <div class="col-xs-12">
                  <!-- First Name -->
                  <div id="resume-view"></div>

                  <div id="resume-show">
                   <div><a target="_blank" href="<?php echo base_url();?>upload/resumes/<?php echo $get_candidate_info['resume']; ?>" /><?php echo $get_candidate_info['resume']; ?></a></div>
                  </div>
                  <label class="col-md-4">Upload your Latest Resume </label><span class="col-md-8"><input type="file" name="resume_file" id="image_file" size="20" required />
</span>
                </div>
                <div class="btn-form text-right border-bottom mTop-10 col-xs-12">
                  <button class="btn btn-fill mBot-10">Upload Resume</button>
                </div>
            </div>
            </form>
            </div>
            <!--End Resume -->

            <!-- Skills -->
            <div id="skills-view">
                  <form method="post" name="skills" id="skills-view">
            <div class="details" id="basic-info">
              <h1 class="title line2">Skills</h1>
                <div class="col-xs-12">
                <?php $skills = json_decode($get_candidate_info['skills']); ?>
                  <div class="form-group">
          
        <div id="sections">
        <?php foreach($skills as $keys => $values) { ?>
                  <input name="skill[]" id="skill" value="<?php echo $keys; ?>" placeholder="Skill" type="text" required />
                  <select name="proficiency[]" id="proficiency" required>
                    <option <?php if($values=='Basic') { echo 'selected'; } ?> >Basic</option>
                    <option <?php if($values=='Intermediate') { echo 'selected'; } ?> >Intermediate</option>
                    <option <?php if($values=='Advanced') { echo 'selected'; } ?> >Advanced</option>
                  </select>
                  </br></br>
                <?php } ?>
        <div class="section">
      
          
                
              <fieldset>
                <input name="skill[]" id="skill" value="" placeholder="Skill" type="text" required />
                  <select name="proficiency[]" id="proficiency" required>
                    <option>Basic</option>
                    <option>Intermediate</option>
                    <option>Advanced</option>
                  </select>

              <a href="#" class='remove'>Remove Section</a>

          </fieldset>
          <br>
        </div>
      </div>

      <p><a href="#" class='addsection'>Add More</a></p>
      </div>
                </div>
                <div class="btn-form text-right border-bottom mTop-10 col-xs-12">
                  <button class="btn btn-fill mBot-10">Update Skills</button>
                </div>
            </div>
            </form>
            </div>
            <!--End Skills -->
            

          </div>
          <div class="col-md-3">
            <div class="right-block border padding-15">
              <h2 class="sub-title line">Profile Completness</h2>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                aria-valuemin="0" aria-valuemax="100" style="width:70%">
                  70%
                </div>
              </div>
            </div>
          <div class="right-block border mTop-10 padding-15">
        <ul class="application">
              <li><h2 class="sub-title line">Application Summary</h2></li>
              <li>You have applied for <span class="count-jobs">0 JOB</span> in last 30 days</li>
            </ul>
          </div>
          <div class="right-block border mTop-10 padding-15">
            <ul class="job-alerts">
              <li><h2 class="sub-title line">My Job alerts</h2></li>
              <li><a href="#">Create your own Job alerts</a></li>
            </ul>
          </div>
          </div>
        </div>
       </div>
      </div>
    </section>

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





       
 
     

