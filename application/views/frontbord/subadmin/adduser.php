<h3>Add Users.</h3>
<?php if($this->session->flashdata('message')){?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Success!</strong><?php echo $this->session->flashdata('message');?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php }?>
<?php echo form_open('subadmin/add_user',$attr=array('class'=>'forms-sample','name'=>'userform','autocomplete'=>'off'));?>
<div class="form-group">
	<label for="username">UserName</label>
		<input type="text" class="form-control" id="username" value="<?php echo set_value('username'); ?>" name="username" placeholder="Enter Name">
	<small class="text-danger"><?php echo form_error('username'); ?></small>
</div>
<div class="form-group">
	<label for="username">Email</label>
		<input type="email" class="form-control" id="email" value="<?php echo set_value('email'); ?>" name="email" placeholder="Enter Email">
	<small class="text-danger"><?php echo form_error('email'); ?></small>
</div>
<div class="form-group">
	<label for="userid">user ID</label>
	<div class="input-group">
		<div class="input-group-prepend bg-info">
		<a onClick="generate('userid');" title="Auto Generate UserID">
			<span class="input-group-text bg-transparent">
				<i class="mdi mdi-flattr text-white"></i>
			</span>
		</a>
	</div>
	<input type="text" class="form-control" id="userid" value="<?php echo set_value('userid'); ?>" name="userid" placeholder="Enter UserID">
 </div>
	<small class="text-danger"><?php echo form_error('userid'); ?></small>
</div>
<div class="form-group">
	<label for="password">Password</label>
	<div class="input-group">
		<div class="input-group-prepend bg-info">
		<a onClick="generate();" title="Auto Generate Password">
			<span class="input-group-text bg-transparent">
				<i class="mdi mdi-flattr text-white"></i>
			</span>
		</a>
	</div>
	<input type="text" class="form-control" id="password" value="<?php echo set_value('password'); ?>" name="password" placeholder="Enter password" aria-describedby="colored-addon1">
 </div>
	<small class="text-danger"><?php echo form_error('password'); ?></small>
</div>
<div class="form-group">
	<label for="mobileno">Mobile NO</label>
		<input type="text" class="form-control" id="mobileno" value="<?php echo set_value('mobileno'); ?>" name="mobileno" placeholder="Enter MobileNo">
	<small class="text-danger"><?php echo form_error('mobileno'); ?></small>
</div>
<div class="form-group">
	<label for="insid">Select Institute</label>
		<select class="form-control" id="insid"name="insid">
			<option value="">Select Institute</option>
			<?php foreach($institute as $ins){ ?>
				<option value="<?php echo$ins['id']; ?>"><?php echo$ins['insname']; ?></option>
			<?php }?>
		</select>
		<small class="text-danger"><?php echo form_error('insid'); ?></small>
</div>
<div class="form-group">
	<label for="usertype">User Type</label>
		<select class="form-control" id="usertype"name="usertype">
			<option value="">Select UserType</option>
			<option value="Admin">Admin</option>
			<option value="Account">Account</option>
			<option value="Professor">Professor</option>
			<option value="Librarian">Librarian</option>
			<option value="Warden">Warden</option>
			<option value="Student">Student</option>
		</select>
		<small class="text-danger"><?php echo form_error('usertype'); ?></small>
</div>
	<button type="submit" class="btn btn-success mr-2">Submit</button>
    <button class="btn btn-light" type="reset">Cancel</button>
<?php echo form_close();?>
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
							userform.userid.value = randomPassword(10);
						}else{
							userform.password.value = randomPassword(10);
						}
					
					}
				</script>
</script>
