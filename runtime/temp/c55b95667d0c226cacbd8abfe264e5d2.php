<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\stration\muweis.html";i:1533388958;s:75:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
    .conbiao{
          height: 590px;
    }
</style>
<div class="cont">
  <form class="add_row">
    <fieldset>
      <legend>墓位范围</legend>
      
       <div class="conta">
          <p>选择墓园</p>
          <p>选择墓区</p>
          <p>选择墓排</p>
          
         
       </div>
       <div class="contb">
          <select name="cem_id" class="cem_id">
             <option value="0">请选择</option>
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
        <button type="button" class="contc show_all">显示全部墓位定购信息</button>
       </div>
       <h1 class="suod">【单击该条记录即可确认收费 ; 打印票据请先确定该记录已确认收费，已确认的信息单击即可打印票据。】</h1>
    </fieldset>
    
  </form>
  <div class="conbiao">
    <table class="table table-bordered">
      <!--<caption>边框表格布局</caption>-->
      <thead>
        <tr>
          <th>墓位全称</th>
          <th>墓位状态</th>
          <th>购墓状态</th>
          <th>是否已付费</th>
          <th>购墓日期</th>
          <th>使用开始日期</th>
          <th>使用结束日期</th>             
          <th>墓位原价</th>
          <th>实际墓位费</th>
          <th>预订金额</th>
          <th>定购应付总额</th>
          <th>年管理费</th>
          <th>管理费缴纳年数</th>
          <th>管理费缴纳总额</th>
          <th>联系人姓名</th>
          <th>故者关系名称</th>             
          <th>性别</th>
          <th>身份证号</th>
          <th>联系电话</th>
          <th>手机</th>
          <th>邮政编码</th>
          <th>家庭住址</th>
          <th>工作单位</th>
          <th>电子邮件</th>
          <th>备注</th>
          <th>操作员</th>  
          <th>操作员姓名</th>
          <th>业务员</th>
          <th>业务员姓名</th>
          <th>墓位号</th>  
          <th>合同编号</th>
        </tr>
      </thead>
      <tbody class="wlist">
      </tbody>
    </table>
  </div>
</div>
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/jQuery.print.js"></script>
<script type="text/javascript">
function show_print_zfjsddy(id){
  $.ajax({
      type        : 'post',
      url         : '<?php echo url('Finan/set_print'); ?>',
      dataType    : 'json',
      data        : {
          id : id,
      },    
      success     : function(g){
         if(g == 'ok'){
            $("#ele19").print();
         }else{
            layer.msg('打印失败');
         }
      }
  });
}
function set_dy(id,my){
  $.ajax({
      type        : 'post',
      url         : '<?php echo url('Finan/select_print_fa_sta'); ?>',
      dataType    : 'json',
      data        : {
          id : id,
      },
      success     : function(g){
         if(g == '1'){
             var index=layer.confirm('是否确认打印票据？', {
                  btn: ['确定','取消'] //按钮
                }, function(){
                    var muweifapiaohaomoneyuan=my;
                    var dmoney=convertCurrency(muweifapiaohaomoneyuan);
                    $.ajax({
                        type        : 'post',
                        url         : '<?php echo url('Tomb/select_print'); ?>',
                        dataType    : 'json',
                        data        : {
                            type : 19,
                            id : id,
                            dmoney:dmoney,
                            muweifapiaohaomoneyuan:muweifapiaohaomoneyuan,
                            settime:1,
                        },
                        success     : function(g){
                            layer.close(html);
                            //页面层
                            vhtml=layer.open({
                              type: 1,
                              title: '墓位缴费专用票据', //不显示标题
                              skin: 'layui-layer-rim', //加上边框
                              area: ['100%', '100%'], //宽高
                              content: g
                            });
                        }
                    });
                }, function(){
                  layer.close(index);
                });
         }else if(g == '2'){
              var index=layer.confirm('该墓位已打印过一次，是否再次打印？', {
                  btn: ['确定','取消'] //按钮
                }, function(){
                    layer.close(index);
                    var muweifapiaohaomoneyuan=my;
                    var dmoney=convertCurrency(muweifapiaohaomoneyuan);
                    $.ajax({
                        type        : 'post',
                        url         : '<?php echo url('Tomb/select_print'); ?>',
                        dataType    : 'json',
                        data        : {
                            type : 19,
                            id : id,
                            dmoney:dmoney,
                            muweifapiaohaomoneyuan:muweifapiaohaomoneyuan,
                            settime:1,
                        },
                        success     : function(g){
                            //页面层
                            vhtml=layer.open({
                              type: 1,
                              title: '墓位缴费专用票据', //不显示标题
                              skin: 'layui-layer-rim', //加上边框
                              area: ['100%', '100%'], //宽高
                              content: g
                            });
                        }
                    });
                }, function(){
                  layer.close(index);
                });
         }
      }
  });
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
            url         : '<?php echo url('Finan/finan_set_muweis'); ?>',
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
<script type="text/javascript">

$('.show_all').click(function(){
  if(cem_id !=0 && cem_area_id!=0 && cem_row_id!=0){
    $(".wlistall").remove();
      var cem_id = $('.add_row').find('.cem_id').val();
      var cem_area_id = $('.add_row').find('.cem_area_id').val();
      var cem_row_id = $('.add_row').find('.cem_row_id').val();
      $.ajax({
          type        : 'POST',
          url         : '<?php echo url('Finan/muweis_sell_all'); ?>',
          data        : {
              cem_id : cem_id,
              cem_area_id : cem_area_id,
              cem_row_id : cem_row_id,
          },
          success     : function(e){
              $('.wlist').html(e);
          },
      });
  }else{
    layer.msg('请选择墓园');
  }
});
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
$('.cem_id').change(function(){
  get_area($(this), '-1');
});
$('.cem_row_id').change(function(){
            $('.show_all').trigger('click');
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
