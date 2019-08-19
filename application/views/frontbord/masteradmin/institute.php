         <h2 class="">Add Institute.</h2>
				 						 <hr>
											<?php if($this->session->flashdata('message')){?>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
  												<strong>Success!</strong><?php echo $this->session->flashdata('message');?>
  												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    												<span aria-hidden="true">&times;</span>
  												</button>
										</div>
									<?php }?>  
									<?php echo form_open('masteradmin/add_institute',$atribute=array('class'=>'forms-sample')); ?>
                    <div class="form-group">
                      <label for="insname">Institute Name</label>
                      <input type="text" class="form-control" id="insname" name="insname" value="<?php echo set_value('insname');?>" placeholder="Name">
											<small class="text-danger"><?php echo form_error('insname'); ?></small>
										</div>
                    <div class="form-group">
                      <label for="address">Address</label>
					  			<textarea class="form-control" id="address" name="address" rows="2"><?php echo set_value('address');?></textarea>
									<small class="text-danger"><?php echo form_error('address'); ?></small>
									  </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email');?>" placeholder="Password">
											<small class="text-danger"><?php echo form_error('email'); ?></small>
										</div>
                    <div class="form-group">
                      <label for="phone">Landline</label>
                      <input type="text" class="form-control" id="landline" name="landline" value="<?php echo set_value('landline');?>" placeholder="Landline">
											<small class="text-danger"><?php echo form_error('landline'); ?></small>
										</div>
                    <div class="form-group">
                      <label for="fax">Fax</label>
                      <input type="text" class="form-control" id="fax" name="fax" value="<?php echo set_value('fax');?>" placeholder="Fax">
											<small class="text-danger"><?php echo form_error('fax'); ?></small>
										</div>
										<div class="form-group">
                      <label for="fax">Mobile No</label>
                      <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo set_value('mobile_no');?>" placeholder="mobile_no">
											<small class="text-danger"><?php echo form_error('mobile_no'); ?></small>
										</div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  <?php echo form_close(); ?>
