<!DOCTYPE html>
<html>
<head>
<title>Wheat - Révolutionnez votre manière de faire les courses !</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="WhEat Startup Mobile App" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<style type="text/css">
	#mc_embed_signup{background: transparent; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62079439-1', 'auto');
  ga('send', 'pageview');
  ga(‘set’, ‘&uid’, {{USER_ID}}); // Définir l'ID utilisateur à partir du paramètre user_id de l'utilisateur connecté.
</script>
<!--animated-css-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!--animated-css-->
<script src="//www.parsecdn.com/js/parse-1.4.2.min.js"></script>  
</head>
<?php

$fp = fopen("livreurs.csv","a+");


foreach ($_POST as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

echo "Les informations nom et prénoms ont été enregistréés dans le fichier ficher.txt";

?>
</html>