const button = document.querySelector('.form__button');
const token = '5108107561:AAGGcexymUwZDQ0H04Lts_JZiCNZ8VjKpg0';
const chatID = 536396413;

const form = document.querySelector('.form');
const textareas = Array.from(document.querySelectorAll('.form__textarea'));

function send(event) {
  event.preventDefault();
  const values = [];
  let message = '';
  textareas.map(textarea => {
    values.push(textarea.value);
  });
  values.forEach((value, index) => {
    message += `Ответ ${index + 1}: ${value} \n`
  });

  window.location.href = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chatID}&parse_mode=html&text=${message}`;
}

form.addEventListener('submit', (event) => {
  send(event)
})

