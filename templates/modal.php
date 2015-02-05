

<div id="modals_container" class="b-modals md-overlay" style="display:none">






<? if (defined('PAGE_NAME') && PAGE_NAME == 'main') { ?>

	<!-- Подписка на новости -->

	<section id="modal_subscribe" class="b-modal b-subscribe-rules md-modal md-effect-3">

		<a data-modal-hide="#modal_subscribe" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<div class="b-modal__title">Правила подписки</div>
		
		<div class="b-subscribe-rules__text">
			<p>1. Контент Сайта доступен Пользователям Сайта вне зависимости от их регистрации на Сайте. Однако, для того, чтобы активно пользоваться возможностями Сайта (например, получать информацию о специальных предложениях, акциях, мероприятиях, распродажах Компании, о специальных предложениях и новостях программы MEGACARD, о новостях и мероприятиях проекта Модные Недели в ТЦ «Мега», о новых выпусках журнала МЕГА Style, о мероприятиях Детского Клуба МЕГА и т.д.), необходимо подписаться на новости Компании.</p>
			<p>2. Подписка на новости осуществляется Пользователями добровольно, плата подписку не взимается. Подписаться на новости может физическое лицо, проживающее на территории Российской Федерации и достигшее 18 лет.</p>
			<p>3. При подписке на новости Пользователь должен указать необходимую достоверную и актуальную информацию, включая уникальный для каждого Пользователя Сайта адрес электронной почты , а также фамилию, имя, дату рождения, пол, семейное положение, информацию о месте проживания (область, населенный пункт или город, улица, номер дома). При подписке на новости или внесении изменений в указанные при подписке данные, по своему усмотрению, может указать дополнительную информацию о себе, в частности, отчество, дополнительную информацию о месте проживания (почтовый индекс, район, номер корпуса, номер квартиры), номер мобильного телефона, количество детей в семье, пол детей, их имена и даты их рождения. Пользователь Сайта несет ответственность за достоверность, актуальность, полноту и соответствие законодательству Российской Федерации информации предоставленной при подписке на новости.</p>
		</div>

		<button data-modal-hide="#modal_subscribe" class="b-modal__action btn">Закрыть</button>

	</section>
<? } ?>





	<!-- Обратный звонок -->

	<section id="modal_callback" class="b-modal b-callback md-modal md-effect-3">

		<a data-modal-hide="#modal_callback" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<div class="b-modal__title">Заказ обратного звонка</div>
		<div class="b-modal__subtitle">Заполните форму и мы вам перезвоним</div>

		<form class="b-callback__form" name="callback" action="" method="post">
			<div class="form-group">
				<input name="callback_name" type="text" class="form-control b-callback__input" id="" placeholder="Ваше имя">
			</div>
			<div class="form-group">
				<input name="callback_phone" type="tel" class="form-control b-callback__input" id="" placeholder="Телефон">
			</div>
			<div class="form-group">
				<div class="b-callback__label">Желаемое время для звонка</div>
				<div class="b-callback__select">
					<select class="js-selectboxit b-callback__time" name="callback_time" id="callback_time">
						<option value="1">с 9 до 12 часов</option>
						<option value="2">с 12 до 15 часов</option>
						<option value="3">с 15 до 18 часов</option>
						<option value="4">с 18 до 21 часа</option>
					</select>
				</div>
			</div>
			
			<button type="submit" class="b-modal__action btn">Заказать звонок</button>
		</form>

	</section>





	<!-- Консультация -->

	<section id="modal_consult" class="b-modal b-callback md-modal md-effect-3">

		<a data-modal-hide="#modal_consult" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<div class="b-modal__title">Получить консультацию</div>
		<div class="b-modal__subtitle">Заполните форму и мы ответим на любые вопросы</div>

		<form class="b-callback__form" name="consult" action="" method="post">
			<div class="form-group">
				<input name="consult_name" type="text" class="form-control b-callback__input" id="" placeholder="Ваше имя">
			</div>
			<div class="form-group">
				<input name="consult_phone" type="tel" class="form-control b-callback__input" id="" placeholder="Телефон">
			</div>
			<div class="form-group">
				<div class="b-callback__label">Желаемое время для звонка</div>
				<div class="b-callback__select">
					<select class="js-selectboxit b-callback__time" name="consult_time" id="callback_time">
						<option value="1">с 9 до 12 часов</option>
						<option value="2">с 12 до 15 часов</option>
						<option value="3">с 15 до 18 часов</option>
						<option value="4">с 18 до 21 часа</option>
					</select>
				</div>
			</div>
			
			<button type="submit" class="b-modal__action btn">Получить консультацию</button>
		</form>

	</section>







<? if (defined('PAGE_NAME') && PAGE_NAME == 'carreer') { ?>

	<!-- Вакансия 1 -->

	<section id="modal_vacancy" class="b-modal b-modal-vacancy md-modal md-effect-3">

		<a data-modal-hide="#modal_vacancy" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<div class="b-modal__title">Tester (Инженер по тестированию)</div>
		
		<div class="b-modal-vacancy__descr">
			
			<h3>Обязательные требования</h3><br>
			•&nbsp;&nbsp;Желание самостоятельно изучать и разрабатывать системы хранения на основе NoSQL решений;<br>
			•&nbsp;&nbsp;Знание теории проектирования баз данных;<br>
			•&nbsp;&nbsp;Опыт работы с Unix системами и командной строкой;<br>
			•&nbsp;&nbsp;Хорошее понимание принципов объектно-ориентированного программирования;<br>
			•&nbsp;&nbsp;Опыт разработки Java SE/EE: Core Java 1.6, Collections, Exceptions;<br>
			•&nbsp;&nbsp;Понимание принципов и опыт работы с многопоточностью;<br>
			<br>
			<h3>Желательные требования</h3><br>
			•&nbsp;&nbsp;Опыт работы с Хранилищами данных;<br>
			•&nbsp;&nbsp;Опыт работы с Oracle;<br>
			•&nbsp;&nbsp;Опыт работы с NoSQL системах хранения ( Hadoop / HDFS / Elasticsearch / … );<br>
			•&nbsp;&nbsp;Опыт разработки задач MapReduce;<br>
			•&nbsp;&nbsp;Знание JDBC;<br>
			•&nbsp;&nbsp;Знание design patterns;<br>
			•&nbsp;&nbsp;Опыт командной разработки ПО;<br>
			•&nbsp;&nbsp;Владение английским языком на уровне чтения технической документации, <br>
			навыки письменного общения в англо-язычных форумах;<br>
			<br>
			<h3>Описание деятельности</h3><br>
			•&nbsp;&nbsp;Исследование и апробация новых технологий БД на основе NoSQL систем хранения;<br>
			•&nbsp;&nbsp;Проектирование и реализация новой функциональности на основе вышеупомянутых технологий<br>
			<br>
			<h3>Условия</h3><br>
			•&nbsp;&nbsp;Гибкий график;<br>
			•&nbsp;&nbsp;Оформление по ТК РФ, полностью «белая» зарплата;<br>
			•&nbsp;&nbsp;Помощь в случае переезда из другого региона;<br>
			•&nbsp;&nbsp;Дополнительное медицинское страхование, включая стоматологию;<br>
			•&nbsp;&nbsp;Обучение английскому за счет компании;<br>
			•&nbsp;&nbsp;На территории офиса – теннисный стол, турник, рекреационная зона, чай, кофе;<br>
			•&nbsp;&nbsp;Корпоративные тарифы на фитнес (Физкульт, НЦЭФ);<br>
			•&nbsp;&nbsp;Дружная атмосфера, отзывчивый hr;<br>
			•&nbsp;&nbsp;Возможность проходить внешнее обучение и посещать различные конференции;<br>
			•&nbsp;&nbsp;Перспективы карьерного роста (70% менеджеров – наши воспитанники);<br>

		</div>

		<form class="b-modal-vacancy__form" name="callback" action="" method="post">

			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<input required name="vacancy_name" type="text" class="form-control b-modal-vacancy__input" id="" placeholder="Ваше имя">
					</div>
					<div class="form-group">
						<input required name="vacancy_phone" type="tel" class="form-control b-modal-vacancy__input" id="" placeholder="Телефон">
					</div>
				</div>

				<div class="col-xs-6">
					<div class="b-modal-vacancy__file _mb-s">
						<input type="file" name="vacancy_file">
						<div class="row">
							<div class="col-xs-6 _fake">Прикрепить резюме</div>
							<div class="col-xs-6"><a class="b-modal__action btn">Выберите файл</a></div>
						</div>
					</div>
					<div class="b-modal-vacancy__file-hint"><i>☺</i> Приветствуется doc-файл с информацией о вас, образовании, навыками и умениями.</div class="b-modal-vacancy__file-hint">
				</div>

				<div class="col-xs-12">
					<textarea class="b-modal-vacancy__input _textarea" name="vacancy_message" placeholder="Комментарий" ></textarea>
				</div>

			</div>
			
			<button type="submit" class="b-modal__action btn">Отправить резюме</button>
		</form>

	</section>








	<!-- Вакансия 2 -->

	<section id="modal_vacancy_another" class="b-modal b-modal-vacancy md-modal md-effect-3">

		<a data-modal-hide="#modal_vacancy_another" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<div class="b-modal__title">Другая вакансия</div>
		
		<div class="b-modal-vacancy__descr">
			
			<h3>Обязательные требования</h3><br>
			•&nbsp;&nbsp;Желание самостоятельно изучать и разрабатывать системы хранения на основе NoSQL решений;<br>
			•&nbsp;&nbsp;Знание теории проектирования баз данных;<br>
			•&nbsp;&nbsp;Опыт работы с Unix системами и командной строкой;<br>
			•&nbsp;&nbsp;Хорошее понимание принципов объектно-ориентированного программирования;<br>
			•&nbsp;&nbsp;Опыт разработки Java SE/EE: Core Java 1.6, Collections, Exceptions;<br>
			•&nbsp;&nbsp;Понимание принципов и опыт работы с многопоточностью;<br>

		</div>

		<form class="b-modal-vacancy__form" name="callback" action="" method="post">

			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<input required name="vacancy_name" type="text" class="form-control b-modal-vacancy__input" id="" placeholder="Ваше имя">
					</div>
					<div class="form-group">
						<input required name="vacancy_phone" type="tel" class="form-control b-modal-vacancy__input" id="" placeholder="Телефон">
					</div>
				</div>

				<div class="col-xs-6">
					<div class="b-modal-vacancy__file _mb-s">
						<input type="file" name="vacancy_file">
						<div class="row">
							<div class="col-xs-6 _fake">Прикрепить резюме</div>
							<div class="col-xs-6"><a class="b-modal__action btn">Выберите файл</a></div>
						</div>
					</div>
					<div class="b-modal-vacancy__file-hint"><i>☺</i> Приветствуется doc-файл с информацией о вас, образовании, навыками и умениями.</div class="b-modal-vacancy__file-hint">
				</div>

				<div class="col-xs-12">
					<textarea class="b-modal-vacancy__input _textarea" name="vacancy_message" placeholder="Комментарий" ></textarea>
				</div>

			</div>
			
			<button type="submit" class="b-modal__action btn">Отправить резюме</button>
		</form>

	</section>


<? } ?>









	<!-- Пилотный проект -->

	<section id="modal_pilot" class="b-modal _no-min-height md-modal md-effect-3">

		<a data-modal-hide="#modal_pilot" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<div class="b-modal__title">Заказ пилотного проекта</div>
		<div class="b-modal__subtitle">Заполните форму, и мы расскажем, что делать дальше</div>

		<form class="b-callback__form" name="pilot" action="" method="post">
			<div class="form-group">
				<input name="pilot_name" type="text" class="form-control b-callback__input" id="" placeholder="Ваше имя">
			</div>
			<div class="form-group">
				<input name="pilot_phone" type="tel" class="form-control b-callback__input" id="" placeholder="Телефон">
			</div>
			
			<button type="submit" class="b-modal__action btn">Заказать пилотный проект</button>
		</form>

	</section>












	<!-- Вебинар -->

	<section id="modal_webinar" class="b-modal _no-min-height md-modal md-effect-3">

		<a data-modal-hide="#modal_webinar" class="b-modal__close md-close" href="#" title="Закрыть"></a>

		<div class="b-modal__title">Запись на вебинар</div>
		<div class="b-modal__subtitle">Заполните форму и мы вышлем вам на почту подробности</div>

		<form class="b-callback__form" name="webinar" action="" method="post">
			<div class="form-group">
				<input name="webinar_name" type="text" class="form-control b-callback__input" id="" placeholder="Ваше имя">
			</div>
			<div class="form-group">
				<input name="webinar_phone" type="tel" class="form-control b-callback__input" id="" placeholder="Телефон">
			</div>
			
			<button type="submit" class="b-modal__action btn">Записаться на вебинар</button>
		</form>

	</section>










</div>