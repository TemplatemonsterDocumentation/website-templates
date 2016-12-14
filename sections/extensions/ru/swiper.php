<h3>Swiper Slider</h3>
<p>HTML Website Templates используют плагин <b>Swiper Slider</b> для реализации слайдера на страницах шаблона с расширенным <b>data-API</b> для взаимодействия. </p>

<pre><code>
        &lt;!-- Swiper --&gt;
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;div class="swiper-wrapper"&gt;
                &lt;div class="swiper-slide" data-slide-bg=""&gt;
                    &lt;div class="swiper-slide-caption"&gt;

                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="swiper-slide" data-slide-bg=""&gt;
                    &lt;div class="swiper-slide-caption"&gt;

                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="swiper-slide" data-slide-bg=""&gt;
                    &lt;div class="swiper-slide-caption"&gt;

                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;!-- Swiper Pagination --&gt;
            &lt;div class="swiper-pagination"&gt;&lt;/div&gt;

            &lt;!-- Swiper Navigation --&gt;
            &lt;div class="swiper-button-prev"&gt;&lt;/div&gt;
            &lt;div class="swiper-button-next"&gt;&lt;/div&gt;

            &lt;!-- Swiper Scrollbar --&gt;
            &lt;div class="swiper-scrollbar"&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- END Swiper --&gt;
    </code></pre>


<h4>Настройка автоматического переключения слайдов</h4>

<p>Автоматическое переключение слайдов в Swiper для HTML Website template по-умолчанию включено.
    Для того, что отключить или изменить время автоматического переключения слайдов необходимо воспользоваться дата атрибутом <b>data-autoplay</b> с
    указанием ключа <b>false</b> или времени в милисекундах для целевого элемента с классом <b>.swiper-slider</b>. </p>
<p>Например,
</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-autoplay="false"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<p>или,</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-autoplay="3000"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Настройка зацикливания слайдера</h4>
<p>Для того, чтобы зациклить отображение слайдов в слайдере необходимо воспользоваться дата атрибутом <b>data-loop</b> (true/false, по-умолчанию true) для целевого элемента с классом <b>.swiper-slider</b>.</p>
<p>Например,</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-loop="false"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>Настройка направления пролистывания слайдов</p>
<p>В слайдере Swiper имеется возможность изменить направление пролистывания слайдов с горизонтального на вертикальное. Для этого необходимо воспользоваться дата атрибутом <b>data-direction</b> (“horizontal”/”vertical”, по умолчанию “horizontal”) для целевого элемента с классом <b>.swiper-slider</b>.
</p>

<p>Например,</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-direction="vertical"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Настройка навигации слайдера</h4>

<p>Swiper поддерживает отображение кнопок "Вперед" и "Назад" для управления отображением слайдов. Для их отображения необходимо добавить соответствующую разметку для целевого слайдера.</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Navigation --&gt;
            &lt;div class="swiper-button-prev"&gt;&lt;/div&gt;
            &lt;div class="swiper-button-next"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Настройка пагинации слайдера</h4>
<p>Swiper поддерживает отображение пагинации слайдера. Для ее отображения необходимо добавить соответствующую разметку для целевого слайдера.
</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Pagination --&gt;
            &lt;div class="swiper-pagination"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>По-умолчанию, пагинация для слайдера кликабельна. Для того, чтобы отключить кликабельность пагинации необходимо добавить дата атрибут <b>data-clickable</b> для соответвующей пагинации слайдера.</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Pagination --&gt;
            &lt;div class="swiper-pagination" data-clickable="false"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>Для отображения порядкового номера соответствующей точки пагинации необходимо воспользоваться дата атрибутом <b>data-index-bullet="true"</b> для соответствующей пагинации слайдера.

</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
        &lt;!-- Slider Pagination --&gt;
        &lt;div class="swiper-pagination" data-index-bullet="true"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Настройка полосы прокрутки</h4>

<p>Swiper поддерживает отображение полосы прокрутки слайдера. Для ее отображения необходимо добавить соответствующую разметку для целевого слайдера.</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Scrollbar--&gt;
            &lt;div class="swiper-scrollbar"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>По-умолчанию, возможность взаимодествия с полосой прокрутки включена. Для ее отключения необходимо воспользоватья дата атрибутом <b>data-draggable="false"</b> для соответсвующей полосы прокрутки целевого слайдера.
</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Scrollbar--&gt;
            &lt;div class="swiper-scrollbar" data-draggable="false"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Управление стрелками</h4>
<p>Swiper слайдер поддерживает возможность управления слайдером с помощью стрелок курсора клавиатуры.
    Для включения данной опции необходимо воспользоваться дата атрибутом <b>data-keyboard</b> для целевого слайдера.</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider" data-keyboard="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Управление мышю</h4>

<p>Swiper слайдер поддерживает возможность управления слайдером с помощью мыши. Для включения данной опции необходимо воспользоваться дата атрибутом <b>data-mousewheel</b> для целевого слайдера.</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-mousewheel="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>По-умолчанию, данная опция блокирует дальнейшую прокрутку страницы, при достижении последнего или первого слайда в слайдере.
    Для отключения блокировки прокрутки страницы в данной ситуации необходимо воспользоваться дата атрибутом <b>data-mousewheel-release="true"</b> для целевого слайдера.</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider" data-mousewheel="true" data-mousewheel-release="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Интеграция Параллакса в слайдер</h4>
<p>Для реализации параллакса используется плагин <b>RD Parallax</b>.</p>

<p>Для интеграции параллакса в слайдер необходимо использовать слайдер внутри параллакса, добавив класс <b>rd-parallax-swiper</b>.
    Таким образом, эффект параллакса будет присутствовать и на контенте внутри слайдера. Для того чтобы изменить скорость любого из элементов находищихся внутри слайдер,
    необходимо на элемент добавить класс <b>swiper-parallax</b> и добавить атрибут <b>data-speed</b> для регулировки скорости.</p>

<pre><code>
        &lt;div class="rd-parallax rd-parallax-swiper"&gt;
            &lt;div data-speed="0.3" data-sm-speed="1" data-type="html" class="rd-parallax-layer"&gt;
                &lt;div class="swiper-container swiper-slider"&gt;
                    ...
                    &lt;div data-speed="0.5" class="swiper-caption swiper-parallax"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
    </code></pre>

<h4>Интеграция Фонового видео в слайдер</h4>
<p>Для реализации фонового видео используется плагин <b>RD Video Background</b>.</p>
<p>Для интеграции фонового видео в слайдер необходимо в блок с классом  <b>swiper-slide</b> вставить разметку для активации фонового видео.
</p>
<pre><code>
        &lt;div class="swiper-slide"&gt;
            &lt;div data-rd-video-path="path/to/video" class="rd-video"&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>Путь к видео необходимо указывать без расширения файла.</p>