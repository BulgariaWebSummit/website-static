<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Bulgaria Web Summit 2014: #Програмиране, #UX, #UI, #Уеб</title>

<meta name="description" content="Месечни уебинари и конференция в София на 31 май. Ела!" />
<meta name="keywords" content="Програмиране, UX, UI, Вградени устройства, Маркетинг, Социални Мрежи, Сигурност и #Бизнес." />
<meta name="author" content="Екип Нула Еоод." />
<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- Stylesheets -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/fonts.css" />
<link rel="stylesheet" href="css/fontello.css" />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<link rel="stylesheet" href="css/jquery.validationengine.css" />
<link rel="stylesheet" href="css/flexslider.css">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- Favicon and touch icons -->
<link rel="apple-touch-icon" href="images/touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/touch-icon-ipad-retina.png">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46633287-1', 'bulgariawebsummit.com');
  ga('send', 'pageview');

</script>
</head>

<body>
<header class="top-bar" id="topbar">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="navbar main-nav pull-right">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <nav>
            <div class="nav-collapse collapse">
              <ul id="mainnav" class="nav">
                <li> <a href="#about" onclick="ga('send', 'event', 'nav', 'click', 'about');">За събитието</a> </li>
                <li> <a href="#speakers" onclick="ga('send', 'event', 'nav', 'click', 'speakers');">Лектори и Лекции</a> </li>
                <li><a href="#workshops" onclick="ga('send', 'event', 'nav', 'click', 'webinars');">Уебинари</a> </li>
                <li><a href="#venue" onclick="ga('send', 'event', 'nav', 'click', 'venue');">Къде</a> </li>
                <li><a href="#sponsors" onclick="ga('send', 'event', 'nav', 'click', 'sponsors');;">Спонсори</a> </li>
                <li><a href="#contact" onclick="ga('send', 'event', 'nav', 'click', 'contacts');;">Контакти</a> </li>
                <li><a href="" onclick="ga('send', 'event', 'light', 'click', 'light0');" data-toggle="modal" data-target="#modal-register"><span style="color:red;">[Купете билет]</span></a> </li>
              </ul> 
            </div>
          </nav>
        </div>
        <!-- end navbar --> 
      </div>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</header>
<!-- end top-bar -->
<section id="intro">
  <div class="container">
    <div class="flexslider">
      <ul class="slides">
        <li> 
          <!-- slide 2 -->
          <div class="row jumbotron">
            <div class="span12 text-center">
              <h1  class="url summary">Bulgaria Web Summit 2014</h1>
              <h3 class="info"><span class="days">31</span><span class="month"><b>Май</b></span><span class="year">2014</span><span class="location">софия</span></h3>
              <a href="" data-toggle="modal" data-target="#modal-register" class="btn btn-large" onclick="ga('send', 'event', 'light', 'click', 'light1');">Купете билет</a> </div>
            <!-- end span12 --> 
          </div>
          <!-- end row --> 
        </li>
        <!-- end slide 2 -->
       
      </ul>
    </div>
    <!-- end flexslider --> 
  </div>
  <!-- end container --> 
</section>
<!-- end intro section --> 
<!-- Modal -->
<div class="modal hide fade" id="modal-register">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Kупете билет за конференцията</h3>
  </div>
  <div class="modal-body" style="max-height: 500px;">
	  <h5>Aко желаете да платите по банков път, моля пишете на hello@bulgariawebsummit.com. Имаме и фирмени отстъпки!</h5>
    <iframe src="http://sabitie.bg/code/event/419/size/1" frameborder="0" height="460" width="600" vspace="0" hspace="0" scrolling="auto" allowtransparency="true"></iframe>
  </div>
  <!-- end modal-body -->
  <div class="modal-footer"> <a data-dismiss="modal" class="btn">Затвори</a> </div>
</div>

<div class="modal hide fade" id="modal-event">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Регистрация за уебинар</h3>
  </div>
  <div class="modal-body" style="max-height: 500px;">
	  <h5>Тези уебинари са за участници в конференцията. Ако вече сте регистриран/а, изпратете мейл на <a href="mailto:webinars@bulgariawebsimmit.com">webinars@bulgariawebsummit.com</a> за да заявите участие.<br/> Ако все още не сте купили билет, можете да го направите и от тук:</h5>
    <iframe src="http://sabitie.bg/code/event/419/size/1" frameborder="0" height="460" width="600" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
  </div>
  <!-- end modal-body -->
  <div class="modal-footer"> <a data-dismiss="modal" class="btn">Затвори</a> </div>
</div>


<!-- top-bar, intro & modal end here -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="module-header about-header">
          <h4>За събитието</h4>
        </div>
        <!-- end module-header --> 
      </div>
      <div class="span12 hero-unit text-center">
        <h1>Конференция за (уеб) технологии, дизайн и бизнес</h1>
        <h3>
          <time datetime="2014-05-31">31</time> май, София</h3>
        <h4>#Програмиране, #UX, #UI, #Вградени устройства, #Маркетинг, #Социални Мрежи, #Сигурност и #Бизнес.<br>
          ТРИ зали, ТРИ потока, 400 посетители</h4>
      </div>
      <!-- end hero-unit -->
      <div class="span12">
        <div class="divider-space"></div>
      </div>
      <div class="span3 text-center">
        <div class="icon-wrap large color1"><i class="iconf-like"></i> </div>
        <h3>Полза</h3>
        <p>Практически лекции, които можете да приложите веднага в работата си и да спечелите време и пари. Таксата за участие всъщност е инвестиция. Инвестиция в самия Вас.</p>
      </div>
      <div class="span3 text-center">
        <div class="icon-wrap large color2"><i class="iconf-microphone"></i> </div>
        <h3>Лектори</h3>
        <p>Специалисти постигнали много в своите области. Дискутирайте, питайте, научавайте и споделяйте знания. Лекциите ще са практически и полезни.</p>
      </div>
      <div class="span3 text-center">
        <div class="icon-wrap large color3"><i class="iconf-users"></i> </div>
        <h3>Общност</h3>
        <p>Полезен микс от посетители и лектори, занимаващи се с <u>програмиране</u>, <u>дизайн</u>, <u>маркетинг</u> и <u>бизнес</u>. Намерете партньори, колеги или идеи, които да развивате.</p>
      </div>
      <div class="span3 text-center">
        <div class="icon-wrap large color3"><i class="iconf-diamond"></i> </div>
        <h3>Уебинари</h3>
        <p>Освен събитието офлайн в София, имаме и месечни уебинари на различни теми. Научавайте, заедно с нас нови неща <strong>всеки месец</strong>, а не само един ден.</p>
      </div>
    </div>
    <!-- end row --> 
  </div>
  <!--end container--> 
</section>
<section id="register">
  <div class="container">
    <div class="row">
      <div class="span12 white register-box text-center">
        <h2 class="register-title">Билетите започват само от 49 лева. Да! </h2>
        <a data-toggle="modal" data-target="#modal-register" id="register-button" class="btn btn-large btn-primary" onclick="ga('send', 'event', 'light', 'click', 'light2');">Инвестирайте в себе си! Кликнете тук!</a> </div>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<section id="speakers">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="module-header speakers-header">
          <h4>Лектори</h4>
        </div>
        <!-- end module-header --> 
      </div>
      <div class="span12 hero-unit text-center white">
        <h2>Кой ще говори и демонстрира</h2>
        <p>Постарали сме сме да поканим лектори, които са постигнали много неща в сферата в която се занимават и могат да споделят практически опит. <br/> Лекциите ще са в ТРИ зали. Списъкът ще се <strong>попълва</strong> всяка седмица. Използвайте <strong>стрелката</strong> да видите повече лектори.</p>
      </div>
      <!-- end hero-unit -->
      <div class="span12">
        <div class="divider-space"></div>
      </div>
      <div class="span12">
        <div id="speakerscarousel" class="carouselslider speakers-carousel item-4">
          <ul>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap hover_colour"> <img src="http://2013.europe.wordcamp.org/files/2013/07/vitaly_friedman.jpg" width="300" alt=" " height="300"> </div>
                <div class="text-wrap white">
                  <h3>Витали Фридман</h3>
                  <h5>Smashing Magazine</h5>
                  <hr class="divider-short center">
                  <p class="description"><strong>Real-Life Responsive Web Design</strong><br/><br/>
                  Responsive Web design challenges Web designers to adapt a new mindset to their design processes as well as techniques they are using in design and code. This talk provides an overview of various practical techniques, tips and tricks from real-life projects and discusses front-end techniques, maintenance issues and performance considerations for lightweight responsive design.
                </p>
                </div>
                 <div class="social">Author, speaker, co-founder and editor-in-chief of Smashing Magazine, an online magazine for professional Web designers and developers. </div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="http://bulgariawebsummit.com/wp-content/uploads/2014/01/7f81fd5c7792dabca22c433abbfbf0cb.jpeg" width="300" height="300" alt=" "> </div>
                <div class="text-wrap white">
                  <h3>Даниш Хан</h3>
                  <h5>GitHub</h5>
                  <hr class="divider-short center">
                  <p class="description"><strong>We are family</strong><br/><br/>
                  Having a great idea, creating useful products, and writing stellar code can be done by smart people. The difficult part is figuring out how to get tons of smart people to work well together. The social aspect is hard, but when you build a culture based off of values that are important to a family you’ll see the amazing things that can be done.
                </p>
                </div>
                 <div class="social">Some believe Danish is a direct decedent of Genghis Khan. He will answer to Danish, Mr. Khan and Khan!. He finds teaching to be enjoyable and helps out at some of the local user groups. He currently resides in the beautiful city of San Francisco. He works at GitHub a company that helps developers work better together than alone and sells stickers & t-shirts.</div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="http://bulgariawebsummit.com/p/selfpersito.jpg" alt=" " width="300" height="300"> </div>
                <div class="text-wrap white">
                  <h3>Chiara Albanesi</h3>
                  <h5>MOKAlab</h5>
                  <hr class="divider-short center">
                  <p class="description"><strong>Visual Design Thinking</strong><br/><br/>
                  In a user-centered world we need to co-create experiences with stakeholders in order to deliver meaningful products, contents and interfaces.
<br/>The mixture of co-creation, user-experience techniques, responsive and iterative approaches leads to a more agile and generally leaner design process, and even a happier work environment.
<br/>The point is focusing on an organic methodology both synchronous and asynchronous in order to drive clients and stakeholders insights and deliver the best meaningful result from the identity of the project itself to the details in the user interface going through the whole user experience journey.

                </p>
                </div>
                 <div class="social">Chiara Albanesi is a visual designer and ethnographer, who works and lives in Milan.
She comes from a family of artisans and has an academic background in Aesthetics and Anthropology.
In 2013 she co-founded MOKAlab, a co-working + open lab for makers and designers. </div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="https://webexpo.net/files/speakers/prague2013/cache/honza-kral_speakers2013.jpg" alt=" " width="300" height="300"> </div>
                <div class="text-wrap white">
                  <h3>Honza Kral</h3>
                  <h5>Python Hacker</h5>
                  <hr class="divider-short center">
                  <p class="description"><strong>Explore your data</strong><br/><br/>
                  I’d like to show to hackers how, using elasticsearch, you can make sense of your data, discover and explore interesting trends in our users’ behavior, create custom dashboards for your users as well as for yourself. The talk will be 60% code and console commands :) No slides :)</p>
                </div>
                <div class="social">Python developer for Elasticsearch: a powerful open source search and analytics engine used by github, sound cloud and more, that makes data easy to explore. </div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="https://2.gravatar.com/avatar/5ca07e641fada5a88a09277c45bd7c1b?d=https%3A%2F%2Fidenticons.github.com%2F9c274b1e7ffd2213a3dfc155d8aee560.png&r=x&s=300" alt=" "> </div>
                <div class="text-wrap white">
                  <h3>Стефан Кънев</h3>
                  <h5>Програмист</h5>
                  <hr class="divider-short center">
                  <p class="description"><strong>Редактори vs. IDE-та</strong><br/><br/> Религиозна тема, в която ще говоря за добрите
и за лошите страни на двете.  Целта ще бъде да убедя потребителите на едното още утре да пробват другото.  Ще покажа хакерии във Vim, Emacs,
Eclipse и дори малко LightTable и SublimeText</p>
                </div>
                <div class="social"> Стефан е програмист и чест лектор на събития. ВИНАГИ има какво да се научи от него, дори в момента в който се опитваме да го "изгоним" от сцената.</div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="http://m.c.lnkd.licdn.com/media/p/2/000/20c/020/3a22dcb.jpg" alt=" " width="300" height="300"> </div>
                <div class="text-wrap white">
                  <h3>Радослав Георгиев</h3>
                  <h5>HackFMI</h5>
                  <hr class="divider-short center">
                  <p class="description"><strong>Функционално програмиране, JavaScript и уеб</strong><br/><br/>JavaScript, по своята природа е език, който поддържа функционалните парадигми. В много случаи. когато трябва да се борим със "състоянието" на нашето приложение, ако пишем декларативно, нещата изглеждат много по-чисти и лесни за писане.

Стандартът в уеб е, JavaScript да се пише императивно (Всички искаме да сме императори!), но това е само върхът на айсберга. Под функционалните завеси на езика се крие сила, която прави JavaScript по-експресивен и ни помага да се борим със сложността, като хвърляме функции по нея. </p>
                </div>
                <div class="social"> Радо, по-известен като РадоРадо, е предприемач-програмист (това е като warrior-mage), който се интересува от всичко свързано с технологии, разработка на софтуер, преподаване, автоматизиране и подобряване на образованието. Основател е на Хак България, представляващо училище за придобиване на практически знания в програмирането. 
В свободното си време се занимава с езици за функционално програмиране.</div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="http://bulgariawebsummit.com/wp-content/uploads/2014/01/IMG_0255-300x300.jpg" alt=" "> </div>
                <div class="text-wrap white">
                  <h3>Боян Джумаков</h3>
                  <h5>Програмист</h5>
                  <hr class="divider-short center">
                  <p class="description"><strong>Home automation или как къщата ви да ви се подмазва</strong><br/><br/>
                  IoT на практика. Вкарайте великия магьосник във вашия дом. Спрете да поливате цветята, спрете с репликите „Звънна ли някой?“ и „Сега се върни да загасиш лампата“. Home automation системите могат да ви спестят време, да угаждат на мързела ви, да ви подсказват и прочее глезотийки. С помощта на Arduino и Raspberry Pi можете на практика всичко.
                  </p>
                </div>
                <div class="social">Боян е програмист, който обича да експериментира и го прави добре. Ще покаже една система, която е разработил с "свободното" си време.</div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="http://bulgariawebsummit.com/p/carlo.jpg" alt=" " width="300" height="300"> </div>
                <div class="text-wrap white">
                  <h3>Carlo Frinolli</h3>
                  <h5>Creative Director</h5>
                  <hr class="divider-short center">
					<p class="description"><strong>Visual Design Thinking</strong><br/><br/>
                  In a user-centered world we need to co-create experiences with stakeholders in order to deliver meaningful products, contents and interfaces.
<br/>The mixture of co-creation, user-experience techniques, responsive and iterative approaches leads to a more agile and generally leaner design process, and even a happier work environment.
<br/>The point is focusing on an organic methodology both synchronous and asynchronous in order to drive clients and stakeholders insights and deliver the best meaningful result from the identity of the project itself to the details in the user interface going through the whole user experience journey.

                </p>
                </div>
                <div class="social">Carlo is an Experience Designer, Creative Director and CEO at nois3, working and living in Rome. With his hands-on mindset and hacker’s passionate tension, he loves to innovate and experiment in his job and everyday life. And, by the way, the answer is 42.</div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="http://bulgariawebsummit.com/wp-content/uploads/2013/12/neven_b_boyanov_01_120x120fx.png" alt=" " width="300" height="300"> </div>
                <div class="text-wrap white">
                  <h3>Невен Боянов</h3>
                  <h5>Interlecta</h5>
                  <hr class="divider-short center">
					<p class="description"><strong>Програмиране на дребни устройства</strong><br/><br/>
                  Eволюцията от микроконтролера до Arduino и Raspberry Pi: Ще бъдат разгледани няколко решения на прости практически проблеми с помощта на 3 различни платформи – обикновен микро-контролер Atmel ATtiny, система Arduino и система Raspberry Pi. Ще бъде направен сравнителен анализ между тях на базата на възможности, цена, производителност и др. Ще бъдат разгледани основните езици (ASM, C/C++, Processing и т. н.) и средства за разработка за тези платформи както и възможността за използването им при изучаване на софтуерните и хардуерните технологии. 
                </p>
                </div>
                <div class="social"></div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="http://bulgariawebsummit.com/p/peter.png" alt=" " width="300" height="300"> </div>
                <div class="text-wrap white">
                  <h3>Петър Найденов</h3>
                  <h5>eCommera</h5>
                  <hr class="divider-short center">
					<p class="description"><strong>Платформа за изграждане на adaptive приложения (fe framework).</strong><br/><br/>
                  Автоматизирано създаване на ресурсни файлове, управление на CSS чрез теми, специализирани ресурсни пакети за различните типове устройства. Нов подход в изграждането на JS приложения. JS обекти и контрол върху тях в реално време. Разделение на модели, контролни модели и структурен JS ( бизнес логика). 
                </p>
                </div>
                <div class="social">Петър е front-end architect в eCommera с над 15 години опит в програмирането</div>
              </div>
              <!-- end carousel item --> 
            </li>
            <li> 
              <!-- carousel item -->
              <div class="item">
                <div class="photo-wrap"> <img src="http://bulgariawebsummit.com/p/haralan-dobrev-square.png" alt=" "> </div>
                <div class="text-wrap white">
                  <h3>Харалан Добрев</h3>
                  <h5>Програмист</h5>
                  <hr class="divider-short center">
					<p class="description"><strong>Development Workflows</strong><br/><br/>
                  Version control (GIT), Continuous integration, Unit testing, GitHub Flow. Всичко свързано с development tools & workflows за по-качествен софтуер и по-лесна разработка.
                </p>
                </div>
                <div class="social">Харалан е програмист, който обича принципите на отворения код и често допринася за развитието на разлчни проекти. В момента работи за Clippings.com</div>
              </div>
              <!-- end carousel item --> 
            </li>
            </ul>
        </div>
        <!-- end speakerscarousel --> 
      </div>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>

<!-- WORKSHOPS -->
<section id="workshops">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="module-header workshops-header">
          <h4>Уебинари</h4>
           <h3>Поне веднъж в месеца организираме уебинар с чудесен лектор, който да говори за неща в които е добър/а.</h3>
        </div>
      </div>
      <!-- end span12 -->
      <ul class="event-items">
        <li class="event-item clearfix span3" style="background:grey">
          <div class="event-date">
            <time datetime="2014-09-23">11 февруари</time>
          </div>
          <!-- end event-date -->
          <div class="share-widget"> <br/> 
            <!-- end share-widget --> 
          </div>
          <br class="clearfix">
          <div class="event-entry text-center">
            <h3 class="entry-title">Въпроси и отговори</h3>
            <p class="lead">Нийл Пател</p>
            <h4>без ограничение</h4>
            <div class="event-image"> <img src="http://cache.johnchow.com/wp-content/uploads/2008/01/neil_patel.jpg" alt="Education Seminar" width="300" height="300" class="img-circle"> </div>
            <div class="entry-content">
              <h4>
                <time datetime="09:00">19:00 - 19:30</time>
              </h4>
              <h4>Онлайн</h4>
              <p>Последният му start-up KISSMETRICS, е една от най-бързо развиващите се компании, предлагаща платформа от ново поколение, която анализира потребителското поведение и е предназначена за нуждите на малкия и среден бизнес. Сред успехите в автобиографията му могат да бъдат открити компаниите Advantage Consulting Services (ACS), Crazy Egg, Hello Bar и др.</p>
            </div>
            <!-- end event-entry --> 
          </div>
          <!-- end span4 --> 
        </li>
        <!-- end event-item -->
        <li class="event-item clearfix span3 vevent">
          <div class="event-date">
            <time  class="dtstart" datetime="2014-02-27 19:00">Март</time>
          </div>
          <!-- end event-date -->
          <div class="share-widget"><br/> </a> 
            <!-- end share-widget --> 
          </div>
          <br class="clearfix">
          <div class="event-entry text-center">
            <h3 class="entry-title summary">Focus ON copywriting</h3>
            <p class="lead">Lloyd Waldo</p>
             <h4>4.00 лв. <br/>За участници в конференцията: безплатно</h4>
            <div class="event-image"> <img src="https://pbs.twimg.com/profile_images/412544413055741952/vLS7d208.jpeg" alt="HTML5 & CSS3" class="img-circle"> </div>
            <div class="entry-content">
              <h4>
                <time datetime="2014-02-27CET19:00Z">19:00</time>
              </h4>
              <h4>Онлайн</h4>
              <br/> <a href="" data-toggle="modal" data-target="#modal-event" class="btn btn-primary">Участвайте</a><br/>
              <p> Лойд е композитор, писател и разказвач, който помага на стартъпи да организират маркетинг чрез съдържание.
              <br/>Какво ще научите:
              <br/><br/>
				  - Как да пишете текстове и истории за да превърнете посетителите на вашия сайт в клиенти
              <br/><br/>
                 - Какво да направите за да ги задържите клиенти - отново частта по създаване на истории, текст и съдържание, което вдъхновява.
              <br/><br/>
               - Всичко, което ви интересува - питайте го всичко в тази тема.
            <br/>
            <a href="http://bulgariawebsummit.tumblr.com/post/77054076429/focus-on-copywriting" target=_blank>Прочетете повече и тук</a>
              
              </p>
            </div>
            <!-- end event-entry --> 
          </div>
          <!-- end span4 --> 
        </li>
        <!-- end event-item -->
        <li class="event-item clearfix span3">
          <div class="event-date">
            <time datetime="2014-09-25">Март</time>
          </div>
          <!-- end event-date -->
          <div class="share-widget"> <br/> </a> 
            <!-- end share-widget --> 
          </div>
          <br class="clearfix">
          <div class="event-entry text-center">
            <h3 class="entry-title">Java Bytecode</h3>
            <p class="lead">Anton Arhipov</p>
            <h4>само за участници в конференцията</h4>
            <div class="event-image"> <img src="http://www.devclub.eu/wp-content/uploads/2013/01/IMG_0372.jpg" alt="jQuery Master Class" class="img-circle"> </div>
            <div class="entry-content">
              <h4>
                <time datetime="12:30">19:00 - 19:40</time>
              </h4>
              <h4>Онлайн</h4>
              <p>Ще се вмъкем в дълбините на джава с Антон. Той е един от създателите на JRebel и знае джава по-добре отколкото родния си език.
              <br/><br/> <a href="" data-toggle="modal" data-target="#modal-event" class="btn btn-primary">Участвайте</a>
              </p>
            </div>
            <!-- end event-entry --> 
          </div>
          <!-- end span4 --> 
        </li>
        <!-- end event-item -->
                <li class="event-item clearfix span3">
          <div class="event-date">
            <time datetime="2014-09-25">Април</time>
          </div>
          <!-- end event-date -->
          <div class="share-widget"> <br/> </a> 
            <!-- end share-widget --> 
          </div>
          <br class="clearfix">
          <div class="event-entry text-center">
            <h3 class="entry-title">PHP && Mongo DB</h3>
            <p class="lead">Derik Rethans</p>
            <h4>само за участници в конференцията</h4>
            <div class="event-image"> <img src="https://pbs.twimg.com/profile_images/339232329/smiling_square.jpg" alt="jQuery Master Class" class="img-circle"> </div>
            <div class="entry-content">
              <h4>
                <time datetime="12:30">19:00 - 19:40</time>
              </h4>
              <h4>Онлайн</h4>
              <p>Дерик е бил лектор на конференцията няколко пъти. Този път ще се включи в нашите уебинари, където освен, че ще говори за РНР, ще отговаря и на въпроси.
              <br/><br/> <a href="" data-toggle="modal" data-target="#modal-event" class="btn btn-primary">Участвайте</a>
              </p>
            </div>
            <!-- end event-entry --> 
          </div>
          <!-- end span4 --> 
        </li>
        <!-- end event-item -->
      </ul>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<section id="venue" class="white">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="module-header venue-header">
          <h4>Къде</h4>
        </div>
      </div>
      <!-- end span12 -->
      <div class="span12 hero-unit text-center white">
        <h4>Конференцията ще се проведе във</h4>
        <h2>Интер Експо Център</h2>
        <p>Конференцията ще се проведе в ТРИ зали на този чудесен конферентен център.</p>
      </div>
      <!-- end hero-unit -->
      <div class="span12 text-center">
        <p>Повече информация за как да стигнете до него, къде можете да обядвате и друга полезна информация, ще намерите тук скоро.</p>
      </div>
      <!-- end span12 -->
      <div class="span12">
        <div class="subheader">
          <h4>Полезна информация</h4>
        </div>
      </div>
      <!-- end span12 -->
      <div class="span4 text-center">
        <div class="icon-wrap medium color1"><i class="iconf-flight"></i> </div>
        <h3>Как да стигна</h3>
        <p> </p>
      </div>
      <div class="span4 text-center">
        <div class="icon-wrap medium color2"><i class="iconf-road"></i> </div>
        <h3>Къде да обядвам</h3>
        <p></p>
      </div>
      <div class="span4 text-center">
        <div class="icon-wrap medium color3"><i class="iconf-suitcase"></i> </div>
        <h3>Други</h3>
        <p></p>
      </div>
            <!-- end span12 -->
      

    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end venue -->

<!-- end map -->
<section id="sponsors">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="module-header sponsors-header">
          <h4>Спонсори и партньори</h4>
        </div>
      </div>
      <!-- end module-header -->
      <div class="span12 hero-unit text-center">
        <h2>Спонсорите са жизнено важни за една успешна конференция.</h2>
        <p>Благодарим за подкрепата на следните наши партньори и спонсори. Ако желаете да се включите в този чудесен състав, <a href="#contact">свържете се</a> с нас.</p>
      </div>
      <!-- end hero-unit -->
      <div class="span12 text-center">
        <div class="subheader">
          <h4>Генерален Партньор</h4>
        </div>
        <!-- --> 
      </div>
      <!-- end span12 -->
      <div class="span12 text-center"> <a href="http://superhosting.bg"> <img src="http://bulgariawebsummit.com/p/sh.png" alt="" class="sponsor-logo" width="500"> </a> </div>
      
      <div class="span12">
        <div class="subheader">
          <h4>Спонсори</h4>
        </div>
        <!-- --> 
      </div>
      <!-- end span12 -->
      <div class="span4 text-center"> <a href="http://github.com"> <img src="http://bulgariawebsummit.com/wp-content/uploads/2014/01/github-logo.png" alt="" class="sponsor-logo"> </a> </div>
      <div class="span4 text-center"> <a href="http://seom.bg"> <img src="http://bulgariawebsummit.com/wp-content/uploads/2014/01/seo.gif" alt="" class="sponsor-logo"> </a> </div>
      <div class="span4 text-center"> <a href="http://smashingmagazine.com"> <img src="http://bulgariawebsummit.com/wp-content/uploads/2014/01/logo.png" alt="" class="sponsor-logo"> </a> </div>
      <div class="span12">
        <div class="subheader">
          <h4>Участници в изложба на приложения</h4>
        </div>
        <!-- --> 
      </div>
      <!-- end span12 -->
      <div class="span3 text-center"> <a href="http://kanbanize.com"> <img src="http://bulgariawebsummit.com/wp-content/uploads/2014/01/kanbanize-logo-250x72.png" alt="" class="sponsor-logo"> </a> </div>
      <div class="span3 text-center"> <a href="http://bgerp.com"> <img src="http://bulgariawebsummit.com/wp-content/uploads/2014/01/bgerp.com_.jpg" alt="" class="sponsor-logo"> </a> </div>
      <div class="span3 text-center"> <a href="http://nebosystems.eu"> <img src="http://bulgariawebsummit.com/wp-content/uploads/2014/01/nebosystems_170_78.jpg" alt="" class="sponsor-logo"> </a> </div>

    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end sponsors -->
<!-- end news -->
	<!-- end twitter-feed -->
<section id="contact" class="white">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="module-header contact-header">
          <h4>За контакти и щепсели</h4>
        </div>
      </div>
      <!-- end span12 -->
      <div class="span12 hero-unit text-center white">
        <h2>Връзка с нас</h2>
             </div>
      <div class="span12 text-center">
                <!-- --> 
      </div>
      <div class="span12 text-center">
        <p>Винаги сме на разположение за въпроси, коментари и спонсори :)</p>
      </div>
      <div class="span4 text-center">
        <p><i class="iconf-mobile"></i> Телефон: +359 (0) 2 492 83 66</p>
      </div>
      <div class="span4 text-center">
        <p><i class="iconf-money"></i> skype: bogomilshopov</p>
      </div>
      <div class="span4 text-center">
        <p><i class="iconf-mail"></i> Email: <a href="hello@bulgariawebsummit.com">hello@bulgariawebsummit.com</a> </p>
      </div>
      
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end contact -->

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="span12 text-center">
        <div class="copyright">Някои права запазени - 2004-2014. УебТех, P2P Конференция, Bulgaria Web Summit<br />
        <em>Екип Нула ЕООД - Млад екип от стари кучета.</em>
        <br /><br />
        Екип Нула Еоод, Булстат: 200707675, ул. Панайот Типографов 78, Велико Търново 5000. МОЛ: Богомил Шопов
        <br/><br/>
        
    Изборажението, което ползваме за фон е под <a href="http://creativecommons.org/licenses/by-nc-nd/2.0/">Creative Commons</a> лиценз с автор <a href="https://www.flickr.com/photos/emil_manolov/">Емил Манолов</a>
         </div>
        
      <!-- end span12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</footer>
<!-- end Document --> 
<!-- javascripts --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> 
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js" type="text/javascript" ></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script type="text/javascript" src="js/jquery.ui.map.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script> 
<script type="text/javascript" src="js/jquery.carousel.js"></script> 
<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script> 
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script> 
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script> 
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.countdown.min.js"></script> 
<script type="text/javascript" src="js/jquery.validationengine-en.min.js"></script> 
<script type="text/javascript" src="js/jquery.validationengine.min.js"></script> 
<script type="text/javascript" src="js/tweetie.min.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
</body>
</html>
