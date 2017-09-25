<?
$arUrlRewrite = array(
	array(
		"CONDITION"	=>	"#^/services/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:catalog",
		"PATH"	=>	"/services/index.php",
	),
	array(
		"CONDITION"	=>	"#^/products/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:catalog",
		"PATH"	=>	"/products/index.php",
	),
	array(
		"CONDITION"	=>	"#^/news/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/news/index.php",
	),
	array(
		"CONDITION"	=>	"#^/blog/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/blog/index.php",
	),
	array(
		"CONDITION"	=>	"#^/blog/tags/(\d+)/#",
		"RULE"	=>	"tag=$1",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/blog/index.php",

	),
);

?>
