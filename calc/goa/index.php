<!DOCTYPE html>
<html lang="ru">
<head>

  	<?php
  	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
  	include(ROOT.'/head.tpl'); ?>
  <script src='/js/goa.js'></script>

</head>
<body>
	<div class="container-fluid">
    <?php include(ROOT.'/nav.tpl'); ?>
  </div>
  <div class="container goa">
    <div class="row">
      <div class="col-md-12">
        <h2>Гуа человека описание</h2>
        <p class="text-left">У каждого человека есть определённая характеризующая его энергия, которая дается ему при рождении, и несёт некий окрас на протяжении всей его жизни. А определение благоприятных и неблагоприятных направлений помогает выстраивать свою жизнь с более положительным эффектом, и наделяет человека некой удачей во всём. <br>Для того, чтобы определить ваше число Гуа, достаточно всего лишь ввести год своего рождения и пол в таблицу. Вам будет предложен расчёт индивидуальных направлений, используя которые, вы получите больше удачи или неудачи.<br>Как это применяется на практике? – Очень просто. <br><b>Направление с</b>`<span style="background-color: rgba(238,0,255,1); border: 1px solid black; border-radius: 5px; padding-left: 5px; padding-right: 5px; color: white">+</span>` -это направления которые повысят вашу удачу. <br><b>Направления с</b> `<span style="background-color: rgba(255,255,255,1); border: 1px solid black; border-radius: 5px;  padding-left: 5px; padding-right: 5px">-</span>` – это направления которые снизят вашу удачу. </p>
      </div>
      <div class="col-md-12">
        <h2>Гуа Человека</h2>
        <select class="form-control" id="year_people">
          <?php
          $d = date('Y');
          echo $d ;
          $bd = $d-110;

          for ($i=$bd; $i < ($d +1) ; $i++) {
            for ($j=0; $j<=strlen($i); $j++) {
                $digits[]=substr($i, $j, 1);
            }
            // print_r($digits) ;
            if ($i==$d){
              echo "<option value=".$i." data-first=".$digits[2]." data-second=".$digits[3]." selected>$i</option>";
            }else{

              echo "<option value=".$i." data-first=".$digits[2]." data-second=".$digits[3].">$i</option>";

            }
            unset($digits);
          }
          ?>
        </select>
        <select class="form-control" type="select" id="sex_people">
          <option value="0">Выбрать</option>
          <option value="m">Мужчина</option>
          <option value="z">Женщина</option>
        </select>
        <span id='error_people'></span>
        <div id="goa">
          <table class="col-xs-12">
            <tbody>
              <tr>
                <td colspan='3'>ЮГ</td>
              </tr>
              <tr>
                <td><p style="transform: rotate(-90deg)">Восток</p></td>
                <td>
                  <div class="row goa">
                    <div class="col-xs-4" id='goa_people_1'></div>
                    <div class="col-xs-4" id='goa_people_2'></div>
                    <div class="col-xs-4" id='goa_people_3'></div>
                  </div>
                  <div class="row goa">
                    <div class="col-xs-4" id='goa_people_4'></div>
                    <div class="col-xs-4" id='goa_people_5'></div>
                    <div class="col-xs-4" id='goa_people_6'></div>
                  </div>
                  <div class="row goa">
                    <div class="col-xs-4" id='goa_people_7'></div>
                    <div class="col-xs-4" id='goa_people_8'></div>
                    <div class="col-xs-4" id='goa_people_9'></div>
                  </div>
                </td>
                <td><p style="transform: rotate(90deg)">Запад</p></td>
              </tr>
              <tr>
                <td colspan='3'>Север</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
  <div class="bg_tag" style="background-image: url('/img/bg_goa.jpg')"></div>

</body>
</html>
