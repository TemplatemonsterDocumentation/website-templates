<h3>Структура HTML</h3>

<h6>Структура <b>.html</b> страниц в шаблонах строится по следующему принципу:</h6>

<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;!-- Your Stylesheets, Core Scripts (jQuery etc) & Title --&gt;
    ...
&lt;/head&gt;
&lt;body&gt;
&lt;div class="page"&gt;
    &lt;!-- Page Head --&gt;
    &lt;header class="page-head"&gt;
        ...
    &lt;/header&gt;

    &lt;!-- Page Content--&gt;
    &lt;section&gt;
                ...
    &lt;/section&gt;

    &lt;!-- Page Footer--&gt;
    &lt;footer class="page-footer"&gt;
            ...
    &lt;/footer&gt;
&lt;/div&gt;
&lt;!-- Javascript --&gt;
&lt;script src="js/core.min.js"&gt;&lt;/script&gt;
&lt;script src="js/script.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>