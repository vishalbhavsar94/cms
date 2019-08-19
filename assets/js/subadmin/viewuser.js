$(document).ready(function() {
	$('.nav-user').click(function(){
		
		onLoading();
		mode = $(this).data('mode');
		 table = $('#example').DataTable({
			"destroy": true,
			"responsive": true,
			"scrollX": true,
			"ajax":base_url+"subadmin/ajaxuser/"+mode,
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
					//console.log(data.id);
					editUser(data);
				} );
	});
	$('.active').click();
//ajax for update user form
	$('#ajaxUpadte').on('click', function (e) {
        e.preventDefault();
		$('#error').html('');
        $.ajax({
            type: "POST",
            url: base_url+"subadmin/ajax_update_user/",
            data: $("#userupdateform").serialize(),
            dataType: "json",  
            success: function(data){
				if(!data.success){
					$.each(data.error, function(key, value) {
						if(value != ""){
							$('#'+key).addClass('is-invalid');
							$('#'+key).parents('.form-group').find('#error').html(value);
						}
					});
				}
				else{
					//console.log("success");	
					location.reload();
				}
			}
        });
    });

    $('#userupdateform input').on('keyup', function () { 
        $(this).removeClass('is-invalid').addClass('is-valid');
        $(this).parents('.form-group').find('#error').html(" ");
    });
});
function editUser(data){
	$('#id').val(data.id);
	$('#username').val(data.user_name);
	$('#email').val(data.email);
	$('#userid').val(data.user_id);
	$('#password').val(data.password);
	$('#mobileno').val(data.mobile_no);
	$('#type').val(data.type);
	$('#status-badge').removeClass();
	if(data.status == 1){
		$("#active").attr('checked', 'checked');
		$('#status-badge').html('Active');
		$('#status-badge').addClass('badge-success');
	}
	else{
		$("#deactive").attr('checked', 'checked');
		$('#status-badge').html('Deactive');
		$('#status-badge').addClass('badge-danger');
	}
	
	$('#UserModal').modal('show');
}
