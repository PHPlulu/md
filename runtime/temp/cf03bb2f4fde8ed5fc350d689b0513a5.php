<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\tomb\info_sale_html_list.html";i:1533194711;}*/ ?>

<?php foreach($list as $k=>$vo): ?>

    <div class="dinga"  class="tr_<?php echo $vo['id']; ?>" row_id = "<?php echo $vo['id']; ?>" row_status = "<?php echo $vo['status']; ?>" style="cursor:pointer">
        <div class="dingimg">
        	   <?php if($vo['status'] == 38): ?>
              <img src="__IMG__/kong.png">
            <?php elseif($vo['status'] == 39): ?> 
               <img src="__IMG__/yu_03.png">
            <?php elseif($vo['status'] == 44): ?> 
               <img src="__IMG__/ding_03.png">
            <?php elseif($vo['status'] == 41): ?> 
               <img src="__IMG__/zang_03.png">
            <?php endif; ?>
        </div>
        <p><?php echo $vo['long_title']; ?></p>
    </div>

<?php endforeach; ?>
