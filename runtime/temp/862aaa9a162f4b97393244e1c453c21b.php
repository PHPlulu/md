<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"E:\PHPTutorial\WWW\md\public/../application/index\view\come_channel\t1.html";i:1533275550;s:66:"E:\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
                         
					<div class="shezhiys">
						<form action="add" method="post" class="add_row">
							<fieldset>
								<legend>客户来访来访渠道1设置一添加</legend>
								<div class="shezhiysaa">
									<p>编号</p>
									<input type="text" name="sn" />
								</div>
								<div class="shezhiysaa">
									<p>来访渠道1</p>
									<input type="text" name="title" />
								</div>
								<div class="shezhiysab">
									<p>说明</p>
									<input type="text" name="desc" />
								</div>
							   <button type="submit" class="contc">添加</button>
							</fieldset>

						</form>
					</div>
					<div class="shezhiysbiao">
						<table class="table table-bordered">
						  <!--<caption>边框表格布局</caption>-->
						  <thead>
						    <tr>
						      <th>来访渠道编号</th>
						      <th>来访渠道</th>
						      <th>来访渠道说明</th>
						    </tr>
						  </thead>
						  <tbody class="wlist">

                            <?php foreach($t1 as $k=>$vo): ?>
    						    <tr class="tr_<?php echo $vo['id']; ?>" row_id = "<?php echo $vo['id']; ?>">
    						      <td class="row_sn"><?php echo $vo['sn']; ?></td>
    						      <td class="row_title"><?php echo $vo['title']; ?></td>
    						      <td class="row_desc"><?php echo $vo['desc']; ?></td>
    						    </tr>
                            <?php endforeach; ?>

						  </tbody>
						</table>
					</div>
					<div class="shezhiysb">
						<form class="edit_row" action="<?php echo url('edit'); ?>" method="post">
							<fieldset>
								<legend>客户来访来访渠道1设置一修改</legend>
								<div class="phonesz">
									<div class="shezhiysc shezhiysca">
										<p>编号</p>
										<input type="text" name="sn" class="row_sn" />
									</div>
                                    <div class="shezhiysc">
                                        <p>来访渠道1</p>
                                        <input type="text"  name="title" class="row_title" />
                                    </div>
                                    <div class="shezhiysc">
                                        <p>说明</p>
                                        <input type="text"   name="desc" class="row_desc"/>
                                        <input type="hidden"   name="id" class="row_id"/>
                                    </div>
								 </div>
								 <div class="phonesz">
									 <button  type="submit"class="contc">修改</button>
                                     <button type="button" class="contcys row_del">删除</button>
								 </div>
							</fieldset>

						</form>
					</div>



<script type="text/javascript">
    $('.mqszb input').click(function(){
        if($(this).val() == 'one') {
            $('.add_row').addClass('one_form');
            $('.add_row').removeClass('many_form');
        } else {
            $('.add_row').removeClass('one_form');
            $('.add_row').addClass('many_form');
        }
    })
    $('.wlist tr').click(function(){
        $(".edit_row .row_desc").val($(this).find('.row_desc').text());
        $(".edit_row .row_sn").val($(this).find('.row_sn').text());
        $(".edit_row .row_title").val($(this).find('.row_title').text());
        $(".edit_row .row_id").val($(this).attr('row_id'));
    });
</script>

<script type="text/javascript">

    $(".from").validate({
        rules:{
            title:{
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

    });

    $('.row_del').click(function(){
        var row_id = $(".edit_row .row_id").val();
        if (row_id && confirm('确认删除?')) {
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
