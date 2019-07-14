export const openMenu = () => {
  const menu = document.querySelector('.menu');
  menu.addEventListener('click', e => {
    menu.classList.toggle('open');
  });
  return true;
}