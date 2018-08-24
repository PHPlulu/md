<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"G:\ceshi\fumijituan\public/../application/index\view\contacts\wlist.html";i:1532489608;s:64:"G:\ceshi\fumijituan\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
<fieldset>

    <div class="lxd">
    	<p>关键字填写：</p>
        <input type="text" class="lxc kwd"  value="<?php echo $wh; ?>" />
		<button class="lxb kwdbtn" >查询</button>
		<input type="hidden" id="typesta" value="<?php echo $typesta; ?>">
		<button class="lxb" onclick="printuser()">打印联系人信息</button>
        <button class="lxb" onclick = "go_to("{'url('wlist', '', '')'}");">退出</button>
    </div>
    <div class="lxd">
    	<p>查询结果数量：</p>
        <i><?php echo $count; ?>个</i>
        <span>双击联系人信息修改其信息</span>
    </div>
</fieldset>


	<div class="conbiao">
		<table class="table table-bordered">
		  <!--<caption>边框表格布局</caption>-->
		  <thead>
		    <tr>
		      <th>关联墓位全称</th>
		      <th>姓名</th>
		      <th>性别</th>
		      <th>与故者关系</th>
		      <th>身份证号</th>
		      <th>电话</th>
		      <th>手机</th>
		      <th>电子邮件</th>
		      <th>住址</th>
		      <th>工作单位</th>
		      <th>操作员</th>
		      <th>状态</th>
		      <th>添加时间</th>
		      <th>邮政编码</th>

		    </tr>
		  </thead>
		  <tbody class="wlist">
            <?php foreach($list as $k => $vo): ?>
			    <tr row_id = "<?php echo $vo['id']; ?>" class="tr_<?php echo $vo['id']; ?>">
			      <td><?php echo $cemtitle[$vo['id']]['long_title']; ?></td>
			      <td><?php echo $vo['name']; ?></td>
			      <td><?php echo $vo['sex']; ?></td>
			      <td><?php echo $relationship[$vo['relationship']]['title']; ?></td>
			      <td><?php echo $vo['idcard']; ?></td>
			      <td><?php echo $vo['tel']; ?></td>
			      <td><?php echo $vo['tel']; ?></td>
			      <td><?php echo $vo['email']; ?></td>
			      <td><?php echo $vo['address']; ?></td>
			      <td><?php echo $vo['workplace']; ?></td>
			      <td><?php echo $staff[$vo['create_by']]['nickname']; ?></td>
			      <td>正常</td>
			      <td><?php echo $vo['create_time']; ?></td>
			      <td><?php echo $vo['postcode']; ?></td>
			    </tr>
            <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
</div>
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/jQuery.print.js"></script>
<script type="text/javascript">
$('.kwdbtn').click(function(){
let vl = $('.kwd').val();
go_to("<?php echo url('wlist', '', ''); ?>/wh/" + vl);
});
function printuser(){
	var html = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    var typesta=$("#typesta").val();
    var vl = $('.kwd').val();
	$.ajax({
	      type        : 'post',
	      url         : '<?php echo url('Tomb/select_print'); ?>',
	      dataType    : 'json',
	      data        : {
	          type : 11,
	          vl : vl,
	          typesta:typesta,
	      },
	      success     : function(g){
	          layer.close(html);
	          //页面层
	          vhtml=layer.open({
	            type: 1,
	            title: '墓位联系人信息表', //不显示标题
	            skin: 'layui-layer-rim', //加上边框
	            area: ['100%', '100%'], //宽高
	            content: g
	          });
	      }
	  });
}
function show_print_wlist(){
	$("#ele11").print();
}
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
