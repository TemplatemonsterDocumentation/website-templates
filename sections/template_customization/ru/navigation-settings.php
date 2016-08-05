<h3>Настройка навигации в шаблоне</h3>

<h6>Bootsrap Template использует плагин <b>RD Navbar</b> для реализации навигации по сайту.
</h6>

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

<h4>Как добавить подменю</h4>
<p>Для того, чтобы добавить подменю к существующему пункту меню, необходимо определить дополнительный список с классом <b>.rd-navbar-dropdown</b> внутри соответствующего пункта меню.
</p>

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

