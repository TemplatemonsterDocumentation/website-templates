<h3>RD Instafeed</h3>
<p>HTML Website Templates используют расширение <b>RD Instafeed</b> для получения данных с сервиса <a
        href="https://www.instagram.com/">https://www.instagram.com/</a> на веб-странице.</p>

<h4>Настройка скрипта</h4>

<p>Для рбаоты скрипта необходимо получить API access_token Вашего аккаунта. Сначала необходимо войти в свой аккаунт на сайте
  <a href="http://instagram.com">instagram.com</a></p>

<p>Выполнить 1 и 2 пункт следующей инструкции - <a
      href="https://elfsight.com/blog/2016/05/how-to-get-instagram-access-token/">Ссылка</a></p>
<p>После чего необходимо сгенерированный ClientId вставить в ссылку
  <mark>https://instagram.com/oauth/authorize/?client_id=[CLIENT_ID_HERE]&redirect_uri=https://elfsight.com/service/generate-instagram-access-token/&response_type=token&scope=public_content</mark>
  вместо <b>[CLIENT_ID_HERE]</b> и перейти. После чего Вас перенаправит а сайт URL которого будет содеражть Ваш уникльный access_token, прим. <b>https://elfsight.com/service/generate-instagram-access-token/#access_token=**********.******.**************************</b></p>
<p>Вам необходимо скопировать строку разделенную точками после <b>/#access_token=</b></p>


<p>Полученую строку необходимо вставить в файл  <mark>js/script.js</mark> в секции с инициализацией <b>RD Instafeed JS</b>, параметр <strong>accessToken</strong></p>

<p>Строка состоит из 3 частей разделенных точкой</p>

<ul>
    <li>1 часть строки необходимо вставить в <strong>userId</strong></li>
    <li>3 часть строки вставить в <strong>clientId</strong></li>
  </ul>

<p><strong>Обратите внимание:</strong> после обновление Instagram API мы можем выводить контент только с своего аккаунта(с аккаунта к которому есть доступ).</p>


<h4>Вставка виджета на страницу</h4>
<p>Базовая HTML разметка виджета для вывода одного элемента выглядит следующим образом:</p>

<pre><code>
&lt;section class="instafeed" data-instafeed-get="user"&gt;
    &lt;div data-instafeed-item&gt;
        &lt;img src="images/_blank.png" alt="" data-images-low_resolution-url="src" /&gt;
    &lt;/div&gt;
&lt;/section&gt;
    </code></pre>

<p>Вы можете вывести неограниченое количество данных элементов или использовать данный виджет несколько раз на странице.
    Так же, данное расширение можно интегрировать с любым стороним скриптом (например: карусель, галлерея и т.д.).  HTML структура внутри виджета произвольная.
    Например, вы можете использовать ТМ Grid систему для удобного расположения элементов. Обязательно только наличие элемента с дата атрибутом <b>data-instafeed-item</b>.</p>

<h4>Вывод изображений Instagram со страницы пользователя</h4>

<p>Для того, чтобы вывести изображения со страницы пользователя,
    необходимо  добавить атрибут <b>data-instafeed-get="user"</b> и записать идентфикатор пользователя сервиса в атрибут <b>data-instafeed-user</b>. Например:</p>

<pre><code>
&lt;section class="instafeed" data-instafeed-get="user"&gt;
    ...
&lt;/section&gt;
    </code></pre>

<p>
  <strong>
    Узнать свой user id вы можете при помощи сервиса <a
        href="https://smashballoon.com/instagram-feed/find-instagram-user-id/">smashballoon</a> .
  </strong></p>
<h4>Вывод изображений Instagram по тегу.</h4>

<p>Для того, чтобы вывести изображения по тегу, необходимо  добавить атрибут <b>data-instafeed-get="tagged"</b> и записать название  тега в атрибут <b>data-instafeed-tagname</b>. Например:</p>

<pre><code>
&lt;section class="instafeed" data-instafeed-tagname="food" data-instafeed-get="tagged"&gt;
    ...
&lt;/section&gt;
    </code></pre>

<h4>Вывод информации Instagram о пользователе.</h4>

<p>Для того, чтобы вывести информацию о пользователе, необходимо  добавить атрибут <b>data-instafeed-get="profile"</b> и записать идентфикатор пользователя сервиса
    в атрибут <b>data-instafeed-user</b>. Например:</p>

<pre><code>
&lt;section class="instafeed" data-instafeed-get="profile"&gt;
    ...
&lt;/section&gt;
    </code></pre>

<h4>Настройка формата вывода даты</h4>

<p>Дла того, чтобы настроить формат вывода даты, необходимо добавить атрибут <b>data-instafeed-date-format</b>. Например:</p>

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
    где <b>target</b> - атрибут, в который будут записаны данные. Если в target указать значение "text", данные будут выведены внутрь тега обычным текстом.
    Ниже указаны примеры для получение различных данных. Если необходимо записать значение данных в несколько аттрибутов, определите их через запятую.</p>

<h4>Вывод картинки элемента</h4>

<p>Для получения ссылки на картинку сервиса необходимо указать аттрибут <b>data-images_(разрешение картинки)="src"</b>. Например:</p>

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

<h4>Вывод ссылки на элемент</h4>

<p>Для получения ссылки на картинку сервиса необходимо указать атрибут <b>data-link="href,text"</b>. Например, для вывода ссылки с текстом ссылки:</p>

<pre><code>
        &lt;a href="#" data-link="href,text"&gt;&lt;/a&gt;
    </code></pre>

<h4>Вывод тегов элемента</h4>

<p>Для получения тегов элемента необходимо указать атрибут <b>data-tags_full="text"</b>. Например:</p>
<pre><code>
        &lt;p data-tags_full="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод даты добавления</h4>
<p>Для получения даты добавления элемента необходимо указать атрибут <b>data-dating="text"</b>.
    Что получить дату в формате <b>YY-MM-DD</b> необходимо указать атрибут <b>data-created_time="text"</b>.Например:</p>

<pre><code>
        &lt;time data-created_time="text"&gt;&lt;/time&gt;
    </code></pre>

<h4>Вывод описания элемента</h4>
<p>Для получения описания элемента необходимо указать атрибут <b>data-caption-text="text"</b>. Например:</p>
<pre><code>
        &lt;p data-caption-text="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод количества лайков</h4>
<p>Для получения количества лайков по изображению необходимо указать атрибут <b>data-likes-count="text"</b>. Например:</p>
<pre><code>
        &lt;p data-likes-count="text"&gt;&lt;/p&gt;
    </code></pre>
<h4>Вывод количества комментариев</h4>
<p>Для получения количества комментариев по изображению необходимо указать атрибут <b>data-comments-count="text"</b>. Например:</p>

<pre><code>
        &lt;p data-comments-count="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод имени пользователя</h4>
<p>Для получения имени пользователя необходимо указать атрибут <b>data-username="text"</b>. Например:</p>

<pre><code>
        &lt;p data-username="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод полного имени пользователя</h4>
<p>Для получения имени пользователя необходимо указать атрибут <b>data-full_name="text"</b>. Например:</p>

<pre><code>
        &lt;p data-full_name="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод биографии пользователя</h4>
<p>Для получения имени пользователя необходимо указать атрибут <b>data-bio="text"</b>. Например:</p>
<pre><code>
        &lt;p data-bio="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод количества подписчиков</h4>
<p>Для получения имени пользователя необходимо указать атрибут <b>data-counts-follows="text"</b>. Например:</p>

<pre><code>
        &lt;p data-counts-follows="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод количества страниц на которые подписан пользователь</h4>
<p>Для получения имени пользователя необходимо указать атрибут <b>data-counts-followed_by="text"</b>. Например:</p>
<pre><code>
        &lt;p data-counts-followed_by="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод веб-страницы пользователя</h4>
<p>Для получения имени пользователя необходимо указать атрибут <b>data-counts-followed_by="text"</b>. Например:</p>
<pre><code>
        &lt;a href="#" data-website="href,text"&gt;&lt;/a&gt;
    </code></pre>