<div class="all">
  <picture class="picturecontainer">
    <source type="image/webp" srcset="assets/events/<?php echo $events['code'];?>/banner.webp" height="400">
    <img src="assets/events/<?php echo $events['code'];?>/banner.jpg" alt="" height="400">
  </picture>
  <div class="detail_header_all">
    <header class="header_detail">
      <div class="container title">
        <h1 class="detail_banner"><?php echo($events['title']);?></h1>
      </div>
    </header>
    <div class="detail_info">
      <ul class="container detail_info-items">
        <li class="location"><?php echo($events['city']);?></li>
        <?php if(date('d/m/Y', strtotime($events['start'])) == date('d/m/Y', strtotime($events['end'])) ) : ?>
          <li class="date"><?php echo date('d/m/Y', strtotime($events['start']));?></li>
        <?php else : ?>
          <li class="date"><?php echo date('d/m/Y', strtotime($events['start']));?> - <?php echo date('d/m/Y', strtotime($events['end']));?></li>
        <?php endif ?>
        <li class="time"><?php echo date('G:i', strtotime($events['start']));?> - <?php echo date('G:i', strtotime($events['end']));?></li>
        <li class="link"><a href="<?php echo $events['link'];?>" target="_blank">Link</a></li>
      </ul>
    </div>
  </div>
</div>
<main class="flex container detail">
  <section>
    <h2 class="detail_title">Info</h2>
    <?php echo $events['content'];?>
  </section>
  <aside>
      <h3>Tags</h3>
      <ul>
        <?php foreach($events['tags'] as $tag): ?>
          <li><?php echo $tag['tag'];?></li>
        <?php endforeach;?>
      </ul>

    <div class="border">
      <h3>Locatie</h3>
      <address>
        <?php if($events['location'] === $events['address']) : ?>
          <?php echo $events['address'];?> <br>
        <?php else : ?>
          <?php echo $events['location'];?> <br>
        <?php endif ?>
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
  <?php $file = 'assets/events/'.$events['code'].'/big1.jpg' ?>
  <?php if (file_exists($file) || $events['practical']) : ?>
  <section class="gray">
    <div class="container pratical <?php if(!$events['practical']){ echo 'centerimage';} ?>">
      <?php if (file_exists($file)): ?>
      <div class="images_pratical">
          <picture>
            <source type="image/webp" srcset="assets/events/<?php echo $events['code'];?>/big1.webp">
            <img src="assets/events/<?php echo $events['code'];?>/big1.jpg" alt="">
          </picture>
      </div>
      <?php endif ?>
      <?php if($events['practical']): ?>
        <article class="pratical_text">
          <h2>Praktisch</h2>
          <?php echo $events['practical']; ?>
        </article>
      <?php endif ?>
    </div>
  </section>
  <?php endif ?>
  <div class="container">
    <h2>Aanbevolen activeiteiten</h2>
  </div>
  <section class="events container">
    <?php foreach($eventHighlights as $eventHighlight): ?>
        <article class="event">
          <picture class="picturecontainer">
            <source type="image/webp" srcset="assets/events/<?php echo $eventHighlight['code'];?>/thumb.webp" height="350">
            <img src="assets/events/<?php echo $eventHighlight['code'];?>/thumb.jpg" alt="" height="350">
          </picture>
          <h2 class="date_event"><?php echo date('d/m', strtotime($eventHighlight['start'])); ?></h2>
          <div class="event_container">
            <div class="top_event">
              <p><?php echo $eventHighlight['city'] ?></p>
              <p><?php echo date('H:i', strtotime($eventHighlight['start'])); ?> - <?php echo date('H:i', strtotime($eventHighlight['end'])); ?></p>
            </div>
            <h2 class="event_title"><?php echo $eventHighlight['title']; ?></h2>
            <p class="shortinfo"><?php echo $eventHighlight['shortinfo'] ?></p>
            <a href="index.php?page=detail&amp;id=<?php echo $eventHighlight['id']; ?>" class="event_link">Meer info</a>
          </div>
        </article>
    <?php endforeach;?>
  </section>
