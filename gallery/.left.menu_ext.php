<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if($APPLICATION->GetDirProperty("smt_add_section_menu", SITE_DIR . 'gallery/') == "Y") {
	$aMenuLinksAdd = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"", 
	array(
		"IBLOCK_TYPE" => "smt_content",
		"IBLOCK_ID" => "8",
		"DEPTH_LEVEL" => "1",
		"CACHE_TIME" => "3600"
	),
	false
);

	$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksAdd);
}
?>