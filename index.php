<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Flappy Jeff</title>
    <link rel="apple-touch-icon-precomposed" href="data/img/trademark_76.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="data/img/trademark_76.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="data/img/trademark_120.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="data/img/trademark_152.png"/>
    <link rel="shortcut icon" href="data/img/trademark_76.png">
    <link rel="stylesheet" type="text/css" media="screen" href="index.css">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Flappy Jeff">
    <meta charset="UTF-8" />
    <meta name="description" content="Flappy Jeff - The CrossChx Flappy Bird"/>
    <meta name="keywords" content="flappybird, Flappy, Jeff"/>
    <meta name="robots" content="index, follow">
    <meta property="og:image" content="data/img/trademark.png" />
    <meta property="og:title" content="Flappy Jeff - The CrossChx Flappy Bird"/>
    <meta property="og:url" content="https://flappyjeff.com/"/>
    <meta property="og:site_name" content="Flappy Jeff"/>

    <!-- Twitter Card -->
    <meta name="twitter:hashtag" content="flappyjeff" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@crosschx" />
    <meta name="twitter:creator" content="@crosschx" />
    <meta name="twitter:title" content="Flappy Jeff" />
    <meta name="twitter:description" content="The CrossChx Flappy Bird" />
    <link rel="stylesheet" type="text/css" href="addtohomescreen.css">
    <script src="js/addtohomescreen.min.js"></script>
  </head>

  <body>
    <!-- Canvas placeholder -->
    <div id="screen"></div>

    <!-- melonJS Library -->
    <script type="text/javascript" src="js/melonJS-2.1.1-min.js"></script>
    <script type="text/javascript" src="js/debugPanel.js" ></script>
    <script type="text/javascript" src="build/clumsy-min.js" ></script>
    <!-- Bootstrap & Mobile optimization tricks -->
    <script type="text/javascript">
      window.onReady(function onReady() {

        game.onload();
        // Mobile browser hacks
        if (me.device.isMobile && !navigator.isCocoonJS) {
          // Prevent the webview from moving on a swipe
          window.document.addEventListener("touchmove", function (e) {
            e.preventDefault();
            window.scroll(0, 0);
            return false;
          }, false);

          // Scroll away mobile GUI
          (function () {
            window.scrollTo(0, 1);
            me.video.onresize(null);
          }).defer();

          me.event.subscribe(me.event.WINDOW_ONRESIZE, function (e) {
            window.scrollTo(0, 1);
          });
        }
      });
    </script>

  </body>
</html>
