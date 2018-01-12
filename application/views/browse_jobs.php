<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>

<div id="message"></div>
			<?php //echo form_open('post_job/insert_job_post');?>
			<?php foreach($job_list as $key=>$values) { ?>


<!-- Matching Job -->
    <section id="matching-job">
      <div class="container matching_job_container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-heading text-uppercase">Matching Job</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 mTop-20">
            <div class="row">
              <div class="col-md-12">
                <h6><a href="#"><?php echo $values['role'];?></a></h6>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <span>Company:</span><label>Infosys</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <span>Experience:</span><label>12 yrs</label>
              </div>
              <div class="col-md-6">
                <span>Location:</span><label>Thiruvananthapuram</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <span>Keyskills:</span><label>UI/UX, HTML, CSS</label>
              </div>
              <div class="col-md-6">
                <span>Salary:</span><label><?php echo $values['salary_lakhs'];?> Lakhs <?php echo $values['salary_thousands'];?> Thousands</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="mLeft-0">Job Description:</label>
                <p><?php echo $values['job_description'];?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <span>Opening:</span><label>26/12/2017</label>
              </div>
              <div class="col-md-6">
                <span>Closing:</span><label>12/01/2018</label>
              </div>
            </div>
              <div class="row">
              <div class="btn-form text-center mTop-20 col-md-12">
                <button class="btn btn-fill mRight-10">Apply</button>
                <button class="btn">Reject</button>
              </div>
            </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
    </section>



       
 <?php } ?> 
     

