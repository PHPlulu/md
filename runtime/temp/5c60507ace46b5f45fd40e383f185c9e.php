<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"E:\PHPTutorial\WWW\md\public/../application/index\view\stration\fee.html";i:1533390805;s:66:"E:\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
<div class="cont">
  <form>
    <fieldset>
      <legend>墓位范围</legend>
      
       <div class="conta">
          <p>选择墓园</p>
          <p>选择墓区</p>
          <p>选择墓排</p>
       </div>
       <div class="contb">
        <select name="cem_id" class="cem_id">
          <option value="">请选择</option>
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
       <button type="button" class="contc show_one">显示杂费票据信息</button>
       <button type="button" class="contc show_all">显示全部杂费票据信息</button>
       </div>
    </fieldset>
  </form>
  <div class="conbiao">
    <table class="table table-bordered">
      <!--<caption>边框表格布局</caption>-->
      <thead>
        <tr>
          <th style="min-width: 130px;">操作</th>
          <th>墓位全称</th>
          <th>联系人姓名</th>
          <th>杂费金额</th>
          <th>服务项目</th>
          <th>打印次数</th>
          <th>最后打印日期</th>
          <th>操作员</th>
          <th>墓位状态</th>
          <th>购墓状态</th>
          <th>是否已付费</th>
          <th>杂费单据编号</th>
          <th>备注</th>
        </tr>
      </thead>
      <tbody class="add_row">
        
      </tbody>
    </table>
  </div>
</div>
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/jQuery.print.js"></script>
<script type="text/javascript">
function printz(id){
    imghtml = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
        type        : 'post',
        url         : '<?php echo url('Tomb/select_print'); ?>',
        dataType    : 'json',
        data        : {
            type:21,
            id : id,
        },
        success     : function(g){
            layer.close(imghtml);
             //页面层
            imssshtml=layer.open({
              type: 1,
              title: '杂费票据信息设置', //不显示标题
              skin: 'layui-layer-rim', //加上边框
              area: ['100%', '100%'], //宽高
              content: g
            });
        }
    });
}
function editz(id){
  imghtml = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
        type        : 'post',
        url         : '<?php echo url('select_zf_piaoju_edit'); ?>',
        dataType    : 'json',
        data        : {
            id : id,
        },
        success     : function(g){
            layer.close(imghtml);
             //页面层
            imssshtml=layer.open({
              type: 1,
              title: '杂费票据信息设置', //不显示标题
              skin: 'layui-layer-rim', //加上边框
              area: ['830px', '673px'], //宽高
              content: g
            });
        }
    });
}
function closezf(){
          layer.close(imssshtml);
        }
function subzf(id){
  var zfmoney=$("#zfmoney").val();
  var contbeizhu=$("#contbeizhu").val();
  var chetime=$("input[name=chetime]:checked").val();
  var kezi=$("#kezi option:selected").val();
  var jinbo=$("#jinbo option:selected").val();
  var cixiang=$("#cixiang option:selected").val();
  var bzj=$("#bzj option:selected").val();
  var fengmen=$("#fengmen option:selected").val();
  var taijie=$("#taijie option:selected").val();
  var zhaungshi=$("#zhaungshi option:selected").val();
  var liyi=$("#liyi option:selected").val();
  var dmoney=convertCurrency(zfmoney);
  if(zfmoney){
      var html = layer.load(0, {
        shade: [0.5] //0.1透明度的白色背景
      });
     $.ajax({
          type        : 'post',
          url         : '<?php echo url('Tomb/select_print'); ?>',
          dataType    : 'json',
          data        : {
              type : 20,
              id : id,
              zfmoney:zfmoney,
              dmoney:dmoney,
              contbeizhu:contbeizhu,
              chetime:chetime,
              kezi:kezi,
              jinbo:jinbo,
              cixiang:cixiang,
              bzj:bzj,
              fengmen:fengmen,
              taijie:taijie,
              zhaungshi:zhaungshi,
              liyi:liyi,
          },
          success     : function(g){
              layer.close(html);
              //页面层
              vhtml=layer.open({
                type: 1,
                title: '杂费专用票据', //不显示标题
                skin: 'layui-layer-rim', //加上边框
                area: ['100%', '100%'], //宽高
                content: g
              });
          }
      });
  }else{
    layer.msg('请填写金额');
  }
}
function show_print_zfjsddy_one(){
   $("#ele20").print();
}
function show_print_zfjsddy_ones(){
  $("#ele21").print();
}


function convertCurrency(currencyDigits) {  //数字转化 
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
function delz(id){
   var index=layer.confirm('是否确认该记录？', {
      btn: ['确定','取消'] //按钮
    }, function(){
        layer.close(index);
        var ihtml = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
        $.ajax({
            type        : 'post',
            url         : '<?php echo url('set_delz'); ?>',
            dataType    : 'json',
            data        : {
                id : id
            },
            success     : function(e){
                if (e == 'ok') {
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
$(".show_all").click(function(){
  $(".trtr").remove();
  imghtml = layer.load(0, {
    shade: [0.5] //0.1透明度的白色背景
  });
  $.ajax({
      type        : 'post',
      url         : '<?php echo url('select_show_zf_all'); ?>',
      dataType    : 'json',
      data        : {},
      success     : function(g){
          layer.close(imghtml);
          $(".add_row").append(g);
      }
  });
})
$(".show_one").click(function(){
  imghtml = layer.load(0, {
    shade: [0.5] //0.1透明度的白色背景
  });
  var cem_id=$(".cem_id option:selected").val();
  var cem_area_id=$(".cem_area_id option:selected").val();
  var cem_row_id=$(".cem_row_id option:selected").val();
  if(cem_id != 0){
    $.ajax({
        type        : 'post',
        url         : '<?php echo url('select_show_one'); ?>',
        dataType    : 'json',
        data        : {
            cem_id : cem_id,
            cem_area_id : cem_area_id,
            cem_row_id : cem_row_id,
        },
        success     : function(g){
            layer.close(imghtml);
            $(".add_row").append(g);
        }
    });
  }else{
    layer.close(imghtml);
    layer.msg('请选择墓园');
  }
})
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
              $('.show_one').trigger('click');
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
    $('.show_one').trigger('click');
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
            $('.show_one').trigger('click');
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
