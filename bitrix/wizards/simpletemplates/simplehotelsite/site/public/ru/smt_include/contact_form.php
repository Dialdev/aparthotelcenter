<?$APPLICATION->IncludeComponent(
	"simpletemplates:form.order", 
	"", 
	array(
		"AJAX_URL" => "#SITE_DIR#smt_ajax/ajax_form.php",
		"CUSTOM_FORM_SUBMIT" => "Отправить сообщение",
		"CUSTOM_TITLE_80" => " ",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "Сообщение",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Ваше имя",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"DISPLAY_ICON" => "Y",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => "",
		"FORMS_DISABLE_AGREEMENT" => "N",
		"FORM_SUFFIX" => "contactpageform",
		"GROUPS" => array(
			0 => "2",
		),
		"IBLOCK_ID" => "#SMT_FORM_IBLOCK_ID#",
		"IBLOCK_TYPE" => "smt_form",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "NAME",
			1 => "#PHONE#",
			2 => "#EMAIL#",
			3 => "#FORM_SUFFIX#",
			4 => "DETAIL_TEXT",
			5 => "#AGREEMENT#",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "NAME",
			1 => "#PHONE#",
			2 => "#AGREEMENT#",
		),
		"REDIRECT_URL" => "",
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"SHOW_FORM_BORDER" => "Y",
		"STATUS" => "ANY",
		"STATUS_NEW" => "NEW",
		"USER_MESSAGE_ADD" => "Ваше сообщение успешно отправлено",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N",
		"CUSTOM_TITLE_#AGREEMENT#" => ""
	),
	false
);?>