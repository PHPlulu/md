<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"G:\ceshi\fumijituan\public/../application/admin\view\staff\wlist.html";i:1532741093;s:64:"G:\ceshi\fumijituan\public/../application/admin\view\layout.html";i:1532898245;}*/ ?>
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
					<p>欢迎您，<?php echo session('nickname'); ?>【<a href="<?php echo url('p/out'); ?>"> 退出</a>】</p>
				</div>
			</div>
			<div class="main">
				<div class="menu">
					<div>功能菜单</div>
					<ul>
   		                <li><a href="<?php echo url('Role/wlist'); ?>">角色管理</a></li>
   		                <li><a href="<?php echo url('Staff/wlist'); ?>">用户列表</a></li>
					</ul>
				</div>
				<div class="cont">
                         <div class="usercon">
    <div class="userconle">
        <form class="add_row" action="<?php echo url('add'); ?>" method="post" >
            <fieldset>
                <legend>用户信息添加</legend>
                <div class="userpd">
                    <div class="usera">
                        <div class="useraa">
                            <p>用&nbsp;&nbsp;户&nbsp;&nbsp;名：</p>
                            <input type="text" name="account" />
                            <i>*</i>
                        </div>
                        <div class="useraa">
                            <p>真实姓名：</p>
                            <input type="text" name="nickname" />
                            <i>*</i>
                        </div>
                    </div>
                    <div class="usera">
                        <div class="useraa">
                            <p>系统密码：</p>
                            <input type="text" name="pwd" />
                            <i>*</i>
                        </div>
                        <div class="useraa">
                            <p>用户权限：</p>
                            <select class="" name="role_id">
                                <?php foreach($role_list as $vo): ?>
                                    <option value="<?php echo $vo['id']; ?>"> <?php echo $vo['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <i>*</i>
                        </div>
                    </div>
                   <div class="userb">
                        <div class="useraa userba">
                            <p>身份证号：</p>
                            <input type="text" name="idcard" />
                            <i>*</i>
                        </div>
                        <button type="submit" class="userc">添加用户</button>

                    </div>
                </div>
            </fieldset>
        </form>
        <div class="conbiao userbiao">
            <table class="table table-bordered">
              <!--<caption>边框表格布局</caption>-->
              <thead>
                <tr>
                  <th>用户名</th>
                  <th>密码</th>
                  <th>姓名</th>
                  <th>身份证号</th>
                  <th>用户权限</th>

                  <th>销售折扣权限</th>

                  <th>状态</th>
                </tr>
              </thead>
              <tbody class="wlist">
               <?php foreach($user_list as  $vo): ?>
                    <tr row_id = "<?php echo $vo['id']; ?>" class="tr_<?php echo $vo['id']; ?>">
                      <td class="row" field = 'account'><?php echo $vo['account']; ?></td>
                      <td>--</td>
                      <td class="row" field = 'nickname'><?php echo $vo['nickname']; ?></td>
                      <td class="row" field = 'idcard'><?php echo $vo['idcard']; ?></td>
                      <td class="role_id" field_val = "<?php echo $vo['role_id']; ?>" field = 'role_id'><?php echo $role_list[$vo['role_id']]['title']; ?></td>
                      <td><?php echo $role_list[$vo['role_id']]['discount']; ?></td>

                      <td class=" row_status" field = 'account' ><?php echo $_status[$vo['status']]; ?></td>
                    </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div>
    </div>
    <div class="userconri">
        <form class="edit_row" action="<?php echo url('edit'); ?>" method="post">
            <fieldset>
                <legend>用户信息修改</legend>
                <div class="userxg">
                    <div class="userxga">
                        <p>用&nbsp;&nbsp;户&nbsp;&nbsp;名：</p>
                        <input type="text" name="account" />
                    </div>
                    <div class="userxga">
                        <p>真实姓名：</p>
                        <input type="text" name="nickname" />
                    </div>
                    <div class="userxga">
                        <p>系统密码：</p>
                        <input type="text" name="pwd" />
                    </div>
                    <div class="userxga userxgb">
                        <p>身份证号：</p>
                        <input type="text" name="idcard" />
                    </div>
                    <div class="userxga">
                        <p>用户角色：</p>
                        <select class="" name="role_id">
                            <?php foreach($role_list as $vo): ?>
                                <option value="<?php echo $vo['id']; ?>"> <?php echo $vo['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="hidden" name="id" class="id" />
                    <div class="userxgbtn diffuserxg" style="width: 121px;">
                        <button  type="submit" class="userd">修改用户</button>
                        <button type="button" class="userd del_row">删除用户</button>
                    </div>
                    <div class="userxgbtn">
                        <button type="button" class="userd row_status_0">锁定用户</button>
                        <button type="button"  class="userd row_status_1">解除锁定</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>

<div class="usercz">
    <form>
        <fieldset>
            <legend>操作提示</legend>
        </fieldset>
    </form>
</div>



<script type="text/javascript">
    $('.wlist tr').click(function(){
        $(this).find('.row').each(function(){
            $(".edit_row input[name='"+$(this).attr('field')+"']").val($(this).text());
        });
        $(".edit_row select").val($(this).find('.role_id').attr('field_val'));
        $(".edit_row .id").val($(this).attr('row_id'));
    });
</script>
<script type="text/javascript">
    $('.del_row').click(function(){
        var row_id = $(".edit_row .id").val();
        if (row_id && confirm('确认删除此用户?')) {
            $.ajax({
                type        : 'GET',
                url         : '<?php echo url('del'); ?>',
                dataType    : 'json',
                data        : {
                    id : row_id
                },
                success     : function(e){
                    if (e.status) {
                        $('.tr_' + row_id).remove();
                    } else {
                        alt(e.msg);
                    }


                },
                error       : function () {

                },
            });
        }
    });

    function set_status (id, val) {
        $.ajax({
            type        : 'GET',
            url         : '<?php echo url('set_status'); ?>',
            dataType    : 'json',
            data        : {
                id : id, val:val,
            },
            success     : function(e){
                alt(e.msg);
                if (e.status) {
                    if (val) {
                        let str = '已启用';
                    } else {
                        let str = '已禁用';
                    }
                    $('.tr_' + id + '  .row_status').html(str);
                }


            },
            error       : function () {

            },
        });
    }
    $('.row_status_0').click(function(){
        var row_id = $(".edit_row .id").val();
        if (row_id) {
            set_status(row_id, 0);
        }

    });

    $('.row_status_1').click(function(){
        var row_id = $(".edit_row .id").val();
        if (row_id) {
            set_status(row_id, 1)
        }

    });
</script>



<script type="text/javascript">


$(".add_row").validate({
    rules:{
        account:{
            required:true,
        },
        nickname:{
            required:true,
        },
        pwd:{
            required:true,
            rangelength:[6,20],
        },


    },
    errorClass: "help-inline",
    errorElement: "div",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    },
    ignore : "",

});

$(".edit_row").validate({
    rules:{
        account:{
            required:true,
        },
        nickname:{
            required:true,
        },
        pwd:{
            rangelength:[6,20],
        },
    },
    errorClass: "help-inline",
    errorElement: "div",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    },
    ignore : "",

});

</script>

	             </div>
		      <div class="bota">
                <div class="botd" style="padding-left:20px;">
                    <p>当前用户名，<?php echo session('nickname'); ?></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="botd">
                    <p>姓名，<?php echo session('nickname'); ?></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="botd">
                    <p>您当前系统的身份，<?php echo session('authname'); ?></p>
                </div>
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
</style>

<script type="text/javascript">
    function hide_all_tc () {
        $('.tc1').hide();
        $('.tc2').hide();
        $('.tc3').hide();
    }


</script>
