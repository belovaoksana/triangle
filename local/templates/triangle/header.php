<!DOCTYPE html>
<html lang="en">
<head>

    <?$APPLICATION->ShowHead()?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowPanel();?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/responsive.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.min.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/lightbox.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/prettyPhoto.css");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.js");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap.min.js");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/lightbox.min.js");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/wow.min.js");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js");?>

</head>
<body>
	<header id="header">
        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
        "PATH" => "/include/social.php"
	)
);?>
                <div class="navbar navbar-inverse" role="banner">
                <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>

                   <a class="navbar-brand" href="http://triangle.dev/index.php">
                       <h1><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="logo"></h1>
                   </a>

               </div>

                <div id="top-menu">
                    <div id="top-menu-inner">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "hml", array(
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
                </div>
            </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>

            </div>
       </div>
    </header>
</body>
<div id="workarea">
    <div class="container">
        <h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>
