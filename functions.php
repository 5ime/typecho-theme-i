<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在文章页显示作者头像'));
    $form->addInput($logoUrl);
    $p = new Typecho_Widget_Helper_Form_Element_Text('p', NULL, NULL, _t('作者签名'), _t('以在文章页显示作者签名'));
    $form->addInput($p);
}

