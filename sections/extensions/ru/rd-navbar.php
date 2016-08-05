<h3>RD Navbar</h3>
<p>HTML Website Templates используют расширение <b>RD Navbar</b>
   для функциональной навигации по сайту. </p>

<p>Базовая структура кода для расширения RD Navbar равыглядит следующим образом:</p>

<pre>
  <code>
     &lt;!-- RD Navbar --&gt;
     &lt;div class="rd-navbar-wrap"&gt;
       &lt;nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth"
             data-lg-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fullwidth"
             data-lg-device-layout="rd-navbar-static"&gt;
         &lt;div class="rd-navbar-inner"&gt;

           &lt;!-- RD Navbar Panel --&gt;
           &lt;div class="rd-navbar-panel"&gt;

             &lt;!-- RD Navbar Toggle --&gt;
             &lt;button class="rd-navbar-toggle"&gt; &lt;span&gt; &lt;/span&gt; &lt;/button&gt;
             &lt;!-- END RD Navbar Toggle --&gt;

             &lt;!-- RD Navbar Brand --&gt;
             &lt;div class="rd-navbar-brand"&gt;
              ...
             &lt;/div&gt;
             &lt;!-- END RD Navbar Brand --&gt;

           &lt;/div&gt;
           &lt;!-- END RD Navbar Panel --&gt;

           &lt;div class="rd-navbar-nav-wrap"&gt;
             &lt;!-- RD Navbar Nav --&gt;
             &lt;ul class="rd-navbar-nav"&gt;
               &lt;li&gt;
                ...
               &lt;/li&gt;
               &lt;li&gt;
                ...

                 &lt;!-- RD Navbar Dropdown --&gt;
                 &lt;ul class="rd-navbar-dropdown"&gt;
                   &lt;li&gt;
                    ...
                   &lt;/li&gt;
                 &lt;/ul&gt;
                 &lt;!-- END RD Navbar Dropdown --&gt;
               &lt;/li&gt;
               &lt;li&gt;
                ...

                 &lt;!-- RD Navbar Megamenu --&gt;
                 &lt;ul class="rd-navbar-megamenu"&gt;
                   &lt;li&gt;
                    ...
                   &lt;/li&gt;
                 &lt;/ul&gt;
               &lt;/li&gt;
             &lt;/ul&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/nav&gt;
     &lt;/div&gt;
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