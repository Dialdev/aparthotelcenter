<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акции");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"smt_action", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j M Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "smt_promo",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "j M Y",
		"LIST_FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PERIOD_NEW_TAGS" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/company/promo/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
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
		"COMPONENT_TEMPLATE" => "smt_action",
		"MAX_VOTE" => "5",
		"VOTE_NAMES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
			4 => "5",
			5 => "",
		),
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"SMT_IBLOCK_LINK_PROPERTY_SID" => "",
		"LINK_PAGE_ELEMENT_COUNT" => "6",
		"LINK_LINE_ELEMENT_COUNT" => "2",
		"LINK_SMT_SLIDER" => "N",
		"LINK_SMT_SLIDER_ITEMS" => "",
		"LINK_SMT_SLIDER_MARGIN" => "",
		"LINK_SMT_SLIDER_NAV" => "N",
		"LINK_SMT_SLIDER_DOTS" => "N",
		"LINK_SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"LINK_SMT_SLIDER_RESPONSIVE" => "",
		"LINK_SMT_SLIDER_CUSTOM" => "",
		"LIST_MAIN_BLOCK_PROPERTY_CODE" => "",
		"LIST_DISPLAY_NAME" => "Y",
		"LIST_DISPLAY_PICTURE" => "Y",
		"LIST_DISPLAY_PREVIEW_TEXT" => "Y",
		"LIST_DISPLAY_DATE" => "Y",
		"LIST_DISPLAY_DESCRIPTION" => "Y",
		"LIST_DISPLAY_BUTTON" => "N",
		"LIST_SMT_LINK_SHOW_MODE" => "LINK",
		"LIST_LINE_ELEMENT_COUNT" => "2",
		"LIST_LINE_ELEMENT_GRID" => "12 12 4 4",
		"LIST_DISPLAY_IMAGE_NAME" => "N",
		"LIST_DISPLAY_IMAGE_PREVIEW_TEXT" => "N",
		"LIST_PICTURE_RESIZE" => "Y",
		"LIST_PICTURE_RESIZE_MODE" => "2",
		"LIST_PICTURE_RESOLUTION" => "1x1",
		"LIST_PICTURE_RESIZE_SOURCE" => "DETAIL_PICTURE",
		"LIST_PICTURE_RESIZE_WIDTH" => "640",
		"LIST_PICTURE_RESIZE_HEIGHT" => "480",
		"LIST_SMT_SLIDER" => "N",
		"LIST_SMT_SLIDER_ITEMS" => "",
		"LIST_SMT_SLIDER_MARGIN" => "",
		"LIST_SMT_SLIDER_NAV" => "N",
		"LIST_SMT_SLIDER_DOTS" => "N",
		"LIST_SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"LIST_SMT_SLIDER_RESPONSIVE" => "",
		"LIST_SMT_SLIDER_CUSTOM" => "",
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_BACK_BUTTON" => "Y",
		"DETAIL_BACK_BUTTON_JS" => "N",
		"DETAIL_DISPLAY_PICTURE" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT" => "N",
		"DETAIL_DISPLAY_DATE" => "N",
		"DETAIL_DISPLAY_DESCRIPTION" => "Y",
		"DETAIL_LINE_ELEMENT_COUNT" => "3",
		"DETAIL_DISPLAY_IMAGE_NAME" => "Y",
		"DETAIL_DISPLAY_IMAGE_PREVIEW_TEXT" => "N",
		"DETAIL_PICTURE_RESIZE" => "Y",
		"DETAIL_PICTURE_RESIZE_MODE" => "2",
		"DETAIL_PICTURE_RESOLUTION" => "1x1",
		"DETAIL_PICTURE_RESIZE_SOURCE" => "DETAIL_PICTURE",
		"DETAIL_PICTURE_RESIZE_WIDTH" => "1000",
		"DETAIL_PICTURE_RESIZE_HEIGHT" => "400",
		"DETAIL_PICTURE_RESIZE_GALLERY" => "N",
		"DETAIL_PICTURE_RESIZE_MODE_GALLERY" => "2",
		"DETAIL_PICTURE_RESIZE_SOURCE_GALLERY" => "DETAIL_PICTURE",
		"DETAIL_PICTURE_RESOLUTION_GALLERY" => "1x1",
		"DETAIL_PICTURE_RESIZE_WIDTH_GALLERY" => "640",
		"DETAIL_PICTURE_RESIZE_HEIGHT_GALLERY" => "480",
		"DETAIL_SMT_SLIDER" => "N",
		"DETAIL_SMT_SLIDER_ITEMS" => "",
		"DETAIL_SMT_SLIDER_MARGIN" => "",
		"DETAIL_SMT_SLIDER_NAV" => "N",
		"DETAIL_SMT_SLIDER_DOTS" => "N",
		"DETAIL_SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"DETAIL_SMT_SLIDER_RESPONSIVE" => "",
		"DETAIL_SMT_SLIDER_CUSTOM" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>