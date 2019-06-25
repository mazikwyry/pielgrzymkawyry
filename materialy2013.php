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
      <div class="header">
        <div>Menu</div>
      </div>          
      <?php include('menu_left.php'); ?>

    </div>
    <div class="text">
      <div class="header" style="width:100%;">
          <div>RadioRelacja</div>
      </div>  
      <div class="p">
          W tym roku relację multimedialną stanowią materiały ze stacji radiowych, które mówiły w tym roku o naszej pielgrzymce. Są to wywiady, relacja z trasy oraz pieśni wykonane przez naszych pielgrzymów podczas Mszy Św. przed obrazem NMP Częstochowskiej. 
          <br/><br/>
          <iframe style="width:100%;" height="472" src="//www.youtube.com/embed/qNcqr3uMzD4?rel=0" frameborder="0" allowfullscreen></iframe>
          <div class="cl"></div>
      </div>

      <div class="header" style="width:100%;">
          <div>Materiały</div>
      </div>  

      <div class="p">
        Przeczytaj relację Gosi Sławęckiej <br />
        <a href="relacja2013.php">Pielgrzymkowa relacja &raquo;</a> <br /><br />
        Zobacz zdjęcia Moniki Schlimok:<br>
        <a target="_blank" href="https://plus.google.com/photos/112357734882373532332/albums/5915761241454242177">Zobacz zdjęcia »</a>
        <br><br>
        Opowiedz jak było! Podziękuj!<br /> Daj świadectwo, że warto pielgrzymować! <br />
        <a href="ksiega.php">Pielgrzymkowa Księga Wrażeń &raquo;</a> <br /><br />
        Śpiewaj w domu<br>
        <a target="_blank" href="spiewnik2013.pdf">Pobierz śpiewnik 2013 »</a>
      </div>

      <div class="header" style="width:100%;">
          <div>Muzycznie</div>
      </div> 

      <div class="p">
        Oto singiel płyty God's Property. Płytę będzie można jeszcze nabyć podczas spotkania popielgrzymkowego we wrześniu.
        <br/><br/>
        <iframe width="316" height="430" src="//www.youtube.com/embed/d3qFfbIw8f4?rel=0" frameborder="0" allowfullscreen></iframe><br/><br/>
        Więcej informacji na <a href="http://www.godsproperty.pl">godsproperty.pl</a>
        <br/><br/>
        Polecamy też pytę TGD, z której pochodzi hit tegorocznej pielgrzymki.<br/><br>
        <a href="http://mazikwyry.wrzuta.pl/audio/6SEzJ9vlkIS/tgd_-_najedzie_dzien" target="_blank" >Posuchaj</a><br/><br/>
        Płytę można nabyć <a href="http://sklepgift.pl/">tu</a>.
        <audio src="tgd.wma"></audio>
      </div>

      <div class="header" style="width:100%;">
          <div>Podziękowania</div>
      </div>
      <div class="p">
          21 Piesza Pielgrzymka Wyry-Częstochowa 2013 dobiegła końca. W tym roku na trasie było wiele niespodzianek, ale mimo tego doszliśmy bez problemu. Jak zwykle było to niesamowite doświadczenie duchowe, ale też i wspólnotowe. Już wkrótce na stronie pojawią się relacje, zdjęcia i inne ciekawe materiały.
          <br/><br/>
          Serdecznie dziękujemy wszystkim, którzy pomogli w organizacji pielgrzymki:
          <ul>
              <li>Barbara Prasoł</li>
              <li>Henryk Serafin</li>
              <li>Piekarnia w Wyrach</li>
              <li>Maria Targiel</li>
              <li>Piotr Sosna (Prezes)</li>
              <li>Stanisław Krzyżowski</li>
          </ul>
          Dziękujemy także pielgrzymom, którzy dorzucili się na cele pielgrzymkowe. Będziemy mogli dzięki temu dokupić dodatkowy akumulator do tuby.<br/>
          Nietrudno kogoś pominąć w podziękowaniach, więc dziękujemy każdemu kto choćby w niewielkim stopniu przyczynił się czynem lub modlitwą do naszej wędrówki.<br/><br/>
          Nade wszystko dziękujemy Bogu, który nam błogosławił i bez którego ta pielgrzymka nie miałaby sensu oraz Matce Bożej za wstawiennictwo.  
          <br/>
          <div style="clear:both;"></div>
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



<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "//www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '474',
          width: '632',
          videoId: 'I5ySy9-oVq4',
          events: {
            'onReady': onPlayerReady
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.setPlaybackQuality("highres");
      }

    </script>
    