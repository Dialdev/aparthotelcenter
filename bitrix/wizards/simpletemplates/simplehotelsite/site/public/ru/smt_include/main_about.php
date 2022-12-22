<?if(COption::GetOptionString('simpletemplates.simplehotelsite', 'smt_main_show_about', 'Y', SITE_ID) == "Y"):?>
<section class="smt-widget smt-widget_padding smt-widget_background">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."smt_include/main_about_image.php",
                    Array(),
                    Array("MODE"=>"html")
                );?>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div class="smt-widget-about__text">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."smt_include/main_about_text.php",
                        Array(),
                        Array("MODE"=>"html")
                    );?>
                </div>
            </div>
        </div>
    </div>
</section>
<?endif?>