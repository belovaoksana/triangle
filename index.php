<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
    <section id="home-slider">
       <div class="container">
           <div class="row">
               <div class="main-slider">
                   <div class="slide-text">
                       <h1>We Are Creative Nerds</h1>
                       <p>Успешное развитие бизнеса &ndash; во многом результат квалифицированной работы руководства. 							<b>&laquo;Мебельная компания&raquo;</b> на мебельном рынке уже 18 лет. За это время Компания 							не только сохранила, но и упрочила лидирующие позиции среди ведущих игроков мебельного рынка.</p>
                       <p><b>&laquo;Мебельная компания&raquo;</b> из года в год расширяет ассортимент выпускаемой продукции, 							наращивает темпы и объемы производства, увеличивает производственные и складские 							площади, развивает отношения с партнерами со всех регионов страны и налаживает связи с зарубежными партнерами.
                       В большой степени это заслуга хорошо подготовленного руководящего состава и его грамотной политики.</p>
                       <a href="http://triangle.dev/services/index.php" class="btn btn-common">Услуги</a>
                   </div>
                    <img src="/local/templates/triangle/images/home/slider/hill.png" class="slider-hill" alt="slider image">
                   <img src="/local/templates/triangle/images/home/slider/house.png" class="slider-house" alt="slider image">
                   <img src="/local/templates/triangle/images/home/slider/sun.png" class="slider-sun" alt="slider image">
                   <img src="/local/templates/triangle/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                   <img src="/local/templates/triangle/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
               </div>
           </div>
       </div>
       <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
   </section>

   <div class="rev_list">
       <h3>Отзывы наших клиентов</h3>
       <?$APPLICATION->IncludeComponent(
   	"bitrix:news.list",
   	"rev_list",
   	Array(
   		"ACTIVE_DATE_FORMAT" => "d.m.Y",
   		"ADD_SECTIONS_CHAIN" => "Y",
   		"AJAX_MODE" => "N",
   		"AJAX_OPTION_ADDITIONAL" => "",
   		"AJAX_OPTION_HISTORY" => "N",
   		"AJAX_OPTION_JUMP" => "N",
   		"AJAX_OPTION_STYLE" => "Y",
   		"CACHE_FILTER" => "N",
   		"CACHE_GROUPS" => "Y",
   		"CACHE_TIME" => "36000000",
   		"CACHE_TYPE" => "A",
   		"CHECK_DATES" => "Y",
   		"DETAIL_URL" => "",
   		"DISPLAY_BOTTOM_PAGER" => "N",
   		"DISPLAY_DATE" => "Y",
   		"DISPLAY_NAME" => "Y",
   		"DISPLAY_PICTURE" => "Y",
   		"DISPLAY_PREVIEW_TEXT" => "Y",
   		"DISPLAY_TOP_PAGER" => "N",
   		"FIELD_CODE" => array("",""),
   		"FILTER_NAME" => "arrFilter",
   		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
   		"IBLOCK_ID" => "5",
   		"IBLOCK_TYPE" => "reviews",
   		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
   		"INCLUDE_SUBSECTIONS" => "Y",
   		"MESSAGE_404" => "",
   		"NEWS_COUNT" => "2",
   		"PAGER_BASE_LINK_ENABLE" => "N",
   		"PAGER_DESC_NUMBERING" => "N",
   		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
   		"PAGER_SHOW_ALL" => "N",
   		"PAGER_SHOW_ALWAYS" => "N",
   		"PAGER_TEMPLATE" => ".default",
   		"PAGER_TITLE" => "Отзывы",
   		"PARENT_SECTION" => "",
   		"PARENT_SECTION_CODE" => "",
   		"PREVIEW_TRUNCATE_LEN" => "",
   		"PROPERTY_CODE" => array("",""),
   		"SET_BROWSER_TITLE" => "N",
   		"SET_LAST_MODIFIED" => "N",
   		"SET_META_DESCRIPTION" => "Y",
   		"SET_META_KEYWORDS" => "Y",
   		"SET_STATUS_404" => "N",
   		"SET_TITLE" => "N",
   		"SHOW_404" => "N",
   		"SORT_BY1" => "ACTIVE_FROM",
   		"SORT_BY2" => "SORT",
   		"SORT_ORDER1" => "DESC",
   		"SORT_ORDER2" => "ASC",
   		"STRICT_SECTION_CHECK" => "N"
   	)
   );?>
   <a href="http://triangle.dev/company/reviews.php">Смотреть все отзывы</a>
</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
