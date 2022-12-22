<?if(COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_news', 'Y', SITE_ID) == "Y"):?>
<section class="smt-widget smt-widget_padding-sm smt-widget-news-list">
    <div class="container">
	<?$APPLICATION->IncludeFile(
		SITE_DIR."smt_include/main_news_header.php",
		Array(),
		Array("MODE"=>"html")
	);?>
	<?$APPLICATION->IncludeComponent(
	"simpletemplates:elements.filter", 
	".default", 
	array(
		"FILTER_NAME" => "newsFilter",
		"IBLOCK_ID" => "#SMT_ARTICLE_IBLOCK_ID#",
		"IBLOCK_TYPE" => "smt_content",
		"COMPONENT_TEMPLATE" => ".default",
		"PROPERTY_CODE" => array(
			0 => "MAIN",
			1 => "",
		),
		"PROPERTY_VALUES" => array(
			0 => "Да",
		),
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y"
	),
	false
);?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"smt_news_widget", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "smt_content",
		"IBLOCK_ID" => "#SMT_NEWS_IBLOCK_ID#",
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "newsFilter",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "smt_news_widget",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"MAIN_BLOCK_PROPERTY_CODE" => "",
		"LINE_ELEMENT_COUNT" => "4",
		"SMT_LINK_SHOW_MODE" => "LINK",
		"DISPLAY_DESCRIPTION" => "N",
		"DISPLAY_BUTTON" => "N",
		"DISPLAY_IMAGE_NAME" => "N",
		"DISPLAY_IMAGE_PREVIEW_TEXT" => "N",
		"PICTURE_RESIZE" => "Y",
		"PICTURE_RESIZE_MODE" => "2",
		"PICTURE_RESOLUTION" => "1x1",
		"PICTURE_RESIZE_SOURCE" => "DETAIL_PICTURE",
		"PICTURE_RESIZE_WIDTH" => "320",
		"PICTURE_RESIZE_HEIGHT" => "240",
		"SMT_SLIDER" => "N",
		"SMT_SLIDER_ITEMS" => "",
		"SMT_SLIDER_MARGIN" => "",
		"SMT_SLIDER_NAV" => "N",
		"SMT_SLIDER_DOTS" => "N",
		"SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"SMT_SLIDER_RESPONSIVE" => "",
		"SMT_SLIDER_CUSTOM" => "",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);
	?>
    </div>
</section>
<?endif?>