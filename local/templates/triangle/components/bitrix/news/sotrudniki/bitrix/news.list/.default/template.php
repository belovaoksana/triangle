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
// pre($arResult["ITEMS"]);
// foreach ($arResult["ITEMS"] as $item) {
// 	echo $item['ID'], '<br>';
// 	$items[$item['ID']] = $item;
//
// }
pre($arResult["ITEMS"]);

?>
<h3>Подразделения компании</h3>

<div class="news-list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>

		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?foreach($arProperty["VALUE"] as $x):?>
					<a onClick="show()"><?=$arProperty[LINK_ELEMENT_VALUE][$x][NAME];?></a>
					<br>
					<div id="win" style="display:none;">
					   <div class="overlay"></div>
					      <div class="visible">
					        <h3><? echo $arProperty[LINK_ELEMENT_VALUE][$x][NAME];?></h3>
					          <div class="content">
					            <p>Содержание</p>
					          </div>
							  <button type="button" onClick="getElementById('win').style.display='none';">Закрыть</button>
					    </div>
					</div>
				<?endforeach;?>
			<?else:?>
			<?$x=($arProperty["VALUE"][0])?>
			<?$text=$arProperty[LINK_ELEMENT_VALUE][$x][PROPERTY_WORKER_DETAIL_TEXT];?>
			<a onClick="getElementById('win').removeAttribute('style');" type="button"><?=$arProperty[LINK_ELEMENT_VALUE][$x][NAME];?></a>
			<div id="win" style="display:none;">
			   <div class="overlay"></div>
			      <div class="visible">
			        <h3>Заголовок окна</h3>
			          <div class="content">
			            <p>Содержание</p>
			          </div>
					  <button type="button" onClick="getElementById('win').style.display='none';">Закрыть</button>
			    </div>
			</div>
			<?endif?><br/>
		<?endforeach;?>
	</p>
<?endforeach;?>
<script>
getElementById('win').removeAttribute('style');
</div>
