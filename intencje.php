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
		<?php include('menu_top.php'); include('config.php'); ?>

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
				<div>Pielgrzymkowa Skrzynka Intencji</div>
			</div>

			<div class="p">
			Pielgrzymka to przede wszystkim modlitwa. Modlimy się różańcem, śpiewem - a przecież sam trud pielgrzymowania to wspaniała modlitwa,  dlatego jeżeli nie możesz iść na pielgrzymkę a <strong>masz jakąś intencję, w której chciałbyś, abyśmy się w czasie tej drogi</strong> modlili wpisz ją do naszej Pielgrzymkowej Skrzynki Intencji. Doniesiemy ją na Jasną Górę do stóp Maryi, która <strong>na pewno wstawi się za Tobą u Boga Ojca Wszechmogącego!</strong>
			<br/><br/>
			<div style="text-align:left; float:left; width:500px;">

			<?php

			function form($text,$name)
						{

						$dodajna=rand(1, 10);
						$dodajnik=rand(5, 15);
						$wynik=$dodajna+$dodajnik;

						echo'
						<form action="intencje.php" method="POST">
							<span style="font-weight:bold; font-size:15px;">Twoje imię:</span><br /><input name="mail" value="'.$name.'"/><br/>
							<span style="font-weight:bold; font-size:15px;">Twoja intencja:</span><br /><textarea class="ta" name="text">'.$text.'</textarea><br/>
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
									$dodaj ="INSERT INTO intencje (id, intencja, imie) VALUES (NULL, '$text', '$mail');";
									if(mysql_query($dodaj))
									echo '<br /><div class="good">Intencja dodana!</div><br />';
									else
									echo '<br /><div class="bad">Błąd podczas dodawania:-( Spróbuj jeszcze raz!<br /></div>';
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

				echo '</div><div style="clear:both;"></div><br><br>';

			$sql = "SELECT * FROM intencje;";
			$wpisy = mysql_query($sql);
			if(mysql_num_rows($wpisy)==0)
				echo '<div style="margin:auto; width:300px; text-align:center; padding:10px; border:dotted 1px #272727;"><strong>Jeszcze nikt nie dodał intencji. Bądź pierwszy!</strong></div>';
				$i=1;
			while ($wynikrow = mysql_fetch_assoc($wpisy)){
				if($i++%2==0)
					$color='#272727';
				else
					$color='#ffd42a';

				echo '<div class="author_header">
						<div style="left:0px; float:left;">'.$wynikrow['imie'].' prosi o modlitwę</div>
					</div>'.$wynikrow['intencja'];


			}

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
