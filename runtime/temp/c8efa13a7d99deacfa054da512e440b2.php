<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"F:\phpstudy\WWW\md\public/../application/index\view\finan\glist.html";i:1533711845;s:63:"F:\phpstudy\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
          <div class="wupfei">
            <fieldset>
              <legend>待确认物品销售信息</legend>
              
            </fieldset>
            
            <div class="conbiao wupfeib">
              <table class="table table-bordered">
                <!--<caption>边框表格布局</caption>-->
                <thead>
                  <tr>
                    <th>名称</th>
                    <th>是否已付款</th>
                    <th>定购总额</th>
                    <th>定购日期</th>
                    <th>操作员</th>
                  </tr>
                </thead>
                <tbody class="whlist">
                 <?php foreach($glist as  $vo): ?>
                        <tr onclick="set(<?php echo $vo['id']; ?>)">
                          <td class = "row_price"><?php echo $vo['title']; ?></td>
                          <td class = "row_title">
                            <?php if($vo['sta'] == 2): ?>
                               <font style="color:green;">已付款</font>
                            <?php else: ?> 
                               <font style="color:red;">未付款</font> 
                            <?php endif; ?>
                          </td>
                          <td class = "row_price"><?php echo $vo['price']; ?></td>
                          <td class = "row_type"><?php echo date('Y-m-d H:i:s',$vo['time']); ?></td>
                          <td class = "row_cont"><?php echo $row_staff[$vo['staffid']]['nickname']; ?></td>
                        </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
             </div>
           </div>
        </div>
<script src="__JS__/layer/layer.js"></script>
<script type="text/javascript">
function set(id){
   var index=layer.confirm('是否确认该收费记录？', {
      btn: ['确定','取消'] //按钮
    }, function(){
        layer.close(index);
        var ihtml = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
        $.ajax({
            type        : 'post',
            url         : '<?php echo url('finan_set_glist'); ?>',
            dataType    : 'json',
            data        : {
                id : id
            },
            success     : function(e){
                if (e == '2') {
                  layer.close(ihtml);
                  layer.msg('设置成功',{offset: '300px',time: 2000,icon: 1},function () {
                       window.location.reload();
                    });
                } else {
                  layer.close(ihtml);
                  layer.msg('设置失败',{offset: '300px',time: 2000,icon: 2},function () {
                       window.location.reload();
                    });
                }
            },
            error       : function () {

            },
        });
    }, function(){
      layer.close(index);
    });
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
