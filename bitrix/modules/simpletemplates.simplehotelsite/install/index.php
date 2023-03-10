<?
global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-strlen("/install/index.php"));
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));

class simpletemplates_simplehotelsite extends CModule
{
    var $MODULE_ID = "simpletemplates.simplehotelsite";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = "Y";

    function simpletemplates_simplehotelsite()
    {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path."/version.php");

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

        $this->MODULE_NAME = GetMessage("SIMPLET_INSTALL_NAME");
        $this->MODULE_DESCRIPTION = GetMessage("SIMPLET_INSTALL_DESCRIPTION");
        $this->PARTNER_NAME = GetMessage("SIMPLET_PARTNER");
        $this->PARTNER_URI = GetMessage("PARTNER_URI");
    }


    function InstallDB($install_wizard = true)
    {
        global $DB, $DBType, $APPLICATION;

        RegisterModule("simpletemplates.simplehotelsite");
        RegisterModuleDependences("main", "OnBeforeProlog", "simpletemplates.simplehotelsite", "CSimpletemplatesSimplehotelsite", "ShowPanel");


        return true;
    }

    function UnInstallDB($arParams = Array())
    {
        global $DB, $DBType, $APPLICATION;

        UnRegisterModuleDependences("main", "OnBeforeProlog", "simpletemplates.simplehotelsite", "CSimpletemplatesSimplehotelsite", "ShowPanel");
        UnRegisterModule("simpletemplates.simplehotelsite");

        return true;
    }

    function InstallEvents()
    {
        return true;
    }

    function UnInstallEvents()
    {
        return true;
    }

    function InstallFiles()
    {
        CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/simpletemplates.simplehotelsite/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);

        return true;
    }

    function InstallPublic()
    {
    }

    function UnInstallFiles()
    {
        return true;
    }

    function DoInstall()
    {
        global $APPLICATION, $step;

        $this->InstallFiles();
        $this->InstallDB(false);
        $this->InstallEvents();
        $this->InstallPublic();
        return true;
    }

    function DoUninstall()
    {
        global $APPLICATION, $step;

        $this->UnInstallDB();
        $this->UnInstallFiles();
        $this->UnInstallEvents();
        return true;
    }
}
?>