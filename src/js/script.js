const $searchInput = document.querySelector(`.search_field`);
const $events = document.querySelector(`.ajaxSearch`);
const $postalInput = document.querySelector(`[name="postal"]`);

const init = () => {
  $searchInput.addEventListener(`input`, handleInputSearch);
  $postalInput.addEventListener(`input`, handlePostalSearch);
};

const handleInputSearch = () => {
  const q = $searchInput.value.trim();
  console.log(q);
  fetch(`index.php?query=${q}&page=programma`, {
    headers: new Headers({
      Accept: `application/json`
    })
  })
    .then(r => r.json())
    .then(data => parse(data));
};

const parse = results => {
  $events.innerHTML = results
    .map(event => createEvent(event))
    .join(``);
};

const handlePostalSearch = () => {
  const postal = $postalInput.value.trim();
  console.log(postal);
  fetch(`index.php?postal=${postal}&page=programma`, {
    headers: new Headers({
      Accept: `application/json`
    })
  })
    .then(r => r.json())
    .then(data => parsePostal(data));
};

const parsePostal = results => {
  $events.innerHTML = results
    .map(event => createEvent(event))
    .join(``);
};

const createEvent = event => {
  console.log(event);
  return `
  <article class="event">
    <img src="assets/events/${event.code}/thumb.jpg" alt="">
    <h2 class="date_event">${event.startFormatted}</h2>
    <div class="event_container">
      <h2 class="event_title">${event.title}</h2>
      <p class="shortinfo">${event.content}</p>
      <a href="index.php?page=detail&amp;id=${event.id}" class="event_link">Meer info</a>
    </div>
  </article>
  `;
};

init();
