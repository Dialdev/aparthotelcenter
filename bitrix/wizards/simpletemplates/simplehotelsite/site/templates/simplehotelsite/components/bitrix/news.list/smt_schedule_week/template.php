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
<?if(!empty($arResult["SECTIONS"])):?>
<div class="smt-widget smt-widget_margin">
	<div class="smt-form">
		<form action="" method="get" class="smt-schedule-form-section-js">
			<div class="row">
				<div class="form-group col-md-4">
					<select name="" class="form-control">
						<option value=""><?=GetMessage("SMT_BCSL_SCHEDULE_SECTIONS_ALL")?></option>
						<?foreach($arResult["SECTIONS"] as $section):?>
						<option value="<?=$section["ID"]?>"><?=$section["NAME"]?></option>
						<?endforeach;?>
					</select>
				</div>
			</div>
		</form>
	</div>
</div>
<?endif?>
<div class="table-responsive">
	<table class="table table-bordered table-striped smt-schedule-table">
		<thead>
		<tr>
			<th width="10%"></th>
			<?foreach ($arResult["WEEK_DAYS"] as $day):?>
			<th width="10%"><?=$day["VALUE"]?></th>
			<?endforeach;?>
		</tr>
		</thead>
		<tbody>
		<?foreach ($arResult["HOURS"] as $hourCount=>$hourValue):?>
		<tr>
			<td><?=$hourValue?></td>
			<?foreach ($arResult["WEEK_DAYS"] as $day):?>
				<td>
				<?if($arResult["EVENTS"][$day["XML_ID"]][$hourCount]):?>
					<?foreach ($arResult["EVENTS"][$day["XML_ID"]][$hourCount] as $event):?>
					<?
					$this->AddEditAction($event['ID'], $event['EDIT_LINK'], CIBlock::GetArrayByID($event["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($event['ID'], $event['DELETE_LINK'], CIBlock::GetArrayByID($event["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
						<a href="#smt-popup-schedule-<?=$event["ID"]?>" data-section-id="<?=$event["IBLOCK_SECTION_ID"]?>" class="smt-schedule-item <?if($event["PROPERTIES"]["THEME"]["VALUE_XML_ID"]):?>smt-background-<?=$event["PROPERTIES"]["THEME"]["VALUE_XML_ID"]?><?endif?> smt-popup-link-js" id="<?=$this->GetEditAreaId($event['ID']);?>">
							<span class="smt-schedule-item__name">
								<?=$event["NAME"]?>
							</span>
							<?if(strlen($event["PREVIEW_TEXT"]) > 0):?>
							<span class="smt-schedule-item__descr">
								<?=$event["PREVIEW_TEXT"]?>
							</span>
							<?endif?>
							<span class="smt-schedule-item__time">
								<?=$event["DISPLAY_PROPERTIES"]["START_TIME"]["DISPLAY_VALUE"]?>-<?=$event["DISPLAY_PROPERTIES"]["FINISH_TIME"]["DISPLAY_VALUE"]?>
							</span>
							<span class="smt-schedule-item__user">
								<?if(isset($event["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"][$event["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["VALUE"]])):?>
								<?=$event["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["LINK_ELEMENT_VALUE"][$event["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["VALUE"]]["NAME"]?>
								<?endif?>
							</span>
						</a>
						<div class="smt-popup smt-popup_large mfp-hide" id="smt-popup-schedule-<?=$event["ID"]?>">
							<div class="smt-widget smt-widget_padding-sm">
								<div class="smt-widget__content">
									<div class="container-fluid">
										<div class="row">
											<?if($arParams["DISPLAY_PICTURE"] == "Y" && $event["PREVIEW_PICTURE"]["SRC"]):?>
											<div class="col-md-6">
												<img src="<?=$event["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$event["PREVIEW_PICTURE"]["ALT"]?>" class="img-responsive smt-img-thumbnail">
											</div>
											<div class="col-md-6">
											<?else:?>
											<div class="col-md-12">
											<?endif?>
												<h2 class="smt-header smt-header-underline-left"><?=$event["NAME"]?></h2>
												<?if($event["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["VALUE"]):?>
												<p>
													<?=GetMessage("SMT_BCSL_SCHEDULE_INSTRUCTOR")?>
													<?=$event["DISPLAY_PROPERTIES"]["INSTRUCTOR"]["DISPLAY_VALUE"]?>
												</p>
												<?endif?>
												<p><?=GetMessage("SMT_BCSL_SCHEDULE_START_TIME")?> <?=$event["DISPLAY_PROPERTIES"]["START_TIME"]["DISPLAY_VALUE"]?><br>
													<?=GetMessage("SMT_BCSL_SCHEDULE_FINISH_TIME")?> <?=$event["DISPLAY_PROPERTIES"]["FINISH_TIME"]["DISPLAY_VALUE"]?></p>
												<?if($event["DETAIL_TEXT_TYPE"] == 'text'):?>
													<?if(strlen($event["DETAIL_TEXT"]) > 0):?>
														<p><?=$event["DETAIL_TEXT"]?></p>
													<?endif?>
												<?else:?>
													<?=$event["DETAIL_TEXT"]?>
												<?endif?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?endforeach;?>
				<?endif;?>
				</td>
			<?endforeach;?>
		</tr>
		<?endforeach;?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	+function ($) {
		'use strict';

		$('.smt-schedule-form-section-js').change(function() {
			var sectionId = $('option:selected', this).val();
			if(!!sectionId) {
				$('.smt-schedule-item[data-section-id!='+sectionId+']').hide();
				$('.smt-schedule-item[data-section-id='+sectionId+']').show();
			} else {
				$('.smt-schedule-item').show();
			}
		});
	}(jQuery);
</script>