<!DOCtype>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="mainStyle.css">
</head>
<body>
	<script>
		$(document).ready(function(){
		  $(".redText").click(function(){
			$(this).removeClass("redText");
			$(this).addClass("revealedText");			
		  });
		});
	</script>

<?php

	echo	"<div class='revealedText' ><span class='justText'>Przed wiekami...</span></div>";
	echo	"<div class='revealedText' ><span class='justText'>Znaczy tymi, które nadejdą...</span></div>";
	echo	"<div class='revealedText' ><span class='justText'>Czyli no w sumie teraz, niosąc świeżo wykuty miecz od kowala, Darias nerwowo rozglądał się na wszystkie strony licząc, że nie napotka osoby, o której ciągle myślał. Los jednak bywa złośliwy i za rogiem dobrze znanej wszystkim karczmie wpadł na rzeczonego jegomościa. Oczy rozszerzyły się gwałtownie w geście zaskoczenia, usta wymamrotały szybkie \"Przepraszasm najmocniej\", jednak drugie spojrzenie przyniosło rozpacz w sercu Dariasa. Spostrzegł on iż potrącony przechodzień to w istocie jego brat.</span></div>";
	
	echo	"<div class='redText' ><span class='dialog_2'>Pozdrowiony! Powinieneś bardziej zwracać uwagę na otoczenie, jeśli chcesz się zabrać za szermierkę. Ale mniejsza, 
	słyszałeś?</span></div>";
	echo	"<div class='redText' ><span class='dialog_1'>O czym?</span></div>";
	echo	"<div class='redText' ><span class='dialog_2'>Co się stało z Carilm zaraz po świętach.</span></div>";
	echo	"<div class='redText' ><span class='dialog_1'>Nie. I szczerze mówiąc niewiele mnie to obchodzi.</span></div>";
			
			
	







?>
</body>
</html>