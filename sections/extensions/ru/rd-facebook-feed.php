<h3>RD Facebook Feed</h3>
<p>HTML Website Templates используют расширение <b>jquery.rd-facebook-feed.js</b> для получения данных с сервиса <a
        href="https://facebook.com/">https://facebook.com/</a> на веб-странице.</p>
<h4>Вставка виджета на страницу</h4>
<p>Базовая HTML разметка виджета для вывода одного элемента выглядит следующим образом:</p>
<pre><code>
        &lt;div class="facebook" data-fb-id="TemplateMonster" data-fb-access="..."&gt;
            &lt;div data-fb-post&gt;
                &lt;img src="images/_blank.png" alt="" data-picture="src" data-remove/&gt;
                &lt;p data-message="text"&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>Вы можете вывести неограниченое количество данных элементов или использовать данный виджет несколько раз на странице.
    Так же, данное расширеное можно интегрировать с любым стороним скриптом (например: карусель, галлерея и т.д.).  HTML структура внутри виджета произвольная.
    Например, вы можете использовать ТМ Grid систему для удобного расположения элементов. Обязательно только наличие элемента с дата атрибутом <b>data-fb-post</b> или <b>data-fb-user</b>.</p>
<h4>Настройка проекта для работы с Facebook API</h4>
<p>Для работы с Facebook API вам необходимо создать приложение со своего аккаунта Facebook, сгенерировать AccessToken и записать его в атрибут <b>data-fb-access</b>.</p>

<pre><code>
        &lt;div class="facebook" data-fb-access="..."&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Настройка аккаунта Facebook</h4>

<p>Для того, чтобы указать пользователя с которого будут выведены данные, необходимо записать имя пользователя сервиса в атрибут <b>data-fb-id</b> и тип страницы в <b>data-fb-page-type</b>. Например:</p>
<pre><code>
        &lt;div class="facebook" data-fb-page-type="page" data-fb-id="TemplateMonster"&gt;
    </code></pre>

<p>
  <b>data-fb-page-type</b> может принимать 2 значения page, group
  <ul>
  <li>page - если это публичная страница</li>
  <li>group - если это группа</li>
</ul>
</p>

<h4>Настройка формата вывода даты</h4>

<p>Если твитер добавлен более 2-х дней назад, чтобы настроить формат вывода данных необходимо добавить атрибут <b>data-fb-date-format</b>. Например:</p>

<pre><code>
        &lt;div class="facebook" data-fb-date-format="%b/%d/%Y"&gt;
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

<p>Получить данные элемента возможно только внутри блока с атрибутом <b>data-fb-post</b> или <b>data-fb-user</b>.  Например:</p>

<pre><code>
        &lt;div data-fb-post&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Логика работы виджета</h4>

<p>Для получение данных о посте необходимо прописать следующий атрибут:
    <b>data-(название данных)="target"</b>
    где <b>target</b> - атрибут, в который будут записаны данные. Если в target указать значение "text", данные будут выведены внутрь тега обычным текстом.
    Ниже указаны примеры для получение различных данных. Если необходимо записать значение данных в несколько аттрибутов, определите их через запятую.</p>

<h4>Вывод картинки в посте</h4>

<p> Для вывода картинки поста необходимо указать аттрибут <b>data-picture="src"</b>. Например:</p>

<pre><code>
        &lt;img data-picture="src" src="_blank.png" alt=""/&gt;
    </code></pre>

<h4>Вывод текста поста</h4>

<p>Для получения текста поста необходимо указать атрибут <b>data-message="text"</b>. Например:</p>

<pre><code>
        &lt;p data-message="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод названия вложения</h4>

<p>Для получения названия вложения необходимо указать атрибут <b>data-name="text"</b>. Например:</p>

<pre><code>
        &lt;div data-name="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Вывод описания вложения</h4>

<p>Для получения тегов аватара необходимо указать атрибут <b>data-description="text"</b>. Например:</p>

<pre><code>
        &lt;div data-description="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Вывод количества лайков </h4>

<p>Для получения количества лайков необходимо указать атрибут <b>data-likes-count="text"</b>. Например:</p>

<pre><code>
        &lt;div data-likes-count="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Вывод ссылки на пост</h4>

<p>Для получения ссылки на пост необходимо указать атрибут <b>data-postlink="href"</b>. Например:</p>


<pre><code>
        &lt;a href="#" data-postlink="href"&gt;&lt;/div&gt;
    </code></pre>

<h4>Вывод аватарки пользователя</h4>

<p>Для получения аватарки пользователя необходимо указать атрибут <b>data-from-picture="src"</b>. Например:</p>

<pre><code>
        &lt;img data-from-picture="src" src="_blank.png" alt=""/&gt;
    </code></pre>

<h4>Вывод имени пользователя</h4>

<p>Для получения имени пользователя необходимо указать атрибут <b>data-from-picture="src"</b>. Например:</p>

<pre><code>
        &lt;div data-from-name="text"&gt;&lt;/div&gt;
    </code></pre>