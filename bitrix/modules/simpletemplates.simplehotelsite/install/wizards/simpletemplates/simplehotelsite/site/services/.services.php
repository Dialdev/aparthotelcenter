<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
    "main" => Array(
        "NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
        "STAGES" => Array(
            "files.php",
//            "search.php",
            "template.php",
            "theme.php",
            "events.php",
            "menu.php",
            "settings.php",
        ),
    ),
    "iblock" => Array(
        "NAME" => GetMessage("SERVICE_IBLOCK_DEMO_DATA"),
        "STAGES" => Array(
            "types.php",
            "simplehotelsite_smt_slider.php",
"simplehotelsite_smt_benefit.php",
"simplehotelsite_smt_project.php",
"simplehotelsite_smt_action.php",
"simplehotelsite_smt_news.php",
"simplehotelsite_smt_social.php",
"simplehotelsite_smt_form.php",
"simplehotelsite_smt_photogallery.php",
"simplehotelsite_smt_document.php",
"simplehotelsite_smt_review.php",
"simplehotelsite_smt_price.php",
"simplehotelsite_smt_service.php",
"simplehotelsite_smt_article.php",
"simplehotelsite_smt_history.php",
"simplehotelsite_smt_vacancy.php",
"simplehotelsite_smt_contact.php",
"simplehotelsite_smt_faq.php",
"simplehotelsite_smt_worker.php",
"simplehotelsite_smt_service_main.php",
"simplehotelsite_smt_advantage.php",
"simplehotelsite_smt_catalog.php",
"simplehotelsite_smt_client.php",
            "simplehotelsite_update_iblock_links.php",
        ),
    ),
);
?>