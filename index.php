<?php



include_once( 'config.php' );



try {







	$opt = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );



	$pdo = new PDO( 'mysql:host=localhost;dbname=database1', 'root', '', $opt );



	$pdo->query( 'set names utf8' );



} catch ( PDOException $e )



{



	exit( 'server error' );



}



$sql = "select * from noidung where 1";



$sth = $pdo->prepare( $sql );



$sth->execute();



$data = $sth->fetchAll( PDO::FETCH_OBJ );



// echo "<pre>";



// print_r($data);



// echo "</pre>";



$a = array();



foreach ( $data as $k => $v )



{



	$tam = array( $v->name => $v->content );



	array_push( $a, $tam );



}



// echo "<pre>";



// print_r($a);



// echo "</pre>";



$c = array();



$vv = array();



foreach ( $a as $k => $v )



{



	$vv = array_merge( $vv, $v );



}



// echo "<pre>";



// print_r($vv);



// echo "</pre>";







// echo "<pre>";



// print_r($v);



// echo "</pre>";







// echo $v['page1_tieude1'];







// exit();







?>



<!DOCTYPE html>



<html>







<head>

	<meta charset="utf-8">
	<title>TRUNG TÂM NGHỆ THUẬT TRUYỀN THỐNG TP.HCM</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="skin/default.css">





	








	










</head>







<body>
	<?php
	include_once( 'page/menu.php' );
	if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] )
	{
		$page = $_GET[ 'page' ];
		$link = 'page/' . $page . '.php';
		if ( file_exists( $link ) )
		{
			include_once( $link );
		} else
		{
			include_once( 'page/page404.php' );
		}
	} else
	{
		include_once( 'page/home2.php' );
	}
	include_once( 'page/footer.php' );
	?>







	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.bundle.min.js"></script>
	
	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

	<!-- Javascript Library Files -->
	<script src="layout2/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="layout2/js/jquery.js"></script>
	<script src="layout2/js/jquery.easing.1.3.js"></script>
	<script src="layout2/js/bootstrap.min.js"></script>
	<script src="layout2/js/jquery.isotope.min.js"></script>
	<script src="layout2/js/jquery.nicescroll.min.js"></script>
	<script src="layout2/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="layout2/js/skrollr.min.js"></script>
	<script src="layout2/js/jquery.scrollTo.min.js"></script>
	<script src="layout2/js/jquery.localScroll.min.js"></script>
	<script src="layout2/js/stellar.js"></script>
	<script src="layout2/js/jquery.appear.js"></script>
	<script src="layout2/js/jquery.flexslider-min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxV2XZv3Hwj_hKiO3a7Og8_shZ9f1kZ4U"></script>


	<!-- Contact Form JavaScript File -->
	<script src="layout2/contactform/contactform.js"></script>

	<!-- Template Main Javascript File -->
	<script src="layout2/js/main.js"></script>


</body>







</html>