<h3>Замена логотипа в шаблоне</h3>
<h6>В Intense предусмотрена возможность замены трех типов логотипа: в шапке (для настольных и мобильных разрешений) и в футере сайта.
  Вы можете использовать как собственное изображение так и текст для замены логотипа.
</h6>

<p class="alert alert-info">    Обратите внимание: Intense - это HTML продукт. Процедура замены логотипа выполняется вручную в каждом целевом .html файле.</p>

<h4>Как заменить логотип в шапке сайта</h4>

<p>Замена логотипа в шапке сайта для настольной версии выполняется в секции <b>Page Head</b> целевой страницы в блоке с классом
    <b>.rd-navbar-brand</b>.</p>

<pre><code>
        &lt;!--Navbar Brand--&gt;
        &lt;div class="rd-navbar-brand"&gt;
            &lt;a href="index.html"&gt;
                &lt;img src='path/to/your-logo.png' alt=''/&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Как заменить логотип в шапке сайта для мобильных устройств</h4>

<p>Замена логотипа для мобильной версии выполняется по тому же принципу в секции <b>Page Head</b> целевой страницы в блок с
    классом <b>.rd-navbar-mobile-brand</b>.</p>

<pre><code>
        &lt;!--Navbar Brand--&gt;
        &lt;div class="rd-navbar-mobile-brand"&gt;
            &lt;a href="index.html"&gt;
                &lt;img src='path/to/your-mobile-logo.png' alt=''/&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Как заменить логотип в футере сайта</h4>
<p>Замена логотипа в футере  сайта выполняется в секции <b> Page Footer</b> целевой страницы в блоке с классом <b>.footer-brand</b>.
</p>

<pre><code>
        &lt; !--Footer Brand--&gt;
        &lt; div class="footer-brand"&gt;
            &lt; a href="index.html"&gt;
                &lt; img src='path/to/your-footer-logo.png' alt=''/&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    </code></pre>
