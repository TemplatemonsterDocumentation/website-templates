<h3>RD Flickr Gallery</h3>
<h6>HTML Website Templates используют расширение <b>RD Flickrgallery</b> для получения данных с сервиса <a
        href="https://www.flickr.com/">https://www.flickr.com/</a> на веб-странице.</h6>

<h4>Вставка виджета на страницу</h4>
<p>Базовая HTML разметка виджета для вывода одного элемента выглядит следующим образом:</p>
<pre><code>
        &lt;div class="flickr" data-flickr-id="47302490@N05"&gt;
            &lt;div data-type="flickr-item"&gt;
                &lt;img data-image_q="src" data-title="alt" src="images/_blank.png" alt=""/&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<p>Вы можете вывести неограниченое количество данных элементов или использовать данный виджет несколько раз на странице.
    Так же, данное расширеное можно интегрировать с любым стороним скриптом (например: карусель, галлерея и т.д.).  HTML структура внутри виджета произвольная.
    Например, вы можете использовать ТМ Grid систему для удобного расположения элементов. Обязательно только наличие элемента с дата атрибутом <b>data-type="flickr-item"</b>.</p>

<h4>Настройка аккаунта Flickr</h4>
<p>Для того, чтобы указать пользователя, необходить записать идентфикатор пользователя сервиса в атрибут <b>data-id</b>. Например:</p>
<pre><code>
        &lt;div class="flickr" data-flickr-id="47302490@N05"&gt;
    </code></pre>
<p>Идентфикатор пользователя сервиса можно получить по следующей ссылке:</p>
<p><a href="http://idgettr.com/">http://idgettr.com/.</a></p>
<p>Для того, чтобы получить данные с нескольких аккаунтов, запишите их в атрибут <b>data-id</b> через запятую. </p>
<h4>Настройка фильтрации данных</h4>

<p>Для того, чтобы отфильтровать данные по определенным тегам необходимо добавить атрибут <b>data-tags</b>. Для указания нескольких тегов, определите их через запятую. Например:
</p>

<pre><code>
        &lt;div class="flickr" data-flickr-id="47302490@N05,48444528@N07"
                            data-flickr-tags="webdesign, baseball" data-flickr-tagmode="any"&gt;
    </code></pre>
<p>где, атрибут <b>data-flickr-tagmode</b> отвечает за тип фильтрации по тегам и принимает 2 значения:
</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>any</dt>
            <dd>вывод элемента, если он соответствует хотя бы одному из тегов;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>all</dt>
            <dd>вывод элемента, который соответствует всем тегам.</dd>
        </dl>
    </li>
</ul>

<h4>Настройка формата вывода даты</h4>
<p>Дла того, чтобы настроить формат вывода даты, необходимо добавить атрибут <b>data-flickr-date-format</b>. Например:
</p>
<pre><code>
        &lt;div class="twitter" data-flickr-date-format="%b/%d/%Y"&gt;
    </code></pre>

<p>где</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>%d</dt>
            <dd>вывод числа(1,2,3);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%Y</dt>
            <dd>вывод полного формата года(2011, 2013, 2015);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%y</dt>
            <dd>вывод последних 2 цифр года(11, 13, 15);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%m</dt>
            <dd>вывод номера месяца(1,2,3);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%B</dt>
            <dd>вывод полного названия месяца(January,February, March);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%b</dt>
            <dd>вывод сокращенного названия месяца(Jan, Feb, Mar). По умолчанию дата выводится в формате Oct/30/2015.</dd>
        </dl>
    </li>
</ul>

<h4>Настройка языка данных</h4>
<p>Для изменения языка содержимого, укажите аттрибут <b>data-lang</b>. Например:
</p>

<pre><code>
        &lt;div class="flickr" data-flickr-id="47302490@N05,48444528@N07" data-flickr-lang="en-us"&gt;
    </code></pre>
<p>Допустимые значения:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>de-de</dt>
            <dd>немецкий язык;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>en-us</dt>
            <dd>английский язык;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>es-us</dt>
            <dd>испанский язык;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>fr-fr</dt>
            <dd>французкий язык;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>it-it</dt>
            <dd>итальянский язык;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ko-kr</dt>
            <dd>корейский язык;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>pt-br</dt>
            <dd>португальский язык;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>zh-hk</dt>
            <dd>китайский язык.</dd>
        </dl>
    </li>
</ul>

<h4>Создание корректной структуры элемента виджета</h4>


<p>Получить данные элемента возможно только внутри блока с атрибутом <b>data-type="flickr-item"</b>.  Например:</p>

<pre><code>
        &lt;div data-type="flickr-item"&gt;
            &lt;img data-image_q="src" data-title="alt" src="images/_blank.png" alt=""/&gt;
        &lt;/div&gt;
    </code></pre>

<p>Логика работы виджета</p>

<p>Для получение данных о элементе виджета необходимо прописать следующий атрибут: </p>
<p><b>data-(название данных)="target"</b></p>
<p>где <b>target</b> - атрибут, в который будут записаны данные. Если в <b>target</b> указать значение <b>"text"</b>,
    данные будут выведены внутрь тега обычным текстом. Ниже указаны примеры для получение различных данных.
    Если необходимо записать значение данных в несколько аттрибутов, определите их через запятую.</p>

<h4>Вывод картинки элемента</h4>
<p>Для получения ссылки на картинку сервиса необходимо указать аттрибут <b>data-image_(суффикс картинки)="src"</b>. Например:</p>

<pre><code>
        &lt;img data-image_q="src" data-title="alt" src="images/_blank.png" alt=""/&gt;
    </code></pre>

<p>С помощью суффикса картинки мы указываем желаемый размер полученной картинки. Доступны следующие значение:</p>

<ul class="marked-list">
    <li>s: 75px75px;</li>
    <li>q: 150pх150px;</li>
    <li>t: 100px по большей стороне;</li>
    <li>m: 240px по большей стороне;</li>
    <li>n: 320px по большей стороне;</li>
    <li>-: 500px по большей стороне;</li>
    <li>z: 640px по большей стороне;</li>
    <li>c: 800px по большей стороне;</li>
    <li>b: 1024px по большей стороне;</li>
    <li>h: 1600px по большей стороне;</li>
    <li>k: 2048px по большей стороне;</li>
    <li>o: оригинальная картинка.</li>
</ul>

<h4>Вывод ссылки на элемент</h4>

<p>Для получения ссылки на картинку сервиса необходимо указать атрибут <b>data-link="href,text"</b>. Например, для вывода ссылки с текстом ссылки:</p>

<pre><code>
        &lt;a href="#" data-link="href,text"&gt;&lt;/a&gt;
    </code></pre>

<h4>Вывод автора элемента</h4>

<p>Для получения автора элемента с указанием e-mail, необходимо указать атрибут <b>data-author_name="text"</b>. Например:
</p>
<pre><code>
        &lt;p data-author_name="text"&gt;&lt;/p&gt;
    </code></pre>

<p>Для получения автора элемента без указания e-mail, необходимо указать атрибут <b>data-author="text"</b>. Например:</p>

<pre><code>
        &lt;p data-author="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод тегов элемента</h4>

<p>Для получения тегов элемента необходимо указать атрибут <b>data-tags="text"</b>. Например:</p>

<pre><code>
        &lt;p data-tags="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод названия элемента</h4>

<p>Для получения названия элемента необходимо указать атрибут <b>data-title="text"</b>. Например:</p>

<pre><code>
        &lt;p data-title="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод даты добавления</h4>
<p>Для получения даты добавления элемента необходимо указать атрибут <b>data-dating="text"</b>. Что получить дату в формате <b>YY-MM-DD</b> необходимо указать атрибут <b>data-datetime="text"</b>.Например:</p>
<pre><code>
        &lt;time data-dating="text" data-datetime="datetime"&gt;&lt;/time&gt;
    </code></pre>

<h4>Вывод описания элемента</h4>
<p>Для получения описания элемента необходимо указать атрибут <b>data-description="text"</b>. Например:
</p>
<pre><code>
        &lt;p data-description="text"&gt;&lt;/p&gt;
    </code></pre>