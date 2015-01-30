<?
	define('PAGE_TITLE', 'Партнеры');
	define('PAGE_NAME', 'partners');
	define('IS_INNER_PAGE', true);
?>

<? require_once('templates/header.php'); ?>



<? require_once('templates/sidebar_inner_top.php'); ?>

				<!-- <li class="_secondary"><a title="____" href="#"><span>____</span></a></li> -->

<? require_once('templates/sidebar_inner_bottom.php'); ?>




	<div class="col-xs-10 b-content" data-equalheight>

		<div class="b-intro _inner">
			<img class="b-intro__logo" src="img/logo/mfi.png" alt="МФИ-Софт">
			<div class="b-intro__text">
				<h1>Заголовок</h1>
			</div>
		</div>


<!-- svg должен быть включен именно напрямую в страницу -->
<? require('img/map.svg'); ?>


<div class="b-partners__selectbox _mb-l">
	<select id="select_region" name="select_region">
		<option value="0" disabled="disabled">Выберите регион</option>
		<? require('templates/select_region.php'); ?>
	</select>
</div>


<ol class="row b-partners__data" id="partners_data">
	<!-- заполняется из json -->
</ol>


<div class="b-partnership">
	<h2>Станьте нашим партнером</h2>

	<form action="" method="post" class="row">
		<div class="col-xs-5">
			<input type="text" name="" placeholder="Компания">
			<input type="text" name="" placeholder="ФИО">
			<input type="text" name="" placeholder="Телефон">
			<input type="text" name="" placeholder="E-mail">
		</div>
		<div class="col-xs-7">
			<h3>Интересующий продукт</h3>
			<div class="row">
				<div class="col-xs-4"><label><input type="checkbox"><span>СОРМ</span></label></div>
				<div class="col-xs-4"><label><input type="checkbox"><span>Периметр</span></label></div>
				<div class="col-xs-4"><label><input type="checkbox"><span>Гарда-БД</span></label></div>
				<div class="col-xs-4"><label><input type="checkbox"><span>Антифрод</span></label></div>
				<div class="col-xs-4"><label><input type="checkbox"><span>Периметр-Ф</span></label></div>
				<div class="col-xs-4"><label><input type="checkbox"><span>Гарда-предприятие</span></label></div>
			</div>
			<input type="file">
		</div>
		<div class="col-xs-12">
			<textarea name="" id="" placeholder="Напишите нам ещё что-нибудь"></textarea>
			<button type="submit" class="btn"></button>
		</div>
	</form>
</div>



<? require_once('templates/footer.php'); ?>