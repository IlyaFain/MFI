<?
define('PAGE_TITLE', 'Продукты - Гарда Предприятие');
?>

<? require_once('templates/header.php'); ?>



<div class="col-xs-10 b-content b-product-page _light-blue" data-equalheight>

	<div class="_mb-m">
		<a href="#" class="_no-underline">&#8592; <span class="_underline">Информационная безопасность</span></a>
	</div>


	<div class="b-intro _mb-m">
		<img class="b-intro__logo" src="img/logo/product-page/garda-pre.png" alt="Гарда Предприятие">
		<div class="b-intro__text _short">
			<h1>Гарда Предприятие</h1>
			Система аудита сетевого доступа к базам данных
		</div>
		<div class="b-intro__text _long">
			Система обеспечения информационной безопасности и защиты от утечек конфиденциальных данных. Предназначена для крупных и средних предприятий. Мониторинг возможных каналов утечки конфиденциальной информации и выявление внутренних угроз информационной безопасности в реальном времени.
		</div>
	</div>



	<div class="b-submenu _mb-xxl">
		<nav>
			<ul>
				<li><a href="#">Описание</a></li>
				<li><a href="#">Схема подключения</a></li>
				<li><a href="#">Новости и мероприятия</a></li>
				<li><a href="#">Лицензии</a></li>
				<li><a href="#">Материалы и вебинары</a></li>
				<li><a href="#">Клиенты</a></li>
				<li><a class="_fill" href="#">Получить консультацию</a></li>
			</ul>
		</nav>
	</div>



	<div class="b-reports _mb-l _border-bottom">
		<div class="b-reports__tabs _mb-xxl" role="tabpanel">
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="tab1">
					<div class="row">
						<div class="col-xs-6 text-right">
							<img src="img/content/notebook_report.jpg" alt="">
						</div>
						<div class="col-xs-5">
							<h2>Интуитивно понятный интерфейс системы «Гарда БД» адаптирован под ежедневные задачи </h2>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab2">
					<div class="row">
						<div class="col-xs-6 text-right">
							<img src="img/content/notebook_report.jpg" alt="">
						</div>
						<div class="col-xs-5">
							<h2>Понятный интерфейс «Гарда БД» адаптирован под ежедневные задачи </h2>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab3">
					<div class="row">
						<div class="col-xs-6 text-right">
							<img src="img/content/notebook_report.jpg" alt="">
						</div>
						<div class="col-xs-5">
							<h2>Интерфейс системы «Гарда БД» адаптирован под задачи </h2>
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




	<div class="b-description _mb-l _border-bottom">
		<h2 class="text-center">Описание</h2>
		<div class="row _mb-l">
			<div class="col-lg-6 col-lg-offset-2" data-equalheight>
				<div class="_vertical-center">
					<div class="text-left">
						<p>МФИ Софт представляет группу решений для фильтрации интернет-трафика, а также предупреждения, обнаружения и подавления DDoS-атак различного типа в сети передачи данных.</p>
						<p>В результате внедрения решений МФИ Софт компания надежно защищает корпоративную сеть от внешних угроз безопасности и снижает нагрузку на серверное оборудование.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 text-center" data-equalheight>
				<img src="img/content/product-page_description.jpg" alt="">
			</div>
		</div>
	</div>







	<div class="b-product-tasks _mb-l _border-bottom">
		<h2 class="text-center">Задачи, с которыми справляется система</h2>

		<ul class="b-product-tasks__list">
			<li class="b-product-tasks__item">Отслеживание неправомочных обращений к базам данных</li>
			<li class="b-product-tasks__item">Защита конфиденциальной информации, хранимой в таблицах баз данных под управлением СУБД Oracle и Microsoft SQL</li>
			<li class="b-product-tasks__item">Управление рисками, связанными с уровнями доступа к информации</li>
		</ul>
	</div>







	<div class="b-features _mb-l _border-bottom">

		<h2 class="text-center b-features__title _mb-l" data-toggle="collapse" data-target="#features_collapse"><span>Функциональные возможности</span></h2>



		<div id="features_collapse" class="collapse in">

			<div class="b-features__text">

				<div class="row">
					<div class="col-xs-6">
						<div class="b-features__item _mb-l">
							<h3 class="_mb-xs">Поддерживаемые СУБД</h3>
							•&nbsp;&nbsp;&nbsp;Oracle <br>
							•&nbsp;&nbsp;&nbsp;Microsoft SQL <br>
						</div>

						<div class="b-features__item _mb-l">
							<h3 class="_mb-xs">Производительность</h3>
							Трафик обрабатывается на скорости 1 Гбит/сек и выше – мониторинг происходит в режиме реального времени. Система не оказывает влияния на работу БД, так как работает с копией трафика (SPAN).
							В случае установки агентов для контроля локальных подключений, время выполнения клиентских запросов, которые выполняются локально может величиваться на 3-5%.
						</div>


						<div class="b-features__item _mb-l">
							<h3 class="_mb-xs">Режим защиты</h3>
							<ol>
								<li>Пассивный режим (мониторинг). Система не оказывает влияния на работу БД, так как работает с копией трафика (SPAN).</li>
								<li>Контроль локальных обращений на сервере БД с помощью агентского ПО</li>
								<li>Активная защита. Для блокировки нежелательных действий пользователей БД используется сетевой экран. Для повышения отказоустойчивости в системе реализован bypass-адаптер, перенаправляющий трафик в обход сетевого экрана при его выключении</li>
							</ol>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="b-features__item _mb-l">
							<h3 class="_mb-xs">Критерии анализа</h3>•&nbsp;&nbsp;&nbsp;Имя пользователя в БД 
							•&nbsp;&nbsp;&nbsp;IP-адрес <br>
							•&nbsp;&nbsp;&nbsp;Результат аутентификации (успешная/неуспешная) <br>
							•&nbsp;&nbsp;&nbsp;Объем данных запроса, превышающий указанную величину <br>
							•&nbsp;&nbsp;&nbsp;Объем данных ответа, превышающий указанную величину <br>
							•&nbsp;&nbsp;&nbsp;Количество записей в ответе, превышающее указанную величину <br>
							•&nbsp;&nbsp;&nbsp;Дата/время запроса <br>
							•&nbsp;&nbsp;&nbsp;Имя пользователя в ОС <br>
							•&nbsp;&nbsp;&nbsp;Название используемого клиентского приложения <br>
							•&nbsp;&nbsp;&nbsp;Запрашиваемые/передаваемые поля таблицы, синонима,<br>
							представления <br>
							•&nbsp;&nbsp;&nbsp;Ключевое слово (поиск в запросах, ответах и переменных) <br>
							•&nbsp;&nbsp;&nbsp;Тип SQL-команды <br>
							&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;SELECT <br>
							&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;ALTER USER <br>
							&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;DROP VIEW <br>
							&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Другие <br>
							•&nbsp;&nbsp;&nbsp;Имя объектов БД <br>
							&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Процедура <br>
							&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Функция <br>
							&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Представление <br>
							&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Таблица <br>
							&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Синоним<br>
						</div>
					</div>
				</div>

				
				
				
				
			</div>

			<div class="text-center">
				<div class="text-center _mb-l">
					<a class="b-features__more _open" href="#laws_scroll_top" data-toggle="collapse" data-target="#features_collapse">
						<span></span><i></i>
					</a>
				</div>
			</div>

		</div>



	</div>









	<div class="_mb-l b-laws _border-bottom">
		<h2 id="laws_scroll_top" class="text-center">Законодательство</h2>
		<p class="b-laws__subtitle text-center _mb-m">Все решения разработаны в соответствии с занодательными актами,<br>представленными ниже</p>

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



		<div class="text-center _mb-l"><a id="laws_more" class="b-laws__more" href="#laws_scroll_top"><span></span><i></i></a></div>

	</div>

















	<div class="b-reports _mb-l _border-bottom">
		<h2 class="text-center">Схема подключения</h2>
		<div class="b-reports__tabs _mb-m text-center" role="tabpanel">
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="scheme1">
					<div class="_mb-m">
						<img src="img/content/scheme.png" alt="">
					</div>
					<div class="_max-text">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus distinctio numquam tempore eaque at doloribus hic, sint dolor esse modi iste ipsa aut nam odio adipisci veniam, quam sit ea! </p>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="scheme2">
					<div class="_mb-m">
						<img src="img/content/scheme.png" alt="">
					</div>
					<div class="_max-text">
						<p>3-звеннная</p>
					</div>
				</div>
			</div>
		</div>


		<div class="row _mb-l b-reports__buttons">
			<div class="col-xs-12 text-center _clearfix">
				<div class="btn-group" role="group" aria-label="...">
					<a type="button" class="btn btn-default active" data-toggle="tab" href="#scheme1">Прямое соединение с БД</a>
					<a type="button" class="btn btn-default" data-toggle="tab" href="#scheme2">Трехзвенная архитектура</a>
				</div>
			</div>
		</div>
	</div>







	<div class="b-tasks _border-bottom _mb-l">
		<h2 class="text-center">Подберите решение для своих задач</h2>

		<ul class="row _mb-l b-tasks__list">
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _risk"></i><span class="b-tasks__text">Выявление и&nbsp;снижение рисков</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _db"></i><span class="b-tasks__text">Контроль доступа к&nbsp;базам данных</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _comm"></i><span class="b-tasks__text">Повышение безопасности каналов комуникации</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _reg"></i><span class="b-tasks__text">Соответствие требованиям регуляторов</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _detect"></i><span class="b-tasks__text">Расследование инцедентов и&nbsp;ретроспективный анализ</span></a></li>
			<li class="col-xs-4 b-tasks__item"><a class="b-tasks__link" href="#"><i class="icon-task _control"></i><span class="b-tasks__text">Контроль рабочего времени и&nbsp;выявление аномального поведения</span></a></li>
		</ul>
	</div>












	<div class="b-features _mb-l _border-bottom">

		<h2 class="text-center _mb-l">Новости и мероприятия</h2>


		<ul class="b-news__list">
			<li>
				<img class="b-news__img" src="img/content/news/1.jpg" alt="">
				<div class="_mb-xs"><time>6 ноября 2014, Москва</time></div>
				<h3 class="_mb-xxs">Выставка InfoSecurity Russia 2014</h3>
				Одно из ключевых событий года пройдет 
				с 24 по 26 сентября в Крокус Экспо, Москва
			</li>
			<li>
				<img class="b-news__img" src="img/content/news/2.jpg" alt="">
				<div class="_mb-xs"><time>28.04.2014</time></div>
				<h3 class="_mb-xxs">CISO Time MFI Roadshow</h3>
				Решение «МФИ Софт» признано «Проектом года 2013» в номинации «Информационная безопасность».
			</li>
			<li>
				<img class="b-news__img" src="img/content/news/3.jpg" alt="">
				<div class="_mb-xs"><time>22.02.2014</time></div>
				<h3 class="_mb-xxs">CISO Time MFI Roadshow</h3>
				V Всероссийская Конференция «Revenue Assurance, Fraud, 
				InfoSecurity & Risk Management»
			</li>
			<li>
				<img class="b-news__img" src="img/content/news/2.jpg" alt="">
				<div class="_mb-xs"><time>28.04.2014</time></div>
				<h3 class="_mb-xxs">CISO Time MFI Roadshow</h3>
				Решение «МФИ Софт» признано «Проектом года 2013» в номинации «Информационная безопасность».
			</li>
			<li>
				<div><a href="#" class="_underline">Смотреть все анонсы</a></div>
			</li>
		</ul>



	</div>








	<div class="b-licences _mb-l _border-bottom">

		<h2 class="text-center _mb-l">Лицензии</h2>


		<div class="row _mb-l">
			<div class="col-xs-3 text-center"><a href="#"><img alt="" src="img/content/licences/1.png"></a></div>
			<div class="col-xs-3 text-center"><a href="#"><img alt="" src="img/content/licences/2.png"></a></div>
			<div class="col-xs-3 text-center"><a href="#"><img alt="" src="img/content/licences/3.png"></a></div>
			<div class="col-xs-3 text-center"><a href="#"><img alt="" src="img/content/licences/4.png"></a></div>
		</div>

	</div>








	<div class="b-material-webinars _mb-l">

		<h2 class="text-center _mb-l">Материалы и вебинары</h2>


		<div class="row">
			<div class="col-xs-5 col-xs-offset-1 b-materials">

				<ul>
					<li class="_mb-m">
						<div><a class="_underline" href="#">Аналитика №1: Информационная безопасность в России </a></div>
						<div>Статья на другом сайте</div>
					</li>
					<li class="_mb-m">
						<div><a class="_underline" href="#">Аналитика №2: Информационная безопасность в мире</a></div>
						<div>DOC, 1 Мб </div>
					</li>
					<li class="_mb-m">
						<div><a class="_underline" href="#">Брошюра №1: Презентация с XX форума CISO</a></div>
						<div>PDF, 2 Мб</div>
					</li>
				</ul>

			</div>
			<div class="col-xs-6 b-webinars">
				<img class="b-webinars__preview" src="img/content/webinar.jpg" alt="">
				<div>
					<h3 class="_mb-s">Ближайший вебинар</h3>
					<div class="b-webinars__time _mb-xs"> <time>12 декабря 2014, Москва</time> </div>
					<div class="_mb-s">Информационная безопасность в России</div>
					<a href="#" class="btn btn-primary">Записаться</a>
				</div>
			</div>
		</div>
	</div>










	<div class="b-pilot _mb-l _border-bottom">
		<div class="_vertical-center">
			<div>
				<h2 class="text-center _mb-xs">Пилотный проект</h2>
				<div class="text-center _mb-l _max-text">
					<p class="_mb-l">Мы предоставляем вам возможность проверить свои решения на практике. 
						Закажите пилотный проект, и мы бесплатно внедрим систему защиты информации 
						в базах данных «Гарда БД» в вашей компании для тестирования. </p>
						<a href="#" class="btn btn-primary">Заказать пилотный проект</a>
					</div>
				</div>
			</div>
		</div>







		<div class="row b-clients _mb-l">
			<div class="col-xs-12">
				<h2 class="text-center">Клиенты</h2>
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












		<div class="_mb-m _clearfix">
			<a href="#" class="_no-underline _float-left">&#8592; <span class="_underline">Информационная безопасность</span></a>
			<a href="#" class="_no-underline _float-right"><span class="_underline">Гарда Предприятие</span> &#8594;</a>
		</div>




		<? require_once('templates/footer.php'); ?>