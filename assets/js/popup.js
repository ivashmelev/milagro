export const popup = () => {
  const popup = document.querySelector('.popup');
  const menuPoint = document.querySelectorAll('.menu a');
  const blockElement = document.querySelector('.popup .block_element');
  const body = document.querySelector('body');

  menuPoint.forEach((element) => {
    element.addEventListener('mouseover', (e) => {
      popup.classList.add('active');
    });

    element.addEventListener('mouseout', (e) => {
      popup.classList.remove('active');
    });
  });

  popup.addEventListener('mouseover', (e) => {
    popup.classList.add('active');
  });

  popup.addEventListener('mouseout', (e) => {
    popup.classList.remove('active');
  });

  blockElement.addEventListener('mouseover', (e) => {
    popup.classList.add('active');
  });

  blockElement.addEventListener('mouseout', (e) => {
    popup.classList.remove('active');
  });
}