$('.username').on('input', function(event) {
		event.preventDefault();
		subdisabled();
		if($(this).val().length<2 || $(this).val().length>=8){
			$('.usertishi').html('用户名长度2-8位');
			$('.regsub').attr('disabled',true);
		}
		else{
			$('.usertishi').html("");
			subdisabled();
		}
		var url="<?php echo site_url('index.php/shu_user/check_reg'); ?>";
		var dataa={
			username:$(this).val()
		};
		$.ajax({
			url: 'check_reg',
			type: 'post',
			dataType: 'text',
			data: {'username':$(this).val()},
			success:function(data){
				if(data==1){
					$('.usertishi').html('用户名已存在');
					$('.regsub').attr('disabled',true);
					
				}
				else if(data==0){
					subdisabled();
				}
			},
			error:function(d){
				console.log('error');
			}
		})
		
		

	});
	$('.password').on('input', function(event) {
		event.preventDefault();
		subdisabled();
		if($(this).val().length<=4 || $(this).val().length>=10){
			$('.passtishi').html('密码长度4-10位');
			$('.regsub').attr('disabled',true);
		}
		else{
			$('.passtishi').html("");
			subdisabled();
		}
	});
	$('.password1').on('input', function(event) {
		event.preventDefault();
		subdisabled();
		if($(this).val()!=$('.password').val()){
			$('.passtishi1').html('两次密码不一致');
			$('.regsub').attr('disabled',true);
		}
		else{
			$('.passtishi1').html('√');
			subdisabled();
		}
		
	});

	$('.check').on('input', function(event) {
		event.preventDefault();


		if($(this).val()!=$('.huantu').html()){
			$('.checktishi').html('验证码有错误');
			$('.regsub').attr('disabled',true);
		}
		else{
			$('.checktishi').html('√');
			subdisabled();
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
	// 分类页面排序
	$('.hp_title h2 a').click(function(event) {
		var text=$(this).text();
		var fenlei=$('title').text();
		if($(this).attr('class')!='cstyle'){
			$('.hp_title h2 a').removeClass('cstyle');
			$(this).addClass('cstyle');
		}
		// var data={
		// 	'paixun':text,
		// 	"fenlei":fenlei
		// };
		//console.log(text);
		if(text=='销量'){
			$('.hp_x').css('display','block');
			$('.hp_p').css('display','none');
			$('.hp_z').css('display','none');
			$('.hp_j').css('display','none');
		}
		if(text=='好评'){
			$('.hp_x').css('display','none');
			$('.hp_p').css('display','block');
			$('.hp_z').css('display','none');
			$('.hp_j').css('display','none');
		}
		if(text=='最新'){
			$('.hp_x').css('display','none');
			$('.hp_p').css('display','none');
			$('.hp_z').css('display','block');
			$('.hp_j').css('display','none');
		}
		if(text=='价格'){
			$('.hp_x').css('display','none');
			$('.hp_p').css('display','none');
			$('.hp_z').css('display','none');
			$('.hp_j').css('display','block');
		}
		//var url="<?php  echo site_url('index.php/shu_user/fenlei_paixu') ?>";
		// $.ajax({
		// 	url: 'fenlei_paixu',
		// 	type: 'post',
		// 	dataType: 'text',
		// 	data: {"paixun":text,"fenlei":fenlei},
		// 	success:function(data){
		// 		console.log(data[0]);
		// 	},
		// 	error:function(error) {
		// 		console.log('a');
		// 	}
		// })
		
		

	});
