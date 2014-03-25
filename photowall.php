<?php
$ipad = false;
if (preg_match('/(P7100|P5100|P5210|T310|T210|T311|T520|T320|T110|T520|P1000|I800|iPad)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
	$ipad = true;
}
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|mobile|bb)/i', strtolower($_SERVER['HTTP_USER_AGENT'])) && !$ipad) {
	header("Location: photowall-m.php",true,303);
	die();
}
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html class="ie6"><![endif]-->
<!--[if IE 7]>
<html class="ie7"><![endif]-->
<!--[if IE 8]>
<html class="ie8"><![endif]-->
<!--[if IE 9]>
<html class="ie9"><![endif]-->
<!--[if IE 10]>
<html class="ie10"><![endif]-->
<!--[if (gte IE 11)|(gt IEMobile 7)]><!-->
<html>
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>Good Luck Carambar - La galerie</title>
	<meta name="description" content="La petite blague Carambar se lance un énorme défi, faire rire les USA. Soutenez notre folle mission ! " />
	<meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=no" />
	<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon"/>
    <link href="css/jsPane.css" rel="stylesheet" type="text/css" />
    <link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="css/animation.css" rel="stylesheet" type="text/css" />
    <link href="css/photoitem.css" rel="stylesheet" type="text/css" />
    <link href="css/video-js.css" rel="stylesheet" type="text/css" />
	<!--[if IE 8]>
	<link href="css/ie8.css" rel="stylesheet" type="text/css" />
	<!--<![endif]-->
	<!--[if lt IE 8]>
	<link href="css/oldie.css" rel="stylesheet" type="text/css" />
	<!--<![endif]-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-49226115-1', 'goodluckcarambar.com');
		ga('send', 'pageview');

	</script>
</head>
<body>
<!-- CONVERSION TAG -->
<script type="text/javascript" src="http://cstatic.weborama.fr/js/advertiserv2/adperf_conversion.js"></script>
<script type="text/javascript">
	function transfoWebo(page_id){
		var adperftrackobj = {
			client : ""      // <== set your client id here
			,amount : "0.0"   // <== set the total price here
			,invoice_id : ""  // <== set your invoice id here
			,quantity : 0     // <== set the number of items purchased
			,is_client : 0    // <== set to 1 if the client is known
			,optional_parameters : {
				"N1" : "0" // <== to set
				,"N2" : "0" // <== to set
// to set free parameter follow this pattern :
//        ,"customer_name" : "John"
			}
			/* don't edit below this point */
			,fullhost : 'kraftmondelez.solution.weborama.fr'
			,site : 460
			,conversion_page : page_id
		}
		try{adperfTracker.track( adperftrackobj );}catch(err){}
	}
</script>
<div class="page-loading">
	<div class="page-loading-logo">
		<img src="images/loading_logo.png" />
		<div class="old-ie">You are using an outdated browser. Please upgrade your browser to improve your experience.</div>
	</div>
</div>
<img id="imgLoad" />
<?php
	include('include/tpl.php');
?>

<script type="text/javascript" src="./js/plugin/modernizr-2.5.3.min.js"></script>
<script type="text/javascript" src="./js/sea/sea-debug.js" data-config="../config.js?_2014#"></script>
<script type="text/javascript" src="./js/sea/plugin-shim.js"></script>
<script type="text/javascript" src="./js/lp.core.js"></script>
<script type="text/javascript" src="./js/lp.base.js"></script>
<!--[if IE 8]>
<script type="text/javascript" src="./js/ie8.js"></script>
<!--<![endif]-->
</body>
</html>