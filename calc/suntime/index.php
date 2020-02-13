
<!DOCTYPE html>
<html lang="ru">
<head>
  	<?php
  	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
  	include(ROOT.'/head.tpl'); ?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7p6Wj-1BN2HycCoCk1CX5An-q1EqT9zI&libraries=places"></script>
    <script src="/js/suntime.js" charset="utf-8"></script>
</head>
<body>
	<div class="container-fluid">
    <?php include(ROOT.'/nav.tpl'); ?>
  </div>
  <div class="container goa">
    <div class="row">
      <div class="col-xs-12">
        <h2>Солнечное время</h2>
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
          <input class="form-control" type="number" id='year' value="<?php echo date("Y")?>" max="<?php echo date("Y")+1?>"  >
          <select class="form-control" id="mounth" data-mounth-now='<?php $d = date('m'); echo (int)$d ?>'>
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
          <input type="hidden" id='timestamp' class='form-control'>
          <input type="hidden" id='lat'>
          <input type="hidden" id='lon'>
          <input class="form-control btn btn-default" id="submit" type="button" value="Рассчитать">
        </div>

      </div>
      <div id='suntime'></div>



    </div>
  </div>
  <div class="bg_tag" style="background-image: url('/img/time_bg.jpg')"></div>

</body>
</html>
