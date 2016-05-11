<h3>RD Calendar. Календарь с поддержкой событий</h3>
<h6>Intense использует расширение <b>RD Calendar</b> для реализации календаря.
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
<p>RD Calendar поддерживает следующие структурные еденицы для создания разметки календаря:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_day</dt>
            <dd>отображает текущий день недели;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_date</dt>
            <dd>отображает текущий день месяца;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_month</dt>
            <dd>отображает текущий месяц;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_fullyear</dt>
            <dd>отображает текущий год;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-panel</dt>
            <dd>отображает информационную панель;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-prev</dt>
            <dd>отображает переключатель предыдущего месяца календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-next</dt>
            <dd>отображает переключатель следующего месяца календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-month</dt>
            <dd>отображает месяц календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-fullyear</dt>
            <dd>отображает год календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table</dt>
            <dd>отображает таблицу дней месяца;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_day</dt>
            <dd>отображает день недели каледаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_date</dt>
            <dd>отображает день месяца каледаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_events</dt>
            <dd>отображает события в дне месяца каледаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_has-events</dt>
            <dd>отображает день каледаря, который содержит события;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_events-count</dt>
            <dd>отображает количество событий в дне календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_event</dt>
            <dd>отображает событие в дне месяца каледаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_today</dt>
            <dd>отображает текущий день месяца в календаре;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_prev</dt>
            <dd>отображает дни предыдущего месяца календаря;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_next</dt>
            <dd>отображает дни следующего месяца календаря;</dd>
        </dl>
    </li>
</ul>

<h4>Настройка формата вывода дней недели</h4>
<p>По умолчанию дни недели в RD Calendar выводятся в следующем формате.
   </p>
<p> Sun, Mon, Tue, Wed, Thu, Fri, Sat</p>

<p>Для определения персонального формата вывода дней недели необходимо воспользоваться дата атрибутом <b>data-days</b> для целевого календаря в HTML разметке в виде строки с разделением дней запятыми:
</p>

<pre><code>
        &lt;div class="rd-calendar" data-days="Sn, Mn, Te, Wd, Th, Fr, St"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Обратите внимание: формат вывода в RD Calendar может быть совершенно любым. Вы просто указываете нужное Вам наименование: любой текст на любом языке в формате, предложенном в примере (текст, разделенный запятыми).
</p>

<h4>Настройка формата вывода месяцев года</h4>
<p>По умолчанию месяцы года в RD Calendar выводятся в следующем формате:</p>

<p>January, February, March, April, May, June,
    July, August, September, October, November, December</p>

<p>Для определения персонального формата вывода дней
    недели необходимо воспользоваться дата атрибутом <b>data-months</b> для целевого календаря в HTML разметке в виде строки с разделением месяцев запятыми:</p>
<pre><code>
        &lt;div class="rd-calendar" data-months="Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Обратите внимание: формат вывода в RD Calendar может быть совершенно любым. Вы просто указываете требуемое Вам именование: любой текст на любом языке в формате, предложенном в примере (текст, разделенный запятыми).</p>

<h4>Работа с событиями в календаре</h4>
<p>Для того чтобы привязать некоторое событие к определенному дню в календаре, необходимо определить соответствующую разметку события в списке событий целевого календаря:</p>

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

<p class="alert alert-info">Обратите внимане, что атрибут <b>data-date="10/28/2015"</b> элемента <b>.rdc-event</b> является обязательным и имеет формат <b>MM/DD/YYYY</b>, в
    инном случае скрипт не определит день с описанным внутри событиями и не отобразит их в календаре.
    Само событие может содержать любую вложенную разметку.</p>







