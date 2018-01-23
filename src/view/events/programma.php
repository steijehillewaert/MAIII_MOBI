<section class="programma">
  <?php foreach($events as $event): ?>
    <article style="background:url(assets/events/<?php echo $event['code'];?>/thumb.jpg)">
      <div class="">
        <h2><?php echo $event['title']; ?></h2>
        <a href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>">Meer info</a>
      </div>
    </article>
  <? endforeach;?>
</section>
