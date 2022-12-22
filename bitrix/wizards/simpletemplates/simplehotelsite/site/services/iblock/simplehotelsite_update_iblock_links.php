<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (!CModule::IncludeModule("iblock"))
    return;

$propertiesLinked = array(
    array(
        "property_code" => "PRICE",
        "from_iblock" => "simplehotelsite_smt_service",
        "to_iblock" => "simplehotelsite_smt_price",
    ),
    array(
        "property_code" => "LINK1",
        "from_iblock" => "simplehotelsite_smt_catalog",
        "to_iblock" => "simplehotelsite_smt_catalog",
    ),
);

$iblocksList = array();

foreach ($propertiesLinked as $propertyLink) {
    if(!isset($iblocksList[$propertyLink["from_iblock"]])) {
        $rsIBlock = CIBlock::GetList(array(), array("CODE" => $propertyLink["from_iblock"] . "_" . WIZARD_SITE_ID));

        if ($arIBlock = $rsIBlock->Fetch()) {
            $iblocksList[$propertyLink["from_iblock"]] = $arIBlock["ID"];
        }
    }

    if(!isset($iblocksList[$propertyLink["to_iblock"]])) {
        $rsIBlock = CIBlock::GetList(array(), array("CODE" => $propertyLink["to_iblock"] . "_" . WIZARD_SITE_ID));

        if ($arIBlock = $rsIBlock->Fetch()) {
            $iblocksList[$propertyLink["to_iblock"]] = $arIBlock["ID"];
        }
    }

    $fromIblockId = $iblocksList[$propertyLink["from_iblock"]];
    $toIblockId = $iblocksList[$propertyLink["to_iblock"]];

    if ($toIblockId && $fromIblockId) {
        $rsProperty = CIBlockProperty::GetList(array(), array("CODE" => $propertyLink["property_code"],
            "IBLOCK_ID" => $fromIblockId));

        if ($arProperty = $rsProperty->GetNext()) {
            $updateProperty = new CIBlockProperty;
            $updateProperty->Update($arProperty["ID"], array(
                "LINK_IBLOCK_ID" => $toIblockId
            ));
        }

    }
}
?>