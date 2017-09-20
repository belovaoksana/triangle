
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Структура компании");
?>
<?$APPLICATION->IncludeComponent(
	"areal:departments",
	"",
	Array()
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
