
	<div class="main-container ace-save-state" id="main-container">
			
		
			<div class="main-content">
				<div class="main-content-inner">
					
					<div class="page-content">
						
						

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								<div class="hr hr-18 dotted hr-double"></div>

								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">Company Information</h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Domain</th>
														<th>Price</th>
														<th class="hidden-480">Clicks</th>

														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Created
														</th>
														<th class="hidden-480">Status</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
												<?php 
													//print_r($company_details);
													foreach($company_details as $company) {
													?>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#"><?php echo $company->first_name; ?></a>
														</td>
														<td><?php echo $company->last_name; ?></td>
														<td class="hidden-480"><?php echo $company->email; ?></td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $company->status; ?></span>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
																<a class="red" href="#" onclick="makeAjaxCall();">
																	<i class="ace-icon fa fa-flag bigger-130"></i>
																</a>
															</div>

															
														</td>
													</tr>
													<?php } ?>>
													

													
												</tbody>
											</table>
										</div>
									</div>
								</div>

							
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
		</div><!-- /.main-container -->

		<script>
function makeAjaxCall(){ alert('aa');
 $.ajax({
  type: "post",
  url: "http://localhost/CodeIgnitorTutorial/index.php/usercontroller/verifyUser",
  cache: false,    
  data: $('#userForm').serialize(),
  success: function(json){      
  try{  
   var obj = jQuery.parseJSON(json);
   alert( obj['STATUS']);
     
   
  }catch(e) {  
   alert('Exception while request..');
  }  
  },
  error: function(){      
   alert('Error while request..');
  }
 });
}
</script>