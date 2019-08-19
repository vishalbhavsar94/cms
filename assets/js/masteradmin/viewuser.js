$(document).ready(function() {
	$('.nav-user').click(function(){
		
		onLoading();
		mode = $(this).data('mode');
		 table = $('#example').DataTable({
			"destroy": true,
			"ajax":base_url+"masteradmin/ajaxuser/"+mode,
			"columns": [
				{ "data": "user_name" },
				{"data": "user_name" },
				{ "data": "email" },
				{ "data": "user_id" },
				{ "data": "password" },
				{ "data": "mobile_no" },
				{ "data": null },
			],
			"columnDefs": [ {
				"searchable": false,
				"orderable": false,
				"targets": 0
			} ],
			"columnDefs": [ {
				"targets": -1,
				"data": null,
				"defaultContent": "<button class='btn btn-success'><i class='mdi mdi-menu'></i></button>"
			} ],
			"order": [[ 1, 'asc' ]],
			"initComplete": function( settings, json ) {
				stopLoading();
			  }
			});
			
				table.on( 'order.dt search.dt', function () {
					table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
					cell.innerHTML = i+1;
					} );
				} ).draw();
				$('#example tbody').on( 'click', 'button', function () {
					var data = table.row( $(this).parents('tr') ).data();
					//alert( data.id +"'s salary is: "+ data.status);
					console.log(data.id);
				} );
	});
	
	$('.active').click();
});
