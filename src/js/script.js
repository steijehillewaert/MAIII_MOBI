const $searchInput = document.querySelector(`.search_field`);
const $events = document.querySelector(`.ajaxSearch`);
const $postalInput = document.querySelector(`[name="postal"]`);
const $dateInput = document.querySelector(`[name="date"]`);
const $resetButton = document.querySelector(`.reset`);
const $noJS = document.querySelectorAll(`.noJS`);

const init = () => {
  $noJS.forEach(removeClass => {
    removeClass.remove();
  });

  if($searchInput){
    $searchInput.addEventListener(`input`, handleInputSearch);
  }
  if($postalInput){
    $postalInput.addEventListener(`input`, handleFilterSearch);
  }
  if($dateInput){
    $dateInput.addEventListener(`input`, handleFilterSearch);
  }
  if($resetButton){
    $resetButton.addEventListener(`click`, handleResetButton);
    $resetButton.classList.remove(`hide`);
  }
};

const handleInputSearch = () => {
  const q = $searchInput.value.trim();
  // console.log(q);
  fetch(`index.php?query=${q}&page=programma`, {
    headers: new Headers({
      Accept: `application/json`
    })
  })
    .then(r => r.json())
    .then(data => parse(data));


  const parse = results => {
    if(results.length === 0){
      $events.innerHTML = `<p>Geen resultaten gevonden :'(</p>`;
    }else{
      $events.innerHTML = results
        .map(event => createEvent(event))
        .join(``);
    }
  };

};

const handleResetButton = () => {
  // console.log(`test`);
  fetch(`index.php?page=programma`, {
    headers: new Headers({
      Accept: `application/json`
    })
  })
    .then(r => r.json())
    .then(data => parseFilter(data));


  const parseFilter = results => {
    $events.innerHTML = results
      .map(event => createEvent(event))
      .join(``);
    $postalInput.value = ``;
    $dateInput.value = `2018-09-16`;
  };
};

const handleFilterSearch = () => {
  const postal = $postalInput.value.trim();
  const date = $dateInput.value;
  // console.log(postal);
  fetch(`index.php?date=${date}&postal=${postal}&page=programma`, {
    headers: new Headers({
      Accept: `application/json`
    })
  })
    .then(r => r.json())
    .then(data => parseFilter(data));


  const parseFilter = results => {
    if(results.length === 0){
      $events.innerHTML = `<p>Geen resultaten gevonden :'(</p>`;
    }else{
      $events.innerHTML = results
        .map(event => createEvent(event))
        .join(``);
    }
  };
};



const createEvent = event => {
  // console.log(event);

  if(event.startFormatted === event.endFormatted){
    return `
      <article class="event">
        <picture class="picturecontainer">
          <source type="image/webp" srcset="assets/events/${event.code}/thumb.webp" height="350">
          <img src="assets/events/${event.code}/thumb.jpg" alt="" height="350">
        </picture>
        <h2 class="date_event">${event.startFormatted}</h2>
        <div class="event_container">
          <div class="top_event">
            <p>${event.city}</p>
            <p>${event.startTimeFormatted} - ${event.endTimeFormatted}</p>
          </div>
          <h2 class="event_title">${event.title}</h2>
          <p class="shortinfo">${event.shortinfo}</p>
          <a href="index.php?page=detail&amp;id=${event.id}" class="event_link">Meer info</a>
        </div>
      </article>
      `;
  }else{
    return `
      <article class="event">
        <picture class="picturecontainer">
          <source type="image/webp" srcset="assets/events/${event.code}/thumb.webp" height="350">
          <img src="assets/events/${event.code}/thumb.jpg" alt="" height="350">
        </picture>
        <h2 class="date_event">${event.startFormatted} - ${event.endFormatted}</h2>
        <div class="event_container">
          <div class="top_event">
            <p>${event.city}</p>
            <p>${event.startTimeFormatted} - ${event.endTimeFormatted}</p>
          </div>
          <h2 class="event_title">${event.title}</h2>
          <p class="shortinfo">${event.shortinfo}</p>
          <a href="index.php?page=detail&amp;id=${event.id}" class="event_link">Meer info</a>
        </div>
      </article>
      `;
  }

};

init();
