<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"F:\phpstudy\WWW\md\public/../application/index\view\contacts\visit_push.html";i:1530950646;s:63:"F:\phpstudy\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
                         
					<form action="" method="post">
						<fieldset>
							<legend>客户信息</legend>
							<div class="ketop">
								<div class="kehu">
									<p>来访者姓名：</p>
									<input type="text" name="name" class="keinput"/>
									<i>*</i>
								</div>
								<div class="kehuc">
									<p>与墓位使用人关系：</p>
									<select name="relationship">
                                        <?php foreach($relationship as $k=> $vo): ?>
				                             <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="kebot">
								<div class="kehub">
									<p>联系电话：</p>
									<input type="text" name="tel" class="kebinput"/>
									<i>*</i>
								</div>
								<div class="kehud">
									<p>家庭住址：</p>
									<input type="text" name="address" class="kedinput"/>
								</div>
							</div>
						</fieldset>

						<fieldset>
							<legend>来访信息</legend>
							<div class="laifa">
								<div class="laia">
									<p>渠道1：</p>
									<select class="row_pid"  name="channel_t1" >
                                        <option value="0">请选择</option>
                                        <?php foreach($t1 as $k=>$vo): ?>
				                              <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
								<div class="laia ">
									<p>渠道2：</p>
									<select class="row_ppid" name="channel_t2">

									</select>
									<i>*</i>
								</div>
								<div class="laia">
									<p>渠道3：</p>
									<select class="row_pppid" name="channel_t3">
										<option></option>
									</select>
									<i>*</i>
								</div>
							</div>
							<div class="laifb">
								<div class="laib difflaib">
									<p>来访日期：</p>
									<input class="Wdate kedinput" name="come_date" type="text" onClick="WdatePicker()">
								</div>
								<div class="laib">
									<p>来访次数：</p>
									<select name="come_num">
                                        <?php foreach($come_num as $k=>$vo): ?>
				                              <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                        <?php endforeach; ?>
									</select>
									<div class="lainum">
										<p>来访人数：</p>
										<input type="number" min = "1" name="people_num" value="1"/>
										<i>*</i>
									</div>
								</div>
								<div class="laib">
									<p>来访方式：</p>
									<select name="come_fun">
                                        <?php foreach($come_fun as $k=>$vo): ?>
				                              <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="laifc">
								<div class="laic">
									<p>咨询电话：</p>
									<select name="tel_id">
                                        <?php foreach($tel as $k=>$vo): ?>
										<option value="<?php echo $vo['id']; ?>"> <?php echo $vo['title']; ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
								<div class="laic">
									<p>接待员：</p>
									<select>
                                        <?php foreach($staff as $k=>$vo): ?>
										<option value="<?php echo $k; ?>"><?php echo $vo; ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>

							</div>
						</fieldset>

						<fieldset>
							<legend>成交情况</legend>
							<div class="cjqk">
								<div class="cja">
									<p>成交情况</p>
									<select name="transaction_status" >
										<option value="1">成交</option>
										<option value="0">未成交</option>
									</select>
								</div>
								<div class="cja">
									<p>成交（未成交）原因：</p>
									<select name="no_transaction_ps">

                                        <?php foreach($no_transaction_ps as $k=>$vo): ?>
										<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                        <?php endforeach; ?>

									</select>
								</div>
							</div>
							<div class="cjrq">
								<p>成交日期：</p>
									<input class="Wdate" name="transaction_suc_date" type="text" onClick="WdatePicker()">
							</div>
							<div class="cjjl">
								<div class="cjjla">
									<p>接待记录：</p>
									<textarea name="reception_log"></textarea>
								</div>
								<div class="cjjla">
									<p>备注：</p>
									<textarea name="remarks"></textarea>
								</div>
							</div>
						</fieldset>
						<div class="czts">
							<fieldset>
								<legend>操作提示</legend>

							</fieldset>
							<button type="submit" class="contc">保存客户来访信息</button>
						</div>
					</form>
				</div>
			</div>
<script language="javascript" type="text/javascript" src="__JS__/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">

    $(".from").validate({
        rules:{
            name:{
                required:true,
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

    })

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

    $('.row_pid').change(function(){
        get_t2($(this), '-1');

    });
    $('.row_ppid').change(function(){
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

    $('.row_pid').change(function(){
        get_t2($(this), '-1');
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
