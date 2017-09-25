<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead()?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowPanel();?>
    <?$styles = ['main.css','bootstrap.min.css','font-awesome.min.css','responsive.css','animate.min.css','lightbox.css','prettyPhoto.css']?>
    <?$scripts = ['jquery.js','bootstrap.min.js','bootstrap.min.js','lightbox.min.js','wow.min.js','main.js']?>
    <?foreach ($styles as $key => $style) {
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/"."$style");
    }
    foreach ($scripts as $key => $script) {
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/"."$script");
    }
    ?>
</head>
<body>
    <header id="header">
        <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array("AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "inc","EDIT_TEMPLATE" => "","PATH" => "/include/social.php")
        );
        ?>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <a class="navbar-brand" href="/index.php">
                    <div class="navbar-header<?$APPLICATION->ShowProperty('logo_add_class');?>">
                        <h1><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="logo"></h1>
                    </div>
                </a>
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
