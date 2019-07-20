export const openMenu = () => {
  const menu = document.querySelector('.menu');
  const content = document.querySelector('.content');
  menu.addEventListener('click', e => {
    menu.classList.toggle('open');
    content.classList.toggle('open');
  });
  return true;
}