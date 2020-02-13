<?php include 'metriks.html';?>
	<meta charset="UTF-8">
	<meta name="yandex-verification" content="6d82652c52969674" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	if(file_exists("seo.json")){
		$json = file_get_contents("seo.json");
		$obj = json_decode($json,true);
		//print_r($obj);
	};
	?>
	<meta name='author' content="http://uniquesite.ru">
	<meta name='copyright' content="https://fengshui-consultant.ru/">
	<meta name="description" content="<?php echo $obj['description'];?>" />
	<meta name="keywords" content="<?php echo $obj['keywords'];?>" />
	<!--<meta http-equiv="Cache-Control" content="public, max-age=86400">-->
	<title><?php echo $obj['title'];?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="icon" href="/favicon.svg" sizes="any" type="image/svg+xml">
	<link rel="shutcut icon" href="/favicon.ico" sizes="16x16 32x32" type="image/ico">
	<link rel="stylesheet" href="/css/index.css">
