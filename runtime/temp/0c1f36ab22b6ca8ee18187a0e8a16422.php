<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"E:\PHPTutorial\WWW\md\public/../application/index\view\statistic\bw.html";i:1533388187;s:66:"E:\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
       <legend>统计条件设置与结果打印</legend>             
       <div class="conta">
          <p>选择墓园</p>
          <p>统计开始时间：</p>
          <p>统计结束时间：</p>
       </div>
       <div class="contb">
        <select name="cem_id" class="cem_id">
            <?php foreach($cem_list as $k => $vo): ?>
                 <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
            <?php endforeach; ?>
         </select>
          <input type="hidden" id="ptype">
          <input class="Wdate xiaostime" id="starttime" type="text" onclick="WdatePicker()" value="<?php $time = strtotime('-1 month', time());echo date('Y-m-d',$time)?>" style="outline: 0;font-size: 14px;color: #000;float: left;margin-left: 10px;">
          <input class="Wdate xiaostime" id="endtime" type="text" onClick="WdatePicker()" value="<?php echo date('Y-m-d',time());?>" style="outline: 0;font-size: 14px;color: #000;float: left;margin-left: 10px;">
          <button type="button" class="contc show_one">统计墓园</button>
          <button type="button" class="contc show_all">统计全部墓园</button>
          <button type="button" class="contc show_print_all">打印统计结果</button>
       </div>
    </fieldset>
    
  </form>
  <div class="conbiao">
    <table class="table table-bordered">
      <!--<caption>边框表格布局</caption>-->
      <thead>
        <tr>
          <th>墓园编号</th>
          <th>墓园名称</th>
          <th>已设置墓碑数量</th>
          <th>墓碑费用合计</th>
          <th>碑文刻写次数</th>
        </tr>
      </thead>
      <tbody class="add_row">
      </tbody>
    </table>
     <table class="table table-bordered">
      <!--<caption>边框表格布局</caption>-->
      <thead class="add_row_all_th">
      </thead>
      <tbody class="add_row_all_tr">
      </tbody>
    </table>
  </div>
</div>
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
 /* $(function(){
    var cem=$(".cem_id option:selected").val();
    che(cem);
  })
  function che(cem){
    var index = layer.load(1, {
      shade: [0.1,'#fff'] //0.1透明度的白色背景
    });
    $.ajax({
        type        : 'post',
        url         : '<?php echo url('select_bw_list'); ?>',
        dataType    : 'json',
        data        : {
            id : cem,
        },
        success     : function(g){
          layer.close(index);
          $(".add_row").append(g);
        }
    });
  }*/
  $('.cem_id').change(function(){
      $('.show_one').trigger('click');
  });
  $(".show_print_all").click(function(){
    var ptype=$("#ptype").val();
    var starttime=$("#starttime").val();
    var endtime=$("#endtime").val();
    var cem=$(".cem_id option:selected").val();
    if(ptype){
        var html = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
       $.ajax({
            type        : 'post',
            url         : '<?php echo url('select_print'); ?>',
            dataType    : 'json',
            data        : {
                type : 34,
                id : cem,
                starttime:starttime,
                endtime:endtime,
                ptype:ptype,
            },
            success     : function(g){
                layer.close(html);
                //页面层
                vhtml=layer.open({
                  type: 1,
                  title: '墓位碑文情况统计', //不显示标题
                  skin: 'layui-layer-rim', //加上边框
                  area: ['100%', '100%'], //宽高
                  content: g
                });
            }
        });
    }else{
      layer.msg('无打印信息');
    }
  })
  function show_print_zlist(){
    $("#ele34").print();
  }

  $(".show_all").click(function(){
    var index = layer.load(1, {
      shade: [0.1,'#fff'] //0.1透明度的白色背景
    });
    $(".trtr").remove();
    $(".thth").remove();
    $(".trall").remove();
    var starttime=$("#starttime").val();
    var endtime=$("#endtime").val();
    if(starttime!='' && endtime!=''){
      $.ajax({
          type        : 'post',
          url         : '<?php echo url('select_bw_all_list_time'); ?>',
          dataType    : 'json',
          data        : {
              starttime : starttime,
              endtime : endtime,
          },
          success     : function(g){
            layer.close(index);
            $("#ptype").val('3');
            $(".add_row").append(g);
          }
      });
    }else{
      /* $.ajax({
          type        : 'post',
          url         : '<?php echo url('select_bw_all_list'); ?>',
          dataType    : 'json',
          data        : {},
          success     : function(g){
            layer.close(index);
            $(".add_row").append(g);
          }
      });*/
      layer.msg('请选择时间');
    }
  })
  $(".show_one").click(function(){
    var index = layer.load(1, {
      shade: [0.1,'#fff'] //0.1透明度的白色背景
    });
    $(".trtr").remove();
    $(".thth").remove();
    $(".trall").remove();
    var starttime=$("#starttime").val();
    var endtime=$("#endtime").val();
    var cem=$(".cem_id option:selected").val();
    if(starttime!='' && endtime!=''){
      $.ajax({
          type        : 'post',
          url         : '<?php echo url('select_bw_list_time'); ?>',
          dataType    : 'json',
          data        : {
              id : cem,
              starttime : starttime,
              endtime : endtime,
          },
          success     : function(g){
            layer.close(index);
            $("#ptype").val('2');
            $(".add_row").append(g);
          }
      });
    }else{
      layer.msg('请选择时间');
    }
  })
  function setqk(id){
    var ihtml = layer.load(1, {
              shade: [0.5] //0.1透明度的白色背景
            });
    $(".thth").remove();
    $(".trall").remove();
    var html='';
    $.ajax({
        type        : 'post',
        url         : '<?php echo url('select_bw_list_all'); ?>',
        dataType    : 'json',
        data        : {
            id : id,
        },
        success     : function(g){
           layer.close(ihtml);
          html+='<tr class="thth">';
            html+='<th>碑文编号</th>';
            html+='<th>墓园名称</th>';
            html+='<th>墓位全称</th>';
            html+='<th>联系人姓名</th>';
            html+='<th>联系方式</th> ';
            html+='<th>业务员姓名</th>'; 
            html+='<th>碑文费用合计</th>'; 
            html+='<th>碑文刻写次数</th>'; 
            html+='<th>刻字样式</th> ';
            html+='<th>碑文字体</th>';
            html+='<th>简体繁体</th> ';
            html+='<th>是否贴金箔</th>  ';
            html+='<th>是否刷金</th>  ';
            html+='<th>瓷像数量</th>  ';
            html+='<th>瓷像尺寸</th>  ';
            html+='<th>瓷像颜色</th>  ';
            html+='<th>瓷像形状</th>  ';   
            html+='<th>购墓日期</th>  ';          
          html+='</tr>';
          $(".add_row_all_th").append(html);
          $(".add_row_all_tr").append(g);
         
        }
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
