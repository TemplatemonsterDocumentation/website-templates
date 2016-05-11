<h3>RD Parallax</h3>
<h6>Intense используют расширение <b>RD Parallax</b> для реализации параллакс-эффектов на странице.</h6>
<p>Базовая разметка скрипта выглядит следующим образом:</p>
<pre><code>
        &lt;!-- RD Parallax --&gt;
        &lt;section class="rd-parallax"&gt;
            &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media"
                 data-url="path/to/your-image.jpg"&gt;&lt;/div&gt;
            &lt;div class="rd-parallax-layer" data-speed="0.3" data-type="html" data-fade="true"&gt;
                ...
            &lt;/div&gt;
        &lt;/section&gt;
        &lt;!-- END RD Parallax--&gt;
    </code></pre>

<p>Каждый элемент параллакса представляет собой отдельный слой. Слоев может быть неограниченное количество.</p>
<h4>Настройка типа слоя
</h4>
<p>Для настройки типа слоя необходимо использовать атрибут <b>data-type</b>.
    Атрибут <b>data-type</b> может принимать значения <b>media</b>, <b>html</b>.
  Эта настройка определяет тип слоя параллакса. Если тип слоя определен как <b>media</b>, будет производиться расчет размера слоя относительно высоты секции параллакса, если как <b>html</b> - размер определяется содержимым.</p>
<p>Например:</p>
<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media"&gt;
    </code></pre>

<h4>Настройка скорости слоя</h4>

<p>Для настройки скорости слоя необходимо использовать атрибут <b>data-speed</b>.
    Атрибут <b>data-speed</b> может принимать значения от 0 до 2.
  тот атрибут определяет скорость движения параллакса относительно движения полосы прокрутки. Так, если значение скорости равно 1, получаем эмуляцию css свойства <b>background-attachment: fixed</b>.
    </p>
<p>Например:</p>
<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media"&gt;
    </code></pre>

<h4>Настройка размытия слоя</h4>
<p>Для настройки размытия слоя необходимо использовать атрибут <b>data-blur</b>.
    Атрибут <b>data-blur</b> может принимать значения <b>true</b>, <b>false</b>.
  Атрибут нужно определить как true, чтобы включить размытие изображения в случае, если размер изображения слишком маленький для качественного отображения в секции параллакса.
</p>
<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-blur="true"&gt;
    </code></pre>

<h4>Настройка направления движения слоя</h4>
<p>Для настройки направления движения слоя необходимо использовать атрибут <b>data-direction</b>.
</p>
<p>Атрибут <b>data-direction</b> может принимать значения <b>inverse</b>, <b>normal</b>.
</p>

<p>Определяет направление движения слоя параллакс. Если он определен как normal - параллакс будет двигаться параллельно скроллу, если inverse - в противоположном направлении.</p>

<p>Например:</p>

<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-direction="inverse"&gt;
    </code></pre>

<h4>Настройка фонового изображения медиа-слоя</h4>

<p>Для того, чтобы разместить фоновое изображение внутри медиа-объекта, просто укажите дата атрибут <b>data-url</b>.
</p>

<p>Например:
</p>

<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-url="path/to/your-image.jpg"&gt;
    </code></pre>

<h4>Настройка эффекта проявки HTML слоя</h4>

<p>Для настройки эффекта проявки HTML слоя необходимо использовать атрибут <b>data-fade</b>
</p>

<p>Атрибут <b>data-fade</b> может принимать значения <b>true</b>, <b>false</b>.</p>
<p>Если задано значение true, слой будет постепенно проявляться из полной прозрачности в полную непрозрачность в зависимости от позиции прокрутки слоя. </p>
<p>Например:</p>
<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-fade="true"&gt;
    </code></pre>

<h4>Работа с пользовательским содержимым слоя</h4>
<p>Блок с атрибутом <b>data-type="media"</b> может содержать любое пользовательское содержимое, например , различные скрипты слайдеров, фоновое видео и т.д.
  Для того чтобы разместить пользовательское содержимое внутри медиа объекта, просто не указывайте атрибут  <b>data-url</b>.</p>

<p>Например:</p>

<pre><code>
        &lt;div class="rd-parallax-layer vide" data-speed="0.2" data-type="media"&gt;
    </code></pre>