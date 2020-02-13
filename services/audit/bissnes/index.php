<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	include(ROOT.'/head.tpl'); ?>
</head>
<body>
	<div class="container-fluid services"
	<?php if(isset($_GET['param'])){
		if($_GET['param']=='1'){
			echo ' style="background-image: url(/img/services/bg/auditBuisTo300.jpg); background-position: `50%`;"';
		}
		if($_GET['param']=='2'){
			echo ' style="background-image: url(/img/services/bg/auditBuisBiger300.jpg); background-position: `50%`;"';
		}
	}
	?>
	>
		<?php include(ROOT.'/nav.tpl'); ?>
		<div class="jumbotron">
			<br><br><br><br>
			<h1 class="text-center ">Наши услуги по <br> Фен Шуй аудит бизнес объекта</h1>
			<br><br><br><br>
  		</div>

	</div>
	<div class="container">
		<div class="row">
			<h2 class="text-center">Фен Шуй аудит</h2>
			<div class="col-xs-12">
				<div class="col-md-3 col-xs-12">
					<?php if(isset($_GET['param'])){
						if($_GET['param']=='1'){
							echo '<img src="/img/services/th/auditBuisTo300.jpg" class="img-thumbnail" alt="" style="width: 250px;">';
						}
						if($_GET['param']=='2'){
							echo '<img src="/img/services/th/auditBuisBiger300.jpg" class="img-thumbnail" alt="" style="width: 250px;">';
						}
					}
					?>
				</div>
				<div class="col-md-9 col-xs-12">
					<p>Фен Шуй аудит бизнес объекта - это трудоемкая работа, направленная на улучшение финансовых потоков. Он требует очень серьезных и профессиональных знаний.  Человек, заказывающий эту услугу, должен быть готов к определенным переменам на бизнес объекте, потому что начинать придется с переставления шкафов, столов и тд. Такие разговоры, как: "нам так неудобно" -не совсем уместны. Я провожу консультацию в целях улучшения ваших финансовых потоков. Перемены не заставят себя долго ждать, все, что от вас требуется - довериться и сделать так, как лучше, с точки зрения использования благоприятных энергий.
					</p>
				</div>
				<div class="col-xs-12 clear40">
					<div class="col-xs-3">
						<center><button type="button" class="btn-order" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-shopping-cart'></span>Заказать</button></center>
					</div>
				</div>
				<!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog">

				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h3 class="modal-title">Сделать заказ</h3>
				        </div>
				        <div class="modal-body">
				          <div class="orders-form">
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"> *</i></span>
								<input class="form-control" type="text" placeholder="Ваше имя" id='name'>
								</div>

								<div class="input-group margin-bottom-sm">
								<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"> *</i></span>
								<input class="form-control" type="text" placeholder="Email адрес" id='email'>
								</div>

								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-phone fa-fw" aria-hidden="true"> *</i></span>
								<input class="form-control" type="text" placeholder="Телефон" id='phone'>
								</div>
								<div class="form-group">
								<label for="comment">Дополнительная информация:</label>
								<textarea class="form-control" rows="5" id="comment">Добрый день. Хотелось у вас заказать аудит бизнес объекта!</textarea>
								</div>
							<button class="btn-order fa fa-check" id='ordersend'> Отправить</button>
						</div>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				        </div>
				      </div>

				    </div>
				  </div>

				<div class="clear40"></div>
				<div>
					<h3>Как проходит Фен Шуй аудит бизнес объекта:</h3>
					<ul>
						<li>Выезд к заказчику</li>
						<li>Осмотр местности, проведение измерений</li>
						<li>Определение местоположения столов, входной двери и межкомнатных дверей(желательно предоставить план объекта)</li>
						<li>Составление консультаци 3-4 дня</li>
						<li>Выезд к заказчику, непосредственно с консультацией</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<?php include(ROOT.'/footer.tpl');?>
</body>
</html>
