<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\gset\hlist.html";i:1530348989;s:75:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\layout.html";i:1533793060;}*/ ?>
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
          <div class="wumx">
            <h3>现有骨灰盒明细</h3>
            <div class="wumxbiao">
              <table class="table table-bordered">
                <!--<caption>边框表格布局</caption>-->
                <thead>
                  <tr>
                    <th>选择</th>
                    <th>骨灰盒名称</th>
                    <th>材质名称</th>
                    <th>长</th>
                    <th>宽</th>
                    <th>高</th>
                    <th>价格</th>
                  </tr>
                </thead>
                <tbody class="whlist">
                <?php foreach($sysls as  $vo): ?>
                    <tr class="tr_<?php echo $vo['id']; ?>" row_id = "<?php echo $vo['id']; ?>">
                      <td style="width:30px;"><input type="radio" class="fukuan_<?php echo $vo['id']; ?>" name="fukuan" value="<?php echo $vo['id']; ?>" /></td>
                      <td class = "row_title"><?php echo $vo['title']; ?></td>
                      <td class = "row_cem_id"  val = "<?php echo $vo['sysysid']; ?>"><?php echo $sysyst[$vo['sysysid']]['title']; ?></td>
                      <td ><font class = "row_cd"><?php echo $vo['cd']; ?></font>mm</td>
                      <td ><font class = "row_wd"><?php echo $vo['wd']; ?></font>mm</td>
                      <td ><font class = "row_hd"><?php echo $vo['hd']; ?></font>mm</td>
                      <td class = "row_price"><?php echo $vo['price']; ?></td>
                    </tr>
                <?php endforeach; ?>  
                </tbody>
              </table>
            </div>          
             <div class="wpmxd">
              <form>
                <fieldset>
                  <legend>购买操作</legend>
                  <div class="wumxb">
                    <p>操作员：</p>
                     <select id="userid">
                        <?php foreach($row_staff as  $vo): ?>
                          <option value="<?php echo $vo['id']; ?>"><?php echo $vo['nickname']; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <i>*</i>
                    </div>
                    <button  type="button" class="wumxa wupfeid">保存骨灰盒购买信息</button>
                    <button  type="button" class="wumxa">打印骨灰盒购买信息</button>
                </fieldset>
              </form>
              
            </div>
            </div>
        </div>
<script src="__JS__/layer/layer.js"></script>
<script>
$(function(){
  $("input:radio").eq(0).attr("checked","checked");
  $("tr").bind("click",function(){
    $(this).find("input:radio").attr("checked","checked");
  });
})
$(".wupfeid").click(function(){
   var val=$('input:radio[name="fukuan"]:checked').val();
   var role=$("#userid option:selected").val();
   var index=layer.confirm('是否确认该保存骨灰盒购买信息？', {
      btn: ['确定','取消'] //按钮
    }, function(){
        layer.close(index);
        var ihtml = layer.load(0, {
          shade: [0.5] //0.1透明度的白色背景
        });
        $.ajax({
            type        : 'post',
            url         : '<?php echo url('gset_set_hlist'); ?>',
            dataType    : 'json',
            data        : {
                id : val,
                staffid:role,
            },
            success     : function(e){
                if (e == '2') {
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
