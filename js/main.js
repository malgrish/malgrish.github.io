let helpBlockDesc = document.querySelectorAll('.help__block__desc');
helpBlockDesc.forEach((item) => {
   if(item.textContent.length > 144) {
      item.textContent = item.textContent.slice(0, 144) + '...';
   }
});

let newsBlockDesc = document.querySelectorAll('.news__block__desc');
newsBlockDesc.forEach((item) => {
   if(item.textContent.length > 241) {
      item.textContent = item.textContent.slice(0, 241) + '...';
   }
});

let teamBlockDesc = document.querySelectorAll('.team__block__desc');
teamBlockDesc.forEach((item) => {
   if(item.textContent.length > 110) {
      item.textContent = item.textContent.slice(0, 110) + '...';
   }
});

$('.nav__burger').click(function() {
   $('.responsive__menu').slideToggle(200);
});