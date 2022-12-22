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
<div class="smt-blog-item smt-news-item">
	<?if($arParams["DISPLAY_PICTURE"] == "Y"):?>
	<?if($arResult["DETAIL_PICTURE"]["SRC"] && $arResult["PREVIEW_PICTURE"]["SRC"]):?>
		<div class="smt-image smt-image-inline-block smt-image_hover smt-image_show-text">
			<img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" class="smt-image__image">
			<span class="smt-image__over"></span>
			<?if($arParams["DISPLAY_IMAGE_NAME"] == "Y" || $arParams["DISPLAY_IMAGE_PREVIEW_TEXT"] == "Y"):?>
				<span class="smt-image__over-text">
					<span class="smt-image-text-over smt-image-text-over_bg smt-image-text-over_center">
						<?if($arParams["DISPLAY_IMAGE_NAME"] == "Y"):?>
							<span class="smt-image-text-over__name"><?=$arResult["NAME"]?></span>
						<?endif?>
						<?if($arParams["DISPLAY_IMAGE_PREVIEW_TEXT"] == "Y"):?>
							<span class="smt-image-text-over__descr">
							<?if($arResult["PREVIEW_TEXT_TYPE"] == 'text'):?>
								<?=$arResult["PREVIEW_TEXT"]?>
							<?else:?>
								<?=$arResult["PREVIEW_TEXT"]?>
							<?endif?>
							</span>
						<?endif?>
					</span>
				</span>
			<?endif?>
		</div>
	<?endif?>
	<?endif?>
	<?if($arParams["DISPLAY_NAME"] == "Y"):?>
		<div class="h2 smt-header smt-header-underline-left"><?=$arResult["NAME"]?></div>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"] == "Y" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<div class="h5"><?echo $arResult["DISPLAY_ACTIVE_FROM"]?></div>
	<?endif?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"] == "Y"):?>
		<?if($arResult["PREVIEW_TEXT_TYPE"] == 'text'):?>
			<?if(strlen($arResult["PREVIEW_TEXT"]) > 0):?>
				<p><?=$arResult["PREVIEW_TEXT"]?></p>
			<?endif?>
		<?else:?>
			<?=$arResult["PREVIEW_TEXT"]?>
		<?endif?>
	<?endif?>
    <?if($arParams["DISPLAY_DESCRIPTION"] == "Y"):?>
        <?if($arResult["DETAIL_TEXT_TYPE"] == 'text'):?>
            <?if(strlen($arResult["DETAIL_TEXT"]) > 0):?>
                <p><?=$arResult["DETAIL_TEXT"]?></p>
            <?endif?>
        <?else:?>
            <?=$arResult["DETAIL_TEXT"]?>
        <?endif?>
    <?endif?>
	<?if(!empty($arResult['PROPERTIES']) && !empty($arParams['MAIN_BLOCK_PROPERTY_CODE'])):?>
		<table class="table">
			<?foreach ($arResult['PROPERTIES'] as $property) { ?>
				<?if (in_array($property['CODE'], $arParams['MAIN_BLOCK_PROPERTY_CODE']) || $arParams['MAIN_BLOCK_PROPERTY_CODE'][$property['CODE']]) { ?>
					<tr>
						<td><?=$property['NAME']?></td>
						<td><?=(
							is_array($property['VALUE'])
								? implode(' / ', $property['VALUE'])
								: $property['VALUE']
							)?>
							<?if($property["DESCRIPTION"]):?><span class="smt-project-item-descr"><?=$property["~DESCRIPTION"]?></span><?endif?>
							<?if($property["HINT"]):?><span class="smt-project-item-hint"><?=$property["HINT"]?></span><?endif?>
						</td>
					</tr>
				<? } ?>
			<? } ?>
			<? unset($property); ?>
		</table>
	<?endif;?>
    <?if(!empty($arResult["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"])):?>
        <?$APPLICATION->IncludeFile(
            SITE_DIR."smt_include/training_instructor_header.php",
            Array(),
            Array("MODE"=>"html")
        );?>
        <div class="smt-widget smt-widget_margin">
            <div class="row smt-auto-clear">
            <? $count = 0; ?>
            <? if(!$arParams["LINE_ELEMENT_COUNT"]) $arParams["LINE_ELEMENT_COUNT"] = 3; ?>
            <? $lineCount = $arParams["LINE_ELEMENT_COUNT"]; ?>
            <? $rowLineCount = 12/$arParams["LINE_ELEMENT_COUNT"]; ?>
            <?foreach ($arResult["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"] as $value):?>
                <div class="col-xs-12 col-sm-6 col-md-<?=$rowLineCount?> col-lg-<?=$rowLineCount?>">
                    <?
                    $imageLinkClass = array("smt-image", "smt-image-inline-block", "smt-image_hover");
                    $linkHref = $value["DETAIL_PAGE_URL"];
                    ?>
                    <a class="<?=implode(' ', $imageLinkClass)?>" href="<?=$linkHref?>">
                        <img src="<?=$value["PREVIEW_PICTURE"]["SRC"]?>" class="smt-image__image smt-img-thumbnail">
                    </a>
                    <div class="smt-blog-item__name">
                        <a href="<?=$linkHref?>" class="smt-blog-item__link"><?=$value["NAME"]?></a>
                    </div>
                </div>
            <?endforeach;?>
            </div>
        </div>
    <?endif?>
    <?if($arResult['DISPLAY_PROPERTIES']['VIDEO_GALLERY']):?>
        <?$APPLICATION->IncludeFile(
            SITE_DIR."smt_include/training_gallery2_header.php",
            Array(),
            Array("MODE"=>"html")
        );?>
        <?if($arResult['DISPLAY_PROPERTIES']['VIDEO_GALLERY']["DISPLAY_VALUE"]):?>
            <?if(is_array($arResult['DISPLAY_PROPERTIES']['VIDEO_GALLERY']["DISPLAY_VALUE"])):?>
                <div class="smt-gallery-list">
                    <div class="row smt-auto-clear">
                        <? $count = 0; ?>
                        <? if(!$arParams["LINE_ELEMENT_COUNT"]) $arParams["LINE_ELEMENT_COUNT"] = 3; ?>
                        <? $lineCount = $arParams["LINE_ELEMENT_COUNT"]; ?>
                        <? $rowLineCount = 12/$arParams["LINE_ELEMENT_COUNT"]; ?>
                        <?foreach ($arResult['DISPLAY_PROPERTIES']['VIDEO_GALLERY']["DISPLAY_VALUE"] as $value):?>
                            <div class="col-xs-12 col-sm-6 col-md-<?=$rowLineCount?> col-lg-<?=$rowLineCount?>">
                                <div class="smt-gallery-item">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <?=$value?>
                                    </div>
                                </div>
                            </div>
                            <? $count +=1; ?>
                            <?if($count%$lineCount == 0):?>
                            <?endif;?>
                        <?endforeach;?>
                        <?if($count%$lineCount != 0):?>
                            <?while(($count++)%$lineCount != 0):?>
                            <?endwhile;?>
                        <?endif;?>
                    </div>
                </div>
            <?else:?>
                <? $value = $arResult['DISPLAY_PROPERTIES']['VIDEO_GALLERY']["DISPLAY_VALUE"]; ?>
                <div class="embed-responsive embed-responsive-16by9">
                    <?=$value?>
                </div>
            <?endif?>
        <?endif?>
    <?endif;?>
    <?if($arResult['PHOTO_GALLERY']):?>
    <?$APPLICATION->IncludeFile(
        SITE_DIR."smt_include/training_gallery_header.php",
        Array(),
        Array("MODE"=>"html")
    );?>
	<?if($arParams["SMT_SLIDER"] == "Y"):?>
		<div class="smt-owl-carousel-js smt-photo-gallery-js">
			<div class="owl-carousel owl-theme owl-theme_smt owl-theme_smt-dots<?if($arParams["SMT_SLIDER_VERTICAL_ALIGN"] == "Y"):?> owl-carousel-centered<?endif?>"<?if($arResult["SMT_SLIDER_PROPERTIES_JSON"]):?> data-owl-options='<?=$arResult["SMT_SLIDER_PROPERTIES_JSON"]?>'<?endif?>>
				<?if($arResult['PHOTO_GALLERY']):?>
					<?foreach ($arResult['PHOTO_GALLERY'] as $arItemGallery):?>
						<a class="smt-image smt-image-inline-block smt-image_hover" href="<?=$arItemGallery["DETAIL_PICTURE"]["SRC"]?>">
							<img src="<?=$arItemGallery["PREVIEW_PICTURE"]["SRC"]?>" class="smt-image__image" alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>">
							<span class="smt-image__over"></span>
							<?if($arResult["PROPERTIES"]["LABEL"]["VALUE"]):?>
								<div class="smt-image-box-inline-label"><?=$arResult["PROPERTIES"]["LABEL"]["VALUE"]?></div>
							<?endif;?>
						</a>
					<?endforeach;?>
				<?endif?>
			</div>
		</div>
	<?else:?>
	<div class="smt-gallery-list">
		<div class="row smt-auto-clear">
			<? $count = 0; ?>
			<? if(!$arParams["LINE_ELEMENT_COUNT"]) $arParams["LINE_ELEMENT_COUNT"] = 3; ?>
			<? $lineCount = $arParams["LINE_ELEMENT_COUNT"]; ?>
			<? $rowLineCount = 12/$arParams["LINE_ELEMENT_COUNT"]; ?>
			<?foreach($arResult["PHOTO_GALLERY"] as $arItem):?>
				<div class="col-xs-12 col-sm-6 col-md-<?=$rowLineCount?> col-lg-<?=$rowLineCount?>">
					<div class="smt-gallery-item">
						<?
						$linkHref = $arItem["DETAIL_PAGE_URL"];
						$imageLinkClass = array("smt-image", "smt-image-inline-block", "smt-image_hover", "smt-gallery-image");
						$linkHref = $arItem["DETAIL_PICTURE"]["SRC"];
						$imageLinkClass[] = "smt-photo-popup-js";
						?>
						<?if($arParams["DISPLAY_PICTURE"] == "Y"):?>
							<a class="<?=implode(' ', $imageLinkClass)?>" href="<?=$linkHref?>">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="smt-image__image" alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>">
								<div class="smt-image__over"></div>
								<?if($arParams["DISPLAY_IMAGE_NAME"] == "Y" || $arParams["DISPLAY_IMAGE_PREVIEW_TEXT"] == "Y"):?>
                                <? $imageLabel = ($arItem["DETAIL_PICTURE"]["DESCRIPTION"])?$arItem["DETAIL_PICTURE"]["DESCRIPTION"]:$arItem["DETAIL_PICTURE"]["ALT"] ?>
                                <?if(strlen($imageLabel) > 0):?>
								<span class="smt-image__over-text">
									<span class="smt-image-text-over smt-image-text-over_bg smt-image-text-over_center">
											<span class="smt-image-text-over__name"><?=$imageLabel?></span>
									</span>
								</span>
                                <?endif?>
								<?endif?>
							</a>
						<?endif?>
						<div class="smt-gallery-item__content">
							<?if($arParams["DISPLAY_NAME"] == "Y"):?>
								<span class="smt-gallery-item__link"><?=($arItem["DETAIL_PICTURE"]["DESCRIPTION"])?$arItem["DETAIL_PICTURE"]["DESCRIPTION"]:$arItem["DETAIL_PICTURE"]["ALT"]?></span>
							<?endif?>
						</div>
					</div>
				</div>
				<? $count +=1; ?>
				<?if($count%$lineCount == 0):?>
				<?endif;?>
			<?endforeach;?>
			<?if($count%$lineCount != 0):?>
				<?while(($count++)%$lineCount != 0):?>
				<?endwhile;?>
			<?endif;?>
		</div>
	</div>
	<?endif?>
	<?endif?>
	<?if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
	?>
	<div class="text-right">
		<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
				"HANDLERS" => $arParams["SHARE_HANDLERS"],
				"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
				"PAGE_TITLE" => $arResult["~NAME"],
				"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
				"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
				"HIDE" => $arParams["SHARE_HIDE"],
			),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
		</noindex>
	</div>
	<?
	}
	?>
    <?if(!empty($arParams['BUTTON_LIST'])):?>
        <div class="smt-widget smt-widget_margin">
            <div class="row">
                <?foreach ($arParams['BUTTON_LIST'] as $code=>$value):?>
                    <?if(strlen($value) > 0):?>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <a data-object-id="<?=$arResult["ID"]?>" href="<?=isset($arParams['BUTTON_LIST_HREF_' . $code])?$arParams['BUTTON_LIST_HREF_' . $code]:""?>" class="<?=isset($arParams['BUTTON_LIST_CLASS_' . $code])?$arParams['BUTTON_LIST_CLASS_' . $code]:""?>"><?=htmlspecialcharsbx($value)?></a>
                        </div>
                    <?endif?>
                <?endforeach?>
            </div>
        </div>
    <?endif;?>
</div>