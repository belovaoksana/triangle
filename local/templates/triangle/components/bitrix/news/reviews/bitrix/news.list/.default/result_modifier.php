<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}
foreach ($arResult["ITEMS"] as $ID => $arItem) {
    if (!empty($arItem["PREVIEW_PICTURE"])) {
        $arImage = CFile::ResizeImageGet(
            $arItem["PREVIEW_PICTURE"],
            array('width'=>$arParams["LIST_PREVIEW_PICT_W"], 'height'=>$arParams["LIST_PREVIEW_PICT_H"]), BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
    $arResult["ITEMS"][$ID]["PREVIEW_PICTURE"] = $arImage;
    } else {
        $arImage = ["src" => "/local/templates/triangle/images/image_anons.png", "width" => 250, 'height'=> 150, "size" => 12400];
        $arResult["ITEMS"][$ID]["PREVIEW_PICTURE"] = $arImage;
    }
}
