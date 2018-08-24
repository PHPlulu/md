<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"E:\PHPTutorial\WWW\md\public/../application/index\view\stration\visit_log.html";i:1532856065;s:66:"E:\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
                         
    <fieldset>
        <legend>查询条件设置</legend>
        <div class="lxd">

        </div>
        <div class="lxd">
            <p>关键字填写：</p>
            <input type="text" class="lxc kwd"  value="<?php echo $wh; ?>" />
            <button class="lxb kwdbtn" >查询</button>
        </div>
        <div class="lxd">
            <p>查询结果数量：</p>
            <i><?php echo $count; ?>个</i>
        </div>
    </fieldset>


<div class="conbiao">
    <table class="table table-bordered">
      <!--<caption>边框表格布局</caption>-->
      <thead>
        <tr>
          <th>操作</th>
          <th>来访者姓名</th>
          <th>接待员</th>
          <th>联系方式</th>
          <th>来访人数</th>
          <th>来访日期</th>
          <th>来访渠道1</th>
          <th>来访渠道2</th>
          <th>来访渠道3</th>
          <th>咨询电话</th>
          <th>成交情况</th>
          <th>未购买原因</th>
          <th>来访方式</th>

          <th>成交日期</th>
          <th>来访次数</th>

          <th>接待记录</th>
          <th>住址</th>
          <th>备注</th>

          <th>与逝者关系</th>
          <!-- <th>是否已锁定</th> -->
        </tr>
      </thead>
      <tbody>

        <?php foreach($list as $k => $vo): ?>
            <tr>
              <td><a href="javascript:set('<?php echo $vo['id']; ?>');">查看</a> | <a href="javascript:open('<?php echo $vo['id']; ?>');">关联</a></td>
              <td><?php echo $vo['name']; ?></td>
              <td><?php echo $staff[$vo['receiver']]['nickname']; ?></td>
              <td><?php echo $vo['tel']; ?></td>
              <td><?php echo $vo['people_num']; ?></td>
              <td><?php echo $vo['transaction_suc_date']; ?></td>
              <td><?php echo $t1[$vo['channel_t1']]['title']; ?></td>
              <td><?php echo $t2[$vo['channel_t2']]['title']; ?></td>
              <td><?php echo $t3[$vo['channel_t3']]['title']; ?></td>

              <td><?php echo $tel[$vo['tel_id']]['title']; ?></td>
              <td><?php echo !empty($transaction_status)?'成交' : '未成交'; ?></td>
              <td><?php echo !empty($transaction_status)?$no_transaction_ps[$vo['no_transaction_ps']]['title'] : ''; ?></td>
              <td><?php echo $come_fun[$vo['come_fun']]['title']; ?></td>

              <td><?php echo $vo['transaction_suc_date']; ?></td>
              <td><?php echo $come_num[$vo['come_num']]['title']; ?></td>
              <td><?php echo $vo['reception_log']; ?></td>
              <td><?php echo $vo['address']; ?></td>
              <td><?php echo $vo['remarks']; ?></td>
              <td><?php echo $relationship[$vo['relationship']]['title']; ?></td>
            </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>
</div>
</div>
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
function jcwdg(){
  layer.close(thtml);
  ihtml = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
  $('.row_visit_edit').attr('action', "<?php echo url('visit_edit'); ?>").submit();
}
function set(id){
    ihtml = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
    $.ajax({
        type        : 'post',
        url         : '<?php echo url('set_visit_log'); ?>',
        dataType    : 'json',
        data        : {
            id : id
        },
        success     : function(e){
          if(e != '2'){
            layer.close(ihtml);
             //页面层
            thtml=layer.open({
              type: 1,
              title: '客户来访登记维护', //不显示标题
              skin: 'layui-layer-rim', //加上边框
              area: ['860px', '661px'], //宽高
              content: e
            });
          }else{
            layer.close(ihtml);
            layer.msg('系统错误');
          }
        },
        error       : function () {

        },
    });
  }
  function open(id){
    lhtml = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
    $.ajax({
        type        : 'post',
        url         : '<?php echo url('open_visit_log'); ?>',
        dataType    : 'json',
        data        : {
            id : id
        },
        success     : function(e){
          if(e != '2'){
            layer.close(lhtml);
             //页面层
            thtml=layer.open({
              type: 1,
              title: '客户来访关联墓位信息管理', //不显示标题
              skin: 'layui-layer-rim', //加上边框
              area: ['55.5%', '710px'], //宽高
              content: e
            });
          }else{
            layer.close(lhtml);
            layer.msg('系统错误');
          }
        },
        error       : function () {

        },
    });
  }
</script>
<script type="text/javascript">
   function get_t2 (_this, _select_id) {
        let pid = _this.val();
        let form = _this.parents('form');
        if (pid) {
            $.ajax({
                type        : 'GET',
                url         : '<?php echo url('ComeChannel/tlist'); ?>',
                dataType    : 'json',
                data        : {
                    pid : pid
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
                    form.find('.row_ppid').html(html);
                    get_t3($('.row_ppid'), '-1');
                },
                error       : function () {

                },
            });
        }
    }
    $(document).on('change', '#row_pid', function() {
        get_t2($(this), '-1');
    });
    $(document).on('change', '#row_ppid', function() {
        get_t3($(this), '-1');
    });
    function get_t3 (_this, _select_id) {
        let ppid = _this.val();

        let form = _this.parents('form');
        if (ppid) {
            $.ajax({
                type        : 'GET',
                url         : '<?php echo url('ComeChannel/tlist'); ?>',
                dataType    : 'json',
                data        : {
                    pid : $('.row_pid').val(),
                    ppid:ppid,
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
                    form.find('.row_pppid').html(html);
                },
                error       : function () {

                },
            });
        }
    }
    $('.kwdbtn').click(function(){
        let vl = $('.kwd').val();

        go_to("<?php echo url('visit_log', '', ''); ?>/wh/" + vl);
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
