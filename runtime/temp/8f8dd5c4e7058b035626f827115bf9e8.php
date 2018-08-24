<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\tomb\sale.html";i:1534650724;s:75:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
    size: auto;
    /* auto is the initial value */
    margin: 0mm;
    /* this affects the margin in the printer settings */
  }

  .ktanc div {
    margin-left: 45px;
  }

  .layui-layer-setwin {
    /* display: none; */
  }
</style>
<div class="cont">
  <form class="add_row">
    <fieldset>
      <legend>墓位预订</legend>

      <div class="conta">
        <p>选择墓园</p>
        <p>选择墓区</p>
        <p>选择墓排</p>
        <p>墓位样式</p>
        <p>墓位状态</p>

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
        <select class="style_id">
          <?php foreach($cem_style as $k => $vo): ?>
          <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
          <?php endforeach; ?>
        </select>
        <select class="status_id">
          <?php foreach($cem_status as $k => $vo): ?>
          <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
          <?php endforeach; ?>
        </select>
        <button type="button" class="contc show_all">显示全部</button>

      </div>
    </fieldset>

  </form>
  <div class="ding wlist">


  </div>
</div>
</div>
<!-- <iframe frameborder = "0" scrolling = "no" class="whtan tc1" src=""  ></iframe>
<iframe frameborder = "0" scrolling = "no" class="jsdtan tc2" src=""  ></iframe>
<iframe frameborder = "0" scrolling = "no" class="ktan tc3" src=""  ></iframe> -->
<script src="__JS__/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/My97DatePicker/WdatePicker.js"></script>
<script language="javascript" type="text/javascript" src="__JS__/jQuery.print.js"></script>
<script type="text/javascript">
  //下面用于多图片上传预览功能
  function setImagePreviews1(avalue1) {
    var docObj1 = document.getElementById("doc1");
    var dd1 = document.getElementById("dd1");
    dd1.innerHTML = "";
    var fileList = docObj1.files;
    for (var i = 0; i < fileList.length; i++) {
      dd1.innerHTML += "<div style='float:left' > <img id='img" + i + "'  /> </div>";
      var imgObjPreview = document.getElementById("img" + i);
      if (docObj1.files && docObj1.files[i]) {
        //火狐下，直接设img属性
        imgObjPreview.style.display = 'block';
        imgObjPreview.style.width = '200px';
        imgObjPreview.style.height = '200px';
        //imgObjPreview.src = docObj1.files[0].getAsDataURL();
        //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
        imgObjPreview.src = window.URL.createObjectURL(docObj1.files[i]);
      }
      else {
        //IE下，使用滤镜
        docObj1.select();
        var imgSrc = document.selection.createRange().text;
        alert(imgSrc)
        var localImagId = document.getElementById("img" + i);
        //必须设置初始大小
        localImagId.style.width = "200px";
        localImagId.style.height = "200px";
        //图片异常的捕捉，防止用户修改后缀来伪造图片
        try {
          localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
          localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
        }
        catch (e) {
          alert("您上传的图片格式不正确，请重新选择!");
          return false;
        }
        imgObjPreview.style.display = 'none';
        document.selection.empty();
      }
    }
    return true;
  }
  function setcardimg(id) {
    var html = layer.load(1, {
      shade: [0.5] //0.1透明度的白色背景
    });
    var information = new FormData($('#information')[0]);
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve_setcardimg'); ?>',
      data: information,
      async: false,
      processData: false,
      contentType: false,
      error: function () {
        layer.msg('网络故障，请稍后重试!', { offset: '300px', time: 1500, icon: 7 });
      },
      success: function (responses) {
        if (responses.msg == 'ok') {
          layer.msg('上传成功', { offset: '300px', time: 2000, icon: 1 }, function () {
            layer.close(html);
            layer.close(uimghtml);
            $("#usercardimg").val(responses['flg']['img']);
            $.ajax({
              type: 'post',
              url: '<?php echo url('select_buy_setcardimg'); ?>',
              dataType: 'json',
              data: {
                id: id,
                img: responses['flg']['img'],
              },
              success: function (g) { if (g == 'ok') { layer.close(html); } }
            });
          });
        } else {
          layer.msg('上传失败', { offset: '300px', time: 2000, icon: 2 }, function () {
            layer.close(html);
            layer.close(uimghtml);
          });
        }
      }
    });
  }
</script>
<script type="text/javascript">

  var id;
  var row_status;
  $(document).on('click', '.wlist .dinga', function () {

    id = $(this).attr('row_id');
    row_status = $(this).attr('row_status');

    if (row_status == 38) {
      imghtml = layer.load(0, {
        shade: [0.5] //0.1透明度的白色背景
      });
      $.ajax({
        type: 'post',
        url: '<?php echo url('select_buy_type'); ?>',
        dataType: 'json',
        data: {
          id: id,
        },
        success: function (g) {
          layer.close(imghtml);
          if (g == '该墓位正在洽谈中') {
            layer.msg('该墓位正在洽谈中');
          } else {
            //页面层
            imhtml = layer.open({
              type: 1,
              title: '购墓方式', //不显示标题
              skin: 'layui-layer-rim', //加上边框
              area: ['490px', '365px'], //宽高
              content: g
            });
          }
        }
      });
    } else if (row_status == 44 || row_status == 41) {
      imghtml = layer.load(0, {
        shade: [0.5] //0.1透明度的白色背景
      });
      $.ajax({
        type: 'post',
        url: '<?php echo url('select_buy_type_yu'); ?>',
        dataType: 'json',
        data: {
          id: id,
        },
        success: function (g) {
          layer.close(imghtml);
          //页面层
          imssshtml = layer.open({
            type: 1,
            title: '杂费票据信息设置', //不显示标题
            skin: 'layui-layer-rim', //加上边框
            area: ['830px', '673px'], //宽高
            content: g
          });
        }
      });
    }
    // $('.tc1').attr('src', "<?php echo url('sale_info', '', ''); ?>/id/" + id);
    //
    // $('.tc1').show();
  });

  function closezf() {
    layer.close(imssshtml);
  }
  function close_ck() {
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve_open'); ?>',
      dataType: 'json',
      data: {
        id: id,
      },
      success: function (g) {
        layer.close(imhtml);
      }
    });

  }
  function suoding() {
    imghtml = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('select_buy_suoding'); ?>',
      dataType: 'json',
      data: {
        id: id,
      },
      success: function (g) {
        layer.close(imghtml);
        layer.close(imhtml);
        if (g == 'ok') {
          layer.msg('设置成功');
          $(".show_all").trigger('click');
        } else {
          layer.msg('设置失败');
          $(".show_all").trigger('click');
        }
      }
    });
  }
  function _tc2_show() {
    $('.tc2').attr('src', "<?php echo url('sale_sling_words', '', ''); ?>/id/" + id);
    $('.tc2').show();
  }

  function ydmw() {
    var html = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    layer.close(imhtml);
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve'); ?>',
      dataType: 'json',
      data: {
        id: id,
      },
      success: function (g) {
        layer.close(html);
        if (g == 2) {
          layer.msg('该墓位已锁定');
        } else {
          //页面层
          vhtmlsssss = layer.open({
            type: 1,
            title: '墓位预订', //不显示标题
            skin: 'layui-layer-rim', //加上边框
            area: ['865px', '610px'], //宽高
            content: g
          });
        }
      }
    });
    /*$('.tc1').attr('src', "<?php echo url('reserve', '', ''); ?>/id/" + id);
    $('.tc1').show();*/
  }
  function closeresyuding() {
    var closeht = layer.confirm('您确定要取消操作吗？', {
      btn: ['确定', '取消'] //按钮
    }, function () {
      $.ajax({
        type: 'post',
        url: '<?php echo url('reserve_open'); ?>',
        dataType: 'json',
        data: {
          id: id,
        },
        success: function (g) {
          layer.close(closeht);
          layer.close(vhtmlsssss);
        }
      });
    }, function () {
      layer.close(closeht);
    });
  }
  function subzfs(id) {
    var zfmoney = $("#zfmoney").val();
    var contbeizhu = $("#contbeizhu").val();
    var chetime = $("input[name=chetime]:checked").val();
    var kezi = $("#kezi option:selected").val();
    var jinbo = $("#jinbo option:selected").val();
    var cixiang = $("#cixiang option:selected").val();
    var bzj = $("#bzj option:selected").val();
    var fengmen = $("#fengmen option:selected").val();
    var taijie = $("#taijie option:selected").val();
    var zhaungshi = $("#zhaungshi option:selected").val();
    var liyi = $("#liyi option:selected").val();
    var dmoney = convertCurrency(zfmoney);
    if (zfmoney) {
      var html = layer.load(0, {
        shade: [0.5] //0.1透明度的白色背景
      });
      $.ajax({
        type: 'post',
        url: '<?php echo url('select_print'); ?>',
        dataType: 'json',
        data: {
          type: 18,
          id: id,
          zfmoney: zfmoney,
          dmoney: dmoney,
          contbeizhu: contbeizhu,
          chetime: chetime,
          kezi: kezi,
          jinbo: jinbo,
          cixiang: cixiang,
          bzj: bzj,
          fengmen: fengmen,
          taijie: taijie,
          zhaungshi: zhaungshi,
          liyi: liyi,
        },
        success: function (g) {
          layer.close(html);
          //页面层
          vhtml = layer.open({
            type: 1,
            title: '杂费专用票据', //不显示标题
            skin: 'layui-layer-rim', //加上边框
            area: ['100%', '100%'], //宽高
            content: g
          });
        }
      });
    } else {
      layer.msg('请填写金额');
    }
  }
  function show_print_zfjsddy_close() {
    layer.close(vhtml);
  }
  function show_print_zfjsddy() {
    $.ajax({
      type: 'post',
      url: '<?php echo url('set_print'); ?>',
      dataType: 'json',
      data: {
        type: 2,
        id: id,
      },
      success: function (g) {
        if (g == 'ok') {
          $("#ele18").print();
        } else {
          layer.msg('打印失败');
        }
      }
    });

  }
  function printyd() {
    var html = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('select_print'); ?>',
      dataType: 'json',
      data: {
        type: 2,
        id: id,
      },
      success: function (g) {
        layer.close(html);
        //页面层
        vhtml = layer.open({
          type: 1,
          title: '墓位预订打印单', //不显示标题
          skin: 'layui-layer-rim', //加上边框
          area: ['100%', '100%'], //宽高
          content: g
        });
      }
    });
    /*window.print();*/
  }
  function show_print_yd() {
    $.ajax({
      type: 'post',
      url: '<?php echo url('set_cem_yd'); ?>',
      dataType: 'json',
      data: {},
      success: function (g) {
        if (g == 'ok') {
          $("#ele1").print();
        } else {
          layer.msg('打印失败');
        }
      }
    });

  }
  function show_print_yd_close() {
    layer.close(vhtml);
  }
  function printdz() {
    var html = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('select_print'); ?>',
      dataType: 'json',
      data: {
        type: 3,
        id: id,
      },
      success: function (g) {
        layer.close(html);
        //页面层
        vhtml = layer.open({
          type: 1,
          title: '打印购墓合同(正)', //不显示标题
          skin: 'layui-layer-rim', //加上边框
          area: ['100%', '100%'], //宽高
          content: g
        });
      }
    });
  }
  function show_print_dz() {
    $("#ele2").print();
  }
  function show_print_dz_close() {
    layer.close(vhtml);
  }
  function printdf() {
    var html = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('select_print'); ?>',
      dataType: 'json',
      data: {
        type: 4,
        id: id,
      },
      success: function (g) {
        layer.close(html);
        //页面层
        vhtml = layer.open({
          type: 1,
          title: '打印购墓合同(反)', //不显示标题
          skin: 'layui-layer-rim', //加上边框
          area: ['100%', '100%'], //宽高
          content: g
        });
      }
    });
  }
  function show_print_df() {
    $("#ele3").print();
  }
  function show_print_df_close() {
    layer.close(vhtml);
  }
  function reservemoney() {
    var money = $("#money").val();
    var reserve_money = $("#reserve_money").val();
    var sum = Number(money) - Number(reserve_money);
    $("input[name=unpaid_money]").val(sum);
  }
  function blurmoney() {
    var price = $("#blurprice").val();
    var money = $("#money").val();
    if (Number(price) == Number(money)) {
      $("#usubmit").attr("disabled", false);
      $("#shouquan").attr("disabled", true);
      $("#usubmit").css("color", "#000");
      $("#shouquan").css("color", "#c6c6c6");
      $("#shouquantishi").html('');
    } else {
      $("#usubmit").attr("disabled", true);
      $("#shouquan").attr("disabled", false);
      $("#usubmit").css("color", "#c6c6c6");
      $("#shouquan").css("color", "#000");
      var lv = Number(money) / Number(price);
      $("#shouquantishi").html('墓位成交价格有变动，需授权登录。当前折扣为：' + lv.toFixed(4));
    }
  }
  //授权折扣登录
  function setacc() {
    var html = layer.load(1, {
      shade: [0.5] //0.1透明度的白色背景
    });
    var uacc = $("#uacc").val();
    var upass = $("#upass").val();
    var price = $("#blurprice").val();
    var money = $("#money").val();
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve_setacc'); ?>',
      dataType: 'json',
      data: {
        uacc: uacc,
        upass: upass,
      },
      success: function (g) {
        layer.close(html);
        if (g.msg == 'noacc') {
          layer.msg('账号错误');
        } else if (g.msg == 'nosta') {
          layer.msg('账号被冻结，无法登录。');
        } else if (g.msg == 'nopass') {
          layer.msg('密码错误。');
        } else if (g.msg == 'no') {
          var lv = Number(money) / Number(price);
          var alsq = layer.alert('当前授权用户为：' + g.title + '<br>用户销售折扣权限为：' + g.flg + '<br>当前墓位实际折扣为：' + lv.toFixed(4) + ' <br><br>授权失败，用户不具备相应的权限', {
            icon: 4,
            skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
          }, function () {
            layer.close(acchtml);
            layer.close(alsq);
          })
        } else if (g.msg == 'ok') {
          var lv = Number(money) / Number(price);
          var zk = lv.toFixed(4);
          if (g.flg <= zk) {
            var alsq = layer.alert('当前授权用户为：' + g.title + '<br>用户销售折扣权限为：' + g.flg + '<br>当前墓位实际折扣为：' + zk + ' <br><br>授权成功', {
              icon: 4,
              skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
            }, function () {
              layer.close(alsq);
              layer.close(acchtml);
              $("#s_sta").val("");
              $("#s_staff_id").val(g.s_staff_id);
              $("#s_sta").val("2");
              $("#s_lv").val(zk);
              $("#usubmit").attr("disabled", false);
              $("#shouquan").attr("disabled", true);
              $("#usubmit").css("color", "#000");
              $("#shouquan").css("color", "#c6c6c6");
            })
          } else {
            var alsq = layer.alert('当前授权用户为：' + g.title + '<br>用户销售折扣权限为：' + g.flg + '<br>当前墓位实际折扣为：' + zk + ' <br><br>授权失败，用户不具备相应的权限', {
              icon: 4,
              skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
            }, function () {
              layer.close(alsq);
              layer.close(acchtml);
            })
          }
        }
      }
    });
  }
  //授权折扣登录
  function setaccs() {
    var html = layer.load(1, {
      shade: [0.5] //0.1透明度的白色背景
    });
    var uacc = $("#uacc").val();
    var upass = $("#upass").val();
    var price = $("#yprice").val();
    var money = $("#mw_price").val();
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve_setaccs'); ?>',
      dataType: 'json',
      data: {
        uacc: uacc,
        upass: upass,
      },
      success: function (g) {
        layer.close(html);
        if (g.msg == 'noacc') {
          layer.msg('账号错误');
        } else if (g.msg == 'nosta') {
          layer.msg('账号被冻结，无法登录。');
        } else if (g.msg == 'nopass') {
          layer.msg('密码错误。');
        } else if (g.msg == 'no') {
          var lv = Number(money) / Number(price);
          var alsq = layer.alert('当前授权用户为：' + g.title + '<br>用户销售折扣权限为：' + g.flg + '<br>当前墓位实际折扣为：' + lv.toFixed(4) + ' <br><br>授权失败，用户不具备相应的权限', {
            icon: 4,
            skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
          }, function () {
            layer.close(acchtml);
            layer.close(alsq);
          })
        } else if (g.msg == 'ok') {
          var lv = Number(money) / Number(price);
          var zk = lv.toFixed(4);
          if (g.flg <= zk) {
            var alsq = layer.alert('当前授权用户为：' + g.title + '<br>用户销售折扣权限为：' + g.flg + '<br>当前墓位实际折扣为：' + zk + ' <br><br>授权成功', {
              icon: 4,
              skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
            }, function () {
              layer.close(alsq);
              layer.close(acchtml);
              $("#s_sta").val("");
              $("#s_staff_id").val(g.s_staff_id);
              $("#s_sta").val("2");
              $("#s_lv").val(zk);
              $("#zusubmit").attr("disabled", false);
              $("#zshouquan").attr("disabled", true);
              $("#zusubmit").css("color", "#000");
              $("#zshouquan").css("color", "#c6c6c6");
            })
          } else {
            var alsq = layer.alert('当前授权用户为：' + g.title + '<br>用户销售折扣权限为：' + g.flg + '<br>当前墓位实际折扣为：' + zk + ' <br><br>授权失败，用户不具备相应的权限', {
              icon: 4,
              skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
            }, function () {
              layer.close(alsq);
              layer.close(acchtml);
            })
          }
        }
      }
    });
  }
  function zksq() {
    var html = layer.load(1, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve_zksq'); ?>',
      dataType: 'json',
      data: {
        id: id,
      },
      success: function (g) {
        layer.close(html);
        //页面层
        acchtml = layer.open({
          type: 1,
          title: '授权登录', //不显示标题
          skin: 'layui-layer-rim', //加上边框
          area: ['468px', '230px'], //宽高
          content: g
        });
      }
    });
  }
  function zksqs() {
    var html = layer.load(1, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve_zksqs'); ?>',
      dataType: 'json',
      data: {
        id: id,
      },
      success: function (g) {
        layer.close(html);
        //页面层
        acchtml = layer.open({
          type: 1,
          title: '授权登录', //不显示标题
          skin: 'layui-layer-rim', //加上边框
          area: ['468px', '230px'], //宽高
          content: g
        });
      }
    });
  }
  function closacc() {
    layer.close(acchtml);
  }
  function closeghtml() {
    var closehh = layer.confirm('您确定要取消操作吗？', {
      btn: ['确实', '取消'] //按钮
    }, function () {
      $.ajax({
        type: 'post',
        url: '<?php echo url('reserve_open'); ?>',
        dataType: 'json',
        data: {
          id: id,
        },
        success: function (g) {
          layer.close(closehh);
          layer.close(dghtml);
        }
      });
    }, function () {
      layer.close(closehh);
    });
  }
  function closeres() {
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve_open'); ?>',
      dataType: 'json',
      data: {
        id: id,
      },
      success: function (g) {
        layer.close(vhtml);
      }
    });
  }
  function subres() {
    var seid = $("#seid").val();
    var reserve_date = $("input[name='reserve_date']").val();
    var remind_date = $("input[name='remind_date']").val();
    var money = $("input[name='money']").val();
    var blurprice = $("#blurprice").val();
    var reserve_money = $("input[name='reserve_money']").val();
    var unpaid_money = $("input[name='unpaid_money']").val();
    var contacts_name = $("input[name='contacts_name']").val();
    var contacts_postcode = $("input[name='contacts_postcode']").val();
    var contacts_idcard = $("input[name='contacts_idcard']").val();
    var contacts_sex = $("#contacts_sex option:selected").val();
    var contacts_tel = $("input[name='contacts_tel']").val();
    var contacts_phone = $("input[name='contacts_phone']").val();
    var contacts_workplace = $("input[name='contacts_workplace']").val();
    var contacts_weixin = $("input[name='contacts_weixin']").val();
    var contacts_address = $("input[name='contacts_address']").val();
    var salesman = $("#salesman option:selected").val();
    var beizhu = $("#beizhu").val();
    var s_staff_id = $("#s_staff_id").val();
    var s_lv = $("#s_lv").val();
    var s_sta = $("#s_sta").val();
    var dmoney = convertCurrency(money);
    var dprice = convertCurrency(blurprice);
    $("#price_m").val(dprice);
    $("#money_m").val(dmoney);
    var price_m = $("#price_m").val();
    var money_m = $("#money_m").val();
    var myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
    if (contacts_tel.length != '11') {
      layer.msg('联系手机1,手机位数不正确');
      return false;
    }
    if (contacts_phone.length != '11') {
      layer.msg('联系手机2,手机位数不正确');
      return false;
    }
    if (!myreg.test(contacts_tel)) {
      layer.msg('联系手机1,手机号不正确');
      return false;
    }
    if (!myreg.test(contacts_phone)) {
      layer.msg('联系手机2,手机号不正确');
      return false;
    }
//    layer.msg(contacts_address);
//    return false;
    if (!contacts_address) {
          layer.msg('家庭住址为必填项');
          return false;
      }
    var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
    if (reg.test(contacts_idcard) === false) {
      layer.msg('身份证输入不合法');
      return false;
    }
    var closess = layer.confirm('请核实信息无误，？', {
      btn: ['确定', '取消'] //按钮
    }, function () {
      if (reserve_date != '' && remind_date != '' && money != '' && reserve_money != '' && unpaid_money != '' && contacts_name != '' && contacts_postcode != '' && contacts_idcard != '' && contacts_sex != '' && contacts_phone != '' && contacts_tel != '' && salesman != '') {
        var html = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
        $.ajax({
          type: 'post',
          url: '<?php echo url('reserve_add'); ?>',
          dataType: 'json',
          data: {
            seid: seid,
            reserve_date: reserve_date,
            remind_date: remind_date,
            money: money,
            reserve_money: reserve_money,
            unpaid_money: unpaid_money,
            s_sta: s_sta,
            s_staff_id: s_staff_id,
            s_lv: s_lv,
            money_m: money_m,
            price_m: price_m,
            contacts_name: contacts_name,
            contacts_postcode: contacts_postcode,
            contacts_idcard: contacts_idcard,
            contacts_sex: contacts_sex,
            contacts_tel: contacts_tel,
            contacts_phone: contacts_phone,
            contacts_workplace: contacts_workplace,
            contacts_weixin: contacts_weixin,
            contacts_address: contacts_address,
            salesman: salesman,
            beizhu: beizhu,
          },
          success: function (g) {
            if (g == 'ok') {
              $('.show_all').trigger('click');
              $("#usubmit").attr("disabled", true);
              $("#usubmit").css("color", "#c6c6c6");
              $("#print_yd").attr("disabled", false);
              $("#print_yd").css("color", "#000");
              $(".whtan input").attr("disabled", true);
              $("#beizhu").attr("disabled", true);
              $("#salesman").attr("disabled", true);
              $("#dead_relationship").attr("disabled", true);
              $("#contacts_sex").attr("disabled", true);
              $(".whtan input").css("color", "rgb(198, 198, 198)");
              $("#beizhu").css("color", "rgb(198, 198, 198)");
              $("#salesman").css("color", "rgb(198, 198, 198)");
              $("#dead_relationship").css("color", "rgb(198, 198, 198)");
              $("#contacts_sex").css("color", "rgb(198, 198, 198)");
              layer.close(html);
              layer.msg('设置成功');
            } else {
              layer.close(html);
              layer.msg('设置失败');
            }
          }
        });
      } else {
        layer.msg('信息填写不全或不正确');
      }
    }, function () {
      layer.close(closess);
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
          if (zeroCount > 0) {
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
  function zjgm() {
    var html = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    layer.close(imhtml);
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve_zjgm'); ?>',
      dataType: 'json',
      data: {
        id: id,
      },
      success: function (g) {
        layer.close(html);
        if (g == "2") {
          layer.msg('改墓位已锁定');
        } else {
          dghtml = layer.open({
            type: 1,
            title: '墓位定购', //不显示标题
            skin: 'layui-layer-rim', //加上边框
            area: ['872px', '600px'], //宽高
            content: g
          });
        }

      }
    });
  }
  $(document).keydown(function (event) {
    //屏蔽F5刷新键 
    if (event.keyCode == 116) {
      $.ajax({
        type: 'post',
        url: '<?php echo url('reserve_open'); ?>',
        dataType: 'json',
        data: {
          id: id,
        },
        success: function (g) {
          layer.close(vhtml);
        }
      });
    }
  });
  function subform() {
    var manage_money = $("#manage_money").val();
    var manage_year = $("#manage_year").val();
    var mw_price = $("#mw_price").val();
    var yprice = $("#yprice").val();
    var seid = $("#setid").val();
    var settime = $("#settime").val();
    var starttime = $("#starttime").val();
    var endtime = $("#endtime").val();
    var manage_sum_money = $("input[name='manage_sum_money']").val();
    var pay_sum_money = $("input[name='pay_sum_money']").val();
    var dead_relationship = $("#dead_relationship option:selected").val();
    var contacts_name = $("input[name='contacts_name']").val();
    var contacts_idcard = $("input[name='contacts_idcard']").val();
    var contacts_postcode = $("input[name='contacts_postcode']").val();
    var contacts_sex = $("#contacts_sex option:selected").val();
    var contacts_tel = $("input[name='contacts_tel']").val();
    var contacts_phone = $("input[name='contacts_phone']").val();
    var contacts_workplace = $("input[name='contacts_workplace']").val();
    var contacts_email = $("input[name='contacts_email']").val();
    var contacts_address = $("input[name='contacts_address']").val();
    var salesman = $("#salesman option:selected").val();
    var beizhu = $("#beizhu").val();
    var usercardimg = $("#usercardimg").val();
    var s_staff_id = $("#s_staff_id").val();
    var s_lv = $("#s_lv").val();
    var s_sta = $("#s_sta").val();
    var dmoney = convertCurrency(mw_price);
    var dprice = convertCurrency(yprice);
    $("#price_m_d").val(dprice);
    $("#money_m_d").val(dmoney);
    var price_m = $("#price_m_d").val();
    var money_m = $("#money_m_d").val();
    var reg = /^(0|[1-9][0-9]*)$/;
    var myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
    if (mw_price == '') {
      layer.msg('请填写墓位费');
      return false;
    }
    if (manage_money == '') {
      layer.msg('请填写管理费');
      return false;
    }
    if (manage_year == '') {
      layer.msg('请填写年限');
      return false;
    }
    if (!reg.test(mw_price)) {
      layer.msg('请填写数字');
      $('#mw_price').focus();
      return false;
    }
    if (!reg.test(manage_money)) {
      layer.msg('请填写数字');
      $('#manage_money').focus();
      return false;
    }
    if (!reg.test(manage_year)) {
      layer.msg('请填写数字');
      $('#manage_year').focus();
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
    if (contacts_name == '') {
      layer.msg('请填写姓名');
      return false;
    }
    if (contacts_idcard == '') {
      layer.msg('请填写身份证号');
      return false;
    }
    if (contacts_tel == '') {
      layer.msg('请填写电话');
      return false;
    }
    if (contacts_phone == '') {
      layer.msg('请填写手机号');
      return false;
    }
    if (contacts_tel.length != '11') {
      layer.msg('联系手机1,手机位数不正确');
      return false;
    }
    if (contacts_phone.length != '11') {
      layer.msg('联系手机2,手机位数不正确');
      return false;
    }
    if (!myreg.test(contacts_tel)) {
      layer.msg('联系手机1,手机号不正确');
      return false;
    }
    if (!myreg.test(contacts_phone)) {
      layer.msg('联系手机2,手机号不正确');
      return false;
    }
      if (!contacts_address) {
          layer.msg('家庭住址为必填项');
          return false;
      }
    var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
    if (reg.test(contacts_idcard) === false) {
      layer.msg('身份证输入不合法');
      return false;
    }
    var closeaa = layer.confirm('请确认信息无误，点击确认？', {
      btn: ['确定', '取消'] //按钮
    }, function () {
      if (mw_price != '' && manage_money != '' && manage_year != '' && settime != '' && starttime != '' && endtime != '' && contacts_name != '' && contacts_idcard != '' && contacts_tel != '' && contacts_phone != '') {
        ldghtml = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
        $.ajax({
          type: 'post',
          url: '<?php echo url('reserve_dg_add'); ?>',
          dataType: 'json',
          data: {
            seid: seid,
            mw_price: mw_price,
            manage_money: manage_money,
            manage_year: manage_year,
            manage_sum_money: manage_sum_money,
            settime: settime,
            starttime: starttime,
            endtime: endtime,
            price_m: price_m,
            money_m: money_m,
            usercardimg: usercardimg,
            pay_sum_money: pay_sum_money,
            dead_relationship: dead_relationship,
            contacts_name: contacts_name,
            s_staff_id: s_staff_id,
            s_sta: s_sta,
            s_lv: s_lv,
            contacts_idcard: contacts_idcard,
            contacts_sex: contacts_sex,
            contacts_tel: contacts_tel,
            contacts_phone: contacts_phone,
            contacts_workplace: contacts_workplace,
            contacts_postcode: contacts_postcode,
            contacts_email: contacts_email,
            contacts_address: contacts_address,
            salesman: salesman,
            beizhu: beizhu,
          },
          success: function (g) {
            if (g == 'ok') {
              $('.show_all').trigger('click');
              $("#zusubmit").attr("disabled", true);
              $("#zusubmit").css("color", "#c6c6c6");
              $("#user_idcard").attr("disabled", false);
              $("#user_idcard").css("color", "#000");
              $("#print_dz").attr("disabled", false);
              $("#print_dz").css("color", "#000");
              $("#print_df").attr("disabled", false);
              $("#print_df").css("color", "#000");
              $(".dgtan input").attr("disabled", true);
              $(".dgtan input").css("backgroung", "rgb(198, 198, 198)");
              $("#beizhu").attr("disabled", true);
              $("#salesman").attr("disabled", true);
              $("#dead_relationship").attr("disabled", true);
              $("#contacts_sex").attr("disabled", true);
              $("#beizhu").css("backgroung", "rgb(198, 198, 198)");
              $("#salesman").css("backgroung", "rgb(198, 198, 198)");
              $("#dead_relationship").css("backgroung", "rgb(198, 198, 198)");
              $("#contacts_sex").css("backgroung", "rgb(198, 198, 198)");
              layer.close(ldghtml);
              layer.msg('设置成功');
            } else {
              layer.close(ldghtml);
              layer.msg('设置失败');
            }
          }
        });
      } else {
        layer.msg('信息填写不全');
      }
    }, function () {
      layer.close(closeaa);
    });
  }
  function uicard() {
    var imgshtml = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('tomb_uicard'); ?>',
      dataType: 'json',
      data: { id: id },
      success: function (g) {
        layer.close(imgshtml);
        //页面层
        uimghtml = layer.open({
          type: 1,
          title: '购墓联系人身份证设置', //不显示标题
          skin: 'layui-layer-rim', //加上边框
          area: ['600px', '380px'], //宽高
          content: g
        });
      }
    });
  }
  function setcardimgclose() {
    layer.close(uimghtml);
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
  function jcwf() {
    var mw_price = $("#mw_price").val();
    var yprice = $("#yprice").val();
    var reg = /^(0|[1-9][0-9]*)$/;
    if (!reg.test(mw_price)) {
      layer.msg('请填写数字');
      $('#mw_price').focus();
      return false;
    }
    if (Number(mw_price) == Number(yprice)) {
      $("#zusubmit").attr("disabled", false);
      $("#zshouquan").attr("disabled", true);
      $("#zusubmit").css("color", "#000");
      $("#zshouquan").css("color", "#c6c6c6");
      $("#zshouquantishi").html('');
    } else {
      $("#zusubmit").attr("disabled", true);
      $("#zshouquan").attr("disabled", false);
      $("#zshouquan").css("color", "#000");
      $("#zusubmit").css("color", "#c6c6c6");
      var lv = Number(mw_price) / Number(yprice);
      $("#zshouquantishi").html('墓位成交价格有变动，需授权登录。当前折扣为：' + lv.toFixed(4));
    }
  }
  function glmone() {
    var one = $("#manage_money").val();
    var reg = /^(0|[1-9][0-9]*)$/;
    if (!reg.test(one)) {
      layer.msg('请填写数字');
      $('#manage_money').focus();
      return false;
    }
  }
  function glmtwo() {
    var manage_money = $("#manage_money").val();
    var two = $("#manage_year").val();
    var mw_price = $("#mw_price").val();
    var reg = /^(0|[1-9][0-9]*)$/;
    if (!reg.test(mw_price)) {
      layer.msg('请填写数字');
      $('#mw_price').focus();
      return false;
    }
    if (!reg.test(manage_money)) {
      layer.msg('请填写数字');
      $('#manage_money').focus();
      return false;
    }
    if (!reg.test(two)) {
      layer.msg('请填写数字');
      $('#manage_year').focus();
      return false;
    }
    if (two != null && two != undefined) {
      var glf = manage_money * two;
      $("#manage_sum_money").val(glf);
      if (mw_price && mw_price != null && mw_price != undefined) {
        var summ = Number(glf) + Number(mw_price);
        $("#pay_sum_money").val(summ);
      }
    }
  }
  function jsdtc() {
    var html = layer.load(0, {
      shade: [0.5] //0.1透明度的白色背景
    });
    $.ajax({
      type: 'post',
      url: '<?php echo url('reserve_jsdtc'); ?>',
      dataType: 'json',
      data: {
        id: id,
      },
      success: function (g) {
        layer.close(html);
        //页面层
        zfxhtml = layer.open({
          type: 1,
          title: '碑文计算单计算', //不显示标题
          skin: 'layui-layer-rim', //加上边框
          area: ['1015px', '740px'], //宽高
          content: g
        });
      }
    });
  }
  function setjsdclose() {
    layer.close(zfxhtml);
  }
</script>
<script type="text/javascript">
  function sumk() {
    var z_t_k_p = $("#z_t_k_p").val();
    var z_d_k_p = $("#z_d_k_p").val();
    var z_z_k_p = $("#z_z_k_p").val();
    var z_x_k_p = $("#z_x_k_p").val();
    var sum = Number(z_t_k_p) + Number(z_d_k_p) + Number(z_z_k_p) + Number(z_x_k_p);
    $("#zk_sum").val(sum);
  }
  function sumb() {
    var z_t_b_p = $("#z_t_b_p").val();
    var z_d_b_p = $("#z_d_b_p").val();
    var z_z_b_p = $("#z_z_b_p").val();
    var z_x_b_p = $("#z_x_b_p").val();
    var sum = Number(z_t_b_p) + Number(z_d_b_p) + Number(z_z_b_p) + Number(z_x_b_p);
    $("#zb_sum").val(sum);
  }
  function ztk() {
    var z_t = $("#z_t").val();
    var z_t_k = $("#z_t_k").val();
    var sum = z_t * z_t_k;
    $("#z_t_k_p").val(sum);
    sumk();
  }
  function zdk() {
    var z_d = $("#z_d").val();
    var z_d_k = $("#z_d_k").val();
    var sum = z_d * z_d_k;
    $("#z_d_k_p").val(sum);
    sumk();
  }
  function zzk() {
    var z_z = $("#z_z").val();
    var z_z_k = $("#z_z_k").val();
    var sum = z_z * z_z_k;
    $("#z_z_k_p").val(sum);
    sumk();
  }
  function zxk() {
    var z_x = $("#z_x").val();
    var z_x_k = $("#z_x_k").val();
    var sum = z_x * z_x_k;
    $("#z_x_k_p").val(sum);
    sumk();
  }
  function ztb() {
    var z_t = $("#z_t").val();
    var z_t_b = $("#z_t_b").val();
    var sum = z_t * z_t_b;
    $("#z_t_b_p").val(sum);
    sumb();
  }
  function zdb() {
    var z_d = $("#z_d").val();
    var z_d_b = $("#z_d_b").val();
    var sum = z_d * z_d_b;
    $("#z_d_b_p").val(sum);
    sumb();
  }
  function zzb() {
    var z_z = $("#z_z").val();
    var z_z_b = $("#z_z_b").val();
    var sum = z_z * z_z_b;
    $("#z_z_b_p").val(sum);
    sumb();
  }
  function zxb() {
    var z_x = $("#z_x").val();
    var z_x_b = $("#z_x_b").val();
    var sum = z_x * z_x_b;
    $("#z_x_b_p").val(sum);
    sumb();
  }
  function cxprice() {
    var cx_num = $("#cx_num").val();
    var cx_price = $("#cx_price").val();
    var sum = cx_num * cx_price;
    $("#cx_sum").val(sum);
    heji();
  }
  function lbprice() {
    var lb_price = $("#lb_price").val();
    $("#lb_sum").val(lb_price);
    heji();
  }
  function tjprice() {
    var tj_num = $("#tj_num").val();
    var tj_price = $("#tj_price").val();
    var sum = tj_num * tj_price;
    $("#tj_sum").val(sum);
    heji();
  }
  function zsprice() {
    var zs_price = $("#zs_price").val();
    $("#zs_sum").val(zs_price);
    heji();
  }
  function bzjprice() {
    var bzj_price = $("#bzj_price").val();
    $("#bzj_sum").val(bzj_price);
    heji();
  }
  function heji() {
    var zk_sum = $("#zk_sum").val();
    var zb_sum = $("#zb_sum").val();
    var cx_sum = $("#cx_sum").val();
    var lb_sum = $("#lb_sum").val();
    var tj_sum = $("#tj_sum").val();
    var zs_sum = $("#zs_sum").val();
    var bzj_sum = $("#bzj_sum").val();
    var sum = Number(zk_sum) + Number(zb_sum) + Number(cx_sum) + Number(lb_sum) + Number(tj_sum) + Number(zs_sum) + Number(bzj_sum);
    $("#sum").val(sum);
    var dmoney = convertCurrency(sum);
    $("#dsum").val(dmoney);
  }
  function sumMoney() {
    var zk_sum = $("#zk_sum").val();
    var zb_sum = $("#zb_sum").val();
    var cx_sum = $("#cx_sum").val();
    var lb_sum = $("#lb_sum").val();
    var tj_sum = $("#tj_sum").val();
    var zs_sum = $("#zs_sum").val();
    var bzj_sum = $("#bzj_sum").val();
    var sum = Number(zk_sum) + Number(zb_sum) + Number(cx_sum) + Number(lb_sum) + Number(tj_sum) + Number(zs_sum) + Number(bzj_sum);
    $("#sum").val(sum);
    var dmoney = convertCurrency(sum);
    $("#dsum").val(dmoney);
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
          if (zeroCount > 0) {
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
  function setjsd(eid) {
    var dyzuser = $('input:radio[name="dyzuser"]:checked').val();
    if (dyzuser) {
      ldghtml = layer.load(0, {
        shade: [0.5] //0.1透明度的白色背景
      });
      var z_t = $("#z_t").val();
      var z_t_k = $("#z_t_k").val();
      var z_t_b = $("#z_t_b").val();
      var z_t_k_p = $("#z_t_k_p").val();
      var z_t_b_p = $("#z_t_b_p").val();
      var z_d = $("#z_d").val();
      var z_d_k = $("#z_d_k").val();
      var z_d_b = $("#z_d_b").val();
      var z_d_k_p = $("#z_d_k_p").val();
      var z_d_b_p = $("#z_d_b_p").val();
      var z_z = $("#z_z").val();
      var z_z_k = $("#z_z_k").val();
      var z_z_b = $("#z_z_b").val();
      var z_z_k_p = $("#z_z_k_p").val();
      var z_z_b_p = $("#z_z_b_p").val();
      var z_x = $("#z_x").val();
      var z_x_k = $("#z_x_k").val();
      var z_x_b = $("#z_x_b").val();
      var z_x_k_p = $("#z_x_k_p").val();
      var z_x_b_p = $("#z_x_b_p").val();
      var zk_sum = $("#zk_sum").val();
      var zb_sum = $("#zb_sum").val();
      var z_beizhu = $("#z_beizhu").val();
      var cx_type = $("input[name='cx_type']:checked").val();
      var cx = $("input[name='cx']:checked").val();
      var cx_num = $("#cx_num").val();
      var cx_price = $("#cx_price").val();
      var cx_sum = $('#cx_sum').val();
      var lb = $("input[name='lb']:checked").val();
      var lb_type = $("input[name='lb_type']:checked").val();
      var lb_price = $("#lb_price").val();
      var lb_sum = $("#lb_sum").val();
      var tj = $("input[name='tj']:checked").val();
      var tj_num = $("#tj_num").val();
      var tj_price = $("#tj_price").val();
      var tj_sum = $("#tj_sum").val();
      var cx_beizhu = $("#cx_beizhu").val();
      var lb_beizhu = $("#lb_beizhu").val();
      var tj_beizhu = $("#tj_beizhu").val();
      var zs_beizhu = $("#zs_beizhu").val();
      var bzj_beizhu = $("#bzj_beizhu").val();
      var zs = $("input[name='zs']:checked").val();
      var zs_type = $("input[name='zs_type']:checked").val();
      var zs_price = $("#zs_price").val();
      var zs_sum = $("#zs_sum").val();
      var bzj = $("input[name='bzj']:checked").val();
      var bzj_type = $("input[name='bzj_type']:checked").val();
      var bzj_price = $("#bzj_price").val();
      var bzj_sum = $("#bzj_sum").val();
      var sum = $("#sum").val();
      var dsum = $("#dsum").val();
      $.ajax({
        type: 'post',
        url: '<?php echo url('tomb_setjsd_set'); ?>',
        dataType: 'json',
        data: {
          eid: eid,
          z_t: z_t,
          z_t_k: z_t_k,
          z_t_b: z_t_b,
          z_t_k_p: z_t_k_p,
          z_t_b_p: z_t_b_p,
          z_d: z_d,
          z_d_k: z_d_k,
          z_d_b: z_d_b,
          z_d_k_p: z_d_k_p,
          z_d_b_p: z_d_b_p,
          z_z: z_z,
          z_z_k: z_z_k,
          z_z_b: z_z_b,
          z_z_k_p: z_z_k_p,
          z_z_b_p: z_z_b_p,
          z_x: z_x,
          z_x_k: z_x_k,
          z_x_b: z_x_b,
          z_x_k_p: z_x_k_p,
          z_x_b_p: z_x_b_p,
          zk_sum: zk_sum,
          zb_sum: zb_sum,
          z_beizhu: z_beizhu,
          cx_type: cx_type,
          cx: cx,
          cx_num: cx_num,
          cx_price: cx_price,
          cx_sum: cx_sum,
          lb: lb,
          lb_type: lb_type,
          lb_price: lb_price,
          lb_sum: lb_sum,
          tj: tj,
          tj_num: tj_num,
          tj_price: tj_price,
          tj_sum: tj_sum,
          cx_beizhu: cx_beizhu,
          lb_beizhu: lb_beizhu,
          tj_beizhu: tj_beizhu,
          zs_beizhu: zs_beizhu,
          bzj_beizhu: bzj_beizhu,
          zs: zs,
          zs_type: zs_type,
          zs_price: zs_price,
          zs_sum: zs_sum,
          bzj: bzj,
          bzj_type: bzj_type,
          bzj_price: bzj_price,
          bzj_sum: bzj_sum,
          sum: sum,
          dsum: dsum,
          eid: eid,
          dyzuser: dyzuser,
        },
        success: function (g) {
          if (g == 'ok') {
            layer.msg('设置成功');
            layer.close(ldghtml);
            layer.close(beiwencshtml);
          } else if (g == 'no') {
            layer.msg('设置失败');
            layer.close(ldghtml);
            layer.close(beiwencshtml);
          } else if (g == 'msg') {
            layer.close(ldghtml);
            layer.msg('该墓位还没有下葬');
          }
        }
      });
    } else {
      layer.msg('请选择故者');
    }
  }
  function show_print_xd_f() {
    $("#ele16").print();
  }
  function pring_zfdj() {
    var zfid = $('input:radio[name="zfid"]:checked').val();
    if (zfid) {
      var html = layer.load(0, {
        shade: [0.5] //0.1透明度的白色背景
      });
      $.ajax({
        type: 'post',
        url: '<?php echo url('select_print'); ?>',
        dataType: 'json',
        data: {
          type: 17,
          zanguser: zfid,
        },
        success: function (g) {
          layer.close(html);
          //页面层
          vhtml = layer.open({
            type: 1,
            title: '杂费收款项目、金额—打印票据', //不显示标题
            skin: 'layui-layer-rim', //加上边框
            area: ['100%', '100%'], //宽高
            content: g
          });
        }
      });
    } else {
      layer.msg('无打印信息或没有选择');
    }
  }
</script>
<script type="text/javascript">
  $(document).on('click', '.all_btn', function () {
    $('.wlist input').prop('checked', $(this).prop('checked'));
  });
  // $('.wlist ').on('click', 'tr', function(){
  //     $(".add_row .cem_id").val($(this).find('.row_cem_id').attr('val'));
  //     get_area($(".add_row .cem_id"), $(this).find('.row_cem_area_id').attr('val') );
  //     // $(".add_row .row_cem_area_id").val($(this).find('.row_cem_area_id').attr('val'));
  //     $(".add_row .row_title").val($(this).find('.row_title').text());
  //     $(".add_row .row_id").val($(this).attr('row_id'));
  // });

  $('.all_btn_z').click(function () {
    $('.all_btn_z').parents('.mwtxribbot').find('input').prop('checked', $(this).prop('checked'));
  });

  $('.sbmt').click(function () {
    if ($(this).hasClass('del') && confirm('确认删除?')) {
      $('.add_row').attr('action', $(this).attr('url')).submit();
    } else {
      $('.add_row').attr('action', $(this).attr('url')).submit();
    }

  });

  $(document).on('click', '.del', function () {
    var ids = [];
    $('.wlist input').each(function () {
      if ($(this).prop('checked')) {
        ids.push($(this).val());
      }

    });
    if (!ids.length) {
      return alt('请先选择要删除的墓位');
    }

    $.ajax({
      type: 'GET',
      url: '<?php echo url('info_del'); ?>',
      dataType: 'json',
      data: {
        ids: ids
      },
      success: function (e) {
        if (e.status) {
          for (let i in ids) {
            $('.tr_' + ids[i]).remove();
          }
        }
      },
      error: function () {

      },
    });

  });
</script>


<script type="text/javascript">
  function get_row(_this, _select_id) {
    // var _select_id = _select_id ? _select_id : 0;
    let cem_area_id = _this.val();
    let form = _this.parents('form');
    if (cem_area_id) {
      $.ajax({
        type: 'GET',
        url: '<?php echo url('Cem/row_wlist'); ?>',
                    dataType: 'json',
        data: {
          cem_area_id: cem_area_id
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
          form.find('.cem_row_id').html(html);
          $('.show_all').trigger('click');
        },
        error: function () {

        },
      });
    }
  }



  function get_area(_this, _select_id) {
    // var _select_id = _select_id ? _select_id : 0;
    let cem_id = _this.val();
    let form = _this.parents('form');
    if (cem_id) {
      $.ajax({
        type: 'GET',
        url: '<?php echo url('Cem/area_wlist'); ?>',
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

  $('.cem_id').change(function () {
    get_area($(this), '-1');
  });
  $('.cem_area_id').change(function () {
    get_row($(this), '-1');
  });
  $('.cem_row_id').change(function () {
    $('.show_all').trigger('click');
  });
  $('.style_id').change(function () {
    $('.show_all').trigger('click');
  });
  $('.status_id').change(function () {
    $('.show_all').trigger('click');
  });
  function sjsx_ss(cem_area_id) {
    $.ajax({
      type: 'GET',
      url: '<?php echo url('Cem/row_wlist'); ?>',
                dataType: 'json',
      data: {
        cem_area_id: cem_area_id
      },
      success: function (e) {
        let html = '';
        for (i in e) {
          html += '<option ';

          html += ' value="' + e[i]['id'] + '">' + e[i]['title'] + '</option>';
        }
        $('.cem_row_id').html(html);
        $('.show_all').trigger('click');
      },
    });
  }
</script>
<script>
  $('.show_all').click(function () {
    var cem_id = $('.add_row').find('.cem_id').val();
    var cem_area_id = $('.add_row').find('.cem_area_id').val();
    var cem_row_id = $('.add_row').find('.cem_row_id').val();
    var status_id = $('.add_row').find('.status_id').val();
    var style_id = $('.add_row').find('.style_id').val();

    $.ajax({
      type: 'POST',
      url: '<?php echo url('Cem/info_wlist_html'); ?>',
      data: {
        cem_id: cem_id,
        cem_area_id: cem_area_id,
        cem_row_id: cem_row_id,
        status_id: status_id,
        style_id: style_id,
        mb: 1,
      },
      success: function (e) {
        $('.wlist').html(e);
      },
      error: function () {

      },
    });

  });
</script>



<script type="text/javascript">
  $(".add_row").validate({
    rules: {
      price: {
        number: true,
        required: true,
      },
      length: {
        number: true,
        required: true,
      },
      width: {
        number: true,
        required: true,
      },
      acreage: {
        number: true,
        required: true,
      },


    },
    errorClass: "help-inline",
    errorElement: "div",
    highlight: function (element, errorClass, validClass) {
      $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).parents('.control-group').removeClass('error');
      $(element).parents('.control-group').addClass('success');
    },
    ignore: "",

  });
</script>
</form>
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
