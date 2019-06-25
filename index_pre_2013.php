<?php
// header('Location: http://www.cufal.pl/pielgrzymka');
?>
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

<?php
			
			function CountDown($hour, $minute, $second, $month, $day, $year) {
				$eventDate = mktime($hour, $minute, $second, $month, $day, $year);
				$today = mktime();
				$secondsTo = $eventDate - $today;
				$minutesTo = round($secondsTo / 60);
				$hoursTo = round($minutesTo / 60);
				$daysTo = round($hoursTo / 24);
				$weeksTo = round($daysTo / 7);
				$monthsTo = round($weeksTo / 4);
				$yearsTo = round($monthsTo / 12);
				
				$values = array(
        "seconds" => $secondsTo,
        "minutes" => $minutesTo,
				"hours" => $hoursTo,
				"days" => $daysTo,
				"weeks" => $weeksTo,
				"months" => $monthsTo,
				"years" => $yearsTo
				);
				
				return $values;
				
			}
			
			
				$endWorld = CountDown(16, 0, 0, 8, 23, 2013); 
				?>

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
				<div>żółta21 w drodze!</div>
			</div>
			
			<div class="p">
			Witaj w <strong>Wyrskim Serwisie Pielgrzymkowym</strong>. Powstał on po to, abyś mógł mieć szybki dostęp do informacji na temat tegorocznej <strong>XXI Pielgrzymki Wyry-Częstochowa 2013</strong>, ale także po to, aby móc wspominać minione pielgrzymki. Zebraliśmy tutaj materiały z ostatnich kilku lat, lecz chcemy rozwijać nasz serwis i uzupełniać go o archiwalne materiały z pierwszych pielgrzymek, dlatego zapraszamy wszystkich, którzy mogliby nam w tym pomóc o <a href="kontakt.php">kontakt</a>. 
             <br /><br />
            <div class="header" style="width:100%;  float:left; background:#b80000; position:relative; font-size:20px; padding:10px; text-align:center; ">
                Jesteśmy w drodze. <br/>Dojdziemy za <?php echo $endWorld['hours']; ?> h.
            </div>
            <div class="header" style="width:100%;  float:left; background:#272727;">
                <div>Ważne informacje</div>
            </div>
            <br /><br />
            Pielgrzymka tuż za rogiem, więc podajemy niezbędne informacje organizacyjne.
            <ol>
                <li>Całkowity koszt pielgrzymki to 80zł (cena 3 noclegów, ubezpieczenia i autokaru powrotnego). W razie problemów finansowych można się zgłosić do ks. Piotra, na pewno coś poradzi. Przewidujemy też zniżki rodzinne.</li>
                <li><strong>Pielgrzymka rozpocznie się krótkim nabożeństwem o godzinie 6.30</strong>, po którym od razu wyruszymy w drogę - najpóźniej o 7.00. </li>
                <li>Prosimy wszystkich o załadowanie bagaży na pakę między 6.00 a 6.20, żeby o 6.30 być w kościele.</li>
                <li>Pieczywo można kupić w wyrskiej piekarni przed rozpoczęciem pielgrzymki. Wystarczy podejść z tyłu.</li>
                <li>Każdy pielgrzym przed wejściem do kościoła podczas rejestracji otrzyma "zestaw pielgrzymkowy". Będzie to mały podręczny plecaczek, w którym będzie śpiewnik, identyfikator oraz woda mineralna.</li>
            </ol>
            A tak mniej więcej pójdziemy:<br><br>
            <iframe width="632" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.pl/maps?f=d&amp;source=s_d&amp;saddr=D%C4%85browszczak%C3%B3w&amp;daddr=50.134294,18.9008071+to:50.1786735,18.9032217+to:50.186708,18.9042011+to:Parafia+rzymskokatolicka+Tr%C3%B3jcy+Przenaj%C5%9Bwi%C4%99tszej,+Ksi%C4%99dza+Ludwika+Tunkla,+Koch%C5%82owice,+Ruda+%C5%9Al%C4%85ska+to:Armii+Krajowej,+Bytom+to:Bazylika+mniejsza+Naj%C5%9Bwi%C4%99tszej+Marii+Panny+i+%C5%9Aw.+Bart%C5%82omieja,+Piekary+%C5%9Al%C4%85skie+to:W%C5%82adys%C5%82awa+%C5%81okietka+to:Starowiejska+to:Szkolna,+Wo%C5%BAniki+to:Nieznana+droga+to:Brzeziny+Nowe+to:50.7958966,19.1033109+to:Nieznana+droga&amp;geocode=FaH0_AIdEWcgAQ%3BFRb9_AIdR2cgASkf3u-t_MkWRzFEonHklqzSuQ%3BFXGq_QIdtXAgASmpRLKY0csWRzH9c3wKNmOhxA%3BFdTJ_QIdiXQgASnhK95mw8sWRzEkdWVAz17WXw%3BFbTR_gIdMG0gASE1K9ycafHDFilHeIoJ_8wWRzE1K9ycafHDFg%3BFRLk_wIdrOUgASnZG6we79IWRzG4Usm1rHyeHg%3BFe3LAAMdyhQhASE-ZBi7FW6yRSmFm_Ysr9QWRzE-ZBi7FW6yRQ%3BFcwnAgMdV9YhAQ%3BFf2eAgMdKSoiAQ%3BFWxGBAMdOoQiASk9UqZRhNIQRzHrPEWphtbZxA%3BFeUVBQMdfP4iAQ%3BFW9PBgMdMlkjASmByeLXS8oQRzH3HIFTxXPmQA%3BFXgVBwMdTn4jASmd-ppP5LUQRzF6eVINVTjwZg%3BFbBWBwMdWGsjAQ&amp;sll=50.810247,19.103379&amp;sspn=0.011023,0.033023&amp;t=h&amp;hl=pl&amp;dirflg=w&amp;mra=dme&amp;mrsp=13&amp;sz=16&amp;via=1,2,3,12&amp;ie=UTF8&amp;ll=50.495958,19.099731&amp;spn=1.223044,3.47168&amp;z=8&amp;output=embed"></iframe><br /><small><a href="https://maps.google.pl/maps?f=d&amp;source=embed&amp;saddr=D%C4%85browszczak%C3%B3w&amp;daddr=50.134294,18.9008071+to:50.1786735,18.9032217+to:50.186708,18.9042011+to:Parafia+rzymskokatolicka+Tr%C3%B3jcy+Przenaj%C5%9Bwi%C4%99tszej,+Ksi%C4%99dza+Ludwika+Tunkla,+Koch%C5%82owice,+Ruda+%C5%9Al%C4%85ska+to:Armii+Krajowej,+Bytom+to:Bazylika+mniejsza+Naj%C5%9Bwi%C4%99tszej+Marii+Panny+i+%C5%9Aw.+Bart%C5%82omieja,+Piekary+%C5%9Al%C4%85skie+to:W%C5%82adys%C5%82awa+%C5%81okietka+to:Starowiejska+to:Szkolna,+Wo%C5%BAniki+to:Nieznana+droga+to:Brzeziny+Nowe+to:50.7958966,19.1033109+to:Nieznana+droga&amp;geocode=FaH0_AIdEWcgAQ%3BFRb9_AIdR2cgASkf3u-t_MkWRzFEonHklqzSuQ%3BFXGq_QIdtXAgASmpRLKY0csWRzH9c3wKNmOhxA%3BFdTJ_QIdiXQgASnhK95mw8sWRzEkdWVAz17WXw%3BFbTR_gIdMG0gASE1K9ycafHDFilHeIoJ_8wWRzE1K9ycafHDFg%3BFRLk_wIdrOUgASnZG6we79IWRzG4Usm1rHyeHg%3BFe3LAAMdyhQhASE-ZBi7FW6yRSmFm_Ysr9QWRzE-ZBi7FW6yRQ%3BFcwnAgMdV9YhAQ%3BFf2eAgMdKSoiAQ%3BFWxGBAMdOoQiASk9UqZRhNIQRzHrPEWphtbZxA%3BFeUVBQMdfP4iAQ%3BFW9PBgMdMlkjASmByeLXS8oQRzH3HIFTxXPmQA%3BFXgVBwMdTn4jASmd-ppP5LUQRzF6eVINVTjwZg%3BFbBWBwMdWGsjAQ&amp;sll=50.810247,19.103379&amp;sspn=0.011023,0.033023&amp;t=h&amp;hl=pl&amp;dirflg=w&amp;mra=dme&amp;mrsp=13&amp;sz=16&amp;via=1,2,3,12&amp;ie=UTF8&amp;ll=50.495958,19.099731&amp;spn=1.223044,3.47168&amp;z=8" style="color:#0000FF;text-align:left">Wyświetl większą mapę</a></small>
            <br/>
            <div class="cl"></div>
                        <div style="width:50%; float:left; text-align:left;">
            <br/>

            
             <div class="header" style="width:100%; margin:0px; background:#ffd42a ">
                <div>Plan pielgrzymki</div>
            </div>
            <br/>

                Oto plan tegorocznej pielgrzymki. Godziny postojów są oczywiście przybliżone. 
                <br/><br/>
                <strong>20.08 WTOREK</strong><br>
                6.00 - Rejestracja
                6.30 – Nabożeństwo<br>
                7.00 – Wyjście<br>
                10.30 - Postój w Kochłowicach,<br>
                13.30 – Postój w Bytomiu Łagiewnikach – Msza św.<br>
                17.00 - Piekary Śląskie<br>
                <br/>
                <strong>21.08 ŚRODA</strong><br>
                7.00 – Wyjście<br>
                9.30 – Postój w Brynicy,<br>
                12.00 – Postój "Pod lasem" w Bibieli - Msza Św.<br>
                16.30 – Woźniki<br>
                <br/>
               <strong>22.08 CZWARTEK</strong><br>
                7.00 – Wyjście<br>
                9.30 – Postój w Starczy<br>
                12.30 – Postój w Brzezinach Nowych - Msza Św.<br>
                16.30 – Jasna Góra!<br>
                <br/>
                <strong>23.08 PIĄTEK</strong><br>
                9.30 – Msza Św. pod obrazem<br>
                10.30 – Droga Krzyżowa na wałach<br>
                15.00 – Koronka przy parkingu<br>
                15.30 – Powrót do domu<br>
                </div>
            <div style="width:50%; float:right; text-align:right;">
                <br/>
                
                <div class="header" style="width:100%; margin:0px; background:#272727 ">
                    <div>Liczby</div>
                </div>
                <br>
                    W drogę ruszyło <strong>140</strong> pielgrzymów!
                    <br/>
                    Mamy przed sobą <strong>92 km</strong> marszu!
                    <br/>
                    Trasę pokonamy w ciągu <strong>4</strong> dni!
                    <br/>
                    Droga podzielona jest na <strong>10</strong> odcinków!
                    <br/>
                    Nasz śpiewnik ma <strong>20</strong> stron!
                    <br/>
                    W naszych sercach <strong>~ mnóstwo</strong> próśb i dziękczynienia!

                    <br/><br/>
                </span>
          </div>

          <div style="clear:both;"></div>
          <br/>
<!--            
            
            <div style="width:50%; float:left; font-size: 15px; text-align:left;">
            <br/>

			
			 <div class="header" style="width:100%; margin:0px; background:#ffd42a ">
                <div>Zapisy</div>
            </div>
            <br/>
			<span style="font-size:15px;">Zapisz się w zakrystii lub przez Internet. </span><br><br>
                            <em style="font-size:11px; line-height:0px;">Wpisz poniżej imię, nazwisko, adres zamieszkania <br> oraz PESEL. Możesz jednocześnie zapisać kilka osób</em>.
              <div style="clear:both;"></div><br/>
              Zapisy zamknięte.  -->
            <?php

                        // function form($text,$mail,$rozmiar)
                        // {
                        
                        // $dodajna=rand(1, 10);
                        // $dodajnik=rand(5, 15);
                        // $wynik=$dodajna+$dodajnik;
                        // echo'
                        // <form action="index.php" method="POST">
                        //     <span style="font-weight:bold; font-size:15px;">Twój e-mail:</span><br /><input name="mail" value="'.$mail.'"/><br/>
                        //     <span style="font-weight:bold; font-size:15px;">Twoje dane:</span><br /><textarea class="ta" name="text">'.$text.'</textarea><br/>
                        //     <span style="font-weight:bold; font-size:15px;">Rozmiary koszulek:</span><br /><input name="rozmiar" value="'.$rozmiar.'"/><br/>
                        //     <span style="font-weight:bold; font-size:15px;">Podaj wynik: '.$dodajna.'+'.$dodajnik.'=</span><br /><input name="wynik" /><br />
                        //     <input name="wynik2" type="hidden" value="'.$wynik.'"/><br />
                        //     <input name="wyslij" type="submit" value="Zapisz się!" style="width:70px;" /><br />
            
                        // </form>'
                        // ;
                        
                        
                        // }                   
                        
                        // if($_POST['wyslij'])
                        // {
                        //     $text=$_POST['text'];
                        //     $rozmiar=$_POST['rozmiar'];
                        //     $mail=$_POST['mail'];
                        //     $wynik=$_POST['wynik'];
                        //     $wynik2=$_POST['wynik2'];

                        //     if($wynik2==$wynik)
                        //     {
                            
                        //     if($text && $mail && $rozmiar)
                        //         {
                        //             $header = "From: $mail,\r\nReply-To: $mail\r\n";
                        //             if(mail ("mazik.wyry@gmail.com", "Zapisy na pielgrzymkę", $text."\nRozmiary: ".$rozmiar, $header ))
                        //                 echo'<br /><span class="good">Zostałeś zapisany! Jeżeli nie otrzymasz od nas odpowiedzi w ciągu kilku dni, skontaktuj się z nami!</span><br />';
                                    
                                    
                        //             form(NULL,NULL, NULL);
                        //         }
                        //         else
                        //         {   
                        //             echo'<br /><span class="bad">Podaj wszystkie potrzebne dane !</span><br />';
                        //             form($text,$mail,$rozmiar);
                        //         }
                            
                        //     }
                        //     else
                        //         {
                        //             echo'<br /><span class="bad">Błędny wynik - spróbuj jeczcze raz!</span><br />';
                        //             form($text,$mail,$rozmiar);
                        //         }
                        // }
                        // else
                        // form(NULL,NULL,NULL);
                        
                    ?>
<!-- 			</div>
			<div style="width:50%; float:right; font-size: 15px; text-align:right;">
                <br/>
                
                <div class="header" style="width:100%; margin:0px; background:#272727 ">
                    <div>Odliczanie</div>
                </div>
                <br>
                Za <strong><?php echo $endWorld['days']; ?> dni</strong> do często XXI Piesza Pielgrzymka Wyry-Częstochowa 2013. Zapisz się już dziś!
				
				</span>
		  </div> -->

          <div style="clear:both;"></div>
    		<!-- <br/><br/>
    		<div class="header" style="width:100%;  float:left; background:#272727 ">
    			<div>Zapisy na XXI pielgrzymkę otwarte!</div>
    		</div>
    		<br /><br />
    		XXI Piesza Pielgrzymka Wyry-Częstochowa 2013 wyruszy już za <?php echo $endWorld['days']; ?> dni w wyprawie do Częstochowskiej Pani, aby prosić ją o modlitwę do naszego najlepszego Ojca i dziękować mu za Jego miłość. W drodze znów będziemy go uwielbiać śpiewem i w ogóle nie ma co owijać w bawełnę - <Strong>NIE MOŻE CIĘ NA NIEJ ZABRAKNĄĆ!</Strong>. Dlatego zapisz się już dziś przez internet korzystając z formularza powyżej lub w zakrystii naszej parafii. Koszty oraz inne szczegóły podamy już wkrótce, dlatego śledź nas na bieżąco, bo właśnie ruszyły wielkie przygotowanie do żółtego przemarszu!
    		<br /><br /> -->

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
