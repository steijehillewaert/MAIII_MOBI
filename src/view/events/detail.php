<header style="background:url(assets/events/<?php echo $events['code'];?>/banner.jpg)">
  <h1><?php echo($events['title']);?></h1>
  <div>
    <ul>
      <li><?php echo($events['location']);?></li>
      <li><?php echo date('d/m/Y', strtotime($events['start']));?></li>
      <li><?php echo date('G:i', strtotime($events['start']));?> - <?php echo date('G:i', strtotime($events['end']));?></li>
      <li><a href="<?php echo $events['link'];?>" target="_blank">Link</a></li>
    </ul>
  </div>
</header>
<main>
  <section>
    <h2>Info</h2>
    <p><?php echo $events['content'];?></p>
  </section>
  <aside>
    <h3>Tags</h3>
    <ul>
      <?php foreach($events['tags'] as $tag): ?>
        <li><?php echo $tag['tag'];?></li>
      <?php endforeach;?>
    </ul>
    <address>
      <?php echo $events['address'];?> <br>
      <?php echo $events['postal'];?> <?php echo $events['city'];?>
    </address>
    <ul>
      <?php foreach($events['organisers'] as $organiser): ?>
        <li><?php echo $organiser['name'];?></li>
      <?php endforeach;?>
    </ul>
  </aside>

  <section>
    <p>hey</p>
    <img src="assets/events/<?php echo $events['code'];?>/big1.jpg" alt="">
    <img src="assets/events/<?php echo $events['code'];?>/big2.jpg" alt="">
    <article>
      <h2>Praktisch</h2>
      <p><?php echo $events['practical']; ?></p>
    </article>
  </section>
  <section>
    <h2>Aanbevolen activeiteiten</h2>
  </section>
</main>
