$(document).ready(function(){


	$( "#menuradio" ).buttonset();
	$( "#loginradio" ).buttonset();
	$('input#logout_button').on('click',function(){
		window.location.replace('logout');

	});
	$('input#profile_button').on('click',function(){
	//	window.location.replace('profile');
		$.ajax({
				  	type:'get',
					dataType: 'html',
					url: "profile",
					success: function (response) {
						$('#content').html(response);
					}
				})

	});
//	$('input#ex2button').on('click',function(){
//			$.ajax({
//				url: "ex2.html",
//				success: function(data){
//					$('#main_content').html(data);
//					$('#tabs').tabs();
//					$('input#db-insert').on('click',function(){
//							var url = $('input#url').val();
//							var tags = $('input#tags').val();
//							if ($.trim(url) !='' && $.trim(tags) !='') {
//								$.post('ajax/ajax.php', {url: url, tags: tags},function(data) {
//									$('input#url').val('');
//									$('input#tags').val('');
//									$('div#insert_msg').html(data).fadeOut(5000,function(){
//										$('div#insert_msg').html('').show();
//									});
//
//								});
//							}
//
//						});
//						$('input#db_fetch').on('click',function(){
//							var tag = $('input#tag_to_search').val();
//							if ($.trim(tag) !='') {
//								$.post('ajax/ajax.php', {tag: tag},function(data) {
//									$('input#tag_to_search').val('');
//									$('div#results').html(data).fadeOut(5000,function(){
//										$('div#results').html('').show();
//									});
//								});
//							}
//
//							});
//				}
//			})
//
//		});
//	$('input#ex3button').on('click',function(){
//			$.ajax({
//				url: "ex3.html",
//				success: function(data){
//					$('#main_content').html(data);
//					$('input#GetRss').on('click',function() {
//							var rssurl = $('input#rssurl').val();
//							if ($.trim(rssurl) !='') {
//								$.post('ajax/ajax.php', {rssurl: rssurl},function (data){
//									if (data) {
//										$('#accordion').remove();
//										$('#feeds').append('<div id="accordion"></div>');
//										$('#accordion').html(data).accordion();
//									}
//									else {
//										$("div#dialog").html('Could Not Fetch RSS from given URL').dialog({
//										    title: 'Error',
//										    resizable: false,
//										    height: 160,
//										    modal: true,
//										    buttons: {
//										        "Ok" : function () {
//										            $(this).dialog("close");
//													$(this).html('');
//
//										        }
//										    }
//										});
//
//
//									}
//
//
//								})
//							}
//						});
//				}
//			})
//
//		});
//




});


