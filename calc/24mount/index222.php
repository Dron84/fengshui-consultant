<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css">
    <script src='http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU'></script>
    <style>
    #map {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: -1; }
      #map_settings {
        position: absolute;
        width: 630px;
        height: 630px;
        top: 50px;
        left: 0;
        z-index: 1;
        background-color: transparent; }
      #map_menu {
        top: 120px;
        right: 10px;
        padding: 10px;
        position: fixed;
        width: 300px;
        height: auto;
        z-index: 2;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.5);
        font-family: "ChinaCyr" !important; }
      #map_phone {
        top: 50px;
        margin: auto 0;
        display: none; }

    @media (max-width: 768px) {
      #maps {
        display: none; }

      #map_phone {
        display: block; } }

    #error_people {
      font-family: "ChinaCyr" !important; }

    .row .goa {
      padding: 0px; }
      .row .goa div {
        height: 130px;
        background-color: black;
        border-radius: 10px; }

    #goa {
      display: none;
      text-align: center; }

    #goa_people_5 {
      color: white;
      font-size: 4em;
      line-height: 1.8em; }
    </style>
    <script>
      $(document).ready(function(){
        var lat,lon,z;
        if (lat == undefined){
          lat = $('input[name=lat]').val();
          lon = $('input[name=lon]').val();
          z = 11
        }

        $('#24mounts').on('change',function(){
          svgChange();
        })
        // $('#angel_select').propeller({inertia: 0, speed: 0, step: 0});
        $('#angel_select').on('mousedown touchstart', function(e) {
          e.preventDefault(); // prevents the dragging of the image.
          $(document).bind('mousemove.rotateImg', function(e2) {
            rotateOnMouse(e2, $('#angel_select'));
          });
        });
        $(document).on('mouseup touchend',function(e) {
          $(document).unbind('mousemove.rotateImg');
        });
        $('input[name=fasad_degree]').on('mousewheel', function(){
          degrees();
        })
        $('input[name=fasad_degree]').on('mouseup', function(){
          degrees();
        })
        $('input[name=fasad_degree]').on('change', function(){
          degrees();
        })

        $('button[name=declination_switch]').on('click', function(){
            $.post('https://www.ngdc.noaa.gov/geomag-web/calculators/calculateDeclination',{
              browserRequest:"true",
              lat1: $('input[name=lat]').val(),
              lat1Hemisphere: "N",
              lon1: $('input[name=lon]').val(),
              lon1Hemisphere: "E",
              model:"WMM",
              startYear: $('input[name=year]').val(),
              startMonth: $('input[name=mounth]').val(),
              resultFormat:"xml",
              ajax:"true"
              })
              .done(function(data){
                respode = $(data).find('declination').first().text();
                $('input[name=declination]').val(respode);
                $('i.fa.fa-check').css({'color': 'green'});
                declination_degree_change(respode);
              })
              .fail(function(data){
                console.log(data);
              })
        })
        $('input[name=address]').keypress(function(e){
          if(e.keyCode == 13)
          {
              $('button[name=search]').click();
          }
        })
        $('button[name=search]').on('click',function(){
          search_text = $('input[name=address]').val()
          get_coords(search_text)
          $('input[name=declination_switch]').removeAttr('checked')
        })
        mapSize();
        if (window.location.pathname == '/calc/24mount/'){
          ymap(lat,lon,11);
        }
      })
      $(window).resize(function(){
        mapSize();
      })
      function degrees(){
        degree = parseFloat($('input[name=fasad_degree]').val());
        $('#angel_select').attr('transform', 'rotate(' + degree.toFixed(2) +' 315 315)');
      }
      function mapSize(){
        width = window.innerWidth;
        height  = window.innerHeight;
        $('#map').css({'width': width, 'height': height,});
        tops = (height/2)-(630/2);
        left = (width/2)-(630/2);
        $('#map_settings').css({'top': tops , 'left': left, 'display': 'none'});
        $("#sizes").html('width:'+width+'; height:'+height);
      }
      function ymap(lat,lon,z){

        ymaps.ready(init);
        var myMap,
            myPlacemark;

        function init(){
            myMap = new ymaps.Map("map", {
                center: [lat, lon],
                zoom: z
            });
        }
      }
      function svgChange(){
        data_mount = $('#24mounts').val();
        if (data_mount==1){
          // console.log(1);
          svgHide();
          $('#map_settings').css({'display':'block'});
          $('g#angel_select').css({'display':'block'});
          $('g#sanuan_lines').css({'display':'block'});
          $('g#sanuan').css({'display':'block'});
        }else if (data_mount==2) {
          // console.log(2);
          svgHide();
          $('#map_settings').css({'display':'block'});
          $('g#angel_select').css({'display':'block'});
          $('g#sanhe_lines').css({'display':'block'});
          $('g#sanhe').css({'display':'block'});
        }else if (data_mount==3) {
          // console.log(3);
          svgHide();
          $('#map_settings').css({'display':'block'});
          $('g#angel_select').css({'display':'block'});
          $('g#12vetvey_lines').css({'display':'block'});
          $('g#12vetvey').css({'display':'block'});
        }else{
          svgHide();
        }
      }
      function svgHide(){
        $('#map_settings').css({'display':'none'});
        $('g#sanuan_lines').css({'display':'none'});
        $('g#sanuan').css({'display':'none'});
        $('g#sanhe_lines').css({'display':'none'});
        $('g#sanhe').css({'display':'none'});
        $('g#12vetvey_lines').css({'display':'none'});
        $('g#12vetvey').css({'display':'none'});
        $('g#angel_select').css({'display':'none'});
      }
      function rotateOnMouse(e, pw) {
            // console.log($('svg24mounts'));
            var offset = $('svg24mounts').offset();
            var center_x = ((((window.innerWidth / 100) * 83.333) - 10)/2);
            var center_y = (((window.innerHeight-50)/2)-50);
            var mouse_x = e.pageX;
            var mouse_y = e.pageY;
            var degree = (Math.atan2(center_y - mouse_y, center_x - mouse_x)/Math.PI)*180;
            if (degree < 0) {
                degree = 360 + degree
            } else {
                if (degree > 180) {
                    degree = degree - 360
                }
            };
            // console.log(degree);
            $(pw).attr('transform', 'rotate(' + degree.toFixed(2) +' 315 315)');
            $('input[name=fasad_degree]').val(degree.toFixed(2));


        }
      function declination_degree_change(degrees){
        $('g#sanuan_lines').attr('transform','rotate('+degrees+' 315 315)');
        $('g#sanuan').attr('transform','rotate('+degrees+' 315 315)');
        $('g#sanhe_lines').attr('transform','rotate('+degrees+' 315 315)');
        $('g#sanhe').attr('transform','rotate('+degrees+' 315 315)');
        $('g#12vetvey_lines').attr('transform','rotate('+degrees+' 315 315)');
        $('g#12vetvey').attr('transform','rotate('+degrees+' 315 315)');
      }
      function get_coords(address){ // Поиск координат
            ymaps.geocode(address, { results: 1 }).then(function (res)
            { // Выбираем первый результат геокодирования
              var firstGeoObject = res.geoObjects.get(0);
              var cords = firstGeoObject.geometry.getCoordinates();
              $('#map').html('');
              $('input[name=lat]').val(cords[0]);
              $('input[name=lon]').val(cords[1]);
              ymap(cords[0],cords[1],18);
              // console.log(cords[0],cords[1]);
            },
            function (err)
            {
              console.log(err.message);
            })

        }
    </script>
  </head>
  <body>
    <?php
    //include ROOT.'/nav.tpl';
    ?>

<div class="container-fluid">
  <div class="row" style="position: relative">
    <div class="col-md-12" id='maps'>
      <div id="map_menu">
        <span class="label label-default">Адрес</span>
        <div class="input-group">
          <input type="text" class="form-control" name="address" placeholder="Город улица дом">
          <input type="hidden" name="lat" value="55.18">
          <input type="hidden" name="lon" value="61.50">
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

          <span class="label label-default">Год расчета</span>
          <input type="number" class="form-control" name="year" value="<?php echo date("Y")?>" min="2000" max="<?php echo date("Y")+1?>">
          <span class="label label-default">Месяц расчета</span>
          <input type="number" class="form-control" name="mounth" value="<?php echo date("m")?>" min='1' max="12">
          <span class="label label-default">Градус фасада</span>
          <input type="number" class="form-control" name="fasad_degree" step="0.1" value="0" min='0' max="359.99">
          <span class="label label-default">Градус магнитного отклонения</span>
          <div class="input-group">
            <input type="text" class="form-control" name='declination' checked='false'>
            <div class="input-group-btn">
              <button class="btn btn-default" name='declination_switch'>
                <i class="fa fa-check"></i>
              </button>
            </div>
          </div>
      </div>
      <div id="map_settings">
        <?php include ROOT.'/img/24mounts.svg'; ?>
      </div>
      <div id="map"></div>
    </div>
    <div class="col-sm-12" id='map_phone'><p>Ради вашего удобства. Данный инструмент <i style="color: red">не доступен</i> для маленьких экранов.</p></div>
  </div>
</div>
  </body>
</html>
