<header style="background:url(assets/events/<?php echo $events['code'];?>/banner.jpg)" class="header_detail">
  <div class="container title">
    <h1 class="detail_banner"><?php echo($events['title']);?></h1>
  </div>
</header>
<div class="detail_info">
  <ul class="container detail_info-items">
    <li class="location"><?php echo($events['city']);?></li>
    <li class="date"><?php echo date('d/m/Y', strtotime($events['start']));?> - <?php echo date('d/m/Y', strtotime($events['end']));?></li>
    <li class="time"><?php echo date('G:i', strtotime($events['start']));?> - <?php echo date('G:i', strtotime($events['end']));?></li>
    <li class="link"><a href="<?php echo $events['link'];?>" target="_blank">Link</a></li>
  </ul>
</div>
<main class="flex container detail">
  <section>
    <h2 class="detail_title">Info</h2>
    <p><?php echo $events['content'];?></p>
  </section>
  <aside>
      <h3>Tags</h3>
      <ul>
        <?php foreach($events['tags'] as $tag): ?>
          <li><?php echo $tag['tag'];?></li>
        <?php endforeach;?>
      </ul>

    <div class="border">
      <h3>Adres</h3>
      <address>
        <?php echo $events['address'];?> <br>
        <?php echo $events['postal'];?> <?php echo $events['city'];?>
      </address>
    </div>

      <h3>Organisers</h3>
      <ul>
        <?php foreach($events['organisers'] as $organiser): ?>
          <li><?php echo $organiser['name'];?></li>
        <?php endforeach;?>
      </ul>
    </div>
  </aside>
</main>
  <section class="gray">
    <div class="container pratical">
      <div class="images_pratical">
        <img src="assets/events/<?php echo $events['code'];?>/big1.jpg" alt="">
      </div>
      <?php if($events['practical']): ?>
        <article class="pratical_text">
          <h2>Praktisch</h2>
          <p><?php echo $events['practical']; ?></p>
        </article>
      <?php endif ?>
    </div>
  </section>
  <div class="container">
    <h2>Aanbevolen activeiteiten</h2>
  </div>
  <section class="events container">
    <?php foreach($eventHighlights as $eventHighlight): ?>
        <article class="event">
          <img src="assets/events/<?php echo $eventHighlight['code'];?>/thumb.jpg" alt="" class="imagefit">
          <h2 class="date_event"><?php echo date('d/m', strtotime($eventHighlight['start'])); ?></h2>
          <div class="event_container">
            <div class="top_event">
              <p><?php echo $eventHighlight['city'] ?></p>
              <p><?php echo date('H:i', strtotime($eventHighlight['start'])); ?> - <?php echo date('H:i', strtotime($eventHighlight['end'])); ?></p>
            </div>
            <h2 class="event_title"><?php echo $eventHighlight['title']; ?></h2>
            <p class="shortinfo"><?php echo $eventHighlight['content'] ?></p>
            <a href="index.php?page=detail&amp;id=<?php echo $eventHighlight['id']; ?>" class="event_link">Meer info</a>
          </div>
        </article>
    <?php endforeach;?>
  </section>
