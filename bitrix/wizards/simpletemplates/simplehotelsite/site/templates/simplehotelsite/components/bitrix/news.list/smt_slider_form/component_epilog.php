<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("iblock");
if(isset($arResult['arResult'])) {
    $arResult =& $arResult['arResult'];
    global $MESS;
    include_once(GetLangFileName(dirname(__FILE__).'/lang/', '/template.php'));
} else {
    return;
}
?>
<?if(!empty($arResult["ITEMS"])):?>
    <section class="smt-slider smt-slider_js">
        <div class="owl-carousel owl-theme_slider"<?if($arResult["SMT_SLIDER_PROPERTIES_JSON"]):?> data-owl-options='<?=$arResult["SMT_SLIDER_PROPERTIES_JSON"]?>'<?endif?>>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            if(!is_array($arItem["DISPLAY_PROPERTIES"]["STYLE"]["VALUE_XML_ID"])) {
                $arItem["DISPLAY_PROPERTIES"]["STYLE"]["VALUE_XML_ID"] = array();
            }
            ?>
            <?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
            <div class="smt-slider__item" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
                <?else:?>
                <div class="smt-slider__item" style="background-image: url(<?=$arItem["DETAIL_PICTURE"]["SRC"]?>)">
                    <?endif?>
                    <div class="container container_flex-full container_middle" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="row">
                            <?if(in_array("RIGHT", $arItem["DISPLAY_PROPERTIES"]["STYLE"]["VALUE_XML_ID"])):?>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 hidden-sm hidden-xs"></div>
                            <?endif?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="smt-slider__slide smt-slide<?if(in_array("BG", $arItem["DISPLAY_PROPERTIES"]["STYLE"]["VALUE_XML_ID"])):?> smt-slide_bg<?endif?>">
                                    <div class="smt-slide__content" data-slide-animate="<?=($arItem["DISPLAY_PROPERTIES"]["ANIMATION"]["DISPLAY_VALUE"])?$arItem["DISPLAY_PROPERTIES"]["ANIMATION"]["DISPLAY_VALUE"]:'zoomIn'?>">
                                        <?if($arParams["DISPLAY_NAME"] == "Y"):?>
                                            <div class="smt-slide__header">
                                                <div class="h3 smt-header"><?=$arItem["NAME"]?></div>
                                            </div>
                                        <?endif?>
                                        <?if($arParams["DISPLAY_PREVIEW_TEXT"] == "Y"):?>
                                            <?if($arParams["DISPLAY_NAME"] == "Y"):?>
                                                <?if($arItem["PREVIEW_TEXT_TYPE"] == 'text'):?>
                                                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                                <?else:?>
                                                    <?=$arItem["PREVIEW_TEXT"]?>
                                                <?endif?>
                                            <?else:?>
                                                <div class="smt-slide__header">
                                                    <div class="h3 smt-header"><?=$arItem["PREVIEW_TEXT"]?></div>
                                                </div>
                                            <?endif?>
                                        <?endif?>
                                        <?$APPLICATION->IncludeFile(
                                            SITE_DIR."smt_include/form_question.php",
                                            Array(),
                                            Array("MODE"=>"html", "SHOW_BORDER" => false)
                                        );?>
                                        <?if($arParams["DISPLAY_DESCRIPTION"] == "Y"):?>
                                            <div class="smt-slide__text">
                                                <?if($arItem["DETAIL_TEXT_TYPE"] == 'text'):?>
                                                    <p><?=$arItem["DETAIL_TEXT"]?></p>
                                                <?else:?>
                                                    <?=$arItem["DETAIL_TEXT"]?>
                                                <?endif?>
                                            </div>
                                        <?endif?>
                                        <?if($arParams['DISPLAY_BUTTON'] == 'Y'):?>
                                            <div class="smt-slide__button">
                                                <?php
                                                $buttonStyle = 'btn smt-btn-border smt-btn-border_white text-uppercase';
                                                if($arItem["DISPLAY_PROPERTIES"]["BUTTON_STYLE"]["DISPLAY_VALUE"]) {
                                                    $buttonStyle = $arItem["DISPLAY_PROPERTIES"]["BUTTON_STYLE"]["DISPLAY_VALUE"];
                                                }
                                                $buttonStyle1 = 'btn smt-btn text-uppercase';
                                                if($arItem["DISPLAY_PROPERTIES"]["BUTTON_STYLE1"]["DISPLAY_VALUE"]) {
                                                    $buttonStyle1 = $arItem["DISPLAY_PROPERTIES"]["BUTTON_STYLE1"]["DISPLAY_VALUE"];
                                                }
                                                ?>
                                                <?if($arItem["DISPLAY_PROPERTIES"]["BUTTON"]["DISPLAY_VALUE"]):?>
                                                    <a class="<?=$buttonStyle?>" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"><?=$arItem["DISPLAY_PROPERTIES"]["BUTTON"]["DISPLAY_VALUE"]?></a>
                                                <?endif?>
                                                <?if($arItem["DISPLAY_PROPERTIES"]["BUTTON1"]["DISPLAY_VALUE"]):?>
                                                    <a class="<?=$buttonStyle1?>" href="<?=$arItem["PROPERTIES"]["LINK1"]["VALUE"]?>"><?=$arItem["DISPLAY_PROPERTIES"]["BUTTON1"]["DISPLAY_VALUE"]?></a>
                                                <?endif?>
                                            </div>
                                        <?endif?>
                                    </div>
                                </div>
                            </div>
                            <?if(!in_array("RIGHT", $arItem["DISPLAY_PROPERTIES"]["STYLE"]["VALUE_XML_ID"])):?>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 hidden-sm hidden-xs"></div>
                            <?endif?>
                        </div>
                    </div>
                </div>
                <?endforeach;?>
            </div>
    </section>
<?endif?>
