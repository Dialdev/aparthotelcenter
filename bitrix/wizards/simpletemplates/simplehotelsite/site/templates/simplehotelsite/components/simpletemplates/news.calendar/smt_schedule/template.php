<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="smt-event-calendar-container">
    <div class="row">
        <div class="col-sm-4 col-md-4">
            <? if ($arParams["SHOW_CURRENT_DATE"]): ?>
                <div class="smt-header h2"><?= $arResult["TITLE"] ?></div>
            <? endif ?>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="smt-event-calendar-year-select-container">
                <div class="btn-group">
                    <? if ($arParams["SHOW_YEAR"]): ?>
                        <? if ($arResult["PREV_YEAR_URL"]): ?>
                            <a href="<?= $arResult["PREV_YEAR_URL"] ?>" class="btn btn-primary btn-sm"
                               title="<?= $arResult["PREV_YEAR_URL_TITLE"] ?>"><?= GetMessage("IBL_NEWS_CAL_PR_Y") ?></a>
                        <? endif ?>
                        <? if ($arResult["NEXT_YEAR_URL"]): ?>
                            <a href="<?= $arResult["NEXT_YEAR_URL"] ?>" class="btn btn-primary btn-sm"
                               title="<?= $arResult["NEXT_YEAR_URL_TITLE"] ?>"><?= GetMessage("IBL_NEWS_CAL_N_Y") ?></a>
                        <? endif ?>
                    <? endif ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="smt-event-calendar-month-select-container">
                <div class="btn-group">
                    <? if ($arResult["PREV_MONTH_URL"]): ?>
                        <a href="<?= $arResult["PREV_MONTH_URL"] ?>" class="btn btn-primary"
                           title="<?= $arResult["PREV_MONTH_URL_TITLE"] ?>"><span class="fa fa-angle-left"></span></a>
                    <? endif ?>
                    <? if ($arResult["SHOW_MONTH_LIST"]): ?>&nbsp;&nbsp;
                        <div class="btn-group">
                            <select onChange="b_result()" name="MONTH_SELECT" id="month_sel" class="form-control smt-event-calendar-month-select">
                                <? foreach ($arResult["SHOW_MONTH_LIST"] as $month => $arOption): ?>
                                    <option value="<?= $arOption["VALUE"] ?>" <? if ($arResult["currentMonth"] == $month) echo "selected"; ?>><?= $arOption["DISPLAY"] ?></option>
                                <? endforeach ?>
                            </select>&nbsp;&nbsp;
                            <script type="text/javascript">
                                function b_result() {
                                    var idx = document.getElementById("month_sel").selectedIndex;
                                    <?if($arParams["AJAX_ID"]):?>
                                    BX.ajax.insertToNode(document.getElementById("month_sel").options[idx].value, 'comp_<?echo CUtil::JSEscape($arParams['AJAX_ID'])?>', <?echo $arParams["AJAX_OPTION_SHADOW"] == "Y" ? "true" : "false"?>);
                                    <?else:?>
                                    window.document.location.href = document.getElementById("month_sel").options[idx].value;
                                    <?endif?>
                                }
                            </script>
                        </div>
                    <? endif ?>
                    <? if ($arResult["NEXT_MONTH_URL"]): ?>
                        <a href="<?= $arResult["NEXT_MONTH_URL"] ?>" class="btn btn-primary"
                           title="<?= $arResult["NEXT_MONTH_URL_TITLE"] ?>"><span class="fa fa-angle-right"></span></a>
                    <? endif ?>
                </div>
            </div>
        </div>
    </div>

    <div class="smt-event-calendar">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <? foreach ($arResult["WEEK_DAYS"] as $WDay): ?>
                        <th class="smt-background-primary"><?= $WDay["FULL"] ?></th>
                    <? endforeach ?>
                </tr>
                </thead>
                <? foreach ($arResult["MONTH"] as $arWeek): ?>
                    <tr>
                        <? foreach ($arWeek as $arDay): ?>
                            <td class="<?= $arDay["td_class"] ?>" width="14%">
                                <div class="smt-event-calendar-item">
                                    <div class="smt-event-calendar-item__date <?= $arDay["day_class"] ?> "><?= $arDay["day"] ?></div>
                                    <? foreach ($arDay["events"] as $arEvent): ?>
                                        <?
                                        $trainingProp = $arEvent["item"]["DISPLAY_PROPERTIES"]["TRAINING"];
                                        $trainingElement = array_pop($trainingProp["LINK_ELEMENT_VALUE"]);

                                        if ($arEvent["item"]["PROPERTIES"]["THEME"]["VALUE_XML_ID"]) {
                                            $theme = $arEvent["item"]["PROPERTIES"]["THEME"]["VALUE_XML_ID"];
                                        }

                                        if ($arEvent["item"]["PROPERTIES"]["START_TIME"]["VALUE"]) {
                                            $startHour = FormatDate('H:i',
                                                MakeTimeStamp($arEvent["item"]["PROPERTIES"]["START_TIME"]["VALUE"])
                                            );
                                        } else {
                                            $startHour = '';
                                        }

                                        if ($arEvent["item"]["PROPERTIES"]["FINISH_TIME"]["VALUE"]) {
                                            $finishHour = FormatDate('H:i',
                                                MakeTimeStamp($arEvent["item"]["PROPERTIES"]["FINISH_TIME"]["VALUE"])
                                            );
                                        } else {
                                            $finishHour = '';
                                        }

                                        $time = $arEvent["time"];
                                        if ($startHour && $finishHour) {
                                            $time = $startHour . ' - ' . $finishHour;
                                        } elseif($startHour) {
                                            $time = $startHour;
                                        }

                                        if ($arEvent["item"]["PROPERTIES"]["ALL_DAY"]["VALUE"] && $arEvent["item"]["PROPERTIES"]["ALL_DAY"]["VALUE"] == "Y") {
                                            $time = '';
                                        }

                                        ?>
                                        <? if ($trainingElement): ?>
                                            <div class="smt-event-calendar-event-item">
                                                <?if($time):?>
                                                <span class="smt-event-calendar-event-item__time <?if($theme):?>smt-background-<?=$theme?><?endif?>"><?
                                                    echo $time;
                                                ?></span>
                                                <?endif?>&nbsp;
                                                <span class="smt-event-calendar-event-item__link"><?= $trainingProp["DISPLAY_VALUE"] ?></span>
                                            </div>
                                        <? endif ?>
                                    <? endforeach ?>
                                </div>
                            </td>
                        <? endforeach ?>
                    </tr>
                <? endforeach ?>
            </table>
        </div>
    </div>
</div>
