<h3>RD Instafeed</h3>
<p>Intense использует расширение <b>RD Instafeed</b> для отображения данных с сервиса <a
        href="https://www.instagram.com/">https://www.instagram.com/</a> на веб-странице.</p>

<h4>Добавление виджета на страницу</h4>
<p>Базовая HTML разметка виджета для отображения одного элемента выглядит следующим образом:</p>

<pre><code>
        &lt;section class="instafeed" data-instafeed-clientid="..."
                        data-instafeed-get="user" data-instafeed-user="1507096244"&gt;
            &lt;div data-instafeed-item&gt;
                &lt;img src="images/_blank.png" alt="" data-images-low_resolution-url="src" /&gt;
            &lt;/div&gt;
        &lt;/section&gt;
    </code></pre>

<p>Вы можете отобразить неограниченное количество элементов или использовать данный виджет несколько раз на странице.
  Так же, данное расширение можно интегрировать с любым сторонним скриптом (например: карусель, галерея и т.д.)  HTML структура внутри виджета произвольная. Например,
  Вы можете использовать систему ТМ Grid  для удобного расположения элементов. Обязательным является только наличие элемента с атрибутом <b>data-instafeed-item</b>.</p>

<h4>Отображение изображений Instagram со страницы пользователя</h4>

<p>Для того чтобы отобразить изображения со страницы пользователя, необходимо  добавить атрибут  <b>data-instafeed-get="user"</b>
  и ввести идентификатор пользователя сервиса в атрибут <b>data-instafeed-user</b>. Например:</p>

<pre><code>
        &lt;section class="instafeed" data-instafeed-get="user" data-instafeed-user="1507096244"&gt;
            ...
        &lt;/section&gt;
    </code></pre>

<p>Идентификатор пользователя можно получить при помощи различных сервисов. Вот<a
        href="http://jelled.com/instagram/lookup-user-id">один из них</a> .</p>

<h4>Отображение изображений Instagram по тегу</h4>

<p>Для того чтобы отобразить изображения по тегу, необходимо  добавить атрибут <b>data-instafeed-get="tagged"</b> и ввести название тега в атрибут <b>data-instafeed-tagname</b>. Например:</p>

<pre><code>
        &lt;section class="instafeed" data-instafeed-get="user" data-instafeed-user="1507096244"&gt;
            ...
        &lt;/section&gt;
    </code></pre>

<h4>Отображение информации о пользователе Instagram</h4>

<p>ля того чтобы отобразить информацию о пользователе, необходимо  добавить атрибут <b>data-instafeed-get=”profile”</b>
  и ввести идентификатор пользователя сервиса в атрибут <b>data-instafeed-user</b>. Например:</p>

<pre><code>
        &lt;section class="instafeed" data-instafeed-get="profile" data-instafeed-user="1507096244"&gt;
            ...
        &lt;/section&gt;
    </code></pre>

<h4>Настройка формата отображения даты</h4>

<p>Для того чтобы настроить формат отображения даты, необходимо добавить атрибут <b>data-instafeed-date-format</b>. Например:</p>

<pre><code>
        &lt;div class="instafeed" data-instafeed-date-format="%b/%d/%Y"&gt;
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
            <dd>вывод сокращенного названия месяца(Jan, Feb, Mar).</dd>
        </dl>
    </li>
</ul>

<p>По умолчанию дата выводится в формате Oct/30/2015.</p>

<h4>Создание корректной структуры элемента виджета</h4>
<p>Получить данные элемента возможно только внутри блока с атрибутом <b>data-instafeed-item</b>.  Например:</p>

<pre><code>
        &lt;div data-instafeed-item&gt;
            &lt;img src="images/_blank.png" alt="" data-images-low_resolution-url="src" /&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Логика работы виджета</h4>

<p>Для получение данных о элементе виджета необходимо прописать следующий атрибут:
    <b>data-(название данных)="target"</b>
    где <b>target</b> - атрибут, в который будут записаны данные. Если в target указать значение "text",
  данные будут выведены внутри тега обычным текстом. Ниже указаны примеры получения различных данных. Если необходимо записать значение данных в несколько атрибутов, задайте их через запятую.
</p>

<h4>Отображение картинки элемента</h4>

<p>Для отображения ссылки на картинку сервиса необходимо указать атрибут <b>data-images_(разрешение картинки)="src"</b>. Например:</p>

<ul class="marked-list">
    <li>
        Картинка 320х320:
        <pre><code>
            &lt;img data-images_low_resolution-url="src" src="images/_blank.png" alt=""/&gt;
            </code></pre>
    </li>
    <li>
        Картинка 640х640:
        <pre><code>
            &lt;img data-images_standard_resolution-url="src" src="images/_blank.png" alt=""/&gt;
            </code></pre>
    </li>
    <li>
        Картинка 150х150:
        <pre><code>
            &lt;img data-images_thumbnail-url="src" src="images/_blank.png" alt=""/&gt;
            </code></pre>
    </li>
</ul>

<h4>Отображение ссылки на элемент</h4>

<p>Для отображения ссылки на картинку сервиса необходимо указать атрибут <b>data-link="href,text"</b>. Например, для отображения ссылки с текстом ссылки используйте:</p>

<pre><code>
        &lt;a href="#" data-link="href,text"&gt;&lt;/a&gt;
    </code></pre>

<h4>Отображение тегов элемента</h4>

<p>Для отображения тегов элемента необходимо указать атрибут <b>data-tags_full="text"</b>. Например:</p>
<pre><code>
        &lt;p data-tags_full="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Отображение даты добавления</h4>
<p>Для отображения даты добавления элемента необходимо указать атрибут <b>data-dating=”text”</b>.
  Чтобы отобразить дату в формате <b>YY-MM-DD</b> необходимо указать атрибут <b>data-created_time=”text”</b>. Например:
</p>

<pre><code>
        &lt;time data-created_time="text"&gt;&lt;/time&gt;
    </code></pre>

<h4>Отображение описания элемента</h4>
<p>Для отображения описания элемента необходимо указать атрибут  <b>data-caption-text="text"</b>. Например:</p>
<pre><code>
        &lt;p data-caption-text="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Отображение количества лайков</h4>
<p>Для отображения количества лайков изображения необходимо указать атрибут <b>data-likes-count="text"</b>. Например:</p>
<pre><code>
        &lt;p data-likes-count="text"&gt;&lt;/p&gt;
    </code></pre>
<h4>Отображение количества комментариев</h4>
<p>Для отображения количества комментариев изображения необходимо указать атрибут <b>data-comments-count="text"</b>. Например:</p>

<pre><code>
        &lt;p data-comments-count="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Отображение имени пользователя</h4>
<p>Для отображения имени пользователя необходимо указать атрибут  <b>data-username="text"</b>. Например:</p>

<pre><code>
        &lt;p data-username="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Отображение полного имени пользователя</h4>
<p>Для отображения имени пользователя необходимо указать атрибут<b>data-full_name="text"</b>. Например:</p>

<pre><code>
        &lt;p data-full_name="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Отображение биографии пользователя</h4>
<p>Для отображения биографии пользователя необходимо указать атрибут  <b>data-bio="text"</b>. Например:</p>
<pre><code>
        &lt;p data-bio="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Отображение количества подписчиков</h4>
<p>Для отображения количества подписчиков необходимо указать атрибут  <b>data-counts-follows="text"</b>. Например:</p>

<pre><code>
        &lt;p data-counts-follows="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Отображение количества страниц, на которые подписан пользователь</h4>
<p>Для отображения количества страниц, на которые подписан пользователь, необходимо указать атрибут <b>data-counts-followed_by="text"</b>. Например:</p>
<pre><code>
        &lt;p data-counts-followed_by="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Отображение веб-страницы пользователя</h4>
<p>Для отображения веб-страницы пользователя необходимо указать атрибут <b>data-counts-followed_by="text"</b>. Например:</p>
<pre><code>
        &lt;a href="#" data-website="href,text"&gt;&lt;/a&gt;
    </code></pre>