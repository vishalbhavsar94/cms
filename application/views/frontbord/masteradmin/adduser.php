			<div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h3>SubAdmin.</h3>
					  <hr>
					  <?php if($this->session->flashdata('message')){?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Success!</strong><?php echo $this->session->flashdata('message');?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php }?>
                      <?php echo form_open('masteradmin/add_user',$attr = array('class'=>'forms-sample','name'=>'subadminform','autocomplete'=>'off'));?>
                        <div class="form-group">
                          <label for="SubAdminUserName">UserName</label>
                          <input type="text" class="form-control" id="SubAdminUserName" value="<?php echo set_value('SubAdminUserName'); ?>" name="SubAdminUserName" placeholder="Enter Name">
						  <small class="text-danger"><?php echo form_error('SubAdminUserName'); ?></small>
						</div>
						<div class="form-group">
                          <label for="SubAdminEmail">Email address</label>
                          <input type="email" class="form-control" id="SubAdminEmail" value="<?php echo set_value('SubAdminEmail'); ?>" name="SubAdminEmail" placeholder="Enter email">
						  <small class="text-danger"><?php echo form_error('SubAdminEmail'); ?></small>
						</div>
						<div class="form-group">
                          <label for="SubAdminUserId">UserID</label>
                          <div class="input-group">
						  <div class="input-group-prepend bg-info">
                    <a onClick="generate('userid');" title="Auto Generate UserId">
							  			<span class="input-group-text bg-transparent">
							  				<i class="mdi mdi-flattr text-white"></i>
							  		 </span>
							  		</a>
              </div>
						  			<input type="text" class="form-control" id="SubAdminUserId" value="<?php echo set_value('SubAdminUserId'); ?>" name="SubAdminUserId" placeholder="Enter UserID" aria-describedby="colored-addon1">
						</div>
										<small class="text-danger"><?php echo form_error('SubAdminUserId'); ?></small>
						</div>
						<div class="form-group">
                          <label for="SubAdminPassword">Password</label>
                          <div class="input-group">
						  <div class="input-group-prepend bg-info">
                              <a onClick="generate();" title="Auto Generate Password">
							  <span class="input-group-text bg-transparent">
							  	<i class="mdi mdi-flattr text-white"></i>
							   </span>
							  </a>
                          </div>
						  <input type="text" class="form-control" id="SubAdminPassword" value="<?php echo set_value('SubAdminPassword'); ?>" name="SubAdminPassword" placeholder="Enter Password" aria-describedby="colored-addon1">
						</div>
						<small class="text-danger"><?php echo form_error('SubAdminPassword'); ?></small>
						</div>
						<div class="form-group">
                          <label for="SubAdminMobileNo">MobileNO</label>
                          <input type="text" class="form-control" id="SubAdminMobileNo"value="<?php echo set_value('SubAdminMobileNo'); ?>" name="SubAdminMobileNo" placeholder="Enter MobileNO.">
						  <small class="text-danger"><?php echo form_error('SubAdminMobileNo'); ?></small>
						</div>
						<div class="form-group">
							<label for="SubAdminIns">Select Institute</label>
							<select class="form-control" id="SubAdminIns"name="SubAdminIns">
							<option value="">Select Institute</option>
							<?php foreach($institute as $ins){?>
								<option value="<?php echo $ins['id']; ?>"><?php echo $ins['insname'];?></option>
							<?php } ?>
							</select>
							<small class="text-danger"><?php echo form_error('SubAdminIns'); ?></small>
						</div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light" type="reset">Cancel</button>
                      <?php echo form_close();?>
                    </div>
                  </div>
                </div>
				<script>
				function randomPassword(length) {
					var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOP1234567890";
					var pass = "";
					for (var x = 0; x < length; x++) {
						var i = Math.floor(Math.random() * chars.length);
						pass += chars.charAt(i);
					}
					return pass;
					}

				function generate(param = null) {
					if(param == 'userid'){
						subadminform.SubAdminUserId.value = randomPassword(10);
						}else{
							subadminform.SubAdminPassword.value = randomPassword(10);
						}
					
					}
				</script>
