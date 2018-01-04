<!-- Button trigger modal -->
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="row">
        <div class="intro-text spot-view col-md-6 text-left">

          
          <!-- <div class="intro-lead-in">Just In Time Hiring!</div>
          <div class="intro-heading text-uppercase">Get a job in <span>24</span> hours</div>
          <div class="intro-heading text-uppercase">Get a talent in <span>24</span> hours</div>
          <div class="detail hidden">
            <p>Get a job in <span>24</span> hours</p>
            <p>Get a talent in <span>24</span> hours</p>
          </div> -->
         <!--  <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> -->
        </div>
        <!-- =============== Start: Sign In Form =================== -->
                        <div class="sign-in-wrap col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1">
                            <div id="sign-in-form" class="sign-form" tabindex="-1" role="dialog">
                                <form method="post" class="single-form" action="<?php echo site_url('user/login_check')?>"> <span class="welcome"><?php echo $this->session->flashdata('wel_message'); ?></span>
                                <span class="text-danger"><?php echo $this->session->flashdata('log_msg'); ?></span>
                                  <span class="text-danger"><?php echo $this->session->flashdata('message'); ?></span>   
                            		<div class="col-xs-12">
                                        <!-- Email -->
                                        <input name="email" class="contact-email form-control" type="email" placeholder="Email*" required="">
                                    </div>
                                        <div class="col-xs-12">
                                                <!-- Subject -->
                                                <input name="password" class="contact-password form-control" type="password" placeholder="Password">
                                        </div>
                                      <div class="row">   
                                        <div class="col-md-6 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember-me">
                                                    <label for="remember-me">Remember me</label>
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6 text-right">
                                                <a href="<?php echo site_url('user/forgot')?>">Forgot password?</a>
                                        </div>
                                      </div>     
                                        <!-- Subject Button -->
                                        <div class="btn-form text-center col-xs-12">
                                                <button class="btn btn-fill">Sign In</button>
                                        </div>
                                </form>
                            </div>
                            <div class="text-center mTop-10">----------- or login with -----------</div>
                            <div class="sign-in-social row">
                                
                                <div class="col-xs-4 col-md-4 social-nav google">
                                    <a href="#" alt="Google" title="Google"><i class="icon icons8-google-logo-filled"></i><span>Google</span></a>
                                </div>
                                <div class="col-xs-4 col-md-4 social-nav facebook">
                                    <a href="#" alt="facebook" title="Facebook"><i class="icon icons8-facebook-filled"></i><span>Facebook</span></a>
                                </div>
                                <div class="col-xs-4 col-md-4 social-nav linkedin">
                                    <a href="#" alt="Linkedin" title="Linkedin"><i class="icon icons8-linkedin-filled"></i><span>Linkedin</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>
                    <!-- End: Sign In Form
                    ================================== -->
      </div>
    </header>

    <!-- Services -->
    <section id="services" class="hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">E-Commerce</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Responsive Design</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web Security</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
        
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    
<!-- Register modal start -->
            <div class="sign-form modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body">                  
                   <?php echo $this->session->flashdata('msg'); ?>
                        <div class="btn-group" data-toggle="buttons">
                          <label class="btn active">
                            <input type="radio" name='role' onclick="btnSearch_Click();"  id="candidate" value="candidate" checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span>I am a Candidate</span>
                          </label>
                          <label class="btn">
                            <input type="radio" name='role' id="company" value="company"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span>I am an Employer</span>
                          </label>
                        </div>
                        <div id="candidate">
                         <form method="post" class="single-form" action="<?php echo site_url('user/register_check') ?>">
                        <div class="col-xs-12 mBot-10 mBot-10 text-right">
                            <!-- Create Profile from Linkedin -->
                            <a href="#" class="">Create Profile from Linkedin</a>
                          </div> 
                        <div class="col-xs-12">
                            <!-- First Name -->
                            <input name="first_name" class="contact-first-name form-control" placeholder="First Name*" required="" type="text">
                        </div>
                        <div class="col-xs-12">
                            <!-- Last Name -->
                            <input name="middle_name" class="contact-last-name form-control" placeholder="Middle Name" type="text">
                        </div>
                        <div class="col-xs-12">
                            <!-- Last Name -->
                            <input name="last_name" class="contact-last-name form-control" placeholder="Last Name*" required="" type="text">
                        </div>
                        <div class="col-xs-12">
                            <!-- Email -->
                            <input name="email" class="contact-email form-control" placeholder="Email*" required="" type="email">
                        </div>
                        <div class="col-xs-12">
                            <!-- Subject -->                            <input name="password" class="contact-password form-control" placeholder="Password" type="password"  value="<?php echo set_value('password'); ?>"><span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="col-xs-12">
                            <!-- Subject -->
                            <input name="confirm_password" class="contact-cmp-password form-control" placeholder="Confirm Password" type="password"  value="<?php echo set_value('confirm_password'); ?>"><span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                        </div>
                        <div class="col-xs-12">
                            <!-- Subject -->
                            <input name="status" type="hidden" value="active">
                        </div>
                        <div class="col-xs-12">
                            <div class="checkbox">
                                <input name="agreement" id="agreement" type="checkbox" />
                                <label for="agreement">I agree to Your Terms of Service </label>
                            </div>
                        </div>
                        
                        <!-- Subject Button -->
                        <div class="btn-form text-center col-xs-12">
                            <button class="btn btn-fill">Sign Up</button>
                        </div>
                         </form>
                        </div>
                      
                         <div id="company">
                         <form method="post" class="single-form" action="<?php echo site_url('user/register_check') ?>">
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
                         </form>
                         </div>
                  </div>
                  <!-- <div class="modal-footer hidden">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div> -->
                </div>
              </div>
            </div>
        <!-- register modal end -->

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
 function btnSearch_Click() {
        console.log('asd');
       }
</script>