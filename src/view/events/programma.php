<section class="programma container">
  <div class="container">
    <h1>Programma</h1>
    <form class="" action="?page=programma" method="get">
      <select name='date' id='date'>
        <option disabled selected>Kies een datum</option>
        <?php foreach($events as $event): ?>
          <option><?php echo date('d/m/Y', strtotime($event['start']));?></option>
          <option><?php echo date('d/m/Y', strtotime($event['end']));?></option>
        <?php endforeach ?>
      </select>
      <input type="hidden" name="page" value="programma">
      <input type="submit" name="action" value=" " class="search">
    </form>
    <form class="" action="?page=programma" method="get">
      <input type="text" name="postal" placeholder="Postcode ..." id="search">
      <input type="hidden" name="page" value="programma">
      <input type="submit" name="action" value=" " class="search">
  </form>
  </div>
</section>
<section class="events container">
<?php foreach($events as $event): ?>
  <article class="event" style="background:url(assets/events/<?php echo $event['code'];?>/thumb.jpg)">
    <h2 class="date_event"><?php echo date('d/m', strtotime($event['start']));?></h2>
    <div class="event_container">
      <h2 class="event_title"><?php echo $event['title']; ?></h2>
      <p class="shortinfo"><?php echo $event['content'] ?></p>
      <a href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>" class="event_link">Meer info</a>
    </div>
  </article>
<?php endforeach;?>
</section>
