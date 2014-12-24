<?
define('PAGE_TITLE', 'Главная страница');
?>

<? require_once('templates/header.php'); ?>


<div class="row b-all">



	<div id="sidebar" class="col-xs-2 b-sidebar" data-equalheight>

		<button id="menu_button" class="b-sidebar__menu-button"><i></i></button>

		<nav>
			<ul>
				<li><a href="#"><i class="i-sidebar _solution"></i><span>Решения</span></a></li>
				<li><a href="#"><i class="i-sidebar _company"></i><span>Компания</span></a></li>
				<li><a href="#"><i class="i-sidebar _events"></i><span>Мероприятия</span></a></li>
				<li><a href="#"><i class="i-sidebar _press"></i><span>Пресс-центр</span></a></li>
				<li><a href="#"><i class="i-sidebar _partners"></i><span>Партнеры</span></a></li>
				<li><a href="#"><i class="i-sidebar _contacts"></i><span>Контакты</span></a></li>
			</ul>
		</nav>

		<div class="b-sidebar__phone">
			<div class="b-sidebar__phone-number"><span>8 (831) 220-32-22</span></div>
			<div class="b-sidebar__phone-button">
				<button id="sidebar_phone"><i class="i-sidebar _phone"></i><span>Перезвоните мне</span></button>
			</div>
		</div>

		<a id="sidebar_goto_top" href="#" class="b-sidebar__goto-top">Наверх</a>
	</div>




	<div class="col-xs-10 b-content" data-equalheight>
		<div class="">
			<br>
			<div class="row b-intro _mb-s">
				<div class="col-xs-12">
					<img class="b-intro__logo" src="img/logo/mfi.png" alt="МФИ-Софт">
					<div class="b-intro__text">Российская инновационная компания, разработчик систем информационной безопасности (системы DLP, защиты от&nbsp;DDoS), систем фильтрации интернет-трафика и&nbsp;систем легального контроля (СОРМ), антифрод-систем.</div>
				</div>
			</div>
			<br>




			<div class="row b-direction _mb-xs">
				<div class="col-xs-6 col-lg-3">
					<a href="" class="b-direction__link _sec"><span>Информационная<br>безопасность</span></a>
				</div>
				<div class="col-xs-6 col-lg-3">
					<a href="" class="b-direction__link _sorm"><span>СОРМ</span></a>
				</div>
				<div class="col-xs-6 col-lg-3">
					<a href="" class="b-direction__link _traff"><span>Фильтрация<br>траффика</span></a>
				</div>
				<div class="col-xs-6 col-lg-3">
					<a href="" class="b-direction__link _fraud"><span>Антифрод</span></a>
				</div>
			</div>







			<div class="row b-articles _mb-l">
				



				<div class="col-xs-6 col-lg-4 visible-lg">
					<h2>Анонсы</h2>
					<ul class="b-news__list">
						<li>
							<time>6 ноября 2014, Москва</time>
							Выставка InfoSecurity Russia 2014
							Одно из ключевых событий года пройдет 
							с 24 по 26 сентября в Крокус Экспо, Москва
						</li>
						<li>
							<time>28.04.2014</time>
							Решение «МФИ Софт» признано «Проектом года 2013» в номинации «Информационная безопасность».
						</li>
						<li>
							<time>22.02.2014</time>
							V Всероссийская Конференция «Revenue Assurance, Fraud, 
							InfoSecurity & Risk Management»
						</li>
					</ul>
					<div><a href="#" class="_underline">Смотреть все анонсы</a></div>
				</div>



				<div class="col-xs-6 col-lg-4 col-lg-push-4">
					<h2>Мероприятия</h2>

					<div id="slider_events" class="b-video-slider__list">
						<div class="b-video-slider__item">
							<div class="b-video-slider__preview">
								<a href="#" class="b-video-slider__link">
									<img class="img-responsive" src="img/content/video.jpg" alt="Видео">
								</a>
							</div>
							<div class="b-video-slider__text">
								Президент компании рассказывает о запуске нового продукта
							</div>
						</div>
						<div class="b-video-slider__item">
							<div class="b-video-slider__preview">
								<a href="#" class="b-video-slider__link">
									<img class="img-responsive" src="img/content/video.jpg" alt="Видео">
								</a>
							</div>
							<div class="b-video-slider__text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</div>
						</div>
						<div class="b-video-slider__item">
							<div class="b-video-slider__preview">
								<a href="#" class="b-video-slider__link">
									<img class="img-responsive" src="img/content/video.jpg" alt="Видео">
								</a>
							</div>
							<div class="b-video-slider__text">
								Expedita rem enim dolorum fugit vel minima, iusto iure fuga fugiat quis doloribus amet omnis.
							</div>
						</div>
					</div>

					
				</div>




				<div class="col-xs-6 col-lg-4 col-lg-pull-4 ">
					<h2>Пресс-центр</h2>
					<ul class="b-news__list">
						<li>
							<time>6 ноября 2014, Москва</time>
							Выставка InfoSecurity Russia 2014
							Одно из ключевых событий года пройдет 
							с 24 по 26 сентября в Крокус Экспо, Москва
						</li>
						<li>
							<time>28.04.2014</time>
							Решение «МФИ Софт» признано «Проектом года 2013» в номинации «Информационная безопасность».
						</li>
						<li>
							<time>22.02.2014</time>
							V Всероссийская Конференция «Revenue Assurance, Fraud, 
							InfoSecurity & Risk Management»
						</li>
					</ul>
					<div class="_mb-m"><a class="_underline" href="#">Смотреть все новости</a></div>

					
					<div class="row b-subscribe">
						<div class="col-xs-3">Подписка на&nbsp;новости</div>
						<div class="col-xs-9">
							<form action="" method="post" class="b-subscribe__form">
								<div class="_clearfix">
									<input class="b-subscribe__email" type="email" placeholder="Ваш e-mail">
									<input class="b-subscribe__submit" type="submit" value="Подписаться">
								</div>
								<label class="b-subscribe__checkbox">
									<input type="checkbox">
									Согласен с <a class="_underline" href="#">Правилами подписки</a>
								</label>
							</form>
						</div>
					</div>
					

				</div>


			</div>






			<div class="row b-replies _mb-l">
				<div class="col-xs-12">
					<h2>Отзывы</h2>
				</div>

				<div class="col-xs-6 col-lg-4" data-equalheight>
					<div class="b-replies__square _red">О продукте «Гарда БД»</div>
					<h4 class="b-replies__author"><img src="img/logo/cps.png" alt="«CPS»"> Компания «CPS»</h4>
					<div class="b-replies__text">Существует несколько веских причин для использования «Периметра» в нашем дата-центре. Во-первых, мы считаем, что защита российских ресурсов должна производиться на базе отечественных разработок, соответствующих требованиям местных регуляторов. Во-вторых, для обеспечения клиентов сервисом наивысшего качества. Исходя из этих требований, мы провели отбор претендентов на основе как независимой экспертизы, так и собственного тестирования. Вывод – на данный момент «МФИ Софт» предоставляет лучшее решение на рынке.</div>
				</div>

				<div class="col-xs-6 col-lg-4" data-equalheight>
					<div class="b-replies__square _yellow">О продукте «Гарда БД»</div>
					<h4 class="b-replies__author"><img src="img/logo/kraftway.png" alt="Kraftway"> Kraftway</h4>
					<div class="b-replies__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed placeat necessitatibus, est. Dolores id reiciendis aut ratione, aliquam doloribus perspiciatis consequatur corporis, sed, quisquam quam sequi minus sint, non. Amet.</div>
				</div>

				<div class="col-xs-6 col-lg-4 visible-lg" data-equalheight>
					<div class="b-replies__square _blue">О продукте «СОРМ»</div>
					<h4 class="b-replies__author"><img src="img/logo/kraftway.png" alt="Kraftway"> Kraftway</h4>
					<div class="b-replies__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores veniam in suscipit odio corrupti, autem quos recusandae obcaecati necessitatibus cum labore numquam eos aperiam provident ullam voluptatum unde dolorem accusamus. Sed placeat necessitatibus, est. Dolores id reiciendis aut ratione, aliquam doloribus perspiciatis consequatur corporis, sed, quisquam quam sequi minus sint, non. Amet.</div>
				</div>
			</div>








			<div class="row b-gallery _mb-l">
				<div class="col-xs-12">
					<h2>
						Галерея
						<div id="gallery_controls" class="b-gallery__controls"></div>
					</h2>
				</div>

				<div class="col-xs-12 b-gallery__wrapper">
					<div id="slider_gallery" class="row">
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/1.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/2.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/3.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/4.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/5.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/3.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/1.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/2.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/3.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/4.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/5.png" alt="">
						</div>
						<div class="col-xs-2">
							<img class="img-responsive" src="img/content/3.png" alt="">
						</div>
					</div>
				</div>
			</div>







			<div class="row b-clients _mb-s">
				<div class="col-xs-12">
					<h2>Клиенты</h2>
				</div>

				<div class="col-xs-12 tinyscrollbar tinyscrollbar-horizontal">
					<div class="row">
						<div class="col-xs-1">
							<img src="img/logo/beeline.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/mts.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/rostelekom.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/luk.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/zebra.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/mts.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/rostelekom.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/luk.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/zebra.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/mts.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/rostelekom.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/luk.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/rostelekom.png" alt="">
						</div>
						<div class="col-xs-1">
							<img src="img/logo/luk.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<br>



			<footer class="row">
				<div class="col-xs-4">
					<div>© МФИ Софт 2007-2014</div>
					<a class="_underline" href="#">Конфиденциальность и безопасность</a>
				</div>
				<div class="col-xs-3">
					<div>
						<a href="#"><img src="img/logo/fb.png" alt=""></a>&nbsp;&nbsp;<a href="#"><img src="img/logo/vk.png" alt=""></a>
					</div>
					<a class="_underline" href="#">Контактная информация</a>
				</div>
				<div class="col-xs-3">
					<div>+7 (831) 277 87 08</div>
					<a class="_underline" href="#">Техническая поддержка</a>
				</div>
				<div class="col-xs-2">
					<div><a href="http://xdes.ru/"><img src="img/logo/xdes.png" alt=""></a></div>
					Разработка сайта
				</div>
			</footer>

		</div>

	</div>






</div>




















<? require_once('templates/footer.php'); ?>