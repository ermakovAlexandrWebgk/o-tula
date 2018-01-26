<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
#include_once($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/header.php");
?>

<!DOCTYPE html>
<html lang="ru-RU" class="no-js">
<head>
    <?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/genericons.css")?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css")?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/twentysixteen.fonts.css")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery/jquery.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery/jquery-migrate.min.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/functions.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/new-tab.min.js")?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/skip-link-focus-fix.js")?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!--bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!--/bootstrap-->
    
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<!--fancybox-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.css" />
<script type="text/javascript">
      $(document).ready(function() {
         $("a#single_img").fancybox({'showNavArrows': 'true','scrolling' : 'true'});         
      });
 </script>
<!--/fancybox-->

</head>