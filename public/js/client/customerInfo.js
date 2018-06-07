$(function(){
	$('#ContentPlaceHolder1_imgbtnNext').click(function() {
		$('#sendMessage').text('');
		$('.ErrorFont').text('').hide();
		
		if( !checkNullAll() ) 
			return false;
		
		if( $("#mobile").val() != "" ) {
			var reg = /^(1\d{10})|\d{7,8}$/;
			if( !reg.test($("#mobile").val()) ) {
				$("#MobileFormatError").text('手机格式错误').show();
				return false;
	        }
		}
			
		if( $("#email").val() != "" ) {
			var reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/; 
			if( !reg.test($("#email").val()) ) {
				$("#MailFormatError").text('邮箱格式错误').show();
				return false;
	        }
		}
		
		$('#MailConfirmError').text('两次输入邮箱不一致');
		if( !checkSame($('#email').val(), $('#again').val(), '#MailConfirmError') )
			return false;
			
		$('.required-item').prop("readonly",true);
		$('#ContentPlaceHolder1_imgbtnBack').hide();
		$('#ContentPlaceHolder1_imgbtnNext').hide();
		$('#ContentPlaceHolder1_imgBreadCrumbs1').hide();
		
		$('#ContentPlaceHolder1_imgbtnBack2').show();
		$('#ContentPlaceHolder1_imgbtnNext2').show();
		$('#ContentPlaceHolder1_imgBreadCrumbs2').show();
	});
	
	$('#ContentPlaceHolder1_imgbtnBack2').click(function(){
		$('.required-item').prop("readonly",false);
		$('#ContentPlaceHolder1_imgbtnBack').show();
		$('#ContentPlaceHolder1_imgbtnNext').show();
		$('#ContentPlaceHolder1_imgBreadCrumbs1').show();
	
		$('#ContentPlaceHolder1_imgbtnBack2').hide();
		$('#ContentPlaceHolder1_imgbtnNext2').hide();
		$('#ContentPlaceHolder1_imgBreadCrumbs2').hide();
	});
	
	$('.send-btn').on('click', function() {
		if( $("#mobile").val() != "" ) {
			var reg = /^(1\d{10})|\d{7,8}$/;
			if( !reg.test($("#mobile").val()) ) {
				$("#MobileFormatError").text('手机格式错误').show();
				return false;
	        }
		} else {
			$("#MobileFormatError").text('请填写手机号').show();
			return false;
		}
		
		$.ajax({
	        type: "post",
	        url: $('#url-ajax-send-code').val(),
			headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
			datatype: "json",
	        data: {
	           mobile: $("#mobile").val()
	        },
	    }).done(function (res) {
	    	res = JSON.parse(res); 
	    	$('#sendMessage').text(res.Message);
	
	    }).fail(function (data, textStatus, errorThrown) {
		    alert("数据获取错误，请稍后重试！")
		});
	});
	
	$('#ContentPlaceHolder1_imgbtnNext2').on('click', function() {
		var _href = $(this).attr("data-href");
		var productCom = JSON.parse(sessionStorage.getItem('productCom'));
		
		$.ajax({
	        type: "post",
	        url: $('#url-ajax-customerinfo-submit').val(),
			headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
			datatype: "json",
	        data: {
	           company: $('#company').val(),
	           address: $('#address').val(),
	           name: $('#name').val(),
	           tel: $('#tel1').val() + '-' + $('#tel2').val() + '-' + $('#tel3').val(),
	           mobile: $('#mobile').val(),
	           code: $('#code').val(),
	           email: $('#email').val(),
	           productCom: productCom
	        },
	    }).done(function (res) {
	    	res = JSON.parse(res); 
			if(res.code == 1) {
				window.location.href = _href;
			} else {
				$('#sendMessage').text(res.msg);
			}
	    }).fail(function (data, textStatus, errorThrown) {
		    alert("数据获取错误，请稍后重试！")
		});
	});
});