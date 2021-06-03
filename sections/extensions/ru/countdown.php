<h3>Countdown</h3>
<p>HTML Website Templates используют расширение <b>jQuery Countdown</b> для реализации таймера.</p>
<h4>Вставка таймера на страницу</h4>
<p>Для внедрения таймера обратного отсчета на целевую HTML страницу необходимо воспользоваться следующей разметкой .
</p>

<pre><code>
        &lt;div class="countdown" data-type="until" data-time="24 Dec 2015 15:00"&gt;
    </code></pre>

<p>Атрибут <b>data-type</b> может принимать следующие значения:
</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>until</dt>
            <dd>таймер ведет отсчет времени до указанной в <b>data-time</b> даты.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>since </dt>
            <dd>таймер ведет отсчет времени с указанной в <b>data-time</b> даты</dd>
        </dl>
    </li>
</ol>

<p>Например, </p>
<pre><code>
        &lt;div class="countdown" data-type="until" data-time="24 Dec 2016 15:00"&gt;
    </code></pre>
    <p>Обратный отсчет будет вестись до 15:00 24 Декабря 2016 года.</p>
<pre><code>
        &lt;div class="countdown" data-type="since" data-time="24 Dec 2014 15:00"&gt;
    </code></pre>
<p>В данном случае отсчет будет вестись с 15:00 24 Декабря 2014 года.
</p>
<p>Дату отсчета нужно указывать в атрибуте <b>data-time</b> в следующем формате.</p>
<pre>
    <code>
        DD month YYYY HH:MM
    </code>
</pre>
<p>где <b>month</b> - это месяц, который может принимать следующие параметры:
</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Jan</dt>
            <dd>January</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Feb</dt>
            <dd>February</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Mar</dt>
            <dd>March</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Apr</dt>
            <dd>April</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>May</dt>
            <dd>May</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Jun</dt>
            <dd>June</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Jul</dt>
            <dd>July</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Aug</dt>
            <dd>August</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sep</dt>
            <dd>September</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Oct</dt>
            <dd>October</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Nov</dt>
            <dd>November</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Dec</dt>
            <dd>December</dd>
        </dl>
    </li>
</ol>
<p>Например,</p>
<pre><code>
        &lt;div class="countdown" data-type="until" data-time="24 Aug 2016 12:00"&gt;
    </code></pre>
<p>В данном случае отсчет будет вестись до 12:00 24 Августа 2016 года.
</p>
<h4>Настройка формата вывода таймера</h4>
<p>Для того чтобы задать формат вывода таймера на странице нужно добавить атрибут <b>data-format</b>.</p>
<p>Используйте следующие символы (в указанном порядке), чтобы указать какие периоды вы хотите отобразить: <b>"Y"</b> в течение многих лет, <b>"O"</b> в
    течение нескольких месяцев, <b>"W"</b> в течение нескольких недель, <b>"D"</b> в течение нескольких дней, <b>"H"</b> в течение нескольких часов, <b>"М"</b> за несколько минут, <b>"S"</b> на несколько секунд.
</p>
<p>Например,</p>
<pre><code>
        &lt;div class="countdown" data-type="until" data-time="24 Aug 2016 12:00" data-format="wdh"&gt;
    </code></pre>

<p>В данном случае таймер приймет следующий формат:</p>
<p>В течение нескольких недель, в течение нескольких дней, в течение нескольких часов.</p>