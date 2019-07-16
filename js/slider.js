//#region old

// export const slider = async () => {
//   const background = document.querySelector('.background');
//   const arrowLeft = document.querySelector('.arrow-left');
//   const arrowRight = document.querySelector('.arrow-right');
//   let index = 0;

//   const resGetImages = await fetch('/site/routes/api_v1/getSliderImage.php');
//   const getImages = JSON.parse(await resGetImages.text());

//   console.log(getImages[0].path);

//   setInterval(() => {
//     background.style.left = '0';
//   }, 1000)

//   setInterval(() => {
//     if(index == getImages.length){
//       index = getImages.length-1;
//     };
//     console.log(index);
//     background.style.left = '-3000px';
    
//     background.style.backgroundImage = `url(${getImages[index++].path})`;

//   }, 10000)

//   arrowLeft.addEventListener('click', (e) => {
//     console.log(index);
//     if(index < 0){
//       index = getImages.length-1;
//     };
//     background.style.backgroundImage = `url(${getImages[index--].path})`;
//   })

//   arrowRight.addEventListener('click', (e) => {
//     console.log(index);
//     if(index > getImages.length-1){
//       index = 0;
//     };
//     background.style.backgroundImage = `url(${getImages[index++].path})`;
//   })
// }
//#endregion

import '../node_modules/jquery/dist/jquery.js'
import '../node_modules/owl.carousel/dist/owl.carousel.js';

export const slider = () => {
  return new Promise((resolve) => {
    $(document).ready(function(){
      const owl = $('.owl-carousel');

      

      owl.owlCarousel({
        loop: true,
        center:true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoWidth: true,
        responsive: {
          0: {
            items: 1,
          }
        }
      });

      owl.trigger('next.owl.carousel')

      $('.arrow-right').click(function(){
        owl.trigger('next.owl.carousel');
      });

      $('.arrow-left').click(function(){
          owl.trigger('prev.owl.carousel');
      });

      resolve(owl);
    });
  })
}