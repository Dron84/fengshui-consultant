<nav class="navbar navbar-inverse navbar-fixed-top hidden-print">
	<a href="/admin/" style="position: absolute; width: 10px; height: 10px;" rel="nofollow"></a>
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="/">ФЕН ШУЙ</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Инструменты <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/calc/24mount/?map=yandex">Шаблон 24 горы</a></li>
						<li><a href="/calc/baczi">Калькулятор Ба Цзы Человека</a></li>
						<li><a href="/calc/goa/">Гуа человека</a></li>
						<li><a href="/calc/goahome/">Гуа дома</a></li>
						<li><a href="/calc/suntime/">Солнечное время</a></li>
						<li><a href="/calc/date">Календарь удачных дат</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Статьи <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<?php
							if (!ROOT){define('ROOT', $_SERVER['DOCUMENT_ROOT']);}
							$data = file_get_contents(ROOT.'/articles/data.json');
							$data = json_decode($data,TRUE);
							foreach ($data as $key => $value) {
								$header[].=$value['header'];
							}
							for ($s=0; $s<count($header) ; $s++){
								echo "<li><a href='/articles/?contid=".$s."'>".$header[$s]."</a></li>";
							}
							$header=array();
						?>
					</ul>
				</li>



				<!-- <li><a href="/review/">Отзывы</a></li> -->
				<li><a href="/services/">Услуги</a></li>
				<li><a href="/about/">Обо мне</a></li>
				<li><a href="/contacts/">Контакты</a></li>
			</ul>
			<!-- <ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Войти</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Корзина</a></li>
				<form class="navbar-form navbar-right" action="/action_page.php">
				<div class="input-group">
				<input type="text" class="form-control" placeholder="Найти">
				<div class="input-group-btn">
				<button class="btn btn-default" type="submit">
				<i class="glyphicon glyphicon-search"></i>
				</button>
				</div>
				</div>
				</form>
			</ul> -->

		</div>
	</div>
</nav>
