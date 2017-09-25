<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="container">
<p>Обратитесь к нашим специалистам и получите профессиональную консультацию по вопросам создания и покупки мебели (от дизайна, разработки технического задания до доставки мебели к Вам домой).</p>
<p>Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе. Будем рады помочь вам и ответить на все ваши вопросы. </p>
<h2>Телефоны</h2>
<ul>
	<li>Телефон/факс:
		<ul>
			<li><b>(495) 212-85-06</b></li>
		</ul>
	</li>
	<li>Телефоны:
		<ul>
			<li><b>(495) 212-85-07</b></li>
			<li><b>(495) 212-85-08</b></li>
		</ul>
	</li>
</ul>

<h2>Email</h2>

<ul>
  <li><a href="mailto:info@example.ru">info@example.ru</a> &mdash; общие вопросы</li>
  <li><a href="mailto:sales@example.ru">sales@example.ru</a> &mdash; приобретение продукции</li>
  <li><a href="mailto:marketing@example.ru">marketing@example.ru</a> &mdash; маркетинг/мероприятия/PR</li>
</ul>

<h2>Офис в Ярославле</h2>
<p><?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("SCALELINE"),
		"INIT_MAP_TYPE" => "ROADMAP",
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"MAP_DATA" => "a:3:{s:10:\"google_lat\";d:57.62369289142653;s:10:\"google_lon\";d:39.889283456420905;s:12:\"google_scale\";i:14;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM", "ENABLE_DBLCLICK_ZOOM", "ENABLE_DRAGGING")
	)
);?></p>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
