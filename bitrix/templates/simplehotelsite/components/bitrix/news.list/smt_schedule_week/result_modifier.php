<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Iblock;
use Bitrix\Main\Web\Json;

$sectionsID = array();
foreach ($arResult["ITEMS"] as $arItem) {
    if ($arItem["IBLOCK_SECTION_ID"]) {
        $sectionsID[] = $arItem["IBLOCK_SECTION_ID"];
    }
}
$sectionsID = array_unique($sectionsID);

$rsSection = CIBlockSection::GetList(array(), array("ID" => $sectionsID, "IBLOCK_ID"=>$arParams["IBLOCK_ID"]), false, array("ID", "NAME"));
while($section = $rsSection->GetNext()) {
    $arResult["SECTIONS"][$section["ID"]] = $section;
}

if (is_array($arResult["SECTION"]["PATH"]) && (count($arResult["SECTION"]["PATH"]) > 0)) {
    $arSection = end($arResult["SECTION"]["PATH"]);
    $indexLastSectionElement = count($arResult["SECTION"]["PATH"]) - 1;

    $rsSection = CIBlockSection::GetList(array(), array("ID" => $arSection["ID"], "IBLOCK_ID"=>$arParams["IBLOCK_ID"]), false, array("ID", "UF_DETAIL_TEXT", "UF_PREVIEW_TEXT"));
    if($section = $rsSection->GetNext()) {
        if(isset($arResult["SECTION"]["PATH"][$indexLastSectionElement])) {
            $arResult["SECTION"]["PATH"][$indexLastSectionElement] = array_merge($arSection, $section);
        }
    }
}

if($arParams["PICTURE_RESIZE"] == "Y") {
    foreach ($arResult["ITEMS"] as $count=>$arItem) {
        if ($arItem[$arParams["PICTURE_RESIZE_SOURCE"]]) {
            $file = CFile::ResizeImageGet($arItem[$arParams["PICTURE_RESIZE_SOURCE"]], array('width'=> (int) $arParams["PICTURE_RESIZE_WIDTH"], 'height'=> (int) $arParams["PICTURE_RESIZE_HEIGHT"]), (int) $arParams["PICTURE_RESIZE_MODE"], true);
            $arResult["ITEMS"][$count]["PREVIEW_PICTURE"]["SRC"] = $file["src"];
            $arResult["ITEMS"][$count]["PREVIEW_PICTURE"]["WIDTH"] = $file["width"];
            $arResult["ITEMS"][$count]["PREVIEW_PICTURE"]["HEIGHT"] = $file["height"];
        }
    }
}

$daysList = array();
$daysListRes = CIBlockPropertyEnum::GetList(array("DEF"=>"DESC", "SORT"=>"ASC"), array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "CODE"=>"DAY"));
while($day = $daysListRes->GetNext())
{
    $daysList[] = $day;
}

$hourPeriod = array();
for($i = (int)$arParams["START_TIME"]; $i <= (int)$arParams["FINISH_TIME"]; $i++) {
    $hourPeriod[$i] = $i . ':00' . '-' . ($i + 1) . ':00';
}

$eventsDayList = array();
foreach ($arResult["ITEMS"] as $count=>$arItem) {
    $startHour = false;
    if($arItem["PROPERTIES"]["START_TIME"]["VALUE"]) {
        $startHour = FormatDate('G', MakeTimeStamp($arItem["PROPERTIES"]["START_TIME"]["VALUE"]));
        $arItem["DISPLAY_PROPERTIES"]["START_TIME"]["DISPLAY_VALUE"] = FormatDate('H:i', MakeTimeStamp($arItem["PROPERTIES"]["START_TIME"]["VALUE"]));
    }

    if($arItem["PROPERTIES"]["FINISH_TIME"]["VALUE"]) {
        $finishHour = FormatDate('G', MakeTimeStamp($arItem["PROPERTIES"]["FINISH_TIME"]["VALUE"]));
        $arItem["DISPLAY_PROPERTIES"]["FINISH_TIME"]["DISPLAY_VALUE"] = FormatDate('H:i', MakeTimeStamp($arItem["PROPERTIES"]["FINISH_TIME"]["VALUE"]));
    }

    if($arItem["PROPERTIES"]["DAY"]["VALUE"] && $startHour) {
        $eventsDayList[$arItem["PROPERTIES"]["DAY"]["VALUE_XML_ID"]][$startHour][] = $arItem;
    }
}

$arResult["WEEK_DAYS"] = $daysList;
$arResult["HOURS"] = $hourPeriod;
$arResult["EVENTS"] = $eventsDayList;
