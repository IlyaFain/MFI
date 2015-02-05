<?
	define('PAGE_TITLE', 'Партнеры');
	define('PAGE_NAME', 'partners');
	define('IS_INNER_PAGE', true);
?>

<? require_once('templates/header.php'); ?>



<? require_once('templates/sidebar_inner_top.php'); ?>

				<!-- <li class="_secondary"><a title="____" href="#"><span>____</span></a></li> -->

<? require_once('templates/sidebar_inner_bottom.php'); ?>




	<div class="col-xs-12 b-content">

		<div class="b-intro _inner">
			<img class="b-intro__logo" src="img/logo/mfi.png" alt="МФИ-Софт">
			<div class="b-intro__text">
				<h1>Партнеры</h1>
			</div>
		</div>


<!-- svg должен быть включен именно напрямую в страницу -->
<? require('img/map.svg'); ?>


<div class="b-partners__selectbox _mb-l">
	<select id="select_region" name="select_region">
		<option value="0">Выберите регион</option>
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
			<input class="_mb-xs" type="text" name="partnership_company" placeholder="Компания" required>
			<input class="_mb-xs" type="text" name="partnership_fio" placeholder="ФИО" required>
			<input class="_mb-xs" type="text" name="partnership_phone" placeholder="Телефон" required>
			<input class="_mb-xs" type="text" name="partnership_email" placeholder="E-mail" required>
		</div>
		<div class="col-xs-7">
			<h3 class="_mb-xs">Интересующий продукт</h3>
			<div class="row _mb-s">
				<div class="col-xs-4"><label class="b-partnership__checkbox"><input name="partnership_sorm" type="checkbox"><i></i><span>СОРМ</span></label></div>
				<div class="col-xs-4"><label class="b-partnership__checkbox"><input name="partnership_perimetr" type="checkbox"><i></i><span>Периметр</span></label></div>
				<div class="col-xs-4"><label class="b-partnership__checkbox"><input name="partnership_guardabd" type="checkbox"><i></i><span>Гарда-БД</span></label></div>
				<div class="col-xs-4"><label class="b-partnership__checkbox"><input name="partnership_antifraud" type="checkbox"><i></i><span>Антифрод</span></label></div>
				<div class="col-xs-4"><label class="b-partnership__checkbox"><input name="partnership_perimetrf" type="checkbox"><i></i><span>Периметр-Ф</span></label></div>
				<div class="col-xs-4"><label class="b-partnership__checkbox"><input name="partnership_guardap" type="checkbox"><i></i><span>Гарда-предприятие</span></label></div>
			</div>
			<div class="row">
				<div class="col-xs-8 b-modal__file">
					<input type="file" name="partnership_file">
					<div class="row">
						<div class="col-xs-6 _fake">Карточка компании</div>
						<div class="col-xs-6"><a class="b-modal__action btn">Выберите файл</a></div>
					</div>
				</div>
				<div class="col-xs-4 b-modal__file-hint">Нам интересна информация о компании и ее специализации в формате doc или pdf.</div>
			</div>
		</div>
		<div class="col-xs-12">
			<textarea name="" id="" placeholder="Напишите нам ещё что-нибудь"></textarea>
			<button type="submit" class="b-modal__action btn">Отправить резюме</button>
		</div>
	</form>
</div>



<? require_once('templates/footer.php'); ?>