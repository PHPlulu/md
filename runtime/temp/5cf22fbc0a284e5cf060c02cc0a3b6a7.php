<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"G:\ceshi\fumijituan\public/../application/admin\view\p\login.html";i:1533630222;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>天泉生态人文纪念公园业务管理系统</title>
<link rel="stylesheet" type="text/css" href="__CSS__/login/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="__CSS__/login/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="__CSS__/login/css/component.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
  <div class="container demo-1">
    <div class="content">
      <div id="large-header" class="large-header">
        <canvas id="demo-canvas"></canvas>
        <div class="logo_box">
          <h3>天泉生态人文纪念公园业务管理系统</h3>
          <form class="rowsub" method="post">
            <div class="input_outer">
              <span class="u_user"></span>
              <input name="account" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
            </div>
            <div class="input_outer">
              <span class="us_uer"></span>
              <input name="pwd" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
            </div>
            <div class="mb2"><a class="act-but submit" href="javascript:sublogin();" style="color: #FFFFFF">登录</a></div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- /container -->
<script src="__CSS__/login/js/jquery.min.js"></script>
<script src="__CSS__/login/js/TweenLite.min.js"></script>
<script src="__CSS__/login/js/EasePack.min.js"></script>
<script src="__CSS__/login/js/demo-1.js"></script>
<script>
function sublogin(){
  var name=$("input[name=account]").val();
  var pass=$("input[name=pwd]").val();
  if(name == ''){
    layer.msg('请输入账户',{offset: '300px',time: 1500,icon: 2});
    return false;
  }
  if(pass == ''){
    layer.msg('请输入密码',{offset: '300px',time: 1500,icon: 2});
    return false;
  }
  $(".rowsub").submit();
}
</script>
</body>
</html>
