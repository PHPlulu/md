<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\grave\grave.html";i:1530168789;s:75:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
                         <div class="cont">
  <form class="add_row" method="post">
    <fieldset>
      <legend>祭扫安葬信息</legend>
      <div class="djxxa">
        <div class="djlx">
          <p>登记类型：</p>
          <div class="djlxa">
             <input type="radio" name="djlx" checked value="2"/>祭扫
          </div>
          <div class="djlxa">
             <input type="radio" name="djlx" value="3"/>安葬
          </div>
        </div>
        <div class="djfs">
          <p>来访份数：</p>
            <input type="text" name="num" id="num"/>
            <i>*</i>
        </div>
        <div class="djfs">
          <p>来访人数：</p>
            <input type="text" name="prop" id="prop"/>
            <i>*</i>
        </div>
        <div class="djrq">
          <p>来访日期：</p>
            <input class="Wdate" name="settime" id="settime" type="text" onClick="WdatePicker()"> <i>*</i>
        </div>
        <div class="djcl">
          <p class="djclp">来访车辆：</p>
          <div class="djcla">
            <div class="djclc">
              <div class="djclb">
                <p>微型车</p>
                <input type="text" name="cart_w"/>                      
              </div>
              <div class="djclb">
                <p>小型车</p>
                <input type="text" name="cart_x"/>                      
              </div>
            </div>
            <div class="djclc">
              <div class="djclb">
                <p>中型车</p>
                <input type="text" name="cart_z"/>                      
              </div>
              <div class="djclb">
                <p>大型车</p>
                <input type="text" name="cart_d"/>                      
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="djxxb">
        <div class="azlxa">
          <p>安葬类型：</p>
          <select name="setsta" id="setsta">
          <?php if(is_array($tlist) || $tlist instanceof \think\Collection || $tlist instanceof \think\Paginator): $i = 0; $__LIST__ = $tlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $list['id']; ?>"><?php echo $list['title']; ?></option>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
        </div>
        <div class="azlxa">
          <p>接  待  员：</p>
          <select name="roleid">
          <?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $list['id']; ?>"><?php echo $list['title']; ?></option>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
        </div>
        <div class="azlxc">
          <p>备注：</p>
          <textarea name="cont"></textarea>
        </div> 
        <button type="button" url = "<?php echo url('Grave/grave_add'); ?>"   class="sbmt mwtxribricontc" style="margin-left: 50px;">保存祭扫、安葬信息</button>
      </div>
    </fieldset>
  </form>
</div>
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
$(function(){
  var val=$('input:radio[name="djlx"]:checked').val();
  if(val == '2'){
    $("#setsta").attr("disabled","disabled");
    $('#setsta').css('background-color','#c6c6c6');
  }else{
    $("#setsta").removeAttr("disabled");
    $('#setsta').css('background-color','#ffffff');
  }
  $('input:radio[name="djlx"]').click(function(){
    var djlx=$('input:radio[name="djlx"]:checked').val();
    if(djlx == '2'){
      $("#setsta").attr("disabled","disabled");
      $('#setsta').css('background-color','#c6c6c6');
    }else{
      $("#setsta").removeAttr("disabled");
      $('#setsta').css('background-color','#ffffff');
    }
  })
})
$('.sbmt').click(function(){
  var num=$("#num").val();
  var prop=$("#prop").val();
  var settime=$("#settime").val();
  if(num == ''){
    layer.msg('请填写来访份数');
    return false;
  }
  if(prop == ''){
    layer.msg('请填写来访人数');
    return false;
  }
  if(settime == ''){
    layer.msg('请填选择来访时间');
    return false;
  }
  if(num && prop && settime){
    $('.add_row').attr('action', $(this).attr('url')).submit();
  }

});
</script>
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
