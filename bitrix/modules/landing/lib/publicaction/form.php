<?php
namespace Bitrix\Landing\PublicAction;

use Bitrix\Crm\WebForm\EntityFieldProvider;
use Bitrix\Landing\PublicActionResult;
use Bitrix\Main\Loader;
use Bitrix\Main\UserConsent\Agreement;
use \Bitrix\Crm\Category\DealCategory;

class Form
{
	public static function getAgreements()
	{
		$result = [];

		$agreementsIds = array_keys(
			Agreement::getActiveList()
		);

		foreach ($agreementsIds as $agreementId)
		{
			$agreement = new Agreement($agreementId);
			$agreementData = $agreement->getData();

			$result[] = [
				'id' => (int)$agreementData['ID'],
				'name' => (string)$agreementData['NAME'],
				'labelText' => (string)$agreementData['LABEL_TEXT'],
			];
		}

		$publicActionResult = new PublicActionResult();
		$publicActionResult->setResult($result);

		return $publicActionResult;
	}

	public static function getCrmFields()
	{
		if (
			Loader::includeModule('crm')
			&& static::checkFormPermission()
		)
		{
			$fields = EntityFieldProvider::getFieldsTree();
		}
		else
		{
			$fields = [];
		}

		$publicActionResult = new PublicActionResult();
		$publicActionResult->setResult($fields);

		return $publicActionResult;
	}

	public static function getCrmCompanies()
	{
		$companies = [];

		if (
			Loader::includeModule('crm')
			&& static::checkFormPermission()
		)
		{
			$res = \CCrmCompany::GetListEx(
				[],
				[
					'=IS_MY_COMPANY' => 'Y',
					'CHECK_PERMISSIONS' => 'N',
				],
				false,
				false,
				[
					'ID',
					'TITLE',
				]
			);
			if ($res)
			{
				while ($company = $res->fetch())
				{
					$companies[] = $company;
				}
			}
		}

		$publicActionResult = new PublicActionResult();
		$publicActionResult->setResult($companies);

		return $publicActionResult;
	}

	public static function getCrmCategories()
	{
		$categories = [];

		if (
			Loader::includeModule('crm')
			&& static::checkFormPermission()
		)
		{
			$userPermissions = \CCrmPerms::GetCurrentUserPermissions();
			$map = array_fill_keys(\CCrmDeal::GetPermittedToReadCategoryIDs($userPermissions), true);
			$allCategories = DealCategory::getAll(true);

			foreach ($allCategories as $key => $category)
			{
				$ID = (int)$category['ID'];
				if(!isset($map[$ID]))
				{
					continue;
				}

				$stages = \CCrmViewHelper::getDealStageInfos($category['ID']);
				\CCrmViewHelper::prepareDealStageExtraParams($stages, $category['ID']);

				$category['STAGES'] = array_values($stages);
				$categories[] = $category;
			}
		}

		$publicActionResult = new PublicActionResult();
		$publicActionResult->setResult($categories);

		return $publicActionResult;
	}

	public static function checkFormPermission(): bool
	{
		global $USER;
		$CrmPerms = new \CCrmPerms($USER->GetID());

		if($CrmPerms->HavePerm('WEBFORM', BX_CRM_PERM_NONE))
		{
			return false;
		}

		return true;
	}
}