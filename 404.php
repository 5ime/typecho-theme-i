<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <div class="col-mb-12 col-tb-8 col-tb-offset-2">
        <div class="error-page">
            <p class="post-title">404 - <?php _e('页面没找到'); ?></p>
            <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
            <form method="post">
                <p><input type="text" name="s" class="text" autofocus /></p>
                <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
            </form>
        </div>
    <style>
        p .text{width:30%;height:30px;padding:0 10px;border:1px solid #ccc;border-radius:4px;font-size:14px;line-height:30px;color:#666;outline:0;float:left}
        p .submit{width:10%;height:30px;padding:0 10px;border:1px solid #ccc;border-radius:4px;font-size:14px;line-height:30px;color:#666;outline:0;float:left;user-select:none;cursor:pointer}
    </style>
    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
