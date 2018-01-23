<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Week van de mobiliteit</title>
    <?php echo $css;?>
  </head>
  <body>
      <header>
        <nav>
          <ul>
            <li><a href="index.php">#weekvandemobiliteit</a></li>
            <li><a href="index.php?page=programma">Programma</a></li>
            <li><a href="#">Info</a></li>
            <li><a href="#">Partners</a></li>
          </ul>
        </nav>
        <form class="" action="#" method="post">
          <input type="text" name="" value="">
          <input type="submit" name="Zoek" value="zoek">
        </form>
      </header>

      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>

      <footer>
        <div class="nieuswbrief">
          <h3>Nieuwsbrief</h3>
          <p>Blijf op de hoogte van de laatste details en nieuwtjes</p>
          <input type="text" name="" value="">
          <input type="submit" name="Verzenden" value="nieuwsbrief">
        </div>
        <div class="social">
          <h3>Week van de mobiliteit</h3>
          <h3>16 tot 22 september 2018</h3>
          <img src="" alt="">
          <img src="" alt="">
        </div>
      </footer>

    <?php echo $js;?>
  </body>
</html>
