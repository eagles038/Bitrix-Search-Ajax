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
$this->setFrameMode(true);?>
<?
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if($INPUT_ID == '')
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if($CONTAINER_ID == '')
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if($arParams["SHOW_INPUT"] !== "N"):?>
	<div class="header-actions__item">
	  <div class="header-search js-header-search">
	      <button class="header-search__btn js-header-search__open" type="button" aria-label="Воспользоваться поиском.">
	        <svg class="icon icon--search"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=SITE_TEMPLATE_PATH?>/assets/images/spriteInline.svg#search"/></svg>
	      </button>            
	      <div class="header-search__opened js-header-search__dropdown">
	          <div id="<?echo $CONTAINER_ID?>" class="header-search__inner">
	              <form action="<?echo $arResult["FORM_ACTION"]?>">
	                  <div class="header-search__header">
	                      <div class="header-search__field">
	                          <label class="header-search__label">
	                              <!-- <input class="header-search__input js-header-search__input" type="search" name="q" autocomplete="off" placeholder="Поиск"> -->

	                              <input id="<?echo $INPUT_ID?>" class="header-search__input js-header-search__input" type="text" name="q" value="" autocomplete="off" />&nbsp;
	                              <!-- <input  class="header-search__close js-header-search__close" name="s" type="submit" value="<?=GetMessage("CT_BST_SEARCH_BUTTON");?>" /> -->

	                          </label>
	                      </div>
	                      <button class="header-search__close js-header-search__close" type="button"><span class="icon-close"></span></button>
	                  </div>
	                  <div class="header-search__results js-header-search__results">
	                      <!-- <ul class="header-search__results-list">
	                          <li class="header-search__results-item"><a class="header-search__results-link" href="/chasto-zadavaemye-voprosy">Часто задаваемые вопросы</a></li>
	                          <li class="header-search__results-item"><a class="header-search__results-link" href="/nezavisimaya-otsenka-raboty-uchrezhdeniya">Независимая оценка работы учреждения</a></li>
	                          <li class="header-search__results-item"><a class="header-search__results-link" href="/antikorruptsionnaya-deyatelnost">Антикоррупционная деятельность</a></li>
	                          <li class="header-search__results-item"><a class="header-search__results-link" href="/pasport-dostupnosti">Паспорт доступности</a></li>
	                          <li class="header-search__results-item"><a class="header-search__results-link" href="/politika-konfidentsialnosti">Политика конфиденциальности</a></li>
	                          <li class="header-search__results-item"><a class="header-search__results-link" href="/svedeniya-o-dokhodakh-i-raskhodakh">Сведения о доходах и расходах</a></li>
	                      </ul> -->
	                  </div>
	              </form>
	          </div>
	      </div>
	  </div>
	</div>
<?endif?>

<script>
	BX.ready(function(){
		new JCTitleSearch({
			'AJAX_PAGE' : '<?echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
			'CONTAINER_ID': '<?echo $CONTAINER_ID?>',
			'INPUT_ID': '<?echo $INPUT_ID?>',
			'MIN_QUERY_LEN': 2
		});
	});
</script>
