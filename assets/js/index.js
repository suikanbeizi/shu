$('.username').on('input', function(event) {
		event.preventDefault();
		subdisabled();
		if($(this).val().length<1 || $(this).val().length>=8){
			$('.usertishi').html('用户名长度2-8位');
		}
		else{
			$('.usertishi').html("");
		}

	});
	$('.password').on('input', function(event) {
		event.preventDefault();
		subdisabled();
		if($(this).val().length<=4 || $(this).val().length>=10){
			$('.passtishi').html('密码长度4-10位');
		}
		else{
			$('.passtishi').html("");
		}
	});
	$('.password1').on('input', function(event) {
		event.preventDefault();
		subdisabled();
		if($(this).val()!=$('.password').val()){
			$('.passtishi1').html('两次密码不一致');
		}
		else{
			$('.passtishi1').html('√');
		}
		
	});

	$('.check').on('input', function(event) {
		event.preventDefault();
		subdisabled();

		if($(this).val()!=$('.huantu').html()){
			$('.checktishi').html('验证码有错误');
		}
		else{
			$('.checktishi').html('√');
		}
	});
	var checkNum=Math.floor(Math.random()*1000+999);
	$('.huantu').html(checkNum);
	function subdisabled(){
		if($('.username').val()==""||$('.password').val()==""||$('.password1').val()==""||$('.check').val()==""){
			$('.regsub').attr('disabled',true);
			
		}
		else{
			$('.regsub').attr('disabled',false);
		}
	}
	$('.regsub').click(function(event) {
		if($('.username').val()==""||$('.password').val()==""||$('.password1').val()==""||$('.check').val()==""||!$('.agree').is(':checked')){
			alert('请填写完整信息');
			return false
		}
		
	});
