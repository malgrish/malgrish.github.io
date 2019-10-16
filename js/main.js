function toCutText(elem, len) {
   elem.forEach((item) => {
      if (item.textContent.length > len) {
         item.textContent = item.textContent.slice(0, len) + '...';
      }
   });
}

let helpBlockDesc = document.querySelectorAll('.help-block__desc');

let newsBlockDesc = document.querySelectorAll('.news-block__desc');

let teamBlockDesc = document.querySelectorAll('.team-block__desc');




toCutText(helpBlockDesc, 144);
toCutText(newsBlockDesc, 241);
toCutText(teamBlockDesc, 110);


$('.nav__burger').click(function () {
   $('.responsive__menu').slideToggle(200);
});

$('.nav__elem > a').each(function () {
   if ($(this).attr('href') == window.location.href.split('/').pop()) {
      $(this).addClass('nav__elem--active');
   }
});

let paginationElems = document.querySelectorAll('.pagination__elem');

paginationElems.forEach((item) => {
   item.addEventListener('click', () => {
      let paginationElemActive = document.querySelector('.pagination__elem--active');
      paginationElemActive.classList.remove('pagination__elem--active');
      item.classList.add('pagination__elem--active');
   });
});

let navHiddenElems = document.querySelectorAll('.nav-elem__hidden');
navHiddenElems.forEach((item) => {
   item.style.display = 'none';
});

let navElems = document.querySelectorAll('.nav__elem');
navElems.forEach((item) => {
   item.addEventListener('click', () => {
      let navHiddenMenu = item.querySelector('.nav-elem__hidden');
      navHiddenMenu.style.display = 'block';
   });
});