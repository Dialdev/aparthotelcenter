<?if(COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_main_blocks', 'slider,benefits,catalog,about,services,advantages,gallery,workers,responses,clients,action,banner,news,map', SITE_ID)):?>
    <?
    $arBlocks = explode(',', COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_main_blocks', 'slider,benefits,catalog,about,services,advantages,gallery,workers,responses,clients,action,banner,news,map', SITE_ID));
    foreach($arBlocks as $block):?>
        <?if($block == 'slider' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_slider', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_slider.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'benefits' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_benefits', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_benefits.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'services' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_services', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_services.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'catalog' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_catalog', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_catalog.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'about' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_about', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_about.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'advantages' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_advantages', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_advantages.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'gallery' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_gallery', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_gallery.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'responses' && (COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_responses', 'Y', SITE_ID) == "Y")):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_responses.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'clients' && (COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_clients', 'Y', SITE_ID) == "Y")):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_clients.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'workers' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_workers', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_workers.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'action' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_action', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_action.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'banner' && COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_banner', 'Y', SITE_ID) == "Y"):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_banner.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'news' && (COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_news', 'Y', SITE_ID) == "Y")):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_news.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
        <?if($block == 'map' && (COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_map', 'Y', SITE_ID) == "Y")):?>
            <?$APPLICATION->IncludeFile(
                SITE_DIR."smt_include/main_map.php",
                Array(),
                Array("MODE"=>"html", "SHOW_BORDER"=>false)
            );?>
        <?endif?>
    <?endforeach?>
<?endif?>