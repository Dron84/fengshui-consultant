
<!DOCTYPE html>
<html lang="ru">
<head>
  	<?php
  	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
  	include(ROOT.'/head.tpl'); ?>
    <script src="/js/goahome.js" charset="utf-8"></script>
</head>
<body>
	<div class="container-fluid">
    <?php include(ROOT.'/nav.tpl'); ?>
  </div>
  <div class="container goa">
    <div class="row">
      <div class="col-xs-12">
        <h2>Гуа дома описание</h2>
        <p class="text-left">У каждого Дома как и у человека есть свое собственное число Гуа, определив его, можно выбирать  в доме комнаты наиболее благоприятные с точки зрения энергетики пространства. Определяется Гуа дома по компасу.<br>
Зайдите в раздел "инструменты -> <a href="https://fengshui-consultant.ru/calc/24mount/?map=yandex">шаблон 24 гор</a>", введите в поле адрес: город, улицу и номер дома, выберите шаблон Сань Юань, наведите красным курсором на вход в ваш дом ( если это многоквартирный дом, выбирайте свой подъезд!), курсор покажет вам фасад вашего дома.
А внизу будет указанна число Гуа вашего дома. Нажимаем на поле и у вас появится более подробная информация.
<br>Далее смотрим на таблицу снизу (квадрат Ло Шу).<br>
<b>Пример:</b><br> У вас число гуа дома = 6, это означает что энергии относится к западной группе. И благоприятными для этого дома будут направления: <i>северо-запад</i> и <i>северо-восток</i>.<br> Очень хорошо если здесь расположены входная дверь, спальня, входная дверь в спальню, кабинет.
<br>Для определения секторов, напомню, мы накладываем сетку Ба Гуа на план нашей квартиры относительно сторон света. <b style="display: none">Мы говорили об этом в одной из статей (ссылка __________________)</b>
</p>
      </div>
    </div>
    <div class="col-xs-12">
      <h2>Гуа Дома</h2>
      <select class="form-control" id="goahome">
        <option value="0">Выбрать если знаете тыл дома</option>
        <option value="1" name='goahome_1'>Тыл дома Север</option>
        <option value="2" name='goahome_2'>Тыл дома Юго-Запад</option>
        <option value="3" name='goahome_3'>Тыл дома Восток</option>
        <option value="4" name='goahome_4'>Тыл дома Юго-Восток</option>
        <option value="6" name='goahome_6'>Тыл дома Северо-Запад</option>
        <option value="7" name='goahome_7'>Тыл дома Запад</option>
        <option value="8" name='goahome_8'>Тыл дома Северо-Восток</option>
        <option value="9" name='goahome_9'>Тыл дома Юг</option>
      </select>
      <div id="goa">

        <table class="col-xs-12">
          <tbody>
            <tr>
              <td colspan='3'>ЮГ</td>
            </tr>
            <tr>
              <td><p style="transform: rotate(-90deg)">Восток</p></td>
              <td>
                <div class="row goahome">
                  <div class="col-xs-4" id='goa_home_1'></div>
                  <div class="col-xs-4" id='goa_home_2'></div>
                  <div class="col-xs-4" id='goa_home_3'></div>
                </div>
                <div class="row goahome">
                  <div class="col-xs-4" id='goa_home_4'></div>
                  <div class="col-xs-4" id='goa_home_5'></div>
                  <div class="col-xs-4" id='goa_home_6'></div>
                </div>
                <div class="row goahome">
                  <div class="col-xs-4" id='goa_home_7'></div>
                  <div class="col-xs-4" id='goa_home_8'></div>
                  <div class="col-xs-4" id='goa_home_9'></div>
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
      <div id="goahome_error"></div>
    </div>
  </div>
  <div class="bg_tag" style="background-image: url('/img/bg_goahome.jpg')"></div>

</body>
</html>
