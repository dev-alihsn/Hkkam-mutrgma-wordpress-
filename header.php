<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo("charset")?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|','true','right'); bloginfo("name") ?></title>
    <link rel="pingback" href="<?php bloginfo("pingback_url")?>"/>
    <?php wp_head()?>
</head>
<body>
    <nav class="main-nav">
        <div class="container">
        <a href="<?php bloginfo("url")?>" class="logo"><?php bloginfo("name")?></a>
            <?php $menu_args = array("theme-location" => "navigation-bar","container" => false)?>
            <?php wp_nav_menu($menu_args)?>
        </div>
    </nav>