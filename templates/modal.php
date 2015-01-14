

<div id="modals_container" class="b-modals md-overlay" style="display:none">

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
			
			<button type="submit" class="b-callback__submit btn">Заказать звонок</button>
		</form>

	</section>

</div>