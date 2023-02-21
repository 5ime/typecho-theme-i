<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <div class="col-mb-12">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title"><span><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title(20, '...') ?></a></span></h2>
        </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <p class="post-title"><?php _e('没有找到内容'); ?></p>
            </article>
        <?php endif; ?>
        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->
	<?php $this->need('footer.php'); ?>
