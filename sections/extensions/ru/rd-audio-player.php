<h3>RD Audio Player</h3>
<p>HTML Website Templates используют расширение <b>RD Audio Player</b> для реализации собственного видеоплеера.</p>

<h4>Вставка аудиоплеера на страницу</h4>
<p>Для внедрения аудиоплеера  на целевую HTML страницу необходимо воспользоваться следующей разметкой .</p>

<pre><code>
        &lt;div data-rd-audio-playlist-name="audio-playlist" class="rd-audio"&gt;
            &lt;div class="rd-audio-controls"&gt;
                &lt;div class="rd-audio-controls-left"&gt;
                    &lt;a href="#" class="rd-audio-prev mdi mdi-fast-forward rd-audio-icon"&gt;&lt;/a&gt;
                    &lt;a href="#" class="rd-audio-play-pause mdi mdi-play rd-audio-icon has-controls"&gt;&lt;/a&gt;
                    &lt;a href="#" class="rd-audio-next mdi mdi-fast-forward rd-audio-icon"&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="rd-audio-progress-bar-wrap"&gt;
                    &lt;div class="rd-audio-progress-bar"&gt;&lt;/div&gt;
                    &lt;div class="rd-audio-time"&gt;
                        &lt;span class="rd-audio-current-time"&gt;00:00&lt;/span&gt;
                        &lt;span class="rd-audio-time-divider"&gt;/&lt;/span&gt;
                        &lt;span class="rd-audio-duration"&gt;00:00&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="rd-audio-title-wrap"&gt;
                        &lt;span class="rd-audio-author"&gt;&lt;/span&gt;
                        &lt;span class="rd-audio-title-divider"&gt;- &lt;/span&gt;
                        &lt;span class="rd-audio-title"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;a href="#" class="rd-audio-volume mdi mdi-volume-high rd-audio-icon"&gt;&lt;/a&gt;
                &lt;div class="rd-audio-volume-bar"&gt;&lt;/div&gt;
                &lt;div class="rd-audio-controls-right"&gt;
                    &lt;a href="#" class="rd-audio-playlist-button rd-audio-icon mdi mdi-dots-horizontal"&gt;&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>Вы можете изменять данную разметку для изменения внешнего вида аудиоплеера. Для работы плеера необходимы лишь классы на определенных элементах.
    Список данных классов с описанием указаны ниже в карте классов.</p>

<h4>Карта классов аудиоплеера</h4>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-prev</dt>
            <dd>Кнопка включения предыдущего трека;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-play-pause</dt>
            <dd>Кнопка воспроизведения\паузы трека;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-next</dt>
            <dd>Кнопка включения следующего трека;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-stop</dt>
            <dd>Кнопка остановки трека;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-progress-bar</dt>
            <dd>Полоса прогресса воспроизведения;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-progress-bar-slider</dt>
            <dd>Ползунок на полосе прогресса;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-duration</dt>
            <dd>Отображает длительность трека;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-current-time</dt>
            <dd>Отображает текущее время воспроизведения;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-title</dt>
            <dd>Отображает название трека;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-author</dt>
            <dd>Отображает автора трека;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-volume</dt>
            <dd>Кнопка включения\отключения звука;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-volume-bar</dt>
            <dd>Полоса громкости;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-volume-bar-slider</dt>
            <dd>Ползунок полосы громкости;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-playlist</dt>
            <dd>Список воспроизведения.</dd>
        </dl>
    </li>
</ul>

<h4>Замена аудиотрека в аудиоплеере</h4>
<p>Для замены аудиотрека необходимо в атрибуте <b>data-rd-audio-src</b> указать путь к аудиотрека. Данный атрибут не работает при наличии списка воспроизведения.</p>
<pre><code>
        &lt;div data-rd-audio-src="path/to/audio" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Загрузка списка воспроизведения в аудиоплеер</h4>

<p>Данный плагин поддерживает возможность создания неограниченого количества списков воспроизведения на странице.
    Для загрузки определенного списка воспроизведения необходимо добавить атрибут <b>data-rd-audio-playlist-name</b> с указанием названия списка воспроизведения.</p>

<pre><code>
        &lt;div data-rd-audio-playlist-name="name" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
        ...
        ...
        &lt;ul data-rd-audio-playlist="name"&gt;
            ...
        &lt;/ul&gt;
    </code></pre>
<p>Принцип формирования списка воспроизведения указан ниже.</p>

<h4>Замена названия аудиотрека в аудиоплеере</h4>


<p>Для замены названия аудиотрека необходимо в атрибуте <b>data-rd-audio-title</b> указать название аудиотрека. Данный атрибут не работает при наличии списка воспроизведения.</p>
<pre><code>
        &lt;div data-rd-audio-title="Your Title" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Замена автора аудиотрека в аудиоплеере</h4>

<p>Для замены автора аудиотрека необходимо в атрибуте <b>data-rd-audio-author</b> указать автора аудиотрека. Данный атрибут не работает при наличии списка воспроизведения.</p>

<pre><code>
        &lt;div data-rd-audio-author="Your Author" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Автовоспроизведение аудиотрека</h4>

<p>Для включения автовоспроизведения необходимо добавить атрибут <b>data-rd-audio-autoplay</b> со значением <b>true</b>. </p>
<pre><code>
        &lt;div data-rd-audio-autoplay="true" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Зацикливание аудиотрека</h4>

<p>Для включения зацикливания необходимо добавить атрибут <b>data-rd-audio-loop</b> со значением <b>true</b>. </p>

<pre><code>
        &lt;div data-rd-audio-loop="true" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Вставка списка воспроизведения в аудиоплеер
</h4>

<p>HTML разметка для создания списка воспроизведения выглядит следующим образом:</p>

<pre><code>
        &lt;ul data-rd-audio-playlist="audio-playlist" data-rd-audio-play-on="li" class="rd-audio-playlist"&gt;
            &lt;li data-rd-audio-src="path/to/audio1" data-rd-audio-title="title 1"
                                                                        data-rd-audio-author="author 1"&gt;
                ...
            &lt;/li&gt;
            &lt;li data-rd-audio-src="path/to/audio2" data-rd-audio-title="title 2"
                                                                        data-rd-audio-author="author 2"&gt;
                ...
            &lt;/li&gt;
        &lt;/ul&gt;
    </code></pre>

<p>Разметка внутри элемента списка может быть произвольной.
    Для привязки url аудиотрека с элементом списка необходимо использовать следующие атрибуты:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>data-rd-audio-src</dt>
            <dd>Путь к аудифайлу;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-rd-audio-title</dt>
            <dd>Название аудиотрека(дополнительный атрибут, необходимый в случае вывода названия аудиотрека в плеере).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-rd-audio-author</dt>
            <dd>автор аудиотрека (дополнительный атрибут, необходимый в случае вывода автора аудиотрека в плеере).</dd>
        </dl>
    </li>
</ul>



