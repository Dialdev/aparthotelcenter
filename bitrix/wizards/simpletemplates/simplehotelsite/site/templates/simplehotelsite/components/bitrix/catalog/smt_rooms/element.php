<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);

if (isset($arParams['USE_COMMON_SETTINGS_BASKET_POPUP']) && $arParams['USE_COMMON_SETTINGS_BASKET_POPUP'] == 'Y')
{
	$basketAction = (isset($arParams['COMMON_ADD_TO_BASKET_ACTION']) ? array($arParams['COMMON_ADD_TO_BASKET_ACTION']) : array());
}
else
{
	$basketAction = (isset($arParams['DETAIL_ADD_TO_BASKET_ACTION']) ? $arParams['DETAIL_ADD_TO_BASKET_ACTION'] : array());
}
$isSidebar = ($arParams["SIDEBAR_DETAIL_SHOW"] == "Y" && isset($arParams["SIDEBAR_PATH"]) && !empty($arParams["SIDEBAR_PATH"]));
?>
<?$ElementID = $APPLICATION->IncludeComponent(
	"bitrix:catalog.element",
	"smt_rooms",
	array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
		"META_KEYWORDS" => $arParams["DETAIL_META_KEYWORDS"],
		"META_DESCRIPTION" => $arParams["DETAIL_META_DESCRIPTION"],
		"BROWSER_TITLE" => $arParams["DETAIL_BROWSER_TITLE"],
		"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
		"BASKET_URL" => $arParams["BASKET_URL"],
		"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
		"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
		"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
		"CHECK_SECTION_ID_VARIABLE" => (isset($arParams["DETAIL_CHECK_SECTION_ID_VARIABLE"]) ? $arParams["DETAIL_CHECK_SECTION_ID_VARIABLE"] : ''),
		"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
		"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"PRICE_CODE" => $arParams["PRICE_CODE"],
		"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
		"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
		"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
		"PRICE_VAT_SHOW_VALUE" => $arParams["PRICE_VAT_SHOW_VALUE"],
		"USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
		"PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],
		"ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
		"PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
		"LINK_IBLOCK_TYPE" => $arParams["LINK_IBLOCK_TYPE"],
		"LINK_IBLOCK_ID" => $arParams["LINK_IBLOCK_ID"],
		"LINK_PROPERTY_SID" => $arParams["LINK_PROPERTY_SID"],
		"LINK_ELEMENTS_URL" => $arParams["LINK_ELEMENTS_URL"],

		"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
		"OFFERS_FIELD_CODE" => $arParams["DETAIL_OFFERS_FIELD_CODE"],
		"OFFERS_PROPERTY_CODE" => $arParams["DETAIL_OFFERS_PROPERTY_CODE"],
		"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
		"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
		"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
		"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],

		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
		'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
		'CURRENCY_ID' => $arParams['CURRENCY_ID'],
		'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
		'USE_ELEMENT_COUNTER' => $arParams['USE_ELEMENT_COUNTER'],
		'SHOW_DEACTIVATED' => $arParams['SHOW_DEACTIVATED'],
		"USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],

		'MAIN_BLOCK_PROPERTY_CODE' => (isset($arParams['DETAIL_MAIN_BLOCK_PROPERTY_CODE']) ? $arParams['DETAIL_MAIN_BLOCK_PROPERTY_CODE'] : ''),

		'TABS_LIST' => (isset($arParams['TABS_LIST']) ? $arParams['TABS_LIST'] : ''),
		'TABS_LIST_ITEM_0' => (isset($arParams['TABS_LIST_ITEM_0']) ? $arParams['TABS_LIST_ITEM_0'] : ''),
		'TABS_LIST_ITEM_1' => (isset($arParams['TABS_LIST_ITEM_1']) ? $arParams['TABS_LIST_ITEM_1'] : ''),
		'TABS_LIST_ITEM_2' => (isset($arParams['TABS_LIST_ITEM_2']) ? $arParams['TABS_LIST_ITEM_2'] : ''),
		'TABS_LIST_ITEM_3' => (isset($arParams['TABS_LIST_ITEM_3']) ? $arParams['TABS_LIST_ITEM_3'] : ''),
		'TABS_LIST_ITEM_4' => (isset($arParams['TABS_LIST_ITEM_4']) ? $arParams['TABS_LIST_ITEM_4'] : ''),
		'TABS_LIST_ITEM_5' => (isset($arParams['TABS_LIST_ITEM_5']) ? $arParams['TABS_LIST_ITEM_5'] : ''),
		'TABS_LIST_ITEM_6' => (isset($arParams['TABS_LIST_ITEM_6']) ? $arParams['TABS_LIST_ITEM_6'] : ''),
		'TABS_LIST_ITEM_7' => (isset($arParams['TABS_LIST_ITEM_7']) ? $arParams['TABS_LIST_ITEM_7'] : ''),
		'TABS_LIST_ITEM_8' => (isset($arParams['TABS_LIST_ITEM_8']) ? $arParams['TABS_LIST_ITEM_8'] : ''),
		'TABS_LIST_ITEM_9' => (isset($arParams['TABS_LIST_ITEM_9']) ? $arParams['TABS_LIST_ITEM_9'] : ''),
		'TABS_LIST_INCLUDE_0' => (isset($arParams['TABS_LIST_INCLUDE_0']) ? $arParams['TABS_LIST_INCLUDE_0'] : ''),
		'TABS_LIST_INCLUDE_1' => (isset($arParams['TABS_LIST_INCLUDE_1']) ? $arParams['TABS_LIST_INCLUDE_1'] : ''),
		'TABS_LIST_INCLUDE_2' => (isset($arParams['TABS_LIST_INCLUDE_2']) ? $arParams['TABS_LIST_INCLUDE_2'] : ''),
		'TABS_LIST_INCLUDE_3' => (isset($arParams['TABS_LIST_INCLUDE_3']) ? $arParams['TABS_LIST_INCLUDE_3'] : ''),
		'TABS_LIST_INCLUDE_4' => (isset($arParams['TABS_LIST_INCLUDE_4']) ? $arParams['TABS_LIST_INCLUDE_4'] : ''),
		'TABS_LIST_INCLUDE_5' => (isset($arParams['TABS_LIST_INCLUDE_5']) ? $arParams['TABS_LIST_INCLUDE_5'] : ''),
		'TABS_LIST_INCLUDE_6' => (isset($arParams['TABS_LIST_INCLUDE_6']) ? $arParams['TABS_LIST_INCLUDE_6'] : ''),
		'TABS_LIST_INCLUDE_7' => (isset($arParams['TABS_LIST_INCLUDE_7']) ? $arParams['TABS_LIST_INCLUDE_7'] : ''),
		'TABS_LIST_INCLUDE_8' => (isset($arParams['TABS_LIST_INCLUDE_8']) ? $arParams['TABS_LIST_INCLUDE_8'] : ''),
		'TABS_LIST_INCLUDE_9' => (isset($arParams['TABS_LIST_INCLUDE_9']) ? $arParams['TABS_LIST_INCLUDE_9'] : ''),

		'BUTTON_LIST' => (isset($arParams['BUTTON_LIST']) ? $arParams['BUTTON_LIST'] : ''),
		'BUTTON_LIST_HREF_0' => (isset($arParams['BUTTON_LIST_HREF_0']) ? $arParams['BUTTON_LIST_HREF_0'] : ''),
		'BUTTON_LIST_HREF_1' => (isset($arParams['BUTTON_LIST_HREF_1']) ? $arParams['BUTTON_LIST_HREF_1'] : ''),
		'BUTTON_LIST_HREF_3' => (isset($arParams['BUTTON_LIST_HREF_3']) ? $arParams['BUTTON_LIST_HREF_3'] : ''),
		'BUTTON_LIST_HREF_4' => (isset($arParams['BUTTON_LIST_HREF_4']) ? $arParams['BUTTON_LIST_HREF_4'] : ''),
		'BUTTON_LIST_HREF_2' => (isset($arParams['BUTTON_LIST_HREF_2']) ? $arParams['BUTTON_LIST_HREF_2'] : ''),
		'BUTTON_LIST_HREF_5' => (isset($arParams['BUTTON_LIST_HREF_5']) ? $arParams['BUTTON_LIST_HREF_5'] : ''),
		'BUTTON_LIST_HREF_6' => (isset($arParams['BUTTON_LIST_HREF_6']) ? $arParams['BUTTON_LIST_HREF_6'] : ''),
		'BUTTON_LIST_HREF_7' => (isset($arParams['BUTTON_LIST_HREF_7']) ? $arParams['BUTTON_LIST_HREF_7'] : ''),
		'BUTTON_LIST_HREF_8' => (isset($arParams['BUTTON_LIST_HREF_8']) ? $arParams['BUTTON_LIST_HREF_8'] : ''),
		'BUTTON_LIST_HREF_9' => (isset($arParams['BUTTON_LIST_HREF_9']) ? $arParams['BUTTON_LIST_HREF_9'] : ''),
		'BUTTON_LIST_CLASS_0' => (isset($arParams['BUTTON_LIST_CLASS_0']) ? $arParams['BUTTON_LIST_CLASS_0'] : ''),
		'BUTTON_LIST_CLASS_1' => (isset($arParams['BUTTON_LIST_CLASS_1']) ? $arParams['BUTTON_LIST_CLASS_1'] : ''),
		'BUTTON_LIST_CLASS_3' => (isset($arParams['BUTTON_LIST_CLASS_3']) ? $arParams['BUTTON_LIST_CLASS_3'] : ''),
		'BUTTON_LIST_CLASS_4' => (isset($arParams['BUTTON_LIST_CLASS_4']) ? $arParams['BUTTON_LIST_CLASS_4'] : ''),
		'BUTTON_LIST_CLASS_2' => (isset($arParams['BUTTON_LIST_CLASS_2']) ? $arParams['BUTTON_LIST_CLASS_2'] : ''),
		'BUTTON_LIST_CLASS_5' => (isset($arParams['BUTTON_LIST_CLASS_5']) ? $arParams['BUTTON_LIST_CLASS_5'] : ''),
		'BUTTON_LIST_CLASS_6' => (isset($arParams['BUTTON_LIST_CLASS_6']) ? $arParams['BUTTON_LIST_CLASS_6'] : ''),
		'BUTTON_LIST_CLASS_7' => (isset($arParams['BUTTON_LIST_CLASS_7']) ? $arParams['BUTTON_LIST_CLASS_7'] : ''),
		'BUTTON_LIST_CLASS_8' => (isset($arParams['BUTTON_LIST_CLASS_8']) ? $arParams['BUTTON_LIST_CLASS_8'] : ''),
		'BUTTON_LIST_CLASS_9' => (isset($arParams['BUTTON_LIST_CLASS_9']) ? $arParams['BUTTON_LIST_CLASS_9'] : ''),

		"DISPLAY_PICTURE" => (isset($arParams['DETAIL_DISPLAY_PICTURE']) ? $arParams['DETAIL_DISPLAY_PICTURE'] : ''),
		"DISPLAY_PREVIEW_TEXT" => (isset($arParams['DETAIL_DISPLAY_PREVIEW_TEXT']) ? $arParams['DETAIL_DISPLAY_PREVIEW_TEXT'] : ''),
		"DISPLAY_DATE" => (isset($arParams['DETAIL_DISPLAY_DATE']) ? $arParams['DETAIL_DISPLAY_DATE'] : ''),
		"DISPLAY_DESCRIPTION" => (isset($arParams['DETAIL_DISPLAY_DESCRIPTION']) ? $arParams['DETAIL_DISPLAY_DESCRIPTION'] : ''),
        "PRICE_HEADER" => (isset($arParams['DETAIL_PRICE_HEADER']) ? $arParams['DETAIL_PRICE_HEADER'] : ''),
        "CURRENCY_DECIMALS" => (isset($arParams['DETAIL_CURRENCY_DECIMALS']) ? $arParams['DETAIL_CURRENCY_DECIMALS'] : ''),
		"CURRENCY_DECIMALS_POINT" => (isset($arParams['DETAIL_CURRENCY_DECIMALS_POINT']) ? $arParams['DETAIL_CURRENCY_DECIMALS_POINT'] : ''),
		"CURRENCY_THOUSANDS_SEP" => (isset($arParams['DETAIL_CURRENCY_THOUSANDS_SEP']) ? $arParams['DETAIL_CURRENCY_THOUSANDS_SEP'] : ''),
		"PICTURE_RESIZE" => (isset($arParams['DETAIL_PICTURE_RESIZE']) ? $arParams['DETAIL_PICTURE_RESIZE'] : ''),
		"PICTURE_RESIZE_MODE" => (isset($arParams['DETAIL_PICTURE_RESIZE_MODE']) ? $arParams['DETAIL_PICTURE_RESIZE_MODE'] : ''),
		"PICTURE_RESOLUTION" => (isset($arParams['DETAIL_PICTURE_RESOLUTION']) ? $arParams['DETAIL_PICTURE_RESOLUTION'] : ''),
		"PICTURE_RESIZE_SOURCE" => (isset($arParams['DETAIL_PICTURE_RESIZE_SOURCE']) ? $arParams['DETAIL_PICTURE_RESIZE_SOURCE'] : ''),
		"PICTURE_RESIZE_WIDTH" => (isset($arParams['DETAIL_PICTURE_RESIZE_WIDTH']) ? $arParams['DETAIL_PICTURE_RESIZE_WIDTH'] : ''),
		"PICTURE_RESIZE_HEIGHT" => (isset($arParams['DETAIL_PICTURE_RESIZE_HEIGHT']) ? $arParams['DETAIL_PICTURE_RESIZE_HEIGHT'] : ''),
		"PICTURE_RESIZE_GALLERY" => (isset($arParams['DETAIL_PICTURE_RESIZE_GALLERY']) ? $arParams['DETAIL_PICTURE_RESIZE_GALLERY'] : ''),
		"PICTURE_RESIZE_MODE_GALLERY" => (isset($arParams['DETAIL_PICTURE_RESIZE_MODE_GALLERY']) ? $arParams['DETAIL_PICTURE_RESIZE_MODE_GALLERY'] : ''),
		"PICTURE_RESIZE_SOURCE_GALLERY" => (isset($arParams['DETAIL_PICTURE_RESIZE_SOURCE_GALLERY']) ? $arParams['DETAIL_PICTURE_RESIZE_SOURCE_GALLERY'] : ''),
		"PICTURE_RESOLUTION_GALLERY" => (isset($arParams['DETAIL_PICTURE_RESOLUTION_GALLERY']) ? $arParams['DETAIL_PICTURE_RESOLUTION_GALLERY'] : ''),
		"PICTURE_RESIZE_WIDTH_GALLERY" => (isset($arParams['DETAIL_PICTURE_RESIZE_WIDTH_GALLERY']) ? $arParams['DETAIL_PICTURE_RESIZE_WIDTH_GALLERY'] : ''),
		"PICTURE_RESIZE_HEIGHT_GALLERY" => (isset($arParams['DETAIL_PICTURE_RESIZE_HEIGHT_GALLERY']) ? $arParams['DETAIL_PICTURE_RESIZE_HEIGHT_GALLERY'] : ''),
		"SMT_SLIDER" => (isset($arParams['DETAIL_SMT_SLIDER']) ? $arParams['DETAIL_SMT_SLIDER'] : ''),
		"SMT_SLIDER_ITEMS" => (isset($arParams['DETAIL_SMT_SLIDER_ITEMS']) ? $arParams['DETAIL_SMT_SLIDER_ITEMS'] : ''),
		"SMT_SLIDER_MARGIN" => (isset($arParams['DETAIL_SMT_SLIDER_MARGIN']) ? $arParams['DETAIL_SMT_SLIDER_MARGIN'] : ''),
		"SMT_SLIDER_NAV" => (isset($arParams['DETAIL_SMT_SLIDER_NAV']) ? $arParams['DETAIL_SMT_SLIDER_NAV'] : ''),
		"SMT_SLIDER_DOTS" => (isset($arParams['DETAIL_SMT_SLIDER_DOTS']) ? $arParams['DETAIL_SMT_SLIDER_DOTS'] : ''),
		"SMT_SLIDER_VERTICAL_ALIGN" => (isset($arParams['DETAIL_SMT_SLIDER_VERTICAL_ALIGN']) ? $arParams['DETAIL_SMT_SLIDER_VERTICAL_ALIGN'] : ''),
		"SMT_SLIDER_RESPONSIVE" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE'] : ''),
		"SMT_SLIDER_CUSTOM" => (isset($arParams['DETAIL_SMT_SLIDER_CUSTOM']) ? $arParams['DETAIL_SMT_SLIDER_CUSTOM'] : ''),
		"SMT_SLIDER_GALLERY" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY'] : ''),
		"SMT_SLIDER_GALLERY_ITEMS" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_ITEMS']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_ITEMS'] : ''),
		"SMT_SLIDER_GALLERY_MARGIN" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_MARGIN']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_MARGIN'] : ''),
		"SMT_SLIDER_GALLERY_NAV" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_NAV']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_NAV'] : ''),
		"SMT_SLIDER_GALLERY_DOTS" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_DOTS']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_DOTS'] : ''),
		"SMT_SLIDER_GALLERY_VERTICAL_ALIGN" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_VERTICAL_ALIGN']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_VERTICAL_ALIGN'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE'] : ''),
		"SMT_SLIDER_GALLERY_CUSTOM" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_CUSTOM']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_CUSTOM'] : ''),
		
		"SMT_SLIDER_RESPONSIVE_ITEMS_0" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_0']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_0'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_0" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_0']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_0'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_1" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_1']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_1'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_1" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_1']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_1'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_2" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_2']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_2'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_2" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_2']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_2'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_3" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_3']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_3'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_3" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_3']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_3'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_4" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_4']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_4'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_4" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_4']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_4'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_5" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_5']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_5'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_5" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_5']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_5'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_6" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_6']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_6'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_6" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_6']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_6'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_7" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_7']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_7'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_7" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_7']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_7'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_8" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_8']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_8'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_8" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_8']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_8'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_9" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_9']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_9'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_9" => (isset($arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_9']) ? $arParams['DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_9'] : ''),

		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_0" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_0']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_0'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_0" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_0']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_0'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_1" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_1']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_1'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_1" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_1']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_1'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_2" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_2']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_2'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_2" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_2']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_2'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_3" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_3']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_3'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_3" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_3']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_3'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_4" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_4']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_4'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_4" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_4']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_4'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_5" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_5']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_5'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_5" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_5']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_5'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_6" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_6']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_6'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_6" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_6']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_6'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_7" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_7']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_7'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_7" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_7']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_7'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_8" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_8']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_8'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_8" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_8']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_8'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_9" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_9']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_9'] : ''),
		"SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_9" => (isset($arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_9']) ? $arParams['DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_9'] : ''),

		'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
		'LABEL_PROP' => $arParams['LABEL_PROP'],
		'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
		'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],
		'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
		'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
		'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
		'SHOW_MAX_QUANTITY' => $arParams['DETAIL_SHOW_MAX_QUANTITY'],
		'MESS_BTN_BUY' => $arParams['MESS_BTN_BUY'],
		'MESS_BTN_ADD_TO_BASKET' => $arParams['MESS_BTN_ADD_TO_BASKET'],
		'MESS_BTN_SUBSCRIBE' => $arParams['MESS_BTN_SUBSCRIBE'],
		'MESS_BTN_COMPARE' => $arParams['MESS_BTN_COMPARE'],
		'MESS_NOT_AVAILABLE' => $arParams['MESS_NOT_AVAILABLE'],
		'USE_VOTE_RATING' => $arParams['DETAIL_USE_VOTE_RATING'],
		'VOTE_DISPLAY_AS_RATING' => (isset($arParams['DETAIL_VOTE_DISPLAY_AS_RATING']) ? $arParams['DETAIL_VOTE_DISPLAY_AS_RATING'] : ''),
		'USE_COMMENTS' => $arParams['DETAIL_USE_COMMENTS'],
		'BLOG_USE' => (isset($arParams['DETAIL_BLOG_USE']) ? $arParams['DETAIL_BLOG_USE'] : ''),
		'BLOG_URL' => (isset($arParams['DETAIL_BLOG_URL']) ? $arParams['DETAIL_BLOG_URL'] : ''),
		'BLOG_EMAIL_NOTIFY' => (isset($arParams['DETAIL_BLOG_EMAIL_NOTIFY']) ? $arParams['DETAIL_BLOG_EMAIL_NOTIFY'] : ''),
		'VK_USE' => (isset($arParams['DETAIL_VK_USE']) ? $arParams['DETAIL_VK_USE'] : ''),
		'VK_API_ID' => (isset($arParams['DETAIL_VK_API_ID']) ? $arParams['DETAIL_VK_API_ID'] : 'API_ID'),
		'FB_USE' => (isset($arParams['DETAIL_FB_USE']) ? $arParams['DETAIL_FB_USE'] : ''),
		'FB_APP_ID' => (isset($arParams['DETAIL_FB_APP_ID']) ? $arParams['DETAIL_FB_APP_ID'] : ''),
		'BRAND_USE' => (isset($arParams['DETAIL_BRAND_USE']) ? $arParams['DETAIL_BRAND_USE'] : 'N'),
		'BRAND_PROP_CODE' => (isset($arParams['DETAIL_BRAND_PROP_CODE']) ? $arParams['DETAIL_BRAND_PROP_CODE'] : ''),
		'DISPLAY_NAME' => (isset($arParams['DETAIL_DISPLAY_NAME']) ? $arParams['DETAIL_DISPLAY_NAME'] : ''),
		'ADD_DETAIL_TO_SLIDER' => (isset($arParams['DETAIL_ADD_DETAIL_TO_SLIDER']) ? $arParams['DETAIL_ADD_DETAIL_TO_SLIDER'] : ''),
		'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
		"ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : ''),
		"ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
		"DISPLAY_PREVIEW_TEXT_MODE" => (isset($arParams['DETAIL_DISPLAY_PREVIEW_TEXT_MODE']) ? $arParams['DETAIL_DISPLAY_PREVIEW_TEXT_MODE'] : ''),
		"DETAIL_PICTURE_MODE" => (isset($arParams['DETAIL_DETAIL_PICTURE_MODE']) ? $arParams['DETAIL_DETAIL_PICTURE_MODE'] : ''),
		'ADD_TO_BASKET_ACTION' => $basketAction,
		'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
		'DISPLAY_COMPARE' => (isset($arParams['USE_COMPARE']) ? $arParams['USE_COMPARE'] : ''),
		'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare'],
		'SHOW_BASIS_PRICE' => (isset($arParams['DETAIL_SHOW_BASIS_PRICE']) ? $arParams['DETAIL_SHOW_BASIS_PRICE'] : 'Y'),
		'BACKGROUND_IMAGE' => (isset($arParams['DETAIL_BACKGROUND_IMAGE']) ? $arParams['DETAIL_BACKGROUND_IMAGE'] : ''),
		'DISABLE_INIT_JS_IN_COMPONENT' => (isset($arParams['DISABLE_INIT_JS_IN_COMPONENT']) ? $arParams['DISABLE_INIT_JS_IN_COMPONENT'] : ''),
		'SET_VIEWED_IN_COMPONENT' => (isset($arParams['DETAIL_SET_VIEWED_IN_COMPONENT']) ? $arParams['DETAIL_SET_VIEWED_IN_COMPONENT'] : ''),
	),
	$component
);?>
<?
$GLOBALS["CATALOG_CURRENT_ELEMENT_ID"] = $ElementID;
unset($basketAction);
if ($ElementID > 0 && $arParams["SMT_IBLOCK_LINK_PROPERTY_SID"])
{
	global $arLinkFilter;
	$obCache = new CPHPCache;
	$strCacheID = $componentPath.LANG.$arParams["IBLOCK_ID"].$ElementID;
	if($arParams["CACHE_TYPE"] == "N" || $arParams["CACHE_TYPE"] == "A" && COption::GetOptionString("main", "component_cache_on", "Y") == "N") {
		$CACHE_TIME = 0;
	} else {
		$CACHE_TIME = $arParams["CACHE_TIME"];
	}
	if($obCache->StartDataCache($CACHE_TIME, $strCacheID, $componentPath))
	{
		$arLinkProperty = array();
		$rsProperties = CIBlockElement::GetProperty($arParams["IBLOCK_ID"], $ElementID, "sort", "asc", array("ACTIVE"=>"Y","CODE"=>$arParams["SMT_IBLOCK_LINK_PROPERTY_SID"]));
		while($arProperty = $rsProperties->Fetch())
		{
			if(is_array($arProperty["VALUE"]) && count($arProperty["VALUE"])>0)
			{
				foreach($arProperty["VALUE"] as $value)
					$arLinkProperty[$value]=true;
			}
			elseif(!is_array($arProperty["VALUE"]) && strlen($arProperty["VALUE"])>0) {
				$arLinkProperty[$arProperty["VALUE"]]=true;
			}
		}
		$obCache->EndDataCache($arLinkProperty);
	} else {
		$arLinkProperty = $obCache->GetVars();
	}
	if(count($arLinkProperty) > 0) {
		$arLinkFilter = array(
			"ID" => array_keys($arLinkProperty),
		);
?>
<div class="smt-widget smt-widget_margin">
<?$APPLICATION->IncludeFile(
	SITE_DIR."smt_include/room_link_header.php",
	Array(),
	Array("MODE"=>"html", "SHOW_BORDER"=>false)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"smt_projects",
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"FILTER_NAME" => "arLinkFilter",
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"SET_TITLE" => "N",
		"PAGE_ELEMENT_COUNT" => $arParams["LINK_PAGE_ELEMENT_COUNT"],
		"LINE_ELEMENT_COUNT" => $arParams["LINK_LINE_ELEMENT_COUNT"],
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		'SHOW_ALL_WO_SECTION' => 'Y',

		'MAIN_BLOCK_PROPERTY_CODE' => (isset($arParams['LIST_MAIN_BLOCK_PROPERTY_CODE']) ? $arParams['LIST_MAIN_BLOCK_PROPERTY_CODE'] : ''),

		"DISPLAY_NAME" => (isset($arParams['LIST_DISPLAY_NAME']) ? $arParams['LIST_DISPLAY_NAME'] : ''),
		"DISPLAY_PICTURE" => (isset($arParams['LIST_DISPLAY_PICTURE']) ? $arParams['LIST_DISPLAY_PICTURE'] : ''),
		"DISPLAY_PREVIEW_TEXT" => (isset($arParams['LIST_DISPLAY_PREVIEW_TEXT']) ? $arParams['LIST_DISPLAY_PREVIEW_TEXT'] : ''),
		"DISPLAY_DATE" => (isset($arParams['LIST_DISPLAY_DATE']) ? $arParams['LIST_DISPLAY_DATE'] : ''),
		"DISPLAY_DESCRIPTION" => (isset($arParams['LIST_DISPLAY_DESCRIPTION']) ? $arParams['LIST_DISPLAY_DESCRIPTION'] : ''),
		"PRICE_HEADER" => (isset($arParams['DETAIL_PRICE_HEADER']) ? $arParams['DETAIL_PRICE_HEADER'] : ''),
		"CURRENCY_DECIMALS" => (isset($arParams['LIST_CURRENCY_DECIMALS']) ? $arParams['LIST_CURRENCY_DECIMALS'] : ''),
		"CURRENCY_DECIMALS_POINT" => (isset($arParams['LIST_CURRENCY_DECIMALS_POINT']) ? $arParams['LIST_CURRENCY_DECIMALS_POINT'] : ''),
		"CURRENCY_THOUSANDS_SEP" => (isset($arParams['LIST_CURRENCY_THOUSANDS_SEP']) ? $arParams['LIST_CURRENCY_THOUSANDS_SEP'] : ''),
		"PICTURE_RESIZE" => (isset($arParams['LIST_PICTURE_RESIZE']) ? $arParams['LIST_PICTURE_RESIZE'] : ''),
		"PICTURE_RESIZE_MODE" => (isset($arParams['LIST_PICTURE_RESIZE_MODE']) ? $arParams['LIST_PICTURE_RESIZE_MODE'] : ''),
		"PICTURE_RESOLUTION" => (isset($arParams['LIST_PICTURE_RESOLUTION']) ? $arParams['LIST_PICTURE_RESOLUTION'] : ''),
		"PICTURE_RESIZE_SOURCE" => (isset($arParams['LIST_PICTURE_RESIZE_SOURCE']) ? $arParams['LIST_PICTURE_RESIZE_SOURCE'] : ''),
		"PICTURE_RESIZE_WIDTH" => (isset($arParams['LIST_PICTURE_RESIZE_WIDTH']) ? $arParams['LIST_PICTURE_RESIZE_WIDTH'] : ''),
		"PICTURE_RESIZE_HEIGHT" => (isset($arParams['LIST_PICTURE_RESIZE_HEIGHT']) ? $arParams['LIST_PICTURE_RESIZE_HEIGHT'] : ''),

		"SMT_SLIDER" => (isset($arParams['LINK_SMT_SLIDER']) ? $arParams['LINK_SMT_SLIDER'] : ''),
		"SMT_SLIDER_ITEMS" => (isset($arParams['LINK_SMT_SLIDER_ITEMS']) ? $arParams['LINK_SMT_SLIDER_ITEMS'] : ''),
		"SMT_SLIDER_MARGIN" => (isset($arParams['LINK_SMT_SLIDER_MARGIN']) ? $arParams['LINK_SMT_SLIDER_MARGIN'] : ''),
		"SMT_SLIDER_NAV" => (isset($arParams['LINK_SMT_SLIDER_NAV']) ? $arParams['LINK_SMT_SLIDER_NAV'] : ''),
		"SMT_SLIDER_DOTS" => (isset($arParams['LINK_SMT_SLIDER_DOTS']) ? $arParams['LINK_SMT_SLIDER_DOTS'] : ''),
		"SMT_SLIDER_VERTICAL_ALIGN" => (isset($arParams['LINK_SMT_SLIDER_VERTICAL_ALIGN']) ? $arParams['LINK_SMT_SLIDER_VERTICAL_ALIGN'] : ''),
		"SMT_SLIDER_RESPONSIVE" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE'] : ''),
		"SMT_SLIDER_CUSTOM" => (isset($arParams['LINK_SMT_SLIDER_CUSTOM']) ? $arParams['LINK_SMT_SLIDER_CUSTOM'] : ''),

		"SMT_SLIDER_RESPONSIVE_ITEMS_0" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_0']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_0'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_0" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_0']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_0'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_1" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_1']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_1'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_1" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_1']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_1'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_2" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_2']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_2'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_2" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_2']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_2'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_3" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_3']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_3'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_3" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_3']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_3'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_4" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_4']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_4'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_4" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_4']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_4'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_5" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_5']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_5'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_5" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_5']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_5'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_6" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_6']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_6'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_6" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_6']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_6'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_7" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_7']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_7'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_7" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_7']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_7'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_8" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_8']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_8'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_8" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_8']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_8'] : ''),
		"SMT_SLIDER_RESPONSIVE_ITEMS_9" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_9']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_ITEMS_9'] : ''),
		"SMT_SLIDER_RESPONSIVE_CUSTOM_9" => (isset($arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_9']) ? $arParams['LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_9'] : ''),
	),
	$component
);?>
</div>
<? } ?>
<? } ?>
<div class="smt-popup mfp-hide" id="smt-popup-order">
	<section class="smt-widget smt-widget_no-margin">
		<header>
			<div class="smt-header smt-header-underline-left h4"><?$APPLICATION->IncludeFile(
					SITE_DIR."smt_include/form_order_header.php",
					Array(),
					Array("MODE"=>"html")
				);?></div>
		</header>
		<div class="smt-widget__content">
			<?$APPLICATION->IncludeFile(
				SITE_DIR."smt_include/form_order.php",
				Array("OBJECT_ID" => $ElementID),
				Array("MODE"=>"html", "SHOW_BORDER"=>false)
			);?>
		</div>
	</section>
</div>
<div class="smt-popup mfp-hide" id="smt-popup-consult">
	<section class="smt-widget smt-widget_no-margin">
		<header>
			<div class="smt-header smt-header-underline-left h4"><?$APPLICATION->IncludeFile(
					SITE_DIR."smt_include/form_consult_header.php",
					Array(),
					Array("MODE"=>"html")
				);?></div>
		</header>
		<div class="smt-widget__content">
			<?$APPLICATION->IncludeFile(
				SITE_DIR."smt_include/form_consult.php",
				Array("OBJECT_ID" => $ElementID),
				Array("MODE"=>"html", "SHOW_BORDER"=>false)
			);?>
		</div>
	</section>
</div>
