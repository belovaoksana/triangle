<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CUtil::InitJSCore(array('window'));
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?foreach($arResult["DEPARTMENTS"] as $department):?>
	<div><h3><?=$department["NAME"]?></h3></div>
		<?if (isset($department["EMPLOYEES"])):?>
			<?foreach($department["EMPLOYEES"] as $employees):?>
				<?=$employees["NAME"]?>&nbsp;
					<a
						data-text="<h4>Биография сотрудника</h4> <br> <?=$employees["DETAIL_TEXT"]?>"
						data-name="<?=$employees["NAME"]?>"
						data-img="<?=CFile::GetPath( $employees['PREVIEW_PICTURE'])?>"
						onclick ="modal(this);"
					>Подробнее</a><br>
			<?endforeach?>
		<?else : echo "В настоящее время в данном отделе нет сотрудников";?>
		<?endif?>
<?endforeach?>

<script>
function modal (el) {
var text = '<img src="' + el.dataset.img + '">';
text += el.dataset.text;
var popup = new BX.CDialog({
'title': el.dataset.name,
'content': text,
'draggable': true,
'resizable': true,
'buttons': [BX.CDialog.btnClose]
});
popup.Show();
}
</script>
