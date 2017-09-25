<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
if (!CModule::IncludeModule("iblock")) {
	echo 'Модуль инфоблоков не подключен';
	return;
}
if (empty($arParams["IBLOCK_ID"])) {
	ShowError('Инфоблок не выбран');
	return;
}
if ((int)$arParams["IBLOCK_ID"] <= 0) {
	ShowError('Данные инфоблока введены неверно');
	return;
}

if (!isset($arParams["CACHE_TIME"])) {
	$arParams["CACHE_TIME"] = 36000000;
}

if ($this->StartResultCache(false, ($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups()))) {
	$res_emp = CIBlockElement::GetList(
	    false,
	    ["IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y"],
	    false,
	    false,
	    ["ID", "IBLOCK_SECTION_ID", "NAME", "PROPERTY_POST", "DETAIL_TEXT", "PREVIEW_PICTURE"]
	);
	while ($employees = $res_emp->Fetch()) {
	    $arResult["DEPARTMENTS"][$employees["IBLOCK_SECTION_ID"]]["EMPLOYEES"][] = $employees;
		$ids[$employees["IBLOCK_SECTION_ID"]] = 1;
	}
	$res_dep = CIBlockSection::GetList(
		false,
		["IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" => array_keys($ids)],
		false,
		["ID", "NAME"]
	);
	while ($department = $res_dep->Fetch()) {
		$arResult["DEPARTMENTS"][$department["ID"]]["NAME"] = $department["NAME"];
	}

	$this->IncludeComponentTemplate();
}
