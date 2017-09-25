<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
    if (!empty($arResult["DETAIL_PICTURE"])) {
        $arImage = CFile::ResizeImageGet(
            $arResult["DETAIL_PICTURE"],
            array('width'=>$arParams["LIST_DETAIL_PICT_W"], 'height'=>$arParams["LIST_DETAIL_PICT_H"]), BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
    $arResult["DETAIL_PICTURE"] = $arImage;
    }
?>
