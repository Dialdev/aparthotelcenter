<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if(!empty($arResult["ITEMS"])):?>
<div class="grid">
    <div class="grid-sizer"></div>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <?
        $linkHref = $arItem["DETAIL_PAGE_URL"];
        $imageLinkClass = array("smt-image", "smt-image-inline-block", "smt-image_hover");
        if($arParams["SMT_LINK_SHOW_MODE"] == "DETAIL_PICTURE") {
            $linkHref = $arItem["DETAIL_PICTURE"]["SRC"];
            $imageLinkClass[] = "smt-photo-popup-js";
        } elseif($arParams["SMT_LINK_SHOW_MODE"] == "PROPERTY_LINK") {
            $linkHref = $arItem["PROPERTIES"]["LINK"]["VALUE"];
        } elseif($arParams["SMT_LINK_SHOW_MODE"] == "LINK") {
            $linkHref = $arItem["DETAIL_PAGE_URL"];
        } elseif($arParams["SMT_LINK_SHOW_MODE"] == "NONE" || !$arParams["SMT_LINK_SHOW_MODE"]) {
            $linkHref = '';
        }
        $width = false;
        if ($arItem["PROPERTIES"]["WIDTH"]["VALUE"]) {
            $width = (int) $arItem["PROPERTIES"]["WIDTH"]["VALUE"];
        }
        $height = false;
        if ($arItem["PROPERTIES"]["HEIGHT"]["VALUE"]) {
            $height = (int) $arItem["PROPERTIES"]["HEIGHT"]["VALUE"];
        }
        ?>
    <div class="grid-item <?if($width):?>grid-item-width-x<?=$width?><?endif?> <?if($height):?>grid-item-height-x<?=$height?><?endif?>">
        <?if($arItem['DISPLAY_PROPERTIES']['VIDEO']['DISPLAY_VALUE']):?>
            <div class="grid-item-element">
                <div class="embed-responsive embed-responsive-1by1">
                    <?=$arItem['DISPLAY_PROPERTIES']['VIDEO']['DISPLAY_VALUE']?>
                </div>
            </div>
        <?else:?>
            <a class="grid-item-element" href="<?=$linkHref?>" style="<?if($arParams["DISPLAY_PICTURE"] == "Y" && $arItem["PREVIEW_PICTURE"]["SRC"]):?>background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)<?endif?>">
                <div class="grid-item-element__content" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="grid-item-element__hover">
                        <?if($arParams["DISPLAY_NAME"] == "Y"):?><?=$arItem["NAME"]?><?endif?>
                        <?if($arParams["DISPLAY_PREVIEW_TEXT"] == "Y"):?><?if($arItem["PREVIEW_TEXT_TYPE"] == 'text'):?><?=$arItem["PREVIEW_TEXT"]?><?else:?><?=$arItem["PREVIEW_TEXT"]?><?endif?><?endif;?>
                    </div>
                </div>
            </a>
        <?endif?>
    </div>
    <?endforeach;?>
</div>
<?endif;?>