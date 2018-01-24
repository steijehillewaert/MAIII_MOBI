<section class="hero">
  <h1>Week van de <br>
  mobiliteit</h1>
  <h1>16 tot 22 september 2018</h1>
</section>

<main>
  <h2>Uitgelichte activeiteiten</h2>
  <section class="events container">
  <?php foreach($eventHighlights as $eventHighlight): ?>
    <article class="event" style="background:url(assets/events/<?php echo $eventHighlight['code'];?>/thumb.jpg)">
      <h2 class="date_event"><?php echo date('d/m', strtotime($eventHighlight['start']));?></h2>
      <div class="event_container">
        <h2 class="event_title"><?php echo $eventHighlight['title']; ?></h2>
        <a href="index.php?page=detail&amp;id=<?php echo $eventHighlight['id']; ?>">Meer info</a>
      </div>
    </article>
  <? endforeach;?>
  <a href="index.php?page=programma">Volledige programma</a>
  </section>

  <section class="container">
    <img src="#" alt="">
    <h2>Wat is de week van de mobiliteit?</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium neque ante, id volutpat metus pulvinar non. Fusce quis magna fringilla, volutpat est eget, congue tortor. Phasellus ac pellentesque arcu, feugiat ultrices nisl. Suspendisse potenti. </p>
    <a href="#">Ontdek de week van de mobiliteit</a>
  </section>
  <section class="news">
    <div class="blue">
      <h3>Dien je actie in voor <br>
        de week van de mobiliteit 2018</h3>
    </div>
    <div class="green">
      <h3>Nieuwsbrief</h3>
      <p>Blijf op de hoogte van de laatste details en nieuwtjes</p>
      <input type="text" name="" value="">
      <input type="submit" name="Verzenden" value="nieuwsbrief">
    </div>
  </section>
  <section>
    <h2>Partners</h2>
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
    <img src="#" alt="">
  </section>
</main>
