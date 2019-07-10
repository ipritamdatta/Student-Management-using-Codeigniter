<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url()?>save-admin" method="post" enctype="multipart/form-data">
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Admin Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" name="admin_name">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Admin Email</label>
							  <div class="controls">
								<input type="email" class="input-xlarge" id="date01" name="email_address">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Password</label>
							  <div class="controls">
								<input type="password" class="input-xlarge" id="date01" name="password">
							  </div>
							</div>

                            <div class="control-group">
							  <label class="control-label" for="date01">Admin Phone</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" name="phone">
							  </div>
							</div>
                            
							<!-- <div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>           -->
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save Changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->