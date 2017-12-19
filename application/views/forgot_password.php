<div class="sign-in-wrap col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1">
                            <div id="sign-in-form" class="sign-form" tabindex="-1" role="dialog">
                                <form method="post" class="single-form" action="<?php echo site_url('user/forgot_update')?>">
                                 <span class="welcome"><?php echo $this->session->flashdata('wel_message'); ?></span>
                                <span class="text-danger"><?php echo $this->session->flashdata('log_msg'); ?></span>
                                  <span class="text-danger"><?php echo $this->session->flashdata('message'); ?></span>   
                            		<div class="col-xs-12">
                                     <input name="password" class="contact-password form-control" placeholder="Password" type="pass"  value="<?php echo set_value('password'); ?>"><span class="text-danger"><?php echo form_error('password'); ?></span>
                                     </div>
                                    <div class="col-xs-12">
                                     <input name="confirm_password" class="contact-cmp-password form-control" placeholder="Confirm Password" type="pass"  value="<?php echo set_value('confirm_password'); ?>"><span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                                     </div>
                                    <div class="btn-form text-center col-xs-12">
                                                <button class="btn btn-fill">Submit</button>
                                        </div>
                                    
                                       
                                </form>
                            </div>
                           
                        </div>