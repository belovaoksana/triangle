
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Структура компании");
?>
<?$APPLICATION->IncludeComponent(
	"areal:departments",
	".default",
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => 60*60*60*24*30,
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_ID" => array(
			0 => "10",
		),
		"IBLOCK_TYPE" => "employees",
		"PARENT_SECTION" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"LIST_PREVIEW_PICT_H" => "150",
		"LIST_PREVIEW_PICT_W" => "115"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
