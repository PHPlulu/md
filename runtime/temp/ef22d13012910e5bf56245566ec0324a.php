<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"E:\PHPTutorial\WWW\md\public/../application/index\view\tomb\jtoady.html";i:1534778892;s:66:"E:\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
  <form>
    <fieldset>
      <legend>提醒范围条件</legend>
      <div class="lxd">
        <p>祭祀类别选择：</p>
        <select class="lxse" id="lxse">
          <option value="0">查看所有</option>
          <option value="20t">三期祭</option>
          <option value="34t">五期祭</option>
          <option value="99t">百天祭</option>
          <option value="1z">一周年祭</option>
          <option value="3z">三周年祭</option>
          <option value="5z">五周年祭</option>
          <option value="6z">六周年祭</option>
          <option value="7z">七周年祭</option>
          <option value="8z">八周年祭</option>
          <option value="9z">九周年祭</option>
          <option value="10z">十周年祭</option>
          <option value="11z">十一周年祭</option>
          <option value="12z">十二周年祭</option>
          <option value="13z">十三周年祭</option>
          <option value="14z">十四周年祭</option>
          <option value="15z">十五周年祭</option>
          <option value="16z">十六周年祭</option>
          <option value="17z">十七周年祭</option>
          <option value="18z">十八周年祭</option>
          <option value="19z">十九周年祭</option>
          <option value="20z">二十周年祭</option>
        </select>
        <div class="gongli">
          <div class="lxa">
            <input type="radio" name="trtime" value="2" checked="" />按公历（阳历）统计
          </div>
          <div class="lxa">
            <input type="radio" name="trtime" value="3" />按农历（阴历）统计
          </div>
        </div>
      </div>
      <div class="lxd">
        <p>提醒范围选择：</p>
        <div class="lxa">
          <input type="radio" name="gtime" value="2" checked="" />一周内
        </div>
        <div class="lxa">
          <input type="radio" name="gtime" value="3" />两周内
        </div>
        <div class="lxa">
          <input type="radio" name="gtime" value="4" />一个月内
        </div>
      </div>
      <div class="lxd">
        <p>提醒范围填写：</p>
        <div class="lxe">
          <input type="text" id="today" name="today" />天内过期
        </div>
        <button type="button" class=" lxb show_all">查询</button>
        <div class="lxb">打印提醒表</div>
        <p>查询结果数量：
          <font id="sumcoum"></font>个
        </p>
      </div>
    </fieldset>
  </form>
  <div class="conbiao">
    <table class="table table-bordered">
      <!--<caption>边框表格布局</caption>-->
      <thead>
        <tr>
          <th>祭祀日类型</th>
          <th>祭祀日期</th>
          <th>墓位全称</th>
          <th>故者姓名</th>
          <th>故者性别</th>
          <th id="typetime1">逝世日期（公历）</th>
          <th id="typetime2">下葬日期（公历）</th>
          <th>联系人姓名</th>
          <th>联系人性别</th>
          <th>故者关系名称</th>
          <th>邮政编码</th>
          <th>家庭住址</th>
          <th>联系电话</th>
          <th>手机</th>
          <th>操作员姓名</th>
          <th>逝世日期显示</th>
          <th>备注</th>
        </tr>
      </thead>
      <tbody class="add_row">
      </tbody>
    </table>
  </div>
</div>
<script src="__JS__/layer/layer.js"></script>
<script>

  $('.show_all').click(function () {
    var imgshtml = layer.load(1, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $(".trtr").remove();
    var gtime = $("input[name='gtime']:checked").val();
    var trtime = $("input[name='trtime']:checked").val();
    var today = $("input[name='today']").val();
    var lxse = $("#lxse option:selected").val();
    $.ajax({
      type: 'post',
      url: "<?php echo url('select_jtoday_list'); ?>",
      dataType: 'json',
      data: {
        gtime: gtime,
        trtime: trtime,
        today: today,
        lxse: lxse,
      },
      success: function (g) {
        layer.close(imgshtml);
        if (trtime == 2) {
          $("#typetime1").html('逝世日期（公历）');
          $("#typetime2").html('下葬日期（公历）');
        } else if (trtime == 3) {
          $("#typetime1").html('逝世日期（农历数字）');
          $("#typetime2").html('逝世日期（农历）');
        }
        $(".add_row").append(g);
        $("#sumcoum").html($(".trtr").attr('row_id'));
      }
    });
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
