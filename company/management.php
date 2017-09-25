
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Структура компании");
?>
<?$APPLICATION->IncludeComponent(
	"areal:departments",
	".default",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => 60*60*60*24*30,
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_ID" => array(0=>"10",),
		"IBLOCK_TYPE" => "employees",
		"LIST_PREVIEW_PICT_H" => "150",
		"LIST_PREVIEW_PICT_W" => "115",
		"NOT_FOUND_PICTURE" => "/local/templates/triangle/images/photo_not_found.png",
		"PARENT_SECTION" => ""
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
