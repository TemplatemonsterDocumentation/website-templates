<h3>Замена логотипа в шаблоне</h3>

<p class="alert alert-info">
    Обратите внимание: Website Template это HTML продукт - процедура замены логотипа выполняется вручную в каждом целевом .html
    файле.
</p>

<h4>Как заменить логотип в шапке сайта</h4>

<p>Замена логотипа в шапке сайта для настольной версии выполняется в секции <b>Page Head</b> целевой страницы в блоке с классом
    <b>.rd-navbar-brand</b>.</p>

<pre>
  <code>
        &lt;!--Navbar Brand--&gt;
        &lt;div class="rd-navbar-brand"&gt;
          &lt;a href="index.html"&gt;
            &lt;img src='path/to/your-logo.png' alt=''/&gt;
          &lt;/a&gt;
        &lt;/div&gt;
    </code>
</pre>