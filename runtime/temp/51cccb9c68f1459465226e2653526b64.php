<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"F:\phpstudy\WWW\md\public/../application/index\view\finan\syslist.html";i:1533714109;s:63:"F:\phpstudy\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
  <form class="add_row">
    <fieldset>
      <legend>寄存位定购</legend>
      
       <div class="conta">
          <p>选择寄存厅</p>
          <p>选择寄存室</p>
          <p>选择寄存层</p>
          
         
       </div>
       <div class="contb">
           <select name="sysid" class="cem_id" >
            <option value="0">请选择</option>
              <?php foreach($sys_list as $k => $vo): ?>
                  <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
              <?php endforeach; ?>
            </select>
            
             <select name="sysid_s" class="cem_area_id" id="cem_area_id_s">
                    <option value="0">请选择</option>
              </select>
             <select name="sysid_c" class="cem_area_id_c" id="cem_area_id_c">
                    <option value="0">请选择</option>
              </select>         
        <button type="button" class=" contc show_all">显示全部</button>
       </div>
    </fieldset>
    
  </form>
  <div class="conbiao">
    <table class="table table-bordered">
      <!--<caption>边框表格布局</caption>-->
      <thead>
        <tr>
          <th>寄存位名称</th>
          <th>寄存位状态</th>
          <th>定购状态</th>
          <th>是否已付费</th>
          <th>定购日期</th>
          <th>使用开始日期</th>
          <th>使用结束日期</th>             
          <th>寄存位原价</th>
          <th>实际寄存位费</th>   
          <th>年管理费</th>
          <th>管理费缴纳年数</th>
          <th>管理费缴纳总额</th>
          <th>定购应付总额</th>
          <th>联系人姓名</th>
          <th>故者关系名称</th>             
          <th>性别</th>
          <th>身份证号</th>
          <th>联系电话</th>
          <th>手机</th>                
          <th>家庭住址</th>
          <th>工作单位</th>
          <th>电子邮件</th>
          <th>备注</th>    
          <th>业务员</th>  
        </tr>
      </thead>
      <tbody class="wlist">
      </tbody>
    </table>
  </div>
</div>
<script src="__JS__/layer/layer.js"></script>
<script type="text/javascript">
$(function(){
  $('.show_all').trigger("click");
})
function get_area (_this, _select_id) {
        // var _select_id = _select_id ? _select_id : 0;
        let cem_id = _this.val();
        let form = _this.parents('form');
        if (cem_id) {
            $.ajax({
                type        : 'GET',
                url         : '<?php echo url('System/sysjcc_wlist'); ?>',
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
                    var ss=$(".cem_area_id").val();
                    ssyc(ss);
                },
                error       : function () {

                },
            });
        }
    }
    function get_areas (_this, _select_id) {
        // var _select_id = _select_id ? _select_id : 0;
        let cem_id = _this.val();
        let form = _this.parents('form');
        if (cem_id) {
            $.ajax({
                type        : 'GET',
                url         : '<?php echo url('System/sysjcw_wlist'); ?>',
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
                    form.find('.cem_area_id_c').html(html);
                    $('.show_all').trigger("click");
                },
                error       : function () {

                },
            });
        }
    }
    $('.cem_id').change(function(){
        get_area($(this), '-1');
    });
    $(".cem_area_id").change(function(){
        get_areas($(this), '-1');
    });
    $(".cem_area_id_c").change(function(){
       $('.show_all').trigger("click");
    });
    function ssyc(id){
      $.ajax({
          type        : 'GET',
          url         : '<?php echo url('System/sysjcw_wlist'); ?>',
          dataType    : 'json',
          data        : {
              cem_id : id
          },
          success     : function(e){
              let html = '';
              for (i in e) {
                  html += '<option ';
                  html += ' value="'+e[i]['id']+'">'+e[i]['title']+'</option>';
              }
              $('.cem_area_id_c').html(html);
              $('.show_all').trigger("click");
          },
      });
    }
 $('.show_all').click(function(){
  $(".wlistall").remove();
    var cem_id = $('.add_row').find('.cem_id').val();
    var cem_area_id = $('.add_row').find('.cem_area_id').val();
    var cem_row_id = $('.add_row').find('.cem_area_id_c').val();
    $.ajax({
        type        : 'POST',
        url         : '<?php echo url('Finan/syslist_sell_all'); ?>',
        data        : {
            cem_id : cem_id,
            cem_area_id : cem_area_id,
            cem_row_id : cem_row_id,
        },
        success     : function(e){
            $('.wlist').html(e);
        },
    });
});
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
            url         : '<?php echo url('finan_set_syslist'); ?>',
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
