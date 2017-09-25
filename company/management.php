
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Структура компании");
?>
<?$APPLICATION->IncludeComponent(
	"areal:departments",
	"",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => 60*60*60*24*30,
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_ID" => 10,
		"IBLOCK_TYPE" => "employees",
		"PARENT_SECTION" => ""
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
