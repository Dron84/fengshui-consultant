<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name='author' content="http://uniquesite.ru">
  <meta name='copyright' content="https://fengshui-consultant.ru/">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <?php
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
    if (isset($_GET['googlemapapikey'])){
      $GoogleMapApiKey = $_GET['googlemapapikey'];
    }
    if (isset($_GET['lat'])){
      $lat=$_GET['lat'];
    }
    if (isset($_GET['lon'])){
      $lon=$_GET['lon'];
    }
    // include(ROOT.'/head.tpl');
    if(isset($_GET['map'])){
      if($_GET['map']=='yandex'){
        echo '<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
        <!-- <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script> -->';
        echo "<script src='/js/calc24.js'></script>";
      }else if($_GET['map']=='google'){
        echo "<script src='/js/calc24.js'></script>";
        echo '<script src="https://maps.googleapis.com/maps/api/js?key='.$GoogleMapApiKey.'&libraries=places&callback=gmap"></script>';
      }
    }
  ?>
  <link rel="stylesheet" href="/css/index.css">
</head>
<body>
<div class="container-fluid">
  <div class="row" style="position: relative">
    <div class="col-md-12" id='maps'>
      <div id="map_menu">
        <div class="row">
          <div class="col-xs-12">
            <a href="/calc/24mount/frame.php?map=yandex&googlemapapikey=<?php echo $GoogleMapApiKey."&lat=".$lat."&lon=".$lon; ?>" style="padding: 10px; color: black" id='ymaps'>Yandex</a>
            <a href="/calc/24mount/frame.php?map=google&googlemapapikey=<?php echo $GoogleMapApiKey."&lat=".$lat."&lon=".$lon; ?>" style="padding: 10px; color: black" id='gmaps'>Google</a>
          </div>
        </div>

        <span class="label label-default">Адрес</span>
        <div class="input-group">
          <input type="text" class="form-control" name="address" placeholder="Город улица дом">
          <input type="hidden" name="lat" value="<?php if(isset($_GET['lat'])){echo $_GET['lat'];} ?>">
          <input type="hidden" name="lon" value="<?php if(isset($_GET['lon'])){echo $_GET['lon'];} ?>">
          <div class="input-group-btn">
            <button class="btn btn-default" name='search'>
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
        <span class="label label-default">Тип Шаблона</span>
        <select class="form-control" id="24mounts" >
          <option value='0'>Выбрать</option>
          <option value='1'>Сань Юань</option>
          <option value='2'>Сань Хэ</option>
          <option value='3'>12 Ветвей</option>
        </select>
        <div id='menu' style="display: none;">
          <span class="label label-default">Год Постройки</span>
          <input type="number" class="form-control" name="year" value="<?php echo date("Y")?>" min="2000" max="<?php echo date("Y")+1?>">
          <!-- <span class="label label-default">Месяц расчета</span>
          <input type="number" class="form-control" name="mounth" value="<?php echo date("m")?>" min='1' max="12"> -->
          <span class="label label-default">Градус фасада</span>
          <input type="number" class="form-control" name="fasad_degree" step="0.1" value="0" min='0' max="359.99">
          <span class="label label-default">Градус магнитного отклонения</span>
          <div class="input-group">
            <input type="text" class="form-control" name='declination'>
            <div class="input-group-btn">
              <input type="checkbox" name="declination_check">
              <button class="btn btn-default" name='declination_switch'>
                <i class="fa fa-check"></i>
              </button>
            </div>
          </div>
          <span class="label label-default">ГУА Дома</span>
          <input type="number" class="form-control" name="goahome" id='goahome' value="9">
        </div>
      </div>
      <div id="map_settings">
        <?php require ROOT.'/img/24mounts.svg'; ?>
      </div>
      <div id="map"></div>
    </div>
    <div class="col-sm-12" id='map_phone'><p>Ради вашего удобства. Данный инструмент <i style="color: red">не доступен</i> для маленьких экранов.</p></div>
  </div>
</div>

  </body>
</html>
