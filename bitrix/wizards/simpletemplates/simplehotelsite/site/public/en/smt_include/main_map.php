<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "TYPECONTROL",
			2 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:44.542728934460754;s:10:\"yandex_lon\";d:38.08504874609371;s:12:\"yandex_scale\";i:11;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:38.08504874609374;s:3:\"LAT\";d:44.54272893444002;s:4:\"TEXT\";s:10:\"Отель\";}}}",
		"MAP_HEIGHT" => "360",
		"MAP_ID" => "wrapperMapContacts",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>