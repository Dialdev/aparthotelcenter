<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset;

$assetInstance = Asset::getInstance();
$assetInstance->AddJs(SITE_TEMPLATE_PATH . '/components/bitrix/news.list/smt_banner_blocks/masonry.pkgd.min.js');
