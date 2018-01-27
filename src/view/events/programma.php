<section class="programma container">
  <div class="container">
    <h1>Programma</h1>
    <form class="" action="?page=programma" method="get">
      <select name='date' id='date'>
        <option disabled selected>Kies een datum</option>
        <option value="2018-09-09">09/09/2018</option>
        <option value="2018-09-16">16/09/2018</option>
        <option value="2018-09-17">17/09/2018</option>
        <option value="2018-09-18">18/09/2018</option>
        <option value="2018-09-19">19/09/2018</option>
        <option value="2018-09-20">20/09/2018</option>
        <option value="2018-09-21">21/09/2018</option>
        <option value="2018-09-22">22/09/2018</option>
        <option value="2018-09-22">24/09/2018</option>
      </select>
      <input type="hidden" name="page" value="programma">
      <!-- <input type="submit" class="search" value=" ">
    </form> -->
    <form action="?page=programma" method="get">
      <input type="text" name="postal" placeholder="Postcode ..." id="search">
      <input type="hidden" name="page" value="programma">
      <input type="submit" class="search" value=" ">
  </form>
  </div>
</section>
<section class="events container ajaxSearch">
<?php foreach($events as $event): ?>
  <article class="event">
    <img src="assets/events/<?php echo $event['code'];?>/thumb.jpg" alt="" class="imagefit">
    <h2 class="date_event"><?php echo $event['startFormatted'] ?></h2>
    <div class="event_container">
      <div class="top_event">
        <p><?php echo $event['city'] ?></p>
        <p><?php echo date('d/m', strtotime($event['start']));?></p>
      </div>
      <h2 class="event_title"><?php echo $event['title']; ?></h2>
      <p class="shortinfo"><?php echo $event['content'] ?></p>
      <a href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>" class="event_link">Meer info</a>
    </div>
  </article>
<?php endforeach;?>
</section>
