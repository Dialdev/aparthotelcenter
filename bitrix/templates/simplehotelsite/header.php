<?
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;

CJSCore::Init(array("jquery2", "ajax"));

$curPage = $APPLICATION->GetCurPage(true);
$assetInstance = Asset::getInstance();

Loc::loadLanguageFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru"<?if($APPLICATION->GetProperty("smt_sticky_footer")):?> class="smt-sticky-footer"<?endif?>>
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?$APPLICATION->ShowHead();?>
    <?if($USER->IsAuthorized()):?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/admin.css')?>
    <?endif?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/vendors/font-awesome/css/font-awesome.css')?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.css')?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/vendors/animate.css/animate.css')?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/vendors/owl.carousel/dist/assets/owl.carousel.css')?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.theme.css')?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/magnific-popup.css')?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/main.css')?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/bitrix.css')?>
    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/colors/template_'.SITE_ID.'.css')?>

    <?$assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/custom.css')?>

    <?$assetInstance->addString('<!--[if lt IE 9]>
    <link href="' . SITE_TEMPLATE_PATH . '/assets/css/ie8.css" type="text/css" rel="stylesheet">
    <script src="' . SITE_TEMPLATE_PATH . '/assets/js/ie8.js" data-skip-moving="true"></script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/jquery/dist/jquery.min.js" data-skip-moving="true"></script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/jquery-migrate/jquery-migrate.min.js" data-skip-moving="true"></script>
    <script type="text/javascript">
        $.noConflict();
    </script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/respond/dest/respond.matchmedia.addListener.min.js" data-skip-moving="true"></script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/respond/dest/respond.min.js" data-skip-moving="true"></script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/html5shiv/dist/html5shiv.min.js" data-skip-moving="true"></script>
    <![endif]-->');?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/bootstrap-sass/assets/javascripts/bootstrap.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/smartmenus/dist/jquery.smartmenus.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/jquery-countTo/jquery.countTo.js')?>
    <?if(!defined('BX_UTF') || BX_UTF !== true):?>
        <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/moment/min/moment.min.js')?>
        <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/moment/locale/ru.win.js')?>
    <?else:?>
        <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/moment/min/moment-with-locales.js')?>
    <?endif?>
    <?$assetInstance->addString(
        '<script>BX.message(' . CUtil::PhpToJSObject(array(
            "SMT_PHOTO_OPTIONS_TCLOSE"=>Loc::getMessage("SMT_PHOTO_OPTIONS_TCLOSE"),
            "SMT_PHOTO_OPTIONS_TLOADING"=>Loc::getMessage("SMT_PHOTO_OPTIONS_TLOADING"),
            "SMT_PHOTO_OPTIONS_GALLERY_TPREV"=>Loc::getMessage("SMT_PHOTO_OPTIONS_GALLERY_TPREV"),
            "SMT_PHOTO_OPTIONS_GALLERY_TNEXT"=>Loc::getMessage("SMT_PHOTO_OPTIONS_GALLERY_TNEXT"),
            "SMT_PHOTO_OPTIONS_GALLERY_TCOUNTER"=>Loc::getMessage("SMT_PHOTO_OPTIONS_GALLERY_TCOUNTER"),
            "SMT_PHOTO_OPTIONS_IMAGE_TERROR"=>Loc::getMessage("SMT_PHOTO_OPTIONS_IMAGE_TERROR"),
            "SMT_PHOTO_OPTIONS_AJAX_TERROR"=>Loc::getMessage("SMT_PHOTO_OPTIONS_AJAX_TERROR"),
            "SMT_READ_MORE_LINK_TEXT"=>Loc::getMessage("SMT_READ_MORE_LINK_TEXT"),
            "SMT_READ_MORE_LINK_CLOSE"=>Loc::getMessage("SMT_READ_MORE_LINK_CLOSE"),
        ), false) . ')</script>'
    );?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/jquery-countTo/jquery.countTo.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/magnific-popup/dist/jquery.magnific-popup.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/owl.carousel/dist/owl.carousel.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/HideSeek/jquery.hideseek.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/matchHeight/jquery.matchHeight.min.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.debounce-throttle.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.smt-menu-main.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/assets/js/init.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/assets/js/bitrix.js')?>
    <?$assetInstance->addJs(SITE_TEMPLATE_PATH . '/assets/js/custom.js')?>
    <link rel="shortcut icon" href="<?=SITE_DIR?>favicon.ico" type="image/x-icon">
    <?$assetInstance->addString('<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic" rel="stylesheet">');?>
<!-- start TL head script -->
<script type='text/javascript'>
    (function(w) {
        var q = [
            ['setContext', 'TL-INT-appartcener-dev-dialtest', 'ru']
        ];
        var t = w.travelline = (w.travelline || {}),
            ti = t.integration = (t.integration || {});
        ti.__cq = ti.__cq? ti.__cq.concat(q) : q;
        if (!ti.__loader) {
            ti.__loader = true;
            var d = w.document,
                p = d.location.protocol,
                s = d.createElement('script');
s.type = 'text/javascript';
            s.async = true;
            s.src = (p == 'https:' ? p : 'http:') + '//ibe.tlintegration.com/integration/loader.js';
            (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s);
        }
    })(window);
</script>
<!-- end TL head script -->
</head>
<body<?if($USER->IsAuthorized()):?> class="smt-admin-panel"<?endif?>>
<?if($USER->IsAuthorized()):?>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
<?endif?>
<div class="smt-wrapper">
    <header class="smt-head">
        <div class="smt-top-bar">
            <div class="container container_flex-md container_middle">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="smt-contact">
                            <span class="smt-contact__phone">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."smt_include/top_phone_icon.php",
                                    Array(),
                                    Array("MODE"=>"text")
                                );?>
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."smt_include/top_phone.php",
                                    Array(),
                                    Array("MODE"=>"html")
                                );?>
                            </span>
                            <span class="smt-contact__phone">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."smt_include/top_email_icon.php",
                                    Array(),
                                    Array("MODE"=>"text")
                                );?>
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."smt_include/top_email.php",
                                    Array(),
                                    Array("MODE"=>"html")
                                );?>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="smt-top-bar__label">
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR."smt_include/top_address.php",
                                Array(),
                                Array("MODE"=>"html")
                            );?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="smt-top-bar__contact smt-contact">
                            <span class="smt-contact__button hidden-xs">
                                <?$APPLICATION->IncludeFile(
                                    SITE_DIR."smt_include/top_callback.php",
                                    Array(),
                                    Array("MODE"=>"html")
                                );?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="smt-navbar<?if($APPLICATION->GetProperty("smt_navbar_fixed")):?> smt-navbar_fixed<?endif?>">
            <div class="smt-navbar__content">
                <div class="container container_flex-md container_middle">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="clearfix">
                                <div class="smt-logo">
                                    <a href="<?=SITE_DIR?>"><?$APPLICATION->IncludeFile(
                                            SITE_DIR."smt_include/logo.php",
                                            Array(),
                                            Array("MODE"=>"html")
                                        );?><div class="smt-logo-label smt-affix-hidden"><?$APPLICATION->IncludeFile(
                                                SITE_DIR."smt_include/logo_label.php",
                                                Array(),
                                                Array("MODE"=>"html")
                                            );?></div></a>
                                </div>
                                <div class="smt-toggle">
                                    <div class="smt-toggle__content">
                                        <button type="button" class="smt-toggle-button collapsed" data-toggle="collapse" data-target="#smt-navbar" aria-expanded="false" aria-controls="navbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="smt-navbar-menu-container<?if(!$APPLICATION->GetProperty("smt_show_form_top")):?> smt-navbar-menu-container_no-padding<?endif?> smt-collapse collapse" id="smt-navbar">
                                <?$APPLICATION->IncludeComponent("bitrix:menu", "smt_menu", Array(
                                        "ROOT_MENU_TYPE"	=>	"top",
                                        "MAX_LEVEL"	=>	"2",
                                        "CHILD_MENU_TYPE"	=>	"left",
                                        "USE_EXT"	=>	"Y",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => Array(),
                                        "SMT_ADD_CLASS" => ($APPLICATION->GetProperty("smt_menu_main_smart"))?"smt-menu-main_js-smart smt-menu-main_js-hidden":"",
                                    )
                                );?>
                                <?if($APPLICATION->GetProperty("smt_show_form_top")):?>
                                <div class="smt-navbar-search hidden-sm hidden-xs">
                                    <button class="btn smt-navbar-search__button" type="button" data-toggle="collapse" data-target="#smt-navbar-search-form"><span class="fa fa-search smt-navbar-search_icon-open"></span><span class="fa fa-times smt-navbar-search_icon-close hidden"></span></button>
                                </div>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:search.form",
                                    "smt_search_top",
                                    Array(
                                        "PAGE" => "#SITE_DIR#search/",
                                        "USE_SUGGEST" => "N"
                                    )
                                );?>
                                <?endif?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?if ($curPage == SITE_DIR."index.php"):?>
    <?else:?>
    <?if($APPLICATION->GetDirProperty("smt_page_background") && $APPLICATION->GetDirProperty("smt_page_background") != 'N'):?>
        <section class="smt-page-header" style="background-image: url(<?=$APPLICATION->GetDirProperty("smt_page_background")?>)">
    <?else:?>
        <section class="smt-page-header">
    <?endif?>
        <?if($APPLICATION->GetDirProperty("smt_page_overlay")):?>
            <div class="smt-page-header__overlay smt-page-header__overlay_on">
        <?else:?>
            <div class="smt-page-header__overlay">
        <?endif?>
                <div class="smt-page-header__inner">
                    <div class="container container_flex-sm container_middle">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                                <div class="smt-page-header__header">
                                    <h1 class="h2 smt-header smt-header-underline-center"><?=$APPLICATION->ShowTitle(false)?></h1>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="smt-page-header__breadcrumb">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:breadcrumb",
                                        "smt_breadcrumb",
                                        Array(
                                            "START_FROM" => "0",
                                            "PATH" => "",
                                            "SITE_ID" => "-"
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="smt-widget-content">
            <div class="container">
                <div class="row">
                    <?if(!$APPLICATION->GetProperty("smt_col_12") && !$APPLICATION->GetProperty("smt_sidebar_right") && !defined("ERROR_404")):?>
                    <div class="smt-widget-content__sidebar smt-widget-content__sidebar_left col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."smt_include/sidebar.php",
                            Array(),
                            Array("MODE"=>"html")
                        );?>
                    </div>
                    <?endif?>
                    <?if($APPLICATION->GetProperty("smt_col_12")):?>
                    <div class="smt-widget-content__main col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?else:?>
                        <?if($APPLICATION->GetProperty("smt_sidebar_right")):?>
                            <div class="smt-widget-content__main col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <?else:?>
                            <div class="smt-widget-content__main col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <?endif;?>
                    <?endif;?>
    <?endif?>