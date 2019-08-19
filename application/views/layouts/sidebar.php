<!-- partial -->
<div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?php echo base_url('assets/images/faces/face1.jpg');?>" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $this->session->userdata('name');?></p>
                  <div>
                    <small class="designation text-muted"><?php echo $this->session->userdata('login_type');?></small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
			<?php
			 if($this->session->userdata('master_admin_login')==1)
					include_once('sidebars/masteradmin.php');
			 		 else if($this->session->userdata('sub_admin_login')==1)
					 include_once('sidebars/subadmin.php');
					 else if($this->session->userdata('admin_login')==1)
					 include_once('sidebars/admin.php');
					 else if($this->session->userdata('account_login')==1)
					 include_once('sidebars/account.php');
					 else if($this->session->userdata('librarian_login')==1)
					 include_once('sidebars/librarian.php');
					 else if($this->session->userdata('professor_login')==1)
					 include_once('sidebars/professor.php');
					 else if($this->session->userdata('student_login')==1)
						include_once('sidebars/student.php');
						else if($this->session->userdata('warden_login')==1)
						include_once('sidebars/warden.php'); 
			 ?>  
</nav>
		<div class="main-panel">
			<div class="content-wrapper">
<!-- contener start from hear -->
<div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

