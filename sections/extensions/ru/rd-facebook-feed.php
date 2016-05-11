<h3>RD Facebook Feed</h3>
<p>Intense использует расширение <b>jquery.rd-facebook-feed.js</b> для получения данных с сервиса <a
        href="https://facebook.com/">https://facebook.com/</a> на веб-странице.</p>
<h4>Добавление виджета на страницу</h4>
<p>Базовая HTML разметка виджета для вывода одного элемента выглядит следующим образом:</p>
<pre><code>
        &lt;div class="facebook" data-fb-id="TemplateMonster" data-fb-access="..."&gt;
            &lt;div data-fb-post&gt;
                &lt;img src="images/_blank.png" alt="" data-picture="src" data-remove/&gt;
                &lt;p data-message="text"&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>Вы можете отобразить неограниченное количество элементов или использовать данный виджет несколько раз на странице.
  Так же, данное расширенное можно интегрировать с любым сторонним скриптом (например: карусель, галерея и т.д.).
  HTML структура внутри виджета произвольная. Например, Вы можете использовать систему
  ТМ Grid для удобного расположения элементов. Обязательным является только наличие элемента с атрибутом <b>data-fb-post</b> или <b>data-fb-user</b>.</p>
<h4>Настройка проекта для работы с Facebook API</h4>
<p>Для работы с Facebook API Вам необходимо создать приложение со своего профиля пользователя Facebook, получить AccessToken и указать его в атрибуте <b>data-fb-access</b>:</p>

<pre><code>
        &lt;div class="facebook" data-fb-access="..."&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Настройка профиля пользователя Facebook</h4>

<p>Для того чтобы указать пользователя, данные которого будут отображены, необходимо указать имя пользователя сервиса в атрибуте <b>data-fb-id</b>. Например:</p>
<pre><code>
        &lt;div class="facebook" data-fb-id="TemplateMonster"&gt;
    </code></pre>

<h4>Настройка формата вывода даты</h4>

<p>Если запись добавлена более 2-х дней назад, чтобы настроить формат вывода данных, необходимо добавить атрибут  <b>data-fb-date-format</b>. Например:</p>

<pre><code>
        &lt;div class="facebook" data-fb-date-format="%b/%d/%Y"&gt;
    </code></pre>

<p>где:</p>

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

<p>Получить данные элемента возможно только внутри блока с атрибутом <b>data-fb-post</b> или <b>data-fb-user</b>.  Например:</p>

<pre><code>
        &lt;div data-fb-post&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Логика работы виджета</h4>

<p>Для получение данных о посте необходимо прописать следующий атрибут:
    <b>data-(название данных)="target"</b>
    где <b>target</b> - атрибут, в который будут записаны данные. Если в target указать значение "text", данные будут выведены внутри тега обычным текстом.
    Ниже указаны примеры для получение различных данных. Если необходимо записать значение данных в несколько атрибутов, задайте их через запятую.</p>

<h4>Отображение картинки в посте</h4>

<p> Для отображения картинки поста необходимо указать атрибут <b>data-picture="src"</b>. Например:</p>

<pre><code>
        &lt;img data-picture="src" src="_blank.png" alt=""/&gt;
    </code></pre>

<h4>Отображение текста поста</h4>

<p>Для получения текста поста необходимо указать атрибут <b>data-message="text"</b>. Например:</p>

<pre><code>
        &lt;p data-message="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Отображение названия вложения</h4>

<p>Для отображения названия вложения необходимо указать атрибут <b>data-name="text"</b>. Например:</p>

<pre><code>
        &lt;div data-name="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Отображение описания вложения</h4>

<p>Для получения тегов описания необходимо указать атрибут <b>data-description="text"</b>. Например:</p>

<pre><code>
        &lt;div data-description="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Отображение количества лайков  </h4>

<p>Для отображения количества лайков необходимо указать атрибут  <b>data-likes-count="text"</b>. Например:</p>

<pre><code>
        &lt;div data-likes-count="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Отображение ссылки на пост</h4>

<p>Для отображения ссылки на пост необходимо указать атрибут  <b>data-postlink="href"</b>. Например:</p>


<pre><code>
        &lt;a href="#" data-postlink="href"&gt;&lt;/div&gt;
    </code></pre>

<h4>Отображение аватарки пользователя</h4>

<p>Для отображения аватарки пользователя необходимо указать атрибут <b>data-from-picture="src"</b>. Например:</p>

<pre><code>
        &lt;img data-from-picture="src" src="_blank.png" alt=""/&gt;
    </code></pre>

<h4>Отображение имени пользователя</h4>

<p>Для отображения имени пользователя необходимо указать атрибут <b>data-from-picture="src"</b>. Например:</p>

<pre><code>
        &lt;div data-from-name="text"&gt;&lt;/div&gt;
    </code></pre>