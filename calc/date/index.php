<!DOCTYPE html>
<html lang="ru">
	<?php
	if (!defined('ROOT')){
		define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	}
	$REQUEST_URI = $_SERVER['SCRIPT_NAME'];
	if ($REQUEST_URI =='/calc/date/index.php'){
		include(ROOT.'/head.tpl');
		}
	?>
    <meta name="robots" content="index, nofollow" />
<body>
	<?php
	$REQUEST_URI = $_SERVER['SCRIPT_NAME'];
	if ($REQUEST_URI =='/calc/date/index.php'){
		echo "<div class='bg_tag' style='background-image: url(/img/date_bg.jpg)'></div>
					<div class='container-fluid' style='background-image: url(/img/date_bg.jpg)'>";
    			include(ROOT.'/nav.tpl');
		echo "</div>";
		}
	if ($REQUEST_URI =='/calc/date/index.php'){
   	echo "<div class='container' style='position: relative; top: 110px'>";
		if(!isset($_GET['title'])){
		echo "<div class='balloons'>Выберите дату!</div>";
		}
		MyCalendar(array(date("Y-m-d")));
		$REQUEST_URI = $_SERVER['SCRIPT_NAME'];
		if (isset($_GET['calDay'])){
			$calDay = calDay($_GET['calDay']);
			// showArray($calDay);
			echo "<br><p><b>Это день <i>".$calDay['caption']."</i>".$calDay['ieroglif']."</b></p>";

		}
		if ($REQUEST_URI =='/calc/date/index.php'){
			echo "<h3>12 индикаторов удачи</h3>
			<p>Когда совсем нет возможности прибегнуть к индивидуальному выбору дат, который способствует наиболее эффективному и благоприятному использованию времени, на помощь приходит простой, но достаточно эффективный метод. В Китае этот метод называется Цзянь Чу. Эта  система используется и очень хорошо распространена в Китае. Ей много тысяч лет, и это однозначно говорит о том, что ей можно доверять.
			<br>Индикаторов 12, ровно столько, сколько существует животных земных ветвей, и у каждого индикатора есть свое описание. Какой характеристикой будет обладать тот или иной день зависит от взаимодействия земных ветвей дня и месяца, года и месяца, дня и часа. </p>
			";
			}
		if(isset($_GET['title'])){
			echo "<p>".vetv($_GET['title'])."</p>";
		}
		if(isset($_GET['calDay'])){
			$calDay = calDay($_GET['calDay']);
			$ground_animal = strtolower($calDay['ground_animal']);
			// echo "<br>";
			conflict($ground_animal);
		}
		echo "</div>";
	}else{
			MyCalendar(array(date("Y-m-d")));
		}

    ?>
</body>
</html>

<?php
function calDay($calDay){
	// include ROOT.'/function.php';
	$data = bacziData();
	$data = $data['baczi'][$calDay]['data'];
	$calDay = array('ground_animal'=>$data['ground_animal'],'caption'=>$data['caption'], 'ieroglif' => " <span class='".$data['sky_color']."'>".$data['sky']."</span><span class='".$data['ground_color']."'>".$data['ground']."</span>");
	return $calDay;
}
function conflict($ground_animal){
	switch ($ground_animal) {
		case 'Крыса':
			echo "<p><b>День неблагоприятен для <i>`Лошади`</i></b></p>";
			break;
		case 'Лошадь':
			echo "<p><b>День неблагоприятен для <i>`Крысы`</i></b></p>";
			break;
		case 'Бык':
			echo "<p><b>День неблагоприятен для <i>`Козы`</i></b></p>";
			break;
		case 'Коза':
			echo "<p><b>День неблагоприятен для <i>`Быка`</i></b></p>";
			break;
		case 'Обезьяна':
			echo "<p><b>День неблагоприятен для <i>`Тигра`</i></b></p>";
			break;
		case 'Тигр':
			echo "<p><b>День неблагоприятен для <i>`Обезьяны`</i></b></p>";
			break;
		case 'Петух':
			echo "<p><b>День неблагоприятен для <i>`Кролика`</i></b></p>";
			break;
		case 'Кролик':
			echo "<p><b>День неблагоприятен для <i>`Петуха`</i></b></p>";
				break;
		case 'Свинья':
			echo "<p><b>День неблагоприятен для <i>`Змеи`</i></b></p>";
				break;
		case 'Змея':
			echo "<p><b>День неблагоприятен для <i>`Свиньи`</i></b></p>";
				break;
		case 'Дракон':
			echo "<p><b>День неблагоприятен для <i>`Собаки`</i></b></p>";
				break;
		case 'Собака':
			echo "<p><b>День неблагоприятен для <i>`Дракона`</i></b></p>";
				break;
	}
}
function MyCalendar($fill=array()) {
  $month_names=array("январь","февраль","март","апрель","май","июнь",
  "июль","август","сентябрь","октябрь","ноябрь","декабрь");
  if (isset($_GET['y'])) $y=$_GET['y'];
  if (isset($_GET['m'])) $m=$_GET['m'];
  if (isset($_GET['date']) AND strstr($_GET['date'],"-")) list($y,$m)=explode("-",$_GET['date']);
  if (!isset($y) OR $y < 1970 OR $y > 2037) $y=date("Y");
  if (!isset($m) OR $m < 1 OR $m > 12) $m=date("m");

  $month_stamp=mktime(0,0,0,$m,1,$y);
  $day_count=date("t",$month_stamp);
  $weekday=date("w",$month_stamp);
  if ($weekday==0) $weekday=7;
  $start=-($weekday-2);
  $last=($day_count+$weekday-1) % 7;
  if ($last==0) $end=$day_count; else $end=$day_count+7-$last;
  $today=date("Y-m-d");
  $prev=date('?\m=m&\y=Y',mktime (0,0,0,$m-1,1,$y));
  $next=date('?\m=m&\y=Y',mktime (0,0,0,$m+1,1,$y));
  $i=0;

	require ROOT.'/function.php';
	// showArray($_SERVER);
	$REQUEST_URI = $_SERVER['SCRIPT_NAME'];
	if ($REQUEST_URI !='/calc/date/index.php'){
		echo "<table class='dates' border=1 style='background-color: rgba(255,255,255,0.4) !important; position: absolute; top: 60px; right: 30px; border-radius: 10px; width: 250px; cellspacing: 0; cellpadding: 2;'>";
	}else{
		echo "<table class='dates' border=1 cellspacing=0 cellpadding=2 width=250>";
	}
	echo '
		<tr>
			<td colspan=7>
				<table width="100%" border=0 cellspacing=0 cellpadding=0 >
					<tr>';
						$REQUEST_URI = $_SERVER['SCRIPT_NAME'];
						if ($REQUEST_URI =='/calc/date/index.php'){
							echo "<td align='left'><a href=".$prev.">&lt;&lt;</a></td>
										<td align='center'>".$month_names[$m-1]." ".$y."</td>
										<td align='right'><a href=".$next.">&gt;&gt;</a></td>";
						}else{
							echo "<td align='left'></td>
										<td align='center'>".$month_names[$m-1]." ".$y."</td>
										<td align='right'></td>";
						}

					echo '</tr>
				</table>
			</td>
		</tr>
		<tr class="text-center">
			<td>Пн</td>
			<td>Вт</td>
			<td>Ср</td>
			<td>Чт</td>
			<td>Пт</td>
			<td>Сб</td>
			<td>Вс</td>
		<tr>';

  for($d=$start;$d<=$end;$d++) {
    if (!($i++ % 7)) echo " <tr>\n";
    echo '  <td align="center">';
    if ($d < 1 OR $d > $day_count) {
      echo "&nbsp";
    } else {
      $now="$y-$m-".sprintf("%02d",$d);
			// echo strtotime($now).'<br><hr>';
			$data = bacziData();
			$calDay = strtotime($now)+86400;
			// echo strtotime($now);
			$vetv = findVetv(strtotime($now));
			// echo $vetv."<br>";
			// echo findDay($calDay)."<br>";
			$data = $data['baczi'][findDay($calDay)]['data'];
			//showArray($data);
			// $sky_color= $data['sky_color'];
			// $sky = $data['sky'];
			// $ground_color = $data['ground_color'];
			// $ground = $data['ground'];
			// $str = "sky_color=".$sky_color."&sky=".$sky."&ground_color=".$ground_color."&ground=".$ground;
			$str="calDay=".findDay($calDay);
			// echo $str;
			$get='';
			if (isset($_GET)){
				$getArray = $_GET;
				unset($getArray['title']);
				foreach ($getArray as $key => $value) {
					$get.=$key.'='.$value.'&';
				}
			}
      if (is_array($fill) AND in_array($now,$fill)) {
        // echo '<b><a href="'.$_SERVER['PHP_SELF'].'?date='.$now.'">'.$d.'</a></b>';

				echo "<b><a href='/calc/date/?title=".$vetv."&".$get.$str."' style='text-decoration: underline; font-size: 1.1em;'>".$d."</b></a>";
      } else {
        echo "<a href='/calc/date/?title=".$vetv."&".$get.$str."'>".$d."</a>";
      }
			$get='';
    }
    echo "</td>\n";
    if (!($i % 7))  echo " </tr>\n";
  }
	echo '</table>';
}
function vetv($title){
	$vetviData= vetvDataTitle();
	// showArray($vetviData);
	echo $vetviData[$title];
}

?>
