export const productPopup = () => {
  const productPopup = document.querySelector('.product_popup');
  const cart = document.getElementById('cart');

  cart.addEventListener('mouseover', (e) => {
    productPopup.classList.add('active');
  });

  productPopup.addEventListener('mouseover', (e) => {
    productPopup.classList.add('active');
  });

  productPopup.addEventListener('mouseout', (e) => {
    productPopup.classList.remove('active');
  });
}