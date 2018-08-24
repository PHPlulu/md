<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\cem\area.html";i:1533558154;s:75:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;s:76:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\cem\tab.html";i:1529398489;}*/ ?>
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
                         <div class="mwshezhi">
      
    <div class="mwnav">
        <ul>
            <?php foreach($tab as $k => $vo): ?>
            <li

            <?php if($k == $type): ?>
            class="navon"
            <?php endif; ?>

             ><a

                href = "<?php echo url('wlist', ['type' => $k]); ?>" ><?php echo $vo; ?></a></li>
            <?php endforeach; ?>

        </ul>
    </div>

    <div class="mwmain">

        <div class="mwd">
            <div class="mwdba">
                <form class="add_row one_form  many_form" action="<?php echo url('area_add'); ?>" method="post" >
                    <fieldset>
                        <legend>墓区设置一添加</legend>
                        <h1 class="suod">【注：批量处理，如添加 ABC 区，只需要在墓区名称里面直接添加 ABC ，无须填写数量；如果添加数字墓区，请在墓区名称添加开始数字，墓区数量添加结束数字；】</h1>
                        <div class="mqsz">
                            <div class="mqsza">
                                <p>选择墓园</p>
                                <select name="cem_id">
                                    <?php foreach($cem_list as $k => $vo): ?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mqszb">
                                <div class="mqszba">
                                   <input type="radio" name="type"  value="many" />批量处理
                                </div>
                                <div class="mqszbb">
                                   <input type="radio" name="type"  checked value="one" />单条处理
                                </div>
                            </div>
                            <div class="mqszc">
                                <p>墓区名称</p>
                                <input type="text" name="many_start" />
                                <input type="text" name="title" />
                            </div>
                            <div class="mqszd">
                                <p>墓区数量</p>
                                <input type="text"  name="many_num" />
                                <h1>系统会自动带上区字，无须手动填写</h1>
                            </div>
                            <button  type="submit" class="mqsze">添加</button>
                        </div>

                    </fieldset>

                </form>
            </div>
            <div class="mwdbb">
                <div class="mwdbble">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>墓园名称</th>
                          <th>墓区名称</th>
                        </tr>
                      </thead>
                      <tbody class="wlist">
                            <?php foreach($area_list as $k=>$vo): ?>
                                <tr class="tr_<?php echo $vo['id']; ?>" row_id = "<?php echo $vo['id']; ?>" >
                                  <td class="row_cem_id" val = "<?php echo $vo['cem_id']; ?>"><?php echo $cem_list[$vo['cem_id']]['title']; ?></td>
                                  <td class="row_title"><?php echo $vo['title']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                      </tbody>
                    </table>
                </div>
                <div class="mwdbbri">
                    <form action="<?php echo url('area_edit'); ?>" method="post" class="edit_row">
                        <fieldset>
                            <legend>墓区设置一修改</legend>
                            <div class="mqxg">
                                <div class="mqxga">
                                    <p>选择墓园</p>
                                    <select name="cem_id" class="row_cem_id">
                                        <?php foreach($cem_list as $k => $vo): ?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mqxga">
                                    <p>墓区编号</p>
                                    <input type="text" name="title" class="row_title" />
                                    <input type="hidden" name="id" class="row_id" />
                                </div>

                                <div class="mqxgb">
                                    <button type="submit" class="mqxgcontc">修改</button>
                                    <button type="button" class="mqxgcontcs row_del">删除</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

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
            $(".edit_row .row_cem_id").val($(this).find('.row_cem_id').attr('val'));
            $(".edit_row .row_title").val($(this).find('.row_title').text());
            $(".edit_row .row_id").val($(this).attr('row_id'));
        });
    </script>


    <script type="text/javascript">
        $('.row_add').click(function(){
            $('.add_row').attr('action', "<?php echo url('cem_add'); ?>").submit();

        });

        $('.row_edit').click(function(){
            $('.add_row').attr('action', "<?php echo url('cem_edit'); ?>").submit();
        });

        $('.row_del').click(function(){
            var row_id = $(".edit_row .row_id").val();
            if (row_id && confirm('确认删除?')) {
                $.ajax({
                    type        : 'GET',
                    url         : '<?php echo url('area_del'); ?>',
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



    <script type="text/javascript">


    // $(".one_form").validate({
    //     rules:{
    //         title:{
    //             required:true,
    //             digits:true,
    //         },
    //         many_num:{
    //             required:true,
    //             digits:true,
    //         },
    //         many_start:{
    //             digits:true,
    //             required:true,
    //         },
    //
    //     },
    //     errorClass: "help-inline",
    //     errorElement: "div",
    //     highlight:function(element, errorClass, validClass) {
    //         $(element).parents('.control-group').addClass('error');
    //     },
    //     unhighlight: function(element, errorClass, validClass) {
    //         $(element).parents('.control-group').removeClass('error');
    //         $(element).parents('.control-group').addClass('success');
    //     },
    //     ignore : "",
    //
    // });

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
