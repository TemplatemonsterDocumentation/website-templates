<h3>LightGallery</h3>
<p>В наших шаблонах используется плагин <b>LightGallery</b> для реализации функциональных mobile-friendly галерей.</p>

<p>
  Данный скрипт поддерживает:

  <ul class="marked-list">
    <li>Галереи с миниатюрами</li>
    <li>Галереи с youtube/vimeo/html5 видео</li>
    <li>Галереи с iframe</li>
    <li>Галереи с подписями к фото</li>
    <li>Галереи с html разметкой</li>
    <li>Галереи с возможностью поделиться в соц. сетях</li>
    <li>Галереи с кастомной css3 анимацией</li>
  </ul>
</p>

<h4>Создание модального окна для одного изображения</h4>

<p>Для вставки модального окна c отдельным изображением необходимо вставить ссылку с атрибутом
    <mark>data-lightgallery="item"</mark> и <mark>href</mark> в котором необходимо указать путь к большой картинке.</p>

<p>Или альтернативный вариант добавить div с атрибутом <mark>data-lightgallery="item"</mark> и <mark>data-src="path/to/image.jpg"</mark></p>

<pre><code>&lt;a data-lightgallery="item" href="path/to/image.jpg"&gt;
  &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
&lt;/a&gt;</code></pre>

<h4>Создание галереи из множества картинок</h4>

<p>Для вставки галереи из множества картинок  воспользуйтесь атрибутом <mark>data-lightgallery="group"</mark> для родительского элемента соответствующей группы отдельных изображений.</p>

<pre><code>&lt;div data-lightgallery="group"&gt;
  &lt;a data-lightgallery="item" href="path/to/image.jpg"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
  &lt;/a&gt;
  &lt;a data-lightgallery="item" href="path/to/image.jpg"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>

<h4>Добавление thumbnail в галерею из множества картинок</h4>

<img src="img/lightGallery-1.jpg" alt="">

<p>Необходимо зайти в файл script.js и в секции с инициализацией скрипта lightGallery добавить параметр <mark>thumbnail: true</mark></p>
<p>
  <a href="http://sachinchoolur.github.io/lightGallery/demos/index.html">Больше информации в офф. документации</a>
</p>

<h4>Изменение анимации переключения фото</h4>

<p>Необходимо зайти в файл script.js и в секции с инициализацией скрипта lightGallery добавить параметр <mark>mode: "название анимации"</mark>, например <b>lg-zoom-in-out</b></p>
<p><a href="http://sachinchoolur.github.io/lightGallery/demos/transitions.html">Типы доступных анимаций</a></p>

<h4>Создание галереи из множества видео</h4>

<p>Для создания галереи с видео, необходимо в атрибут href ссылки вставить ссылку на видео</p>


<pre><code>&lt;div data-lightgallery="group"&gt;
  &lt;a data-lightgallery="item" href="https://www.youtube.com/watch?v=meBbDqAXago"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
  &lt;/a&gt;
  &lt;a data-lightgallery="item" href="https://vimeo.com/1084537"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>

<p>
  <a href="http://sachinchoolur.github.io/lightGallery/demos/videos.html">Больше информации в офф. документации</a>
</p>

<h4>Создание галереи с Iframe</h4>

<p>Для создания галереи с Iframe, необходимо в атрибут <mark>data-src</mark> вставить ссылку на Iframe и добавить <mark>data-iframe="true"</mark> и <mark>data-lightgallery="item"</mark></p>

<pre><code>&lt;!-- Откроет сайт w3schools --&gt;
&lt;button class="button button-primary" data-lightgallery="item" data-iframe="true" data-src="http://www.templatemonster.com/"&gt;Откроет templatemonster.com&lt;/button&gt;
&lt;!-- Откроет google map --&gt;
&lt;button class="button button-primary" data-lightgallery="item" data-iframe="true" data-src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d248849.84916296514!2d77.6309395!3d12.9539974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1410805729331"&gt;Open google map&lt;/button&gt;</code></pre>

<h4>Добавление подписи к фото</h4>

<p>Для создания фото с подписью, необходимо в атрибут <mark>data-sub-html</mark> вставить селектор элемента в котором находится подпись.</p>
<p>Зайти в файл script.js и в секции с инициализацией скрипта lightGallery добавить параметр <mark>subHtmlSelectorRelative: true</mark></p>

<pre><code>&lt;div data-lightgallery="group"&gt;
  &lt;a data-lightgallery="item" data-sub-html=".caption" href="path/to/image.jpg"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
    &lt;span style="display: none;" class="caption"&gt;Caption 1&lt;/span&gt;
  &lt;/a&gt;
  &lt;a data-lightgallery="item" data-sub-html=".caption" href="path/to/image.jpg"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
    &lt;span style="display: none;" class="caption"&gt;Caption 2&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>

<h4>Добавление кнопок «Расшарить в соц. сети»</h4>

<p>Необходимо зайти в файл script.js и в секции с инициализацией скрипта lightGallery добавить параметр <mark>share: true</mark></p>

<img src="img/lightGallery-2.jpg" alt="">

<h4>Добавление Facebook коментариев</h4>

<p>
  <a href="http://sachinchoolur.github.io/lightGallery/demos/comment-box.html">Детальная инструкция на сайте разработчиков</a>
</p>

<img src="img/lightGallery-3.jpg" alt="">
