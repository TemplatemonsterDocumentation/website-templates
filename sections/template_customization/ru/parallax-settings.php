<h3>Настройка параллакса</h3>

<p>В Intense предусмотрен плагин <b>RD Parallax</b> для реализации <a href="https://en.wikipedia.org/wiki/Parallax">параллакса</a>.
        Подробная документация по данному плагину и его настройке представлена в разделе <b><a href="index.php?lang=ru&section=extensions#rd-parallax">Extensions > RD Parallax</a></b>.</p>

<h4>Как добавить секцию с параллаксом фоновой картинки</h4>
<p>Для создания секции с параллаксом фоновой картинки, используйте следующую разметку, в которой требуется заменить путь к необходимой картинке в атрибуте <b>data-url</b>:
</p>

<pre><code>
        &lt;div class="rd-parallax"&gt;
        &lt;div data-speed="0.35" data-type="media" data-url="path/to/your-image.jpg" class="rd-parallax-layer"&gt;&lt;/div&gt;
        &lt;div data-speed="0" data-type="html" class="rd-parallax-layer"&gt;
        ...
        &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
