				</div>
		</div>
</div>
<footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
		 <!-- partial -->
		 </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
	<!-- script for loding when submit form -->
	<script>
			$('document').ready(function(){
						$('form').submit(function(){
								$('body').loading({
            					stoppable: true,
     							});
						});	
				});
				var base_url = '<?php echo base_url();?>';		
	</script>
  <script src="<?php echo base_url('vendors/js/vendor.bundle.base.js');?>"></script>
  <script src="<?php echo base_url('vendors/notify/bootstrap-notify.js');?>"></script>
  <script src="<?php echo base_url('vendors/js/vendor.bundle.addons.js');?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/js/off-canvas.js');?>"></script>
  <script src="<?php echo base_url('assets/js/misc.js');?>"></script>
  <script src="<?php echo base_url('assets/js/loading.js');?>"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('assets/js/dashboard.js');?>"></script>
  <!-- End custom js for this page-->

  <!-- Global Js of Website-->
	<script src="<?php echo base_url('assets/js/global.js');?>"></script>
	<?php

		if(!empty($pagejs) || isset($pagejs)){
		
			foreach($pagejs as $js)
			print_r("<script src='".base_url('assets/js/'.$js)."'></script>\n");
		}
	?>
</body>
</html>
