<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Отель Центр г. Тула официальный сайт");
?>
<?$APPLICATION->IncludeFile(
	SITE_DIR."smt_include/main.php",
	Array(),
	Array("MODE"=>"html", "SHOW_BORDER"=>false)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>