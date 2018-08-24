<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\gset\glist.html";i:1534293627;s:75:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
                         <div class="cont">
          <div class="wupin">
            <h3>现有物品明细</h3>
            <div class="wubiao">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>物品名称</th>
                    <th>物品价格</th>
                    <th>物品单位</th>
                    <th>物品简介</th>
                  </tr>
                </thead>
                <tbody class="wlist">
                  <?php foreach($glist as  $vo): ?>
                        <tr class="tr_<?php echo $vo['id']; ?>" row_id = "<?php echo $vo['id']; ?>">
                          <td class = "row_sn" style="display:none;"><?php echo $vo['sn']; ?></td>
                          <td class = "row_title"><?php echo $vo['title']; ?></td>
                          <td class = "row_price"><?php echo $vo['price']; ?></td>
                          <td class = "row_type"><?php echo $vo['type']; ?></td>
                          <td class = "row_cont"><?php echo $vo['cont']; ?></td>
                        </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="wupinform">
              <form class="edit_row">
                <fieldset>
                  <legend>购买信息</legend>
                  <div class="wupd">
                    <div class="wupa">
                      <p>物品编号</p>
                      <input type="text" class="row_sn" name="sn" readonly="" />
                    </div>
                    <div class="wupb">
                      <p>物品名称</p>
                      <input type="text" class="row_title" name="title"/>
                      <input type="text" class="row_id" name="id" style="display:none;"/>
                    </div>
                  </div>
                  <div class="wupd">
                    <div class="wupc">
                      <p>物品单价</p>
                      <input type="text" class="row_price" name="price"/><em>元</em>
                    </div>
                    <div class="wupe">
                      <p>购买数量</p>
                      <input type="text" class="row_num" name="num"/><em>个</em>
                    </div>
                  </div>
                  <button class="wupf" type="button" id="addtr"> 添加到购买明细</button>
                </fieldset>
              </form>
            </div>
            </div>
            <div class="wupin">
            <h3>以购买物品明细</h3>
            <div class="wubiao">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th><input type="checkbox" onclick="checkall(this)"  /></th>
                    <th>物品编号</th>
                    <th>物品名称</th>
                    <th>物品价格</th>
                    <th>购买数量</th>
                    <th>物品购买小计</th>
                  </tr>
                </thead>
                <tbody id="addsettr">
                 
                </tbody>
              </table>
            </div>
            <div class="wupinform">
              <form>
                <fieldset>
                  <legend>购买操作</legend>
                    <p class="wupz">物品总额:<i class="sumprice" value="0"></i>元</p>
                    <div class="wupy">
                      <p>操作员：</p>
                      <select id="userid">
                        <?php foreach($row_staff as  $vo): ?>
                          <option value="<?php echo $vo['id']; ?>"><?php echo $vo['nickname']; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <i>*</i>
                    </div>
                  <button class="wupg" type="button" id="addtrdel"> 将选中项从购墓明细中删除</button><br>
                  <button class="wupg" type="button" id="addtradd"> 保存物品购买明细</button><br>
                  <button class="wupg" type="button" id="addtrdy"> 打印物品购买信息</button>
                </fieldset>
                
              </form>
            </div>
            </div>
        </div>
<script src="__JS__/layer/layer.js"></script>
<script type="text/javascript">
  $("#addtrdel").click(function(){
       $(".check_alls").each(function(k,v){
         let tr = $(this);
        if(tr.prop("checked")){  
          var idstr=tr.val();
          tr.parent().parent().remove();
        }
      })
  })
  $("#addtradd").click(function(){
    var seluser=$("#userid option:selected").val();
    var d=[];
    //console.log(seluser);
    $(".check_alls").each(function(k,v){
       let tr = $(this);
      if(tr.prop("checked")){  
        var idstr=tr.val();
        var num=tr.attr('row_num');
        d.push({id: idstr,num:num});
        //console.log(d); 
        /*$(".sumprice").html(sum);*/
      }
    })
    var index = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
    $.ajax({
        type        : 'post',
        url         : '<?php echo url('glist_add'); ?>',
        dataType    : 'json',
        data        : {
            item : d,
            staffid:seluser,
        },
        success     : function(e){
            //console.log(e); 
            if (e == '2') {
                layer.close(index);
                layer.msg('添加成功');
            } else {
                layer.close(index);
                layer.msg('添加失败');
            }


        },
        error       : function () {

        },
    });
  })
    //=========全选=======//
  function checkall(qx){
    $(".check_alls").prop("checked",qx.checked);
  }
  $('.wlist tr').click(function(){
        let tr = $(this);
        $('.edit_row').find('.row_title').val(tr.find('.row_title').text());
        $('.edit_row').find('.row_sn').val(tr.find('.row_sn').text());
        $('.edit_row').find('.row_price').val(tr.find('.row_price').text());
        $('.edit_row').find('.row_id').val(tr.attr('row_id'));
        $('.edit_row').find('.row_num').val('');
    });
  $("#addtr").click(function(){
    var sn=$('.edit_row').find('.row_sn').val();
    var title=$('.edit_row').find('.row_title').val();
    var price=$('.edit_row').find('.row_price').val();
    var num=$('.edit_row').find('.row_num').val();
    var id=$('.edit_row').find('.row_id').val();
    var zong=$(".sumprice").val();
    var sum=num*price;
    var summoney=Number(zong)+Number(sum);
    $(".sumprice").text(summoney);
    $(".sumprice").val(summoney);
    $("#addsettr").append('<tr class="trr_'+id+'" row_id = "'+id+'" ><td class = "row_cont"><input type="checkbox" checked name="id[]" class="check_alls" value="'+id+'" row_sum = "'+sum+'" row_num="'+num+'"/></td><td class = "row_sn" >'+sn+'</td><td class = "row_title">'+title+'</td><td class = "row_price">'+price+'</td><td class = "row_num">'+num+'</td><td class = "row_sum">'+sum+'</td></tr>');
  })
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
