<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"E:\PHPTutorial\WWW\md\public/../application/index\view\stration\lock.html";i:1531835780;s:66:"E:\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
<h1 class="suod">【单击该条记录即可解锁。】</h1>
<div class="conbiao">
  <table class="table table-bordered">
    <!--<caption>边框表格布局</caption>-->
    <thead>
      <tr>
        <th>墓位全称</th>
        <th>墓位长</th>
        <th>墓位宽</th>
        <th>墓位面积</th>
        <th>墓位价格</th>
        <th>墓位类型</th>
        <th>墓位材质</th>
        <th>墓位样式</th>
        <th>墓位状态</th>
        <th>操作人</th>
        <th>操作时间</th>
        <th>是否被锁定</th>
       

      </tr>
    </thead>
    <tbody>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <tr onclick="set('<?php echo $vo['id']; ?>')" style="cursor:pointer">
        <td><?php echo $vo['long_title']; ?></td>
        <td><?php echo $vo['length']; ?></td>
        <td><?php echo $vo['width']; ?></td>
        <td><?php echo $vo['acreage']; ?></td>
        <td><?php echo $vo['price']; ?></td>
        <td><?php echo $cem_model[$vo['model']]['title']; ?></td>
        <td><?php echo $cem_mat[$vo['material']]['title']; ?></td>
        <td><?php echo $cem_sty[$vo['style']]['title']; ?></td>  
        <?php if($vo['status'] == 38): ?>
          <td>空闲</td> 
        <?php elseif($vo['status'] == 39): ?> 
          <td>已预订</td> 
        <?php elseif($vo['status'] == 41): ?> 
          <td>已葬</td> 
        <?php elseif($vo['status'] == 44): ?> 
          <td>付款（已定）</td> 
        <?php endif; ?>
        <td><?php echo $row_staff[$vo['suo_staff_id']]['nickname']; ?></td>
        <td><?php echo date("Y-m-d",$vo['suo_time']); ?></td>
        <td>已锁定</td>
      </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
</div>
</div>
<script src="__JS__/layer/layer.js"></script>
<script type="text/javascript">
function set(id){
  var lay=layer.confirm('您确定要解锁该墓位吗？', {
    btn: ['确定','取消'] //按钮
  }, function(){
    layer.close(lay);
    var imgshtml = layer.load(1, {
      shade: [0.5] //0.1透明度的白色背景
    });
  $.ajax({  
        type        : 'post',
        url         : '<?php echo url('upd_lock_list'); ?>',
        dataType    : 'json',
        data        : {
            id : id,
        },
        success     : function(e){
          layer.close(imgshtml);
          if (e == 'ok') {
            layer.msg('解锁成功',{offset: '300px',time: 2000,icon: 1},function () {
                     window.location.reload();
                  });
          } else {
            layer.msg('解锁失败',{offset: '300px',time: 2000,icon: 2},function () {
                     window.location.reload();
                  });
          }
        }
    });
  }, function(){
    layer.close(lay);
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
