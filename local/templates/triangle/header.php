
<head>
    <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <?
    IncludeTemplateLangFile(__FILE__);
    ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?$APPLICATION->ShowHead();?>
    <link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
    <link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />
    	<title><?$APPLICATION->ShowTitle()?></title>
    </head>
    <body>
    	<div id="page-wrapper">
    	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <link href="<?=SITE_TEMPLATE_PATH?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>css/animate.min.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>css/lightbox.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>css/main.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=SITE_TEMPLATE_PATH?>images/ico/apple-touch-icon-57-precomposed.png">

    <?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel", array(
    	"ROOT_MENU_TYPE" => "top",
    	"MAX_LEVEL" => "2",
    	"CHILD_MENU_TYPE" => "left",
    	"USE_EXT" => "Y",
    	"MENU_CACHE_TYPE" => "A",
    	"MENU_CACHE_TIME" => "36000000",
    	"MENU_CACHE_USE_GROUPS" => "Y",
    	"MENU_CACHE_GET_VARS" => ""
    	),
    	false,
    	array(
    	/*"ACTIVE_COMPONENT" => "Y"*/
    	)
    );?>

</body>
