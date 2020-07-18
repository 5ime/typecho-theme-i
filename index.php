<?php
/**
 * 一款简洁的Typecho模板
 * 
 * @package i
 * @author iami233
 * @version 1.0
 * @link https://5ime.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12" id="index" >
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title"><span><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title(20, '...') ?></a></span></h2>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
