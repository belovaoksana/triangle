<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
	<div><img
			class="detail_picture"
			src="<?=$arResult["DETAIL_PICTURE"]["src"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["width"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["height"]?>"
		/></div>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;
	?><div class="blog-text"><?=$arResult["DETAIL_TEXT"];?></div>
	<div style="clear:both"></div>
	<br/>
	<?
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty) {
		if (is_array($arProperty["DISPLAY_VALUE"])) {
			if ($pid=='TAGS') {
				$x = implode("&nbsp;/&nbsp;#", $arProperty["DISPLAY_VALUE"]);
				echo "#$x";
			}
			else {
				echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
			}
		}
		elseif ($pid=='TAGS') {
			echo "#",$arProperty["DISPLAY_VALUE"];
		}
		else {
			echo $arProperty["DISPLAY_VALUE"];
		}
		?><br/>
		<?
	}
?>
</div>
