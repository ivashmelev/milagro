export const order = () => {
  const order = document.querySelector('.feedback.order');
  const hide = document.querySelector('.hide');
  const button = document.getElementById('fast_order');

  button.addEventListener('click', (e) => {
    order.classList.add('active');
    hide.classList.add('active');
  });

  hide.addEventListener('click', (e) => {
    e.target.classList.remove('active');
    order.classList.remove('active');
  });
}