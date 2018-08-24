<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"E:\PHPTutorial\WWW\md\public/../application/index\view\tomb\tending.html";i:1534583229;s:66:"E:\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="__CSS__/bootstrap.min.css" />
		<link rel="stylesheet" href="__CSS__/style.css" />
        <script type="text/javascript" src = "__JS__/jquery-1.11.0.js"> </script>
        <script type="text/javascript" src = "__JS__/jquery.validate.js"> </script>
        <script type="text/javascript" src = "__JS__/tpl.js"> </script>


        <link rel="stylesheet" href="__CSS__/zTreeStyle.css" />
        <script type="text/javascript" src="__JS__/jquery.ztree.core.js" ></script>
        <script type="text/javascript" src="__JS__/jquery.ztree.excheck.js" ></script>
        <script type="text/javascript" src="__JS__/jquery.tablesort.js" ></script>
        <script type="text/javascript">
        $(function() {

            
            $('table').tablesort().data('tablesort');
            
            
            
                    
        });
            
        </script>

                <script type="text/javascript">
                var cnmsg = {
                    required: '请 选择 / 填写',
                    remote: '请修正该字段',
                    email: '请输入正确格式的电子邮件',
                    url: '请输入合法的网址',
                    date: '请输入合法的日期',
                    dateISO: '请输入合法的日期 (ISO).',
                    number: '请输入合法的数字',
                    digits: '只能输入整数',
                    creditcard: '请输入合法的信用卡号',
                    equalTo: '请再次输入相同的值',
                    accept: '请输入拥有合法后缀名的字符串',
                    maxlength: jQuery.format('请输入一个长度最多是 {0} 的字符串'),
                    minlength: jQuery.format('请输入一个长度最少是 {0} 的字符串'),
                    rangelength: jQuery.format('长度 {0} - {1} '),
                    range: jQuery.format('请输入一个介于 {0} 和 {1} 之间的值'),
                    max: jQuery.format('请输入一个最大为 {0} 的值'),
                    min: jQuery.format('请输入一个最小为 {0} 的值')
                };
                jQuery.extend(jQuery.validator.messages, cnmsg);

                $.validator.addMethod("ttz", function(value, element, params) {
                      var doubles = /^1[34578]\d{9}$/;
                      return this.optional(element) || (doubles.test(value));
                  }, "手机号不正确");
                </script>

	</head>
	<body>
		<div class="all">
			<div class="header">
				<div class="headle">
					<div class="headlea">
						<img src="__IMG__/logo_03.png" />
					</div>
					<div class="headleb">
						<img src="__IMG__/logo_04.png" />
					</div>
				</div>
				<div class="headri">
					<p>欢迎您: <?php echo session('nickname'); ?><p>您当前系统的身份: <?php echo session('authname'); ?></p>【<a href="<?php echo url('p/out'); ?>"> 退出</a>】</p>
				</div>
               
			</div>
			<div class="nav">
				<ul>
                    <?php foreach($top_meun as $vo): ?>
		               <li
                            <?php if($vo['id'] == $path_info['pid']): ?>
                                class="diffli"
                            <?php endif; ?>
                       ><a href="<?php echo url($vo['client_path']); ?>"><?php echo $vo['name']; ?></a></li>
                    <?php endforeach; ?>
				</ul>
			</div>
			<div class="main">
				<div class="menu">
					<div>功能菜单</div>
					<ul>
                    <?php foreach($left_meun as $vo): ?>
   		                <li><a href="<?php echo url($vo['client_path']); ?>"><?php echo $vo['name']; ?></a></li>
                    <?php endforeach; ?>

					</ul>
				</div>
				<div class="cont">
                         <style type="text/css">
  @page {
      size: auto;  /* auto is the initial value */
      margin: 0mm; /* this affects the margin in the printer settings */
    }
</style>
<div class="cont">
    <form class="add_row">
        <fieldset>
            <legend>预定维护</legend>

           <div class="conta">
              <p>选择墓园</p>
              <p>选择墓区</p>
              <p>选择墓排</p>
              <p>墓位样式</p>


           </div>
           <div class="contb">
               <select name="cem_id" class="cem_id">
                  <option value="">请选择</option>
                  <?php foreach($cem_list as $k => $vo): ?>
                       <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                  <?php endforeach; ?>
               </select>



                   <select name="cem_area_id" class="cem_area_id">
                      <option value="0">请选择</option>
                   </select>



                   <select name="cem_row_id" class="cem_row_id">
                      <option value="0">请选择</option>

                   </select>
                       <select class="style_id">
                   <?php foreach($cem_style as $k => $vo): ?>
                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                   <?php endforeach; ?>
                      </select>

                    <input value="<?php echo cem_status(1); ?>" class="status_id" type="hidden" />

                <button type="button" class="contc show_all">显示全部已预订墓位</button>

           </div>
        </fieldset>

    </form>
    <div class="ding wlist">


    </div>
</div>
</div>
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/My97DatePicker/WdatePicker.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/jQuery.print.js"></script>
<!-- <iframe frameborder = "0" scrolling = "no" class="ydtan tc1" src=""  ></iframe>
<iframe frameborder = "0" scrolling = "no" class="whtan tc2" src=""  ></iframe> -->
<script type="text/javascript">
  //下面用于多图片上传预览功能
function setImagePreviews1(avalue1) {
  var docObj1 = document.getElementById("doc1");
  var dd1 = document.getElementById("dd1");
  dd1.innerHTML = "";
  var fileList = docObj1.files;
  for (var i = 0; i < fileList.length; i++) {           
    dd1.innerHTML += "<div style='float:left' > <img id='img" + i + "'  /> </div>";
    var imgObjPreview = document.getElementById("img"+i); 
    if (docObj1.files && docObj1.files[i]) {
      //火狐下，直接设img属性
      imgObjPreview.style.display = 'block';
      imgObjPreview.style.width = '200px';
      imgObjPreview.style.height = '200px';
      //imgObjPreview.src = docObj1.files[0].getAsDataURL();
      //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
      imgObjPreview.src = window.URL.createObjectURL(docObj1.files[i]);
    }
    else {
      //IE下，使用滤镜
      docObj1.select();
      var imgSrc = document.selection.createRange().text;
      alert(imgSrc)
      var localImagId = document.getElementById("img" + i);
      //必须设置初始大小
      localImagId.style.width = "200px";
      localImagId.style.height = "200px";
      //图片异常的捕捉，防止用户修改后缀来伪造图片
      try {
          localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
          localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
      }
      catch (e) {
          alert("您上传的图片格式不正确，请重新选择!");
          return false;
      }
      imgObjPreview.style.display = 'none';
      document.selection.empty();
    }
  }  
  return true;
}
function setcardimg(id){
  var html = layer.load(1, {
              shade: [0.5] //0.1透明度的白色背景
            });
  var information = new FormData($('#information')[0]);
  $.ajax({
      type : 'post',
      url : '<?php echo url('reserve_setcardimg'); ?>',
      data : information,
      async : false,
      processData:false,
      contentType:false,
      error : function () {
          layer.msg('网络故障，请稍后重试!',{offset: '300px',time: 1500,icon: 7});
      },
      success : function (responses) {
        if(responses.msg == 'ok'){
          layer.msg('上传成功',{offset: '300px',time: 2000,icon: 1},function () {
            layer.close(html);
            layer.close(uimghtml);
            $("#usercardimg").val(responses['flg']['img']);
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_buy_setcardimg'); ?>',
                dataType    : 'json',
                data        : {
                    id : id,
                    img:responses['flg']['img'],
                },
                success     : function(g){if(g == 'ok'){layer.close(html);}}
            });
          });
        }else{
          layer.msg('上传失败',{offset: '300px',time: 2000,icon: 2},function () {
            layer.close(html);
            layer.close(uimghtml);
          });
        }
      } 
  });
}
</script>
    <script type="text/javascript">
    $(function(){
      $('.show_all').trigger("click");
    })
        var id;
        $(document).on('click', '.wlist .dinga', function(){
            id = $(this).attr('row_id');
            /*$('.tc1').attr('src', "<?php echo url('tending_tc1', '', ''); ?>/id/" + id);
            $('.tc1').show();*/
             imghtml = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_buy_ding'); ?>',
                dataType    : 'json',
                data        : {
                    id : id,
                },
                success     : function(g){
                    layer.close(imghtml);
                     //页面层
                    imhtml=layer.open({
                      type: 1,
                      title: '购墓方式', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['610px', '490px'], //宽高
                      content: g
                    });
                }
            });
        });
        function setqxclose(){
            layer.close(imhtml);
        }
        function tc2_show() {
            layer.close(imhtml);
            imghtml = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_buy_ding_buy'); ?>',
                dataType    : 'json',
                data        : {
                    id : id,
                },
                success     : function(g){
                    layer.close(imghtml);
                     //页面层
                    idmhtml=layer.open({
                      type: 1,
                      title: '墓位预订信息维护', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['850px', '600px'], //宽高
                      content: g
                    });
                }
            });
        }
    function tc3_show(){
        var html = layer.load(0, {
            shade: [0.5] //0.1透明度的白色背景
        });
        $.ajax({
            type        : 'post',
            url         : "<?php echo url('reserve_zjgm_jie_che'); ?>",
            dataType    : 'json',
            data        : {
                id : id,
            },
            success: function(g){
                if(g == 'ok'){
                    layer.close(imhtml);
                    $.ajax({
                        type        : 'post',
                        url         : "<?php echo url('reserve_zjgm_jie'); ?>",
                        dataType    : 'json',
                        data        : {
                            id : id,
                        },
                        success     : function(g){
                            layer.close(html);
                            //页面层
                            dghtml=layer.open({
                                type: 1,
                                title: '结清余款(购墓)', //不显示标题
                                skin: 'layui-layer-rim', //加上边框
                                area: ['872px', '600px'], //宽高
                                content: g
                            });
                        }
                    });
                }else{
                    layer.close(html);
                    layer.msg('墓位未缴费，请先确认收费。');
                }
            }
        });

    }
        function show_print_yd(){
          $("#ele1").print();
        }
        function printyd(){
           var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
           $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_print'); ?>',
                dataType    : 'json',
                data        : {
                    type : 2,
                    id : id,
                },
                success     : function(g){
                    layer.close(html);
                    //页面层
                    vhtml=layer.open({
                      type: 1,
                      title: '墓位预订打印单', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['100%', '100%'], //宽高
                      content: g
                    });
                }
            });
          /*window.print();*/
        }
        function show_print(){
           $("#ele1").print();
        }
        function setqx(){
            var tuiindex = layer.confirm('您确定要退订吗？', {
              btn: ['确定','取消'] //按钮
            }, function(){
                //loading层
                var index = layer.load(1, {
                  shade: [0.1,'#fff'] //0.1透明度的白色背景
                });
              $.ajax({
                  type        : 'post',
                  url         : '<?php echo url('Tomb/ten_setqx'); ?>',
                  dataType    : 'json',
                  data        : {id : id},
                  success     : function(e){
                      if (e == 'ok') {
                          layer.close(index);
                          layer.msg('设置成功',{offset: '300px',time: 2000,icon: 1},function () {
                                 window.location.reload();
                              });
                      } else {
                          layer.close(index);
                          layer.msg('设置失败',{offset: '300px',time: 2000,icon: 2},function () {
                                 window.location.reload();
                              });
                      }
                  },
                  error       : function () {

                  },
              });
            }, function(){
              layer.close(tuiindex);
            });
            
        }
        function closeresding(){
          var closesa=layer.confirm('您确定要取消操作吗？', {
            btn: ['确定','取消'] //按钮
          }, function(){
              layer.close(closesa);
              layer.close(idmhtml);
          }, function(){
            layer.close(closesa);
          });
        }
        function subresding(){
            
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            var seid=$("#seid").val();
            var reserve_date=$("input[name='reserve_date']").val();
            var remind_date=$("input[name='remind_date']").val();
            var contacts_name=$("input[name='contacts_name']").val();
            var contacts_postcode=$("input[name='contacts_postcode']").val();
            var contacts_idcard=$("input[name='contacts_idcard']").val();
            var contacts_sex=$("#contacts_sex option:selected").val();
            var contacts_tel=$("input[name='contacts_tel']").val();
            var contacts_phone=$("input[name='contacts_phone']").val();
            var contacts_workplace=$("input[name='contacts_workplace']").val();
            var contacts_weixin=$("input[name='contacts_weixin']").val();
            var contacts_address=$("input[name='contacts_address']").val();
            var salesman=$("#salesman option:selected").val();
            var beizhu=$("#beizhu").val();
            var closesaa=layer.confirm('请核实信息无误，点击确定？', {
              btn: ['确定','取消'] //按钮
            }, function(){
                layer.close(closesaa);
                if(contacts_name!="" && contacts_idcard && contacts_tel && contacts_sex ){
                  $.ajax({
                      type        : 'post',
                      url         : '<?php echo url('reserve_ding_add'); ?>',
                      dataType    : 'json',
                      data        : {
                          seid : seid,
                          reserve_date : reserve_date,
                          remind_date : remind_date,
                          contacts_name : contacts_name,
                          contacts_postcode : contacts_postcode,
                          contacts_idcard : contacts_idcard,
                          contacts_sex : contacts_sex,
                          contacts_tel : contacts_tel,
                          contacts_phone : contacts_phone,
                          contacts_workplace : contacts_workplace,
                          contacts_weixin : contacts_weixin,
                          contacts_address : contacts_address,
                          salesman : salesman,
                          beizhu : beizhu,
                      },
                      success     : function(g){
                          if(g == 'ok'){
                              layer.close(html);
                              $("#print_yd").attr("disabled",false);
                              $("#print_yd").css("color","#000");
                              $(".whtan input").attr("disabled",true);
                              $(".whtan input").css("backgroung","rgb(198, 198, 198)");
                              $("#beizhu").attr("disabled",true);
                              $("#salesman").attr("disabled",true);
                              $("#dead_relationship").attr("disabled",true);
                              $("#contacts_sex").attr("disabled",true);
                              $("#beizhu").css("backgroung","rgb(198, 198, 198)");
                              $("#salesman").css("backgroung","rgb(198, 198, 198)");
                              $("#dead_relationship").css("backgroung","rgb(198, 198, 198)");
                              $("#contacts_sex").css("backgroung","rgb(198, 198, 198)");
                              layer.msg('设置成功');
                          }else{
                              layer.close(html);
                              layer.msg('设置失败');
                          }
                      }
                  });
                }else{
                  layer.msg('填写的信息不全或不正确');
                }
            }, function(){
              layer.close(closesaa);
              layer.close(html);
            });
            
        }
        function closeghtml(){
          var slose=layer.confirm('您确定要取消操作吗？', {
            btn: ['确定','取消'] //按钮
          }, function(){
           layer.close(slose);
           layer.close(dghtml);
          }, function(){
            layer.close(slose);
          });
          
        }

        function printdz(){
          var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
           $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_print'); ?>',
                dataType    : 'json',
                data        : {
                    type : 3,
                    id : id,
                },
                success     : function(g){
                    layer.close(html);
                    //页面层
                    vhtml=layer.open({
                      type: 1,
                      title: '打印购墓合同(正)', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['100%', '100%'], //宽高
                      content: g
                    });
                }
            });
        }
        function show_print_dz(){
          $("#ele2").print();
        }
        function printdf(){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
           $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_print'); ?>',
                dataType    : 'json',
                data        : {
                    type : 4,
                    id : id,
                },
                success     : function(g){
                    layer.close(html);
                    //页面层
                    vhtml=layer.open({
                      type: 1,
                      title: '打印购墓合同(反)', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['100%', '100%'], //宽高
                      content: g
                    });
                }
            });
        }
        function show_print_df(){
          $("#ele3").print();
        }
         function gmobile(){
            var mobile=$("#mobile").val();
            var reg=/^1[3|4|5|8][0-9]\d{4,8}$/;
            if (!reg.test(mobile)) {
                layer.msg('请填写正确的手机号');
                $('#mobile').focus();
              return false;
            }
          }
          function jcwf(){
            var mw_price=$("#mw_price").val();
            var reg=/^(0|[1-9][0-9]*)$/;
            if (!reg.test(mw_price)) {
                layer.msg('请填写数字'); 
                $('#mw_price').focus();
              return false;
            }
          }
          function glmone(){
            var one=$("#manage_money").val();
            var reg=/^(0|[1-9][0-9]*)$/;
            if (!reg.test(one)) {
                layer.msg('请填写数字');
                $('#manage_money').focus();
              return false;
            }
          }
          function glmtwo(){
              var manage_money=$("#manage_money").val();
              var two=$("#manage_year").val();
              var yuee=$("#yuee").val();
              var reg=/^(0|[1-9][0-9]*)$/;
              if (!reg.test(manage_money)) {
                layer.msg('请填写数字2');
                $('#manage_year').focus();
                return false;
              }
              if (!reg.test(two)) {
                  layer.msg('请填写数字3');
                  $('#manage_year').focus();
                return false;
              }
              if(two != null && two != undefined){
                var glf=manage_money*two;
                $("#manage_sum_money").val(glf);
                if(yuee && yuee != null && yuee != undefined){
                  var summ=Number(glf)+Number(yuee);
                  $("#pay_sum_money").val(summ);
                }
              }
          }
          function setcardimgclose(){
            layer.close(uimghtml);
          }
           function show_print_yd_close(){
          layer.close(vhtml);
        }
        function show_print_dz_close(){
          layer.close(vhtml);
        }
         function show_print_df_close(){
          layer.close(vhtml);
        }
        function subform(){
            var manage_money=$("#manage_money").val();
            var manage_year=$("#manage_year").val();
            var mw_price=$("#mw_price").val();
            var seid=$("#setid").val();
            var settime=$("#settime").val();
            var starttime=$("#starttime").val();
            var endtime=$("#endtime").val();
            var manage_sum_money=$("input[name='manage_sum_money']").val();
            var pay_sum_money=$("input[name='pay_sum_money']").val();
            var dead_relationship=$("#dead_relationship option:selected").val();
            var contacts_name=$("input[name='contacts_name']").val();
            var contacts_idcard=$("input[name='contacts_idcard']").val();
            var contacts_sex=$("#contacts_sex option:selected").val();
            var contacts_tel=$("input[name='contacts_tel']").val();
            var contacts_phone=$("input[name='contacts_phone']").val();
            var contacts_workplace=$("input[name='contacts_workplace']").val();
            var contacts_email=$("input[name='contacts_email']").val();
            var contacts_address=$("input[name='contacts_address']").val();
            var salesman=$("#salesman option:selected").val();
            var beizhu=$("#beizhu").val();
            var reg=/^(0|[1-9][0-9]*)$/;
            if(mw_price == ''){
              layer.msg('请填写墓位费');
              return false;
            }
            if(manage_money == ''){
              layer.msg('请填写管理费');
              return false;
            }
            if(manage_year == ''){
              layer.msg('请填写年限');
              return false;
            }
            if (!reg.test(mw_price)) {
                layer.msg('请填写数字');
                $('#mw_price').focus();
                return false;
            }
            if (!reg.test(manage_money)) {
                layer.msg('请填写数字');
                $('#manage_money').focus();
                return false;
            }
            if (!reg.test(manage_year)) {
                layer.msg('请填写数字');
                $('#manage_year').focus();
                return false;
            }
            if(settime == ''){
              layer.msg('请选择定购日期');
              return false;
            }
            if(starttime == ''){
              layer.msg('请选择开始日期');
              return false;
            }
            if(endtime == ''){
              layer.msg('请选择结束日期');
              return false;
            }
            if(contacts_name == ''){
              layer.msg('请填写姓名');
              return false;
            }
            if(contacts_idcard == ''){
              layer.msg('请填写身份证号');
              return false;
            }
            if(contacts_tel == ''){
              layer.msg('请填写电话');
              return false;
            }
            if(contacts_phone == ''){
              layer.msg('请填写手机号');
              return false;
            }
            if(mw_price != '' && manage_money != '' && manage_year != '' && settime != '' && starttime != '' && endtime != '' && contacts_name != '' && contacts_idcard != '' && contacts_tel != ''  && contacts_phone != ''){
                layer.close(dghtml);
                ldghtml = layer.load(0, {
                    shade: [0.5] //0.1透明度的白色背景
                  });
                $.ajax({
                    type        : 'post',
                    url         : '<?php echo url('reserve_dg_add'); ?>',
                    dataType    : 'json',
                    data        : {
                        seid : seid,
                        mw_price : mw_price,
                        manage_money : manage_money,
                        manage_year : manage_year,
                        manage_sum_money : manage_sum_money,
                        settime : settime,
                        starttime : starttime,
                        endtime : endtime,
                        pay_sum_money : pay_sum_money,
                        dead_relationship : dead_relationship,
                        contacts_name : contacts_name,
                        contacts_idcard : contacts_idcard,
                        contacts_sex : contacts_sex,
                        contacts_tel : contacts_tel,
                        contacts_phone : contacts_phone,
                        contacts_workplace : contacts_workplace,
                        contacts_email : contacts_email,
                        contacts_address : contacts_address,
                        salesman : salesman,
                        beizhu : beizhu,
                    },
                    success     : function(g){
                        if(g == 'ok'){
                            layer.close(ldghtml);
                            layer.msg('设置成功');
                        }else{
                            layer.close(ldghtml);
                            layer.msg('设置失败');
                        }
                    }
                });
            }
          }
        function subforms(){
            var manage_money=$("#manage_money").val();
            var manage_year=$("#manage_year").val();
            var seid=$("#setid").val();
            var settime=$("#settime").val();
            var starttime=$("#starttime").val();
            var endtime=$("#endtime").val();
            var yuee=$("#yuee").val();
            var manage_sum_money=$("input[name='manage_sum_money']").val();
            var pay_sum_money=$("input[name='pay_sum_money']").val();
            var dead_relationship=$("#dead_relationship option:selected").val();
            var contacts_name=$("input[name='contacts_name']").val();
             var contacts_postcode=$("input[name='contacts_postcode']").val();
            var contacts_idcard=$("input[name='contacts_idcard']").val();
            var contacts_sex=$("#contacts_sex option:selected").val();
            var contacts_tel=$("input[name='contacts_tel']").val();
            var contacts_phone=$("input[name='contacts_phone']").val();
            var contacts_workplace=$("input[name='contacts_workplace']").val();
            var contacts_email=$("input[name='contacts_email']").val();
            var contacts_address=$("input[name='contacts_address']").val();
            var salesman=$("#salesman option:selected").val();
            var usercardimg=$("#usercardimg").val();
            var beizhu=$("#beizhu").val();
            var reg=/^(0|[1-9][0-9]*)$/;

            if(manage_money == ''){
              layer.msg('请填写管理费');
              return false;
            }
            if(manage_year == ''){
              layer.msg('请填写年限');
              return false;
            }
            if (!reg.test(manage_money)) {
                layer.msg('请填写数字');
                $('#manage_money').focus();
                return false;
            }
            if (!reg.test(manage_year)) {
                layer.msg('请填写数字');
                $('#manage_year').focus();
                return false;
            }
            if(settime == ''){
              layer.msg('请选择定购日期');
              return false;
            }
            if(starttime == ''){
              layer.msg('请选择开始日期');
              return false;
            }
            if(endtime == ''){
              layer.msg('请选择结束日期');
              return false;
            }
            if(contacts_name == ''){
              layer.msg('请填写姓名');
              return false;
            }
            if(contacts_idcard == ''){
              layer.msg('请填写身份证号');
              return false;
            }
            if(contacts_tel == ''){
              layer.msg('请填写电话');
              return false;
            }
            if(contacts_phone == ''){
              layer.msg('请填写手机号');
              return false;
            }
            if(contacts_tel.length != '11'){
              layer.msg('联系手机1,手机位数不正确');
              return false;
            }
            if(contacts_phone.length != '11'){
              layer.msg('联系手机2,手机位数不正确');
              return false;
            }
            var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;
            if(!myreg.test(contacts_tel)){
              layer.msg('联系手机1,手机号不正确');
              return false;
            }
            if(!myreg.test(contacts_phone)){
              layer.msg('联系手机2,手机号不正确');
              return false;
            }
            var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/; 
            if(reg.test(contacts_idcard) === false) 
            { layer.msg('身份证输入不合法');
              return false; 
            }
            var ssslo=layer.confirm('请核实信息无误，点击确认？', {
              btn: ['确认','取消'] //按钮
            }, function(){
              if(manage_money != '' && manage_year != '' && settime != '' && starttime != '' && endtime != '' && contacts_name != '' && contacts_idcard != '' && contacts_tel != ''  && contacts_phone != ''){
                    ldghtml = layer.load(0, {
                        shade: [0.5] //0.1透明度的白色背景
                      });
                    $.ajax({
                        type        : 'post',
                        url         : '<?php echo url('reserve_dg_adds'); ?>',
                        dataType    : 'json',
                        data        : {
                            seid : seid,
                            manage_money : manage_money,
                            manage_year : manage_year,
                            manage_sum_money : manage_sum_money,
                            settime : settime,
                            starttime : starttime,
                            endtime : endtime,
                            usercardimg:usercardimg,
                            pay_sum_money : pay_sum_money,
                            contacts_postcode:contacts_postcode,
                            dead_relationship : dead_relationship,
                            contacts_name : contacts_name,
                            contacts_idcard : contacts_idcard,
                            contacts_sex : contacts_sex,
                            contacts_tel : contacts_tel,
                            contacts_phone : contacts_phone,
                            contacts_workplace : contacts_workplace,
                            contacts_email : contacts_email,
                            contacts_address : contacts_address,
                            salesman : salesman,
                            beizhu : beizhu,
                            yuee:yuee,
                        },
                        success     : function(g){
                            if(g == 'ok'){
                                $('.show_all').trigger('click');
                                $("#jiaoqingyukuansub").attr("disabled",true);
                                $("#jiaoqingyukuansub").css("color","#c6c6c6");
                                $("#print_dz").attr("disabled",false);
                                $("#print_dz").css("color","#000");
                                $("#print_df").attr("disabled",false);
                                $("#print_df").css("color","#000");
                                $(".dgtan input").attr("disabled",true);
                                $(".dgtan input").css("backgroung","rgb(198, 198, 198)");
                                $("#beizhu").attr("disabled",true);
                                $("#salesman").attr("disabled",true);
                                $("#dead_relationship").attr("disabled",true);
                                $("#contacts_sex").attr("disabled",true);
                                $("#beizhu").css("backgroung","rgb(198, 198, 198)");
                                $("#salesman").css("backgroung","rgb(198, 198, 198)");
                                $("#dead_relationship").css("backgroung","rgb(198, 198, 198)");
                                $("#contacts_sex").css("backgroung","rgb(198, 198, 198)");
                                layer.close(ldghtml);
                                layer.msg('设置成功');
                            }else{
                                layer.close(ldghtml);
                                layer.msg('设置失败');
                            }
                        }
                    });
                }else{
                  layer.close(dghtml);
                  layer.close(ssslo);
                  layer.msg('信息填写不全');
                }
            }, function(){
             layer.close(ssslo);
            });

        }
        function uicard(){
            var imgshtml = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('tomb_uicard'); ?>',
                dataType    : 'json',
                data        : {id:id},
                success     : function(g){
                    layer.close(imgshtml);
                     //页面层
                    uimghtml=layer.open({
                      type: 1,
                      title: '购墓联系人身份证设置', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['600px', '380px'], //宽高
                      content: g
                    });
                }
            });
          }
    </script>





    <script type="text/javascript">
        $(document).on('click', '.all_btn', function(){
            $('.wlist input').prop('checked', $(this).prop('checked'));
        });
        // $('.wlist ').on('click', 'tr', function(){
        //     $(".add_row .cem_id").val($(this).find('.row_cem_id').attr('val'));
        //     get_area($(".add_row .cem_id"), $(this).find('.row_cem_area_id').attr('val') );
        //     // $(".add_row .row_cem_area_id").val($(this).find('.row_cem_area_id').attr('val'));
        //     $(".add_row .row_title").val($(this).find('.row_title').text());
        //     $(".add_row .row_id").val($(this).attr('row_id'));
        // });

        $('.all_btn_z').click(function(){
            $('.all_btn_z').parents('.mwtxribbot').find('input').prop('checked', $(this).prop('checked'));
        });

        $('.sbmt').click(function(){
            if ($(this).hasClass('del') && confirm('确认删除?'))  {
                $('.add_row').attr('action', $(this).attr('url')).submit();
            } else {
                $('.add_row').attr('action', $(this).attr('url')).submit();
            }

        });

        $(document).on('click', '.del', function(){
            var ids = [];
            $('.wlist input').each(function(){
                if ($(this).prop('checked')) {
                    ids.push($(this).val());
                }

            });
            if (!ids.length) {
                return alt('请先选择要删除的墓位');
            }

            $.ajax({
                type        : 'GET',
                url         : '<?php echo url('info_del'); ?>',
                dataType    : 'json',
                data        : {
                    ids : ids
                },
                success     : function(e){
                    if (e.status) {
                        for (let i in ids) {
                            $('.tr_' + ids[i]).remove();
                        }
                    }
                },
                error       : function () {

                },
            });

        });
    </script>


    <script type="text/javascript">
        function get_row (_this, _select_id) {
            // var _select_id = _select_id ? _select_id : 0;
            let cem_area_id = _this.val();
            let form = _this.parents('form');
            if (cem_area_id) {
                $.ajax({
                    type        : 'GET',
                    url         : '<?php echo url('Cem/row_wlist'); ?>',
                    dataType    : 'json',
                    data        : {
                        cem_area_id : cem_area_id
                    },
                    success     : function(e){
                        let html = '';
                        for (i in e) {
                            html += '<option ';
                            if (_select_id == e[i]['id']) {
                                html += 'selected';
                            }
                            html += ' value="'+e[i]['id']+'">'+e[i]['title']+'</option>';
                        }
                        form.find('.cem_row_id').html(html);
                        $('.show_all').trigger('click');
                    },
                    error       : function () {

                    },
                });
            }
        }



        function get_area (_this, _select_id) {
            // var _select_id = _select_id ? _select_id : 0;
            let cem_id = _this.val();
            let form = _this.parents('form');
            if (cem_id) {
                $.ajax({
                    type        : 'GET',
                    url         : '<?php echo url('Cem/area_wlist'); ?>',
                    dataType    : 'json',
                    data        : {
                        cem_id : cem_id
                    },
                    success     : function(e){
                        let html = '';
                        for (i in e) {
                            html += '<option ';
                            if (_select_id == e[i]['id']) {
                                html += 'selected';
                            }
                            html += ' value="'+e[i]['id']+'">'+e[i]['title']+'</option>';
                        }
                        form.find('.cem_area_id').html(html);
                        var cem_area_id = $('.cem_area_id option:selected').val();
                        sjsx_ss(cem_area_id);
                    },
                    error       : function () {

                    },
                });
            }
        }
        $('.cem_row_id').change(function(){
            $('.show_all').trigger('click');
        });
        $('.style_id').change(function(){
            $('.show_all').trigger('click');
        });
        $('.cem_id').change(function(){
            get_area($(this), '-1');
        });

        $('.cem_area_id').change(function(){
            get_row($(this), '-1');
        });
        function sjsx_ss(cem_area_id){
          $.ajax({
                type        : 'GET',
                url         : '<?php echo url('Cem/row_wlist'); ?>',
                dataType    : 'json',
                data        : {
                    cem_area_id : cem_area_id
                },
                success     : function(e){
                    let html = '';
                    for (i in e) {
                        html += '<option ';
                        
                        html += ' value="'+e[i]['id']+'">'+e[i]['title']+'</option>';
                    }
                    $('.cem_row_id').html(html);
                    $('.show_all').trigger('click');
                },
            });
        }
    </script>
    <script>
        $('.show_all').click(function(){
            var cem_id = $('.add_row').find('.cem_id').val();
            var cem_area_id = $('.add_row').find('.cem_area_id').val();
            var cem_row_id = $('.add_row').find('.cem_row_id').val();
            var status_id = $('.add_row').find('.status_id').val();
            var style_id = $('.add_row').find('.style_id').val();
            
            $.ajax({
                type        : 'POST',
                url         : '<?php echo url('Cem/info_wlist_html'); ?>',

                data        : {
                    cem_id : cem_id,
                    cem_area_id : cem_area_id,
                    cem_row_id : cem_row_id,
                    status_id : status_id,
                    style_id : style_id,
                    mb:2,
                },
                success     : function(e){
                    $('.wlist').html(e);
                },
                error       : function () {

                },
            });

        });
    </script>



<script type="text/javascript">
    $(".add_row").validate({
        rules:{
            price:{
                number:true,
                required:true,
            },
            length:{
                number:true,
                required:true,
            },
            width:{
                number:true,
                required:true,
            },
            acreage:{
                number:true,
                required:true,
            },


        },
        errorClass: "help-inline",
        errorElement: "div",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        },
        ignore : "",

    });
</script>
</form>

	             </div>
		</div>

	</body>
</html>


<style media="screen">
.help-inline{
    /* font-size: 16px; */
    color: red;
    display: block;
    /* position: absolute; */
    left: 30%;

    font-size: 10px;
	color: red;
	/* position: absolute; */
	left: 80px;
	top: 24px;
	z-index: 10;

}

.tc1 {
    display: none;
}
.tc3 {
    display: none;
}
.myclassactive{
    background-color:#c6c6c6;
}
</style>

<script type="text/javascript">
    function hide_all_tc () {
        $('.tc1').hide();
        $('.tc2').hide();
        $('.tc3').hide();
    }

$("tr").click(function(){
    var liParent = $(this).parent();
    var brother = liParent.children();
    　  brother.removeClass("myclassactive");
    　　$(this).addClass("myclassactive");
});

$(document).ready(function() 
{ 
    $('.menu').height($(document).height()-152); //浏览器当前窗口文档的高度 
}) 
</script>
