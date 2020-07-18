<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="keywords" content="<?php $this->options->keywords() ?>">
    <meta name="description" content="<?php $this->options->description() ?>"/>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <?php $this->header(); ?>
</head>
<body>
<?php if ($this->is('index')) {  ?>
    <header id="header">
    <div class="container">
            <div class="col-mb-12">
                <h2 class="title"><?php $this->options->title(); ?></h2>
        	    <p class="description"><?php $this->options->description() ?></p>
            </div>
            <div class="col-mb-12">
            <nav>
                <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
                <div class="search">
                    <form id="search" method="post" action="<?php $this->permalink() ?>" role="search">
                        <input type="text" id="s" name="s" class="text" placeholder="/search">
                    </form>
                </div>
            </nav>
            </div>
    </div>
</header><!-- end #header -->
<?php 
} elseif ($this->is('post')) { ?>
<header id="header">
    <div class="container">
            <div class="col-mb-12">
                <h2 class="title"><?php $this->title(18, '...') ; ?></h2>
        	    <p class="description"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></p>
            </div>
            <div class="col-mb-12">
            <nav>
                <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                <div class="search">
                    <form id="search" method="post" action="<?php $this->permalink() ?>" role="search">
                        <input type="text" id="s" name="s" class="text" placeholder="/search">
                    </form>
                </div>
            </nav>
            </div>
    </div>
</header><!-- end #header -->
<?php }  elseif ($this->is('page')) { ?>
<header id="header">
    <div class="container">
            <div class="col-mb-12">
                <h2 class="title"><?php $this->title(18, '...') ; ?></h2>
            </div>
            <div class="col-mb-12">
            <nav>
                <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                <div class="search">
                    <form id="search" method="post" action="<?php $this->permalink() ?>" role="search">
                        <input type="text" id="s" name="s" class="text" placeholder="/search">
                    </form>
                </div>
            </nav>
            </div>
    </div>
</header><!-- end #header -->
<?php }  elseif ($this->is('archive')) { ?>
<header id="header">
    <div class="container">
            <div class="col-mb-12">
                <h2 class="title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h2>
            </div>
            <div class="col-mb-12">
            <nav>
                <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('返回首页'); ?></a>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                <div class="search">
                    <form id="search" method="post" action="<?php $this->permalink() ?>" role="search">
                        <input type="text" id="s" name="s" class="text" placeholder="/search">
                    </form>
                </div>
            </nav>
            </div>
    </div>
</header><!-- end #header -->
<?php } ?>
    <!-- /.页头 -->
<div id="body">
    <div class="container">
        <div class="row">