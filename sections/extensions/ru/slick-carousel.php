<h3>Slick Carousel - Карусель</h3>
<p>HTML Website Templates так же используют расширение <b>Slick-carousel.js</b> для реализации карусели на страницах шаблона с расширенным <b>data-API</b> для взаимодействия. </p>

<pre>
  <code>
        &lt;!-- Slick Carousel --&gt;
        &lt;div class="slick-slider"&gt;
          &lt;div class="item"&gt;
            ...
          &lt;/div&gt;
          &lt;div class="item"&gt;
            ...
          &lt;/div&gt;
          &lt;div class="item"&gt;
            ...
          &lt;/div&gt;
        &lt;/div&gt;
  </code>
</pre>

<h4>Настройка автоматического переключения элементов карусели</h4>
<p>Автоматическое переключение элементов в Slick Carousel для HTML Website templates по-умолчанию отключено.
    Для того, чтобы включить автоматическое переключение слайдов необходимо воспользоваться дата атрибутом <b>data-autoplay</b> с указанием ключа <b>true</b>.</p>
<pre><code>
        &lt;div class="slick-slider" data-autoplay="true"&gt;
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
        &lt;div class="slick-slider" data-items="2" data-xs-items="3" data-lg-items="4"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<p>В данном примере, по-умолчанию в карусели будет отображаться 2 элемента, на разрешениях xs, sm и md - 3 элемента, на разрешении lg - 4 элемента.
</p>

<h4>Настройка навигации карусели</h4>
<p>Для отображения элементов навигации "Вперед"/"Назад" в Slick Carousel необходимо воспользоваться дата атрибутом <b>data-nav="true"</b> для целевой карусели.</p>

<pre><code>
        &lt;div class="slick-slider" data-nav="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Настройка пагинации карусели
</h4>

<p>Для отображения пагинации в Slick Carousel необходимо воспользоваться дата атрибутом <b>data-dots="true"</b> для целевой карусели.</p>
<pre><code>
        &lt;div class="slick-slider" data-dots="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Настройка навигации карусели</h4>

<p>Для отображения навигации в Slick Carousel необходимо воспользоваться дата атрибутом <b>data-arrows="true"</b> для целевой карусели.</p>
<pre>
  <code>
        &lt;div class="slick-slider" data-arrows="true"&gt;
            ...
        &lt;/div&gt;
    </code>
</pre>

<h4>Создание вертикальной карусели</h4>

<p>Для создания вертикальной карусели с помощью Slick Carousel необходимо установить дата атрибут <b>data-vertical="true"</b> для целевой карусели.</p>
<pre>
  <code>
        &lt;div class="slick-slider" data-vertical="true"&gt;
            ...
        &lt;/div&gt;
    </code>
</pre>




