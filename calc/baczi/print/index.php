<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 02/11/2018
 * Time: 15:37
 */
include "../../../function.php";

        $mapMounthData = json_decode(base64_decode($_POST['mapmounth']),true);
        $mapTakt = json_decode(base64_decode($_POST['maptakt']),true);
        $mapThisYear = json_decode(base64_decode($_POST['mapthisyear']),true);
        $usin = json_decode(base64_decode($_POST['usin']),true);
        $takts = json_decode(base64_decode($_POST['takts']),false);
        $goa = $_POST['goa'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
    include(ROOT.'/head.tpl'); ?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7p6Wj-1BN2HycCoCk1CX5An-q1EqT9zI&libraries=places"></script>
    <link rel="stylesheet" href="/css/prints.css">

</head>
<body>
<?php
        echo "<h3>Карта Ба Цзы</h3>";
        createMap($mapMounthData,$mapTakt,$mapThisYear);
        usinCreate($usin);
        echo $goa;
        echo "<div style='clear: both'></div>";
        createTakt($takts); ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='/js/goa.js'></script>
<script src="/js/baczi.js"></script>
<script>
$(document).ready(function(){
    window.print();
    window.reload();
})

</script>
</body>
</html>
