<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\tpl\wlist.html";i:1534576165;s:75:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
    <form action="<?php echo url('add'); ?>" class="add_row">
        <fieldset>
            <legend><?php echo $name; ?>设置一添加</legend>
            <div class="shezhiysa">
                <p><?php echo $name; ?>名称</p>
                <input type="text" name="title" />
            </div>
           <button class="contc" type="submit"> 添加</button>
        </fieldset>

    </form>
</div>
<div class="shezhiysbiao">
    <table class="table table-bordered">
      <!--<caption>边框表格布局</caption>-->
      <thead>
        <tr>
          <th><?php echo $name; ?>编号</th>
          <th><?php echo $name; ?>名称</th>

        </tr>
      </thead>
      <tbody class="wlist">
           <?php foreach($list as  $vo): ?>
                <tr row_id = "<?php echo $vo['id']; ?>">
                  <td class = "row_sn"><?php echo $vo['id']; ?></td>
                  <td class = "row_title"><?php echo $vo['title']; ?></td>
                </tr>
            <?php endforeach; ?>
      </tbody>
    </table>
</div>
<div class="shezhiysb">
    <form method="post" action="<?php echo url('edit'); ?>" class="edit_row">
        <fieldset>
            <legend>墓位材质设置一修改</legend>
            <div class="shezhiysc">
                <p><?php echo $name; ?>编号</p>
                <input type="text" name="id" class="row_sn" />
            </div>
            <div class="shezhiysd">
                <p><?php echo $name; ?>名称</p>
                <input type="text" name="title" class="row_title" />
                <input type="hidden" name="id" class="row_id" />
            </div>
            <div class="shezhiysd">
                <button class="contc" type="submit">修改</button>
                <button class="contcys" type="button">删除</button>
            </div>
        </fieldset>
           
    </form>
</div>


<script type="text/javascript">
    $('.wlist tr').click(function(){
        let tr = $(this);
        $('.edit_row').find('.row_title').val(tr.find('.row_title').text());
        $('.edit_row').find('.row_sn').val(tr.find('.row_sn').text());
        $('.edit_row').find('.row_id').val(tr.attr('row_id'));
    });
//    删除
    $('.contcys').on('click',function () {
        var row_id = $('.row_id').val();
        if(row_id&&confirm("确认删除？")){
            $.ajax({
                type:"post",
                url:"<?php echo url('del'); ?>",
                data:{
                    id:row_id
                },
                success:function (data) {
                    location.reload()
                }
            })
        }
    })
</script>

<script type="text/javascript">


$(".edit_row").validate({
    rules:{
        title:{
            required:true,
        },
        id:{
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

$(".add_row").validate({
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
