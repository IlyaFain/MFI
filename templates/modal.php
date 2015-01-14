

<div id="modals_container" class="b-modals md-overlay" style="display:none">

<? if (defined('PAGE_NAME') && PAGE_NAME == 'main') { ?>
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






</div>