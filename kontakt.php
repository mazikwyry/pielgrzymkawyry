<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <meta name="Description" content=" [wstaw tu opis strony] ">
  <meta name="Keywords" content=" [wstaw tu slowa kluczowe] ">
  <meta name="Author" content=" [dane autora] ">
  <meta name="Generator" content="kED2">

  <title> Wyrski Serwis Pielgrzymkowy - Pielgrzymka Wyry-Częstochowa </title>

  <link rel="stylesheet" href=" style.css " type="text/css">
</head>
<body>

	<div class="top_menu">
		<div class="links">
		<?php include('menu_top.php'); ?>
			
		</div>
	</div> 
	<div class="logo"><img src="logo.png" /></div>
	<div class="content">
		<div class="menu">
			<div class="menu_top">
				<div>Menu</div>
			</div>			
			<?php include('menu_left.php'); ?>
			
		</div>
		<div class="text">
			<div class="header">
				<div>Kontakt</div>
			</div>
			
			<div class="p">
			Jeżeli masz jakieś pytania dotyczące pielgrzymki, chętnię udzilmy Ci informacji. Koniecznie skonktaktuj się z nami jeżeli posiadasz jakieś archiwalne materiały związane z wyrską pielgrzymką! Skorzystaj z poniższego formularza lub napisz na <a href="mailto:pielgrzymka.wyry@gmail.com">pielgrzymka.wyry@gmail.com</a>.
			<br/><br/>

				
				<?php

						function form($text,$mail)
						{
						
						$dodajna=rand(1, 10);
						$dodajnik=rand(5, 15);
						$wynik=$dodajna+$dodajnik;

						echo'
						<form action="kontakt.php" method="POST">
							<span style="font-weight:bold; font-size:15px;">Twój e-mail:</span><br /><input name="mail" value="'.$mail.'"/><br/>
							<span style="font-weight:bold; font-size:15px;">Twoja wiadomość:</span><br /><textarea class="ta" name="text">'.$text.'</textarea><br/>
							<span style="font-weight:bold; font-size:15px;">'.$dodajna.'+'.$dodajnik.'=</span><br /><input name="wynik" /><br />
							<input name="wynik2" type="hidden" value="'.$wynik.'"/><br />
							<input name="wyslij" type="submit" value="Wyślij" style="width:70px;" />
			
						</form>'
						;
						
						
						}					
						
						if($_POST['wyslij'])
						{
							$text=$_POST['text'];
							$mail=$_POST['mail'];
							$wynik=$_POST['wynik'];
							$wynik2=$_POST['wynik2'];

							if($wynik2==$wynik)
							{
							
							if($text && $mail)
								{
									$header = "From: $mail,\r\nReply-To: $mail\r\n";
									if(mail ("mazik.wyry@gmail.com", "Konktakt ze serwisu pielgrzymki", $text, $header ))
										echo'<br /><span class="good">Mail został wysłany. Odpowiemy najszybciej jak się da!</span><br />';
									
									
									form(NULL,NULL);
								}
								else
								{	
									echo'<br /><span class="bad">Podaj wszystkie potrzebne dane !</span><br />';
									form($text,$mail);
								}
							
							}
							else
								{
									echo'<br /><span class="bad">Błędny wynik - spróbuj jeczcze raz!</span><br />';
									form($text,$mail);
								}
						}
						else
						form(NULL,NULL);
						
					?>

			</div>
		</div>	
	</div>
	<div class="bottom">
		<div class="bottom_top">
			<div class="gray">
				<div class="gray_box"></div>
			</div>
		</div>
		
	<?php include('bottom.php'); ?>	
		
	</div>
	

</body>
</html>
