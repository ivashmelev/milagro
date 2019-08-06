export const search = () => {
  const search = document.querySelector('.search');
  const button = document.getElementById('search');

  button.addEventListener('click', (e) => {
    search.classList.toggle('active');
  });
}