<h2>View Institute.</h2>
<hr>
<?php foreach($institute as $ins){ ?>
<div class="card">
  <h5 class="card-header"><i class="mdi mdi-city"></i><?php echo $ins['insname']; ?></h5>
  <div class="card-body collapse" id="collapseExample">
    <h5 class="card-title">Address</h5>
    <p class="card-text"><?php echo $ins['address']; ?></p>
	<h5 class="card-title">Email</h5>
    <p class="card-text"><?php echo $ins['email']; ?></p>
	<h5 class="card-title">Landline</h5>
    <p class="card-text"><?php echo $ins['landline']; ?></p>
	<h5 class="card-title">Fax</h5>
    <p class="card-text"><?php echo $ins['fax']; ?></p>
	<h5 class="card-title">MobileNo</h5>
    <p class="card-text"><?php echo $ins['mobileno']; ?></p>
  </div>
</div>
<?php } ?>
