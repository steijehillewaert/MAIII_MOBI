const $searchInput = document.querySelector(`.search_field`);
const $events = document.querySelector(`.ajaxSearch`);

const init = () => {
  $searchInput.addEventListener(`input`, handleInputSearch);
};

const handleInputSearch = () => {
  const q = $searchInput.value.trim();
  console.log(q);
  if (q.length > 0) {
    fetch(`index.php?query=${q}&page=programma`, {
      headers: new Headers({
        Accept: `application/json`
      })
    })
      .then(r => r.json())
      .then(data => parse(data));
  }
};

const parse = results => {
  $events.innerHTML = results
    .map(event => createEvent(event))
    .join(``);
};

const createEvent = event => {
  console.log(event);
  return `
  <article class="event">
    <img src="assets/events/${event.code}/thumb.jpg" alt="">
    <h2 class="date_event">${event.start}</h2>
    <div class="event_container">
      <h2 class="event_title">${event.title}</h2>
      <p class="shortinfo">${event.content}</p>
      <a href="index.php?page=detail&amp;id=${event.id}" class="event_link">Meer info</a>
    </div>
  </article>
  `;
};

init();
