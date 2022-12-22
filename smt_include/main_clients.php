<?if(COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_clients', 'Y', SITE_ID) == "Y"):?>
<div class="smt-widget smt-widget_padding-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <section class="smt-widget-response-list">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."smt_include/main_clients_header.php",
                        Array(),
                        Array("MODE"=>"html")
                    );?>
                    <div class="smt-response-list__content">
                        <?$APPLICATION->IncludeComponent(
	"simpletemplates:elements.filter", 
	".default", 
	array(
		"FILTER_NAME" => "clientsFilter",
		"IBLOCK_ID" => "22",
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
                        <?$APPLICATION->IncludeComponent("bitrix:news.list", "smt_client", array(
	"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "smt_content",
		"IBLOCK_ID" => "22",
		"NEWS_COUNT" => "12",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "clientsFilter",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "N",
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
		"COMPONENT_TEMPLATE" => "smt_client",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"MAIN_BLOCK_PROPERTY_CODE" => "",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"LINE_ELEMENT_COUNT" => "6",
		"LINE_ELEMENT_GRID" => "12 12 4 4",
		"SMT_LINK_SHOW_MODE" => "LINK",
		"DISPLAY_DESCRIPTION" => "N",
		"DISPLAY_BUTTON" => "N",
		"DISPLAY_IMAGE_NAME" => "N",
		"DISPLAY_IMAGE_PREVIEW_TEXT" => "N",
		"PICTURE_RESIZE" => "Y",
		"PICTURE_RESIZE_MODE" => "2",
		"PICTURE_RESOLUTION" => "1x1",
		"PICTURE_RESIZE_SOURCE" => "DETAIL_PICTURE",
		"PICTURE_RESIZE_WIDTH" => "250",
		"PICTURE_RESIZE_HEIGHT" => "250",
		"SMT_SLIDER" => "Y",
		"SMT_SLIDER_ITEMS" => "6",
		"SMT_SLIDER_MARGIN" => "",
		"SMT_SLIDER_NAV" => "N",
		"SMT_SLIDER_DOTS" => "Y",
		"SMT_SLIDER_VERTICAL_ALIGN" => "N",
		"SMT_SLIDER_RESPONSIVE" => array(
			0 => "0",
			1 => "480",
			2 => "660",
			3 => "960",
			4 => "",
		),
		"SMT_SLIDER_CUSTOM" => "",
		"SMT_SLIDER_RESPONSIVE_ITEMS_0" => "1",
		"SMT_SLIDER_RESPONSIVE_CUSTOM_0" => "",
		"SMT_SLIDER_RESPONSIVE_ITEMS_1" => "1",
		"SMT_SLIDER_RESPONSIVE_CUSTOM_1" => "",
		"SMT_SLIDER_RESPONSIVE_ITEMS_2" => "2",
		"SMT_SLIDER_RESPONSIVE_CUSTOM_2" => "",
		"SMT_SLIDER_RESPONSIVE_ITEMS_3" => "6",
		"SMT_SLIDER_RESPONSIVE_CUSTOM_3" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?endif?>