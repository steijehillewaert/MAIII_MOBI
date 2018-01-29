<section class="hero">
  <div class="container">
    <h1>Week van de<br>
    mobiliteit</h1>
    <h1 class="smalltext">16 tot 22 september 2018</h1>
    <a href="index.php?page=programma" class="fullprogram button pinkgreen">Programma Overzicht</a>
  </div>
</section>

<main>

  <section class="container">
    <h2>Uitgelichte activeiteiten</h2>
    <div class="events">
      <?php foreach($eventHighlights as $eventHighlight): ?>
        <article class="event">
          <picture class="picturecontainer">
            <source type="image/webp" srcset="assets/events/<?php echo $eventHighlight['code'];?>/thumb.webp">
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
    </div>
    <div class="center">
      <a href="index.php?page=programma" class="fullprogram button bluegreen">Volledige programma</a>
    </div>
  </section>

  <section class="container watisdeweek">
    <picture class="picturecontainerHome">
      <source type="image/webp" sizes="(max-width: 460px) 100vw, 460px" srcset="assets/img/weekvanmobiliteit_zed8db_c_scale,w_200.webp 200w,
      assets/img/weekvanmobiliteit_zed8db_c_scale,w_289.webp 289w,
      assets/img/weekvanmobiliteit_zed8db_c_scale,w_361.webp 361w,
      assets/img/weekvanmobiliteit_zed8db_c_scale,w_424.webp 424w,
      assets/img/weekvanmobiliteit_zed8db_c_scale,w_460.webp 460w">
        <img
          sizes="(max-width: 460px) 100vw, 460px"
          srcset="
          assets/img/weekvanmobiliteit_zed8db_c_scale,w_200.png 200w,
          assets/img/weekvanmobiliteit_zed8db_c_scale,w_289.png 289w,
          assets/img/weekvanmobiliteit_zed8db_c_scale,w_361.png 361w,
          assets/img/weekvanmobiliteit_zed8db_c_scale,w_424.png 424w,
          assets/img/weekvanmobiliteit_zed8db_c_scale,w_460.png 460w"
          src="assets/img/weekvanmobiliteit_zed8db_c_scale,w_460.png"
          alt="">
    </picture>
    <div class="flextext">
      <h2>Wat is de week van de mobiliteit?</h2>
      <p>De week van de mobiliteit (16 tot 22 september 2018) is <em>een initiatief van het Netwerk Duurzame Mobiliteit</em> om mensen een hele week onder andere de auto te minderen, mensen laten proeven van alternatieve verplaatsingen en tal van andere acties.</p><p> Zet je eigen actie op poten en wie weet win jij een mooie prijs! <em><a href='https://twitter.com/hashtag/goedopweg'>#goedopweg</a></em> </p>
      <div class="buttonFlex">
        <a href="#" class="button pinkgreen">Ontdek de week <br>van de mobiliteit</a>
      </div>
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
      <form action="#" >
        <input type="text" name="emailadres" placeholder="uw emailadres ...">
        <input type="submit" value="Verzenden">
      </form>
    </div>
  </section>
  <section class="container partners">
    <h2>Partners</h2>
    <div class="partner_container">
      <img src="assets/img/EU_Mobiliy_Week.svg" width="161" height="100rem" alt="logo EU Mobiliy">
      <img src="assets/img/nmbs.svg" width="177" height="100rem" alt="logo nmbs">
      <img src="assets/img/delijn.svg" width="113" height="100rem" alt="logo de lijn">
      <img src="assets/img/vlaanderenmobi.svg" width="224" height="100rem" alt="logo vlaanderen mobiliteit">
    </div>
  </section>
</main>
