<div class="sign-in-wrap col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1">
                            <div id="sign-in-form" class="sign-form" tabindex="-1" role="dialog">
                                <form method="post" class="single-form" action="<?php echo site_url('user/forgot_check')?>"> <span class="welcome"><?php echo $this->session->flashdata('wel_message'); ?></span>
                                <span class="text-danger"><?php echo $this->session->flashdata('log_msg'); ?></span>
                                  <span class="text-danger"><?php echo $this->session->flashdata('message'); ?></span>   
                            		<div class="col-xs-12">
                                        <!-- Email -->
                                        <input name="email" class="contact-email form-control" type="email" placeholder="Email*" required="">
                                    </div>
                                    <div class="btn-form text-center col-xs-12">
                                                <button class="btn btn-fill">Submit</button>
                                        </div>
                                    
                                       
                                </form>
                            </div>
                           
                        </div>