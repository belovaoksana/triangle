<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}
foreach ($arResult["ITEMS"] as $ID => $arItem) {
    if (!empty($arItem["PREVIEW_PICTURE"])) {
        $arResult["ITEMS"][$ID]["PREVIEW_PICTURE"] = CFile::ResizeImageGet(
        $arItem["PREVIEW_PICTURE"],
        array('width'=>$arParams["LIST_PREVIEW_PICT_W"], 'height'=>$arParams["LIST_PREVIEW_PICT_H"]), BX_RESIZE_IMAGE_PROPORTIONAL,
        true
        );
    } else {
        $arResult["ITEMS"][$ID]["PREVIEW_PICTURE"] = [
        "src" =>  $arParams["NOT_FOUND_PICTURE"],
        "width" => $arParams["LIST_PREVIEW_PICT_W"],
        'height'=> $arParams["LIST_PREVIEW_PICT_H"]
        ];
    }
}
