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
