<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
#include_once($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/header.php");
?>

<!DOCTYPE html>
<html lang="ru-RU" class="no-js">
<head>
    <?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>

<!--bootstrap-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--/bootstrap-->
    
<!--fancybox-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.css" />
<script type="text/javascript">
      $(document).ready(function() {
         $("a#single_img").fancybox({'showNavArrows': 'true','scrolling' : 'yes', 'cycling':'yes','autoCenter':'true'});         
      });
 </script>
<!--/fancybox-->
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/genericons.css")?>
 <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css")?>
 <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/twentysixteen.fonts.css")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery/jquery-3.3.1.js")?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
