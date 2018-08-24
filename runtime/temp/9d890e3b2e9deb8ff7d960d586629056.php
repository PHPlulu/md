<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"F:\phpstudy\WWW\md\public/../application/index\view\tomb\zang.html";i:1534491357;s:63:"F:\phpstudy\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
    .maintba .maintd{ height:400px;}
</style>
<div class="cont">
    <form class="add_row">
        <fieldset>
            <legend>已购墓位管理</legend>

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
                
                <button type="button" class="contc show_all">显示全部</button>

           </div>
        </fieldset>

    </form>
    <div class="ding wlist">


    </div>
</div>
</div>
<!-- <iframe frameborder = "0" scrolling = "no" class="tanc tc1" src=""  ></iframe>
<iframe frameborder = "0" scrolling = "no" class="bwtan tc2" src=""  ></iframe> -->
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/My97DatePicker/WdatePicker.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/jQuery.print.js"></script>
<script>
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
function setcardimg(){
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
            $("#usercardimg").val(responses['data']['img']);
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
function setcardimgclose() {
    layer.close(uimghtml);
}
</script>
    <script type="text/javascript">
        var id;
        $(document).on('click', '.wlist .dinga', function(){
            id = $(this).attr('row_id');
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('reserve_buyed'); ?>',
                dataType    : 'json',
                data        : {
                    id : id,
                    type:2,
                },
                success     : function(g){
                    layer.close(html);
                     //页面层
                    zfxhtml=layer.open({
                      type: 1,
                      title: '墓位定购信息维护', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['800px', '670px'], //宽高
                      content: g
                    });
                }
            });
        });
        function updlz(eid){
          var updlzh = layer.load(1, {
            shade: [0.1,'#fff'] //0.1透明度的白色背景
          });
          $(".row_lzxxarr").remove();
          $.ajax({
              type        : 'post',
              url         : '<?php echo url('show_updlz'); ?>',
              dataType    : 'json',
              data        : {
                  id : eid,
              },
              success     : function(g){
                layer.close(updlzh);
                $("#zongshusum").html($("#sumnumber").val());
                $(".lzxxarr").append(g);
              }
          });
        }
        function closedgxx(){
          layer.close(zfxhtml);
        }
        function tuiding(){
            var tuiindex = layer.confirm('您确定要退订吗？', {
              btn: ['确定','取消'] //按钮
            }, function(){
                //loading层
                var index = layer.load(1, {
                    shade: [0.1,'#fff'] //0.1透明度的白色背景
                  });
                $.ajax({
                    type        : 'post',
                    url         : '<?php echo url('tuiding'); ?>',
                    dataType    : 'json',
                    data        : {id : id},
                    success     : function(e){
                        if (e == 'ok') {
                            layer.close(index);
                            layer.close(zfxhtml);
                            layer.msg('设置成功',{offset: '300px',time: 2000,icon: 1},function () {
                                   window.location.reload();
                                });
                        } else {
                            layer.close(index);
                            layer.close(zfxhtml);
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
        function subbeizhu(){
            //loading层
            var index = layer.load(1, {
                shade: [0.1,'#fff'] //0.1透明度的白色背景
              });
            var beizhu=$("#beizhu").val();
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('set_beizhu'); ?>',
                dataType    : 'json',
                data        : {id : id,beizhu:beizhu},
                success     : function(e){
                    if (e == 'ok') {
                        layer.close(index);
                        layer.msg('设置成功');
                    } else {
                        layer.close(index);
                        layer.msg('设置失败');
                    }
                },
                error       : function () {

                },
            });
        }
        function huanyuan(){
            //loading层
            var index = layer.load(1, {
                shade: [0.1,'#fff'] //0.1透明度的白色背景
              });
            var beizhu=$("#beizhu").val();
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('set_huanyuan'); ?>',
                dataType    : 'json',
                data        : {id : id},
                success     : function(e){
                   if (e == 'ok') {
                        layer.close(index);
                        layer.close(zfxhtml);
                        layer.msg('设置成功',{offset: '300px',time: 2000,icon: 1},function () {
                               window.location.reload();
                            });
                    } else {
                        layer.close(index);
                        layer.close(zfxhtml);
                        layer.msg('设置失败',{offset: '300px',time: 2000,icon: 2},function () {
                               window.location.reload();
                            });
                    }
                },
                error       : function () {

                },
            });
        }
        function printmuz(){
          var dyzuser=$('input:radio[name="dyzuser"]:checked').val(); 
          if(dyzuser){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
           $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_print'); ?>',
                dataType    : 'json',
                data        : {
                    type : 5,
                    id : id,
                    dyzuser:dyzuser,
                },
                success     : function(g){
                    layer.close(html);
                    //页面层
                    vhtml=layer.open({
                      type: 1,
                      title: '打印墓位证(正)', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['100%', '100%'], //宽高
                      content: g
                    });
                    $("#ele5").css("background-image","url(__IMG__/mu_bg.png)") ;
                    $("#ele5").css({"width":"763px","height":"582px",'margin':'0 auto'}) ;
                }
            });
          }else{
              layer.msg('无墓位信息或没有选择');
          }
        }
        
        function show_print_muz(){
            $("#ele5").print();
        }
        function show_print_muf(){
            $("#ele6").print();
        }
        function show_print_ctf(){
          $("#ele13").print();
        }

        function printmuf(){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
           $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_print'); ?>',
                dataType    : 'json',
                data        : {
                    type : 6,
                    id : id,
                },
                success     : function(g){
                    layer.close(html);
                    //页面层
                    vhtml=layer.open({
                      type: 1,
                      title: '打印墓位证(反)', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['100%', '100%'], //宽高
                      content: g
                    });
                    $("#ele6").css("background-image","url(__IMG__/mw_bg_f.png)") ;
                    $("#ele6").css({"width":"419px","height":"580px",'margin':'0 auto'}) ;
                }
            });
        }
        function print_bw_cz(){
          var zanguser=$('input:radio[name="zanguser"]:checked').val(); 
          if(zanguser){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
           $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_print'); ?>',
                dataType    : 'json',
                data        : {
                    type : 12,
                    id : id,
                    zanguser:zanguser,
                },
                success     : function(g){
                    layer.close(html);
                    //页面层
                    vhtml=layer.open({
                      type: 1,
                      title: '打印传统碑文登记表(正)', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['100%', '100%'], //宽高
                      content: g
                    });
                }
            });
          }else{
              layer.msg('无打印信息或没有选择');
          }
        }
        function print_bw_cf(){
          var zanguser=$('input:radio[name="zanguser"]:checked').val(); 
          if(zanguser){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
           $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_print'); ?>',
                dataType    : 'json',
                data        : {
                    type : 13,
                    id : id,
                    zanguser:zanguser,
                },
                success     : function(g){
                    layer.close(html);
                    //页面层
                    vhtml=layer.open({
                      type: 1,
                      title: '打印传统碑文登记表(反)', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['100%', '100%'], //宽高
                      content: g
                    });
                }
            });
          }else{
              layer.msg('无打印信息或没有选择');
          }
        }
        function print_bw_xz(){
          var zanguser=$('input:radio[name="zanguser"]:checked').val(); 
          if(zanguser){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
           $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_print'); ?>',
                dataType    : 'json',
                data        : {
                    type : 14,
                    id : id,
                    zanguser:zanguser,
                },
                success     : function(g){
                    layer.close(html);
                    //页面层
                    vhtml=layer.open({
                      type: 1,
                      title: '打印现代碑文登记表(正)', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['100%', '100%'], //宽高
                      content: g
                    });
                }
            });
          }else{
              layer.msg('无打印信息或没有选择');
          }
        }
        function show_print_bw_cz(){
            $("#ele12").print();
        }
        function show_print_xd_z(){
            $("#ele14").print();
        }
        function print_bw_xf(){
          var zanguser=$('input:radio[name="zanguser"]:checked').val(); 
          if(zanguser){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
           $.ajax({
                type        : 'post',
                url         : '<?php echo url('select_print'); ?>',
                dataType    : 'json',
                data        : {
                    type : 15,
                    id : id,
                    zanguser:zanguser,
                },
                success     : function(g){
                    layer.close(html);
                    //页面层
                    vhtml=layer.open({
                      type: 1,
                      title: '打印现代碑文登记表(反)', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['100%', '100%'], //宽高
                      content: g
                    });
                }
            });
          }else{
              layer.msg('无打印信息或没有选择');
          }
        }
        function show_print_xd_f(){
          $("#ele15").print();
        }
        function pring_zfdj(){
            var dyzuser=$('input:radio[name="dyzuser"]:checked').val(); 
            if(dyzuser){
              var html = layer.load(0, {
                shade: [0.5] //0.1透明度的白色背景
              });
             $.ajax({
                  type        : 'post',
                  url         : '<?php echo url('select_print'); ?>',
                  dataType    : 'json',
                  data        : {
                      type : 16,
                      id : id,
                      zanguser:dyzuser,
                  },
                  success     : function(g){
                      layer.close(html);
                      //页面层
                      vhtml=layer.open({
                        type: 1,
                        title: '杂费收款项目、金额—打印票据', //不显示标题
                        skin: 'layui-layer-rim', //加上边框
                        area: ['100%', '100%'], //宽高
                        content: g
                      });
                  }
              });
            }else{
                layer.msg('无打印信息或没有选择');
            }
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
        function show_print_zfjsd(){
          $("#ele16").print();
        }
        function xjglf(){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('reserve_xjglf'); ?>',
                dataType    : 'json',
                data        : {
                    id : id,
                },
                success     : function(g){
                    layer.close(html);
                     //页面层
                    xujiaohtml=layer.open({
                      type: 1,
                      title: '续交管理费', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['875px', '425px'], //宽高
                      content: g
                    });
                }
            });
        }
        function closexujiao(){
            layer.close(xujiaohtml);
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
              var reg=/^(0|[1-9][0-9]*)$/;
              if (!reg.test(manage_money)) {
                layer.msg('请填写数字');
                $('#manage_money').focus();
                return false;
              }
              if (!reg.test(two)) {
                  layer.msg('请填写数字');
                  $('#manage_year').focus();
                return false;
              }
              if(two && two != 0 && two != null && two != undefined){
                var glf=manage_money*two;
                $("#manage_sum_money").val(glf);
              }
          }
          function setxujiao(){
            var manage_money=$("#manage_money").val();
            var manage_year=$("#manage_year").val();
            var starttime=$("input[name=starttime]").val();
            var endtime=$("input[name=endtime]").val();
            var eid=$("#xujiaoid").val();
            var reg=/^(0|[1-9][0-9]*)$/;
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
            if(starttime == ''){
                layer.msg('请选择开始年限');
                $('#starttime').focus();
                return false;
            }
            if(endtime == ''){
                layer.msg('请选择结束年限');
                $('#endtime').focus();
                return false;
            }
            if(manage_money!='' && manage_year!='' && starttime!='' && endtime!=''){
                layer.close(xujiaohtml);
                ldghtmlss = layer.load(0, {
                    shade: [0.5] //0.1透明度的白色背景
                  });
                $.ajax({
                    type        : 'post',
                    url         : '<?php echo url('reserve_xujiao_set'); ?>',
                    dataType    : 'json',
                    data        : {
                        eid : eid,
                        manage_money : manage_money,
                        manage_year : manage_year,
                        starttime : starttime,
                        endtime : endtime,
                    },
                    success     : function(g){
                        if(g == 'ok'){
                            layer.close(ldghtmlss);
                            layer.msg('续交成功');
                        }else{
                            layer.close(ldghtmlss);
                            layer.msg('续交失败');
                        }
                    }
                });
            }
          }
          function laclogzdj(){
            layer.close(xujiaohtml);
          }
          function gzdj(){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('reserve_gzdj'); ?>',
                dataType    : 'json',
                data        : {
                    id : id,
                },
                success     : function(g){
                    layer.close(html);
                     //页面层
                    xujiaohtml=layer.open({
                      type: 1,
                      title: '故者落葬登记', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['860px', '670px'], //宽高
                      content: g
                    });
                }
            });
          }
          function bwtc(){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('reserve_bwtc'); ?>',
                dataType    : 'json',
                data        : {
                    id : id,
                },
                success     : function(g){
                    layer.close(html);
                     //页面层
                    beiwencshtml=layer.open({
                      type: 1,
                      title: '碑文设置', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['832px', '610px'], //宽高
                      content: g
                    });
                }
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
                data        : {id:1},
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
          function closebeiwencs(){
              layer.close(beiwencshtml);
          }
          function setbwcs(eid){
            var kzys=$("#kzys").val();
            var bwzt=$("#bwzt").val();
            var ziti=$("#ziti").val();
            var shuajin=$("#shuajin").val();
            var tjb=$("#tjb").val();
            var cxsl=$("#cxsl").val();
            var cxsc=$("#cxsc").val();
            var cxcc=$("#cxcc").val();
            var cxxz=$("#cxxz").val();
            var dysl=$("#dysl").val();
            var dyxz=$("#dyxz").val();
            htmlbcs = layer.load(0, {
                shade: [0.5] //0.1透明度的白色背景
              });
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('tomb_setbwcs'); ?>',
                dataType    : 'json',
                data        : {
                    eid : eid,
                    kzys : kzys,
                    ziti : ziti,
                    bwzt : bwzt,
                    shuajin : shuajin,
                    tjb : tjb,
                    cxsl : cxsl,
                    cxsc : cxsc,
                    cxcc : cxcc,
                    cxxz : cxxz,
                    dysl : dysl,
                    dyxz : dyxz,
                },
                success     : function(g){
                    if(g == 'ok'){
                        layer.close(htmlbcs);
                        layer.msg('设置成功');
                    }else if(g == 'no'){
                        layer.close(htmlbcs);
                        layer.msg('设置失败');
                    }else if(g == 'msg'){
                        layer.close(htmlbcs);
                        layer.msg('该墓位还没有下葬');
                    }

                }
            });
          }
          function setgzdj(eid){
            htmlgzdj = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            var dead_name=$("#dead_name").val();
            var dead_work=$("#dead_work").val();
            var dead_sex=$("#dead_sex").val();
            var dead_address=$("#dead_address").val();
            var starttime=$("#starttime").val();
            var endtime=$("#endtime").val();
            var gstime=$("#gstime").val();
            var gdtime=$("#gdtime").val();
            var gltime=$("#gltime").val();
            var nstime=$("#nstime").val();
            var ndtime=$("#ndtime").val();
            var nltime=$("#nltime").val();
            var jrtime=$("#jrtime").val();
            var cstype=$("#cstype option:selected").val();
            var sstype=$("#sstype option:selected").val();
            var lztype=$("#lztype option:selected").val();
            var cname=$("#cname").val();
            var idcard=$("#idcard").val();
            var tel=$("#tel").val();
            var email=$("#email").val();
            var workplace=$("#workplace").val();
            var address=$("#address").val();
            var relationship=$("#relationship").val();
            var sex=$("#sex").val();
            var phone=$("#phone").val();
            var postcode=$("#postcode").val();
            var beizhu=$("#beizhu").val();
            var usercardimg=$("#usercardimg").val();
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('tomb_setgzdj'); ?>',
                dataType    : 'json',
                data        : {
                    eid : eid,
                    dead_name : dead_name,
                    dead_work : dead_work,
                    dead_address:dead_address,
                    dead_sex : dead_sex,
                    starttime : starttime,
                    endtime : endtime,
                    gstime : gstime,
                    gdtime : gdtime,
                    gltime : gltime,
                    nstime : nstime,
                    ndtime : ndtime,
                    nltime : nltime,
                    usercardimg:usercardimg,
                    jrtime:jrtime,
                    cstype:cstype,
                    sstype:sstype,
                    lztype:lztype,
                    cname:cname,
                    idcard:idcard,
                    tel:tel,
                    email:email,
                    workplace:workplace,
                    address:address,
                    relationship:relationship,
                    sex:sex,
                    phone:phone,
                    postcode:postcode,
                    beizhu:beizhu,
                },
                success     : function(g){
                    if(g == 'ok'){
                        layer.close(htmlgzdj);
                        layer.msg('设置成功');
                    }else if(g == 'no'){
                        layer.close(htmlgzdj);
                        layer.msg('设置失败');
                    }
                }
            });
          }
          function beiwencont(eid){
            var dyzuser=$('input:radio[name="dyzuser"]:checked').val();
            if(dyzuser){
                var mname=$("#mname").val();
                var fname=$("#fname").val();
                var uaddress=$("#uaddress").val();
                var zangtime=$("#zangtime").val();
                var mstime=$("#mstime").val();
                var mgtime=$("#mgtime").val();
                var fstime=$("#fstime").val();
                var fgtime=$("#fgtime").val();
                var beimian=$("#beimian").val();
                var kouli=$("#kouli").val();
                var bcont=$("#bcont").val();
                var dyzuser=$('input:radio[name="dyzuser"]:checked').val();
                htmlbcs = layer.load(0, {
                    shade: [0.5] //0.1透明度的白色背景
                  });
                $.ajax({
                    type        : 'post',
                    url         : '<?php echo url('tomb_setbeiwencont'); ?>',
                    dataType    : 'json',
                    data        : {
                        eid : eid,
                        mname : mname,
                        fname : fname,
                        uaddress : uaddress,
                        zangtime : zangtime,
                        mstime : mstime,
                        kouli : kouli,
                        mgtime : mgtime,
                        fstime : fstime,
                        bcont : bcont,
                        fgtime : fgtime,
                        zanguser:dyzuser,
                        beimian : beimian,
                    },
                    success     : function(g){
                        if(g == 'ok'){
                            layer.close(htmlbcs);
                            layer.msg('设置成功');
                        }else if(g == 'no'){
                            layer.close(htmlbcs);
                            layer.msg('设置失败');
                        }else if(g == 'flg'){
                            layer.close(htmlbcs);
                            layer.msg('请先设置碑文参数');
                        }else if(g == 'msg'){
                            layer.close(htmlbcs);
                            layer.msg('该墓位还没有下葬');
                        }
                    }
                });
            }else{
                layer.msg('请选择逝者');
            }
          }
          function setbeizf(eid){
            var html = layer.load(0, {
              shade: [0.5] //0.1透明度的白色背景
            });
            $.ajax({
                type        : 'post',
                url         : '<?php echo url('tomb_setbeizf'); ?>',
                dataType    : 'json',
                data        : {
                    id : eid,
                },
                success     : function(g){
                    layer.close(html);
                     //页面层
                    beiwencshtml=layer.open({
                      type: 1,
                      title: '碑文杂费单', //不显示标题
                      skin: 'layui-layer-rim', //加上边框
                      area: ['1015px', '740px'], //宽高
                      content: g
                    });
                }
            });
          }

        function tab1(){
            $("#tab1").show();
            $("#tab2").hide();
            $("#liset2").removeClass('bwon');
            $("#liset1").addClass('bwon');
        }
        function tab2(){
            $("#tab2").show();
            $("#tab1").hide();
            $("#liset1").removeClass('bwon');
            $("#liset2").addClass('bwon');
        }
        function _tc2_show() {
            $('.tc2').attr('src', "<?php echo url('buyed_tc2', '', ''); ?>/id/" + id);
            $('.tc2').show();
        }
    </script>
    <script type="text/javascript">
    function sumk(){
      var z_t_k_p=$("#z_t_k_p").val();
      var z_d_k_p=$("#z_d_k_p").val();
      var z_z_k_p=$("#z_z_k_p").val();
      var z_x_k_p=$("#z_x_k_p").val();
      var sum=Number(z_t_k_p)+Number(z_d_k_p)+Number(z_z_k_p)+Number(z_x_k_p);
      $("#zk_sum").val(sum);
    }
    function sumb(){
      var z_t_b_p=$("#z_t_b_p").val();
      var z_d_b_p=$("#z_d_b_p").val();
      var z_z_b_p=$("#z_z_b_p").val();
      var z_x_b_p=$("#z_x_b_p").val();
      var sum=Number(z_t_b_p)+Number(z_d_b_p)+Number(z_z_b_p)+Number(z_x_b_p);
      $("#zb_sum").val(sum);
    }
    function ztk(){
      var z_t=$("#z_t").val();
      var z_t_k=$("#z_t_k").val();
      var sum = z_t*z_t_k;
      $("#z_t_k_p").val(sum);
      sumk();
    }
    function zdk(){
      var z_d=$("#z_d").val();
      var z_d_k=$("#z_d_k").val();
      var sum = z_d*z_d_k;
      $("#z_d_k_p").val(sum);
      sumk();
    }
    function zzk(){
      var z_z=$("#z_z").val();
      var z_z_k=$("#z_z_k").val();
      var sum = z_z*z_z_k;
      $("#z_z_k_p").val(sum);
      sumk();
    }
    function zxk(){
      var z_x=$("#z_x").val();
      var z_x_k=$("#z_x_k").val();
      var sum = z_x*z_x_k;
      $("#z_x_k_p").val(sum);
      sumk();
    }
    function ztb(){
      var z_t=$("#z_t").val();
      var z_t_b=$("#z_t_b").val();
      var sum = z_t*z_t_b;
      $("#z_t_b_p").val(sum);
      sumb();
    }
    function zdb(){
      var z_d=$("#z_d").val();
      var z_d_b=$("#z_d_b").val();
      var sum = z_d*z_d_b;
      $("#z_d_b_p").val(sum);
      sumb();
    }
    function zzb(){
      var z_z=$("#z_z").val();
      var z_z_b=$("#z_z_b").val();
      var sum = z_z*z_z_b;
      $("#z_z_b_p").val(sum);
      sumb();
    }
    function zxb(){
      var z_x=$("#z_x").val();
      var z_x_b=$("#z_x_b").val();
      var sum = z_x*z_x_b;
      $("#z_x_b_p").val(sum);
      sumb();
    }
    function cxprice(){
      var cx_num=$("#cx_num").val();
      var cx_price=$("#cx_price").val();
      var sum=cx_num*cx_price;
      $("#cx_sum").val(sum);
      heji();
    }
    function lbprice(){
      var lb_price=$("#lb_price").val();
      $("#lb_sum").val(lb_price);
      heji();
    }
    function tjprice(){
      var tj_num=$("#tj_num").val();
      var tj_price=$("#tj_price").val();
      var sum=tj_num*tj_price;
      $("#tj_sum").val(sum);
      heji();
    }
    function zsprice(){
      var zs_price=$("#zs_price").val();
      $("#zs_sum").val(zs_price);
      heji();
    }
    function bzjprice(){
      var bzj_price=$("#bzj_price").val();
      $("#bzj_sum").val(bzj_price);
      heji();
    }
    function heji(){
      var zk_sum=$("#zk_sum").val();
      var zb_sum=$("#zb_sum").val();
      var cx_sum=$("#cx_sum").val();
      var lb_sum=$("#lb_sum").val();
      var tj_sum=$("#tj_sum").val();
      var zs_sum=$("#zs_sum").val();
      var bzj_sum=$("#bzj_sum").val();
      var sum=Number(zk_sum)+Number(zb_sum)+Number(cx_sum)+Number(lb_sum)+Number(tj_sum)+Number(zs_sum)+Number(bzj_sum);
      $("#sum").val(sum);
      var dmoney=convertCurrency(sum);
      $("#dsum").val(dmoney);
    }
    function sumMoney(){
      var zk_sum=$("#zk_sum").val();
      var zb_sum=$("#zb_sum").val();
      var cx_sum=$("#cx_sum").val();
      var lb_sum=$("#lb_sum").val();
      var tj_sum=$("#tj_sum").val();
      var zs_sum=$("#zs_sum").val();
      var bzj_sum=$("#bzj_sum").val();
      var sum=Number(zk_sum)+Number(zb_sum)+Number(cx_sum)+Number(lb_sum)+Number(tj_sum)+Number(zs_sum)+Number(bzj_sum);
      $("#sum").val(sum);
      var dmoney=convertCurrency(sum);
      $("#dsum").val(dmoney);
    }
    //数字转化
    function convertCurrency(currencyDigits) {  
      // Constants:  
       var MAXIMUM_NUMBER = 99999999999.99;  
       // Predefine the radix characters and currency symbols for output:  
       var CN_ZERO = "零";  
       var CN_ONE = "壹";  
       var CN_TWO = "贰";  
       var CN_THREE = "叁";  
       var CN_FOUR = "肆";  
       var CN_FIVE = "伍";  
       var CN_SIX = "陆";  
       var CN_SEVEN = "柒";  
       var CN_EIGHT = "捌";  
       var CN_NINE = "玖";  
       var CN_TEN = "拾";  
       var CN_HUNDRED = "佰";  
       var CN_THOUSAND = "仟";  
       var CN_TEN_THOUSAND = "万";  
       var CN_HUNDRED_MILLION = "亿";  
       
       var CN_DOLLAR = "圆";  
       var CN_TEN_CENT = "角";  
       var CN_CENT = "分";  
       var CN_INTEGER = "整";  
         
      // Variables:  
       var integral; // Represent integral part of digit number.  
       var decimal; // Represent decimal part of digit number.  
       var outputCharacters; // The output result.  
       var parts;  
       var digits, radices, bigRadices, decimals;  
       var zeroCount;  
       var i, p, d;  
       var quotient, modulus;  
         
      // Validate input string:  
       currencyDigits = currencyDigits.toString();  
       if (currencyDigits == "") {  
       alert("Empty input!");  
       return "";  
       }  
       if (currencyDigits.match(/[^,.\d]/) != null) {  
       alert("Invalid characters in the input string!");  
       return "";  
       }  
       if ((currencyDigits).match(/^((\d{1,3}(,\d{3})*(.((\d{3},)*\d{1,3}))?)|(\d+(.\d+)?))$/) == null) {  
       alert("Illegal format of digit number!");  
       return "";  
       }  
         
      // Normalize the format of input digits:  
       currencyDigits = currencyDigits.replace(/,/g, ""); // Remove comma delimiters.  
       currencyDigits = currencyDigits.replace(/^0+/, ""); // Trim zeros at the beginning.  
       // Assert the number is not greater than the maximum number.  
       if (Number(currencyDigits) > MAXIMUM_NUMBER) {  
       alert("Too large a number to convert!");  
       return "";  
       }  
         
      // Process the coversion from currency digits to characters:  
       // Separate integral and decimal parts before processing coversion:  
       parts = currencyDigits.split(".");  
       if (parts.length > 1) {  
       integral = parts[0];  
       decimal = parts[1];  
       // Cut down redundant decimal digits that are after the second.  
       decimal = decimal.substr(0, 2);  
       }  
       else {  
       integral = parts[0];  
       decimal = "";  
       }  
       // Prepare the characters corresponding to the digits:  
       digits = new Array(CN_ZERO, CN_ONE, CN_TWO, CN_THREE, CN_FOUR, CN_FIVE, CN_SIX, CN_SEVEN, CN_EIGHT, CN_NINE);  
       radices = new Array("", CN_TEN, CN_HUNDRED, CN_THOUSAND);  
       bigRadices = new Array("", CN_TEN_THOUSAND, CN_HUNDRED_MILLION);  
       decimals = new Array(CN_TEN_CENT, CN_CENT);  
       // Start processing:  
       outputCharacters = "";  
       // Process integral part if it is larger than 0:  
       if (Number(integral) > 0) {  
       zeroCount = 0;  
       for (i = 0; i < integral.length; i++) {  
       p = integral.length - i - 1;  
       d = integral.substr(i, 1);  
       quotient = p / 4;  
       modulus = p % 4;  
       if (d == "0") {  
       zeroCount++;  
       }  
       else {  
       if (zeroCount > 0)  
       {  
       outputCharacters += digits[0];  
       }  
       zeroCount = 0;  
       outputCharacters += digits[Number(d)] + radices[modulus];  
       }  
       if (modulus == 0 && zeroCount < 4) {  
       outputCharacters += bigRadices[quotient];  
       }  
       }  
       outputCharacters += CN_DOLLAR;  
       }  
       // Process decimal part if there is:  
       if (decimal != "") {  
       for (i = 0; i < decimal.length; i++) {  
       d = decimal.substr(i, 1);  
       if (d != "0") {  
       outputCharacters += digits[Number(d)] + decimals[i];  
       }  
       }  
       }  
       // Confirm and return the final output string:  
       if (outputCharacters == "") {  
       outputCharacters = CN_ZERO + CN_DOLLAR;  
       }  
       if (decimal == "") {  
       outputCharacters += CN_INTEGER;  
       }  
       outputCharacters = outputCharacters;  
       return outputCharacters;  
      }
      function setjsd(eid){
        var dyzuser=$('input:radio[name="dyzuser"]:checked').val(); 
        if(dyzuser){
        ldghtml = layer.load(0, {
            shade: [0.5] //0.1透明度的白色背景
          });
        var z_t=$("#z_t").val();
        var z_t_k=$("#z_t_k").val();
        var z_t_b=$("#z_t_b").val();
        var z_t_k_p=$("#z_t_k_p").val();
        var z_t_b_p=$("#z_t_b_p").val();
        var z_d=$("#z_d").val();
        var z_d_k=$("#z_d_k").val();
        var z_d_b=$("#z_d_b").val();
        var z_d_k_p=$("#z_d_k_p").val();
        var z_d_b_p=$("#z_d_b_p").val();
        var z_z=$("#z_z").val();
        var z_z_k=$("#z_z_k").val();
        var z_z_b=$("#z_z_b").val();
        var z_z_k_p=$("#z_z_k_p").val();
        var z_z_b_p=$("#z_z_b_p").val();
        var z_x=$("#z_x").val();
        var z_x_k=$("#z_x_k").val();
        var z_x_b=$("#z_x_b").val();
        var z_x_k_p=$("#z_x_k_p").val();
        var z_x_b_p=$("#z_x_b_p").val();
        var zk_sum=$("#zk_sum").val();
        var zb_sum=$("#zb_sum").val();
        var z_beizhu=$("#z_beizhu").val();
        var cx_type=$("input[name='cx_type']:checked").val();
        var cx=$("input[name='cx']:checked").val();
        var cx_num=$("#cx_num").val();
        var cx_price=$("#cx_price").val();
        var cx_sum=$('#cx_sum').val();
        var lb=$("input[name='lb']:checked").val();
        var lb_type=$("input[name='lb_type']:checked").val();
        var lb_price=$("#lb_price").val();
        var lb_sum=$("#lb_sum").val();
        var tj=$("input[name='tj']:checked").val();
        var tj_num=$("#tj_num").val();
        var tj_price=$("#tj_price").val();
        var tj_sum=$("#tj_sum").val();
        var cx_beizhu=$("#cx_beizhu").val();
        var lb_beizhu=$("#lb_beizhu").val();
        var tj_beizhu=$("#tj_beizhu").val();
        var zs_beizhu=$("#zs_beizhu").val();
        var bzj_beizhu=$("#bzj_beizhu").val();
        var zs=$("input[name='zs']:checked").val();
        var zs_type=$("input[name='zs_type']:checked").val();
        var zs_price=$("#zs_price").val();
        var zs_sum=$("#zs_sum").val();
        var bzj=$("input[name='bzj']:checked").val();
        var bzj_type=$("input[name='bzj_type']:checked").val();
        var bzj_price=$("#bzj_price").val();
        var bzj_sum=$("#bzj_sum").val();
        var sum=$("#sum").val();
        var dsum=$("#dsum").val();
        $.ajax({
            type        : 'post',
            url         : '<?php echo url('tomb_setjsd_set'); ?>',
            dataType    : 'json',
            data        : {
                eid : eid,
                z_t : z_t,
                z_t_k : z_t_k,
                z_t_b : z_t_b,
                z_t_k_p : z_t_k_p,
                z_t_b_p : z_t_b_p,
                z_d : z_d,
                z_d_k:z_d_k,
                z_d_b : z_d_b,
                z_d_k_p : z_d_k_p,
                z_d_b_p : z_d_b_p,
                z_z : z_z,
                z_z_k : z_z_k,
                z_z_b : z_z_b,
                z_z_k_p : z_z_k_p,
                z_z_b_p : z_z_b_p,
                z_x : z_x,
                z_x_k : z_x_k,
                z_x_b : z_x_b,
                z_x_k_p : z_x_k_p,
                z_x_b_p : z_x_b_p,
                zk_sum : zk_sum,
                zb_sum : zb_sum,
                z_beizhu : z_beizhu,
                cx_type : cx_type,
                cx : cx,
                cx_num : cx_num,
                cx_price : cx_price,
                cx_sum : cx_sum,
                lb : lb,
                lb_type : lb_type,
                lb_price : lb_price,
                lb_sum : lb_sum,
                tj : tj,
                tj_num : tj_num,
                tj_price : tj_price,
                tj_sum : tj_sum,
                cx_beizhu : cx_beizhu,
                lb_beizhu : lb_beizhu,
                tj_beizhu : tj_beizhu,
                zs_beizhu : zs_beizhu,
                bzj_beizhu : bzj_beizhu,
                zs : zs,
                zs_type : zs_type,
                zs_price : zs_price,
                zs_sum : zs_sum,
                bzj : bzj,
                bzj_type : bzj_type,
                bzj_price : bzj_price,
                bzj_sum : bzj_sum,
                sum : sum,
                dsum : dsum,
                eid : eid,
                dyzuser:dyzuser,
            },
            success     : function(g){
                if(g == 'ok'){
                    layer.msg('设置成功');
                    layer.close(ldghtml);
                    layer.close(beiwencshtml);
                }else if(g == 'no'){
                    layer.msg('设置失败');
                    layer.close(ldghtml);
                    layer.close(beiwencshtml);
                }else if(g == 'msg'){
                    layer.close(ldghtml);
                    layer.msg('该墓位还没有下葬');
                }
            }
        });
        }else{
          layer.msg('请选择故者');
        }
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
        $('.cem_id').change(function(){
            get_area($(this), '-1');
        });
        $('.style_id').change(function(){
            $('.show_all').trigger('click');
        });
        $('.cem_area_id').change(function(){
            get_row($(this), '-1');
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
            var style_id = $('.add_row').find('.style_id').val();
            $.ajax({
                type        : 'POST',
                url         : '<?php echo url('Cem/info_wlist_html'); ?>',

                data        : {
                    cem_id : cem_id,
                    cem_area_id : cem_area_id,
                    cem_row_id : cem_row_id,
                    status_id : 41,
                    style_id : style_id,
                    mb:1,
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
