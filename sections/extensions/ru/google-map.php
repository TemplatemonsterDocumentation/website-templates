<h3>RD Google Maps</h3>
<h6>Intense использует плагин <b>RD Google Maps</b> для реализации Google Maps.
    Плагин поддерживает следующие настройки:</h6>
<ul class="marked-list">
    <li>Замена координат карты;</li>
    <li>Добавление пользовательких маркеров на карту;</li>
    <li>Добавление всплывающих окон к маркерам;</li>
    <li>Пользовательскую стилизацию карты;</li>
</ul>

<h4>Как изменить координаты карты</h4>

<p>Для замены координат карты на нужные Вам необходимо в .html файле с картой в блоке:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        &lt;div id="google-map" class="map_model"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>указать два data атрибута: <b>data-x</b> (северная широта) и <b>data-y</b> (западная долгота). В результате, у Вас получится следующая строка кода:
</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        &lt;div class="rd-google-map"&gt;
            &lt;div id="google-map" class="map_model" data-x="-73.9994068" data-y="40.643180"&gt;
                ...
            &lt;/div&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<p>Нужные Вам координаты можно получить при помощи сервиса Google Maps. Для этого необходимо в целевом участке карты нажать на правую кнопку мышки и выбрать пункт “Что здесь”.
  В открывшемся модальном окне необходимые координаты будут под названием места, где первое число - это <b>data-x</b>, второе -  <b>data-y</b>.</p>
<p class="alert alert-warning">Внимание: также обращаем ваше внимание на то, что часто координаты путают местами и карта показывает неправильный адрес в другом полушарии Земли.</p>

<h4>Как добавить маркер на карту</h4>
<p>Для того чтобы добавить пользовательский маркер на карту, необходимо в .html файле с картой в список:</p>
<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;ul class="map_locations"&gt;
            ...
        &lt;/ul&gt;
        ...
    </code></pre>

<p>добавить новый пункт и определить в него два data атрибута: <b>data-x</b> (северная широта) и <b>data-y</b> (западная долгота). В результате получится:
</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;ul class="map_locations"&gt;
            &lt;li data-x="-73.9994068" data-y="40.643180"&gt;&lt;/li&gt;
        &lt;/ul&gt;
        ...
    </code></pre>

<p>Без указанных координат скрипт проигнорирует пустой пункт списка и маркер не отобразится.</p>

<p>Полный примера кода будет выглядеть следующим образом:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        &lt;div class="rd-google-map"&gt;
            &lt;div id="google-map" class="map_model"&gt;&lt;/div&gt;

            &lt;ul class="map_locations"&gt;
                &lt;li data-x="-73.9874068" data-y="40.643180"&gt;
                    &lt;p&gt; 9870 St Vincent Place, Glasgow, DC 45 Fr 45.
                        &lt;span&gt;800 2345-6789&lt;/span&gt;
                    &lt;/p&gt;
                &lt;/li&gt;
                &lt;li data-x="-72.9874068" data-y="39.643180"&gt;
                    &lt;p&gt; 9870 St Vincent Place, Glasgow, DC 45 Fr 45.
                        &lt;span&gt;800 2345-6789&lt;/span&gt;
                    &lt;/p&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    </code></pre>
<p>где:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;li data-x="-73.9874068" data-y="40.643180"&gt;
            &lt;p&gt; 9870 St Vincent Place, Glasgow, DC 45 Fr 45.
                &lt;span&gt;800 2345-6789&lt;/span&gt;
            &lt;/p&gt;
        &lt;/li&gt;
        ...
    </code></pre>
<p>Представляет собой новый маркер на карте.</p>

<h4>Добавление всплывающих окон к маркерам</h4>

<p>Для добавления всплывающего окна к пользовательскому маркеру достаточно просто указать содержимое всплывающего окна в соответствующем пункте списка маркеров карты:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;li data-x="-73.9994068" data-y="40.643180" &gt;
            ...
        &lt;/li&gt;
        ...
    </code></pre>

<p>В результате получится строка кода:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;li data-x="-73.9994068" data-y="40.643180" &gt;
            Наше представительство
        &lt;/li&gt;
        ...
    </code></pre>

<h4>Как заменить стилизацию карты</h4>
<p>RD Google Map поддерживает множество различных вариантов стилизации карты. Вы можете получить различные готовые варианты стилизации на сайте:
  <a href="https://snazzymaps.com/">https://snazzymaps.com/.</a></p>

<p>На данном сайте Вам необходимо скопировать массив стилей понравившейся карты и вставить его в атрибут <b>data-style</b> соответствующей карты на целевой *.html странице:</p>
<pre><code>
        &lt;!-- RD Google Map--&gt;
        &lt;div id="google-map" class="map_model" data-styles='Your Map Styles'&gt;
            ...
        &lt;/div&gt;
    </code></pre>