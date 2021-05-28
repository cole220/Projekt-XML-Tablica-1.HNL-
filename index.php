<!DOCTYPE html>
<html>

<head>
	<title>Tablica 1. HNL</title>
	
	<style>
	.pozadina{
	background-color: rgb(236, 0, 140);
	}
	
	.center{
	margin: 0 auto;
	width:50%;
	background-color: white;
	}
	
	#naslov{
	color: rgb(236, 0, 140);
	text-align: center;
	}
	
	footer {
	color: rgb(236, 0, 140);
	text-align: center;
	}
	
	.klub {
		text-align:center;
		margin-bottom:50px;
		
	}
	
	.klub img {
		width:350px;
	}
	
	
	
	</style>
</head>

<body>
	<header>
		<center><img src="slike/hnlpng.png" /></center>
	</header>
	
	<div class="pozadina">
		<div class="center">
			<h1 id="naslov">Tablica Prve hrvatske nogometne lige Sezona 2020/2021</h1>
			
			<?php
    include 'PHP-HNL1-Tablica.php';
    $xml = new SimpleXMLElement($xmlstr) or die("ERROR - XML not found");
    foreach($xml->klub as $klub){
        ?> 
        <div class="klub">
        <?php
        echo  '<img src="' . $klub->slika . '">'  . ' ' 
		. '<br>' .'<h3>'. $klub->imekluba . '</h3>'
        . '<br>' . 'Pozicija: ' . $klub->pozicija
        . '<br>' . 'Pobjede: ' . $klub->pobjede
        . '<br>' . 'Porazi: ' . $klub->porazi  
        . '<br>' . 'Neriješeno: ' . $klub->nerijeseno  
        . '<br>' . 'Bodovi: ' . $klub->bodovi
		. '<br>' . 'Postignuće HNL: ' . $klub->postignuceHNL  
		. '<br>' . 'Promocije: ' . $klub->promo  
		. '<br>' . 'Kup Hrvatske: ' . $klub->kuphrv;
        ?>
        </div>
        <?php
    }
    ?>
			
			
			

		</div>

	</div>
	
	<footer>Ivan Ćosić 2021. - Projekt iz XML Programiranja</footer>
</body>
</html> 