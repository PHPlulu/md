<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"E:\PHPTutorial\WWW\md\public/../application/index\view\deposit\dep_sell.html";i:1534321526;s:66:"E:\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
                         <form class="add_row">
  <fieldset>
    <legend>寄存位销售</legend>
    <div class="conta">
      <p>选择寄存厅</p>
      <p>选择寄存室</p>
      <p>选择寄存层</p>
      <p>寄存位样式</p>
      <p>寄存位状态</p>

    </div>
    <div class="contb">
      <select name="sysid" class="cem_id">
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
      <select name="sysysid" class="sysysid">
        <?php foreach($sysys as $vo): ?>
        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
        <?php endforeach; ?>
      </select>
      <select name="syszt" class="zhuangtai">
        <option value="1">空闲</option>
        <option value="2">已订购</option>
        <option value="3">已安葬</option>
      </select>
      <button type="button" class=" contc show_all">显示全部</button>
    </div>
  </fieldset>

  <div class="ding wlist">
    <div class="wlistall">
      <?php foreach($sysjcw as $k=>$vo): ?>
      <div class="dinga" class="tr_<?php echo $vo['id']; ?>" row_id="<?php echo $vo['id']; ?>">
        <a href="javascript:open('<?php echo $vo['id']; ?>');">
          <div class="dingimg">
            <?php if($vo['syszt'] == 1): ?>
            <img src="__IMG__/kong.png"> <?php elseif($vo['syszt'] == 2): ?>
            <img src="__IMG__/ding_03.png"> <?php elseif($vo['syszt'] == 3): ?>
            <img src="__IMG__/zang_03.png"> <?php endif; ?>
          </div>
          <p><?php echo $vo['long_title']; ?></p>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</form>
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/My97DatePicker/WdatePicker.js"></script>
<script>
  function subform() {

    var jcm = $("#jcm").val();
    var glmo = $("#glmo").val();
    var glmt = $("#glmt").val();
    var settime = $("#settime").val();
    var starttime = $("#starttime").val();
    var endtime = $("#endtime").val();
    var uname = $("#uname").val();
    var ucode = $("#ucode").val();
    var phone = $("#phone").val();
    var mobile = $("#mobile").val();
    var gzgx = $("#gzgx option:selected").val();
    var sex = $("#sex option:selected").val();
    var beizhu = $("#beizhu").val();
    if (jcm == '') {
      layer.msg('请填写寄存位费');
      return false;
    }
    if (glmo == '') {
      layer.msg('请填写管理费');
      return false;
    }
    if (glmt == '') {
      layer.msg('请填写年限');
      return false;
    }
    if (settime == '') {
      layer.msg('请选择定购日期');
      return false;
    }
    if (starttime == '') {
      layer.msg('请选择开始日期');
      return false;
    }
    if (endtime == '') {
      layer.msg('请选择结束日期');
      return false;
    }
    if (uname == '') {
      layer.msg('请填写姓名');
      return false;
    }
    if (ucode == '') {
      layer.msg('请填写身份证号');
      return false;
    }
    if (phone == '') {
      layer.msg('请填写电话');
      return false;
    }
    if (mobile == '') {
      layer.msg('请填写手机号');
      return false;
    }
    if (jcm != '' && glmo != '' && glmt != '' && settime != '' && starttime != '' && endtime != '' && uname != '' && ucode != '' && phone != '' && mobile != '' && gzgx != '' && sex != '') {
      layer.close(ghtml);
      lhtml = layer.load(0, {
        shade: [0.5] //0.1透明度的白色背景
      });
      $('.add_row').attr('action', "<?php echo url('Deposit/dep_sell_add'); ?>").submit();
    }
  }
  function gmobile() {
    var mobile = $("#mobile").val();
    var reg = /^1[3|4|5|8][0-9]\d{4,8}$/;
    if (!reg.test(mobile)) {
      layer.msg('请填写正确的手机号');
      $('#mobile').focus();
      return false;
    }
  }
  function closeghtml() {
    layer.close(ghtml);
  }
  function jcwf() {
    var jcm = $("#jcm").val();
    var reg = /^(0|[1-9][0-9]*)$/;
    if (!reg.test(jcm)) {
      layer.msg('请填写数字');
      $('#jcm').focus();
      return false;
    }
  }
  function glmone() {
    var one = $("#glmo").val();
    var reg = /^(0|[1-9][0-9]*)$/;
    if (!reg.test(one)) {
      layer.msg('请填写数字');
      $('#glmo').focus();
      return false;
    }
  }
  function glmtwo() {
    var one = $("#glmo").val();
    var two = $("#glmt").val();
    var jcm = $("#jcm").val();
    var reg = /^(0|[1-9][0-9]*)$/;
    if (!reg.test(jcm)) {
      layer.msg('请填写数字');
      $('#jcm').focus();
      return false;
    }
    if (!reg.test(one)) {
      layer.msg('请填写数字');
      $('#glmo').focus();
      return false;
    }
    if (!reg.test(two)) {
      layer.msg('请填写数字');
      $('#glmt').focus();
      return false;
    }
    if (two && two != 0 && two != null && two != undefined) {
      var glf = one * two;
      $("#glms").val(glf);
      if (jcm && jcm != null && jcm != undefined) {
        var summ = Number(glf) + Number(jcm);
        $("#summoney").val(summ);
      }
    }
  }

  function jcwdg(id) {
    layer.close(thtml);
    lhtml = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('deposit_set_sell_l'); ?>',
      dataType: 'json',
      data: {
        id: id
      },
      success: function (f) {
        if (f) {
          layer.close(lhtml);
          //页面层
          ghtml = layer.open({
            type: 1,
            title: '寄存位订购', //不显示标题
            skin: 'layui-layer-rim', //加上边框
            area: ['875px', '600px'], //宽高
            content: f
          });
        }
      },
      error: function () {

      },
    });
  }
  function closelayer() {
    layer.close(thtml);
  }
  function open(id) {
    ihtml = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('deposit_set_sell'); ?>',
      dataType: 'json',
      data: {
        id: id
      },
      success: function (e) {
        if (e != '2') {
          layer.close(ihtml);
          //页面层
          thtml = layer.open({
            type: 1,
            title: '寄存位选定信息', //不显示标题
            skin: 'layui-layer-rim', //加上边框
            area: ['490px', '363px'], //宽高
            content: e
          });
        } else {
          layer.close(ihtml);
          layer.msg('该位置已预订或已下葬');
        }
      },
      error: function () {

      },
    });
  }
  /* $('.show_all').click(function(){
      var cem_id = $('.add_row').find('.cem_id').val();
      var cem_area_id = $('.add_row').find('.cem_area_id').val();
      var cem_row_id = $('.add_row').find('.cem_area_id_c').val();
      var sysysid = $('.add_row').find('.sysysid').val();
      var type = $('.add_row').find('.asdaasdas').val();
      if(cem_id!=0 && cem_area_id!=0 && cem_row_id!=0 && sysysid){
         window.location.href="<?php echo url('/index/Deposit/dep_sell/cem_id/"+cem_id+"/cem_area_id/"+cem_area_id+"/cem_row_id/"+cem_row_id+"/sysysid/"+sysysid+"/type/"+type+"'); ?>";
      }else{
        layer.msg('查询条件不全');
      }
  });*/
  $('.show_all').click(function () {
    $(".wlistall").remove();
    var cem_id = $('.add_row').find('.cem_id').val();
    var cem_area_id = $('.add_row').find('.cem_area_id').val();
    var cem_row_id = $('.add_row').find('.cem_row_id').val();
    var syszt = $('.zhuangtai').val();
    var sysysid = $('.add_row').find('.sysysid').val();
    $.ajax({
      type: 'POST',
      url: '<?php echo url('Deposit/dep_sell_all'); ?>',
          data: {
        cem_id: cem_id,
        cem_area_id: cem_area_id,
        cem_row_id: cem_row_id,
        sysysid: sysysid,
        syszt: syszt,
      },
      success: function (e) {
        $('.wlist').html(e);
      },
    });

  });
  function get_area(_this, _select_id) {
    // var _select_id = _select_id ? _select_id : 0;
    let cem_id = _this.val();
    let form = _this.parents('form');
    if (cem_id) {
      $.ajax({
        type: 'GET',
        url: '<?php echo url('System/sysjcc_wlist'); ?>',
                dataType: 'json',
        data: {
          cem_id: cem_id
        },
        success: function (e) {
          let html = '';
          for (i in e) {
            html += '<option ';
            if (_select_id == e[i]['id']) {
              html += 'selected';
            }
            html += ' value="' + e[i]['id'] + '">' + e[i]['title'] + '</option>';
          }
          form.find('.cem_area_id').html(html);
          var cem_area_id = $('.cem_area_id option:selected').val();
          sjsx_ss(cem_area_id);
        },
        error: function () {

        },
      });
    }
  }
  function get_areas(_this, _select_id) {
    // var _select_id = _select_id ? _select_id : 0;
    let cem_id = _this.val();
    let form = _this.parents('form');
    if (cem_id) {
      $.ajax({
        type: 'GET',
        url: '<?php echo url('System/sysjcw_wlist'); ?>',
                dataType: 'json',
        data: {
          cem_id: cem_id
        },
        success: function (e) {
          let html = '';
          for (i in e) {
            html += '<option ';
            if (_select_id == e[i]['id']) {
              html += 'selected';
            }
            html += ' value="' + e[i]['id'] + '">' + e[i]['title'] + '</option>';
          }
          form.find('.cem_area_id_c').html(html);
          $('.show_all').trigger('click');
        },
        error: function () {

        },
      });
    }
  }
  $('.cem_id').change(function () {
    get_area($(this), '-1');
  });
  $(".cem_area_id").change(function () {
    get_areas($(this), '-1');
  });
  $('.cem_area_id_c').change(function () {
    $('.show_all').trigger('click');
  });
  $('.sysysid').change(function () {
    $('.show_all').trigger('click');
  });
  $('.zhuangtai').change(function () {
    $('.show_all').trigger('click');
  });
  function sjsx_ss(cem_area_id) {
    $.ajax({
      type: 'GET',
      url: '<?php echo url('System/sysjcw_wlist'); ?>',
            dataType: 'json',
      data: {
        cem_id: cem_area_id,
      },
      success: function (e) {
        let html = '';
        for (i in e) {
          html += '<option ';

          html += ' value="' + e[i]['id'] + '">' + e[i]['title'] + '</option>';
        }
        $('.cem_area_id_c').html(html);
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
