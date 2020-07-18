<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
error_reporting(E_ALL); 
ini_set('display_errors', '1'); 
$this->need('header.php');?>
<div class="col-mb-12">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(' ', true, '暂无标签'); ?></p>
        <div class="post-author-flextop post-author post-author-botto">
        <a href="<?php $this->author->permalink(); ?>" rel="author">
            <img alt="<?php $this->author(); ?>" src="https://q1.qlogo.cn/g?b=qq&nk=1449175379&s=640" class="avatar"></a>
            <div class="post-author-left">
                <h3><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></h3>
                <p>Just So So ...</p>
            </div>
        </div>
    </article>

    <?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>
