<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
#include_once($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/header.php");
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>" class="no-js">
<head>
    <?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>        
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/genericons.css")?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css")?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/twentysixteen.fonts.css")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery/jquery-3.3.1.js")?>
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
            <img 
            src="<?=SITE_TEMPLATE_PATH?>/img/Bezimeni-1-1200x573.jpg" 
            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" 
            alt=""/>        
            </div>
        <div class="wrapper news">                  
            <h1><?$APPLICATION->ShowTitle(false)?></h1>

                    
