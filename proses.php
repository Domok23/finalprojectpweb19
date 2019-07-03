<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body background="mugiwara.png">
<div class="jumbotron">

<?php
echo "<head><title>DATA </head></title>";
$fp = fopen("data.txt","a+");
$nama = $_POST['nama'];
$file = $_FILES["file"]["name"];
$tmp_name = $_FILES["file"]["tmp_name"];


fputs($fp,"$nama|$file\n");
fclose($fp);
echo " Terima Kasih Atas Partisipasi Anda<br>";;
echo "<a class=btn href=index.php> Lihat Profile </a><br> ";
?>
</div>
</body>
</html>