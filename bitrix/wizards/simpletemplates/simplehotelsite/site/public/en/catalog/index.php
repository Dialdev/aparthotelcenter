<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"smt_rooms", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "#SITE_DIR#personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "METATITLE",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_META_DESCRIPTION" => "METADESCRIPTION",
		"DETAIL_META_KEYWORDS" => "METAKEYWORDS",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LABEL",
			1 => "PRICE",
			2 => "PRICE_TEXT",
			3 => "PRICE_DISCOUNT",
			4 => "PRICE_TABLE",
			5 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"IBLOCK_ID" => "#SMT_CATALOG_IBLOCK_ID#",
		"IBLOCK_TYPE" => "smt_company",
		"INCLUDE_SUBSECTIONS" => "Y",
		"INSTANT_RELOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_PROPERTY_CODE" => array(
			0 => "LABEL",
			1 => "PRICE",
			2 => "PRICE_TEXT",
			3 => "PRICE_DISCOUNT",
			4 => "",
		),
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "� �������",
		"MESS_BTN_BUY" => "������",
		"MESS_BTN_COMPARE" => "���������",
		"MESS_BTN_DETAIL" => "���������",
		"MESS_NOT_AVAILABLE" => "��� � �������",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PAGE_ELEMENT_COUNT" => "12",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => "",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => "",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"SECTIONS_VIEW_MODE" => "TILE",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "2",
		"SEF_FOLDER" => "#SITE_DIR#catalog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "Y",
		"SIDEBAR_PATH" => "#SITE_DIR#smt_include/sidebar_catalog.php",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"TEMPLATE_THEME" => "smt",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_VIEW_MODE" => "SECTION",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "N",
		"USE_FILTER" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_STORE" => "N",
		"COMPONENT_TEMPLATE" => "smt_rooms",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "PRICE",
			1 => "PRICE_DISCOUNT",
		),
		"COMPATIBLE_MODE" => "Y",
		"LINK_PAGE_ELEMENT_COUNT" => "12",
		"LINK_LINE_ELEMENT_COUNT" => "4",
		"SMT_IBLOCK_LINK_PROPERTY_SID" => "LINK1",
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
		"LIST_MAIN_BLOCK_PROPERTY_CODE" => "",
		"LIST_CURRENCY" => "���.",
		"LIST_PRICE_HEADER" => "��������� ��",
		"DETAIL_CURRENCY" => "���.",
		"DETAIL_PRICE_HEADER" => "��������� ��",
		"TABS_LIST_INCLUDE_0" => "",
		"TABS_LIST_INCLUDE_1" => "",
		"TABS_LIST" => array(
			0 => "��������",
			1 => "����",
			2 => "",
		),
		"TABS_LIST_ITEM_0" => "SMT_DETAIL_TEXT",
		"TABS_LIST_ITEM_1" => "PRICE_TABLE",
		"BUTTON_LIST" => array(
			0 => "�������� ������������",
			1 => "�������� ������",
			2 => "",
		),
		"BUTTON_LIST_HREF_0" => "#smt-popup-consult",
		"BUTTON_LIST_CLASS_0" => "btn btn-block smt-btn-border smt-popup-link-js",
		"LIST_DISPLAY_NAME" => "Y",
		"LIST_DISPLAY_PICTURE" => "Y",
		"LIST_DISPLAY_PREVIEW_TEXT" => "N",
		"LIST_DISPLAY_DATE" => "N",
		"LIST_DISPLAY_DESCRIPTION" => "N",
		"LIST_CURRENCY_DECIMALS" => "",
		"LIST_CURRENCY_DECIMALS_POINT" => ".",
		"LIST_CURRENCY_THOUSANDS_SEP" => " ",
		"LIST_PICTURE_RESIZE" => "Y",
		"LIST_PICTURE_RESIZE_MODE" => "2",
		"LIST_PICTURE_RESOLUTION" => "1x1",
		"LIST_PICTURE_RESIZE_SOURCE" => "DETAIL_PICTURE",
		"LIST_PICTURE_RESIZE_WIDTH" => "320",
		"LIST_PICTURE_RESIZE_HEIGHT" => "320",
		"LIST_SMT_SLIDER" => "N",
		"LIST_SMT_SLIDER_ITEMS" => "4",
		"LIST_SMT_SLIDER_MARGIN" => "10",
		"LIST_SMT_SLIDER_NAV" => "N",
		"LIST_SMT_SLIDER_DOTS" => "N",
		"LIST_SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"LIST_SMT_SLIDER_RESPONSIVE" => "",
		"LIST_SMT_SLIDER_CUSTOM" => "",
		"DETAIL_DISPLAY_PICTURE" => "N",
		"DETAIL_DISPLAY_PREVIEW_TEXT" => "Y",
		"DETAIL_DISPLAY_DATE" => "N",
		"DETAIL_DISPLAY_DESCRIPTION" => "N",
		"DETAIL_CURRENCY_DECIMALS" => "",
		"DETAIL_CURRENCY_DECIMALS_POINT" => ".",
		"DETAIL_CURRENCY_THOUSANDS_SEP" => " ",
		"DETAIL_PICTURE_RESIZE" => "Y",
		"DETAIL_PICTURE_RESIZE_MODE" => "2",
		"DETAIL_PICTURE_RESOLUTION" => "1x1",
		"DETAIL_PICTURE_RESIZE_SOURCE" => "DETAIL_PICTURE",
		"DETAIL_PICTURE_RESIZE_WIDTH" => "640",
		"DETAIL_PICTURE_RESIZE_HEIGHT" => "480",
		"DETAIL_PICTURE_RESIZE_GALLERY" => "Y",
		"DETAIL_PICTURE_RESIZE_MODE_GALLERY" => "2",
		"DETAIL_PICTURE_RESIZE_SOURCE_GALLERY" => "DETAIL_PICTURE",
		"DETAIL_PICTURE_RESOLUTION_GALLERY" => "1x1",
		"DETAIL_PICTURE_RESIZE_WIDTH_GALLERY" => "640",
		"DETAIL_PICTURE_RESIZE_HEIGHT_GALLERY" => "480",
		"DETAIL_SMT_SLIDER" => "Y",
		"DETAIL_SMT_SLIDER_ITEMS" => "1",
		"DETAIL_SMT_SLIDER_MARGIN" => "",
		"DETAIL_SMT_SLIDER_NAV" => "Y",
		"DETAIL_SMT_SLIDER_DOTS" => "Y",
		"DETAIL_SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"DETAIL_SMT_SLIDER_RESPONSIVE" => array(
			0 => "0",
			1 => "480",
			2 => "660",
			3 => "960",
			4 => "",
		),
		"DETAIL_SMT_SLIDER_CUSTOM" => "{\"loop\": false}",
		"DETAIL_SMT_SLIDER_GALLERY" => "Y",
		"DETAIL_SMT_SLIDER_GALLERY_ITEMS" => "2",
		"DETAIL_SMT_SLIDER_GALLERY_MARGIN" => "",
		"DETAIL_SMT_SLIDER_GALLERY_NAV" => "Y",
		"DETAIL_SMT_SLIDER_GALLERY_DOTS" => "Y",
		"DETAIL_SMT_SLIDER_GALLERY_VERTICAL_ALIGN" => "N",
		"DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE" => array(
			0 => "0",
			1 => "440",
			2 => "660",
			3 => "960",
			4 => "",
		),
		"DETAIL_SMT_SLIDER_GALLERY_CUSTOM" => "{\"loop\": false}",
		"LIST_SMT_SLIDER_RESPONSIVE_ITEMS_0" => "1",
		"LIST_SMT_SLIDER_RESPONSIVE_CUSTOM_0" => "",
		"LIST_SMT_SLIDER_RESPONSIVE_ITEMS_1" => "2",
		"LIST_SMT_SLIDER_RESPONSIVE_CUSTOM_1" => "",
		"BUTTON_LIST_HREF_1" => "#smt-popup-order",
		"BUTTON_LIST_CLASS_1" => "btn btn-block smt-btn smt-popup-link-js",
		"LINK_SMT_SLIDER" => "Y",
		"LINK_SMT_SLIDER_ITEMS" => "4",
		"LINK_SMT_SLIDER_MARGIN" => "",
		"LINK_SMT_SLIDER_NAV" => "Y",
		"LINK_SMT_SLIDER_DOTS" => "N",
		"LINK_SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"LINK_SMT_SLIDER_RESPONSIVE" => array(
			0 => "0",
			1 => "480",
			2 => "660",
			3 => "960",
			4 => "",
		),
		"LINK_SMT_SLIDER_CUSTOM" => "{\"loop\": false}",
		"LINK_SMT_SLIDER_RESPONSIVE_ITEMS_0" => "1",
		"LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_0" => "",
		"LINK_SMT_SLIDER_RESPONSIVE_ITEMS_1" => "2",
		"LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_1" => "",
		"LINK_SMT_SLIDER_RESPONSIVE_ITEMS_2" => "2",
		"LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_2" => "",
		"LINK_SMT_SLIDER_RESPONSIVE_ITEMS_3" => "4",
		"LINK_SMT_SLIDER_RESPONSIVE_CUSTOM_3" => "",
		"DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_0" => "1",
		"DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_0" => "",
		"DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_1" => "1",
		"DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_1" => "",
		"DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_2" => "1",
		"DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_2" => "",
		"DETAIL_SMT_SLIDER_RESPONSIVE_ITEMS_3" => "1",
		"DETAIL_SMT_SLIDER_RESPONSIVE_CUSTOM_3" => "",
		"DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_0" => "1",
		"DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_0" => "",
		"DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_1" => "2",
		"DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_1" => "",
		"DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_2" => "2",
		"DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_2" => "",
		"DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_3" => "2",
		"DETAIL_SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_3" => "",
		"SECTIONS_LINE_ELEMENT_COUNT" => "2",
		"SECTIONS_DISPLAY_NAME" => "Y",
		"SECTIONS_DISPLAY_PICTURE" => "Y",
		"SECTIONS_DISPLAY_PREVIEW_TEXT" => "N",
		"SECTIONS_DISPLAY_DESCRIPTION" => "Y",
		"SECTIONS_DISPLAY_BUTTON" => "N",
		"SECTIONS_PICTURE_RESIZE" => "Y",
		"SECTIONS_PICTURE_RESIZE_MODE" => "2",
		"SECTIONS_PICTURE_RESIZE_SOURCE" => "PICTURE",
		"SECTIONS_PICTURE_RESIZE_WIDTH" => "640",
		"SECTIONS_PICTURE_RESIZE_HEIGHT" => "480",
		"SECTIONS_DISPLAY_IMAGE_NAME" => "N",
		"SECTIONS_DISPLAY_IMAGE_PREVIEW_TEXT" => "N",
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"SHOW_TOP_ELEMENTS_ALL" => "Y",
		"SHOW_SECTIONS_SECTIONS" => "N",
		"SHOW_SECTIONS_SECTION" => "N",
		"SIDEBAR_RIGHT" => "N",
		"SIDEBAR_SECTIONS_SHOW" => "Y",
		"TOP_INCLUDE_PATH" => "",
		"BOTTOM_INCLUDE_PATH" => "",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "",
			"smart_filter" => "filter/#SECTION_CODE#/#SMART_FILTER_PATH#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>