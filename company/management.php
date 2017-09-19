
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наша команда");
?>
<?$APPLICATION->IncludeComponent(
	"my_component:news.list",
	"sotrudniki_1",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "employees",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
<?
   if(CModule::IncludeModule("iblock"))
   {
       //ПОДКЛЮЧАЕМ МОДУЛЬ ИНФОБЛОКИ

       $arSelect = Array("ID", "NAME","PROPERTY_*","DETAIL_TEXT","PREVIEW_PICTURE");
       $arFilter = Array("IBLOCK_ID"=>7, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");

       $res = CIBlockElement::GetList(
           Array("PROPERTY_20" => "ASC"),
           $arFilter,
           false,
           Array("nPageSize"=>50),
           $arSelect);

        while($ob = $res->GetNextElement()){
            $arItem_sotr = $ob->GetFields();
            $arItem_sotr["PROPERTIES"] = $ob->GetProperties();
            $arResult_employees[] = $arItem_sotr;
            }
    }
    if(CModule::IncludeModule("iblock"))
    {
        //ПОДКЛЮЧАЕМ МОДУЛЬ ИНФОБЛОКИ

        $arSelect = Array("ID","NAME","PROPERTY_*",);
        $arFilter = Array("IBLOCK_ID"=>9, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");

        $res = CIBlockElement::GetList(
            Array(),
            $arFilter,
            false,
            Array("nPageSize"=>50),
            $arSelect);

         while($ob = $res->GetNextElement()){
             $arItem_department = $ob->GetFields();
             $arItem_department["PROPERTIES"] = $ob->GetProperties();
             $arResult_department[] =  $arItem_department;
             }
     }
?>
<?
foreach($arResult_department as $department)
{
    foreach($arResult_employees as $employee)
    {
        if ($department["ID"]==$employee["PROPERTY_20"])
        {
            $department["EMPLOYEES"][] = $employee;
        }
    }
    $arResult[] = $department;
}
?>
<div class="container">
<?foreach($arResult_department as $department):?>
        <h3><?echo $department["NAME"]?></h3> <br>
        <?foreach($arResult_employees as $employee):?>
            <?if ($employee["PROPERTY_20"]==$department["ID"]):?>
                <div style="margin-top:10px">
                <b><?echo $employee["NAME"]?></b> <br>
                <?$ImagePath = CFile::GetPath( $employee["PREVIEW_PICTURE"]);?>
                <img
                    class="preview_picture"
                    src="<?=$ImagePath?>"
                    width="115"
                    height="150"
                    style="float:left, margin:10px"
                    /><br>
                <?echo $employee ["~DETAIL_TEXT"]?> <br>
                </div>
            <?endif?>
        <?endforeach;?>
<?endforeach;?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
