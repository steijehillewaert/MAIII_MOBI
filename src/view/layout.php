<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informatie website rond de week van de mobiliteit">
    <meta name="keywords" content="Week van de mobiliteit, mobiliteit, fiets, auto, strapdag, car free day">
    <meta name="author" content="Steije Hillewaert">
    <title>Week van de mobiliteit</title>
    <script>
     WebFontConfig = {
       custom: {
         families: ['AvenirNext', 'Texgyreschola'],
         urls: ['assets/fonts/fonts.css']
       }
     };

     (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
     })(document);
  </script>
    <?php echo $css;?>
  </head>
  <body>
      <header class="nav">
        <div class="container header">
          <nav>
            <ul>
              <li><a href="index.php" class="<?php if($currentPage == 'index') echo ' active';?>">#weekvandemobiliteit</a></li>
              <li><a href="index.php?page=programma" class="<?php if($currentPage == 'programma') echo ' active';?>">Programma</a></li>
              <li><a href="#">Info</a></li>
              <li><a href="#">Partners</a></li>
            </ul>
          </nav>
          <form class="" action="index.php?page=programma" method="get">
            <input type="text" name="query" placeholder="Zoek een actie ..." id="search" class="search_field" value="">
            <input type="hidden" name="page" value="programma" >
            <input type="submit" class="search" value=" ">
          </form>
        </div>
      </header>

      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>

      <footer>
        <div class="container footer">
          <div class="nieuwsbrief">
            <h3>Nieuwsbrief</h3>
            <h3 class="small">Blijf op de hoogte van de laatste details en nieuwtjes</h3>
            <input type="text" name="" value="" placeholder="abbonneer nu" class="search_field">
            <input type="hidden" name="page" value="programma">
            <input type="submit" name="Verzenden" value="Verzenden" class="send">
          </div>
          <div class="social">
            <h3>Week van de mobiliteit</h3>
            <h3 class="small">16 tot 22 september 2018</h3>
            <a href="#"><img src="assets/img/facebook.svg" alt="" class="socialbutton"></a>
            <a href="#"><img src="assets/img/twitter.svg" alt="" class="socialbutton"></a>
          </div>
        </div>
      </footer>

    <?php echo $js;?>
  </body>
</html>
