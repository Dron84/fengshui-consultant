<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	include(ROOT.'/head.tpl'); ?>
</head>
<body>
	<div class="container-fluid services">
		<?php include(ROOT.'/nav.tpl'); ?>
		<div class="jumbotron">
			<br><br><br><br>
			<h1 class="text-center ">Наши услуги</h1>
			<br><br><br><br>
  		</div>

	</div>
	<div class="container">
		<div class="row" style="margin-top:40px">
			<a href="/services/audit/appartaments/?param=1">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<div style="position: relative;">
						<img src="/img/services/th/auditApartamentTo50.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
						<i>Аудит квартиры <br>до 50 м/кв</i>
					</div>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp370 руб за кВ/м</button></center>
				</div>
			</a>
			<a href="/services/audit/appartaments/?param=2">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<div style="position: relative;">
						<img src="/img/services/th/auditApartamentTo100.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
						<i>Аудит квартиры <br>до 100 м/кв</i>
					</div>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp360 руб за кВ/м</button></center>
				</div>
			</a>
			<a href="/services/audit/appartaments/?param=3">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<div style="position: relative;">
						<img src="/img/services/th/auditApartamentBiger100.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
						<i>Аудит квартиры <br>от 100 м/кв</i>
					</div>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp308 руб за кВ/м</button></center>
				</div>
			</a>
			<a href="/services/audit/house/?param=1">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/auditHouseTo100.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
					<i>Аудит дома <br> до 100 м/кв</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp380 руб за кВ/м</button></center>
				</div>
			</a>
			<a href="/services/audit/house/?param=2">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/auditHouseTo300.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
					<i>Аудит дома <br> до 300 м/кв</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp360 руб за кВ/м</button></center>
				</div>
			</a>
			<a href="/services/audit/house/?param=3">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/auditHouseBiger300.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
					<i>Аудит дома <br> от 300 м/кв</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp330 руб за кВ/м</button></center>
				</div>
			</a>
			<a href="/services/audit/bissnes/?param=1">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/auditBuisTo300.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
					<i>Аудит бизнеса <br> до 300 м/кв</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp610 руб за кВ/м</button></center>
				</div>
			</a>
			<a href="/services/audit/bissnes/?param=2">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/auditBuisBiger300.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
					<i>Аудит бизнеса <br> больше 300 м/кв</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp580 руб за кВ/м</button></center>
				</div>
			</a>
			<a href="/services/date/1/">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/date1.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
					<i>Выбор Дат <br>(1 месяц)</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp1 700 руб</button></center>
				</div>
			</a>
			<a href="/services/date/3/">
			<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
				<img src="/img/services/th/date3.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
				<i>Выбор Дат <br>(3 месяц)</i>
				<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp3 700 руб</button></center>
			</div>
			</a>
			<a href="/services/date/6/">
			<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
				<img src="/img/services/th/date6.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
				<i>Выбор Дат <br>(6 месяц)</i>
				<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp6 700 руб</button></center>
			</div>
			</a>
			<a href="/services/date/12/">
			<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
				<img src="/img/services/th/date12.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
				<i>Выбор Дат <br>(12 месяц)</i>
				<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp8 700 руб</button></center>
			</div>
			</a>
			<a href="/services/date/select/" data-toggle="tooltip" title="(свадьбы, лечения, подписания договоров)">
			<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
				<img src="/img/services/th/dateSelect.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%">
				<i>Выбор<br>конкретной даты</i>
				<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp2 000 руб</button></center>
			</div>
			</a>
			<a href="/services/else/bazci/">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/baczi.jpg" alt="" class="img-thumbnail" style="border-radius: 50%; position: relative;width: 100%" >
					<i>Консультация по <br>Бацзы</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp7 800 руб</button></center>
				</div>
			</a>
			<a href="/services/else/bazciChildren/">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/bacziChildren.jpg" alt="" class="img-thumbnail"  style="border-radius: 50%; position: relative;width: 100%">
					<i>Консультация по <br>Бацзы для детей</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp3 600 руб</button></center>
				</div>
			</a>
			<a href="/services/else/bazciChildrenTalant/">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/bacziChildren.jpg" alt="" class="img-thumbnail"  style="border-radius: 50%; position: relative;width: 100%">
					<i>Консультация по Бацзы <br> детские таланты</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp1 800 руб</button></center>
				</div>
			</a>
			<a href="/services/else/bazciConnection/">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/bacziConnection.jpg" alt="" class="img-thumbnail"  style="border-radius: 50%; position: relative;width: 100%">
					<i>Консультация по <br>Бацзы на совместимость</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp3 800 руб</button></center>
				</div>
			</a>
			<a href="/services/else/bazciBissnes/">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/bacziBissnes.jpg" alt="" class="img-thumbnail"  style="border-radius: 50%; position: relative;width: 100%">
					<i>Консультация по Бацзы <br>сфера деятельности</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp3 800 руб</button></center>
				</div>
			</a>
			<a href="/services/else/bazciBissnesConnection/">
				<div class="col-md-2 col-sm-5 col-xs-11 services-col text-center">
					<img src="/img/services/th/bacziBissnesConnection.jpg" alt="" class="img-thumbnail"  style="border-radius: 50%; position: relative;width: 100%">
					<i>Консультация по Бацзы <br>партнеры по бизнесу</i>
					<center><button type="button" class="btn"><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp6 300 руб</button></center>
				</div>
			</a>
		</div>
	</div>

	<?php include(ROOT.'/footer.tpl');?>
</body>
</html>
