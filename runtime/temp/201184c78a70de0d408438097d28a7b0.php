<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"D:\phpstudy\PHPTutorial\WWW\md\public/../application/index\view\tomb\info_tending_html_list.html";i:1529380646;}*/ ?>

<?php foreach($list as $k=>$vo): ?>

    <div class="dinga"  class="tr_<?php echo $vo['id']; ?>" row_id = "<?php echo $vo['id']; ?>">
        <div class="dingimg">
           <img src="__IMG__/yu_03.png" />
        </div>
        <p><?php echo $vo['long_title']; ?></p>
    </div>

<?php endforeach; ?>
