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
          <div>Pielgrzymka oczami dzeci</div>
      </div>  
      <div class="p">
          <iframe style="width:100%;" height="472" src="//www.youtube.com/embed/7ARtmpkmKDg?rel=0" frameborder="0" allowfullscreen></iframe>
          <div class="cl"></div>
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
    