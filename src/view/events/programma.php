<section class="programma container">
  <div class="container">
    <h1>Programma</h1>
    <form class="" action="?page=programma" method="get">
      <select name='date' id='date'>
        <option disabled selected>Kies een datum</option>
        <option value="09/09/2018">09/09/2018</option>
        <option value="16/09/2018">16/09/2018</option>
        <option value="17/09/2018">17/09/2018</option>
        <option value="18/09/2018">18/09/2018</option>
        <option value="19/09/2018">19/09/2018</option>
        <option value="20/09/2018">20/09/2018</option>
        <option value="21/09/2018">21/09/2018</option>
        <option value="22/09/2018">22/09/2018</option>
        <option value="22/09/2018">24/09/2018</option>
      </select>
      <input type="hidden" name="page" value="programma">
      <input type="submit" class="search" value=" ">
    </form>
    <form action="?page=programma" method="get">
      <input type="text" name="postal" placeholder="Postcode ..." id="search">
      <input type="hidden" name="page" value="programma">
      <input type="submit" class="search" value=" ">
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
