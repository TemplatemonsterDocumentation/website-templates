<h3>Google Maps</h3>

<p>Плагин поддерживает следующие настройки:</p>
<ul class="marked-list">
    <li>Установка ключа Google API для карты;</li>
    <li>Изменение масштаба карты;</li>
    <li>Изменение центра карты по адресу или координатам;</li>
    <li>Установка стиля карты;</li>
    <li>Добавление маркеров на карту;</li>
</ul>

<h4>Установка ключа для карты</h4>
<p>Без ключа ваша карта будет работать в демо режиме, инструкцию по получению можно найти на сайте <a href='https://developers.google.com/maps/documentation/javascript/get-api-key'>developers.google.com</a></p>
<p>Полученный клуч нужно вписать в атрибут <b>data-key</b>:</p>

<pre><code>
&lt;!-- Google Map--&gt;
&lt;div class="google-map-container" data-key="ВАШ_API_КЛЮЧ"&gt;
    &lt;div class="google-map"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Как изменить координаты центра карты</h4>
<p>Для замены координат центра карты на нужные Вам необходимо в .html файле с картой в блоке:</p>

<pre><code>
&lt;!-- Google Map--&gt;
&lt;div class="google-map-container"&gt;
    &lt;div class="google-map"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>указать в атрибуте <b>data-center</b> нужный адрес. В результате, у Вас получится следующий код:</p>

<pre><code>
&lt;!-- Google Map--&gt;
&lt;div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."&gt;
    &lt;div class="google-map"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Как добавить маркер на карту</h4>
<p>Для того чтобы добавить свой маркер на карту, необходимо в .html файле с картой в список:</p>
<pre><code>
&lt;!-- Google Map--&gt;
...
&lt;ul class="google-map-markers"&gt;
    ...
&lt;/ul&gt;
...
</code></pre>

<p>добавить новый пункт с атрибутом <b>data-location</b>. В результате получится:</p>

<pre><code>
&lt;!-- Google Map--&gt;
...
&lt;ul class="google-map-markers"&gt;
    &lt;li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."&gt;&lt;/li&gt;
&lt;/ul&gt;
...
</code></pre>

<h4>Добавление описания к маркеру</h4>
<p>Для добавления всплывающего окна к пользовательскому маркеру нужно указать содержимое для окна в атрибуте <b>data-description</b>:</p>

<pre><code>
&lt;!-- Google Map--&gt;
...
&lt;li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"&gt;&lt;/li&gt;
...
</code></pre>

<h4>Как заменить стилизацию карты</h4>
<p>Карта поддерживает множество различных вариантов стилизации. Вы можете получить различные готовые варианты стилизации на сайте: <a href="https://snazzymaps.com/">https://snazzymaps.com/.</a></p>

<p>На данном сайте Вам необходимо скопировать массив стилей понравившейся карты и вставить его в атрибут <b>data-styles</b> соответствующей карты на целевой *.html странице:</p>
<pre><code>
&lt;!-- Google Map--&gt;
&lt;div class="google-map-container" data-styles='Your Map Styles'&gt;
    ...
&lt;/div&gt;
</code></pre>
