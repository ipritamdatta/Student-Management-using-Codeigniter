<div class="box-content">
					<p>
					<?php 
						$message=$this->session->userdata('message');
						if($message){
							echo "<span class='alert alert-danger'>$message</span>";
							$this->session->unset_userdata('message');
						}
					?>
					</p>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Admin Id</th>
								  <th>Email Address</th>
								  <th>Admin Phone</th>
                                  <!-- <th>Admin Photo</th> -->
								  <th>Admin Name</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  
						  <tbody>
						  <?php 
								foreach($all_admin_info as $v_admin){
						  ?>
							<tr>
								<td class="center"><?php echo $v_admin->admin_id?></td>
                                <td class="center"><?php echo $v_admin->email_address?></td>
                                <td class="center"><?php echo $v_admin->phone?></td>
                                <!-- <td class="center"><img src="<?php echo $v_admin->admin_image?>"></td> -->
                                <td class="center"><?php echo $v_admin->admin_name?></td>
                                
								
								<td>
									<a class="btn btn-info" href="">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
                            </tr>
								<?php }?>
						  </tbody>
					  </table>            
					</div>