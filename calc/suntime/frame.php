
<!DOCTYPE html>
<html lang="ru">
<head>
  	<?php
  	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
    ?>
    <meta name='author' content="http://uniquesite.ru">
  	<meta name='copyright' content="https://fengshui-consultant.ru/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    if (isset($_GET['google_map_api'])){
      $google_map_api = $_GET['google_map_api'];
      echo "<script async defer src='https://maps.googleapis.com/maps/api/js?key=".$google_map_api."&libraries=places'></script>";
    }else{
      echo '<h1> Добавте гугл апи</h1>';
    }
    ?>
    <script src="/js/suntime.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body style="background: transparent;">
  <div class="container goa">
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group" >
            <input class="form-control" type="text" id="address"  placeholder="Город">
            <select class="form-control" id="utc">
            <option value="-12">-12</option>
            <option value="-11.5">-11.5</option>
            <option value="-11">-11</option>
            <option value="-10.5">-10.5</option>
            <option value="-10">-10</option>
            <option value="-9.5">-9.5</option>
            <option value="-9">-9</option>
            <option value="-8.5">-8.5</option>
            <option value="-8">-8</option>
            <option value="-7.5">-7.5</option>
            <option value="-7">-7</option>
            <option value="-6.5">-6.5</option>
            <option value="-6">-6</option>
            <option value="-5.5">-5.5</option>
            <option value="-5">-5</option>
            <option value="-4.5">-4.5</option>
            <option value="-4">-4</option>
            <option value="-3.5">-3.5</option>
            <option value="-3">-3</option>
            <option value="-2.5">-2.5</option>
            <option value="-2">-2</option>
            <option value="-1.5">-1.5</option>
            <option value="-1">-1</option>
            <option value="-0.5">-0.5</option>
            <option value="0" selected>0</option>
            <option value="+0.5">+0.5</option>
            <option value="+1">+1</option>
            <option value="+1.5">+1.5</option>
            <option value="+2">+2</option>
            <option value="+2.5">+2.5</option>
            <option value="+3">+3</option>
            <option value="+3.5">+3.5</option>
            <option value="+4">+4</option>
            <option value="+4.5">+4.5</option>
            <option value="+5">+5</option>
            <option value="+5.5">+5.5</option>
            <option value="+6">+6</option>
            <option value="+6.5">+6.5</option>
            <option value="+7">+7</option>
            <option value="+7.5">+7.5</option>
            <option value="+8">+8</option>
            <option value="+8.5">+8.5</option>
            <option value="+9">+9</option>
            <option value="+9.5">+9.5</option>
            <option value="+10">+10</option>
            <option value="+10.5">+10.5</option>
            <option value="+11">+11</option>
            <option value="+11.5">+11.5</option>
            <option value="+12">+12</option>
            </select>
            <input class="form-control" type="number" id='year' value="<?php echo date("Y")?>" max="<?php echo date("Y")+1?>">
            <select class="form-control" id="mounth" >
            <option value='1' selected>Январь</option>
            <option value='2'>Февраь</option>
            <option value='3'>Март</option>
            <option value='4'>Апрель</option>
            <option value='5'>Май</option>
            <option value='6'>Июнь</option>
            <option value='7'>Июль</option>
            <option value='8'>Август</option>
            <option value='9'>Сентябрь</option>
            <option value='10'>Октябрь</option>
            <option value='11'>Ноябрь</option>
            <option value='12'>Декабрь</option>
            </select>
            <select class="form-control" id="day" ></select>
            <input type="hidden" id='timestamp'>
            <input type="hidden" id='lat' >
            <input type="hidden" id='lon' >
            <input class="form-control btn btn-default" id="submit" type="button" value="Рассчитать">
        </div>
      </div>
      <div id='suntime'></div>
    </div>
  </div>
</body>
</html>
