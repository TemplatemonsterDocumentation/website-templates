<h3>Настройка cтраницы режима техобслуживания</h3>
<p>Intense содержит готовые примеры реализации страниц Maintenance и Coming Soon в разделе Pages. Ниже приведена информация по настройке данных страниц.</p>
<h4>Как указать дату в счётчике обратного отсчета</h4>
<p>Intense использует плагин <b>jQuery Countdown</b> для реализации счётчиков обратного отсчета. Подробную информацию о работе с данным плагином Вы можете найти в разделе <a href="index.php?lang=ru&section=extensions#countdown">Extensions > Countdown</a></b>.</p>
<p>Для того чтобы настроить счётчик обратного отсчета в Intense, Вам необходимо в соответствующей разметке счётчика указать целевую дату в атрибуте <b>data-time</b> в формате <b>"DD Mon YYYY"</b>:</p>

<pre><code><!-- Countdown-->
        &lt;div class="countdown-custom countdown-ellipse"&gt;
        &lt;div data-type="until" data-time="25 Apr 2017" data-format="dhms" class="countdown"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
