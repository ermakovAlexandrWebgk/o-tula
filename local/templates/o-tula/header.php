<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
#include_once($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/header.php");
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>" class="no-js">
<head>
    <?$APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">
        <script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title><?$APPLICATION->ShowTitle()?></title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Федерация спортивного ориентирования Тульской области &raquo; Лента" href="http://o-tula.net/feed/" />
<link rel="alternate" type="application/rss+xml" title="Федерация спортивного ориентирования Тульской области &raquo; Лента комментариев" href="http://o-tula.net/comments/feed/" />
        
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/foobox.free.min.css")?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/genericons.css")?>
 <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css")?>
 <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/twentysixteen.fonts.css")?>
<!--[if lt IE 10]>
<link rel='stylesheet' id='twentysixteen-ie-css'  href='http://o-tula.net/wp-content/themes/otula/css/ie.css?ver=20160816' type='text/css' media='all' />
<![endif]-->
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentysixteen-ie8-css'  href='http://o-tula.net/wp-content/themes/otula/css/ie8.css?ver=20160816' type='text/css' media='all' />
<![endif]-->
<!--[if lt IE 8]>
<link rel='stylesheet' id='twentysixteen-ie7-css'  href='http://o-tula.net/wp-content/themes/otula/css/ie7.css?ver=20160816' type='text/css' media='all' />
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='http://o-tula.net/wp-content/themes/otula/js/html5.js?ver=3.7.3'></script>
<![endif]-->
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery/jquery.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery/jquery-migrate.min.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/foobox.free.min.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/functions.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/new-tab.min.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/skip-link-focus-fix.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/wp-embed.min.js")?>
 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="home blog locale-ru-ru no-sidebar hfeed">
<?$APPLICATION->ShowPanel();?>
<div id="page" class="site">
    <div class="site-inner">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-header-main">
                <div class="site-title wrapper">
                    <a href="http://dev-o-tula.webgk.ru/" rel="home" data-wpel-link="internal">Федерация спортивного ориентирования Тульской области</a>
                </div><!-- .site-branding -->
                                    <div id="site-header-menu" class="site-header-menu">
                                                    <nav id="site-navigation" class="main-navigation wrapper" role="navigation" aria-label="Основное меню">
                                <div class="menu-glavnoe-menyu-container"><?$APPLICATION->IncludeComponent(
    "bitrix:menu", 
    "top_menu", 
    array(
        "COMPONENT_TEMPLATE" => "top_menu",
        "ROOT_MENU_TYPE" => "top",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "MENU_CACHE_GET_VARS" => array(
        ),
        "MAX_LEVEL" => "1",
        "CHILD_MENU_TYPE" => "left",
        "USE_EXT" => "Y",
        "DELAY" => "N",
        "ALLOW_MULTI_SELECT" => "N"
    ),
    false
);?></div>                            </nav><!-- .main-navigation -->
                                            </div><!-- .site-header-menu -->
                            </div><!-- .site-header-main -->

                    </header><!-- .site-header -->
                    <div id="content" class="site-content">
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="front_img">
            <img width="1200" height="573" 
            src="http://o-tula.net/uploads/2017/02/Bezimeni-1-1200x573.jpg" 
            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" 
            alt="" 
            srcset="http://o-tula.net/uploads/2017/02/Bezimeni-1-1200x573.jpg 1200w, http://o-tula.net/uploads/2017/02/Bezimeni-1-300x143.jpg 300w, http://o-tula.net/uploads/2017/02/Bezimeni-1-768x367.jpg 768w, http://o-tula.net/uploads/2017/02/Bezimeni-1-1024x489.jpg 1024w" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px" />        
            </div>
        <div class="wrapper news">                  
            <h1><?$APPLICATION->ShowTitle(false)?></h1>

                    
