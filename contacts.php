<?
	define('PAGE_TITLE', 'Контакты');
	define('IS_INNER_PAGE', true);
?>

<? require_once('templates/header.php'); ?>






	<div class="col-xs-12 b-content">

		<div class="b-intro _inner">
			<img class="b-intro__logo" src="img/logo/mfi.png" alt="МФИ-Софт">
			<div class="b-intro__text">
				<h1>Контакты</h1>
			</div>
		</div>


		<ul id="office_select" class="row b-contacts__office-select _mb-xs">
			<li class="col-xs-6 _current">
				<div class="_mb-xxs"><h3><a href="#">Центральный офис</a></h3></div>
				<div>Россия, 119146, Москва, Комсомольский проспект, 19а</div>
				<div>Телефон: +7 (495) 642-70-75</div>
				<div>Факс: +7 (495) 789-66-17</div>
			</li>
			<li class="col-xs-6">
				<div class="_mb-xs"><h3><a href="#">Нижегородский офис</a></h3></div>
				<div>Россия, 603104, г. Нижний Новгород, Нартова, 6/6</div>
				<div>Телефон: +7 (831) 220-32-22; +7 (831) 220-32-10</div>
				<div>Факс: +7 (831) 220-32-21</div>
			</li>
		</ul>


		<ul id="map_select"  class="b-contacts__maps _mb-l">
			<li class="_current">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.730302629606!2d37.58545289999999!3d55.728439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54ba032edcfbf%3A0x1637f2e99de88bbe!2z0JrQvtC80YHQvtC80L7Qu9GM0YHQutC40Lkg0L_RgC4sIDE50JAsINCc0L7RgdC60LLQsCwgMTE5MTQ2!5e0!3m2!1sru!2sru!4v1421992219354" width="100%" height="510" frameborder="0" style="border:0"></iframe>
			</li>
			<li>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2214.8039389380856!2d43.9955489!3d56.281434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4151d56e66168eb1%3A0x1710136b129d4bbe!2z0YPQuy4g0J3QsNGA0YLQvtCy0LAsIDbQujYsINCd0LjQttC90LjQuSDQndC-0LLQs9C-0YDQvtC0LCDQndC40LbQtdCz0L7RgNC-0LTRgdC60LDRjyDQvtCx0LsuLCA2MDMwODE!5e0!3m2!1sru!2sru!4v1421992308937" width="100%" height="510" frameborder="0" style="border:0"></iframe>
			</li>
		</ul>


		<div class="row _mb-m">
			<div class="col-xs-6 _current">
				<h3 class="_mb-m">Отдел продаж</h3>
				<ul class="b-square-list">
					<li>Решения для СОРМ СДЭС:<br>
						Телефон: + 7 (831) 278-88-52; 272-21-38; 278-88-95<br>
						E-mail: <a class="_underline" href="mailto:sorm@mfisoft.ru">sorm@mfisoft.ru</a><br>
						Факс: + 7 (831) 220-32-21<br></li>

					<li>Решения для корпоративной информационной безопасности:<br>
						Телефон: (831) 220-32-16, 272-21-64<br>
						E-mail: <a class="_underline" href="mailto:ib.sales@mfisoft.ru">ib.sales@mfisoft.ru</a><br></li>

					<li>Решения для IP-коммуникаци:<br>
						Телефон: +7 (495) 642-70-75<br></li>
				</ul>

				<h3 class="_mb-m">Пресс-служба</h3>
				<ul class="b-square-list">
					<li>Пресс-служба
						Телефон: +7(831) 220-32-22, доб. 5392 <br>
						E-mail: <a class="_underline" href="mailto:pr@mfisoft.ru">pr@mfisoft.ru <br></a>
						<a class="_underline" href="https://www.facebook.com/mfisoft">Официальная страница МФИ Софт в Facebook</a>

					</li>
				</ul>
			</div>
			<div class="col-xs-6 _current">
				<h3 class="_mb-m">Отделы технической поддержки</h3>
				<ul class="b-square-list">
					<li>
					Продукты направления IP-коммуникации: «РТУ», «MVTS II»<br>
					Телефон: +7 (831) 277-87-08<br>
					Онлайн-система HelpDesk (требуется регистрация)<br>
					</li>
					<li>
					Продукт СОРМ СДЭС - «СОРМович»<br>
					Телефоны: +7 (831) 220-32-28; 272-21-49<br>
					</li>
					<li>
					Продукт ИС СОРМ - «Январь»<br>
					Телефон: 7 (831) 272-21-72<br>
					</li>
					<li>
					Продукт СОРМ-1 – «СОРМович-VoIP», «СОРМ для РТУ», <br>
					«СОРМ для Nortel CS2000/CS1500», «СОРМ для BroadWorks», «Тропа-Концентратор», «Тропа-Диспетчер»<br>
					Телефоны: +7 (831) 220-32-28; 272-21-49<br>
					</li>
					<li>
					Продукты информационной безопасности<br>
					«Гарда Предприятие», «Гарда БД»<br>
					Телефон:  +7 (831) 272-21-10<br>
					</li>
				</ul>
			</div>
		</div>

		


<? require_once('templates/footer.php'); ?>