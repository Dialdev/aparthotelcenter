<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"smt_service", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "METATITLE",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "smt_service",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j M Y",
		"DETAIL_BACK_BUTTON_JS" => "N",
		"DETAIL_DISPLAY_BACK_BUTTON" => "Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_DATE" => "N",
		"DETAIL_DISPLAY_DESCRIPTION" => "Y",
		"DETAIL_DISPLAY_IMAGE_NAME" => "Y",
		"DETAIL_DISPLAY_IMAGE_PREVIEW_TEXT" => "N",
		"DETAIL_DISPLAY_NAME" => "N",
		"DETAIL_DISPLAY_PICTURE" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_LINE_ELEMENT_COUNT" => "3",
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PICTURE_RESIZE" => "Y",
		"DETAIL_PICTURE_RESIZE_GALLERY" => "N",
		"DETAIL_PICTURE_RESIZE_HEIGHT" => "320",
		"DETAIL_PICTURE_RESIZE_HEIGHT_GALLERY" => "480",
		"DETAIL_PICTURE_RESIZE_MODE" => "2",
		"DETAIL_PICTURE_RESIZE_MODE_GALLERY" => "2",
		"DETAIL_PICTURE_RESIZE_SOURCE" => "DETAIL_PICTURE",
		"DETAIL_PICTURE_RESIZE_SOURCE_GALLERY" => "DETAIL_PICTURE",
		"DETAIL_PICTURE_RESIZE_WIDTH" => "1000",
		"DETAIL_PICTURE_RESIZE_WIDTH_GALLERY" => "640",
		"DETAIL_PICTURE_RESOLUTION" => "1x1",
		"DETAIL_PICTURE_RESOLUTION_GALLERY" => "1x1",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SMT_SLIDER" => "N",
		"DETAIL_SMT_SLIDER_CUSTOM" => "",
		"DETAIL_SMT_SLIDER_DOTS" => "N",
		"DETAIL_SMT_SLIDER_ITEMS" => "",
		"DETAIL_SMT_SLIDER_MARGIN" => "",
		"DETAIL_SMT_SLIDER_NAV" => "N",
		"DETAIL_SMT_SLIDER_RESPONSIVE" => "",
		"DETAIL_SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#SMT_SERVICE_IBLOCK_ID#",
		"IBLOCK_TYPE" => "smt_company",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LINK_LINE_ELEMENT_COUNT" => "3",
		"LINK_PAGE_ELEMENT_COUNT" => "6",
		"LINK_SMT_SLIDER" => "N",
		"LINK_SMT_SLIDER_CUSTOM" => "",
		"LINK_SMT_SLIDER_DOTS" => "N",
		"LINK_SMT_SLIDER_ITEMS" => "",
		"LINK_SMT_SLIDER_MARGIN" => "",
		"LINK_SMT_SLIDER_NAV" => "N",
		"LINK_SMT_SLIDER_RESPONSIVE" => "",
		"LINK_SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "j M Y",
		"LIST_DISPLAY_BUTTON" => "Y",
		"LIST_DISPLAY_DATE" => "Y",
		"LIST_DISPLAY_DESCRIPTION" => "Y",
		"LIST_DISPLAY_IMAGE_NAME" => "N",
		"LIST_DISPLAY_IMAGE_PREVIEW_TEXT" => "N",
		"LIST_DISPLAY_NAME" => "Y",
		"LIST_DISPLAY_PICTURE" => "Y",
		"LIST_DISPLAY_PREVIEW_TEXT" => "Y",
		"LIST_FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"LIST_LINE_ELEMENT_COUNT" => "3",
		"LIST_MAIN_BLOCK_PROPERTY_CODE" => "",
		"LIST_PICTURE_RESIZE" => "Y",
		"LIST_PICTURE_RESIZE_HEIGHT" => "240",
		"LIST_PICTURE_RESIZE_MODE" => "2",
		"LIST_PICTURE_RESIZE_SOURCE" => "DETAIL_PICTURE",
		"LIST_PICTURE_RESIZE_WIDTH" => "320",
		"LIST_PICTURE_RESOLUTION" => "1x1",
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_SMT_LINK_SHOW_MODE" => "LINK",
		"LIST_SMT_SLIDER" => "N",
		"LIST_SMT_SLIDER_CUSTOM" => "",
		"LIST_SMT_SLIDER_DOTS" => "N",
		"LIST_SMT_SLIDER_ITEMS" => "",
		"LIST_SMT_SLIDER_MARGIN" => "",
		"LIST_SMT_SLIDER_NAV" => "N",
		"LIST_SMT_SLIDER_RESPONSIVE" => "",
		"LIST_SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"MAX_VOTE" => "5",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "METADESCRIPTION",
		"META_KEYWORDS" => "METAKEYWORDS",
		"NEWS_COUNT" => "12",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PERIOD_NEW_TAGS" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SECTIONS_DISPLAY_BUTTON" => "Y",
		"SECTIONS_DISPLAY_DESCRIPTION" => "N",
		"SECTIONS_DISPLAY_IMAGE_NAME" => "N",
		"SECTIONS_DISPLAY_IMAGE_PREVIEW_TEXT" => "N",
		"SECTIONS_DISPLAY_NAME" => "Y",
		"SECTIONS_DISPLAY_PICTURE" => "Y",
		"SECTIONS_DISPLAY_PREVIEW_TEXT" => "Y",
		"SECTIONS_LINE_ELEMENT_COUNT" => "3",
		"SECTIONS_PICTURE_RESIZE" => "Y",
		"SECTIONS_PICTURE_RESIZE_HEIGHT" => "240",
		"SECTIONS_PICTURE_RESIZE_MODE" => "2",
		"SECTIONS_PICTURE_RESIZE_SOURCE" => "PICTURE",
		"SECTIONS_PICTURE_RESIZE_WIDTH" => "320",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"SECTIONS_VIEW_MODE" => "TILE",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_TOP_DEPTH" => "2",
		"SEF_FOLDER" => "#SITE_DIR#service/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SHOW_SECTIONS_SECTION" => "N",
		"SHOW_SECTIONS_SECTIONS" => "Y",
		"SHOW_TOP_ELEMENTS_ALL" => "Y",
		"SLIDER_PROPERTY" => "",
		"SMT_IBLOCK_LINK_PROPERTY_SID" => "",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"TAGS_CLOUD_WIDTH" => "100%",
		"TEMPLATE_THEME" => "blue",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"VOTE_NAMES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
			4 => "5",
			5 => "",
		),
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"SECTIONS_LINE_ELEMENT_GRID" => "12 12 12 12",
		"TOP_INCLUDE_PATH" => "#SITE_DIR#smt_include/service_top.php",
		"BOTTOM_INCLUDE_PATH" => "#SITE_DIR#smt_include/service_bottom.php",
		"LIST_LINE_ELEMENT_GRID" => "12 12 3 3",
		"FILE_404" => "",
		"STRICT_SECTION_CHECK" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>