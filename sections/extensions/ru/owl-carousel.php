<h3>Owl Carousel - Карусель</h3>
<p>HTML Website Templates используют расширение <b>Owl-carousel.js</b> для реализации карусели на страницах шаблона с расширенным <b>data-API</b> для взаимодействия. </p>

<pre><code>
        &lt;!-- Owl Carousel --&gt;
        &lt;div class="owl-carousel"&gt;
            &lt;div class="owl-item"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="owl-item"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="owl-item"&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Настройка зацикливания карусели</h4>
<p>Для того, чтобы зациклить отображение слайдов в слайдере необходимо воспользоваться дата атрибутом <b>data-loop</b> (true/false, по-умолчанию true) для целевого элемента с классом <b>.owl-carousel</b>.
</p>
<p>Например,</p>
<pre><code>
        &lt;div class="owl-carousel" data-loop="false"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Настройка автоматического переключения элементов карусели</h4>
<p>Автоматическое переключение элементов в Owl Carousel для HTML Website templates по-умолчанию отключено.
    Для того, чтобы включить автоматическое переключение слайдов необходимо воспользоваться дата атрибутом <b>data-autoplay</b> с указанием ключа <b>true</b>.</p>
<pre><code>
        &lt;div class="owl-carousel" data-autoplay="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Настройка отображения элементов карусели</h4>
<p>Owl carousel поддерживает отображение одного или нескольких элементов карусели одновременно.
    Для настройки отображения элементов карусели необходимо воспользоваться соответствующими дата атрибутами <b>data-items</b> и <b>data-*-items</b>.
</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>data-items="N"</dt>
            <dd>отображает N элементов карусели по-умолчанию (значение по-умолчанию = 1).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-xs-items="N"</dt>
            <dd>отображает N элементов карусели, начиная с XS разрешения.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-sm-items="N"</dt>
            <dd>отображает N элементов карусели, начиная с SM разрешения.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-md-items="N"</dt>
            <dd>отображает N элементов карусели, начиная с MD разрешения.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-lg-items="N"</dt>
            <dd>отображает N элементов карусели, начиная с LG разрешения.</dd>
        </dl>
    </li>
</ol>
<p>, где N - цифра, отображающая количество необходимых элементов.
</p>
<p>Например, </p>
<pre><code>
        &lt;div class="owl-carousel" data-items="2" data-xs-items="3" data-lg-items="4"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<p>В данном примере, по-умолчанию в карусели будет отображаться 2 элемента, на разрешениях xs, sm и md - 3 элемента, на разрешении lg - 4 элемента.
</p>
<h4>Настройка навигации карусели</h4>
<p>Для отображения элементов навигации "Вперед"/"Назад" в Owl Carousel необходимо воспользоваться дата атрибутом <b>data-nav="true"</b> для целевой карусели.</p>


<pre><code>
        &lt;div class="owl-carousel" data-nav="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Настройка пагинации карусели
</h4>

<p>Для отображения пагинации в Owl Carousel необходимо воспользоваться дата атрибутом <b>data-dots="true"</b> для целевой карусели.</p>
<pre><code>
        &lt;div class="owl-carousel" data-dots="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>Для определения шага отображения точек пагинации необходимо воспользоваться атрибутом <b>data-dots-each="N"</b>.</p>
<pre><code>
        &lt;div class="owl-carousel" data-dots="true" data-dots-each="1"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>, где N - цифра, отображающая количество необходимых элементов.
</p>

<h4>Настройка паддинга сцены карусели</h4>

<p>Для определения паддинга сцены карусели необходимо воспользоваться дата атрибутом <b>data-*-stage-padding="N"</b>.</p>

<pre><code>
        &lt;div class="owl-carousel" data-xs-stage-padding="30"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Настройка отступа между элементами карусели</h4>

<p>Для определения отсупа между элементами карусели необходимо воспользоваться дата атрибутом <b>data-*-margin="N"</b> (по-умолчанию = 30).</p>
<pre><code>
        &lt;div class="owl-carousel" data-xs-margin="15"&gt;
            ...
        &lt;/div&gt;
    </code></pre>



