<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>HomeStroy</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/animate.min.css">
   <link rel="stylesheet" href="slick/slick.css">
   <link rel="stylesheet" href="slick/slick-theme.css">
   <link rel="stylesheet" href="fonts/circe/fonts.css">
   <link rel="stylesheet" href="fonts/bebas/stylesheet.css">
</head>

<body>
   <nav id="nav">
      <div class="container">
         <div class="nav-burger-wrap">
            <div class="nav-burger">
               <div class="line"></div>
               <div class="line"></div>
               <div class="line"></div>
            </div>
         </div>
         <ul class="nav-wrap">
            <li class="nav__elem"><a href="#services">Услуги</a></li>
            <li class="nav__elem"><a href="#we-work">Что ремонтируем</a></li>
            <li class="nav__elem"><a href="#portfolio">Примеры работ</a></li>
            <li class="nav__elem"><a href="#reasons">Почему мы</a></li>
            <li class="nav__elem"><a href="#scheme">Схема работы</a></li>
            <li class="nav__elem"><a href="#portfolio">Отзывы</a></li>
            <li class="nav__elem"><a href="#welcome">Контакты</a></li>
         </ul>
      </div>
   </nav>
   <ul class="nav-hidden">
      <li class="nav-hidden__elem"><a href="#services">Услуги</a></li>
      <li class="nav-hidden__elem"><a href="#we-work">Что ремонтируем</a></li>
      <li class="nav-hidden__elem"><a href="#portfolio">Примеры работ</a></li>
      <li class="nav-hidden__elem"><a href="#reasons">Почему мы</a></li>
      <li class="nav-hidden__elem"><a href="#scheme">Схема работы</a></li>
      <li class="nav-hidden__elem"><a href="#portfolio">Отзывы</a></li>
      <li class="nav-hidden__elem"><a href="#welcome">Контакты</a></li>
   </ul>

   <section id="header">
      <div class="container">
         <div class="header-info">
            <div class="header__logo">
               <img src="img/header/logo.png" alt="Logo">
            </div>
            <div class="header__phone">
               <a href="tel:+74956644363">+ 7 (495) 664 43 63</a>
            </div>
         </div>
         <h1 class="header__title">Ремонт коммерческих<br>помещений <span class="typed"></span></h1>
         <ul class="header__advantages">
            <li class="header__advantage">
               <div class="check__wrapper">
                  <div class="header__check">
                     <div class="check__inner"></div>
                  </div>
               </div>
               <div class="header__adv__text">Срочный ремонт под ключ от 1250 руб./м2</div>
            </li>
            <li class="header__advantage">
               <div class="check__wrapper">
                  <div class="header__check">
                     <div class="check__inner"></div>
                  </div>
               </div>
               <div class="header__adv__text">Подготовим смету в течение 24 часов под ваш бюджет</div>
            </li>
            <li class="header__advantage">
               <div class="check__wrapper">
                  <div class="header__check">
                     <div class="check__inner"></div>
                  </div>
               </div>
               <div class="header__adv__text">Полный цикл работ: от проекта до ввода в эксплуатацию</div>
            </li>
         </ul>
         <div class="header__btn--wrapper btn-wrapper">
            <a href="#calculate" class="header__btn">Рассчитать стоимость ремонта</a>
         </div>
      </div>
   </section>

   <section id="we-work">
      <div class="container">
         <div class="section-title__wrap">
            <div class="st-wrap"></div>
            <h2 class="section-title">МЫ&nbsp;ремонтируем</h2>
            <div class="st-wrap"></div>
         </div>
         <div class="work-blocks">
            <div class="work-block wb-normal wow fadeIn" data-wow-duration="2s">
               <div class="left-col"></div>
               <div class="right-col">
                  <div class="work-block__content">
                     <div class="work-block__title">Офисные помещения</div>
                     <div class="work-block__line"></div>
                     <div class="work-block__desc">
                        Офисные помещения в бизнес-центрах класса A, B, C<br>
                        Офисы в зданиях нежилого фонда<br>
                        Квартирные офисы
                     </div>
                  </div>
               </div>
            </div>
            <div class="work-block wb-reverse wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
               <div class="left-col">
                  <div class="work-block__content">
                     <div class="work-block__title">Торговые помещения</div>
                     <div class="work-block__line"></div>
                     <div class="work-block__desc">
                        Торговые центры и моллы<br>
                        Бутики, фуд-корты<br>
                        Автосалоны<br>
                        Аптеки
                     </div>
                  </div>
               </div>
               <div class="right-col"></div>
            </div>
            <div class="work-block wb-normal wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
               <div class="left-col"></div>
               <div class="right-col">
                  <div class="work-block__content">
                     <div class="work-block__title">Складские помещения</div>
                     <div class="work-block__line"></div>
                     <div class="work-block__desc">
                        Складские помещения классов: A, A+, B, C, D<br>
                        Имущественные комплексы<br>
                        Фабрики и заводы
                     </div>
                  </div>
               </div>
            </div>
            <div class="work-block wb-reverse wow fadeIn" data-wow-duration="2s" data-wow-delay="1.5s">
               <div class="left-col">
                  <div class="work-block__content">
                     <div class="work-block__title">Гостиничные помещения</div>
                     <div class="work-block__line"></div>
                     <div class="work-block__desc">
                        Гостиницы и пансионаты<br>
                        Мотели, хостелы<br>
                        Общежития
                     </div>
                  </div>
               </div>
               <div class="right-col"></div>
            </div>
         </div>
      </div>
   </section>

   <section id="request">
      <h2 class="request__title">оставьте заявку и получите <span>бесплатный</span><br>выезд специалиста в день
         обращения</h2>
      <div class="request__line"></div>
      <form class="request__form">
         <input type="text" name="user_name" class="request__input" placeholder="Введите имя">
         <input type="text" name="user_phone" class="request__input" placeholder="Введите телефон">
         <div class="btn-wrapper request__btn--wrapper">
            <button type="submit" class="btn request__button">Оставить заявку</button>
         </div>
      </form>
      <div class="request__confidence">Нажимая на кнопку «Оставить заявку» я даю согласие на обработку<br>персональных
         данных и соглашаюсь с условиями <a href="#">политики конфиденциальности</a></div>
   </section>

   <section id="reasons">
      <div class="container">
         <div class="section-title__wrap">
            <div class="st-wrap"></div>
            <h2 class="section-title">Почему&nbsp;заказчики&nbsp;выбирают&nbsp;нас</h2>
            <div class="st-wrap"></div>
         </div>
         <div class="reasons-wrapper">
            <div class="reasons__img"></div>
            <div class="reasons__content">
               <div class="reasons__block wow fadeIn" data-wow-duration="2s">
                  <div class="reason__img">
                     <img src="img/reasons/calendar.png" alt="">
                  </div>
                  <div class="reasons__title">Делаем в срок</div>
                  <div class="reasons__desc">
                     Не превращая объект в долгострой,</br>
                     мы помогаем Вам быстрее запустить</br>
                     бизнес процессы (без потери прибыли).
                  </div>
               </div>
               <div class="reasons__block wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                  <div class="reason__img">
                     <img src="img/reasons/bag.png" alt="">
                  </div>
                  <div class="reasons__title">Решение комплексных задач</div>
                  <div class="reasons__desc">
                     Работая с нами Вам не придется</br>
                     заниматься поиском и контролем</br>
                     узкоспециализированных подрядчиков.
                  </div>
               </div>
               <div class="reasons__block wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
                  <div class="reason__img">
                     <img src="img/reasons/contract.png" alt="">
                  </div>
                  <div class="reasons__title">Какая смета, такая и цена</div>
                  <div class="reasons__desc">
                     Фиксированная стоимость работ</br>
                     позволяет Вам более тщательно</br>
                     спланировать финансовую</br>
                     деятельность Вашей компании.
                  </div>
               </div>
               <div class="reasons__block wow fadeIn" data-wow-duration="2s" data-wow-delay="1.5s">
                  <div class="reason__img">
                     <img src="img/reasons/handshake.png" alt="">
                  </div>
                  <div class="reasons__title">Индивидуальный подход<br>к каждому клиенту</div>
                  <div class="reasons__desc">
                     Делаем ремонт под ваши задачи,</br>
                     учитывая все пожелания и нюансы. У нас</br>
                     есть опыт в создании уникальных решений.
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>

   <section id="services">
      <div class="container">
         <div class="section-title__wrap">
            <div class="st-wrap"></div>
            <h2 class="section-title">Какие&nbsp;услуги&nbsp;оказываем</h2>
            <div class="st-wrap"></div>
         </div>
         <div class="services-box">
            <div class="service-block">
               <div class="block__front">
                  <div class="service-block__img"></div>
                  <div class="service-block__title">Внутренняя отделка</div>
                  <div class="service-block__line"></div>
                  <div class="service-block__more">Подробнее</div>
               </div>
               <div class="block__back">
                  <div class="back__title">Внутренняя отделка</div>
                  <ul class="back__list">
                     <li class="back__list--item">Демонтаж конструкций</li>
                     <li class="back__list--item">Возведение перегородок и стен</li>
                     <li class="back__list--item">Штукатурные работы</li>
                     <li class="back__list--item">Малярные работы</li>
                     <li class="back__list--item">Монтаж ГКЛ конструкций</li>
                     <li class="back__list--item">Плиточные работы</li>
                     <li class="back__list--item">Монтаж всех видов потолков</li>
                     <li class="back__list--item">Установка витрин, окон и дверей</li>
                  </ul>
                  <div class="back__price">От 1500 руб./м2</div>
               </div>
            </div>
            <div class="service-block">
               <div class="block__front">
                  <div class="service-block__img"></div>
                  <div class="service-block__title">Сантехника и отопление</div>
                  <div class="service-block__line"></div>
                  <div class="service-block__more">Подробнее</div>
               </div>
               <div class="block__back">
                  <div class="back__title">Сантехника и отопление</div>
                  <ul class="back__list">
                     <li class="back__list--item">Монтаж инженерной сантехники
                        системы водоснабжения</li>
                     <li class="back__list--item">Монтаж канализации</li>
                     <li class="back__list--item">Монтаж системы отопления</li>
                     <li class="back__list--item">Установка и подключение
                        радиаторов отопления</li>
                  </ul>
                  <div class="back__price">От 1500 руб./м2</div>
               </div>
            </div>
            <div class="service-block">
               <div class="block__front">
                  <div class="service-block__img"></div>
                  <div class="service-block__title">Проектирование</div>
                  <div class="service-block__line"></div>
                  <div class="service-block__more">Подробнее</div>
               </div>
               <div class="block__back">
                  <div class="back__title">Проектирование</div>
                  <ul class="back__list">
                     <li class="back__list--item">Разработка дизайн-проекта</li>
                     <li class="back__list--item">Проектирование инженерии</li>
                     <li class="back__list--item">Проектирование перепланировки</li>
                  </ul>
                  <div class="back__price">От 1500 руб./м2</div>
               </div>
            </div>
            <div class="service-block">
               <div class="block__front">
                  <div class="service-block__img"></div>
                  <div class="service-block__title">Вентиляция</div>
                  <div class="service-block__line"></div>
                  <div class="service-block__more">Подробнее</div>
               </div>
               <div class="block__back">
                  <div class="back__title">Вентиляция</div>
                  <ul class="back__list">
                     <li class="back__list--item">Монтаж систем приточной
                        вентиляции</li>
                     <li class="back__list--item">Монтаж систем вытяжной
                        вентиляции</li>
                     <li class="back__list--item">Монтаж систем
                        кондиционирования</li>
                  </ul>
                  <div class="back__price">От 1500 руб./м2</div>
               </div>
            </div>
            <div class="service-block">
               <div class="block__front">
                  <div class="service-block__img"></div>
                  <div class="service-block__title">Электрика</div>
                  <div class="service-block__line"></div>
                  <div class="service-block__more">Подробнее</div>
               </div>
               <div class="block__back">
                  <div class="back__title">Электрика</div>
                  <ul class="back__list">
                     <li class="back__list--item">Электромонтажные работы</li>
                     <li class="back__list--item">Монтаж слаботочных систем</li>
                     <li class="back__list--item">Установка систем охранного
                        видеонаблюдения</li>
                     <li class="back__list--item">Монтаж систем контроля доступа</li>
                     <li class="back__list--item">Установка пожарной сигнализации</li>
                  </ul>
                  <div class="back__price">От 1500 руб./м2</div>
               </div>
            </div>
            <div class="service-block">
               <div class="block__front">
                  <div class="service-block__img"></div>
                  <div class="service-block__title">Полимерные полы</div>
                  <div class="service-block__line"></div>
                  <div class="service-block__more">Подробнее</div>
               </div>
               <div class="block__back">
                  <div class="back__title">Полимерные полы</div>
                  <ul class="back__list">
                     <li class="back__list--item">Нанесение полиуретанового
                        покрытия</li>
                     <li class="back__list--item">Нанесение эпоксидного покрытия</li>
                     <li class="back__list--item">Нанесение разметки </li>
                  </ul>
                  <div class="back__price">От 1500 руб./м2</div>
               </div>

            </div>
         </div>
      </div>

   </section>

   <section id="portfolio">
      <div class="container">
         <div class="section-title__wrap">
            <div class="st-wrap"></div>
            <h2 class="section-title">Посмотрите&nbsp;наши&nbsp;кейсы</h2>
            <div class="st-wrap"></div>
         </div>
         <div class="cases">
            <!-- First Case -->
            <div class="case">
               <div class="case-imgs">
                  <div class="case__big-img"></div>
                  <div class="case__small-imgs">
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="case-desc">
                  <div class="short-desc">
                     <div class="short-desc__item">
                        <img src="img/portfolio/geo.png" alt="">
                        <div class="short-desc__text">Офис в бизнес-центре (ул. Ленинская слобода, 19)</div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/meter.png" alt="">
                        <div class="short-desc__text">207 м<sup>2</sup></div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/calendar.png" alt="">
                        <div class="short-desc__text">60 дней</div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/rouble.png" alt="">
                        <div class="short-desc__text">1 274 000 руб.</div>
                     </div>
                  </div>
                  <div class="case__feedback">Приобрели в собственность офис в БЦ и решили сразу сделать нормальный
                     ремонт. Должен сказать, что к выбору бригады подошли скрупулезно и дотошно. В итоге получили
                     реально качественный ремонт в короткий срок. Также понравилось то, что можно провести все по
                     документам. Если бы обратились просто к знакомым мастерам, такое вряд ли было бы возможно.</div>
                  <div class="case__line"></div>
                  <div class="case__feedback-author">ООО «Олимп»<br>
                     Исполнительный директор Литвинов С.М.</div>
                  <div>
                     <div class="btn-wrapper case__btn--wrapper">
                        <a href="#calculate" class="btn case__button">Рассчитать стоимость</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End First Case -->
            <!-- Second Case -->
            <div class="case">
               <div class="case-imgs">
                  <div class="case__big-img"></div>
                  <div class="case__small-imgs">
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="case-desc">
                  <div class="short-desc">
                     <div class="short-desc__item">
                        <img src="img/portfolio/geo.png" alt="">
                        <div class="short-desc__text">Салон красоты (ул. Цветной бульвар, 9)</div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/meter.png" alt="">
                        <div class="short-desc__text">86 м<sup>2</sup></div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/calendar.png" alt="">
                        <div class="short-desc__text">31 день</div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/rouble.png" alt="">
                        <div class="short-desc__text">670000 руб.</div>
                     </div>
                  </div>
                  <div class="case__feedback">Мы обратились в компанию «Хомстрой». Ремонтом довольны.
                     Все быстро, аккуратно. Отдельное спасибо дизайнерам.
                     Они сформулировали наши мысли на бумаге и добавили
                     своего, чтобы получилась цельная картина. Также благодарим
                     прораба Антона Черкасова за отличную работу его и бригады.
                     Благодаря вам мы полностью готовы к открытию!</div>
                  <div class="case__line"></div>
                  <div class="case__feedback-author">Директор салона Саркисян Р.В.<br><br></div>
                  <div>
                     <div class="btn-wrapper case__btn--wrapper">
                        <a href="#calculate" class="btn case__button">Рассчитать стоимость</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Second Case -->
            <!-- Thrid Case -->
            <div class="case">
               <div class="case-imgs">
                  <div class="case__big-img"></div>
                  <div class="case__small-imgs">
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="case-desc">
                  <div class="short-desc">
                     <div class="short-desc__item">
                        <img src="img/portfolio/geo.png" alt="">
                        <div class="short-desc__text">Многопрофильная клиника (ул. Бауманская, 54)</div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/meter.png" alt="">
                        <div class="short-desc__text">244 м<sup>2</sup></div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/calendar.png" alt="">
                        <div class="short-desc__text">54 дня</div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/rouble.png" alt="">
                        <div class="short-desc__text">1 125 000 руб.</div>
                     </div>
                  </div>
                  <div class="case__feedback">Мне порекомендовал ребят знакомый. Делали ремонт
                     в частной клинике. Результатом осталась довольна!
                     Быстро, качественно и учли все мои пожелания.
                     Смотрю сейчас, пытаюсь найти недоделки какие-то
                     в помещении, – а их нет, все хорошо. Молодцы!</div>
                  <div class="case__line"></div>
                  <div class="case__feedback-author">Заведующая клиники Лаврова Ю.А.<br></div>
                  <div>
                     <div class="btn-wrapper case__btn--wrapper">
                        <a href="#calculate" class="btn case__button">Рассчитать стоимость</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Third Case -->
            <!-- Fourth Case -->
            <div class="case">
               <div class="case-imgs">
                  <div class="case__big-img"></div>
                  <div class="case__small-imgs">
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                     <div class="case__small-img">
                        <div class="csm-inner">
                           <img src="img/portfolio/scope.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="case-desc">
                  <div class="short-desc">
                     <div class="short-desc__item">
                        <img src="img/portfolio/geo.png" alt="">
                        <div class="short-desc__text">Фасад магазина (Одинцовский район)</div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/meter.png" alt="">
                        <div class="short-desc__text">1350 м<sup>2</sup></div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/calendar.png" alt="">
                        <div class="short-desc__text">68 дней</div>
                     </div>
                     <div class="short-desc__item">
                        <img src="img/portfolio/rouble.png" alt="">
                        <div class="short-desc__text">5 670 000 руб.</div>
                     </div>
                  </div>
                  <div class="case__feedback">Мне порекомендовал ребят знакомый. Делали ремонт
                     в частной клинике. Результатом осталась довольна!
                     Быстро, качественно и учли все мои пожелания.
                     Смотрю сейчас, пытаюсь найти недоделки какие-то
                     в помещении, – а их нет, все хорошо. Молодцы!</div>
                  <div class="case__line"></div>
                  <div class="case__feedback-author">Генподрядчик «БИТЭКС»<br></div>
                  <div>
                     <div class="btn-wrapper case__btn--wrapper">
                        <a href="#calculate" class="btn case__button">Рассчитать стоимость</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Fourth Case -->
         </div>
      </div>
   </section>

   <section id="partners">
      <div class="container">
         <div class="section-title__wrap">
            <div class="st-wrap"></div>
            <h2 class="section-title">Нам&nbsp;доверяют</h2>
            <div class="st-wrap"></div>
         </div>
         <div class="slider__box">
            <div class="slider__left-arrow"><img src="img/partners/arrow.png" alt=""></div>
            <div class="slider__block">
               <div class="gov"><img src="img/partners/goverment.png" alt=""></div>
               <div class="gaz"><img src="img/partners/gazprom.png" alt=""></div>
               <div class="boy"><img src="img/partners/oldboy.png" alt=""></div>
               <div class="gms"><img src="img/partners/gms.png" alt=""></div>
            </div>
            <div class="slider__right-arrow"><img src="img/partners/arrow-right.png" alt=""></div>
         </div>
      </div>
   </section>

   <section id="calculate">
      <div class="container">
         <div class="calc__left cwrap1">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Выберите тип помещения</div>
               <div class="choose__number">01</div>
            </div>
            <div class="calc__options">
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check ofice__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Офисное помещение</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check torg__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Торговое помещение</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check skald__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Складское помещение</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check other__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Другие общественные</div>
                  </label>
               </div>
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button calc__btn1">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>5%</span></div>
            </div>
         </div>

         <!-- ФАСАДНЫЕ -->

         <div class="calc__left cwrap-fas-1">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Длина здания</div>
               <div class="choose__number">02</div>
            </div>
            <div class="calc__options">
               <input placeholder="Введите длину" type="text" class="calc__input fas-inp-1">
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button fas-btn-1">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>7%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-fas-2">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Высота здания</div>
               <div class="choose__number">03</div>
            </div>
            <div class="calc__options">
               <input placeholder="Введите высоту" type="text" class="calc__input fas-inp-2">
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button fas-btn-2">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>8%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-fas-3">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Выберите тип помещения</div>
               <div class="choose__number">04</div>
            </div>
            <div class="calc__options">
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check shtuk__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Штукатурка и окраска</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check naves__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Навесной вентилируемый</div>
                  </label>
               </div>
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button fas-btn-3">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>10%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-fas-4">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Итого</div>
               <div class="choose__number fas-itog"></div>
            </div>
         </div>

         <!-- ВНУТРЕННИЕ -->

         <div class="calc__left cwrap-vn-1">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Общая площадь помещения</div>
               <div class="choose__number">02</div>
            </div>
            <div class="calc__options">
               <input placeholder="Введите площадь" type="text" class="calc__input vn-inp-1">
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button vn-btn-1">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>5%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-vn-2">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Высота потолков</div>
               <div class="choose__number">03</div>
            </div>
            <div class="calc__options">
               <input placeholder="Введите высоту" type="text" class="calc__input vn-inp-2">
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button vn-btn-2">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>5%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-vn-3">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Изготовление дизайн-проекта</div>
               <div class="choose__number">04</div>
            </div>
            <div class="calc__options">
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-3-yes__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Да</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-3-no__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Нет</div>
                  </label>
               </div>
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button vn-btn-3">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>10%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-vn-4">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Электромонтажные работы</div>
               <div class="choose__number">05</div>
            </div>
            <div class="calc__options">
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-4-yes__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Да</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-4-no__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Нет</div>
                  </label>
               </div>
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button vn-btn-4">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>10%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-vn-5">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Слаботочные работы</div>
               <div class="choose__number">06</div>
            </div>
            <div class="calc__options">
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-5-yes__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Да</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-5-no__check">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Нет</div>
                  </label>
               </div>
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button vn-btn-5">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>10%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-vn-6">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Сантехнические работы</div>
               <div class="choose__number">07</div>
            </div>
            <div class="calc__options">
               <input placeholder="Количество водоточек" type="text" class="calc__input vn-inp-6">
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button vn-btn-6">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>5%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-vn-7">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Вентиляционные работы</div>
               <div class="choose__number">08</div>
            </div>
            <div class="calc__options">
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-7-pritok">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Приточная</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-7-vityazh">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Вытяжная</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-7-kond">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Кондиционирование</div>
                  </label>
               </div>
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button vn-btn-7">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>10%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-vn-8">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Вентиляционные работы</div>
               <div class="choose__number">09</div>
            </div>
            <div class="calc__options">
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-8">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Офисное помещение</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-8">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Складское помещение</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-8">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Торговое помещение</div>
                  </label>
               </div>
               <div class="calc__option">
                  <label class="option__content">
                     <input type="checkbox" class="option__check vn-8">
                     <div class="option__fake-check">
                        <div class="check__img"></div>
                     </div>
                     <div class="option__text">Другие общественные</div>
                  </label>
               </div>
            </div>
            <div class="calc__nav">
               <div class="btn-wrapper calc__btn--wrapper">
                  <a class="btn calc__button vn-btn-8">Рассчитать стоимость</a>
               </div>
               <div class="calc__discount">Ваша текущая скидка<span>10%</span></div>
            </div>
         </div>

         <div class="calc__left cwrap-vn-9">
            <div class="calc__title">рассчитайте<br>стоимость ремонта</div>
            <div class="calc__subtitle">Пройдите небольшой тест и забронируйте скидку на все услуги</div>
            <div class="calc__choose">
               <div class="choose__text">Итого</div>
               <div class="choose__number vn-itog"></div>
            </div>
         </div>


         <img src="img/calc/man.png" alt="" class="calc__man">
      </div>
   </section>

   <section id="scheme">
      <div class="container">
         <div class="section-title__wrap scheme__title">
            <div class="st-wrap"></div>
            <h2 class="section-title">Схема&nbsp;нашей&nbsp;работы</h2>
            <div class="st-wrap"></div>
         </div>
         <div class="scheme-box">
            <div class="scheme-block left-vertical wow fadeIn" data-wow-duration="2s">
               <div class="scheme__box-number">01</div>
               <div class="scheme__box-text">
                  Подбираем для вас<br>
                  удобное время для<br>
                  приема специалиста.
               </div>
               <img src="img/scheme/clocks.png" alt="">
            </div>
            <div class="right-gorizontal">
               <div class="right-row">
                  <div class="scheme-block right-1 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                     <div class="scheme__box-number">02</div>
                     <div class="scheme__box-text">
                        Делаем замеры объекта.<br>
                        Составляем смету.
                     </div>
                     <img src="img/scheme/roulette.png" alt="">
                  </div>
                  <div class="scheme-block right-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
                     <div class="scheme__box-number">03</div>
                     <div class="scheme__box-text">
                        Подписываем договор<br>
                        и приступаем к работе.
                     </div>
                     <img src="img/scheme/book.png" alt="">
                  </div>
               </div>
               <div class="right-row">
                  <div class="scheme-block right-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="1.5s">
                     <div class="scheme__box-number">04</div>
                     <div class="scheme__box-text">
                        Выполняем работы<br>
                        согласно смете.
                     </div>
                     <img src="img/scheme/kaska.png" alt="">
                  </div>
                  <div class="scheme-block right-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">
                     <div class="scheme__box-number">05</div>
                     <div class="scheme__box-text">
                        Сдаём работы по этапно.<br>
                        Финишная уборка в подарок!
                     </div>
                     <img src="img/scheme/wash.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="welcome">
      <div class="container">
         <div class="section-title__wrap welcome__title">
            <div class="st-wrap"></div>
            <h2 class="section-title">Приглашаем&nbsp;вас&nbsp;в&nbsp;гости</h2>
            <div class="st-wrap"></div>
         </div>
         <div class="welcome__adress">
            <div><strong>Ждём вас по адресу:</strong></div>
            <div>г. Москва, Боенский пр-д, д. 9</div>
            <div class="contact-1 welcome-contact">
               <img src="img/welcome/phone.png" alt="">
               <a href="tel:84956644363">8 (495)-664-43-63</a>
            </div>
            <div class="contact-2 welcome-contact">
               <img src="img/welcome/envelope.png" alt="">
               <a href="mailto:mail@homestr.ru">mail@homestr.ru</a>
            </div>
         </div>
         <div class="welcome__form__title">Остались вопросы? Мы перезвоним!</div>
         <form class="welcome__form">
            <input placeholder="Введите имя" name="user_name1" type="text" class="welcome__name">
            <input placeholder="Введите телефон" name="user_phone1" type="text" class="welcome__tel">
            <div class="btn-wrapper welcome__btn--wrapper">
               <button type="submit" class="btn welcome__btn"><span>Оставить заявку</span></button>
            </div>
         </form>
         <div class="welcome__confidence">Нажимая на кнопку «Оставить заявку» я даю согласие на
            обработку<br>персональных данных и соглашаюсь с условиями политики конфиденциальности</div>
      </div>
   </section>


   <script src="js/jquery.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script>
      new WOW().init();
   </script>
   <script src="js/typed.min.js"></script>
   <script src="slick/slick.js"></script>
   <script src="js/main.js"></script>
   <script>
      jQuery(document).ready(function () {
         var typed = new Typed(".typed", {
            strings: ["В МОСКВЕ"],
            typeSpeed: 80,
         });
      });
   </script>

</body>

</html>