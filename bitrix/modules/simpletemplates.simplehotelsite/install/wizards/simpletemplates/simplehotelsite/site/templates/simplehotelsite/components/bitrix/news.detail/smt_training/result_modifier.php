<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Web\Json;

if($arParams["PICTURE_RESIZE"] == "Y") {
    if ($arResult[$arParams["PICTURE_RESIZE_SOURCE"]]) {
        $file = CFile::ResizeImageGet($arResult[$arParams["PICTURE_RESIZE_SOURCE"]], array('width'=> (int) $arParams["PICTURE_RESIZE_WIDTH"], 'height'=> (int) $arParams["PICTURE_RESIZE_HEIGHT"]), (int) $arParams["PICTURE_RESIZE_MODE"], true);
        $arResult['PREVIEW_PICTURE']['SRC'] = $file['src'];
        $arResult['PREVIEW_PICTURE']['WIDTH'] = $file['width'];
        $arResult['PREVIEW_PICTURE']['HEIGHT'] = $file['height'];
    }
}

$galleryCode = 'PHOTO_GALLERY';
if (!empty($arResult['PROPERTIES'][$galleryCode]['VALUE']) && is_array($arResult['PROPERTIES'][$galleryCode]['VALUE']))
{
    foreach ($arResult['PROPERTIES'][$galleryCode]['VALUE'] as $file)
    {
        $file = \CFile::GetFileArray($file);
        if (is_array($file))
        {
            $arResult[$galleryCode][] = array('DETAIL_PICTURE'=> $file);
        }
    }

    if($arParams["PICTURE_RESIZE_GALLERY"] == "Y") {
        foreach ($arResult[$galleryCode] as $count=>$arItem) {
            if ($arResult[$arParams["PICTURE_RESIZE_SOURCE_GALLERY"]]) {
                $file = CFile::ResizeImageGet($arItem[$arParams["PICTURE_RESIZE_SOURCE_GALLERY"]], array('width'=> (int) $arParams["PICTURE_RESIZE_WIDTH_GALLERY"], 'height'=> (int) $arParams["PICTURE_RESIZE_HEIGHT_GALLERY"]), (int) $arParams["PICTURE_RESIZE_MODE_GALLERY"], true);
                $arResult[$galleryCode][$count]['PREVIEW_PICTURE']['SRC'] = $file['src'];
                $arResult[$galleryCode][$count]['PREVIEW_PICTURE']['WIDTH'] = $file['width'];
                $arResult[$galleryCode][$count]['PREVIEW_PICTURE']['HEIGHT'] = $file['height'];
            }
        }
    } else {
        foreach ($arResult[$galleryCode] as $count=>$arItem) {
            $arResult[$galleryCode][$count]['PREVIEW_PICTURE'] = $arResult[$galleryCode][$count]['DETAIL_PICTURE'];
        }
    }
}

$arResult["DISPLAY_PROPERTIES"]=array();
foreach($arParams["PROPERTY_CODE"] as $pid)
{
    $prop = &$arResult["PROPERTIES"][$pid];
    if(
        (is_array($prop["VALUE"]) && count($prop["VALUE"])>0)
        || (!is_array($prop["VALUE"]) && strlen($prop["VALUE"])>0)
    )
    {
        $arResult["DISPLAY_PROPERTIES"][$pid] = CIBlockFormatProperties::GetDisplayValue($arResult, $prop, "news_out");
    }
}

if ($arResult["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"]) {
    foreach($arResult["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"] as $count=>$arItem) {
        $arResult["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"][$count]["PREVIEW_PICTURE"] = \CFile::GetFileArray($arItem["PREVIEW_PICTURE"]);
        $arResult["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"][$count]["DETAIL_PICTURE"] = \CFile::GetFileArray($arItem["DETAIL_PICTURE"]);
        $file = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array('width'=> (int) 320, 'height'=> (int) 400), (int) $arParams["PICTURE_RESIZE_MODE_GALLERY"], true);
        $arResult["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"][$count]['PREVIEW_PICTURE']['SRC'] = $file['src'];
        $arResult["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"][$count]['PREVIEW_PICTURE']['WIDTH'] = $file['width'];
        $arResult["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"][$count]['PREVIEW_PICTURE']['HEIGHT'] = $file['height'];
    }
}

if($arParams["SMT_SLIDER"] == "Y") {
    $sliderParameters = array();

    if($arParams["SMT_SLIDER_VERTICAL_ALIGN"] == "Y") {
    }

    if(strlen($arParams["SMT_SLIDER_ITEMS"]) > 0) {
        $sliderParameters["items"] = $arParams["SMT_SLIDER_ITEMS"];
    }

    if(strlen($arParams["SMT_SLIDER_MARGIN"]) > 0) {
        $sliderParameters["margin"] = (int) $arParams["SMT_SLIDER_MARGIN"];
    }

    if($arParams["SMT_SLIDER_NAV"] == "Y") {
        $sliderParameters["nav"] = true;
    } else {
        $sliderParameters["nav"] = false;
    }

    if($arParams["SMT_SLIDER_DOTS"] == "Y") {
        $sliderParameters["dots"] = true;
    } else {
        $sliderParameters["dots"] = false;
    }

    $responseSliderParameters = array();
    if(!empty($arParams['SMT_SLIDER_RESPONSIVE'])) {
        foreach ($arParams['SMT_SLIDER_RESPONSIVE'] as $code=>$value) {
            if(strlen($value) > 0) {
                $responseParams = array();

                if(isset($arParams["SMT_SLIDER_RESPONSIVE_ITEMS_" . $code]) && $arParams["SMT_SLIDER_RESPONSIVE_ITEMS_" . $code]) {
                    $itemsResponseParams = array("items" => (int) $arParams["SMT_SLIDER_RESPONSIVE_ITEMS_" . $code]);
                } else {
                    $itemsResponseParams = array();
                }

                if(isset($arParams["SMT_SLIDER_RESPONSIVE_CUSTOM_" . $code]) && $arParams["SMT_SLIDER_RESPONSIVE_CUSTOM_" . $code]) {
                    $sliderParam = htmlspecialcharsback(htmlspecialcharsback($arParams["SMT_SLIDER_RESPONSIVE_CUSTOM_" . $code]));
                    try {
                        $customResponseParams = Json::decode($sliderParam);
                    } catch (Exception $e) {
                        $customResponseParams = array();
                    }
                } else {
                    $customResponseParams = array();
                }

                $responseParams = array_merge($itemsResponseParams, $customResponseParams);

                if(!empty($responseParams)) {
                    $responseSliderParameters[$value] = $responseParams;
                }
            }
        }
    }

    if($responseSliderParameters) {
        $sliderParameters["responsive"] = $responseSliderParameters;
    }

    if(strlen($arParams["SMT_SLIDER_CUSTOM"]) > 0) {
        $sliderParam = htmlspecialcharsback(htmlspecialcharsback($arParams["SMT_SLIDER_CUSTOM"]));
        try {
            $sliderCustomParameters = Json::decode($sliderParam);
        } catch (Exception $e) {
            $sliderCustomParameters = array();
        }
        if ($sliderCustomParameters) {
            $sliderParameters = array_merge($sliderParameters, $sliderCustomParameters);
        }
    }

    $arResult["SMT_SLIDER_PROPERTIES_JSON"] = Json::encode($sliderParameters);
}

if($arParams["SMT_SLIDER_GALLERY"] == "Y") {
    $sliderParameters = array();

    if($arParams["SMT_SLIDER_GALLERY_VERTICAL_ALIGN"] == "Y") {
    }

    if(strlen($arParams["SMT_SLIDER_GALLERY_ITEMS"]) > 0) {
        $sliderParameters["items"] = $arParams["SMT_SLIDER_GALLERY_ITEMS"];
    }

    if(strlen($arParams["SMT_SLIDER_GALLERY_MARGIN"]) > 0) {
        $sliderParameters["margin"] = (int) $arParams["SMT_SLIDER_GALLERY_MARGIN"];
    }

    if($arParams["SMT_SLIDER_GALLERY_NAV"] == "Y") {
        $sliderParameters["nav"] = true;
    } else {
        $sliderParameters["nav"] = false;
    }

    if($arParams["SMT_SLIDER_GALLERY_DOTS"] == "Y") {
        $sliderParameters["dots"] = true;
    } else {
        $sliderParameters["dots"] = false;
    }

    $responseSliderParameters = array();
    if(!empty($arParams['SMT_SLIDER_GALLERY_RESPONSIVE'])) {
        foreach ($arParams['SMT_SLIDER_GALLERY_RESPONSIVE'] as $code=>$value) {
            if(strlen($value) > 0) {
                $responseParams = array();

                if(isset($arParams["SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_" . $code]) && $arParams["SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_" . $code]) {
                    $itemsResponseParams = array("items" => (int) $arParams["SMT_SLIDER_GALLERY_RESPONSIVE_ITEMS_" . $code]);
                } else {
                    $itemsResponseParams = array();
                }

                if(isset($arParams["SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_" . $code]) && $arParams["SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_" . $code]) {
                    $sliderParam = htmlspecialcharsback(htmlspecialcharsback($arParams["SMT_SLIDER_GALLERY_RESPONSIVE_CUSTOM_" . $code]));
                    try {
                        $customResponseParams = Json::decode($sliderParam);
                    } catch (Exception $e) {
                        $customResponseParams = array();
                    }
                } else {
                    $customResponseParams = array();
                }

                $responseParams = array_merge($itemsResponseParams, $customResponseParams);

                if(!empty($responseParams)) {
                    $responseSliderParameters[$value] = $responseParams;
                }
            }
        }
    }

    if($responseSliderParameters) {
        $sliderParameters["responsive"] = $responseSliderParameters;
    }

    if(strlen($arParams["SMT_SLIDER_GALLERY_CUSTOM"]) > 0) {
        $sliderParam = htmlspecialcharsback(htmlspecialcharsback($arParams["SMT_SLIDER_GALLERY_CUSTOM"]));
        try {
            $sliderCustomParameters = Json::decode($sliderParam);
        } catch (Exception $e) {
            $sliderCustomParameters = array();
        }
        if ($sliderCustomParameters) {
            $sliderParameters = array_merge($sliderParameters, $sliderCustomParameters);
        }
    }

    $arResult["SMT_SLIDER_GALLERY_PROPERTIES_JSON"] = Json::encode($sliderParameters);
}