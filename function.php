<?php
//session_start();
if (isset($_POST['sendmail'])) {
	if($_POST['sendmail']=='1'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$comment = $_POST['comment'];
		$to = 'natalialeb74@mail.ru'; // обратите внимание на запятую
		// $to = 'dron84@gmail.com';
		// тема письма
		$subject = 'Заявка по форме с сайта';
		// текст письма
		$message = '
		<html>
		<head>
		  <title>Заявка с сайта</title>
		</head>
		<body>
			<p style="font-size: 1.4em">Быстрая заявка от человека по имени '. $name.', телефон: <a href=`tel:'.$phone.'`>'.$phone.'</a> , e-mail: <a href=`mailto:'.$email.'`>'.$email.'</a></p>
			<p style="font-size: 1.5em">Комментарий ниже:<br>
				<br>
				'.$comment.'
			</p>
		</body>
		</html>
		';

		// Для отправки HTML-письма должен быть установлен заголовок Content-type
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF8' . "\r\n";

		// Дополнительные заголовки
		// $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
		$headers .= 'From: Fengshui-Consultant.ru <noreplay@Fengshui-Consultant.ru>';
		// $headers .= 'Cc: birthdayarchive@example.com';
		// $headers[] = 'Bcc: birthdaycheck@example.com';

		// Отправляем
		mail($to, $subject, $message, $headers);
		echo ' OK';
	}
}
if (isset($_POST['timestamp'])){
	if($_POST['timestamp']=='stamp'){
		if ( (isset($_POST['day'])) & (isset($_POST['mounth'])) & (isset($_POST['year'])) ){
			$day = $_POST['day'];
			$mounth = $_POST['mounth'];
			$year = $_POST['year'];
			if (isset($_POST['hour'])){
				$hour = $_POST['hour'];
			}else{
				$hour = '00';
			}
			if (isset($_POST['min'])){
				$min = $_POST['min'];
			}else{
				$min = '00';
			}
			$timestamp = findTimestamp($day,$mounth,$year,$hour,$min);
			echo $timestamp;
		}
	}
}
if ( (isset($_POST['sunCurle'])) & (isset($_POST['table'])) ) {
		if($_POST['table']=='set'){
			$sunCurcle = $_POST['sunCurle'];
			echo "
			<table class='col-xs-12  col-md-6 col-md-offset-3'>
				<thead>
					<tr>
						<th class='text-center col-xs-6'>
							Время
						</th>
						<th class='text-center col-xs-6'>
							Земная ветвь
						</th>
					</tr>
				</thead>
				<tbody>
			<tr>
		    <td>".timeCurcle ('00:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('01:00',$sunCurcle)."</td>
		    <td class='blue'>子 Крыса</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('01:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('03:00',$sunCurcle)."</td>
		    <td class='brown'>丑 Бык</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('03:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('05:00',$sunCurcle)."</td>
		    <td class='green'>寅 Тигр</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('05:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('07:00',$sunCurcle)."</td>
		    <td class='green'>卯 Кролик</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('07:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('09:00',$sunCurcle)."</td>
		    <td class='brown'>辰 Дракон</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('09:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('11:00',$sunCurcle)."</td>
		    <td class='red'>巳 Змея</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('11:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('13:00',$sunCurcle)."</td>
		    <td class='red'>午 Лошадь</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('13:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('15:00',$sunCurcle)."</td>
		    <td class='brown'>未 Коза</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('15:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('17:00',$sunCurcle)."</td>
		    <td class='gray'>申 Обезъяна</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('17:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('19:00',$sunCurcle)."</td>
		    <td class='gray'>酉 Петух</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('19:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('21:00',$sunCurcle)."</td>
		    <td class='brown'>戌 Собака</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('21:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('23:00',$sunCurcle)."</td>
		    <td class='blue'>亥 Свинья</td>
		  </tr>
		  <tr>
		    <td>".timeCurcle ('23:00',$sunCurcle)."&nbsp-&nbsp".timeCurcle ('00:00',$sunCurcle)."</td>
		    <td class='blue'>子 Крыса (поздняя)</td>
		  </tr>
			</tbody>
			</table>";
		}
	}
if (isset($_POST['baczi'])){
	if($_POST['baczi']=='request') {
		if (isset($_POST['fio'])){
			$fio = $_POST['fio'];
		}
		$sex_people = $_POST['sex_people'];
		// $address = $_POST['address'];
		$utc = $_POST['utc'];
		$timestamp = $_POST['timestamp'];
		$lat = $_POST['lat'];
		$lon = $_POST['lon'];
		$day = $_POST['day'];
		$mounth = $_POST['mounth'];
		$year = $_POST['year'];
		$hour = $_POST['hour'];
		$min = $_POST['min'];
		if($hour=='hour'||$min=='min'){
		    $hour = 00;
		    $min = 00;
        }
		if ($day<10){
			$day = '0'.$day;
		}
		if ($mounth<10){
			$mounth = '0'.$mounth;
		}
		if (($hour!='none')&&($hour<10)){
			$hour = '0'.$hour;
		}
		if (($min!='none')&&($min<10)){
			$min = '0'.$min;
		}

		if ( ($hour=='none')||($min=='none') ){
			define(HourMin,false);
			$dateTime = $day.'.'.$mounth.' 12:00';
		}else{
			$dateTime = $day.'.'.$mounth.' '.$hour.':'.$min;
		}
//		 echo $dateTime;
		if (isset($_POST['magnet_dec'])){
			if($_POST['magnet_dec']=='true'){
				$min = sunCurcle($utc, $lon);
				echo "<br><p class='red text-center'>Ваше магнитное склонение = ".$min." (мин.)</p>";
				$timestamp = $timestamp - ($min * 60);
			}
		}
		$magnet_dec = $_POST['magnet_dec'];
		// echo 'after $timestamp='.$timestamp;
		calculate($sex_people,$utc,$lat,$lon,$timestamp,$year,$dateTime,$magnet_dec);
	}
}

function timeCurcle($time, $sunCurcle, $correction = true){
//    echo $time;
//    echo $sunCurcle;
	$time = strtotime($time);
	// echo gmdate('H:i',$time).'<br><hr>';
    if($correction==true){
        $time = ($time + (3*3600)); // корректировка времени на сервере
    }
	// echo gmdate('H:i',$time).'<br><hr>';
	if ($sunCurcle != 0){
		$min = $sunCurcle * 60;
	}else{
		$min = 0;
	}
	$time = $time +	$min;
	$time = gmdate("H:i", $time);
	return $time;
}
function calculate($sex_people,$utc,$lat,$lon,$timestamp,$year,$dateTime,$magnet_dec){
    $mounth = bacziCalc($timestamp,$year,$dateTime,$sex_people,$utc,$lat,$lon,$magnet_dec);
//    showArray($mounth);
    $china_real_year=$mounth['china_real_year'];
    $DD = array('sky'=>$mounth['data']['Dsky'],'ground'=>$mounth['data']['Dground'],'Msky'=>$mounth['data']['Msky'],'Mground'=>$mounth['data']['Mground']);
    $taktsbegin = takts($sex_people,$mounth,$year,$dateTime,$DD);
//    showArray($taktsbegin);
    $DDSky = $mounth['data']['Dsky'];
    $DDGround = $mounth['data']['Dground'];
//    showArray($taktsbegin);
    $startYear = $taktsbegin['year'];
     $findtakt= (($startYear-date('Y'))/10);
     if($findtakt<0){
         $findtakt=$findtakt*-1;
     }
//    echo '$findtakt='.$findtakt;
    $findtakt = explode('.',$findtakt);

	 $takt = array_reverse($taktsbegin);
	 $takt = $takt[$findtakt[0]];


    $dateNow = date('Y').'-'.date('m').'-'.date('d').' 00:00:00 UTC';
//        echo $dateTime;
    $thisDateTime = date('m').'.'.date('d').' 00:00';
    $thisTimestamp = strtotime($dateNow);
//        echo '$thistimestamp='.$thisTimestamp;
    $thisYear = findMounthAndYear($thisTimestamp,date('Y'),$thisDateTime);
    $thisYear =$thisYear[1];
    $data = bacziData();
    $thisYear = $data['baczi'][$thisYear]['data'];
//        showArray($thisYear);
    $thisGround = searchAngelDemonGround($DD['ground'], $thisYear['ground']);
    $thisSky = searchAngelDemon($DD['sky'], $thisYear['ground']);
    $thisFK = fenixKungan($DD['sky'],$thisYear['ground']);
    $thisResultSkyGround = $thisSky.$thisGround.$thisFK ;
    $thisFazi=faziCi($DD['sky'],$thisYear['ground']);
    $thisHiddenStolp = hiddenStolpResult(hiddenStolp($thisYear['ground']));

    $thisYear ['thisResultSkyGround']=$thisResultSkyGround;
    $thisYear['thisFazi']=$thisFazi;
    $thisYear['thisHiddenStolp']=$thisHiddenStolp;

	$daySky = $mounth['data']['Dsky'];
	$dayGround = $mounth['data']['Dground'];
	$yearSky = $mounth['data']['Ysky'];
	$yearGround = $mounth['data']['Yground'];
    $daySky=searchAngelDemonCaption($daySky);
    $yearSky=searchAngelDemonCaption($yearSky);
    $dayGround=searchAngelDemonGroundCaption($dayGround);
    $yearGround=searchAngelDemonGroundCaption($yearGround);
	// usin
    $usinHourSky = $mounth['data']['Hsky'];
    $usinDaySky = $mounth['data']['Dsky'];
    $usinMounthSky = $mounth['data']['Msky'];
    $usinYearSky = $mounth['data']['Ysky'];
    $usinHourSky =usinCaption($DDSky, $usinHourSky );
    $usinDaySky =usinCaption($DDSky, $usinDaySky );
    $usinMounthSky =usinCaption($DDSky, $usinMounthSky );
    $usinYearSky =usinCaption($DDSky, $usinYearSky );
    $mounth['data']['usinHourSky']=$usinHourSky;
	$mounth['data']['usinDaySky']=$usinDaySky;
	$mounth['data']['usinMounthSky']=$usinMounthSky;
	$mounth['data']['usinYearSky']=$usinYearSky;
    $mounth['data']['usinTakt']= usinCaption($DD['sky'], $takt[2]);
    $mounth['data']['usinThisYear']= usinCaption($DD['sky'], $thisYear['sky']);
	$emDay = $mounth['data']['emDay'];
	$emYear = $mounth['data']['emYear'];
    $goa = "<div class='goa' id='goa' data-real-china-year='".$china_real_year."'>
			<table class='text-left'>
				<thead><tr><th colspan='2' style='text-align: left'>Благородный человек</th></tr></thead><tbody><tr><td><em>день:</em> ".$daySky['Благородный человек']."</td><td><em>год:</em> ".$yearSky['Благородный человек']."</td></tr></tbody>
				<thead><tr><th colspan='2' style='text-align: left'>Процветание 10 небесных стволов</th></tr></thead><tbody><tr><td><em>день:</em> ".$daySky['Процветание 10 небесных стволов']."</td><td><em>год:</em> ".$yearSky['Процветание 10 небесных стволов']."</td></tr></tbody>
				<thead><tr><th colspan='2' style='text-align: left'>Цветение персика</th></tr></thead><tbody><tr><td><em>день:</em> ".$dayGround['Цветение персика']."</td><td><em>год:</em> ".$yearGround['Цветение персика']."</td></tr></tbody>
				<thead><tr><th colspan='2' style='text-align: left'>Почтовая лошадь</th></tr></thead><tbody><tr><td><em>день:</em> ".$dayGround['Почтовая лошадь']."</td><td><em>год:</em> ".$yearGround['Почтовая лошадь']."</td></tr></tbody>
				<thead><tr><th colspan='2' style='text-align: left'>Звезда Академика</th></tr></thead><tbody><tr><td><em>день:</em> ".$daySky['Звезда Академика']."</td><td><em>год:</em> ".$yearSky['Звезда Академика']."</td></tr></tbody>
				<thead><tr><th colspan='2' style='text-align: left'>Пустота</th></tr></thead><tbody><tr><td><em>день:</em> ".$emDay[2]."</td><td><em>год:</em> ".$emYear[2]."</td></tr></tbody>
			</table>
		</div>";

			unset ($taktsbegin['year']);


			unset ($taktsbegin['how_match']);


	$row =array();
    $yearLive = yearLive(strtotime($startYear.'-01-01 00:00:00 UTC'));
//    showArray($yearLive);
    $newYearLive = array();
    for($j=1; $j<count($yearLive)+1; $j++){
        $string=$yearLive[$j];
        $newYearLive[]=array_values($string);
    }
//	showArray($newYearLive);
	for ($i=0;$i<count($taktsbegin); $i++){
        $takts = $taktsbegin[$i];
//        showArray($takts);
        $live = $newYearLive[$i];
//        showArray($live);
        $row[0][$i]="<strong>".$takts[0]."</strong>";
        $row[1][$i]=$takts[8];
        $row[2][$i]="<span class='godsCaption'>".$takts[13]."</span>";
        $row[3][$i]="<span class='godsCaption'>".$takts[11]."</span>";
        $row[4][$i]="<span class='ieroglif ".$takts[5]."'>".$takts[2]."</span>";
        $row[5][$i]="<span class='ieroglif ".$takts[6]."'>".$takts[3]."</span>";
        $row[6][$i]="<span class='godsCaption'>".$takts[14]."</span>";
        $row[7][$i]="<span class='godsCaption'>".$takts[12]."</span>";
        $row[8][$i]=substr($takts[9],4,150);
        $row[9][$i]=substr($takts[7],4,500);
        $row[10][$i]=$takts[10];
        $row[11][$i]=$live[0];
        $row[12][$i]=$live[1];
        $row[13][$i]=$live[2];
        $row[14][$i]=$live[3];
        $row[15][$i]=$live[4];
        $row[16][$i]=$live[5];
        $row[17][$i]=$live[6];
        $row[18][$i]=$live[7];
        $row[19][$i]=$live[8];
        $row[20][$i]=$live[9]
		;
	}
//	showArray($row);
  
   echo "<form action='print/' method='post' target='_blank'>
        <textarea style='display: none;' name='mapmounth'>".base64_encode(json_encode($mounth['data']))."</textarea>
        <textarea style='display: none;' name='maptakt'>".base64_encode(json_encode($takt))."</textarea>
        <textarea style='display: none;' name='mapthisyear'>".base64_encode(json_encode($thisYear))."</textarea>
        <textarea style='display: none;' name='usin'>".base64_encode(json_encode($mounth['usin']))."</textarea>
        <textarea style='display: none;' name='takts'>".base64_encode(json_encode($row))."</textarea>
        <textarea style='display: none;' name='goa'>".$goa."</textarea>
        <br>
        <button class='btn btn-default' name='submit'><span class='glyphicon glyphicon-print'></span></button>
        </form>";

    echo "<h3>Карта Ба Цзы</h3> <div class='pageAvoid'>";
    echo "<div class='table-responsive'>";
    createMap($mounth['data'],$takt,$thisYear);
    echo "</div>";
    echo $goa;
    usinCreate($mounth['usin']);
    echo "</div><div style='clear: both;' class='pageBreak'></div>";
    echo "<h3>Такты</h3>";
//    showArray($row);
    createTakt($row);
    echo "<mapmounth style='display: none'></mapmounth>
            <maptakt style='display: none'></maptakt>
            <mapthisyear style='display: none'></mapthisyear>
            <usin style='display: none'>".base64_encode(json_encode($mounth['usin']))."</usin>
            <takts style='display: none'></takts>
            <goa>$goa</goa>";
}
function createTakt($data){
//	showArray($data);
//	echo "<div class='container'>
//			";
		echo "<div class='table-responsive'>
				<table class='table baczi pageBreak' id='takts'>";
			for($j=0; $j<count($data); $j++){
				$row = $data[$j];
                if ($j == 11){
                    echo "</table></div><h3>Годы Жизни</h3></td></tr><div class='table-responsive'><table class='table baczi' id='lives'>";
                }
                if ($j==2){
                    echo "<tr>";
                    for ($k = 0; $k < count($row); $k++) {
                        echo "<td class='nebesElem' id='" . $j . '_' . $k . "' data-toggle='tooltip' title='10 божеств'>" . $row[$k] . "</td>";
                    }
                    echo "</tr>";
				}else if(($j==3)||($j==4)){
                    echo "<tr>";
                    for ($k = 0; $k < count($row); $k++) {
                        echo "<td class='nebesElem' id='" . $j . '_' . $k . "' data-toggle='tooltip' title='Небесный элемент'>" . $row[$k] . "</td>";
                    }
                    echo "</tr>";
				}else if($j==1){
                    echo "<tr>";
                    for ($k = 0; $k < count($row); $k++) {
                        echo "<td class='nebesElem' id='" . $j . '_' . $k . "' data-toggle='tooltip' title='Год начало такта'>" . $row[$k] . "</td>";
                    }
                    echo "</tr>";
                }else if(($j==5)||($j==6)){
                    echo "<tr>";
                    for ($k = 0; $k < count($row); $k++) {
                        echo "<td class='nebesElem' id='" . $j . '_' . $k . "' data-toggle='tooltip' title='Земной элемент'>" . $row[$k] . "</td>";
                    }
                    echo "</tr>";
                }else if($j==7){
                    echo "<tr>";
                    for ($k = 0; $k < count($row); $k++) {
                        echo "<td class='nebesElem' id='" . $j . '_' . $k . "' data-toggle='tooltip' title='Фазы такта'>" . $row[$k] . "</td>";
                    }
                    echo "</tr>";
                }else if($j==8){
                    echo "<tr>";
                    for ($k = 0; $k < count($row); $k++) {
                        echo "<td class='nebesElem' id='" . $j . '_' . $k . "' data-toggle='tooltip' title='Символические звезды такта'>" . $row[$k] . "</td>";
                    }
                    echo "</tr>";
                }else if($j==9){
                    echo "<tr>";
                    for ($k = 0; $k < count($row); $k++) {
                        echo "<td class='nebesElem' id='" . $j . '_' . $k . "' data-toggle='tooltip' title='Скрытый небесный ствол такта'>" . $row[$k] . "</td>";
                    }
                    echo "</tr>";
                }else {
                    echo "<tr>";
                    for ($k = 0; $k < count($row); $k++) {
                        echo "<td class='nebesElem' id='" . $j . '_' . $k . "'>" . $row[$k] . "</td>";
                    }
                    echo "</tr>";
                }
			}
		echo "</table>";
	echo "</div>";

//	echo "</div>";
}
function showArray($array){
	print("<pre>".print_r($array,true)."</pre>");
}
function HelpinesAndDoctor($mounthGround,$skyVetv,$groundVetv){
	if($mounthGround=='子'){
		if($skyVetv=='壬'){
			$result.='<br>Лунная Добродетель';
		}
        if($groundVetv=='巳'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='亥'){
            $result.='<br>Небесный Доктор';
        }
	}else if($mounthGround=='丑'){
        if($skyVetv=='庚'){
            $result.='<br>Лунная Добродетель';
        }
        if($skyVetv=='庚'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='子'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='寅'){
        if($skyVetv=='丙'){
            $result.='<br>Лунная Добродетель';
        }
        if($skyVetv=='丁'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='丑'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='卯'){
        if($skyVetv=='甲'){
            $result.='<br>Лунная Добродетель';
        }
        if($groundVetv=='申'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='寅'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='辰'){
        if($skyVetv=='壬'){
            $result.='<br>Лунная Добродетель';
        }
        if($skyVetv=='壬'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='卯'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='巳'){
        if($skyVetv=='庚'){
            $result.='<br>Лунная Добродетель';
        }
        if($skyVetv=='辛'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='辰'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='午'){
        if($skyVetv=='丙'){
            $result.='<br>Лунная Добродетель';
        }
        if($skyVetv=='亥'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='巳'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='未'){
        if($skyVetv=='甲'){
            $result.='<br>Лунная Добродетель';
        }
        if($skyVetv=='甲'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='午'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='申'){
        if($skyVetv=='癸'){
            $result.='<br>Лунная Добродетель';
        }
        if($skyVetv=='癸'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='未'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='酉'){
        if($skyVetv=='庚'){
            $result.='<br>Лунная Добродетель';
        }
        if($groundVetv=='寅'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='申'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='戌'){
        if($skyVetv=='丙'){
            $result.='<br>Лунная Добродетель';
        }
        if($skyVetv=='丙'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='酉'){
            $result.='<br>Небесный Доктор';
        }
    }else if($mounthGround=='亥'){
        if($skyVetv=='甲'){
            $result.='<br>Лунная Добродетель';
        }
        if($skyVetv=='乙'){
            $result.='<br>Небесная благодать';
        }
        if($groundVetv=='戌'){
            $result.='<br>Небесный Доктор';
        }
    }
	return $result;
}
function errorInYan($sky,$ground){
	if (($sky=='丙')&&($ground=='子')){
		$result='<br>Ошибка Инь Янь';
	}else if (($sky=='丁')&&($ground=='丑')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='戊')&&($ground=='寅')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='辛')&&($ground=='卯')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='壬')&&($ground=='辰')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='癸')&&($ground=='巳')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='丙')&&($ground=='午')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='丁')&&($ground=='未')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='戊')&&($ground=='申')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='辛')&&($ground=='酉')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='壬')&&($ground=='戌')){
        $result='<br>Ошибка Инь Янь';
    }else if (($sky=='癸')&&($ground=='亥')){
        $result='<br>Ошибка Инь Янь';
    }
    return $result;
}
function StarBankrot($sky,$ground){
    if (($sky=='甲')&&($ground=='辰')){
        $result='<br>Звезда Банкротства';
    }else if (($sky=='乙')&&($ground=='巳')){
        $result='<br>Звезда Банкротства';
    }else if (($sky=='丙')&&($ground=='申')){
        $result='<br>Звезда Банкротства';
    }else if (($sky=='丁')&&($ground=='亥')){
        $result='<br>Звезда Банкротства';
    }else if (($sky=='戊')&&($ground=='戌')){
        $result='<br>Звезда Банкротства';
    }else if (($sky=='己')&&($ground=='丑')){
        $result='<br>Звезда Банкротства';
    }else if (($sky=='庚')&&($ground=='辰')){
        $result='<br>Звезда Банкротства';
    }else if (($sky=='辛')&&($ground=='巳')){
        $result='<br>Звезда Банкротства';
    }else if (($sky=='壬')&&($ground=='申')){
        $result='<br>Звезда Банкротства';
    }else if (($sky=='癸')&&($ground=='亥')){
        $result='<br>Звезда Банкротства';
    }
    return $result;
}
function Sozvezdie($yearGround,$sex_people,$inOrYan,$groundVetv){

	if((($sex_people=='m')&&($inOrYan=='ян'))||(($sex_people=='z')&&($inOrYan=='инь'))){
		if (($yearGround == '子')&&($groundVetv=='未')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '丑')&&($groundVetv=='申')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '寅')&&($groundVetv=='酉')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '卯')&&($groundVetv=='戌')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '辰')&&($groundVetv=='亥')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '巳')&&($groundVetv=='子')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '午')&&($groundVetv=='丑')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '未')&&($groundVetv=='寅')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '申')&&($groundVetv=='卯')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '酉')&&($groundVetv=='辰')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '戌')&&($groundVetv=='巳')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '亥')&&($groundVetv=='午')){
			$result = '<br>Исходное созвездие';
		}
	}else if((($sex_people=='m')&&($inOrYan=='инь'))||(($sex_people=='z')&&($inOrYan=='ян'))){
		if (($yearGround == '子')&&($groundVetv=='巳')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '丑')&&($groundVetv=='午')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '寅')&&($groundVetv=='未')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '卯')&&($groundVetv=='申')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '辰')&&($groundVetv=='酉')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '巳')&&($groundVetv=='戌')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '午')&&($groundVetv=='亥')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '未')&&($groundVetv=='子')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '申')&&($groundVetv=='丑')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '酉')&&($groundVetv=='寅')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '戌')&&($groundVetv=='卯')){
			$result = '<br>Исходное созвездие';
		}else if (($yearGround == '亥')&&($groundVetv=='辰')){
			$result = '<br>Исходное созвездие';
		}
	}
    return $result;
}
function sunCurcle($utc, $lon){
  $meridian = $utc * 15;
  $baseMeredian = $meridian - (floatval($lon));
  $sunCurle = $baseMeredian * 4;
  $sunCurle = ceil($sunCurle);
	return $sunCurle;
}
function bacziData(){
	$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/calc/baczi/baczi.json');
	$data = json_decode($data,TRUE);
	return $data;
}
function vetviData(){
	$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/calc/baczi/12vetvei.json');
	$data = json_decode($data,TRUE);
	return $data;
}
function vetvDataTitle(){
	$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/calc/baczi/12vetvTitle.json');
	$data = json_decode($data,TRUE);
	return $data;
}
function mounthData(){
	$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/calc/baczi/mounthbegin.json');
	$data = json_decode($data,TRUE);
	return $data;
}
function bacziCalc($timestamp,$year,$dateTime,$sex_people,$utc,$lat,$lon,$magnet_dec){
	// print_r($data['baczi']);
//	echo "$magnet_dec";
	// echo '$timestamp='.$timestamp.'<br>';
//    echo $dateTime;
//	$hour = findHour($timestamp);
    $date = explode(' ',$dateTime);
    $date = explode('.',$date[0]);
    $date = $year.'-'.$date[1].'-'.$date[0];
	$day = findDayProc($date);
//	showArray($day);
//    echo $dayProc;
//    if ($timestamp<0){
//        $day = findDayNew($timestamp);
//    }else{
//        $day = findDay($timestamp);
//    }
//	echo '$day='.$day;

	$data = bacziData();
	$day = $data['baczi'][$day]['data'];
//	showArray($day);
//	$hour = ,'day'=>$day)($day['sky'],$dateTime,$utc,$lat,$lon,$magnet_dec);
//	$hour = findHourNew($day['sky'],$dateTime,$utc,$lat,$lon,$magnet_dec);
	//todo тут поменял функции findHourTable на findHourNew
//	гличит нижняя
	$hour = findHourTable($day['sky'], $dateTime,$magnet_dec,$utc,$lat,$lon);

//	showArray($hour);
//	if($hour['day']=='-1'){
//        $date = explode(' ',$dateTime);
//        $date = explode('.',$date[0]);
////        showArray($date);
//	    $date[0] = $date[0]-1;
//	    if($date[0]<1){
////	        echo $date[0].'<br>';
//            $date[1]=$date[1]-1;
//            $date[0]=31;
//            if($date[1]<1){
//                $date[1]=12;
//                $year=$year-1;
//            }
//        }
//        $date = $year.'-'.$date[1].'-'.$date[0];
////        echo $date;
//        $day = findDayProc($date);
//        $day = $data['baczi'][$day]['data'];
//    }else if ($hour['day']=='1'){
//
//    }
    if ($mounth = findMounthAndYear($timestamp,$year,$dateTime)){
//		showArray($mounth);
        $result['yearBaczi'] = $mounth[1];
        $result['mounthBaczi'] = $mounth[0];
        $result['china_real_year']=$mounth['china_real_year'];
        $year = $mounth[1];
        $mounth = $mounth[0];
//        showArray($year);
//				showArray($mounth);
    }
    $year = $data['baczi'][$year]['data'];
    $mounth = $data['baczi'][$mounth]['data'];
//    showArray($year);
//		showArray($mounth);
//    var_dump($magnet_dec);
//	if($magnet_dec=='true'){
//        $hour--;
//    }else{
//	    $hour = $hour;
////	    echo '$hour'.$hour;
//    }

//    showArray($hour);
    $hour = $data['baczi'][$hour['hour']]['data']; // old findhour
//	showArray($hour);
	$HskyGrondCaption['skyCaption'] = $hour['sky_elem'];
	$HskyGrondCaption['groundCaption'] = $hour['ground_elem'];
	$DskyGrondCaption['skyCaption'] = $day['sky_elem'];
	$DskyGrondCaption['groundCaption'] = $day['ground_elem'];
	$MskyGrondCaption['skyCaption'] = $mounth['sky_elem'];
	$MskyGrondCaption['groundCaption'] = $mounth['ground_elem'];
	$YskyGrondCaption['skyCaption'] = $year['sky_elem'];
	$YskyGrondCaption['groundCaption'] = $year['ground_elem'];
	$result['mounthData'] = $mounth;
	$YSky =$year['sky'];
	$YGround =$year['ground'];
	$daySky = $day['sky'];
	$dayGround = $day['ground'];
	$hourGround = $hour['ground'];
	$mounthGround = $mounth['ground'];
	$yearGround = $year['ground'];
	// Helpines And Doctor
    $hourHelpinesAndDoctor=HelpinesAndDoctor($mounth['ground'],$hour['sky'],$hour['ground']);
    $dayHelpinesAndDoctor=HelpinesAndDoctor($mounth['ground'],$day['sky'],$day['ground']);
    $mounthHelpinesAndDoctor=HelpinesAndDoctor($mounth['ground'],$mounth['sky'],$mounth['ground']);
    $yearHelpinesAndDoctor=HelpinesAndDoctor($mounth['ground'],$year['sky'],$year['ground']);
    //    errorInYan and StarBankrot
    $HerrorInYan=errorInYan($hour['sky'],$hour['ground']);
	$DerrorInYan=errorInYan($day['sky'],$day['ground']);
	$MerrorInYan=errorInYan($mounth['sky'],$mounth['ground']);
	$YerrorInYan=errorInYan($year['sky'],$year['ground']);
	$HStarBankrot = StarBankrot($hour['sky'],$hour['ground']);
	$DStarBankrot = StarBankrot($day['sky'],$day['ground']);
	$MStarBankrot = StarBankrot($mounth['sky'],$mounth['ground']);
	$YStarBankrot = StarBankrot($year['sky'],$year['ground']);
    //Sozvezdie
    $Hsozvezdie = Sozvezdie($year['ground'],$sex_people,$year['ground_sex'],$hour['ground']);
    $Dsozvezdie = Sozvezdie($year['ground'],$sex_people,$year['ground_sex'],$day['ground']);
    $Msozvezdie = Sozvezdie($year['ground'],$sex_people,$year['ground_sex'],$mounth['ground']);
	//faziCi
	$HfaziDay=faziCi($day['sky'],$hour['ground']);
	$DfaziDay=faziCi($day['sky'],$day['ground']);
	$MfaziDay=faziCi($day['sky'],$mounth['ground']);
	$YfaziDay=faziCi($day['sky'],$year['ground']);

	$Dfazi=faziCi($day['sky'],$day['ground']);
	$Hfazi=faziCi($hour['sky'],$hour['ground']);
	$Mfazi=faziCi($mounth['sky'],$mounth['ground']);
	$Yfazi=faziCi($year['sky'],$year['ground']);
	$HfaziResult = $HfaziDay.$Hfazi;
	$DfaziResult = $DfaziDay.$Dfazi;
	$MfaziResult = $MfaziDay.$Mfazi;
	$YfaziResult = $YfaziDay.$Yfazi;
	//planetSelf
	$PSh = planetSelf($year['ground'],$hour['ground'],$sex_people);
	$PSd = planetSelf($year['ground'],$day['ground'],$sex_people);
	$PSm = planetSelf($year['ground'],$mounth['ground'],$sex_people);
	$PSy = planetSelf($year['ground'],$year['ground'],$sex_people);
	//Fenix and Kungan
//	$FKh = fenixKungan($hour['sky'],$hour['ground']);
	$FKd = fenixKungan($day['sky'],$day['ground']);
	$FKm = fenixKungan($mounth['sky'],$mounth['ground']);
	$FKy = fenixKungan($year['sky'],$year['ground']);
	//Angel and Demon
		//day
	$hGround = searchAngelDemonGround($dayGround, $hourGround, '(Д)');
    $dGround = searchAngelDemonGround($dayGround, $dayGround, '(Д)');
	$mGround = searchAngelDemonGround($dayGround, $mounthGround, '(Д)');
	$yGround = searchAngelDemonGround($dayGround, $yearGround, '(Д)');

//    echo $day['ground'];
//    echo $mounth['ground'];
//    echo $year['ground'];
	$hourSkyGround = searchAngelDemon($day['sky'], $hour['ground'], '(Д)');
    $daySkyGround = searchAngelDemon($day['sky'], $day['ground'], '(Д)');
	$mounthSkyGround = searchAngelDemon($day['sky'], $mounth['ground'], '(Д)');
	$yearSkyGround = searchAngelDemon($day['sky'], $year['ground'], '(Д)');
	//Angel and Demon
		//year
	$YhGround = searchAngelDemonGround($YGround, $hourGround, '(Г)');
    $YdGround = searchAngelDemonGround($YGround, $dayGround, '(Г)');
	$YmGround = searchAngelDemonGround($YGround, $mounthGround, '(Г)');
	$YyGround = searchAngelDemonGround($YGround, $yearGround, '(Г)');
	$YhourSkyGround = searchAngelDemon($YSky, $hourGround, '(Г)');
	$YdayGround = searchAngelDemon($YSky, $YGround, '(Г)');
	$YmounthSkyGround = searchAngelDemon($YSky, $mounthGround, '(Г)');
	$YyearSkyGround = searchAngelDemon($YSky, $yearGround, '(Г)');
//    $general = searchGeneralStar($YGround, $dayGround);
//    echo $dayHelpinesAndDoctor;
	//consolidation and create a table
	$dayGround = $daySkyGround.$YdayGround.$dGround.$YdGround.$FKd.$PSd.$dayHelpinesAndDoctor.$DerrorInYan.$DStarBankrot.$Dsozvezdie;
	$hourGround = $hourSkyGround.$YhourSkyGround.$hGround.$YhGround.$PSh.$hourHelpinesAndDoctor.$HerrorInYan.$HStarBankrot.$Hsozvezdie;
	$mounthGround = $mounthSkyGround.$YmounthSkyGround.$mGround.$YmGround.$FKm.$PSm.$mounthHelpinesAndDoctor.$MerrorInYan.$MStarBankrot.$Msozvezdie ;
	$yearGround = $yearSkyGround.$YyearSkyGround.$yGround.$YyGround.$FKy.$PSy.$yearHelpinesAndDoctor.$YerrorInYan.$YStarBankrot ;
//	echo '$day='.$day['sky'].' $hour='.$hour['ground'].' $dayGround='.$day['ground'];
	$HhiddenStolp = hiddenStolpResult(hiddenStolpCaption($day['sky'],hiddenStolp($hour['ground'])));
	$DhiddenStolp = hiddenStolpResult(hiddenStolpCaption($day['sky'],hiddenStolp($day['ground'])));
	$MhiddenStolp = hiddenStolpResult(hiddenStolpCaption($day['sky'],hiddenStolp($mounth['ground'])));
	$YhiddenStolp = hiddenStolpResult(hiddenStolpCaption($day['sky'],hiddenStolp($year['ground'])));
	// emptyness
	$EmDayHour = emptyness($day['sky'], $day['ground'], $hour['ground']);
	$EmDayMounth = emptyness($day['sky'], $day['ground'], $mounth['ground']);
	$EmDayYear = emptyness($day['sky'], $day['ground'], $year['ground']);
//	 $EmYearHour = emptyness($year['sky'], $year['ground'], $hour['ground']);
	 $EmYearDay = emptyness($year['sky'], $year['ground'], $day['ground']);
//	 $EmYearMounth = emptyness($year['sky'], $year['ground'], $mounth['ground']);
	 $emDay = emptyness($day['sky'], $day['ground']);
	 $emYear = emptyness($year['sky'], $year['ground']);
	if ($EmDayHour[1]==1){$hour['Eground_color']='bg_gray';$hour['ground_title']=$hour['ground_title'].' В пустоте';$HstolpEmptiness='bg_gray';}
	if ($EmDayMounth[1]==1){$mounth['Eground_color']='bg_gray';$mounth['ground_title']=$mounth['ground_title'].' В пустоте';$MstolpEmptiness='bg_gray';}
	if ($EmDayYear[1]==1){$year['Eground_color']='bg_gray';$year['ground_title']=$year['ground_title'].' В пустоте';$YstolpEmptiness='bg_gray';}
//	if ($EmYearHour[1]==1){$hour['ground_color']='bg_gray';$hour['ground_title']=$hour['ground_title'].' В пустоте';$HstolpEmptiness='bg_gray';}
	if ($EmYearDay[1]==1){$day['Eground_color']='bg_gray';$day['ground_title']=$day['ground_title'].' В пустоте';$DstolpEmptiness='bg_gray';}
//	if ($EmYearMounth[1]==1){$mounth['ground_color']='bg_gray';$mounth['ground_title']=$mounth['ground_title'].' В пустоте';$MstolpEmptiness='bg_gray';}
	// emptyness end
	// check hour or min in form and del. info
	if (HourMin==false){
		$hour['number']='';
		$hour['sky']='';
		$hour['ground']='';
		$hour['caption']='';
		$hour['sky_color']='';
		$hour['ground_color']='';
		$hour['ground_animal']='';
		$hour['sky_title']='';
		$hour['ground_title']='';
		$hour['ground_sizon']='';
		unset($hourGround);
		$hour['ground']='';
		unset($HfaziResult);
		unset($HhiddenStolp);
		unset($HskyGrondCaption);
	}
	// end checking
	$DATA = array(
	    'HEgroud_Color'=> $hour['Eground_color'],
        'DEgroud_Color'=> $day['Eground_color'],
        'MEgroud_Color'=> $mounth['Eground_color'],
        'YEgroud_Color'=> $year['Eground_color'],
		'emDay'=>$emDay,
		'emYear'=>$emYear,
		'Hnumber'=>$hour['number'],
		'Hsky'=>$hour['sky'],
		'Hground'=>$hour['ground'],
		'HskyColor'=>$hour['sky_color'],
		'HgroundColor'=>$hour['ground_color'],
		'HgroundAnimal'=>$hour['ground_animal'],
		'HskyTitle'=>$hour['sky_title'],
		'HgroundTitle'=>$hour['ground_title'],
		'HgroundSizon'=>$hour['ground_sizon'],
		'HangelDemon'=>$hourGround,
		'HGround'=>$hour['ground'],
		'Hfazi'=>$HfaziResult,
		'Hstolp'=>$HhiddenStolp,
		'HskyGrondCaption'=>$HskyGrondCaption,
		'Dnumber'=>$day['number'],
		'Dsky'=>$day['sky'],
		'Dground'=>$day['ground'],
		'DskyColor'=>$day['sky_color'],
		'DgroundColor'=>$day['ground_color'],
		'DgroundAnimal'=>$day['ground_animal'],
		'DskyTitle'=>$day['sky_title'],
		'DgroundTitle'=>$day['ground_title'],
		'DgroundSizon'=>$day['ground_sizon'],
		'DangelDemon'=>$dayGround,
		'DGround'=>$day['ground'],
		'Dfazi'=>$DfaziResult,
		'Dstolp'=>$DhiddenStolp,
		'DskyGrondCaption'=>$DskyGrondCaption,
		'Mnumber'=>$mounth['number'],
		'Msky'=>$mounth['sky'],
		'Mground'=>$mounth['ground'],
		'MskyColor'=>$mounth['sky_color'],
		'MgroundColor'=>$mounth['ground_color'],
		'MgroundAnimal'=>$mounth['ground_animal'],
		'MskyTitle'=>$mounth['sky_title'],
		'MgroundTitle'=>$mounth['ground_title'],
		'MgroundSizon'=>$mounth['ground_sizon'],
		'MangelDemon'=>$mounthGround,
		'MGround'=>$mounth['ground'],
		'Mfazi'=>$MfaziResult,
		'Mstolp'=>$MhiddenStolp,
		'MskyGrondCaption'=>$MskyGrondCaption,
		'Ynumber'=>$year['number'],
		'Ysky'=>$year['sky'],
		'Yground'=>$year['ground'],
		'YskyColor'=>$year['sky_color'],
		'YgroundColor'=>$year['ground_color'],
		'YgroundAnimal'=>$year['ground_animal'],
		'YgroundSizon'=>$year['ground_sizon'],
		'YskyTitle'=>$year['sky_title'],
		'YgroundTitle'=>$year['ground_title'],
		'YangelDemon'=>$yearGround,
		'YGround'=>$year['ground'],
		'Yfazi'=>$YfaziResult,
		'Ystolp'=>$YhiddenStolp,
		'YskyGrondCaption'=>$YskyGrondCaption,
		'HstolpEmptiness'=>$HstolpEmptiness,
		'DstolpEmptiness'=>$DstolpEmptiness,
		'MstolpEmptiness'=>$MstolpEmptiness,
		'YstolpEmptiness'=>$YstolpEmptiness
	);
	$result['data']=$DATA;
    $usin = usin($day['sky']);
    $result['usin']=$usin;
	// showArray($result);
	return $result;
}
function emptyness($sky, $ground, $StolpGround=NAN){
	if ( ( ($sky=='甲') && ($ground=='子') ) || ( ($sky=='乙') && ($ground=='丑') ) || ( ($sky=='丙') && ($ground=='寅') ) || ( ($sky=='丁') && ($ground=='卯') )|| ( ($sky=='戊') && ($ground=='辰') )|| ( ($sky=='己') && ($ground=='巳') ) || ( ($sky=='庚') && ($ground=='午') )|| ( ($sky=='辛') && ($ground=='未') )|| ( ($sky=='壬') && ($ground=='申') )|| ( ($sky=='癸') && ($ground=='酉') )) {
		$result[1] = 0;
		$result[2] = '戌&nbsp亥';
		if( ($StolpGround =='戌') || ($StolpGround =='亥') ){
			$result[1] = 1;
			$result[2] = '戌&nbsp亥';
		}
		return $result;
	}else if ( ( ($sky=='甲') && ($ground=='戌') ) || ( ($sky=='乙') && ($ground=='亥') ) || ( ($sky=='丙') && ($ground=='子') ) || ( ($sky=='丁') && ($ground=='丑') )|| ( ($sky=='戊') && ($ground=='寅') )|| ( ($sky=='己') && ($ground=='卯') ) || ( ($sky=='庚') && ($ground=='辰') )|| ( ($sky=='辛') && ($ground=='巳') )|| ( ($sky=='壬') && ($ground=='午') )|| ( ($sky=='癸') && ($ground=='未') )) {
		$result[1] = 0;
		$result[2] = '申&nbsp酉';
		if( ($StolpGround =='申') || ($StolpGround =='酉') ){
			$result[1] = 1;
			$result[2] = '申&nbsp酉';
		}
		return $result;
	}else if ( ( ($sky=='甲') && ($ground=='申') ) || ( ($sky=='乙') && ($ground=='酉') ) || ( ($sky=='丙') && ($ground=='戌') ) || ( ($sky=='丁') && ($ground=='亥') )|| ( ($sky=='戊') && ($ground=='子') )|| ( ($sky=='己') && ($ground=='丑') ) || ( ($sky=='庚') && ($ground=='寅') )|| ( ($sky=='辛') && ($ground=='卯') )|| ( ($sky=='壬') && ($ground=='辰') )|| ( ($sky=='癸') && ($ground=='巳') )) {
		$result[1] = 0;
		$result[2] = '午&nbsp未';
		if( ($StolpGround =='午') || ($StolpGround =='未') ){
			$result[1] = 1;
			$result[2] = '午&nbsp未';
		}
		return $result;
	}else if ( ( ($sky=='甲') && ($ground=='午') ) || ( ($sky=='乙') && ($ground=='未') ) || ( ($sky=='丙') && ($ground=='申') ) || ( ($sky=='丁') && ($ground=='酉') )|| ( ($sky=='戊') && ($ground=='戌') )|| ( ($sky=='己') && ($ground=='亥') ) || ( ($sky=='庚') && ($ground=='子') )|| ( ($sky=='辛') && ($ground=='丑') )|| ( ($sky=='壬') && ($ground=='寅') )|| ( ($sky=='癸') && ($ground=='卯') )) {
		$result[1] = 0;
		$result[2] = '辰&nbsp巳';
		if( ($StolpGround =='辰') || ($StolpGround =='巳') ){
			$result[1] = 1;
			$result[2] = '辰&nbsp巳';
		}
		return $result;
	}else if ( ( ($sky=='甲') && ($ground=='辰') ) || ( ($sky=='乙') && ($ground=='巳') ) || ( ($sky=='丙') && ($ground=='午') ) || ( ($sky=='丁') && ($ground=='未') )|| ( ($sky=='戊') && ($ground=='申') )|| ( ($sky=='己') && ($ground=='酉') ) || ( ($sky=='庚') && ($ground=='戌') )|| ( ($sky=='辛') && ($ground=='亥') )|| ( ($sky=='壬') && ($ground=='子') )|| ( ($sky=='癸') && ($ground=='丑') )) {
		$result[1] = 0;
		$result[2] = '寅&nbsp卯';
		if( ($StolpGround =='寅') || ($StolpGround =='卯') ){
			$result[1] = 1;
			$result[2] = '寅&nbsp卯';
		}
		return $result;
	}else if ( ( ($sky=='甲') && ($ground=='寅') ) || ( ($sky=='乙') && ($ground=='卯') ) || ( ($sky=='丙') && ($ground=='辰') ) || ( ($sky=='丁') && ($ground=='巳') )|| ( ($sky=='戊') && ($ground=='午') )|| ( ($sky=='己') && ($ground=='未') ) || ( ($sky=='庚') && ($ground=='申') )|| ( ($sky=='辛') && ($ground=='酉') )|| ( ($sky=='壬') && ($ground=='戌') )|| ( ($sky=='癸') && ($ground=='亥') )) {
		$result[1] = 0;
		$result[2] = '子&nbsp丑';
		if( ($StolpGround =='子') || ($StolpGround =='丑') ){
			$result[1] = 1;
			$result[2] = '子&nbsp丑';
		}
		return $result;
	}

}
function faziCi($sky,$ground){
	$result='';
	switch ($sky) {
		case '甲':
			if($ground=='亥'){
				$result = '<br>Рождение';
			}else if($ground=='子'){
				$result = '<br>Купание';
			}else if($ground=='丑'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='寅'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='卯'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='辰'){
				$result = '<br>Ослабление';
			}else if($ground=='巳'){
				$result = '<br>Болезнь';
			}else if($ground=='午'){
				$result = '<br>Смерть';
			}else if($ground=='未'){
				$result = '<br>Могила';
			}else if($ground=='申'){
				$result = '<br>Обрыв';
			}else if($ground=='酉'){
				$result = '<br>Зачатие';
			}else if($ground=='戌'){
				$result = '<br>Питание';
			}
			break;
		case '乙':
			if($ground=='午'){
				$result = '<br>Рождение';
			}else if($ground=='巳'){
				$result = '<br>Купание';
			}else if($ground=='辰'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='卯'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='寅'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='丑'){
				$result = '<br>Ослабление';
			}else if($ground=='子'){
				$result = '<br>Болезнь';
			}else if($ground=='亥'){
				$result = '<br>Смерть';
			}else if($ground=='戌'){
				$result = '<br>Могила';
			}else if($ground=='酉'){
				$result = '<br>Обрыв';
			}else if($ground=='申'){
				$result = '<br>Зачатие';
			}else if($ground=='未'){
				$result = '<br>Питание';
			}
			break;
		case '丙':
			if      ($ground=='寅'){
				$result = '<br>Рождение';
			}else if($ground=='卯'){
				$result = '<br>Купание';
			}else if($ground=='辰'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='巳'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='午'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='未'){
				$result = '<br>Ослабление';
			}else if($ground=='申'){
				$result = '<br>Болезнь';
			}else if($ground=='酉'){
				$result = '<br>Смерть';
			}else if($ground=='戌'){
				$result = '<br>Могила';
			}else if($ground=='亥'){
				$result = '<br>Обрыв';
			}else if($ground=='子'){
				$result = '<br>Зачатие';
			}else if($ground=='丑'){
				$result = '<br>Питание';
			}
			break;
		case '丁':
			if      ($ground=='酉'){
				$result = '<br>Рождение';
			}else if($ground=='申'){
				$result = '<br>Купание';
			}else if($ground=='未'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='午'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='巳'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='辰'){
				$result = '<br>Ослабление';
			}else if($ground=='卯'){
				$result = '<br>Болезнь';
			}else if($ground=='寅'){
				$result = '<br>Смерть';
			}else if($ground=='丑'){
				$result = '<br>Могила';
			}else if($ground=='子'){
				$result = '<br>Обрыв';
			}else if($ground=='亥'){
				$result = '<br>Зачатие';
			}else if($ground=='戌'){
				$result = '<br>Питание';
			}
			break;
		case '戊':
			if      ($ground=='寅'){
				$result = '<br>Рождение';
			}else if($ground=='卯'){
				$result = '<br>Купание';
			}else if($ground=='辰'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='巳'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='午'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='未'){
				$result = '<br>Ослабление';
			}else if($ground=='申'){
				$result = '<br>Болезнь';
			}else if($ground=='酉'){
				$result = '<br>Смерть';
			}else if($ground=='戌'){
				$result = '<br>Могила';
			}else if($ground=='亥'){
				$result = '<br>Обрыв';
			}else if($ground=='子'){
				$result = '<br>Зачатие';
			}else if($ground=='丑'){
				$result = '<br>Питание';
			}
			break;
		case '己':
			if      ($ground=='酉'){
				$result = '<br>Рождение';
			}else if($ground=='申'){
				$result = '<br>Купание';
			}else if($ground=='未'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='午'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='巳'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='辰'){
				$result = '<br>Ослабление';
			}else if($ground=='卯'){
				$result = '<br>Болезнь';
			}else if($ground=='寅'){
				$result = '<br>Смерть';
			}else if($ground=='丑'){
				$result = '<br>Могила';
			}else if($ground=='子'){
				$result = '<br>Обрыв';
			}else if($ground=='亥'){
				$result = '<br>Зачатие';
			}else if($ground=='戌'){
				$result = '<br>Питание';
			}
			break;
		case '庚':
			if      ($ground=='巳'){
				$result = '<br>Рождение';
			}else if($ground=='午'){
				$result = '<br>Купание';
			}else if($ground=='未'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='申'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='酉'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='戌'){
				$result = '<br>Ослабление';
			}else if($ground=='亥'){
				$result = '<br>Болезнь';
			}else if($ground=='子'){
				$result = '<br>Смерть';
			}else if($ground=='丑'){
				$result = '<br>Могила';
			}else if($ground=='寅'){
				$result = '<br>Обрыв';
			}else if($ground=='卯'){
				$result = '<br>Зачатие';
			}else if($ground=='辰'){
				$result = '<br>Питание';
			}
			break;
		case '辛':
			if      ($ground=='子'){
				$result = '<br>Рождение';
			}else if($ground=='亥'){
				$result = '<br>Купание';
			}else if($ground=='戌'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='酉'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='申'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='未'){
				$result = '<br>Ослабление';
			}else if($ground=='午'){
				$result = '<br>Болезнь';
			}else if($ground=='巳'){
				$result = '<br>Смерть';
			}else if($ground=='辰'){
				$result = '<br>Могила';
			}else if($ground=='卯'){
				$result = '<br>Обрыв';
			}else if($ground=='寅'){
				$result = '<br>Зачатие';
			}else if($ground=='丑'){
				$result = '<br>Питание';
			}
			break;
		case '壬':
			if      ($ground=='申'){
				$result = '<br>Рождение';
			}else if($ground=='酉'){
				$result = '<br>Купание';
			}else if($ground=='戌'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='亥'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='子'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='丑'){
				$result = '<br>Ослабление';
			}else if($ground=='寅'){
				$result = '<br>Болезнь';
			}else if($ground=='卯'){
				$result = '<br>Смерть';
			}else if($ground=='辰'){
				$result = '<br>Могила';
			}else if($ground=='巳'){
				$result = '<br>Обрыв';
			}else if($ground=='午'){
				$result = '<br>Зачатие';
			}else if($ground=='未'){
				$result = '<br>Питание';
			}
			break;
		case '癸':
			if      ($ground=='卯'){
				$result = '<br>Рождение';
			}else if($ground=='寅'){
				$result = '<br>Купание';
			}else if($ground=='丑'){
				$result = '<br>Шапка и Пояс';
			}else if($ground=='子'){
				$result = '<br>Поступление на Службу';
			}else if($ground=='亥'){
				$result = '<br>Императорский Светильник';
			}else if($ground=='戌'){
				$result = '<br>Ослабление';
			}else if($ground=='酉'){
				$result = '<br>Болезнь';
			}else if($ground=='申'){
				$result = '<br>Смерть';
			}else if($ground=='未'){
				$result = '<br>Могила';
			}else if($ground=='午'){
				$result = '<br>Обрыв';
			}else if($ground=='巳'){
				$result = '<br>Зачатие';
			}else if($ground=='辰'){
				$result = '<br>Питание';
			}
			break;
		}
	return $result;
}
function hiddenStolpResult($hiddenStolpResultArray){
	$data = $hiddenStolpResultArray;
	if($data['first']!='&nbsp'){
		if($data['firstCaption']==''){
            $result = "<span class='".$data['firstColor']."'>".$data['first']."</span>";
		}else{
			$result = "<span class='".$data['firstColor']."'>".$data['first']."</span><p  style='font-size: 14px; text-align: center; text-indent: 0;'>".$data['firstCaption']."</p>";
		}
	}
	if($data['second']!='&nbsp'){
        if($data['secondCaption']==''){
            $result .="<span class='".$data['secondColor']."'>".$data['second']."</span>";
		}else{
            $result .="<span class='".$data['secondColor']."'>".$data['second']."</span><p style='font-size: 14px; text-align: center; text-indent: 0;'>".$data['secondCaption']."</p>";
		}
	}
	if($data['three']!='&nbsp'){
		if($data['threeCaption']==''){
            $result .= "<span class='" . $data['threeColor'] . "'>" . $data['three'] . "</span>";
		}else {
            $result .= "<span class='" . $data['threeColor'] . "'>" . $data['three'] . "</span><p style='font-size: 14px; text-align: center; text-indent: 0;'>" . $data['threeCaption'] . "</p>";
        }
	}
	return $result;
}
function hiddenStolpCaption($sky, $hiddenStolpResultArray){
	$first = $hiddenStolpResultArray['first'];
	$second = $hiddenStolpResultArray['second'];
	$three = $hiddenStolpResultArray['three'];
	$hiddenStolpResultArray['firstCaption']=usinCaption($sky,$first);
	$hiddenStolpResultArray['secondCaption']=usinCaption($sky,$second);
	$hiddenStolpResultArray['threeCaption']=usinCaption($sky,$three);
	return $hiddenStolpResultArray;
}
function usinCaption($sky, $hiddenStolp){
	$result='';
	switch ($sky) {
		case '甲':
			if($hiddenStolp=='甲'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='乙'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='丙'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='丁'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='戊'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='己'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='庚'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='辛'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='壬'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='癸'){
				$result = 'Прямая печать';
			}
			break;
		case '乙':
			if($hiddenStolp=='乙'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='甲'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='丁'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='丙'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='己'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='戊'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='辛'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='庚'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='癸'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='壬'){
				$result = 'Прямая печать';
			}
			break;
		case '丙':
			if($hiddenStolp=='丙'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='丁'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='戊'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='己'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='庚'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='辛'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='壬'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='癸'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='甲'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='乙'){
				$result = 'Прямая печать';
			}
			break;
		case '丁':
			if($hiddenStolp=='丁'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='丙'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='己'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='戊'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='辛'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='庚'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='癸'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='壬'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='乙'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='甲'){
				$result = 'Прямая печать';
			}
			break;
		case '戊':
			if($hiddenStolp=='戊'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='己'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='庚'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='辛'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='壬'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='癸'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='甲'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='乙'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='丙'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='丁'){
				$result = 'Прямая печать';
			}
			break;
		case '己':
			if($hiddenStolp=='己'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='戊'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='辛'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='庚'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='癸'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='壬'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='乙'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='甲'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='丙'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='丁'){
				$result = 'Прямая печать';
			}
			break;
		case '庚':
			if($hiddenStolp=='庚'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='辛'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='壬'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='癸'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='甲'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='乙'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='丙'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='丁'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='戊'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='己'){
				$result = 'Прямая печать';
			}
			break;
		case '辛':
			if($hiddenStolp=='辛'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='庚'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='癸'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='壬'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='乙'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='甲'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='丁'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='丙'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='己'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='戊'){
				$result = 'Прямая печать';
			}
			break;
		case '壬':
			if($hiddenStolp=='壬'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='癸'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='甲'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='乙'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='丙'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='丁'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='戊'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='己'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='庚'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='辛'){
				$result = 'Прямая печать';
			}
			break;
		case '癸':
			if($hiddenStolp=='癸'){
				$result = 'Равное плечо';
			}else if($hiddenStolp=='壬'){
				$result = 'Грабители богатства';
			}else if($hiddenStolp=='乙'){
				$result = 'Дух пищи';
			}else if($hiddenStolp=='甲'){
				$result = 'Ранение чиновника';
			}else if($hiddenStolp=='丁'){
				$result = 'Склонность к богатству';
			}else if($hiddenStolp=='丙'){
				$result = 'Стабильное богатство';
			}else if($hiddenStolp=='己'){
				$result = 'Убийца на 7й позиции';
			}else if($hiddenStolp=='戊'){
				$result = 'Правильная власть';
			}else if($hiddenStolp=='辛'){
				$result = 'Косая печать';
			}else if($hiddenStolp=='庚'){
				$result = 'Прямая печать';
			}
			break;
	}
	return $result;
}
function usin($sky){
	$result='';
	switch ($sky) {
		case '甲':
			$result= array (
				1=> array ("0"=>'甲',"color"=>"green","1"=>"Равное плечо"),
				2=> array ("0"=>'乙',"color"=>"green","1"=>"Грабители богатства"),
				3=> array ("0"=>'丙',"color"=>"red","1"=>"Дух пищи"),
				4=> array ("0"=>'丁',"color"=>"red","1"=>"Ранение чиновника"),
				5=> array ("0"=>'戊',"color"=>"brown","1"=>"Склонность к богатству"),
				6=> array ("0"=>'己',"color"=>"brown","1"=>"Стабильное богатство"),
				7=> array ("0"=>'庚',"color"=>"gray","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'辛',"color"=>"gray","1"=>"Правильная власть"),
				9=> array ("0"=>'壬',"color"=>"blue","1"=>"Косая печать"),
				10=> array ("0"=>'癸',"color"=>"blue","1"=>"Прямая печать"),
			);
			return $result;
			break;
		case '乙':
			$result= array (
				1=> array ("0"=>'乙',"color"=>"green","1"=>"Равное плечо"),
				2=> array ("0"=>'甲',"color"=>"green","1"=>"Грабители богатства"),
				3=> array ("0"=>'丁',"color"=>"red","1"=>"Дух пищи"),
				4=> array ("0"=>'丙',"color"=>"red","1"=>"Ранение чиновника"),
				5=> array ("0"=>'己',"color"=>"brown","1"=>"Склонность к богатству"),
				6=> array ("0"=>'戊',"color"=>"brown","1"=>"Стабильное богатство"),
				7=> array ("0"=>'辛',"color"=>"gray","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'庚',"color"=>"gray","1"=>"Правильная власть"),
				9=> array ("0"=>'癸',"color"=>"blue","1"=>"Косая печать"),
				10=> array ("0"=>'壬',"color"=>"blue","1"=>"Прямая печать"),
			);
			return $result;
			break;
		case '丙':
			$result= array (
				1=> array ("0"=>'丙',"color"=>"red","1"=>"Равное плечо"),
				2=> array ("0"=>'丁',"color"=>"red","1"=>"Грабители богатства"),
				3=> array ("0"=>'戊',"color"=>"brown","1"=>"Дух пищи"),
				4=> array ("0"=>'己',"color"=>"brown","1"=>"Ранение чиновника"),
				5=> array ("0"=>'庚',"color"=>"gray","1"=>"Склонность к богатству"),
				6=> array ("0"=>'辛',"color"=>"gray","1"=>"Стабильное богатство"),
				7=> array ("0"=>'壬',"color"=>"blue","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'癸',"color"=>"blue","1"=>"Правильная власть"),
				9=> array ("0"=>'甲',"color"=>"green","1"=>"Косая печать"),
				10=> array ("0"=>'乙',"color"=>"green","1"=>"Прямая печать"),
			);
			return $result;
			break;
		case '丁':
			$result= array (
				1=> array ("0"=>'丁',"color"=>"red","1"=>"Равное плечо"),
				2=> array ("0"=>'丙',"color"=>"red","1"=>"Грабители богатства"),
				3=> array ("0"=>'己',"color"=>"brown","1"=>"Дух пищи"),
				4=> array ("0"=>'戊',"color"=>"brown","1"=>"Ранение чиновника"),
				5=> array ("0"=>'辛',"color"=>"gray","1"=>"Склонность к богатству"),
				6=> array ("0"=>'庚',"color"=>"gray","1"=>"Стабильное богатство"),
				7=> array ("0"=>'癸',"color"=>"blue","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'壬',"color"=>"blue","1"=>"Правильная власть"),
				9=> array ("0"=>'乙',"color"=>"green","1"=>"Косая печать"),
				10=> array ("0"=>'甲',"color"=>"green","1"=>"Прямая печать"),
			);
			return $result;
			break;
		case '戊':
			$result= array (
				1=> array ("0"=>'戊',"color"=>"brown","1"=>"Равное плечо"),
				2=> array ("0"=>'己',"color"=>"brown","1"=>"Грабители богатства"),
				3=> array ("0"=>'庚',"color"=>"gray","1"=>"Дух пищи"),
				4=> array ("0"=>'辛',"color"=>"gray","1"=>"Ранение чиновника"),
				5=> array ("0"=>'壬',"color"=>"blue","1"=>"Склонность к богатству"),
				6=> array ("0"=>'癸',"color"=>"blue","1"=>"Стабильное богатство"),
				7=> array ("0"=>'甲',"color"=>"green","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'乙',"color"=>"green","1"=>"Правильная власть"),
				9=> array ("0"=>'丙',"color"=>"red","1"=>"Косая печать"),
				10=> array ("0"=>'丁',"color"=>"red","1"=>"Прямая печать"),
			);
			return $result;
			break;
		case '己':
			$result= array (
				1=> array ("0"=>'己',"color"=>"brown","1"=>"Равное плечо"),
				2=> array ("0"=>'戊',"color"=>"brown","1"=>"Грабители богатства"),
				3=> array ("0"=>'辛',"color"=>"gray","1"=>"Дух пищи"),
				4=> array ("0"=>'庚',"color"=>"gray","1"=>"Ранение чиновника"),
				5=> array ("0"=>'癸',"color"=>"blue","1"=>"Склонность к богатству"),
				6=> array ("0"=>'壬',"color"=>"blue","1"=>"Стабильное богатство"),
				7=> array ("0"=>'乙',"color"=>"green","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'甲',"color"=>"green","1"=>"Правильная власть"),
				9=> array ("0"=>'丙',"color"=>"red","1"=>"Косая печать"),
				10=> array ("0"=>'丁',"color"=>"red","1"=>"Прямая печать"),
			);
			return $result;
			break;
		case '庚':
			$result= array (
				1=> array ("0"=>'庚',"color"=>"gray","1"=>"Равное плечо"),
				2=> array ("0"=>'辛',"color"=>"gray","1"=>"Грабители богатства"),
				3=> array ("0"=>'壬',"color"=>"blue","1"=>"Дух пищи"),
				4=> array ("0"=>'癸',"color"=>"blue","1"=>"Ранение чиновника"),
				5=> array ("0"=>'甲',"color"=>"green","1"=>"Склонность к богатству"),
				6=> array ("0"=>'乙',"color"=>"green","1"=>"Стабильное богатство"),
				7=> array ("0"=>'丙',"color"=>"red","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'丁',"color"=>"red","1"=>"Правильная власть"),
				9=> array ("0"=>'戊',"color"=>"brown","1"=>"Косая печать"),
				10=> array ("0"=>'己',"color"=>"brown","1"=>"Прямая печать"),
			);
			return $result;
			break;
		case '辛':
			$result= array (
				1=> array ("0"=>'辛',"color"=>"gray","1"=>"Равное плечо"),
				2=> array ("0"=>'庚',"color"=>"gray","1"=>"Грабители богатства"),
				3=> array ("0"=>'癸',"color"=>"blue","1"=>"Дух пищи"),
				4=> array ("0"=>'壬',"color"=>"blue","1"=>"Ранение чиновника"),
				5=> array ("0"=>'乙',"color"=>"green","1"=>"Склонность к богатству"),
				6=> array ("0"=>'甲',"color"=>"green","1"=>"Стабильное богатство"),
				7=> array ("0"=>'丁',"color"=>"red","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'丙',"color"=>"red","1"=>"Правильная власть"),
				9=> array ("0"=>'己',"color"=>"brown","1"=>"Косая печать"),
				10=> array ("0"=>'戊',"color"=>"brown","1"=>"Прямая печать"),
			);
			return $result;
			break;
		case '壬':
			$result= array (
				1=> array ("0"=>'壬',"color"=>"blue","1"=>"Равное плечо"),
				2=> array ("0"=>'癸',"color"=>"blue","1"=>"Грабители богатства"),
				3=> array ("0"=>'甲',"color"=>"green","1"=>"Дух пищи"),
				4=> array ("0"=>'乙',"color"=>"green","1"=>"Ранение чиновника"),
				5=> array ("0"=>'丙',"color"=>"red","1"=>"Склонность к богатству"),
				6=> array ("0"=>'丁',"color"=>"red","1"=>"Стабильное богатство"),
				7=> array ("0"=>'戊',"color"=>"brown","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'己',"color"=>"brown","1"=>"Правильная власть"),
				9=> array ("0"=>'庚',"color"=>"gray","1"=>"Косая печать"),
				10=> array ("0"=>'辛',"color"=>"gray","1"=>"Прямая печать"),
			);
			return $result;
			break;
		case '癸':
			$result= array (
				1=> array ("0"=>'癸',"color"=>"blue","1"=>"Равное плечо"),
				2=> array ("0"=>'壬',"color"=>"blue","1"=>"Грабители богатства"),
				3=> array ("0"=>'乙',"color"=>"green","1"=>"Дух пищи"),
				4=> array ("0"=>'甲',"color"=>"green","1"=>"Ранение чиновника"),
				5=> array ("0"=>'丁',"color"=>"red","1"=>"Склонность к богатству"),
				6=> array ("0"=>'丙',"color"=>"red","1"=>"Стабильное богатство"),
				7=> array ("0"=>'己',"color"=>"brown","1"=>"Убийца на 7й позиции"),
				8=> array ("0"=>'戊',"color"=>"brown","1"=>"Правильная власть"),
				9=> array ("0"=>'辛',"color"=>"gray","1"=>"Косая печать"),
				10=> array ("0"=>'庚',"color"=>"gray","1"=>"Прямая печать"),
			);
			return $result;
			break;
	}
}
function usinCreate($data){
	$start=0;
	$href = array(
		1=>'/img/usin_svg/flame.svg',
		2=>'/img/usin_svg/ground.svg',
		3=>'/img/usin_svg/metal.svg',
		4=>'/img/usin_svg/water.svg',
		5=>'/img/usin_svg/wood.svg');
	if($data[1]['color']=='red'){
		$start=1;
	}else if($data[1]['color']=='brown'){
		$start=2;
	}else if($data[1]['color']=='gray'){
		$start=3;
	}else if($data[1]['color']=='blue'){
		$start=4;
	}else if($data[1]['color']=='green'){
		$start=5;
	}
	// echo $start;
	for ($i=0; $i < count($href); $i++) {
		if ($start>5){
			$start=1;
			$link[]=$href[$start];
		}else{
			$link[]=$href[$start];
		}
		$start++;
	}
	// showArray($link);
	echo "<div class='usin'>
            <img src='/img/usin_svg/arrows.svg' width='300' height='300' alt='usin image'>
            <div class='one one_".$data[1]['color']."'></div>
            <div class='two two_".$data[3]['color']."'></div>
            <div class='three three_".$data[5]['color']."'></div>
            <div class='four four_".$data[7]['color']."'></div>
            <div class='five five_".$data[9]['color']."'></div>
          
            <div class='one_one ".$data[1]['color']."' data-toggle='tooltip' title='Дневная доменанта'>".$data[1]['0']."<br>Дневная доменанта</div>
            <div class='one_two ".$data[1]['color']."' data-toggle='tooltip' title='".$data[1]['1']."'>".$data[1]['0']."<br>".$data[1]['1']."</div>
            <div class='one_three ".$data[2]['color']."' data-toggle='tooltip' title='".$data[2]['1']."'>".$data[2]['0']."<br>".$data[2]['1']."</div>
            <div class='two_one ".$data[3]['color']."' data-toggle='tooltip' title='".$data[3]['1']."'>".$data[3]['0']."<br>".$data[3]['1']."</div>
            <div class='two_two ".$data[4]['color']."' data-toggle='tooltip' title='".$data[4]['1']."'>".$data[4]['0']."<br>".$data[4]['1']."</div>
            <div class='three_one ".$data[5]['color']."' data-toggle='tooltip' title='".$data[5]['1']."'>".$data[5]['0']."<br>".$data[5]['1']."</div>
            <div class='three_two ".$data[6]['color']."' data-toggle='tooltip' title='".$data[6]['1']."'>".$data[6]['0']."<br>".$data[6]['1']."</div>
            <div class='four_one ".$data[7]['color']."' data-toggle='tooltip' title='".$data[7]['1']."'>".$data[7]['0']."<br>".$data[7]['1']."</div>
            <div class='four_two ".$data[8]['color']."' data-toggle='tooltip' title='".$data[8]['1']."'>".$data[8]['0']."<br>".$data[8]['1']."</div>
            <div class='five_one ".$data[9]['color']."' data-toggle='tooltip' title='".$data[9]['1']."'>".$data[9]['0']."<br>".$data[9]['1']."</div>
            <div class='five_two ".$data[10]['color']."' data-toggle='tooltip' title='".$data[10]['1']."'>".$data[10]['0']."<br>".$data[10]['1']."</div>
        </div>";
}
function hiddenStolp($ground){
	$data = bacziData();
	$result='';
		if ($ground=='巳'){
			$result = array(
			'first'=>$data['baczi'][2]['data']['sky'],
			'firstColor'=>$data['baczi'][2]['data']['sky_color'],
			'second'=>$data['baczi'][6]['data']['sky'],
			'secondColor'=>$data['baczi'][6]['data']['sky_color'],
			'three'=>$data['baczi'][4]['data']['sky'],
			'threeColor'=>$data['baczi'][4]['data']['sky_color']);
		}else	if ($ground=='午'){
			$result = array(
			'first'=>$data['baczi'][3]['data']['sky'],
			'firstColor'=>$data['baczi'][3]['data']['sky_color'],
			'second'=>$data['baczi'][5]['data']['sky'],
			'secondColor'=>$data['baczi'][5]['data']['sky_color'],
			'three'=>'&nbsp',
			'threeColor'=>'&nbsp');
		}else if ($ground=='未'){
			$result = array(
			'first'=>$data['baczi'][5]['data']['sky'],
			'firstColor'=>$data['baczi'][5]['data']['sky_color'],
			'second'=>$data['baczi'][3]['data']['sky'],
			'secondColor'=>$data['baczi'][3]['data']['sky_color'],
			'three'=>$data['baczi'][1]['data']['sky'],
			'threeColor'=>$data['baczi'][1]['data']['sky_color']);
		}else if ($ground=='申'){
			$result = array(
			'first'=>$data['baczi'][6]['data']['sky'],
			'firstColor'=>$data['baczi'][6]['data']['sky_color'],
			'second'=>$data['baczi'][8]['data']['sky'],
			'secondColor'=>$data['baczi'][8]['data']['sky_color'],
			'three'=>$data['baczi'][4]['data']['sky'],
			'threeColor'=>$data['baczi'][4]['data']['sky_color']);
		}else if ($ground=='酉'){
			$result = array(
			'first'=>$data['baczi'][7]['data']['sky'],
			'firstColor'=>$data['baczi'][7]['data']['sky_color'],
			'second'=>'&nbsp',
			'secondColor'=>'&nbsp',
			'three'=>'&nbsp',
			'threeColor'=>'&nbsp');
		}else if ($ground=='戌'){
			$result = array(
			'first'=>$data['baczi'][4]['data']['sky'],
			'firstColor'=>$data['baczi'][4]['data']['sky_color'],
			'second'=>$data['baczi'][7]['data']['sky'],
			'secondColor'=>$data['baczi'][7]['data']['sky_color'],
			'three'=>$data['baczi'][3]['data']['sky'],
			'threeColor'=>$data['baczi'][3]['data']['sky_color']);
		}else if ($ground=='亥'){
			$result = array(
			'first'=>$data['baczi'][8]['data']['sky'],
			'firstColor'=>$data['baczi'][8]['data']['sky_color'],
			'second'=>$data['baczi'][0]['data']['sky'],
			'secondColor'=>$data['baczi'][0]['data']['sky_color'],
			'three'=>'&nbsp',
			'threeColor'=>'&nbsp');
		}else if ($ground=='子'){
			$result = array(
			'first'=>$data['baczi'][9]['data']['sky'],
			'firstColor'=>$data['baczi'][9]['data']['sky_color'],
			'second'=>'&nbsp',
			'secondColor'=>'&nbsp',
			'three'=>'&nbsp',
			'threeColor'=>'&nbsp');
		}else if ($ground=='丑'){
			$result = array(
			'first'=>$data['baczi'][5]['data']['sky'],
			'firstColor'=>$data['baczi'][5]['data']['sky_color'],
			'second'=>$data['baczi'][9]['data']['sky'],
			'secondColor'=>$data['baczi'][9]['data']['sky_color'],
			'three'=>$data['baczi'][7]['data']['sky'],
			'threeColor'=>$data['baczi'][7]['data']['sky_color']);
		}else if ($ground=='寅'){
			$result = array(
			'first'=>$data['baczi'][0]['data']['sky'],
			'firstColor'=>$data['baczi'][0]['data']['sky_color'],
			'second'=>$data['baczi'][2]['data']['sky'],
			'secondColor'=>$data['baczi'][2]['data']['sky_color'],
			'three'=>$data['baczi'][4]['data']['sky'],
			'threeColor'=>$data['baczi'][4]['data']['sky_color']);
		}else if ($ground=='卯'){
			$result = array(
			'first'=>$data['baczi'][1]['data']['sky'],
			'firstColor'=>$data['baczi'][1]['data']['sky_color'],
			'second'=>'&nbsp',
			'secondColor'=>'&nbsp',
			'three'=>'&nbsp',
			'threeColor'=>'&nbsp');
		}else if ($ground=='辰'){
			$result = array(
			'first'=>$data['baczi'][4]['data']['sky'],
			'firstColor'=>$data['baczi'][4]['data']['sky_color'],
			'second'=>$data['baczi'][1]['data']['sky'],
			'secondColor'=>$data['baczi'][1]['data']['sky_color'],
			'three'=>$data['baczi'][9]['data']['sky'],
			'threeColor'=>$data['baczi'][9]['data']['sky_color']);
		}
	return $result;
}
function planetSelf($groundYear,$ground, $sex){
	$result = '';
	if ( ($groundYear == '亥')||($groundYear == '子')||($groundYear == '丑') ){
		if (($ground=='寅') && ($sex=='m')){
			$result = '<br>Одинокая планета';
		}
		if (($ground=='戌') && ($sex=='z')){
			$result = '<br>Приют одиночества';
		}
		return $result;
	}
	if ( ($groundYear == '寅')||($groundYear == '卯')||($groundYear == '辰') ){
		if (($ground=='巳') && ($sex=='m')){
			$result = '<br>Одинокая планета';
		}
		if (($ground=='丑') && ($sex=='z')){
			$result = '<br>Приют одиночества';
		}
		return $result;
	}
	if ( ($groundYear == '巳')||($groundYear == '午')||($groundYear == '未') ){
		if (($ground=='申') && ($sex=='m')){
			$result = '<br>Одинокая планета';
		}
		if (($ground=='辰') && ($sex=='z')){
			$result = '<br>Приют одиночества';
		}
		return $result;
	}
	if ( ($groundYear == '申')||($groundYear == '酉')||($groundYear == '戌') ){
		if (($ground=='亥') && ($sex=='m')){
			$result = '<br>Одинокая планета';
		}
		if (($ground=='未') && ($sex=='z')){
			$result = '<br>Приют одиночества';
		}
		return $result;
	}
}
function findMounthAndYear($timestamp,$year,$dateTime){
//	 echo '$timestamp='.$timestamp;
//	echo '$dateTime='.$dateTime;
	$yearBegin = mounthData();
	$yearBegin = $yearBegin[$year];
	$yearCorrection = $yearBegin['correction'];
	$yearBegin = $yearBegin['1'];
	$yearBegin = $yearBegin['begin_date'];
	$yearBegin = explode(' ', $yearBegin);
	$yearBegin = $yearBegin[0].'.'.$year.' '.$yearBegin[1];
	$yearBegin = strtotime($yearBegin);
//	 echo '$yearBegin='.$yearBegin;
	$yearEnd = mounthData();
	$yearEnd = $yearEnd[(int)($year+1)];
	$yearEnd = $yearEnd['1'];
	$yearEnd = $yearEnd['begin_date'];
	$yearEnd = explode(' ', $yearEnd);
	$yearEnd = $yearEnd[0].'.'.(int)($year+1).' '.$yearEnd[1];
	$yearEnd = strtotime($yearEnd);
	$yearEnd = (int)($yearEnd-1);
//	 echo '$yearEnd='.$yearEnd;

	if($timestamp<$yearBegin){
		$lastYear =	mounthData();
		$ly = (int)($year-1);
		$lastYear = $lastYear[$ly];
		// echo '$ly='.$ly;
		$january = $lastYear['11'];
		$january = $january['begin_date'];
		// echo '$january='.$january;
		$january = explode(' ', $january);
		// showArray($january);
		$january = ''.$january[0].'.'.$ly.' '.$january[1];
		// echo '$january[0].$ly.$january[1];='.$january;
		$january = strtotime($january);

		$february = $lastYear['12'];
		$february = $february['begin_date'];
		// echo '$february='.$february;
		$february = explode(' ', $february);
//		 showArray($february);
		$february = ''.$february[0].'.'.$year.' '.$february[1];
		// echo ' $february[0].$ly.$february[1];='.$february;
		$february = strtotime($february);


		if ($timestamp<=$february){

			$mounthCorrection =$lastYear['11']['mounth_correction'];
			$result[0]= correction($mounthCorrection);
			$result[1]= correction($lastYear['correction']);

//			 showArray($result);
//			 echo '<br>yanuary';
		}else if(($timestamp>$february)&&($timestamp<=$yearBegin)){

			$mounthCorrection =$lastYear['12']['mounth_correction'];
			$result[0]= correction($mounthCorrection);
			$result[1]= correction($lastYear['correction']);

//			 showArray($mounth);
			// echo '<br>february';
		}
        $result['china_real_year']=$ly;
	}else if(($timestamp>$yearBegin)&&($timestamp<$yearEnd)){
		$mounth = mounthData();
		$mounth = $mounth[$year];
//		 showArray($mounth);
		$dateTime = explode(' ', $dateTime);
		$date= explode('.',$dateTime[0]);
//		echo $date[1];
		$afterMounth = $mounth[(int)($date[1])];
//		echo '<br>$afterMounth='.showArray($afterMounth);
		$mounth = $mounth[(int)($date[1]-1)];
//		 showArray($afterMounth);showArray($mounth);
		$mounthCorrection = $mounth['mounth_correction'];
		$mounth = $mounth['begin_date'];
//		showArray($mounth);
		$mounth = explode(' ',$mounth);
		$mounth = ''.$mounth[0].'.'.$year.' '.$mounth[1];
//		 echo '<br>$mounth='.$mounth;
		$mounth = strtotime($mounth);
//		 echo '<br>$mounth='.$mounth;
		$afterMounthCorrection = $afterMounth['mounth_correction'];
		$afterMounth = $afterMounth['begin_date'];
		$afterMounth = explode(' ',$afterMounth);
		$afterMounth = ''.$afterMounth[0].'.'.$year.' '.$afterMounth[1];
		// echo '<br>$afterMounth='.$afterMounth;
		$afterMounth = strtotime($afterMounth);
		// echo '<br>$afterMounth='.$afterMounth;
		if (($timestamp>$mounth)&&($timestamp<$afterMounth)){
			$result[0]=correction($mounthCorrection);
			$result[1]=correction($yearCorrection);
//			 print_r($result);
		}else if ($timestamp>$afterMounth){
			$result[0]=correctionPlus($afterMounthCorrection-2);
			$result[1]=correction($yearCorrection);
//			 print_r($result);
		}else if ($timestamp<=$mounth){
			$result[0]=correction($mounthCorrection-1);
			$result[1]=correction($yearCorrection);
//					 print_r($result);
//			 echo '<br>mounth2';
		}
        $result['china_real_year']=$year;
	}
	// showArray( $result);
	return $result;
}
function correction($correction){
	$correction--;
	if ($correction<0){
		$correction = 60-$correction;
	}else if ($correction>=60){
		$correction = $correction - 60;
	}
	return $correction;
}
function correctionPlus($correction){
//    $correction--;
    if ($correction<0){
        $correction = 60-$correction;
    }else if ($correction>=60){
        $correction = $correction - 60;
    }
    return $correction;
}
function findMounthYear($timestamp,$year,$dateTime){
	// echo '$timestamp='.$timestamp;
	$mounthData = mounthData();
	$mounthData = $mounthData[$year];
//	showArray($mounthData);
	$yearEnd = mounthData();
	$yearEnd = $yearEnd[(int)($year+1)];
	$yearEnd = $yearEnd['1'];
	$yearEnd = $yearEnd['begin_date'];
	$yearEnd = explode(' ', $yearEnd);
	$yearEnd = $yearEnd[0].'.'.(int)($year+1).' '.$yearEnd[1];
	$yearEnd = strtotime($yearEnd);
	$yearEnd = (int)($yearEnd-1);
	$first = $mounthData['1'];
	$yearBegin = $first['begin_date'];
	$yearBegin = explode(' ', $yearBegin);
	$yearBeginDate = $yearBegin[0].'.'.$year.' '.$yearBegin[1];
	$yearBeginTimestamp = strtotime($yearBeginDate);
	// echo '$yearBeginTimestamp='.$yearBeginTimestamp;
	if ($timestamp>$yearBeginTimestamp){
		$mounth[1]=$mounthData['correction'];
		// showArray( $mounth);
		$mounthDateTime = explode(' ',$dateTime);
		$mounthDate = explode('.',$mounthDateTime[0]);
		$mounthTime = explode(':',$mounthDateTime[1]);
		$mounthTimestamp = strtotime($mounthDate[0].'.'.$mounthDate[1].'.'.$year.' '.$mounthTime[0].':'.$mounthTime[1]);
		// echo '$mounthTimestamp='.$mounthTimestamp;
		$m=floor($mounthDate[1]);
//		showArray( $mounthDate);
		// $m--;
		$mounthData = mounthData();
		$mounthData = $mounthData[$year];
		$mounthData = $mounthData[$m];
//		showArray($mounthData);
		$mounthBegin = $mounthData['begin_date'];
		$mounthBegin = explode(' ', $mounthBegin);
		$mounthBeginTimestamp = strtotime($mounthBegin[0].'.'.$year.' '.$mounthBegin[1]);
		// echo '$mounthBeginTimestamp='.$mounthBeginTimestamp;
		if ($mounthTimestamp<$mounthBeginTimestamp){
			$mounthCorrection = $mounthData['mounth_correction']-2;
			$mounth[0]=$mounthCorrection;
			echo -2;
		}else{
			$mounth[0]=(int)($mounthData['mounth_correction']-1);
			echo -1;
		}
        $mounth['china_real_year']=$year;
	}else if($timestamp<$yearBeginTimestamp){
		$year--;
		// echo '<br>$year='.$year;
		$mounthData = mounthData();
		$mounthData = $mounthData[$year];
		$yearCorrection =$mounthData['correction'];
		// showArray($mounthData);
		$last = $mounthData['12'];
		$lastBegin = $last['begin_date'];
		$lastBegin = explode(' ',$lastBegin);
		$newYear = $year+1;
		$lastBeginDate = strtotime($lastBegin[0].'.'.$newYear.' '.$lastBegin[1]);
		// echo '$lastBeginDate='.$lastBeginDate;
		if ($timestamp<$lastBeginDate){
			// echo " asdasdasd";
			$mounthData = mounthData();
			$mounthData = $mounthData[$year];
			$almostLast = $mounthData['11'];
			// print_r($almostLast);
			$mounth[0] = $almostLast['mounth_correction']-1;
			$mounth[1] = $mounthData['correction']-1;
			$mounth['china_real_year']=$year-1;

		}else if($timestamp>$lastBeginDate){
			$mounth[0] = $last['mounth_correction'];
			$mounth[1] = $yearCorrection-1;
			$mounth['china_real_year']=$year-1;
		}
	}
	// else if ($timestamp>$yearEnd){
	// 	//if desember and more
	// 	$mounth[0] = 'тут';
	// }
//	showArray( $mounth);
}
function findHour($timestamp){
	$hourCalibration = 25; //1970 год был годом начальным январь секунд до колебровки
	$hour = ($timestamp+3600) / 7200;
	// echo '$hour='.$hour.'<br>';
	$step = round($hour/60 , 5);
	$s = 0.01666667;
	$step = explode('.', round($step , 5)	);
	if (count($step)>1){
		$step = '0.'.$step[1];
		// echo '$step='.$step;
		$hour = $step / $s ;
		$hour = floor($hour);
		// echo '$hour='.$hour;
	}else{
		$hour = 59;
	}
	// echo '$step='.$step;
	// echo '<br>после цикла $hour='.$hour.'<br>';
	$hour = $hour+$hourCalibration;
	$hour --;
	// echo "<br>hourCalibration=".$hour.'<br>';
	if ($hour>=60){
		$hour = $hour-60;
	}
	return $hour;
}
function findHourNew($DayDaminant,$dateTime,$utc,$lat,$lon,$magnet_dec){
    $time = explode(' ', $dateTime);
    $time = explode(':', $time[1]);
    $time = array('hour'=>$time[0], 'min'=>$time[1]);
    $h=0;
    $m=0;
//    echo '<br>';
//    var_dump($magnet_dec);
    if ($magnet_dec=='true'){
        $dec = sunCurcle($utc,$lon);
        if($dec<0){
            $operand = '-';
            $dec = substr($dec,1);
        }else{
            $operand = '+';
        }
        if($dec>60){
            $dec = $dec /60;
//        echo '$dec'.$dec;
            $dec = explode('.', $dec);

            $dechour=$dec[0];
//        echo '$dechour'.$dechour;
            $decmin=$dec[1];
            if($operand=='-'){
                $h = $h-$dechour;
                $m = $m-$decmin;
//            echo '$hour = $time[\'hour\']-$dechour;'.$hour;
                if($m<0){
                    $m = 59 - substr($m,1);
                    $h --;
                }
                if($h<0){
//                echo $hour;
                    $h= 24 - substr($h,1);
                }
//            echo 'hour - ='.$h;
//            echo 'min - ='.$m;
            }else if($operand=='+'){
                $h = $h+$dechour;
                $m = $m+$decmin;
                if($m>59){
                    $m=$m-59;
                    $h++;
                }
                if($h>23){
                    $h = $h-23;
                }
//            echo 'hour + ='.$h;
//            echo 'min + ='.$m;
            }
        }
        else{
            if($operand=='-'){
                $m = $m-$dec;
                if($m<0){
                    $m = 59 - substr($m,1);
                    $h --;
                }
//            echo 'hour2 - ='.$h;
//            echo 'min2 - ='.$m;
            }else if($operand=='+'){
                $m = $m+$dec;
                if($m>59){
                    $m=$m-59;
                    $h++;
                }
//            echo 'hour2 + ='.$h;
//            echo 'min2 + ='.$m;
            }
        }
    }
//    echo '$hour'.$time['hour'].' '.'$min'.$time['min'];
//    showArray($time);

    if ((($time['hour']==($h-1)||$time['hour']==($h+22))&&$time['min']>=$m)||(($time['hour']==($h+22)||$time['hour']==($h-1))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 0;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 12;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 24;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 36;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 48;
            return $result;
        }
    }else if ((($time['hour']==$h||$time['hour']==($h+1))&&$time['min']>=$m)||(($time['hour']==$h||$time['hour']==($h+1))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 1;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 13;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 25;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 37;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 49;
            return $result;
        }
    }else if ((($time['hour']==($h+2)||$time['hour']==($h+3))&&$time['min']>=$m)||(($time['hour']==($h+2)||$time['hour']==($h+3))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 2;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 14;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 26;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 38;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 50;
            return $result;
        }
    }else if ((($time['hour']==($h+4)||$time['hour']==($h+5))&&$time['min']>=$m)||(($time['hour']==($h+4)||$time['hour']==($h+5))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 3;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 15;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 27;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 39;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 51;
            return $result;
        }
    }else if ((($time['hour']==($h+6)||$time['hour']==($h+7))&&$time['min']>=$m)||(($time['hour']==($h+6)||$time['hour']==($h+7))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 4;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 16;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 28;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 40;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 52;
            return $result;
        }
    }else if ((($time['hour']==($h+8)||$time['hour']==($h+9))&&$time['min']>=$m)||(($time['hour']==($h+8)||$time['hour']==($h+9))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 5;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 17;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 29;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 41;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 53;
            return $result;
        }
    }else if ((($time['hour']==($h+10)||$time['hour']==($h+11))&&$time['min']>=$m)||(($time['hour']==($h+10)||$time['hour']==($h+11))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 6;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 18;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 30;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 42;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 54;
            return $result;
        }
    }else if ((($time['hour']==($h+12)||$time['hour']==($h+13))&&$time['min']>=$m)||(($time['hour']==($h+12)||$time['hour']==($h+13))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 7;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 19;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 31;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 43;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 55;
            return $result;
        }
    }else if ((($time['hour']==($h+14)||$time['hour']==($h+15))&&$time['min']>=$m)||(($time['hour']==($h+14)||$time['hour']==($h+15))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 8;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 20;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 32;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 44;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 56;
            return $result;
        }
    }else if ((($time['hour']==($h+16)||$time['hour']==($h+17))&&$time['min']>=$m)||(($time['hour']==($h+16)||$time['hour']==($h+17))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 9;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 21;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 33;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 45;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 57;
            return $result;
        }
    }else if ((($time['hour']==($h+18)||$time['hour']==($h+19))&&$time['min']>=$m)||(($time['hour']==($h+18)||$time['hour']==($h+19))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 10;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 22;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 34;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 46;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 58;
            return $result;
        }
    }else if ((($time['hour']==($h+20)||$time['hour']==($h+21))&&$time['min']>=$m)||(($time['hour']==($h+20)||$time['hour']==($h+21))&&$time['min']<=($m+59))){
        if($DayDaminant=='己'||$DayDaminant=='甲'){
            return $result = 11;
        }else if($DayDaminant=='庚'||$DayDaminant=='乙'){
            $result = 23;
            return $result;
        }else if($DayDaminant=='丙'||$DayDaminant=='辛'){
            $result = 35;
            return $result;
        }else if($DayDaminant=='丁'||$DayDaminant=='壬'){
            $result = 47;
            return $result;
        }else if($DayDaminant=='戊'||$DayDaminant=='癸'){
            $result = 59;
            return $result;
        }
    }
}
function findHourTable($DD, $DateTime,$magnet_dec,$utc,$lat,$lon){
    $time = array ('hour'=> (int)explode(':',explode(' ',$DateTime)[1])[0],'min'=>(int)explode(':',explode(' ',$DateTime)[1])[1]);
//    $time = explode(' ',$DateTime)[1];
//    echo $time;
    $hour = 0;
    $min = 0;
    if($magnet_dec=='true'){
        $magnet = sunCurcle($utc,$lon);
//        showArray($magnet);
//        if($magnet<0){
//            $operand = '-';
//            $magnet = $magnet * (-1);
//        }
//        if($magnet>59){
//            $count = explode('.',($magnet /60))[0];
//            $m = $magnet;
//            for($i=0;$i<$count;$i++){
//                $m = $m-60;
//            }
//            $t = array('h'=>explode('.',($magnet /60))[0],'m'=>$m,'operand'=>$operand);
////            showArray( $t );
//        }else{
//            $t = array('h'=>explode('.',($magnet /60))[0],'m'=>$magnet,'operand'=>$operand);
////            showArray( $t );
//        }
//        if($t['operand']=='-'){
//            $min=$min-$t['m'];
//            if($min<0) {
//                $min= 59 + $min;
//                $hour--;
//                if ($hour< 0) {
//                    $hour = 24 + $hour;
//                    $day = -1;
//                }
//            }
//            $hour=$hour-$t['h'];
//            if($hour<0){
//                $hour=24+$hour;
//                $day = -1;
//            }
//        }else{
//            $hour=$hour+$t['h'];
//            if($hour>23){
//                $hour=$hour-23;
//                $day=1;
//            }
//            $min=$min+$t['m'];
//            if($min>59){
//                $min=$min-59;
//                $hour++;
//                if($hour>23){
//                    $hour=$hour-23;
//                    $day=1;
//                }
//            }
//        }
    }

    $res = explode(':',timeCurcle('23:00',$magnet,true));
    $resMax = explode(':',timeCurcle('23:59',$magnet,true));
    $res2 = explode(':',timeCurcle('00:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('00:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>48);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>36);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>24);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>12);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>0);
        }
    }

    $res = explode(':',timeCurcle('01:00',$magnet,true));
    $resMax = explode(':',timeCurcle('01:59',$magnet,true));
    $res2 = explode(':',timeCurcle('02:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('02:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>49);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>37);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>25);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>13);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>1);
        }
    }
    $res = explode(':',timeCurcle('03:00',$magnet,true));
    $resMax = explode(':',timeCurcle('03:59',$magnet,true));
    $res2 = explode(':',timeCurcle('04:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('04:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>50);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>38);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>26);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>14);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>2);
        }
    }
    $res = explode(':',timeCurcle('05:00',$magnet,true));
    $resMax = explode(':',timeCurcle('05:59',$magnet,true));
    $res2 = explode(':',timeCurcle('06:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('06:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>51);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>39);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>27);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>15);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>3);
        }
    }
    $res = explode(':',timeCurcle('07:00',$magnet,true));
    $resMax = explode(':',timeCurcle('07:59',$magnet,true));
    $res2 = explode(':',timeCurcle('08:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('08:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>52);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>40);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>28);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>16);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>4);
        }
    }
    $res = explode(':',timeCurcle('09:00',$magnet,true));
    $resMax = explode(':',timeCurcle('09:59',$magnet,true));
    $res2 = explode(':',timeCurcle('10:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('10:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>53);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>41);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>29);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>17);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>5);
        }
    }
    $res = explode(':',timeCurcle('11:00',$magnet,true));
    $resMax = explode(':',timeCurcle('11:59',$magnet,true));
    $res2 = explode(':',timeCurcle('12:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('12:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>54);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>42);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>30);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>18);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>6);
        }
    }
    $res = explode(':',timeCurcle('13:00',$magnet,true));
    $resMax = explode(':',timeCurcle('13:59',$magnet,true));
    $res2 = explode(':',timeCurcle('14:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('14:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>55);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>43);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>31);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>19);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>7);
        }
    }
    $res = explode(':',timeCurcle('15:00',$magnet,true));
    $resMax = explode(':',timeCurcle('15:59',$magnet,true));
    $res2 = explode(':',timeCurcle('16:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('16:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
        //echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>56);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>44);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>32);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>20);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>8);
        }
    }
    $res = explode(':',timeCurcle('17:00',$magnet,true));
    $resMax = explode(':',timeCurcle('17:59',$magnet,true));
    $res2 = explode(':',timeCurcle('18:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('18:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>57);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>45);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>33);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>21);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>9);
        }
    }
    $res = explode(':',timeCurcle('19:00',$magnet,true));
    $resMax = explode(':',timeCurcle('19:59',$magnet,true));
    $res2 = explode(':',timeCurcle('20:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('20:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>58);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>46);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>34);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>22);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>10);
        }
    }
    $res = explode(':',timeCurcle('21:00',$magnet,true));
    $resMax = explode(':',timeCurcle('21:59',$magnet,true));
    $res2 = explode(':',timeCurcle('22:00',$magnet,true));
    $resMax2 = explode(':',timeCurcle('22:59',$magnet,true));
    //        echo "res";showArray($res);echo "resMax";showArray($resMax);
    if(($time['hour']==$res[0]&&$time['min']>=$res[1]||$time['hour']==$resMax[0]&&$time['min']<=$resMax[1])||($time['hour']==$res2[0]&&$time['min']>=$res2[1]||$time['hour']==$resMax2[0]&&$time['min']<=$resMax2[1])){
        if($DD=='戊'||$DD=='癸'){
    //    echo '$time='.$time['hour'].":".$time['min'].' $magnet='.$res[0].':'.$res[1].'<>'.$resMax[0].":".$resMax[1].' $magnet2='.$res2[0].':'.$res2[1].'<>'.$resMax2[0].":".$resMax2[1];
        $result=array('hour'=>59);
        }
        if($DD=='壬'||$DD=='丁'){
            $result=array('hour'=>47);
        }
        if($DD=='丙'||$DD=='辛'){
            $result=array('hour'=>35);
        }
        if($DD=='庚'||$DD=='乙'){
            $result=array('hour'=>23);
        }
        if($DD=='甲'||$DD=='己'){
            $result=array('hour'=>11);
        }
    }

    return $result;
}
function findYear($timestamp){
	$yearCalibration = 47; //корректировка на 1970 год
	//расчте года
		$year = $timestamp / 31536000;
		$year = floor($year);
		$year = $yearCalibration + $year;
		$year --; // Адаптация к массиву нахчало с 0 а данные с 1
		if ($year>=60){
			$year = $year-60;
		}
	return $year;
}
function findDayNew($timestamp){
//    echo '$timestamp='.$timestamp;
    $dayCalibration = 17;  // дневная калибровка ориг 17
    $day = $timestamp / (3600 * 24);
    if ($day<0){
        $operand='-';
        $day = substr($day,1);
    }else{
        $operand='+';
    }
//    echo '$operand='.$operand;
    $day = intval($day);
//    echo '$day='.$day;
    if($operand=='-'){
        $step = $day/60;
        $step = explode('.',$step);
        if($step[0]>1){
//            print_r($step);
            $step='0.'.$step[1];
            $day = $step*60;
            $day = $dayCalibration-intval($day);
            if($day<0){
                $day=60+$day;
            }
        }else{
            $day = $dayCalibration-intval($day);
            if($day<0){
                $day=60+$day;
            }
        }

    }else if($operand=='+'){
        $step = $day/60;
        $step = explode('.',$step);
        if($step[0]>1){
//            print_r($step);
            $step='0.'.$step[1];
            $day = $step*60;
            $day = $dayCalibration+intval($day);
//            echo '$day='.$day;
            if($day>60){
                $day=$day-60;
//                echo '$day='.$day;
            }
        }else{
            $day = $dayCalibration+intval($day);
//            echo '$day='.$day;
            if($day>60){
                $day=$day-60;
//                echo '$day='.$day;
            }
        }

    }
    return $day;
}
function findDay($timestamp){

	$dayCalibration = 17; // дневная калибровка ориг 17
	$day = $timestamp / (3600 * 24);
//	 echo "<br>day= '".$day."'<br>";
// 	$d= floor($day).'.0409';
//	 echo "<br>d= '".$d."'<br>";
	if ($day>$d){
			$step = floor($day)/60;
//			 echo '$step='.$step;
			$step = explode('.', round($step , 5)	);
//			 print_r($step);
			$s = 0.01667;
			if (count($step)>1){
				$step = '0.'.$step[1];
				// echo '$step='.$step;
				$day = $step / $s ;
				$day = floor($day);
//				 echo '$$day='.$day;
			}else{
				$day = 59;
			}
			$day = $dayCalibration + $day;
			$day++;
				if ($day>=60){
					$day = $day-60;
				}

		}else if ($day<$d){
			$step = floor($day)/60;
//			 echo '$step='.$step;
			$step = explode('.', round($step , 5)	);
			// print_r($step);
			$s = 0.01667;
			if (count($step)>1){
				$step = '0.'.$step[1];
				// echo '$step='.$step;
				$day = $step / $s ;
				$day = floor($day);
				// echo '$$day='.$day;
			}else{
				$day = 59;
			}
			$day = $dayCalibration + $day;
			if ($day>=60){
				$day = $day-60;
			}
	}
//	echo '$day='.$day;
	return $day;
}
function findDayProc($datatime){
    $dayCalibration = 17;
    $datetime1 = date_create('1970-01-01');
    $datetime2 = date_create($datatime);
    $interval = date_diff($datetime1, $datetime2);
    $day = $interval->format('%R%a дней');
    if ($day<0){
        $operand='-';
        $day = substr($day,1);
    }else{
        $operand='+';
        $day = substr($day,1);
    }
    $step=$day /60;
    $step=explode('.',$step);
    $step=$step[0];
    for ($i=0; $i<$step; $i++){
        $day=$day-60;
    }
    if($operand=='-'){
        $days=$dayCalibration-$day;
        if($days<0){
            $days=60+$days;
        }
    }else if($operand=='+'){
        $days=$dayCalibration+$day;
        if($days>59){
            $days=$days-60;
        }
    }

    return $days;
}
function createMap($data,$takt,$thisYear){
//    showArray($data);
//    showArray($takt);
//    showArray($thisYear);

//    createTable(,$thisYear['ground'],'',$thisYear['sky_color'],$thisYear['ground_color'],$thisResultSkyGround,'',$thisFazi,$thisHiddenStolp,array('skyCaption'=>'&nbsp','groundCaption'=>'&nbsp'),'position: relative; left: 40px;');
	echo "<table class='table' style='width: 111px'>";
	echo "<thead><tr><th>час</th><th>день</th><th>месяц</th><th>год</th><th style='border-left: 1px solid rgba(133, 133, 133, 0.5); border-right: 1px solid rgba(133, 133, 133, 0.5); border-top: none; border-bottom: none;'></th><th>Такт&nbsp".$takt[0]."</th><th>".date('Y')."</th><tr></thead>";
	echo "<tbody>
		<tr>
			<td class='godsCaption'>".$data['usinHourSky']."</td>
			<td class='godsCaption'>".$data['usinDaySky']."</td>
			<td class='godsCaption'>".$data['usinMounthSky']."</td>
			<td class='godsCaption'>".$data['usinYearSky']."</td>
			<td rowspan='10' style='border-left: 1px solid rgba(133, 133, 133, 0.5); border-right: 1px solid rgba(133, 133, 133, 0.5); border-top: none; border-bottom: none;'></td>
			<td class='godsCaption'>".$data['usinTakt']."</td>
			<td class='godsCaption'>".$data['usinThisYear']."</td>
		</tr>
        
		<tr>
			<td class='nebesElem' data-toggle='tooltip' title='Небесный элемент'>".$data['HskyGrondCaption']['skyCaption']."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Небесный элемент'>".$data['DskyGrondCaption']['skyCaption']."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Небесный элемент'>".$data['MskyGrondCaption']['skyCaption']."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Небесный элемент'>".$data['YskyGrondCaption']['skyCaption']."</td>

			<td class='nebesElem' data-toggle='tooltip' title='Небесный элемент'>".$takt['11']."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Небесный элемент'>".$thisYear['sky_elem']."</td>
		</tr>
		<tr>
			<td class='ieroglif ".$data['HskyColor']."' data-toggle='tooltip' title='".$data['HskyTitle']."'>".$data['Hsky']."<span class='numbers'>".$data['Hnumber']."</span></td>
			<td class='ieroglif ".$data['DskyColor']."' data-toggle='tooltip' title='".$data['DskyTitle']."'>".$data['Dsky']."<span class='numbers'>".$data['Dnumber']."</span></td>
			<td class='ieroglif ".$data['MskyColor']."' data-toggle='tooltip' title='".$data['MskyTitle']."'>".$data['Msky']."<span class='numbers'>".$data['Mnumber']."</span></td>
			<td class='ieroglif ".$data['YskyColor']."' data-toggle='tooltip' title='".$data['YskyTitle']."'>".$data['Ysky']."<span class='numbers'>".$data['Ynumber']."</span></td>
			
			<td class='ieroglif ".$takt[5]."' data-toggle='tooltip' title=''>".$takt[2]."</td>
			<td class='ieroglif ".$thisYear['sky_color']."' data-toggle='tooltip' title=''>".$thisYear['sky']."</td>
		</tr>
		<tr>
			<td class='ieroglif ".$data['HgroundColor']." ".$data['HEgroud_Color']."' data-toggle='tooltip' title='".$data['HgroundTitle']."'>".$data['HGround']."</td>
			<td class='ieroglif ".$data['DgroundColor']." ".$data['DEgroud_Color']."' data-toggle='tooltip' title='".$data['DgroundTitle']."'>".$data['DGround']."</td>
			<td class='ieroglif ".$data['MgroundColor']." ".$data['MEgroud_Color']."' data-toggle='tooltip' title='".$data['MgroundTitle']."'>".$data['MGround']."</td>
			<td class='ieroglif ".$data['YgroundColor']." ".$data['YEgroud_Color']."' data-toggle='tooltip' title='".$data['YgroundTitle']."'>".$data['YGround']."</td>
			
			<td class='ieroglif ".$takt[6]."' data-toggle='tooltip' title=''>".$takt[3]."</td>
			<td class='ieroglif ".$thisYear['ground_color']."' data-toggle='tooltip' title=''>".$thisYear['ground']."</td>
		</tr>
		<tr>
            <td class='godsCaption'>".$data['HgroundAnimal']."</td>
            <td class='godsCaption'>".$data['DgroundAnimal']."</td>
            <td class='godsCaption'>".$data['MgroundAnimal']."</td>
            <td class='godsCaption'>".$data['YgroundAnimal']."</td>
            <td class='godsCaption'>".$takt['14']."</td>
            <td class='godsCaption'>".$thisYear['ground_animal']."</td>
        </tr>
		<tr>
			<td class='nebesElem' data-toggle='tooltip' title='Земной элемент'>".$data['HskyGrondCaption']['groundCaption']."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Земной элемент'>".$data['DskyGrondCaption']['groundCaption']."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Земной элемент'>".$data['MskyGrondCaption']['groundCaption']."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Земной элемент'>".$data['YskyGrondCaption']['groundCaption']."</td>
			
			<td class='nebesElem' data-toggle='tooltip' title='Земной элемент'>".$takt['12']."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Земной элемент'>".$thisYear['ground_elem']."</td>
		</tr>
		<tr>
			<td class='nebesElem' data-toggle='tooltip' title='Фазы'>".substr($data['Hfazi'],4)."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Фазы'>".substr($data['Dfazi'],4)."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Фазы'>".substr($data['Mfazi'],4)."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Фазы'>".substr($data['Yfazi'],4)."</td>
			
			<td class='nebesElem' data-toggle='tooltip' title='Фазы'>".substr($takt[9],4)."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Фазы'>".substr($thisYear['thisFazi'],4)."</td>
		</tr>
		<tr>
			<td class='nebesElem' data-toggle='tooltip' title='Символические звёзды'>".substr($data['HangelDemon'],4)."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Символические звёзды'>".substr($data['DangelDemon'],4)."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Символические звёзды'>".substr($data['MangelDemon'],4)."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Символические звёзды'>".substr($data['YangelDemon'],4)."</td>
			
			<td class='nebesElem' data-toggle='tooltip' title='Символические звёзды'>".substr($takt[7],4)."</td>
			<td class='nebesElem' data-toggle='tooltip' title='Символические звёзды'>".substr($thisYear['thisResultSkyGround'],4)."</td>
		</tr>
		<tr>
			<td style='border-top: 5px solid rgba(133, 133, 133, 1);' data-toggle='tooltip' title='Скрытый небесный ствол' class='".$data['HstolpEmptiness']."'>".$data['Hstolp']."</td>
			<td style='border-top: 5px solid rgba(133, 133, 133, 1);' data-toggle='tooltip' title='Скрытый небесный ствол' class='".$data['DstolpEmptiness']."'>".$data['Dstolp']."</td>
			<td style='border-top: 5px solid rgba(133, 133, 133, 1);' data-toggle='tooltip' title='Скрытый небесный ствол' class='".$data['MstolpEmptiness']."'>".$data['Mstolp']."</td>
			<td style='border-top: 5px solid rgba(133, 133, 133, 1);' data-toggle='tooltip' title='Скрытый небесный ствол' class='".$data['YstolpEmptiness']."'>".$data['Ystolp']."</td>
			
			<td style='border-top: 5px solid rgba(133, 133, 133, 1);' data-toggle='tooltip' title='Скрытый небесный ствол' >".$takt[10]."</td>
			<td style='border-top: 5px solid rgba(133, 133, 133, 1);' data-toggle='tooltip' title='Скрытый небесный ствол' >".$thisYear['thisHiddenStolp']."</td>
		</tr>
	</tbody></table>";
}
function createTable($label,$number,$sky,$ground,$caption,$sky_color,$ground_color,$angelDemon='&nbsp',$yearTitle='&nbsp',$fazi='&nbsp',$hiddenStolp='',$skyGrondCaption=array('skyCaption'=>'&nbsp','groundCaption'=>'&nbsp'),$addcss=''){
	echo "<table class='table baczi text-center' style='max-width:100%; height: auto;".$addcss."' >
		<thead>
			<tr>
				<th>".$label."</th>
			</tr>
		</thead>
		<tbody>
			<!--<tr>
				<td>".$yearTitle."</td>
			</tr>-->
			<tr>
				<td class='numbers'>$number</td>
			</tr>
			<tr><td style='font-size: 12px; text-align: center; text-indent: 0;'>".$skyGrondCaption['skyCaption']."</td></tr>
			<tr>
				<td class='ieroglif ".$sky_color."'>$sky</td>
			</tr>
			<tr>
				<td class='ieroglif ".$ground_color."'>$ground</td>
			</tr>
			<tr><td style='font-size: 12px; text-align: center; text-indent: 0;'>".$skyGrondCaption['groundCaption']."</td></tr>
			<tr>
				<td style='font-size: 16px; text-align: center; text-indent: 0;'>$caption</td>
			</tr>
			<tr>
				<td style='font-size: 14px; text-align: center; text-indent: 0;'>$fazi</td>
			</tr>
			<tr>
				<td style='font-size: 14px'>$angelDemon</td>
			</tr>
			<tr>
				<td style='border: 1px solid rgba(133, 133, 133, 0.5);border-top: 5px solid rgba(133, 133, 133, 1);'>$hiddenStolp</td>
			</tr>
		</tbody>
	</table>";
}
function searchAngelDemon($daySky, $ground,$D_or_Y=''){
	$newGround = '';
	switch ($daySky) {
		case '甲':
			if($ground == '丑' || $ground == '未'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '寅' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '巳' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '卯' ){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '午' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '辰' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '丑' || $ground=='辰' || $ground=='未' || $ground=='戌' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
		case '乙':
			if($ground == '申' || $ground == '子'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '卯' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '午' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '寅' || $ground='辰'){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '午' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '巳' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '丑' || $ground=='辰' || $ground=='未' || $ground=='戌' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
		case '丙':
			if($ground == '酉' || $ground == '亥'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '巳' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '申' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '午' ){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '寅' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '未' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '丑' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
		case '丁':
			if($ground == '酉' || $ground == '亥'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '午' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '酉' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '巳'|| $ground == '未'){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '未' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '申' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '丑' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
		case '戊':
			if($ground == '丑' || $ground == '未'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '巳' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '申' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '午' ){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '辰' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '未' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '辰' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
		case '己':
			if($ground == '申' || $ground == '子'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '午' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '酉' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '巳'|| $ground == '未'){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '辰' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '申' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '辰' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
		case '庚':
			if($ground == '丑' || $ground == '未'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '申' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '亥' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '酉'){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '戌' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '戌' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '未' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
		case '辛':
			if($ground == '午' || $ground == '寅'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '酉' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '子' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '申'|| $ground == '戌'){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '酉' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '亥' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '未' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
		case '壬':
			if($ground == '卯' || $ground == '巳'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '亥' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '寅' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '子' ){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '子' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '丑' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '戌' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
		case '癸':
			if($ground == '卯' || $ground == '巳'){
				$newGround .= '<br>Благородный человек'.$D_or_Y;
			}
			if($ground == '子' ){
				$newGround .= '<br>Процветание 10 небесных стволов'.$D_or_Y;
			}
			if($ground == '卯' ){
				$newGround .= '<br>Звезда Академика'.$D_or_Y;
			}
			if($ground == '亥' ||$ground == '丑'){
				$newGround .= '<br>Овечий нож'.$D_or_Y;
			}
			if($ground == '申' ){
				$newGround .= '<br>Демон Красной Красоты'.$D_or_Y;
			}
			if($ground == '寅' ){
				$newGround .= '<br>Золотая Карета'.$D_or_Y;
			}
			if($ground == '戌' ){
				$newGround .= '<br>Хранилища'.$D_or_Y;
			}
			return $newGround;
			break;
	}
}
function searchAngelDemonCaption($sky){
    $result = '';
    switch ($sky) {
        case '甲':
        	$result=array('Благородный человек'=>'丑未','Процветание 10 небесных стволов'=>'寅','Звезда Академика'=>'巳');
            return $result;
            break;
        case '乙':
        	$result=array('Благородный человек'=>'申子','Процветание 10 небесных стволов'=>'卯','Звезда Академика'=>'午');
            return $result;
        	break;
        case '丙':
        	$result=array('Благородный человек'=>'酉亥','Процветание 10 небесных стволов'=>'巳','Звезда Академика'=>'申');
            return $result;
        	break;
        case '丁':
        	$result=array('Благородный человек'=>'酉亥','Процветание 10 небесных стволов'=>'午','Звезда Академика'=>'酉');
            return $result;
        	break;
        case '戊':
        	$result=array('Благородный человек'=>'丑未','Процветание 10 небесных стволов'=>'巳','Звезда Академика'=>'申');
            return $result;
        	break;
        case '己':
        	$result=array('Благородный человек'=>'申子','Процветание 10 небесных стволов'=>'午','Звезда Академика'=>'酉');
            return $result;
        	break;
        case '庚':
        	$result=array('Благородный человек'=>'丑未','Процветание 10 небесных стволов'=>'申','Звезда Академика'=>'亥');
            return $result;
        	break;
        case '辛':
        	$result=array('Благородный человек'=>'午寅','Процветание 10 небесных стволов'=>'酉','Звезда Академика'=>'子');
            return $result;
        	break;
        case '壬':
        	$result=array('Благородный человек'=>'卯巳','Процветание 10 небесных стволов'=>'亥','Звезда Академика'=>'寅');
            return $result;
        	break;
        case '癸':
        	$result=array('Благородный человек'=>'卯巳','Процветание 10 небесных стволов'=>'子','Звезда Академика'=>'卯');
            return $result;
        	break;
    }
}
function fenixKungan($sky, $ground){
	$newGround = '';
	switch ($sky) {
		case '甲':
			if($ground == '辰' ){
				$newGround .= '<br>Одинокий Феникс';
			}
			return $newGround;
			break;
		case '乙':
			if($ground == '巳' ){
				$newGround .= '<br>Одинокий Феникс';
			}
			return $newGround;
			break;
		case '丙':
			if($ground == '午' ){
				$newGround .= '<br>Одинокий Феникс';
			}
			return $newGround;
			break;
		case '丁':
			if($ground == '巳' ){
				$newGround .= '<br>Одинокий Феникс';
			}
			return $newGround;
			break;
		case '戊':
			if($ground == '戌' ){
				$newGround .= '<br>Куйганг';
			}
			if($ground == '申' ){
				$newGround .= '<br>Одинокий Феникс';
			}
			if($ground == '午' ){
				$newGround .= '<br>Одинокий Феникс';
			}
			return $newGround;
			break;
		case '庚':
			if($ground == '戌' ){
				$newGround .= '<br>Куйганг';
			}
			if($ground == '辰' ){
				$newGround .= '<br>Куйганг';
			}
			return $newGround;
			break;
		case '辛':
			if($ground == '亥' ){
				$newGround .= '<br>Одинокий Феникс';
			}
			return $newGround;
			break;
		case '壬':
			if($ground == '辰' ){
				$newGround .= '<br>Куйганг';
			}
			if($ground == '寅' ){
				$newGround .= '<br>Одинокий Феникс';
			}
			if($ground == '子' ){
				$newGround .= '<br>Одинокий Феникс';
			}
			return $newGround;
			break;
	}
}
function searchAngelDemonGround($dayGround, $ground,$D_or_Y=''){
	$newGround = '';
	switch ($dayGround) {
		case '申':
				if($ground == '酉'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '寅'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '子' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '辰' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '巳' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '亥' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '午' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '子':
				if($ground == '酉'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '寅'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '子' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '辰' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '巳' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '亥' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '午' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '辰':
				if($ground == '酉'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '寅'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '子' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '辰' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '巳' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '亥' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '午' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '亥':
				if($ground == '子'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '巳'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '卯' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '未' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '申' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '寅' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '酉' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '卯':
				if($ground == '子'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '巳'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '卯' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '未' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '申' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '寅' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '酉' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '未':
				if($ground == '子'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '巳'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '卯' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '未' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '申' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '寅' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '酉' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '寅':
				if($ground == '卯'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '申'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '午' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '戌' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '亥' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '巳' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '子' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '午':
				if($ground == '卯'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '申'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '午' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '戌' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '亥' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '巳' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '子' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '戌':
				if($ground == '卯'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '申'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '午' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '戌' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '亥' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '巳' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '子' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '巳':
				if($ground == '午'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '亥'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '酉' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '丑' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '寅' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '申' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '卯' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '酉':
				if($ground == '午'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '亥'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '酉' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '丑' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '寅' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '申' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '卯' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
		case '丑':
				if($ground == '午'){
					$newGround .= '<br>Цветение персика'.$D_or_Y;
				}
				if($ground == '亥'){
					$newGround .= '<br>Почтовая лошадь'.$D_or_Y;
				}
				if($ground == '酉' ){
					$newGround .= '<br>Звезда Генерала'.$D_or_Y;
				}
				if($ground == '丑' ){
					$newGround .= '<br>Цветущий балдахин'.$D_or_Y;
				}
				if($ground == '寅' ){
					$newGround .= '<br>Демон Грабежа'.$D_or_Y;
				}
				if($ground == '申' ){
					$newGround .= '<br>Демон Уничтожения'.$D_or_Y;
				}
				if($ground == '卯' ){
					$newGround .= '<br>Звезда бедствий'.$D_or_Y;
				}
			break;
	}
	return $newGround;
}
function searchGeneralStar($dayGround, $ground){
    $newGround = '';
    switch ($dayGround) {
        case '申':
            if($ground == '子' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '子':
            if($ground == '子' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '辰':
            if($ground == '子' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '亥':
            if($ground == '卯' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '卯':
            if($ground == '卯' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '未':
            if($ground == '卯' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '寅':
            if($ground == '午' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '午':
            if($ground == '午' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '戌':
            if($ground == '午' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '巳':
            if($ground == '酉' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '酉':
            if($ground == '酉' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
        case '丑':
            if($ground == '酉' ){
                $newGround .= '<br>Звезда Генерала';
            }
            break;
    }
    return $newGround;
}
function searchAngelDemonGroundCaption($ground){
    $result = '';
    switch ($ground) {
        case '申':
        	$result=array('Цветение персика'=>'酉','Почтовая лошадь'=>'寅');
            break;
        case '子':
        	$result=array('Цветение персика'=>'酉','Почтовая лошадь'=>'寅');
            break;
        case '辰':
        	$result=array('Цветение персика'=>'酉','Почтовая лошадь'=>'寅');
            break;
        case '亥':
        	$result=array('Цветение персика'=>'子','Почтовая лошадь'=>'巳');
            break;
        case '卯':
        	$result=array('Цветение персика'=>'子','Почтовая лошадь'=>'巳');
            break;
        case '未':
        	$result=array('Цветение персика'=>'子','Почтовая лошадь'=>'巳');
            break;
        case '寅':
        	$result=array('Цветение персика'=>'卯','Почтовая лошадь'=>'申');
            break;
        case '午':
        	$result=array('Цветение персика'=>'卯','Почтовая лошадь'=>'申');
            break;
        case '戌':
        	$result=array('Цветение персика'=>'卯','Почтовая лошадь'=>'申');
            break;
        case '巳':
        	$result=array('Цветение персика'=>'午','Почтовая лошадь'=>'亥');
            break;
        case '酉':
        	$result=array('Цветение персика'=>'午','Почтовая лошадь'=>'亥');
            break;
        case '丑':
        	$result=array('Цветение персика'=>'午','Почтовая лошадь'=>'亥');
            break;
    }
    return $result;
}
function yearLive($startYear){
	$data = bacziData();
	$sYear = gmdate('Y', $startYear);
//	$sYear ++;
//	 echo $sYear;
	$findYear = findYear($startYear);
//	echo '$findYear='.$findYear;
//	$findYear++;
	for ($i=1; $i <= 100 ; $i++) {
		if ($i <=10){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['10'][$i]['sky_color'] = $d['sky_color'];
				$result['10'][$i]['sky'] = $d['sky'];
				$result['10'][$i]['ground_color'] = $d['ground_color'];
				$result['10'][$i]['ground'] = $d['ground'];
				$result['10'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['10'][$i]['sky_color'] = $d['sky_color'];
				$result['10'][$i]['sky'] = $d['sky'];
				$result['10'][$i]['ground_color'] = $d['ground_color'];
				$result['10'][$i]['ground'] = $d['ground'];
				$result['10'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}else if ($i<=20){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['9'][$i]['sky_color'] = $d['sky_color'];
				$result['9'][$i]['sky'] = $d['sky'];
				$result['9'][$i]['ground_color'] = $d['ground_color'];
				$result['9'][$i]['ground'] = $d['ground'];
				$result['9'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['9'][$i]['sky_color'] = $d['sky_color'];
				$result['9'][$i]['sky'] = $d['sky'];
				$result['9'][$i]['ground_color'] = $d['ground_color'];
				$result['9'][$i]['ground'] = $d['ground'];
				$result['9'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}else if ($i<=30){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['8'][$i]['sky_color'] = $d['sky_color'];
				$result['8'][$i]['sky'] = $d['sky'];
				$result['8'][$i]['ground_color'] = $d['ground_color'];
				$result['8'][$i]['ground'] = $d['ground'];
				$result['8'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['8'][$i]['sky_color'] = $d['sky_color'];
				$result['8'][$i]['sky'] = $d['sky'];
				$result['8'][$i]['ground_color'] = $d['ground_color'];
				$result['8'][$i]['ground'] = $d['ground'];
				$result['8'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}else if ($i<=40){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['7'][$i]['sky_color'] = $d['sky_color'];
				$result['7'][$i]['sky'] = $d['sky'];
				$result['7'][$i]['ground_color'] = $d['ground_color'];
				$result['7'][$i]['ground'] = $d['ground'];
				$result['7'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['7'][$i]['sky_color'] = $d['sky_color'];
				$result['7'][$i]['sky'] = $d['sky'];
				$result['7'][$i]['ground_color'] = $d['ground_color'];
				$result['7'][$i]['ground'] = $d['ground'];
				$result['7'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}else if ($i<=50){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['6'][$i]['sky_color'] = $d['sky_color'];
				$result['6'][$i]['sky'] = $d['sky'];
				$result['6'][$i]['ground_color'] = $d['ground_color'];
				$result['6'][$i]['ground'] = $d['ground'];
				$result['6'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['6'][$i]['sky_color'] = $d['sky_color'];
				$result['6'][$i]['sky'] = $d['sky'];
				$result['6'][$i]['ground_color'] = $d['ground_color'];
				$result['6'][$i]['ground'] = $d['ground'];
				$result['6'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}else if ($i<=60){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['5'][$i]['sky_color'] = $d['sky_color'];
				$result['5'][$i]['sky'] = $d['sky'];
				$result['5'][$i]['ground_color'] = $d['ground_color'];
				$result['5'][$i]['ground'] = $d['ground'];
				$result['5'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['5'][$i]['sky_color'] = $d['sky_color'];
				$result['5'][$i]['sky'] = $d['sky'];
				$result['5'][$i]['ground_color'] = $d['ground_color'];
				$result['5'][$i]['ground'] = $d['ground'];
				$result['5'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}else if ($i<=70){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['4'][$i]['sky_color'] = $d['sky_color'];
				$result['4'][$i]['sky'] = $d['sky'];
				$result['4'][$i]['ground_color'] = $d['ground_color'];
				$result['4'][$i]['ground'] = $d['ground'];
				$result['4'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['4'][$i]['sky_color'] = $d['sky_color'];
				$result['4'][$i]['sky'] = $d['sky'];
				$result['4'][$i]['ground_color'] = $d['ground_color'];
				$result['4'][$i]['ground'] = $d['ground'];
				$result['4'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}else if ($i<=80){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['3'][$i]['sky_color'] = $d['sky_color'];
				$result['3'][$i]['sky'] = $d['sky'];
				$result['3'][$i]['ground_color'] = $d['ground_color'];
				$result['3'][$i]['ground'] = $d['ground'];
				$result['3'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['3'][$i]['sky_color'] = $d['sky_color'];
				$result['3'][$i]['sky'] = $d['sky'];
				$result['3'][$i]['ground_color'] = $d['ground_color'];
				$result['3'][$i]['ground'] = $d['ground'];
				$result['3'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}else if ($i<=90){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['2'][$i]['sky_color'] = $d['sky_color'];
				$result['2'][$i]['sky'] = $d['sky'];
				$result['2'][$i]['ground_color'] = $d['ground_color'];
				$result['2'][$i]['ground'] = $d['ground'];
				$result['2'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['2'][$i]['sky_color'] = $d['sky_color'];
				$result['2'][$i]['sky'] = $d['sky'];
				$result['2'][$i]['ground_color'] = $d['ground_color'];
				$result['2'][$i]['ground'] = $d['ground'];
				$result['2'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}else if ($i<=100){
			if ($findYear==60){
				$findYear=0;
				$d = $data['baczi'][$findYear]['data'];
				$result['1'][$i]['sky_color'] = $d['sky_color'];
				$result['1'][$i]['sky'] = $d['sky'];
				$result['1'][$i]['ground_color'] = $d['ground_color'];
				$result['1'][$i]['ground'] = $d['ground'];
				$result['1'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}else{
				$d = $data['baczi'][$findYear]['data'];
				$result['1'][$i]['sky_color'] = $d['sky_color'];
				$result['1'][$i]['sky'] = $d['sky'];
				$result['1'][$i]['ground_color'] = $d['ground_color'];
				$result['1'][$i]['ground'] = $d['ground'];
				$result['1'][$i]['year']=$sYear;
				$findYear++;
				$sYear++;
			}
		}
	}
//	 //showArray($result);
//	echo "<h3>Годы Жизни</h3>";
//	echo "<div class='yearLive'>";
					for ($j=1; $j <= 10; $j++) {
//						echo "<table class='yearLive'>
//										<tbody>";
						$r = $result[$j];
							foreach ($r as $key => $value) {
//								echo "<tr><td>".$value['year']." <span class='".$value['sky_color']."'>".$value['sky']."</span> <span class='".$value['ground_color']."'>".$value['ground']."</span></td></tr>";
                                $result[$j][$key]= $value['year']."&nbsp<span class='".$value['sky_color']."'>".$value['sky']."</span>&nbsp<span class='".$value['ground_color']."'>".$value['ground']."</span>";
							}
//						echo "	</tbody>
//								</table>";
					}
//	echo "</div>";
//    $result = ksort($result);
//	showArray($result);
	return $result;
}
function takts($sex,$mounth,$year,$dateTime,$DD){
//	 showArray($mounth);
	$data = bacziData();
//	showArray($data);
	$sky_sex = $data['baczi'][$mounth['yearBaczi']];
	// showArray($sky_sex);
	// echo $sky_sex['data']['sky_sex'];
	$inYan = strtolower($sky_sex['data']['sky_sex']);
	$result = '';
	if($sex == 'm'){
		if ($inYan=='инь'){
//			 echo 'мужчина инь<br>назад<hr>';
			$result = findTaktB($mounth,$year,$dateTime,$DD);
		}else if($inYan=='ян'){
//			 echo 'мужчина ян<br>вперед<hr>';
			$result = findTaktF($mounth,$year,$dateTime,$DD);
		}
	}else if ($sex =='z'){
		if ($inYan=='инь'){
//			 echo 'женщина инь<br>вперед<hr>';
			$result = findTaktF($mounth,$year,$dateTime,$DD);
		}else if($inYan=='ян'){
//			 echo 'женщина ян<br>назад<hr>';
			$result = findTaktB($mounth,$year,$dateTime,$DD);
		}
	}
	return $result;
}

	function findTaktB($mounth, $year, $dateTime, $DD)
	{
//	 showArray($mounth);
// echo 'findTaktB $year='.$year;
// // $visGod = visokosniGod($year);
		$dt = explode(' ', $dateTime);
//	 showArray($dt);
		$dTime = explode(':', $dt[1]);
		$dDate = explode('.', $dt[0]);
//	showArray($dDate);
		$dTimestam = findTimestamp($dDate[0], $dDate[1], $year, $dTime[0], $dTime[1]);
//	 echo '$dTimestam='.$dTimestam.'<br>';
		$calendarData = mounthData();
		$beginDate = explode(' ', $calendarData[$year][1]['begin_date']);
		$beginTimestam = strtotime($beginDate[0] . '.' . $year . ' ' . $beginDate[1] . ':00 UTC');
//	echo '$beginTimestam='.$beginTimestam;
		$yearData = $calendarData[$year];
		$yearAdd = '';

		$beforeYearData = $calendarData[$year - 1];
		$beforeYearDataLast = $beforeYearData['12'];
		$beforeYearDataAlmostLast = $beforeYearData['11'];
//		showArray($beforeYearData);
//		showArray($beforeYearDataAlmostLast);
//        showArray($beforeYearDataLast);
		$beforeYearDataAlmostLast = explode(' ', $beforeYearDataAlmostLast['begin_date']);
		$beforeYearDataAlmostLast = strtotime($beforeYearDataAlmostLast[0] . '.' . ($year - 1) . ' ' . $beforeYearDataAlmostLast[1] . ':00 UTC');
		$beforeYearDataLast = explode(' ', $beforeYearDataLast['begin_date']);
		$beforeYearDataLast = strtotime($beforeYearDataLast[0] . '.' . $year . ' ' . $beforeYearDataLast[1] . ':00 UTC');

		if (($dTimestam < $beginTimestam) && ($dTimestam > $beforeYearDataLast)) {
			$newTimestam = $dTimestam - $beforeYearDataLast;
//        echo '$newTimestam='.$newTimestam.'<br>';
			$daysToBegin = round($newTimestam / 86400) + 1;
//        echo 'Дней до начала или конца месяца='.$daysToBegin.'<br>';
			$yearAdd = round($daysToBegin / 3);
		} else if (($dTimestam < $beforeYearDataLast) && ($dTimestam > $beforeYearDataAlmostLast)) {
			$newTimestam = $dTimestam - $beforeYearDataAlmostLast;
//        echo '$newTimestam='.$newTimestam.'<br>';
			$daysToBegin = round($newTimestam / 86400) + 1;
//        echo 'Дней до начала или конца месяца='.$daysToBegin.'<br>';
			$yearAdd = round($daysToBegin / 3);
		} else if ($dTimestam >= $beginTimestam) {
			$nowMounth = ((int)($dDate[1]) - 1);
//			echo '$nowMounth='.$nowMounth;
//			echo '$year='.$year;
//			showArray($calendarData[$year][$nowMounth]['begin_date']);
			$nowMounthTimestamp = explode(' ', $calendarData[$year][$nowMounth]['begin_date']);
			$nowMounthTimestamp = strtotime($nowMounthTimestamp[0] . '.' . $year . ' ' . $nowMounthTimestamp[1] . ":00 UTC");
//			echo '$nowMounthTimestamp=' . $nowMounthTimestamp;
			if ($dTimestam >= $nowMounthTimestamp) {
				$newTimestam = $dTimestam - $nowMounthTimestamp;
//            echo 'else $newTimestam='.$newTimestam.'<br>';
				$daysToBegin = round($newTimestam / 86400) + 1;
//            echo 'Дней до начала или конца месяца='.$daysToBegin.'<br>';
				$yearAdd = round($daysToBegin / 3);
//            echo 'Итог прибавки в годах='.$yearAdd.'<br>';
			} else if ($dTimestam < $nowMounthTimestamp) {
				$nowMounth = ((int)($dDate[1]) - 2);
				$nowMounthTimestamp = explode(' ', $calendarData[$year][$nowMounth]['begin_date']);
				$nowMounthTimestamp = strtotime($nowMounthTimestamp[0] . '.' . $year . ' ' . $nowMounthTimestamp[1] . ":00 UTC");
				$newTimestam = $dTimestam - $nowMounthTimestamp;
//            echo 'else $newTimestam='.$newTimestam.'<br>';
				$daysToBegin = round($newTimestam / 86400) + 1;
//            echo 'Дней до начала или конца месяца='.$daysToBegin.'<br>';
				$yearAdd = round($daysToBegin / 3);
//            echo 'Итог прибавки в годах='.$yearAdd.'<br>';
			}

		}
		$mounthBaczi = $mounth['mounthBaczi'];
//	 showArray($mounthBaczi);
		$data = bacziData();
		for ($i = 10; $i >= 1; $i--) {
			$m = $mounthBaczi - $i;
// echo $m;
			if ($m < 0) {
				$m = $m + 60;
// echo $m;
				$result[] = $data['baczi'][$m];
			} else {
// echo $m;
				$result[] = $data['baczi'][$m];
			}
		}
//	 showArray($result);
// $result = array_reverse($result);
		$y = ($year + $yearAdd) + 90;
// $y = ($year)+90;
		$shortY = $y - ($year);
//	 echo '$shortY='.$shortY;
//	 echo '$yearAdd='.$yearAdd;
//	 echo '$y='.$y;
//	 echo '$year='.$year;
		for ($i = 0; $i < 10; $i++) {
			$data = $result[$i];
			$data = $data['data'];
//		 showArray($data);
			$Ground = searchAngelDemonGround($DD['ground'], $data['ground']);
			$Sky = searchAngelDemon($DD['sky'], $data['ground']);
			$FK = fenixKungan($DD['sky'], $data['ground']);
			$helpnseDoctor = HelpinesAndDoctor($DD['Mground'], $data['sky'], $data['ground']);
			$errorInYan = errorInYan($data['sky'], $data['ground']);
			$StarBankrot = StarBankrot($data['sky'], $data['ground']);
			$ResultSkyGround = $Sky . $Ground . $FK . $helpnseDoctor . $errorInYan . $StarBankrot;
			$fazi = faziCi($DD['sky'], $data['ground']);
			$hiddenStolp = hiddenStolpResult(hiddenStolp($data['ground']));
			$usinCaptipon = usinCaption($DD['sky'], $data['sky']);
//		showArray($data);
// $hiddenStolp = hiddenStolpResult(hiddenStolpCaption($data['sky'],hiddenStolp($data['ground'])));
//		createTable($y,$data['number'],$data['sky'],$data['ground'],$data['caption'],$data['sky_color'],$data['ground_color'],$ResultSkyGround,$shortY,$fazi,$hiddenStolp);
			$result[$i] = array(
				'0' => $y,
				'1' => $data['number'],
				'2' => $data['sky'],
				'3' => $data['ground'],
				'4' => $data['caption'],
				'5' => $data['sky_color'],
				'6' => $data['ground_color'],
				'7' => $ResultSkyGround,
				'8' => $shortY,
				'9' => $fazi,
				'10' => $hiddenStolp,
				'11' => $data['sky_elem'],
				'12' => $data['ground_elem'],
				'13' => $usinCaptipon,
				'14' => $data['ground_animal']);
			$y = $y - 10;
			$shortY = $shortY - 10;
		}
		$result['year'] = $year + $yearAdd;
		$result['how_match'] = $yearAdd;
//    echo 'назад';
		return $result;

	}
function findTaktF($mounth,$year,$dateTime,$DD){
//	 echo 'findTaktF $year='.$year;
	// $visGod = visokosniGod($year);
    $calendarData = mounthData();
	$dt = explode(' ',$dateTime);
	$dTime = explode(':',$dt[1]);
	$dDate = explode('.',$dt[0]);
	$date2 = $year.'-'.$dDate[1].'-'.$dDate[0];
    $datetime2 = date_create($date2);
    $newYEAR = $calendarData[$year+1]['1']['begin_date'];
    $newYEAR = explode(' ',$newYEAR);
    $newYEARDate = explode('.',$newYEAR[0]);
    $newYEARTime = explode(':',$newYEAR[1]);
    $newYEAR = findTimestamp($newYEARDate[0],$newYEARDate[1],($year+1),$newYEARTime[0],$newYEARTime[1]);
//    echo '$newYEAR='.$newYEAR.'<br>';
	$dTimestam = findTimestamp($dDate[0],$dDate[1],$year,$dTime[0],$dTime[1]);
//	 echo '$dTimestam='.$dTimestam.'<br>';

	$yearData = $calendarData[$year];
	$mounthDate = $yearData[intval($dDate[1]-1)];
//	print_r($mounthDate);
	$beginDate = explode(' ',$mounthDate['begin_date']);
	$beginTime = explode(':',$beginDate[1]);
	$beginDate = explode('.',$beginDate[0]);
	$beginTimestam = findTimestamp($beginDate[0],$beginDate[1],$year,$beginTime[0],$beginTime[1]);
//	 echo '$beginTimestam ='.$beginTimestam.'<br>';
	if($dTimestam<$beginTimestam){
		$newTimestam = $beginTimestam - $dTimestam;
		$daysToBegin = round($newTimestam / 86400)+1;
//		 echo 'Дней до начала или конца месяца='.$daysToBegin.'<br>';
		$yearAdd = round($daysToBegin / 3);
//		 echo 'Итог прибавки в годах='.$yearAdd.'<br>';
	}else if($beginTimestam<$dTimestam && $dTimestam < $newYEAR){
//	    echo 'chek';
	    $mounthNow = explode(' ',$dateTime);
        $mounthNow = explode('.',$mounthNow[0]);
        $mounthNow = $mounthNow[1];
//        echo '$mounthNow='. $mounthNow;
        $calendarData = mounthData();
//        showArray($calendarData);
        $newMounthDate=$calendarData[$year][intval($mounthNow)]['begin_date'];
//        echo $newMounthDate;
        $newMounthTime=explode(':',explode(' ',$newMounthDate)[1]);
        $newMounthDate=explode('.',explode(' ',$newMounthDate)[0]);
//        showArray($newMounthTime);
//        showArray($newMounthDate);
        if(intval($mounthNow)==12){
//            $newMounthTimestamp = findTimestamp((int)$newMounthDate[0],(int)$newMounthDate[1],$year+1,$newMounthTime[0],$newMounthTime[1]);
            $data1=($year+1).'-'.$newMounthDate[1].'-'.$newMounthDate[0];
            $datetime1 = date_create($data1);
        }else if(intval($mounthNow)==1){
            $oldMounthData = $calendarData[($year-1)][intval(12)]['begin_date'];
            $oldMounthData=explode('.',explode(' ',$oldMounthData)[0]);
//            print_r($oldMounthData);
            $data1=$year.'-'.$oldMounthData[1].'-'.$oldMounthData[0];
            $datetime1 = date_create($data1);
//            echo $data1;
        }else if(intval($mounthNow)<12){
//            $newMounthTimestamp = findTimestamp((int)$newMounthDate[0],(int)$newMounthDate[1],$year,$newMounthTime[0],$newMounthTime[1]);
            $data1=$year.'-'.$newMounthDate[1].'-'.$newMounthDate[0];
            $datetime1 = date_create($data1);
//            echo $data1;
        }
        $interval = date_diff($datetime2, $datetime1);
        $daysToBegin = $interval->format('%R%a дней');
//        echo $daysToBegin;
//        $daysToBegin = substr($daysToBegin,1);
        $yearAdd = round($daysToBegin / 3);
//        echo $yearAdd;
    }else{
		$newMounthDate = $yearData[intval($dDate[1])];
		$newBeginDate = explode(' ',$newMounthDate['begin_date']);
		$newBeginTime = explode(':',$newBeginDate[1]);
		$newBeginDate = explode('.',$newBeginDate[0]);
//		print_r($newBeginDate);
		$data1=($year+1).'-'.$newBeginDate[1].'-'.$newBeginDate[0];
		$newBeginTimestam = findTimestamp($newBeginDate[0],$newBeginDate[1],$year,$newBeginTime[0],$newBeginTime[1]);
		// echo '$newBeginTimestam ='.$newBeginTimestam.'<br>';
        $datetime1 = date_create($data1);

        $interval = date_diff($datetime2, $datetime1);
        $daysToBegin = $interval->format('%R%a дней');
        $daysToBegin = substr($daysToBegin,1);
//		$newTimestam = $newBeginTimestam - $dTimestam;
//		 echo '$newTimestam='.$newTimestam.'<br>';
//		$daysToBegin = round($newTimestam / 86400)+1;
//		 echo 'Дней до начала или конца месяца='.$daysToBegin.'<br>';
		$yearAdd = round($daysToBegin / 3);
//		 echo 'Итог прибавки в годах='.$yearAdd.'<br>';
	}
	$mounthBaczi = $mounth['mounthBaczi'];
	$data = bacziData();
	for ($i=1; $i <= 10; $i++) {
		$m = $mounthBaczi+$i;
		if ($m > 59){
			$m = $m-60;
			$result[]=$data['baczi'][$m];
		}else if ($m<=59){
			$result[]=$data['baczi'][$m];
		}
	}
	$result = array_reverse($result);
	$y = ($year+$yearAdd)+90;
	// $y = ($year)+90;
	$shortY = $y - ($year);
	for ($i=0; $i <10 ; $i++) {
		$data = $result[$i];
		$data = $data['data'];
		$Ground = searchAngelDemonGround($DD['ground'], $data['ground']);
		$Sky = searchAngelDemon($DD['sky'], $data['ground']);
		$FK = fenixKungan($DD['sky'],$data['ground']);
		$helpnseDoctor = HelpinesAndDoctor($DD['Mground'],$data['sky'],$data['ground']);
		$errorInYan=errorInYan($data['sky'],$data['ground']);
        $StarBankrot = StarBankrot($data['sky'],$data['ground']);
		$ResultSkyGround = $Sky.$Ground.$FK.$helpnseDoctor.$errorInYan.$StarBankrot;
		$fazi=faziCi($DD['sky'],$data['ground']);
		$hiddenStolp = hiddenStolpResult(hiddenStolp($data['ground']));
        $usinCaptipon = usinCaption($DD['sky'],$data['sky']);
//		createTable($y,$data['number'],$data['sky'],$data['ground'],$data['caption'],$data['sky_color'],$data['ground_color'],$ResultSkyGround,$shortY,$fazi,$hiddenStolp);
        $result[$i]= array(
            '0'=>$y,
            '1'=>$data['number'],
            '2'=>$data['sky'],
            '3'=>$data['ground'],
            '4'=>$data['caption'],
            '5'=>$data['sky_color'],
            '6'=>$data['ground_color'],
            '7'=>$ResultSkyGround,
            '8'=>$shortY,
            '9'=>$fazi,
            '10'=>$hiddenStolp,
            '11'=>$data['sky_elem'],
            '12'=>$data['ground_elem'],
            '13'=>$usinCaptipon,
            '14'=>$data['ground_animal']);
		$y = $y-10;
		$shortY = $shortY -10;
	}
    $result['year'] = $year+$yearAdd;
    $result['how_match']= $yearAdd;
//    echo 'вперед';
	return $result;
}
function findVetv($timestamp){
	$vetvCalibration= 2;
	$vetv = ($timestamp/86400);
	$v=1;
	// echo $vetv;
	for ($i=1; $i < floor($vetv); $i++) {
		if($v==12){
			$v=1;
		}else{
			$v++;
		}
	}
	$v = $v + $vetvCalibration;
	if ($v>12){
		$v=$v-12;
	}
	$vetv = $v;
	return $vetv;
}
function visokosniGod($y){
	$y = intval($y);
	if (($y % 4 != 0) || ($y % 100 == 0 && $y % 400 != 0)){
		$result = 0;
	}
	else{
	  $result = 1;
	}
	return $result;
}
function findTimestamp($day,$mounth,$year,$hour='00',$min='00'){
	$timestamp = strtotime($year."-".$mounth."-".$day." ".$hour.":".$min.":00 UTC");
	return $timestamp;
}
