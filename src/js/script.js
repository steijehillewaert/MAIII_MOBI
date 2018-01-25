const $searchInput = document.querySelector(`.search_field`);
const $events = document.querySelector(`.events`);

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
};

init();
