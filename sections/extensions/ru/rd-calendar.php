<h3>RD Calendar. Календарь с поддержкой событий</h3>
<h6>HTML Website Templates используют расширение <b>RD Calendar</b> для реализации календаря.
    Базовая HTML разметка календаря выглядит следующим образом:
</h6>

<pre><code>
        &lt;div class="rd-calendar"&gt;
            &lt;div class="rdc-panel"&gt;
                &lt;a class="rdc-next"&gt;&lt;/a&gt;
                &lt;a class="rdc-prev"&gt;&lt;/a&gt;
                &lt;div class="rdc-today_day"&gt;&lt;/div&gt;
                &lt;div class="rdc-today_date"&gt;&lt;/div&gt;
                &lt;div class="rdc-today_month"&gt;&lt;/div&gt;
                &lt;div class="rdc-today_fullyear"&gt;&lt;/div&gt;
                &lt;div class="rdc-month"&gt;&lt;/div&gt;
                &lt;div class="rdc-fullyear"&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="rdc-table"&gt;&lt;/div&gt;
            &lt;div class="rdc-events"&gt;
                &lt;a class="rdc-events_close"&gt;&lt;/a&gt;
                &lt;ul&gt;
                    &lt;li class="rdc-event" data-date="10/28/2015"&gt;
                        Event 1
                    &lt;/li&gt;
                    &lt;li class="rdc-event" data-date="10/31/2015"&gt;
                        Event 2
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Карта классов для создания HTML разметки</h4>
<p>RD Calendar поддерживает следующие структурные еденицы для создания разметки календаря.</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_day</dt>
            <dd>Отображает текущий день недели;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_date</dt>
            <dd>Отображает текущий день месяца;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_month</dt>
            <dd>Отображает текущий месяц;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_fullyear</dt>
            <dd>Отображает текущий год;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-panel</dt>
            <dd>Отображает информационную панель;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-prev</dt>
            <dd>Отображает переключатель предыдущего месяца календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-next</dt>
            <dd>Отображает переключатель следующего месяца календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-month</dt>
            <dd>Отображает месяц календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-fullyear</dt>
            <dd>Отображает год календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table</dt>
            <dd>Отображает таблицу дней месяца;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_day</dt>
            <dd>Отображает день недели каледаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_date</dt>
            <dd>Отображает день месяца каледаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_events</dt>
            <dd>Отображает события в дне месяца каледаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_has-events</dt>
            <dd>Отображает день каледаря, который содержит события;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_events-count</dt>
            <dd>Отображает количество событий в дне календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_event</dt>
            <dd>Отображает событие в дне месяца каледаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_today</dt>
            <dd>Отображает текущий день месяца в календаре;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_prev</dt>
            <dd>Отображает дни предыдущего месяца календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_next</dt>
            <dd>Отображает дни следующего месяца календаря;</dd>
        </dl>
    </li>
</ul>

<h4>Настройка формата вывода дней недели</h4>
<p>По умолчанию дни недели в RD Calendar выводятся в следующем формате.
   </p>
<p> Sun, Mon, Tue, Wed, Thu, Fri, Sat</p>

<p>Для определения персонального формата вывода дней недели необходимо воспользоваться дата атрибутом <b>data-days</b> для целевого календаря в HTML разметке в виде строки с разделением дней через запятую.
</p>

<pre><code>
        &lt;div class="rd-calendar" data-days="Sn, Mn, Te, Wd, Th, Fr, St"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Обратите внимание: формат вывода в RD Calendar может быть совершенно любым.
    Вы просто указываете требуемое вам именование: любой текст, на любом языке в формате предложенном в примере (текст, разделенный через запятую)
</p>

<h4>Настройка формата вывода месяцев года</h4>
<p>По умолчанию месяцы года в RD Calendar выводятся в следующем формате.</p>

<p>January, February, March, April, May, June,
    July, August, September, October, November, December</p>

<p>Для определения персонального формата вывода дней
    недели необходимо воспользоваться дата атрибутом <b>data-months</b> для целевого календаря в HTML разметке в виде строки с разделением месяцев через запятую.</p>
<pre><code>
        &lt;div class="rd-calendar" data-months="Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Обратите внимание: формат вывода в RD Calendar может быть совершенно любым. Вы просто указываете требуемое вам именование: любой текст, на любом языке в формате предложенном в примере (текст, разделенный через запятую)</p>

<h4>Работа с событиями в календаре</h4>
<p>Для того, чтобы привязать некоторое событие к определенному дню в календаре, необходимо определить соответствующую разметку события в списке событий целевого календаря.</p>

<pre><code>
        &lt;!-- RD Calendar --&gt;
        &lt;div class="rd-calendar"&gt;
            ...
            &lt;!-- Events List Holder --&gt;
            &lt;div class="rdc-events"&gt;
                ...
                &lt;!-- Events List --&gt;
                &lt;ul&gt;
                    &lt;!-- Create Event --&gt;
                    &lt;li class="rdc-event" data-date="10/28/2015"&gt;
                        Event 1
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Обратите внимане, что атрибут <b>data-date="10/28/2015"</b> у элемента <b>.rdc-event</b> является обязательным и имеет формат <b>MM/DD/YYYY</b>, в
    инном случае скрипт не определит день с описанным внутри событиями и не отобразит их в календаре.
    Само событие может содержать любую вложенную разметку.</p>







