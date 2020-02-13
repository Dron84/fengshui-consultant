<!DOCTYPE html>
<html lang="ru">
<head>
  	<?php
  	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
  	include(ROOT.'/head.tpl'); ?>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7p6Wj-1BN2HycCoCk1CX5An-q1EqT9zI&libraries=places"></script>
    <script src='/js/goa.js'></script>
    <script src='/js/baczi.js'></script>
</head>
<body>
	<div class="container-fluid hidden-print">
    <?php include(ROOT.'/nav.tpl'); ?>
  </div>
  <div class="container goa " id="allbox">
    <div class="row ">
      <div class="col-md-12">
        <h2>Калькулятор Ба Цзы человека</h2>
        <p class="text-left"></p>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="form-group">
            <input type="text" class="form-control" id='fio' placeholder="Ф.И.О">
            <select class="form-control" type="select" id="sex_people">
              <option value="0">Выбрать</option>
              <option value="m">Мужчина</option>
              <option value="z">Женщина</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group">
            <input class="form-control" style="width: 6em;" type="number" id='year' value="<?php echo date("Y")?>" max="<?php echo date("Y")+1?>"  >
            <select class="form-control" id="mounth" style="width: 11em" data-mounth-now='<?php $d = date('m'); echo (int)$d ?>'>
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
            <select class="form-control" id="day" style="width: 4em"></select>
            <select class="form-control" id='hour' style="width: 4em">
              <option value='hour'>час</option>
              <?php
              $hour = 24;
              for ($i=0; $i < $hour ; $i++) {
                if ($i < 10){
                  echo "<option value='".$i."'>0".$i."</option>";
                }else{
                  echo "<option value='".$i."'>".$i."</option>";
                }

              }
              ?>
            </select>
            <select class="form-control" id='min' style="width: 4em">
              <option value='min'>мин.</option>
              <?php
              $min = 60;
              for ($i=0; $i < $min ; $i++) {
                if ($i < 10){
                  echo "<option value='".$i."'>0".$i."</option>";
                }else{
                  echo "<option value='".$i."'>".$i."</option>";
                }

              }
              ?>
            </select>

            <input type="hidden" id='timestamp' class='form-control'>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Место рождения" autocomplete='street-address'>
            <button class="btn btn-default" name='search'>
              <i class="glyphicon glyphicon-search"></i>
            </button>

            <select class="form-control" id="utc" style="width: 6em;">
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
              <input type="hidden" id="lat" placeholder="Широта" class="form-control">
              <input type="hidden" id="lon" placeholder="Долгота" class="form-control">
          </div>
          <div class="checkbox" id="decCheck" style="display: none">
            <label><input type="checkbox" id="magnetdec"> Местное солнечное время</label>
          </div>
        </div>
        <center><button class="btn btn-default" id='submit'>Рассчитать</button></center>
      </div>
    </div>
    <div id="results"></div>
  </div>

<div class="bg_tag hidden-print" style="background-image: url('/img/bg_goa.jpg')"></div>
    <script>
        $('#year').change(function(){
            if($('#year').val()<1930){
                $('#year').val(1930)
            }
        })
    </script>
</body>
</html>
