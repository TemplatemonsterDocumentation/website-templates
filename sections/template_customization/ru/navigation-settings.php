<h3>Настройка навигации в шаблоне</h3>

<h6>Intense использует плагин <b>RD Navbar</b> для реализации навигации по сайту.
</h6>

<h4>Как заменить тип навигации на странице</h4>
<p>Intense поддерживает набор различных типов навигации для вашего удобства.</p>
<p>Вы можете воспользоваться одним из представленных ниже типов навигации.</p>

<ul class="marked-list">
    <li>Default</li>
    <li>Sidebar Toggle</li>
    <li>Sidebar Fixed</li>
    <li>Floated</li>
</ul>

<h4>Как настроить темную цветовую гамму для навигации</h4>
<p>Для того чтобы настроить темную цветовую гамму для навигации воспользуйтесь классом <b>.rd-navbar-dark</b> для сответствующего типа навигации.
</p>

<pre><code>
        &lt;!-- RD Navbar --&gt;
        &lt;nav class="rd-navbar rd-navbar-default rd-navbar-dark" …&gt;
        ...
        &lt;/nav&gt;
    </code></pre>

<h4>Как добавить новый пункт меню
</h4>

<p>Для того, чтобы добавить новый пункт меню к существующей навигации на странице необходимо определить новый элемент списка в первом уровне навигации:
</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        &lt;ul class="rd-navbar-nav"&gt;
         &lt;li&gt;
                &lt;a href="path/to/your-page.html&gt;Your Page&lt;/a&gt;
         &lt;/li&gt;
        ...
    </code></pre>

<h4>Как сделать пункт меню активным</h4>

<p>Для того, чтобы указать активное состояние для соответствующего существующего пункта меню, воспользуйтесь классом <b>.active</b> для целевого элемента списка меню.</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
                &lt;li class="active"&gt;
                        &lt;a href="path/to/your-page.html"&gt;Your Page&lt;/a&gt;
                &lt;/li&gt;
        ...
    </code></pre>

<h4>Как добавить иконку для пункта меню
</h4>

<p>Для того чтобы добавить иконку к существующему пункту меню, воспользуйтесь следующей разметкой:</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
        &lt;li&gt;
             &lt;a href="path/to/your-page.html"&gt;
                &lt;span class="rd-navbar-icon mdi mdi-shuffle"&gt;&lt;/span&gt;
                &lt;span class="text-middle"&gt;Your Page&lt;/span&gt;
             &lt;/a&gt;
        &lt;/li&gt;
        ...
    </code></pre>

<p>где <b>"mdi mdi-shuffle"</b> - класс для отображения целевой иконки. Список всех иконок и соответствующих классов к ним представлен на  странице <b>Components > Toolkit Components > Icons</b>.</p>

<h4>Как добавить метку для пункта меню</h4>
<p>Для того чтобы добавить метку к существующему пункту меню, воспользуйтесь следующей разметкой:</p>
<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
        &lt;li&gt;
                &lt;a href="path/to/your-page.html"&gt;
                        &lt;span class="text-middle"&gt;Your Page&lt;/span&gt;
                        &lt;span class="rd-navbar-label text-middle label-custom label-xs-custom"&gt;
                        Your Label
                        &lt;/span&gt;
                &lt;/a&gt;
        &lt;/li&gt;
        ...
    </code></pre>
<p class="alert alert-info">Обратите внимание: Вы можете использовать любой из классов, представленных на странице <b>Components > Toolkit Components > Labels</b>, для стилизации меток.</p>

<h4>Как добавить подменю</h4>
<p>Для того чтобы добавить подменю к существующему пункту меню, необходимо определить дополнительный список с классом <b>.rd-navbar-dropdown</b> внутри соответствующего пункта меню:</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
        &lt;li&gt;
                &lt;a href="path/to/your-page.html"&gt;Your Page&lt;/a&gt;
                &lt;ul class="rd-navbar-dropdown"&gt;
                &lt;li&gt;
                        &lt;a href="path/to/your-page-1.html"&gt;Submenu Item 1&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;
                        &lt;a href="path/to/your-page-2.html"&gt;Submenu Item 2&lt;/a&gt;
                &lt;/li&gt;
                ...
                &lt;li&gt;
                        &lt;a href="path/to/your-page-n.html"&gt;Submenu Item N&lt;/a&gt;
                &lt;/li&gt;
                &lt;/ul&gt;
        &lt;/li&gt;
        ...
    </code></pre>

<h4>Как добавить мегаменю</h4>
<p>Для того чтобы добавить мегаменю к существующему пункту меню, воспользуйтесь следующей структурой:</p>
<pre><code>
    &lt;!-- RD Navbar Nav--&gt;
    ...
    &lt;li&gt;
      &lt;a href="path/to/your-page.html"&gt;Your Page&lt;/a&gt;
      &lt;div class="rd-navbar-megamenu"&gt;
        &lt;div class="row"&gt;
          &lt;ul class="col-lg-3"&gt;
            &lt;li&gt;
              &lt;a href="path/to/your-page-1.html"&gt;Submenu Item 1&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;

          &lt;ul class="col-lg-3"&gt;
            &lt;li&gt;
              &lt;a href="path/to/your-page-2.html"&gt;Submenu Item 2&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;

          &lt;ul class="col-lg-3"&gt;
            &lt;li&gt;
              &lt;a href="path/to/your-page-3.html"&gt;Submenu Item 3&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;ul class="col-lg-3"&gt;
            &lt;li&gt;
              &lt;a href="path/to/your-page-4.html"&gt;Submenu Item 4&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;
    ...
    </code></pre>
<p>Для создания колонок в мега меню используется <b><a href="http://getbootstrap.com/css/#grid">Bootstrap Grid</a></b>. Вы можете использовать любое количество колонок для генерации структуры мегаменю,  однако мы рекомендуем использовать 4-х колоночную структуру.</p>

<h4>Как добавить подменю по вкладкам</h4>
<p>Для того чтобы добавить подменю по вкладкам к существующему пункту меню, воспользуйтесь следующей структурой:</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
        &lt;li&gt;
        &lt;a href="path/to/your-page.html"&gt;Your Page&lt;/a&gt;
          &lt;div class="rd-navbar-megamenu"&gt;
            &lt;!-- Responsive-tabs--&gt;
            &lt;div data-type="horizontal" class="responsive-tabs responsive-tabs-classic"&gt;
              &lt;ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default"&gt;
                &lt;li&gt;Tab 1&lt;/li&gt;
                &lt;li&gt;Tab 2&lt;/li&gt;
              &lt;/ul&gt;
              &lt;div data-group="tabs-group-default" class="resp-tabs-container text-left tabs-group-default"&gt;
                &lt;div&gt;
                ... Tab 1 Content ...
                &lt;/div&gt;
                &lt;div&gt;
                ... Tab 2 Content ...
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/li&gt;
        ...
    </code></pre>
<p>По умолчанию в Intense используется разметка мегаменю для формирования контента в меню по вкладкам, но Вы также можете использовать любой пользовательский контент.</p>
