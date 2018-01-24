<section class="programma">
  <select name='tag' id='tag'>
    <option disabled selected>Kies een datum</option>
    <?php foreach($events as $event): ?>
      <option><?php echo date('d/m/Y', strtotime($event['start']));?></option>
      <option><?php echo date('d/m/Y', strtotime($event['end']));?></option>
    <?php endforeach ?>
  </select>

  <?php foreach($events as $event): ?>
    <article style="background:url(assets/events/<?php echo $event['code'];?>/thumb.jpg)">
      <div class="">
        <h2><?php echo $event['title']; ?></h2>
        <a href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>">Meer info</a>
      </div>
    </article>
  <? endforeach;?>
</section>
