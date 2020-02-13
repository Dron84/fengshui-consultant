<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	include(ROOT.'/head.tpl'); ?>
</head>
<body>
	<div class="container-fluid services" style="background-image: url('/img/services/bg/baczi.jpg'); background-position: buttom;">
		<?php include(ROOT.'/nav.tpl'); ?>
		<div class="jumbotron">
			<br><br><br><br>
			<h1 class="text-center ">Наши услуги по <br> Консультация Бацзы</h1>
			<br><br><br><br>
  		</div>

	</div>
	<div class="container">
		<div class="row">
			<h2 class="text-center">Консультация по Бацзы</h2>
			<div class="col-xs-12">
				<div class="col-md-3 col-xs-12">
					<img src="/img/services/th/baczi.jpg" class="img-thumbnail" alt="" style="width: 250px">
				</div>
				<div class="col-md-9 col-xs-12">
					<p>Консультация по четырем столпам судьбы - чтение вашей карты жизни(прошлое, настоящее, будущее). Консультация представляет собой встречу по скай или лично.
					<br>Очень важно в процессе консультации понять, что делать с имеющимся потенциалом карты Бацзы(где лучше работать, чтобы больше зарабатывать, когда лучше выходить замуж/жениться и нужно ли это делать или лучше остаться в гражданских отношениях, когда лучше планировать деток, чтобы они были здоровы, а вы счастливы, как выстраивать отношения дома, на работе, с друзьями и коллегами).
					<br>Это все можно увидеть через призму карты Бацзы. И, зная все это, выработать стратегию поведения, подготовиться к грядущим событиям, чтобы максимально благоприятно проживать жизнь, полную счастья и радости. Вот задача, которую ставит перед собой консультант Бацзы.
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
								<textarea class="form-control" rows="5" id="comment">Добрый день. Хотелось у вас заказать консультация по Бацзы!</textarea>
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
					<h3>Что включает в себя консультация по Бацзы:</h3>
					<ul>
						<li>Общая характеристика человека</li>
						<li>Творческие наклонности или их отсутствие</li>
						<li>Отношения с противоположным полом</li>
						<li>Дети по карте</li>
						<li>Работа, карьера</li>
						<li>Деньги(финансовый потенциал) и где их зарабатывать</li>
						<li>Увлечения (хобби,творчество)</li>
						<li>Определение текущего такта удачи и иперспективы во всех сферах жизни</li>

					</ul>
				</div>
			</div>
		</div>
	</div>

	<?php include(ROOT.'/footer.tpl');?>
</body>
</html>
