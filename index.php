<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
		define('ROOT', $_SERVER['DOCUMENT_ROOT']);
		include(ROOT.'/head.tpl');
	?>
</head>
<body>
	<div class="container-fluid main">
		<?php include(ROOT.'/nav.tpl'); ?>
		<div class="jumbotron">
			<div class='d-md-none'><?php include(ROOT.'/calc/date/index.php'); ?></div>
			<br><br><br><br>
			<h1 class="text-center ">Фен шуй для каждого <br> 风水为大家 </h1>
			<br><br><br><br>
  		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">О компании</h2>
				<p class="text-justify"><b>Приветствую Вас, дорогие друзья на моем сайте, посвященному Фен Шуй и Китайской метафизике в целом.</b><br>
Мое знакомство с Фен Шуй началось очень давно. Некоторое время назад я поняла и осознала, что очень счастлива и богата, но есть вопросы, на которые не могла найти ответы. Вы, наверное, подумали, что это глупость искать ответы и задавать вопросы, когда и так все хорошо. Но мне всегда хотелось большего, я всегда мечтаю по-максимум. И я стала искать. Вселенная мне ответила, и я ее услышала. Медленно, но очень верно я стала двигаться к еще одной своей мечте, и сейчас с уверенностью могу сказать моя мечта осуществилась!Я умею управлять своей жизнью, применяя инструменты Фен Шуй! Мне еще многому предстоит научиться и многое опробовать, но одно я знаю точно, теперь моя жизнь неразрыно связана с Китайской метафизикой. Если вы сейчас здесь, значит вы тоже ищете ответы и я с радостью и любовью буду делиться с вами своим опытом и знаниями, и вы сможете изменить свою жизнь к лучшему! Удачи нам!
С пожеланиями благополучия и процветания, Наталья.</p>
			</div>
		</div>
		<h2 class="text-center">Что дает использование Китайской Метафизики</h2>
		<div class="row text-center">
			<div class="col-md-4">
				<span class="round"><span class="glyphicon glyphicon-heart-empty"></span></span>
				<h3>Привлечение любви и нормализация отншений в семье</h3>
				<p>Благодаря Китайской метафизики вы сможете укрепить семейные узы,  сохранить тепло, любовь и уважение в семье, а также привлечь избранника в свою жизнь.</p>
			</div>
			<div class="col-md-4">
				<span class="round"><span class="glyphicon glyphicon-usd"></span></span>
				<h3>Улучшение материального благосостояния</h3>
				<p>Китайская Метафизика - не волшебная палочка, способная одарить вас богатствами мира, но правильное использование этой техники способно привлечь в вашу жизнь поток новой энергии, которая принесет ВОЗМОЖНОСТИ для получения денег.</p>
			</div>
			<div class="col-md-4">
				<span class="round"><span class="glyphicon glyphicon-bed"></span></span>
				<h3>Влияние на здоровье</h3>
				<p>Казалось бы, как расположение кровати, плиты, входной двери и т.п. может повлиять на здоровье человека или всей семьи. На самом деле все это неразрывно связано. Правильное использование Китайской метафизики способно улучшить здоровье.</p>
			</div>
		</div>
	</div>
	<?php include(ROOT.'/orders.tpl'); ?>
	<div class="container">
		<div class="row">
			<h2 class="text-center">Услуги</h2>
			<a href="/services/" data-tooltip='tooltip' title='Переход к странице услуг'>
				<div class="col-xs-12">
					<div class="col-md-2 col-sm-6 col-xs-11 services-col text-center">
						<div style="position: relative;">
							<img src="/img/services/th/auditApartamentTo50.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative; width: 100%">
							<i>Аудит квартиры <br>до 50 м/кв</i>
						</div>
						<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp370 руб за кВ/м</button></center>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-11 services-col text-center">
						<img src="/img/services/th/auditHouseTo100.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative; width: 100%">
						<i>Аудит дома <br> до 100 м/кв</i>
						<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp380 руб за кВ/м</button></center>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-11 services-col text-center">
						<img src="/img/services/th/auditBuisTo300.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative; width: 100%">
						<i>Аудит бизнеса <br> до 300 м/кв</i>
						<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp610 руб за кВ/м</button></center>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-11 services-col text-center">
						<img src="/img/services/th/date12.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative; width: 100%">
						<i>Выбор Дат <br>(12 месяц)</i>
						<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp8 700 руб</button></center>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-11 services-col text-center">
						<img src="/img/services/th/baczi.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative; width: 100%" >
						<i>Бонсур по <br>Бацзы</i>
						<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp7 800 руб</button></center>
					</div>
				</div>
			</a>
		</div>
	</div>
<?php include (ROOT.'/footer.tpl'); ?>

</body>
</html>
