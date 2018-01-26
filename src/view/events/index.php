<section class="hero">
  <div class="container">
    <h1>Week van de<br>
    mobiliteit</h1>
    <h1 class="smalltext">16 tot 22 september 2018</h1>
  </div>
</section>

<main>

  <section class="container">
    <h2>Uitgelichte activeiteiten</h2>
    <div class="events">
      <?php foreach($eventHighlights as $eventHighlight): ?>
        <article class="event" style="background:url(assets/events/<?php echo $eventHighlight['code'];?>/thumb.jpg)">
          <h2 class="date_event"><?php echo date('d/m', strtotime($eventHighlight['start']));?></h2>
          <div class="event_container">
            <h2 class="event_title"><?php echo $eventHighlight['title']; ?></h2>
            <p class="shortinfo"><?php echo $eventHighlight['content'] ?></p>
            <a href="index.php?page=detail&amp;id=<?php echo $eventHighlight['id']; ?>" class="event_link">Meer info</a>
          </div>
        </article>
      <?php endforeach;?>
    </div>
  <a href="index.php?page=programma" class="fullprogram">Volledige programma</a>
  </section>

  <section class="container watisdeweek">
    <img src="assets/img/weekvanmobiliteit.png" alt="">
    <div class="flextext">
      <h2>Wat is de week van de mobiliteit?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium neque ante, id volutpat metus pulvinar non. Fusce quis magna fringilla, volutpat est eget, congue tortor. Phasellus ac pellentesque arcu, feugiat ultrices nisl. Suspendisse potenti. </p>
      <a href="#">Ontdek de week van de mobiliteit</a>
    </div>
  </section>
  <section class="news container">
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
  <section class="container partners">
    <h2>Partners</h2>
    <div class="partner_container">
      <img src="assets/img/EU_Mobiliy_Week.svg" alt="">
      <img src="assets/img/nmbs.svg" alt="">
      <img src="assets/img/delijn.svg" alt="">
      <img src="assets/img/vlaanderenmobi.svg" alt="">
    </div>
  </section>
</main>
