
<h1>View User form</h1>
<?php if($this->session->flashdata('message')){?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Success!</strong><?php echo $this->session->flashdata('message');?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php }?>
<hr>
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link nav-user active" data-toggle="tab" data-mode="admin" href="#menu">Admin</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav-user" data-toggle="tab" data-mode="account" href="#menu">Account</a>
  </li>
	<li class="nav-item">
    <a class="nav-link nav-user" data-toggle="tab" data-mode="professor" href="#menu">professor</a>
  </li>
	<li class="nav-item">
    <a class="nav-link nav-user" data-toggle="tab" data-mode="librarian" href="#menu">Librarian</a>
  </li>
	<li class="nav-item">
    <a class="nav-link nav-user" data-toggle="tab" data-mode="warden" href="#menu">Warden</a>
  </li>
</ul>

<!-- Tab panes -->
<!-- table of users -->
<div class="tab-content">
  <div class="tab-pane active container" id="home" style="padding-top:10px">
	
		<table id="example"  class="display table" style="width:100%">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Email-ID</th>
				<th scope="col">User-ID</th>
				<th scope="col">Password</th>
				<th scope="col">Mobileno</th>
				<th scope="col">Status</th>
				</tr>
			</thead>
		</table>
  </div>
</div>
<!-- table of users -->
<!-- User Modal-->
<!-- Modal -->
<div class="modal fade" id="UserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User<span class="badge" id="status-badge"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <?php echo form_open('',array('id'=>'userupdateform'))?>
                        <div class="form-group row">
                          <label for="username" class="col-sm-3 col-form-label">UserName</label>
                          <div class="col-sm-9">
													<input type="hidden" class="form-control" id="id" name="id";>
                    		 	<input type="hidden" class="form-control" id="type" name="type";>
													<input type="text" class="form-control" id="username" name="username";>
													</div>
													<div class="col-sm-3"></div>
													<div id="error" class="col-sm-9"></div>
                        </div>
                        <div class="form-group row">
                          <label for="email" class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email">
                          </div>
													<div class="col-sm-3"></div>
													<div id="error" class="col-sm-9"></div>
                        </div>
						<div class="form-group row">
                          <label for="userid" class="col-sm-3 col-form-label">UserID</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="userid" name="userid">
                          </div>
													<div class="col-sm-3"></div>
													<div id="error" class="col-sm-9"></div>
                        </div>
						<div class="form-group row">
                          <label for="password" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password">
                          </div>
													<div class="col-sm-3"></div>
													<div id="error" class="col-sm-9"></div>
                        </div>
						<div class="form-group row">
                          <label for="mobileno" class="col-sm-3 col-form-label">ModileNo</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="mobileno" name="mobileno">
                          </div>
													<div class="col-sm-3"></div>
													<div id="error" class="col-sm-9"></div>
                        </div>
						<div class="form-group row">
						<label for="mobileno" class="col-sm-3 col-form-label">Status</label>
                          <div class="form-radio col-sm-3">
                            <label class="form-check-label">
                              <input class="form-check-input" name="optionsRadios" id="active" value="1" type="radio"> Active
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-radio col-sm-4">
                            <label class="form-check-label">
                              <input class="form-check-input" name="optionsRadios" id="deactive" value="0" type="radio"> Deactive
                            <i class="input-helper"></i></label>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
      	</div>
      	<div class="modal-footer">
	  		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary" id="ajaxUpadte">Save changes</button>
		</div>
		<?php echo form_close(); ?>
    </div>
  </div>
</div>
<!-- User Modal-->
