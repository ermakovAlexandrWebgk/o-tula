<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
#include_once($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/header.php");
?>

<!DOCTYPE html>
<html lang="ru-RU" class="no-js">
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
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/o-tula.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.2"}};
            !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56794,8205,9794,65039],[55358,56794,8203,9794,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
        <style type="text/css">
img.wp-smiley,
img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
</style>
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
<link rel='https://api.w.org/' href='http://o-tula.net/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://o-tula.net/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://o-tula.net/wp-includes/wlwmanifest.xml" /> 
<link rel="alternate" type="application/json+oembed" href="http://o-tula.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fo-tula.net%2Fcontacts%2Ftraining%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://o-tula.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fo-tula.net%2Fcontacts%2Ftraining%2F&#038;format=xml" />
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="page-template-default page page-id-709 locale-ru-ru no-sidebar">
<?$APPLICATION->ShowPanel()?>
<div id="page" class="site">
    <div class="site-inner">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-header-main">
                <div class="site-title wrapper">
                    <a href="http://dev-o-tula.webgk.ru" rel="home" data-wpel-link="internal">Федерация спортивного ориентирования Тульской области</a>
                </div><!-- .site-branding -->
               <div id="site-header-menu" class="site-header-menu">                            
 <nav id="site-navigation" class="main-navigation wrapper" role="navigation" aria-label="Основное меню">
                                <div class="menu-glavnoe-menyu-container">                     
                                                    <?$APPLICATION->IncludeComponent(
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
);?>
                                </div>
</nav>
</div><!-- .site-header-menu --><!-- .main-navigation -->
                                            
                            </div><!-- .site-header-main -->

                    </header><!-- .site-header -->

        <div id="content" class="site-content">
    <div id="primary" class="content-area guestbook">
        <main id="main" class="site-main" role="main">
    <div class="wrapper">
    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
       
         
        <?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "lef_menu",
    Array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "COMPONENT_TEMPLATE" => "vertical_multilevel",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => "",
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "left",
        "USE_EXT" => "Y"
    )
);?>
    
<article id="post-709" class="post-709 page type-page status-publish hentry">
    <header class="entry-header">
        <h1 class="entry-title"><?$APPLICATION->ShowTitle(false)?></h1>    </header><!-- .entry-header -->

    
    <div class="entry-content">