<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arIBlock=array(
	"-" => GetMessage("IBLOCK_ANY"),
);
$rsIBlock = CIBlock::GetList(Array("sort" => "asc"), Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));
while($arr=$rsIBlock->Fetch()) {
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}

$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_IBLOCK"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlock,
			"MULTIPLE"=>"Y",
			"REFRESH" => "Y",
		),
		"PARENT_SECTION" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("IBLOCK_SECTION_ID"),
			"TYPE" => "STRING",
			"DEFAULT" => '',
		),
		"LIST_PREVIEW_PICT_H" => array(
			"NAME" => GetMessage("LIST_PREVIEW_PICT_H"),
			"TYPE" => "STRING",
			"DEFAULT" => "150",
		),
		"LIST_PREVIEW_PICT_W" => array(
			"NAME" => GetMessage("LIST_PREVIEW_PICT_W"),
			"TYPE" => "STRING",
			"DEFAULT" => "250",
		),
		"CACHE_TIME"  =>  Array("DEFAULT"=>180),
		"CACHE_GROUPS" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("CP_BPR_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"NOT_FOUND_PICTURE" => array(
		   "NAME" => GetMessage("NOT_FOUND_PICTURE"),
		   "TYPE" => "FILE",
		   "FD_TARGET" => "F",
		   "FD_EXT" => 'jpg,jpeg,gif,png',
		   "FD_UPLOAD" => true,
		   "FD_USE_MEDIALIB" => true,
		   "FD_MEDIALIB_TYPES" => Array('image')
	   ),
	),
);
?>
