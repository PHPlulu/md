<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\deposit\dep_tx.html";i:1534399632;s:75:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
                         <form class="show_seach">
  <fieldset>
    <legend>提醒范围条件</legend>
    <div class="lxd">
      <p>提醒范围选择：</p>
      <div class="lxa">
        <input type="radio" name="gtime" value="2" <?php if($gtime == 2): ?>checked<?php endif; ?>/>一周内过期
      </div>
      <div class="lxa">
        <input type="radio" name="gtime" value="3" <?php if($gtime == 3): ?>checked<?php endif; ?>/>一个月内过期
      </div>
      <div class="lxa">
        <input type="radio" name="gtime" value="4" <?php if($gtime == 4): ?>checked<?php endif; ?>/>一个季度内过期
      </div>
      <div class="lxa">
        <input type="radio" name="gtime" value="5" <?php if($gtime == 5): ?>checked<?php endif; ?>/>已过期
      </div>
    </div>

    <div class="lxd">
      <p>提醒范围填写：</p>
      <div class="lxe">
        <input type="text" id="row_today" value="<?php echo $today; ?>" />天内过期
      </div>
      <button type="button" class=" lxb show_all">查询</button>
    </div>
    <div class="lxd">
      <p>查询结果数量：</p>
      <i><?php echo $count; ?>个</i>
    </div>
  </fieldset>
</form>
<div class="conbiao">
  <table class="table table-bordered">
    <!--<caption>边框表格布局</caption>-->
    <thead>
      <tr>
        <th>寄存位全称</th>
        <th>定购状态</th>
        <th>定购日期</th>
        <th>使用开始日期</th>
        <th>使用结束日期</th>
        <th>实际寄存位费</th>
        <th>年管理费</th>
        <th>管理费缴纳年数</th>
        <th>管理费缴纳总额</th>
        <th>联系人姓名</th>
        <th>故者关系名称</th>
        <th>性别</th>
        <th>联系电话</th>
        <th>家庭住址</th>
        <th>工作单位</th>
        <th>业务员</th>
        <th>备注</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($list as $k=>$vo): ?>
      <tr>
        <td><?php echo $vo['long_title']; ?></td>
        <td>
          <?php if(($ltime >= $vo['starttime']) AND ($ltime <= $vo['endtime'])): ?> 未过期 <?php else: ?> 已过期 <?php endif; ?>
        </td>
        <td><?php echo date("Y-m-d",$vo['settime']); ?></td>
        <td><?php echo date("Y-m-d",$vo['starttime']); ?></td>
        <td><?php echo date("Y-m-d",$vo['endtime']); ?></td>
        <td><?php echo $vo['jcm']; ?></td>
        <td><?php echo $vo['glmo']; ?></td>
        <td><?php echo $vo['glmt']; ?></td>
        <td><?php echo $vo['summoney']; ?></td>
        <td><?php echo $vo['uname']; ?></td>
        <td><?php echo $sysyst[$vo['gzgx']]['title']; ?></td>
        <td>
          <?php if($vo['sex'] == 2): ?> 男 <?php else: ?> 女 <?php endif; ?>
        </td>
        <td><?php echo $vo['phone']; ?></td>
        <td><?php echo $vo['home']; ?></td>
        <td><?php echo $vo['gzdw']; ?></td>
        <td><?php echo $row_staff[$vo['staffid']]['nickname']; ?></td>
        <td><?php echo $vo['beizhu']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<script>
  $('.show_all').click(function () {
    var gtime = $("input[name='gtime']:checked").val();
    var today = $('#row_today').val();
    if (gtime == undefined) {
      gtime = 2
    }
    if (today) {
      window.location.href = "<?php echo url('/index/Deposit/dep_tx/today/" + today + "'); ?>";
    } else {
      window.location.href = "<?php echo url('/index/Deposit/dep_tx/gtime/" + gtime + "'); ?>";
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
