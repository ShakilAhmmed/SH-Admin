<template>

	<div>
		 <breadcrumb></breadcrumb>
		<div class="col-md-6">
	<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">System Configuration</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>



									<a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

									<div class="panel-body">
										<fieldset>
											<legend class="text-semibold">Enter your System Configuration</legend>

											<div class="form-group">
												<label>System Title:</label>
												<input type="text" class="form-control" placeholder="SH Admin">
											</div>

											
											
										</fieldset>

										<fieldset>
											<legend class="text-semibold">System / Company Adress</legend>



											<div class="form-group">
												<div class="form-group">
												<label>System Address:</label>
												<input type="text" class="form-control" placeholder="Dhaka">
											</div>

											</div>

				                		

											<div class="form-group">
												<label>System Logo :</label>
												<div class="uploader bg-warning"><input type="file" class="file-styled"><span class="filename" style="user-select: none;">No file selected</span><span class="action" style="user-select: none;"><i class="icon-googleplus5"></i></span></div>
												<span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
											</div>

				                			<div class="form-group">
												<label>About System:</label>
			                                    <textarea rows="5" cols="5" placeholder="SH Admin Is Simplify Your Software Development Now Software Development is more easy" class="form-control"></textarea>
				                			</div>
										</fieldset>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>


</div>


<div class="col-md-6">
	
	<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Last Update : </h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									<a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

									<div class="panel-body">
										
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Go To Dashboard <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>

</div>
	</div>




</template>