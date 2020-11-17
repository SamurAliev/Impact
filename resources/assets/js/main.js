/*******************************************************************
  Theme Name: IMPACT 
  Description: The Impact business
  AUTHOR: Ziyod
  AUTHOR URL: https://ziyod-bekhzodov.netlify.app/
  Version: 1.0
  Created: 
*******************************************************************/


////////////////////////////////////////////////////////////////////
// Cursor                                              /////////////
const blobCursor = (() => {  
  
  const CURSOR = document.querySelector('#cursorBlob');
  const setCursorPos = (e) => {
    const { pageX: posX, pageY: posY } = e;
    CURSOR.style.top = `${posY - (CURSOR.offsetHeight / 2)}px`;
    CURSOR.style.left = `${posX - (CURSOR.offsetWidth / 2)}px`;
  };
  document.addEventListener('mousemove', setCursorPos);
  
})();


////////////////////////////////////////////////////////////////////
// Preloader                                           /////////////

let loaderDashoffsetTotal = 502;
let preloader = document.querySelector('.preloader');
let preloaderOuter = preloader.querySelector('.animate_gif');
let loaded = 0;
let total = 10;

function init() {
   let startLength = loaderDashoffsetTotal + 'px';
   preloaderOuter.style.strokeDashoffset = startLength;
   preloaderOuter.style.opacity = 1;
}
init();

setTimeout(function () {
      $(".intro_animation").fadeOut("slow", function () {
          
      });
      $(".perspective").fadeIn("slow");
  }, 3500);