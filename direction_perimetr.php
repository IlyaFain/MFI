<?
define('PAGE_TITLE', 'Направление - Периметр');
?>

<? require_once('templates/header.php'); ?>

<!-- раскраска направлений осуществляется классами _green, _blue, _yellow и _violet для .b-direction-page -->

<div class="col-xs-10 b-content b-direction-page _yellow" data-equalheight>


	<div class="b-intro _border-bottom">
		<img class="b-intro__logo" src="img/logo/directions/perimetr.png" alt="МФИ-Софт">
		<div class="b-intro__text">
			<h1>Периметр</h1>
			Компания МФИ Софт разрабатывает системы защиты от внутренних угроз <br> информационной безопасности
		</div>
	</div>



	<div class="b-products _mb-l">
		<h2>Наши продукты</h2>
		<? require_once("templates/direction_perimetr_intro.php") ?>
	</div>





	<div class="b-solutions _mb-l">

		<div>
			Решения «МФИ Софт» защищают от случайного или преднамеренного распространения 
			конфиденциальных коммерческих данных и сводят к минимуму финансовые и репутационные риски компании.
		</div>

	</div>



	<div class="row b-descr-app _mb-xxl">
		<div class="col-xs-6">
			<h2>Описание</h2>

			<div class="b-descr-app__text _mb-l">
				<p>МФИ Софт представляет группу решений для фильтрации интернет-трафика, 
					а также предупреждения, обнаружения и подавления DDoS-атак различного типа 
					в сети передачи данных.
				</p> 
				
				<p>В результате внедрения решений МФИ Софт компания надежно защищает корпоративную сеть от внешних угроз безопасности и снижает нагрузку 
					на серверное оборудование.
				</p>
			</div>

			<a href="#" class="btn btn-direction">Получить более подробную информацию</a>

		</div>
		<div class="col-xs-6">
			<div class="b-apply">
				<h2>Применение</h2>
				<ul>
					<li>Подавление DDoS атак</li>
					<li>Обеспечение доступа к сети под атакой</li>
					<li>Оптимизация и контроль структуры сети</li>
				</ul>
			</div>
		</div>
	</div>








	<div class="b-reports _mb-l">

		<div class="b-reports__tabs _mb-xl" role="tabpanel">
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="tab1">
					<div class="row">
						<div class="col-xs-6 text-right">
							<img src="img/content/notebook_report.jpg" alt="">
						</div>
						<div class="col-xs-5">
							<h2>Многоуровневая аналитика, наглядные отчеты</h2>
							<p>
								Программное обеспечение «Гарда БД» гарантирует 
								подробную отчетность по всем показателям работы 
								и собирает и копит статистику использования.
							</p>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab2">
					<div class="row">
						<div class="col-xs-6 text-right">
							<img src="img/content/notebook_report.jpg" alt="">
						</div>
						<div class="col-xs-5">
							<h2>Анализ</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ipsum doloremque itaque earum repudiandae laudantium odio quam inventore, deleniti nesciunt magni voluptatibus ad. Dignissimos nemo vero quasi similique, culpa magnam!
							</p>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab3">
					<div class="row">
						<div class="col-xs-6 text-right">
							<img src="img/content/notebook_report.jpg" alt="">
						</div>
						<div class="col-xs-5">
							<h2>Хранилище</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro earum, ipsam eos fugiat repudiandae ipsa enim minus reiciendis blanditiis odio quidem repellat voluptas velit cumque et dolores in ducimus ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime dolores hic obcaecati aliquid ad quia deleniti qui labore iusto tempora ratione quod nulla, ex repellat nesciunt, nostrum minima odit sed.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row _mb-l b-reports__buttons">
			<div class="col-xs-12 text-center _clearfix">
				<div class="btn-group" role="group" aria-label="...">
					<a type="button" class="btn btn-default active" data-toggle="tab" href="#tab1">Аналитика</a>
					<a type="button" class="btn btn-default" data-toggle="tab" href="#tab2">Анализ</a>
					<a type="button" class="btn btn-default" data-toggle="tab" href="#tab3">Хранилище</a>
				</div>
			</div>
		</div>


	</div>











	<div class="b-tasks">
		<h2>Подберите решение для своих задач</h2>

		<ul class="row _mb-l b-tasks__list">
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _risk"></i><span class="b-tasks__text">Выявление и&nbsp;снижение рисков</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _db"></i><span class="b-tasks__text">Контроль доступа к&nbsp;базам данных</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _comm"></i><span class="b-tasks__text">Повышение безопасности каналов комуникации</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _reg"></i><span class="b-tasks__text">Соответствие требованиям регуляторов</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _detect"></i><span class="b-tasks__text">Расследование инцедентов и&nbsp;ретроспективный анализ</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _control"></i><span class="b-tasks__text">Контроль рабочего времени и&nbsp;выявление аномального поведения</span></a></li>
		</ul>
	</div>





	<div class="_mb-l b-laws">
		<h2 id="laws_scroll_top">Список законодательства</h2>
		<p class="b-laws__subtitle">Все решения разработаны в соответствии с занодательными актами,<br>представленными ниже</p>

		<ul id="laws_list" class="row b-laws__list">
			<li data-equalheight class="col-xs-6 col-lg-4 b-laws__item">
				<a class="b-laws__link" href="#">Приказ Минкомсвязи РФ от 19 ноября 2012г. №268</a>
				<p class="b-laws__text">
					«Об утверждении Правил применения оборудования систем коммутации, включая программное обеспечение, обеспечивающего выполнение установленных действий 
					при проведении оперативно- разыскных мероприятий».
				</p>
			</li>
			<li data-equalheight class="col-xs-6 col-lg-4 b-laws__item">
				<a class="b-laws__link" href="#">Приказ Минкомсвязи РФ от 11 июля 2011г. №174</a>
				<p class="b-laws__text">
					«Об утверждении Правил применения оборудования систем коммутации, включая программное обеспечение, обеспечивающего выполнение установленных действий 
					при проведении оперативно- разыскных мероприятий» 
				</p>
			</li>




			<li data-equalheight class="col-xs-6 col-lg-4 b-laws__item     visible-lg"    id="laws_item_third">


				<!-- ДЛЯ БЭКЭНДА: не забудьте класс и id для третьего элемента -->


				<a class="b-laws__link" href="#">Приказ Госкомсвязи РФ № 70 от 20.04.1999 года</a>
				<p class="b-laws__text">
					«О технических требованиях к системе технических средств 
					для обеспечения функций оперативно-розыскных мероприятий на сетях электросвязи Российской Федерации»
				</p>
			</li>





			<li data-equalheight class="col-xs-6 col-lg-4 b-laws__item   hidden">
				<a class="b-laws__link" href="#">Приказ Минкомсвязи РФ от 19 ноября 2012г. №268</a>
				<p class="b-laws__text">
					«Об утверждении Правил применения оборудования систем коммутации, включая программное обеспечение, обеспечивающего выполнение установленных действий 
					при проведении оперативно- разыскных мероприятий».
				</p>
			</li>
			<li data-equalheight class="col-xs-6 col-lg-4 b-laws__item   hidden">
				<a class="b-laws__link" href="#">Приказ Минкомсвязи РФ от 11 июля 2011г. №174</a>
				<p class="b-laws__text">
					«Об утверждении Правил применения оборудования систем коммутации, включая программное обеспечение, обеспечивающего выполнение установленных действий 
				</p>
			</li>
			<li data-equalheight class="col-xs-6 col-lg-4 b-laws__item   hidden">
				<a class="b-laws__link" href="#">Приказ Госкомсвязи РФ № 70 от 20.04.1999 года</a>
				<p class="b-laws__text">
					для обеспечения функций оперативно-розыскных мероприятий на сетях электросвязи Российской Федерации»
				</p>
			</li>
			<li data-equalheight class="col-xs-6 col-lg-4 b-laws__item   hidden">
				<a class="b-laws__link" href="#">Приказ Минкомсвязи РФ от 19 ноября 2012г. №268</a>
				<p class="b-laws__text">
					«Об утверждении Правил применения оборудования систем коммутации, включая программное обеспечение, обеспечивающего выполнение установленных действий 
					при проведении оперативно- разыскных мероприятий».
				</p>
			</li>
			<li data-equalheight class="col-xs-6 col-lg-4 b-laws__item   hidden">
				<a class="b-laws__link" href="#">Приказ Минкомсвязи РФ от 11 июля 2011г. №174</a>
				<p class="b-laws__text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, mollitia tempore. Sapiente, quam, repudiandae. Porro neque repellat similique debitis repudiandae ex earum ad, mollitia architecto quam est totam expedita unde.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias excepturi obcaecati dolores officia. Id recusandae illo, ea alias asperiores sint quos consequatur excepturi mollitia magni itaque, odio, corrupti perferendis vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quis maiores a perspiciatis fugit porro, doloremque neque reprehenderit deserunt repudiandae maxime ipsa reiciendis eius exercitationem adipisci veniam voluptate ex rem.
				</p>
			</li>
			<li data-equalheight class="col-xs-6 col-lg-4 b-laws__item   hidden">
				<a class="b-laws__link" href="#">Приказ Госкомсвязи РФ № 70 от 20.04.1999 года</a>
				<p class="b-laws__text">
					«О технических требованиях к системе технических средств 
					для обеспечения функций оперативно-розыскных мероприятий на сетях электросвязи Российской Федерации»
				</p>
			</li>
		</ul>



		<div class="text-center"><a id="laws_more" class="b-laws__more" href="#laws_scroll_top"><span></span><i></i></a></div>

	</div>








	<div class="row _mb-l b-articles">




		<div class="col-xs-6">
			<h2>Новости и мероприятия</h2>

			<ul class="b-news__list">
				<li>
					<img class="b-news__img" src="img/content/news/1.jpg" alt="">
					<time>6 ноября 2014, Москва</time>
					Выставка InfoSecurity Russia 2014
					Одно из ключевых событий года пройдет 
					с 24 по 26 сентября в Крокус Экспо, Москва
				</li>
				<li>
					<img class="b-news__img" src="img/content/news/2.jpg" alt="">
					<time>28.04.2014</time>
					Решение «МФИ Софт» признано «Проектом года 2013» в номинации «Информационная безопасность».
				</li>
				<li>
					<img class="b-news__img" src="img/content/news/3.jpg" alt="">
					<time>22.02.2014</time>
					V Всероссийская Конференция «Revenue Assurance, Fraud, 
					InfoSecurity & Risk Management»
				</li>
			</ul>
			<div><a href="#" class="_underline">Смотреть все анонсы</a></div>

		</div>






		<div class="col-xs-6 b-video-slider _direction">

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
	</div>








	<div class="row b-clients _mb-l">
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








	<? require_once('templates/footer.php'); ?>