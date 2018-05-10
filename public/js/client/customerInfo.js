$(function(){
	$('#ContentPlaceHolder1_imgbtnNext').click(function() {
		if( !checkNullAll() ) 
			return false;
		var angin = $('#ContentPlaceHolder1_txtMailConfirmTop').val() + '@' + $('#ContentPlaceHolder1_txtMailConfirmBtm').val();
		$('#ContentPlaceHolder1_lblMailConfirmError').text('两次输入邮箱不一致');
		if( !checkSame($('#ContentPlaceHolder1_txtMail').val(), angin, '#ContentPlaceHolder1_lblMailConfirmError') )
			return false;
			
		$('.required-item').prop("readonly",true);
		$('#ContentPlaceHolder1_imgbtnBack').hide();
		$('#ContentPlaceHolder1_imgbtnNext').hide();
		$('#ContentPlaceHolder1_imgBreadCrumbs1').hide();
		
		$('#ContentPlaceHolder1_imgbtnBack2').show();
		$('#ContentPlaceHolder1_imgbtnNext2').show();
		$('#ContentPlaceHolder1_imgBreadCrumbs5').show();
		
		$('#ContentPlaceHolder1_imgbtnBack2').click(function(){
			$('.required-item').prop("readonly",false);
			$('#ContentPlaceHolder1_imgbtnBack').show();
			$('#ContentPlaceHolder1_imgbtnNext').show();
			$('#ContentPlaceHolder1_imgBreadCrumbs1').show();
		
			$('#ContentPlaceHolder1_imgbtnBack2').hide();
			$('#ContentPlaceHolder1_imgbtnNext2').hide();
			$('#ContentPlaceHolder1_imgBreadCrumbs5').hide();
		});
		
	});
});