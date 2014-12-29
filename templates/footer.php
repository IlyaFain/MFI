
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


	<script src="js/libs/jquery-1.10.2.min.js"></script>
	<script src="js/libs/modernizr.all.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<?
		antiCache('js/script.js');
		antiCache('js/modules/resize.js');
		antiCache('js/libs/slick.min.js');
		antiCache('js/modules/equalheight.js');
		antiCache('js/libs/jquery.tinyscrollbar.js');
		antiCache('js/libs/waypoints.min.js');
		
	?>



</body>
</html>

<?
	// для сохранения html-файла
	if (isset($_GET['html']) || SAVE_HTML)
	{
		$html = ob_get_contents();
		ob_end_clean();
		$filename = str_replace('.php', '.html', basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

		header('Content-Type: text/html; charset=utf-8');
		if (file_put_contents($filename, $html)) echo '<h1>'.$filename.' сохранён.</h1>';
		else echo '<h1 style="color:red">Не удалось сохранить '.$filename.'</h1>';
	}
?>