<h3>RD Navbar</h3>
<p>HTML Website Templates используют расширение <b>RD Navbar</b>
   для функциональной навигации по сайту. </p>

<p>Базовая структура кода для расширения RD Navbar равыглядит следующим образом:</p>

<pre>
  <code style='white-space: pre-wrap;'>
   &lt;nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="80px" data-lg-stick-up-offset="46px">
     &lt;div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse">&lt;span>&lt;/span>&lt;/div&gt;
     &lt;div class="rd-navbar-top-panel rd-navbar-collapse"&gt;
       &lt;div class="rd-navbar-top-panel-inner"&gt;
         &lt;address class="contact-info"&gt;
           &lt;ul class="group-lg"&gt;
             &lt;li&gt;
               &lt;div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top"&gt;
                 &lt;div class="unit__left"&gt;&lt;span class="icon text-middle fa-phone"&gt;&lt;/span&gt;&lt;/div&gt;
                 &lt;div class="unit__body"&gt;
                   &lt;div class="p"&gt;&lt;a class="text-middle" href="callto:#"&gt;1-800-1234-567&lt;/a&gt;&lt;/div&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li&gt;
               &lt;div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top"&gt;
                 &lt;div class="unit__left"&gt;&lt;span class="icon text-middle fa-envelope"&gt;&lt;/span&gt;&lt;/div&gt;
                 &lt;div class="unit__body"&gt;
                   &lt;div class="p"&gt;&lt;a class="text-middle" href="mailto:#"&gt;info@demolink.org&lt;/a&gt;&lt;/div&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
             &lt;li&gt;
               &lt;div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top"&gt;
                 &lt;div class="unit__left"&gt;&lt;span class="icon text-middle fa-map-marker"&gt;&lt;/span&gt;&lt;/div&gt;
                 &lt;div class="unit__body"&gt;
                   &lt;div class="p"&gt;&lt;a class="text-middle" href="contacts.html"&gt;2130 Fulton Street San Diego, CA 94117-1080 USA&lt;/a&gt;&lt;/div&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
             &lt;/li&gt;
           &lt;/ul&gt;
         &lt;/address&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="rd-navbar-inner"&gt;
       &lt;!-- RD Navbar Panel--&gt;
       &lt;div class="rd-navbar-panel"&gt;
         &lt;!-- RD Navbar Toggle--&gt;
         &lt;button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"&gt;&lt;span&gt;&lt;/span&gt;&lt;/button&gt;
         &lt;!-- RD Navbar Brand--&gt;
         &lt;div class="rd-navbar-brand"&gt;&lt;a class="brand-name" href="index.html"&gt;&lt;img src="images/brand.png" width="180" height="29" alt=""&gt;&lt;/a&gt;&lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="rd-navbar-aside-right"&gt;
         &lt;div class="rd-navbar-nav-wrap"&gt;
           &lt;!-- RD Navbar Nav--&gt;
           &lt;ul class="rd-navbar-nav"&gt;
             &lt;li class="active"&gt;&lt;a href="./"&gt;Home&lt;/a&gt;&lt;/li&gt;
             &lt;li&gt;&lt;a href="about.html"&gt;About&lt;/a&gt;
               &lt;!-- RD Navbar Dropdown--&gt;
               &lt;ul class="rd-navbar-dropdown"&gt;
                ...
               &lt;/ul&gt;
             &lt;/li&gt;
             &lt;li&gt;&lt;a href=".html"&gt;Link&lt;/a&gt;
               &lt;!-- RD Navbar Megamenu--&gt;
               &lt;ul class="rd-navbar-megamenu"&gt;
                ...
               &lt;/ul&gt;
             &lt;/li&gt;
           &lt;/ul&gt;
         &lt;/div&gt;
         &lt;!--RD Navbar Search--&gt;
         &lt;div class="rd-navbar-search"&gt;&lt;a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
           &lt;form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET"&gt;
             &lt;div class="form-wrap"&gt;
               &lt;label class="form-label form-label" for="rd-navbar-search-form-input"&gt;Type and hit enter...&lt;/label&gt;
               &lt;input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"&gt;
               &lt;div class="rd-search-results-live" id="rd-search-results-live"&gt;&lt;/div&gt;
             &lt;/div&gt;
             &lt;button class="rd-search-form-submit fa-search"&gt;&lt;/button&gt;
           &lt;/form&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/nav&gt;
</code>
</pre>

<p class="alert alert-danger">
  Обратите внимание: HTML разметка может отличаться в зависимости от дизайна.
</p>

<h4>Настройка лейаута RD Navbar</h4>
<p>HTML Website Templates RD Navbar работает с четырьмя разными лейаутами.</p>
<ol class="index-list">
  <li><b>Static</b> rd-navbar-static</li>
  <li><b>Wide </b> rd-navbar-fullwidth</li>
  <li><b>Mobile </b> rd-navbar-fixed</li>
  <li><b>Sidebar </b> rd-navbar-sidebar</li>
</ol>

<p>RD Navbar поддерживает управление лейаутами с помощью дата атрибутов.</p>
<ol class="index-list">
  <li><b>data-layout </b> устанавливает лейаут навбара по умолчанию </li>
  <li><b>data-sm-layout </b> устанавливает лейаут навбара с SM разрешения.</li>
  <li><b>data-md-layout </b> устанавливает лейаут навбара с MD разрешения.</li>
  <li><b>data-lg-layout </b> устанавливает лейаут навбара с LG разрешения.</li>
</ol>
<code>
  <pre>
    &lt;div class="rd-navbar-wrap"&gt;
      &lt;nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth"
               data-lg-layout="rd-navbar-static"&gt;
        ...
      &lt;/nav&gt;
    &lt;/div&gt;
  </pre>
</code>

<h4>Настройка типа лейаута навбара для мобильных устройств</h4>
<ul class="marked-list">
  <li><b>data-sm-device-layout</b> - определяет тип лейаута навбара для мобильных устройств с SM разрешения.</li>
  <li><b>data-md-device-layout</b> - определяет тип лейаута навбара для мобильных устройств с MD  разрешения.</li>
  <li><b>data-lg-device-layout</b> - определяет тип лейаута навбара для мобильных устройств с LG  разрешения.</li>
</ul>

<code>
  <pre>
    &lt;div class="rd-navbar-wrap"&gt;
      &lt;nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth"
               data-lg-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fullwidth"
               data-lg-device-layout="rd-navbar-static" &gt;
        ...
      &lt;/nav&gt;
    &lt;/div&gt;
  </pre>
</code>

<p class="alert alert-danger">
  Обратите внимание: Атрибуты data-md-device-layout='rd-navbar-fullwidth', data-lg-device-layout="rd-navbar-static" являються обязательными. В противном случае на десктопе с поддеркой тача будет отображаться лейаут навбара для мобильных устройств.
</p>



<h4>Настройка расстояние от начала навбара, при котором будет происходить залипание панели при скролле</h4>
<p>
  RD Navbar поддерживает настройку расстояния отступа  при котором будет происходить залипание панели. Для этого нужно использовать <b>data-(*)-stick-up-offset</b>
</p>
<ul class="marked-list">
  <li><b>data-sm-stick-up-offset</b> - задает отступ для залипания навбара с SM разрешения.</li>
  <li><b>data-md-stick-up-offset</b> - задает отступ для залипания навбара с MD  разрешения.</li>
  <li><b>data-lg-stick-up-offset</b> - задает отступ для залипания навбара с LG  разрешения.</li>
</ul>
<p>Можно использовать как точное растояние, так и процент от высоты навбара.</p>

<h4>Настройка выпадающего меню</h4>
<p>
  Для того чтобы определить выпадающее меню в шаблоне, нужно добавить класс <b>.rd-navbar-dropdown</b>
на соответствующий елемент подменю.
</p>

<code>
  <pre>
      &lt;div class="rd-navbar-wrap"&gt;
        &lt;nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static"&gt;
          &lt;ul class="rd-navbar-nav"&gt;
            &lt;li&gt;
              &lt;a href="#"&gt;Menu Link&lt;/a&gt;
              &lt;ul class="rd-navbar-dropdown"&gt;
                &lt;li&gt;
                  &lt;a href="#"&gt;Submenu Link 1&lt;/a&gt;
                &lt;/li&gt;
              &lt;/ul&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/nav&gt;
      &lt;/div&gt;
  </pre>
</code>

<h4>Настройка мега меню</h4>
<p>
  Для того чтобы определить выпадающее меню в шаблоне, нужно добавить класс <b>.rd-navbar-megamenu </b>
на соответствующий елемент подменю.
</p>

<code>
  <pre>
       &lt;div class="rd-navbar-wrap"&gt;
         &lt;nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static"&gt;
           &lt;ul class="rd-navbar-nav"&gt;
             &lt;li&gt;
               &lt;a href="#"&gt;Menu Link&lt;/a&gt;
               &lt;ul class="rd-navbar-megamenu"&gt;
                 &lt;li&gt;
                   … Your Custom HTML Content in 1 Column ...
                 &lt;/li&gt;
                 &lt;li&gt;
                   … Your Custom HTML Content in 2 Column ...
                 &lt;/li&gt;
               &lt;/ul&gt;
             &lt;/li&gt;
           &lt;/ul&gt;
         &lt;/nav&gt;
       &lt;/div&gt;
  </pre>
</code>