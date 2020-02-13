<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	include(ROOT.'/head.tpl'); ?>
</head>
<body>
	<div class="container-fluid contacts">
		<?php include(ROOT.'/nav.tpl'); ?>
		<div class="jumbotron">
			<br><br><br><br>
			<h1 class="text-center ">Контакты для связи <br> с <br>Натальей Лебедевой</h1>
			<br><br><br><br>
  	</div>

	</div>
	<?php include(ROOT.'/orders.tpl');?>

	<div class="container contacts-info">
		<div class="row">
			<div class="clear40"></div>
			<div class="col-xs-11 col-sm-6">
				<i class="fa fa-location-arrow fa-2x" aria-hidden="true"> Челябинск и Копейск</i>
			</div>
			<div class="col-xs-11 col-sm-6">
				<a href="#"  data-toogel="tooltip" title='время работы'>&nbsp<i class="fa fa-clock-o fa-2x" aria-hidden="true" > 9:00 - 21:00</i></a>
			</div>
			<div class="col-xs-11 col-sm-6">
				<a href="mailto:natalialeb74@mail.ru"  data-toogel="tooltip" title='написать e-mail'>&nbsp<i class="fa fa-envelope-o fa-2x" aria-hidden="true"> natalialeb74@mail.ru</i></a>
			</div>
			<div class="col-xs-11 col-sm-6">
				<a href="tel:+79630745236" data-toogel="tooltip" title='позвонить на телефон'>&nbsp<i class="fa fa-mobile fa-2x" aria-hidden="true"> +7 (963) 074-52-36</i></a>
			</div>
			<div class="col-xs-11 col-sm-6">
				<a href="tel:+79026004016" data-toogel="tooltip" title='позвонить на телефон'>&nbsp<i class="fa fa-mobile fa-2x" aria-hidden="true"> +7 (902) 600-40-16</i></a>
			</div>
			<div class="col-xs-11 col-sm-6">
				<a href="whatsapp://send?phone=79630745236" data-toogel="tooltip" title='написать через WhatsApp'>&nbsp<i class="fa fa-whatsapp fa-2x" aria-hidden="true"> +7 (963) 074-52-36</i></a>
			</div>
			<div class="col-xs-11 col-sm-6">
				<a href="viber://chat?number=79630745236" data-toogel="tooltip" title='написать через Viber'>&nbsp<i class="fa fa-phone fa-2x" aria-hidden="true"> +7 (963) 074-52-36</i></a>
			</div>
			<div class="col-xs-11 col-sm-6">
				<a href="whatsapp://send?phone=79026004016" data-toogel="tooltip" title='написать через WhatsApp'>&nbsp<i class="fa fa-whatsapp fa-2x" aria-hidden="true"> +7 (902) 600-40-16</i></a>
			</div>
			<div class="col-xs-11 col-sm-6">
				<a href="viber://chat?number=79026004016" data-toogel="tooltip" title='написать через Viber'>&nbsp<i class="fa fa-phone fa-2x" aria-hidden="true"> +7 (902) 600-40-16</i></a>
			</div>
			<div class="col-xs-11 col-sm-6">
				<a href="skype:lebedeva_natali1?call" data-toogel="tooltip" title='позвонить через Skype'>&nbsp<i class="fa fa-skype fa-2x" aria-hidden="true"> lebedeva_natali1</i></a>
			</div>
		</div>
	</div>

	<?php include(ROOT.'/footer.tpl');?>
</body>
</html>
