<?
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	date_default_timezone_set('Europe/Moscow');

	define('SITE_TITLE', 'МФИ-Софт');

	// для сохранения html-файла
	define('SAVE_HTML', false);
	if (isset($_GET['html']) || SAVE_HTML) ob_start();

	require_once("anticache.php");

?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=PAGE_TITLE;?> | <?=SITE_TITLE;?></title>

	<link href="css/default/reset.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&subset=latin,cyrillic" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<?
		antiCache('css/default/fx-modal.css');
		antiCache('css/default/selectboxit.css');
		antiCache('css/default/lightbox.edit.css');
		antiCache('css/common.css');
	?>


</head>
<body>
<noscript><b>В вашем браузере выключен javascript!</b> Полная функциональность сайта может быть недоступна.</noscript>



<div class="row b-all">


<?
	/* Сайдбар на внутренних страницах свой */
	if (!defined('IS_INNER_PAGE')) { ?>

	<div id="sidebar" class="col-xs-2 b-sidebar <? if(defined('SIDEBAR_CLOSED')){?> _closed <?}?> ">

		<button id="menu_button" class="b-sidebar__menu-button"><i></i></button>

		<nav>
			<a title="На главную" class="b-sidebar__go-home" href="#"><img src="img/logo/mfi_sidebar.png" alt="На главную"></a>
			<ul>
				<li><a title="Решения" href="#"><i class="i-sidebar _solution"></i><span>Решения</span></a></li>
				<li><a title="Компания" href="#"><i class="i-sidebar _company"></i><span>Компания</span></a></li>
				<li><a title="Аналитика" href="#"><i class="i-sidebar _events"></i><span>Аналитика</span></a></li>
				<li><a title="Пресс-центр" href="#"><i class="i-sidebar _press"></i><span>Пресс-центр</span></a></li>
				<li><a title="Партнеры" href="#"><i class="i-sidebar _partners"></i><span>Партнеры</span></a></li>
				<li><a title="Контакты" href="#"><i class="i-sidebar _contacts"></i><span>Контакты</span></a></li>
			</ul>
		</nav>

		<div class="b-sidebar__phone">
			<div class="b-sidebar__phone-number"><span>8 (831) 220-32-22</span></div>
			<div class="b-sidebar__phone-button">
				<button id="sidebar_phone" data-modal-show="#modal_callback" title="Перезвоните мне"><i class="i-sidebar _phone"></i><span>Перезвоните мне</span></button>
			</div>
		</div>

		<a id="sidebar_goto_top" href="#" class="b-sidebar__goto-top">Наверх</a>
	</div>

<? } ?>