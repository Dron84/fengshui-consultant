<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	include(ROOT.'/head.tpl'); ?>
</head>
<body>
	<div class="container-fluid articles">
		<?php include(ROOT.'/nav.tpl'); ?>
		<div class="jumbotron">
			<br><br><br><br>
			<h1 class="text-center ">Статьи про Фен шуй</h1>
			<br><br><br><br>
  		</div>

	</div>
	<div class="container">
			<div class="row">
				<?php
					$data = file_get_contents(ROOT.'/articles/data.json');
					$data = json_decode($data,TRUE);
					// print_r($data);
					foreach ($data as $key => $value) {
						$header[].=$value['header'];
						$content[].= $value['content'];
					}
					// print_r($header);
					// print_r($content);
					echo "<article class='col-md-4' style='top: 40px'><nav style='line-height: 1.5em;'>";
					for ($j=0; $j <count($header) ; $j++) {
						if (isset($_GET['contid'])){
							$contid=$_GET['contid'];
							if($j==$contid){
								echo "<a href='?contid=".$j."' style='text-decoration: underline; font-size: 1.3em'>".$header[$j]."</a><br>";
							}else{
								echo "<a href='?contid=".$j."'>".$header[$j]."</a><br>";
							}
						}else{
							echo "<a href='?contid=".$j."'>".$header[$j]."</a><br>";
						}

					}
					echo "</nav></article>";
					if (isset($_GET['contid'])){
						$contid=$_GET['contid'];
						echo "<section class='col-md-8' id='content_id_".$contid."'>";
							echo "<h2>".$header[$contid]."</h2>";
							echo "<div>".$content[$contid]."</div>";
						echo "</section>";
					}else{
						for ($i=0; $i <count($content) ; $i++) {
							if ($i!=0){
								echo "<section class='col-md-8' style='display: none;' id='content_id_".$i."'>";
									echo "<h2>".$header[$i]."</h2>";
									echo "<div>".$content[$i]."</div>";
								echo "</section>";
							}else{
								echo "<section class='col-md-8' id='content_id_".$i."'>";
									echo "<h2>".$header[$i]."</h2>";
									echo "<div>".$content[$i]."</div>";
								echo "</section>";
							}
						}
					}

				?>
			</div>
		</div>

	<?php include(ROOT.'/footer.tpl');?>
</body>
</html>
