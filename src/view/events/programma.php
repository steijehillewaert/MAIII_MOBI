<section class="programma container">
  <div class="container">
    <h1>Programma</h1>
    <form class="" action="?page=programma" method="get">
      <select name='date' id='date'>
        <option disabled selected value="2018-09-16" class="select">Kies een datum</option>
        <option value="2018-09-09" <?php if(!empty($_GET['date']) && $_GET['date'] == '2018-09-09') echo 'selected';?>>09/09/2018</option>
        <option value="2018-09-16" <?php if(!empty($_GET['date']) && $_GET['date'] == '2018-09-16') echo 'selected';?>>16/09/2018</option>
        <option value="2018-09-17" <?php if(!empty($_GET['date']) && $_GET['date'] == '2018-09-17') echo 'selected';?>>17/09/2018</option>
        <option value="2018-09-18" <?php if(!empty($_GET['date']) && $_GET['date'] == '2018-09-18') echo 'selected';?>>18/09/2018</option>
        <option value="2018-09-19" <?php if(!empty($_GET['date']) && $_GET['date'] == '2018-09-19') echo 'selected';?>>19/09/2018</option>
        <option value="2018-09-20" <?php if(!empty($_GET['date']) && $_GET['date'] == '2018-09-20') echo 'selected';?>>20/09/2018</option>
        <option value="2018-09-21" <?php if(!empty($_GET['date']) && $_GET['date'] == '2018-09-21') echo 'selected';?>>21/09/2018</option>
        <option value="2018-09-22" <?php if(!empty($_GET['date']) && $_GET['date'] == '2018-09-22') echo 'selected';?>>22/09/2018</option>
        <option value="2018-09-24" <?php if(!empty($_GET['date']) && $_GET['date'] == '2018-09-24') echo 'selected';?>>24/09/2018</option>
      </select>
      <input type="text" name="postal" placeholder="Gemeente ..." <?php if(!empty($_GET['postal'])) echo 'value="' . $_GET['postal'] . '"';?>>
      <input type="hidden" name="page" value="programma">
      <input type="submit" class="search noJS" value=" ">
    </form>
    <input type="submit" name="reset" class="reset hide" value="Reset Filter">
    <a href="?page=programma" class="reset noJS">Reset Filter</a>
  </div>
</section>
<section class="events container ajaxSearch">
<?php foreach($events as $event): ?>
  <article class="event">
    <picture class="picturecontainer">
      <source type="image/webp" srcset="assets/events/<?php echo $event['code'];?>/thumb.webp">
      <img src="assets/events/<?php echo $event['code'];?>/thumb.jpg" alt="" height="350">
    </picture>
    <?php if($event['startFormatted'] === $event['endFormatted']) : ?>
      <h2 class="date_event"><?php echo $event['startFormatted'] ?></h2>
    <?php else : ?>
      <h2 class="date_event"><?php echo $event['startFormatted'] ?> - <?php echo $event['endFormatted'] ?></h2>
    <?php endif ?>
    <div class="event_container">
      <div class="top_event">
        <p><?php echo $event['city'] ?></p>
        <p><?php echo $event['startTimeFormatted'] ?> - <?php echo $event['endTimeFormatted'] ?></p>
      </div>
      <h2 class="event_title"><?php echo $event['title']; ?></h2>
      <p class="shortinfo"><?php echo $event['shortinfo'] ?></p>
      <a href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>" class="event_link">Meer info</a>
    </div>
  </article>
<?php endforeach;?>
</section>
