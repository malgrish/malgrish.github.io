//Responsive nav
let burgerBtn = {
   elem: document.querySelector('.nav-burger'),
   active: false,
   hiddenNav: document.querySelector('.nav-hidden'),
};

burgerBtn.elem.addEventListener('click', () => {
   if (burgerBtn.hiddenNav.classList.contains('show')) {
      burgerBtn.hiddenNav.classList.remove('show');
   } else {
      burgerBtn.hiddenNav.classList.add('show');
   }
});
//END Responsive nav

//Checkboxes
let optionCheck = document.querySelectorAll('.option__check');
let checkImg = document.querySelectorAll('.check__img');
let checkedItem;
checkImg.forEach((item) => {
   item.style.display = 'none';
})

optionCheck.forEach(function(item){
   item.addEventListener('change', function() {
      let fakeCheck = item.nextElementSibling;
      if(item.checked) {
         fakeCheck.firstElementChild.style.display = 'block';
         fakeCheck.style.background = 'black';
         item.classList.add('opt__checked');
      } else {
         fakeCheck.firstElementChild.style.display = 'none';
         fakeCheck.style.background = '';
         item.classList.remove('opt__checked');
      }
   })
});
//END Checkboxes

//Slider
let gms = document.querySelector('.gms');
let gov = document.querySelector('.gov');
let leftArrow = document.querySelector('.slider__left-arrow');
let rightArrow = document.querySelector('.slider__right-arrow');
gms.style.display = 'none';

rightArrow.addEventListener('click', () => {
   gms.style.display = 'block';
   gov.style.display = 'none';
});

leftArrow.addEventListener('click', () => {
   gms.style.display = 'none';
   gov.style.display = 'block';
});
//END Slider

//Pictures
let scopes = document.querySelectorAll('.csm-inner img');
scopes.forEach((item) => {
   item.style.display = 'none';
})

$('.csm-inner').hover(function(){
   let scopeImg = this.firstElementChild;
   if(scopeImg.style.display == 'none') {
      scopeImg.style.display = '';
   } else {
      scopeImg.style.display = 'none';
   }
});
//END Pictures

//Form

let reqForm = document.querySelector('.request__form');
let allInputs = document.querySelectorAll('form input');

reqForm.addEventListener('submit', function sendForm(event) {
   event.preventDefault();
   $.ajax({
      type: "POST",
      url: "mailer/smart.php",
      dataType: "html",
      data: $(this).serialize(),
      success: function () {
         allInputs.forEach((item) => {
            item.value = '';
         });
      }
   });
});

let footerForm = document.querySelector('.welcome__form');

footerForm.addEventListener('submit', function sendForm(event) {
   event.preventDefault();
   $.ajax({
      type: "POST",
      url: "mailer/smart1.php",
      dataType: "html",
      data: $(this).serialize(),
      success: function () {
         allInputs.forEach((item) => {
            item.value = '';
         });
      }
   });
});

//END Form

//Calculator

let cwrap = document.querySelector('.cwrap1')
let calcBtn = document.querySelector('.calc__btn1');
let cwrapFas1 = document.querySelector('.cwrap-fas-1');
let officeCheck = document.querySelector('.ofice__check');
let torgCheck = document.querySelector('.torg__check');
let skladCheck = document.querySelector('.skald__check');
let otherCheck = document.querySelector('.other__check');
let cwrapFas2 = document.querySelector('.cwrap-fas-2');
let cwrapFas3 = document.querySelector('.cwrap-fas-3');
let cwrapFas4 = document.querySelector('.cwrap-fas-4');
let cwrapVn1 = document.querySelector('.cwrap-vn-1');
let cwrapVn2 = document.querySelector('.cwrap-vn-2');
let cwrapVn3 = document.querySelector('.cwrap-vn-3');
let cwrapVn4 = document.querySelector('.cwrap-vn-4');
let cwrapVn5 = document.querySelector('.cwrap-vn-5');
let cwrapVn6 = document.querySelector('.cwrap-vn-6');
let cwrapVn7 = document.querySelector('.cwrap-vn-7');
let cwrapVn8 = document.querySelector('.cwrap-vn-8');
let cwrapVn9 = document.querySelector('.cwrap-vn-9');

let fasData = {};
let vnData = {
   vnSum: 0,
};

cwrapFas1.style.display = 'none';
cwrapFas2.style.display = 'none';
cwrapFas3.style.display = 'none';
cwrapFas4.style.display = 'none';
cwrapVn1.style.display = 'none';
cwrapVn2.style.display = 'none';
cwrapVn3.style.display = 'none';
cwrapVn4.style.display = 'none';
cwrapVn5.style.display = 'none';
cwrapVn6.style.display = 'none';
cwrapVn7.style.display = 'none';
cwrapVn8.style.display = 'none';
cwrapVn9.style.display = 'none';

calcBtn.addEventListener('click', () => {
   if((officeCheck.classList.contains('opt__checked')) || (skladCheck.classList.contains('opt__checked'))) {
      cwrap.style.display = 'none';
      cwrapFas1.style.display = 'block';
   } else if((torgCheck.classList.contains('opt__checked')) || (otherCheck.classList.contains('opt__checked'))) {
      cwrap.style.display = 'none';
      cwrapVn1.style.display = 'block';
   } 
});

let fasBtn1 = document.querySelector('.fas-btn-1');
let fasInp1 = document.querySelector('.fas-inp-1');

fasBtn1.addEventListener('click', () => {
   fasData.dlina = fasInp1.value;
   cwrapFas1.style.display = 'none';
   cwrapFas2.style.display = 'block';
});

let fasBtn2 = document.querySelector('.fas-btn-2');
let fasInp2 = document.querySelector('.fas-inp-2');

fasBtn2.addEventListener('click', () => {
   fasData.height = fasInp2.value;
   cwrapFas2.style.display = 'none';
   cwrapFas3.style.display = 'block';
});

let fasBtn3 = document.querySelector('.fas-btn-3');
let fasItog = document.querySelector('.fas-itog');
let shtukCheck = document.querySelector('.shtuk__check');
let navesCheck = document.querySelector('.naves__check');

fasBtn3.addEventListener('click', () => {
   if(shtukCheck.classList.contains('opt__checked')) {
      fasData.itog = fasData.dlina * fasData.height * 1310;
   }
   else if(navesCheck.classList.contains('opt__checked')) {
      fasData.itog = fasData.dlina * fasData.height * 2090;
   }
   cwrapFas3.style.display = 'none';
   cwrapFas4.style.display = 'block';
   fasItog.textContent = `${fasData.itog} руб.`;
});

let vnBtn1 = document.querySelector('.vn-btn-1');
let vnInp1 = document.querySelector('.vn-inp-1');

vnBtn1.addEventListener('click', () => {
   vnData.square = +vnInp1.value;
   vnData.squareCost = vnInp1.value * 1490;
   cwrapVn1.style.display = 'none';
   cwrapVn2.style.display = 'block';
});

let vnBtn2 = document.querySelector('.vn-btn-2');

vnBtn2.addEventListener('click', () => {
   cwrapVn2.style.display = 'none';
   cwrapVn3.style.display = 'block';
});

let vnBtn3 = document.querySelector('.vn-btn-3');
let vnCheck3Yes = document.querySelector('.vn-3-yes__check');
vnData.designCost = 0;

vnBtn3.addEventListener('click', () => {
   if(vnCheck3Yes.classList.contains('opt__checked')) {
      vnData.designCost = vnData.square * 800;
   }
   cwrapVn3.style.display = 'none';
   cwrapVn4.style.display = 'block';
});

let vnBtn4 = document.querySelector('.vn-btn-4');
let vnCheck4Yes = document.querySelector('.vn-4-yes__check');
vnData.electro = 0;

vnBtn4.addEventListener('click', () => {
   if(vnCheck4Yes.classList.contains('opt__checked')) {
      vnData.electro = vnData.square * 880;
   }
   cwrapVn4.style.display = 'none';
   cwrapVn5.style.display = 'block';
});

let vnBtn5 = document.querySelector('.vn-btn-5');
let vnCheck5Yes = document.querySelector('.vn-5-yes__check');
vnData.slab = 0;

vnBtn5.addEventListener('click', () => {
   if(vnCheck5Yes.classList.contains('opt__checked')) {
      vnData.slab = vnData.square * 230;
   }
   cwrapVn5.style.display = 'none';
   cwrapVn6.style.display = 'block';
});

let vnBtn6 = document.querySelector('.vn-btn-6');
let vnInp6 = document.querySelector('.vn-inp-6');

vnBtn6.addEventListener('click', () => {
   vnData.waterCost = vnInp6.value * 5000;
   cwrapVn6.style.display = 'none';
   cwrapVn7.style.display = 'block';
});

let vnCheck7Pritok = document.querySelector('.vn-7-pritok');
let vnCheck7Vityazh = document.querySelector('.vn-7-vityazh');
let vnCheck7Kond = document.querySelector('.vn-7-kond');
let vnBtn7 = document.querySelector('.vn-btn-7');

vnBtn7.addEventListener('click', () => {
   if(vnCheck7Pritok.classList.contains('opt__checked')) {
      vnData.pritok = vnData.square * 300;
   }
   if (vnCheck7Vityazh.classList.contains('opt__checked')) {
      vnData.vityazh = vnData.square * 450;
   }
   if (vnCheck7Kond.classList.contains('opt__checked')) {
      vnData.kond = vnData.square * 190;
   }
   cwrapVn7.style.display = 'none';
   cwrapVn8.style.display = 'block';
});

let vnBtn8 = document.querySelector('.vn-btn-7');
let vnItog = document.querySelector('.vn-itog');

vnBtn8.addEventListener('click', () => {
   cwrapVn8.style.display = 'none';
   cwrapVn9.style.display = 'block';
   if(vnData.squareCost > 0) {
      vnData.vnSum = vnData.vnSum + vnData.squareCost;
   }
   if(vnData.kond > 0) {
      vnData.vnSum = vnData.vnSum + vnData.kond;
   }
   if(vnData.vityazh > 0) {
      vnData.vnSum = vnData.vnSum + vnData.vityazh;
   }
   if(vnData.pritok > 0) {
      vnData.vnSum = vnData.vnSum + vnData.pritok;
   }
   if(vnData.electro > 0) {
      vnData.vnSum = vnData.vnSum + vnData.electro;
   }
   if(vnData.designCost > 0) {
      vnData.vnSum = vnData.vnSum + vnData.designCost;
   }
   if(vnData.slab > 0) {
      vnData.vnSum = vnData.vnSum + vnData.slab;
   }
   if(vnData.waterCost > 0) {
      vnData.vnSum = vnData.vnSum + vnData.waterCost;
   }
   vnItog.textContent = `${vnData.vnSum} руб.`
});


//END Caclulator

//Cases pics

let officeBg = document.querySelector('.case:nth-child(1) .case__big-img');
let officeSmal1 = document.querySelector('.case:nth-child(1)  .case__small-img:nth-child(1)');
let officeSmal2 = document.querySelector('.case:nth-child(1)  .case__small-img:nth-child(2)');
let officeSmal3 = document.querySelector('.case:nth-child(1)  .case__small-img:nth-child(3)');
let officeSmal4 = document.querySelector('.case:nth-child(1)  .case__small-img:nth-child(4)');

let salonBg = document.querySelector('.case:nth-child(2) .case__big-img');
let salonSmal1 = document.querySelector('.case:nth-child(2)  .case__small-img:nth-child(1)');
let salonSmal2 = document.querySelector('.case:nth-child(2)  .case__small-img:nth-child(2)');
let salonSmal3 = document.querySelector('.case:nth-child(2)  .case__small-img:nth-child(3)');
let salonSmal4 = document.querySelector('.case:nth-child(2)  .case__small-img:nth-child(4)');

let clinicBg = document.querySelector('.case:nth-child(3) .case__big-img');
let clinicSmal1 = document.querySelector('.case:nth-child(3)  .case__small-img:nth-child(1)');
let clinicSmal2 = document.querySelector('.case:nth-child(3)  .case__small-img:nth-child(2)');
let clinicSmal3 = document.querySelector('.case:nth-child(3)  .case__small-img:nth-child(3)');
let clinicSmal4 = document.querySelector('.case:nth-child(3)  .case__small-img:nth-child(4)');

let fasadBg = document.querySelector('.case:nth-child(4) .case__big-img');
let fasadSmal1 = document.querySelector('.case:nth-child(4)  .case__small-img:nth-child(1)');
let fasadSmal2 = document.querySelector('.case:nth-child(4)  .case__small-img:nth-child(2)');
let fasadSmal3 = document.querySelector('.case:nth-child(4)  .case__small-img:nth-child(3)');
let fasadSmal4 = document.querySelector('.case:nth-child(4)  .case__small-img:nth-child(4)');

officeSmal1.addEventListener('click', () => {
   officeBg.style.background = 'url(img/portfolio/1/big.png)';
});
officeSmal2.addEventListener('click', () => {
   officeBg.style.background = 'url(img/portfolio/1/bg-2.png)';
});
officeSmal3.addEventListener('click', () => {
   officeBg.style.background = 'url(img/portfolio/1/bg-3.png)';
});
officeSmal4.addEventListener('click', () => {
   officeBg.style.background = 'url(img/portfolio/1/bg-4.png)';
});

salonSmal1.addEventListener('click', () => {
   salonBg.style.background = 'url(img/portfolio/2/big.png)';
});
salonSmal2.addEventListener('click', () => {
   salonBg.style.background = 'url(img/portfolio/2/bg-2.png)';
});
salonSmal3.addEventListener('click', () => {
   salonBg.style.background = 'url(img/portfolio/2/bg-3.png)';
});
salonSmal4.addEventListener('click', () => {
   salonBg.style.background = 'url(img/portfolio/2/bg-4.png)';
});

clinicSmal1.addEventListener('click', () => {
   clinicBg.style.background = 'url(img/portfolio/3/big.png)';
});
clinicSmal2.addEventListener('click', () => {
   clinicBg.style.background = 'url(img/portfolio/3/bg-2.png)';
});
clinicSmal3.addEventListener('click', () => {
   clinicBg.style.background = 'url(img/portfolio/3/bg-3.png)';
});
clinicSmal4.addEventListener('click', () => {
   clinicBg.style.background = 'url(img/portfolio/3/bg-4.png)';
});

fasadSmal1.addEventListener('click', () => {
   fasadBg.style.background = 'url(img/portfolio/4/big.png)';
});
fasadSmal2.addEventListener('click', () => {
   fasadBg.style.background = 'url(img/portfolio/4/bg-2.png)';
});
fasadSmal3.addEventListener('click', () => {
   fasadBg.style.background = 'url(img/portfolio/4/bg-3.png)';
});

//END Cases pics

//Popup
let popupWrap = document.querySelector('.popup-wrap');
let popup = document.querySelector('.popup');
let popupBtn = document.querySelectorAll('.popup-open');
let allForms = [reqForm, footerForm];
let popupClose = document.querySelector('.popup__close');

popup.style.display = 'none';
popupWrap.style.display = 'none';

allForms.forEach((item) => {
   item.addEventListener('submit', () => {
      popupWrap.style.display = 'block';
      popup.style.display = 'block';
      document.body.style.overflow = 'hidden';
   });
})
popupClose.addEventListener('click', () => {
   popup.style.display = 'none';
   popupWrap.style.display = 'none';
   document.body.style.overflow = 'auto';
});
popupWrap.addEventListener('click', () => {
   popup.style.display = 'none';
   popupWrap.style.display = 'none';
   document.body.style.overflow = 'auto';
});

//END Popup