$(document).ready(function(){


	$( "#menuradio" ).buttonset();
	$( "#loginradio" ).buttonset();
	$('input#logout_button').on('click',function(){
		window.location.replace('../user/logout');

	});
	$('input#profile_button').on('click',function(){
	//	window.location.replace('profile');
		$.ajax({
				  	type:'get',
					dataType: 'html',
					url: "../user/profile",
					success: function (response) {
						$('#content').html(response);
					}
				})

	});
	$('input#menu_admindash_button').on('click',function(){
		//	window.location.replace('profile');
			$.ajax({
					  	type:'get',
						dataType: 'html',
						url: "../admin_user/index",
						success: function (response) {
							$('#content').html(response);
						}
					})

		});
	$('input#menu_dash_button').on('click',function(){
			//	window.location.replace('profile');
				$.ajax({
						  	type:'get',
							dataType: 'html',
							url: "../user/dashboard",
							success: function (response) {
								$('#content').html(response);
							}
						})

			});




});


