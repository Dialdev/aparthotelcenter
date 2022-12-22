<div class="smt-widget smt-widget_no-margin">
    <?$APPLICATION->IncludeFile(
            SITE_DIR."smt_include/sidebar_form_order_header.php",
            Array(),
            Array("MODE"=>"html")
        );?>
    <div class="smt-form">
        <?$APPLICATION->IncludeFile(
            SITE_DIR."smt_include/form_order_sidebar.php",
            Array(),
            Array("MODE"=>"html", "SHOW_BORDER" => false)
        );?>
    </div>
</div>