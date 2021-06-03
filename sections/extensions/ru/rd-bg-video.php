<h3>RD Background Video</h3>
<p>HTML Website Templates используют расширение <b>RD Background Video</b> для создания фонового видео на странице.</p>
<p>Базовая разметка для создания фонового видео вгялдит следующим образом.</p>

<pre><code>
        &lt;div
                data-rd-video-path="video/bg-video-1/bg-video-1"
                data-rd-video-image-xs="26"
                data-rd-video-image-sm="26"
                data-rd-video-image-md="37"
                data-rd-video-image-lg="74"
                data-rd-video-image-xlg="100"
                class="rd-video"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Требования к файлам</h4>
<p>Данный плагин отличается способностью адаптировать качество видео под скорость интернета. Для этого вам необходимо подготовить
    5 вариантов видео с разными разрешениями, для правильной работы скрипта. А также подготовить 5 вариантов изображений с
    расширением <b>*.jpg</b> для отображения заставки на мобильных устройствах или компьютеров со слабой скоростью интернета.</p>
<p>Наименование файлов должно происходить следующим образом:</p>
<p>video-(суффикс).mp4 <br>
    video-image-(суффикс).jpg</p>
<p>Список расширений и их суффиксов который необходимо подготовить:</p>

<ul class="marked-list">
    <li>
        1920х1080 - xlg (video-xlg.mp4);
    </li>
    <li>
        1280х720 - lg (video-lg.mp4);
    </li>
    <li>
        854х480 - md (video-md.mp4);
    </li>
    <li>
        640х360 - sm (video-sm.mp4);
    </li>
    <li>
        380х240 - xs (video-xs.mp4).
    </li>
</ul>

<p>В итоге у вас должны присутсвовать 10 файлов: 5 видео и 5 изображений.</p>

<h4>Замена фонового видео</h4>

<p>Для того чтобы заменить видео на существующей секции в HTML разметке нужно изменить путь к видео в дата-атрибуте <b>data-rd-video-path</b>.
    При этом, расширение видео указывать не нужно, достаточно указать только имя файла, скрипт сам выберет соответствующий формат.
</p>
<p>Например,</p>

<pre><code>
        &lt;div data-rd-video-path="video/bg-video-1/bg-video-1"&gt;&lt;/div&gt;
    </code></pre>
<p>Так же для правильного просчета скорости интернета необходимо с помощью атрибутов указать размер каждой картинки в КБ.
    Суффиксы для атрибутов указаны в пункте <b>Требования к файлам</b>. Например</p>


<pre><code>
        &lt;div
                data-rd-video-path="video/bg-video-1/bg-video-1"
                data-rd-video-image-xs="26" data-rd-video-image-sm="26"
                data-rd-video-image-md="37"
                data-rd-video-image-lg="74"
                data-rd-video-image-xlg="100"
                class="rd-video"&gt;
            ...
        &lt;/div&gt;
    </code></pre>