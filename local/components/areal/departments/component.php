<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if (!CModule::IncludeModule("iblock")) {
    echo 'Модуль инфоблоков не подключен';
    return;
}

$res = CIBlockElement::GetList(
    // ['NAME' => 'DESC'],
    false,
    ["IBLOCK_ID"=>9, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y"],
    false,
    false,
    ["ID", "NAME"]
);

while ($department = $res->Fetch()) {
    $arResult['DEPARTMENTS'][$department['ID']] =  $department;
}

$res = CIBlockElement::GetList(
    flase,
    ["IBLOCK_ID"=>7, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y"],
    false,
    false,
    ["ID", "NAME","PROPERTY_*","DETAIL_TEXT","PREVIEW_PICTURE"]
);

while ($employee = $res->Fetch()) {
    $arResult['DEPARTMENTS'][$employee["PROPERTY_20"]]['EMPLOYEES'][] = $employee;
    // pre($arResult);
}
$this->IncludeComponentTemplate();
