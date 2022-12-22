<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if($APPLICATION->GetDirProperty("smt_add_section_menu", SITE_DIR . 'service/') == "Y") {
	$aMenuLinksAdd = $APPLICATION->IncludeComponent(
	"simpletemplates:menu.elements", 
	"", 
	array(
		"IBLOCK_TYPE" => "smt_company",
		"IBLOCK_ID" => "12",
		"DEPTH_LEVEL" => "2",
		"CACHE_TIME" => "3600"
	),
	false
);
	$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksAdd);
}
?>