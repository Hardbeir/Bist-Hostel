<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link href="styl.css" rel="stylesheet"/>
<?php

include('kcaptcha/kcaptcha.php');
session_start();
require_once("config.php");


if ($_POST['act']== "y")
{
if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] ==  $_POST['keystring'])
{

if (isset($_POST['posName']) && $_POST['posName'] == "")
{
$statusError = "$errors_name";
}
elseif (isset($_POST['posEmail']) && $_POST['posEmail'] == "")
{
$statusError = "$errors_mailfrom";
}
elseif(isset($_POST['posEmail']) && !preg_match("/^([a-z,._,0-9])+@([a-z,._,0-9])+(.([a-z])+)+$/", $_POST['posEmail']))
{
$statusError = "$errors_incorrect";

unset($_POST['posEmail']);
}
elseif (isset($_POST['posRegard']) && $_POST['posRegard'] == "")
{
$statusError = "$errors_subject";
}
elseif (isset($_POST['posText']) && $_POST['posText'] == "")
{
$statusError = "$errors_message";
}

elseif (!empty($_POST))
{
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: $content  charset=$charset\r\n";
$headers .= "Date: ".date("Y-m-d (H:i:s)",time())."\r\n";
$headers .= "From: \"".$_POST['posName']."\" <".$_POST['posEmail'].">\r\n";
$headers .= "X-Mailer: My Send E-mail\r\n";

mail("$mailto","$subject","$message","$headers");

unset($name, $posText, $mailto, $subject, $posRegard, $message);

$statusSuccess = "$send";
}

}else{
$statusError = "$captcha_error";
unset($_SESSION['captcha_keystring']);
}
}
?>
<title>Kontakty</title>
</head>
<body>
<div id="strona">
<div class="glowa">
<div class="zagluwek">
<h1 class="nadzagl">HOSTEL &  AKADEMIK</h1>
<h1 class="podzagl">WARSZAWA</h1>
</div>
<div class="trans">
	<a href="../poland/strona1.php"><img src="zdjencia/polsha.jpg"   alt="angl" ></a>
 <a href="../english/strona1.php"><img src="zdjencia/angl.jpg"   alt="english" ></a>
<!--  <a href="../russion/strona1.php"><img src="zdjencia/rus.jpg"   alt="angl" ></a>-->
</div>
</div>
<div class="project">
<div class="menu">
<div class="col-md-6">
<ul>
<li><a href="index.html" ><span class="text-top">Główna</span>
<span class="text-bottom"> O Hostele</span>
</a></li>
<li><a href="strona2.html">
<span class="text-top">Pokoje i Ceny</span>
<span class="text-bottom"> Ceny za pokoi</span></a></li>
<li><a href="strona3.html">
<span class="text-top">Galeria</span>
<span class="text-bottom"> zdjencia pokoje</span></a></li>
<li><a href="regulamin.html">
<span class="text-top">Regulamin</span>
<span class="text-bottom">Umowa hostelu</span></a></li>
<li><a href="strona5.html">
<span class="text-top">Atrakcje</span>
<span class="text-bottom">Okolica hostelu</span></a>
<li><a href="strona1.php">
<span class="text-top">Kontakt</span>
<span class="text-bottom"> Kontakty</span></a></li>
</li>
</ul>
<div class="semiopacity">
	<div class="date">
             Jest
            <script type="text/javascript">

                var mydate = new Date()
                var year = mydate.getYear()
                if (year < 1000) year += 1900
                var day = mydate.getDay()
                var month = mydate.getMonth()
                var daym = mydate.getDate()
                if (daym < 10)
                    daym = "0" + daym
                var dayarray = new Array("niedziela", "poniedziałek", "wtorek", "średa", "czwartek", "piątek", "sobota")
                var montharray = new Array("styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień")
                document.write("" + dayarray[day] + ", "+"<br>" + daym + " " + montharray[month] + " " + year + " rok");
            </script>  
        </div></div>
</div>
</div>

<div class="jumbotron">
<div class="canteiner">
<div class="col-md-4">
<h2> Kontakty</h2>
 <div class="textmaps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.685811320163!2d21.070835693990404!3d52.212756879757166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecd6dca9f4835%3A0xb77034119743c888!2sBartycka+16A%2C+Warszawa!5e0!3m2!1sru!2spl!4v1447834145352"
 frameborder="0"  align="top" class="maps" allowfullscreen> 
</iframe>
</div>

 

<div class="formmp">
<div class="textmp">
<h3>
    <p>Nasz adres: 00-716 Warszawa,</p>
     <p  >ul.Bartycka 16A</p>
    <p><Pracujemy z (8:00-18:00)</p>
    <p>E-mail: <a href="mailto:biuro@bist.pl">biuro@bist.pl</a></p>
	<p>Telefon (rezerwacje i informacja):</p>
	<p>+48 22 617 84 99 (administracja)</p>
	<p>+48 602 722 722 (rezerwacje)</p>
	<p>Jak dojechac:<p>
	<p><a href="https://goo.gl/maps/ojYK4Gwe7wu" target="_blank"> Z lotniska Chopena Airoport.</a></p>
	<p> <a href="https://goo.gl/maps/S9RB4KXC3ND2" target="_blank">Z Dworca Zachodniego.</a></p>
	<p> <a href="https://goo.gl/maps/SJf6aAb6FyJ2" target="_blank">Z Dworca Centralnego.</a></p>
	
</h3>
</div>
 

 
	 <div id="formbox">		
<h3>Nie dziala</h3>	 
	<h2>Wypelnij formularz kontaktowy:</h2>
	<form action="./" method="post" id="cForm">
<input type="hidden" name="act" value="y" />
<fieldset>
<label for="posName"><b>Imie i Nazwisko:</b></label>
<input class="text" type="text" size="25" name="posName" id="posName" />
<label for="posEmail"><b>E-mail:</b></label>
<input class="text" type="text" size="25" name="posEmail" id="posEmail" />
<label for="posRegard"><b>Temat:</b></label>
<input class="text" type="text" size="25" name="posRegard" id="posRegard" />
<label for="posText"><b>Wiadomosc:</b></label>
<textarea cols="50" rows="20" name="posText" id="posText"></textarea>
<label for="posCaptcha"><center><b>Text na Zdiecie:</b></label><a href='readme.html'><img src="kcaptcha?<?php echo session_name()?>=<?php echo session_id()?>" border=0></a></center><input class="text" type="text" size="25" name="keystring" id="keystring" />
<br><br><label class="submit"><input class="submit1" type="submit" name="selfCC" id="selfCC" value=" Wyslac"/>
<input class="submit2" type="reset"  value="Wyczysc" class="w150"/></label> 
</fieldset>
<?php include 'kcaptcha/kcaptcha_rand.php' ?>
</form>
</div>
	</div> 
	
<div class="podpanel">
<small>
     <tt>
     <font>
      © 2015. Hostel"BIST"
      </tt></font>
      </small>
	  <div class="social">
            <a href="http://www.facebook.com/templatemo" target="_blank"><img src="zdjencia/facebook.png" alt="facebook" /></a>
           <a href="https://vk.com/club107247368" target="_blank"><img src="zdjencia/vkontakte.png" alt="vkontakte" /></a>
			</div>
</div>
</div>
</div>
</div>
</body>
</html>