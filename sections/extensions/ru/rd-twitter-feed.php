<h3>RD Twitterfeed</h3>
<p>HTML Website Templates используют расширение <b>jquery.rd-twitter-feed.js</b> для получения данных с сервиса <a
        href="https://twitter.com/">https://twitter.com/</a> на веб-странице.</p>

<h4>Вставка виджета на страницу</h4>
<p>Базовая HTML разметка виджета для вывода одного элемента выглядит следующим образом:</p>

<pre><code>
        &lt;div class="twitter" data-twitter-username="templatemonster"&gt;
            &lt;div data-twitter-type="tweet"&gt;
                &lt;img data-media_url="src" src="images/_blank.png" alt=""/&gt;
                &lt;p data-tweet=text&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>Вы можете вывести неограниченое количество данных элементов или использовать данный виджет несколько раз на странице.
    Так же, данное расширеное можно интегрировать с любым стороним скриптом (например: карусель, галлерея и т.д.).  HTML структура внутри виджета произвольная.
    Например, вы можете использовать ТМ Grid систему для удобного расположения элементов. Обязательно только наличие элемента с дата атрибутом <b>data-twitter-type="tweet"</b>.</p>

<h4>Настройка проекта для работы с Twitter API</h4>

<p>Для работы с <b>Twitter API</b> вам необходимо создать приложение со своего аккаунта Twitter, сгенерировать ключи и записать их в файл <b>bat/twitter_api/config.php</b>. Список необходимых ключей:</p>

<ul class="marked-list">
    <li>
        CONSUMER_KEY;
    </li>
    <li>
        CONSUMER_SECRET;
    </li>
    <li>
        ACCESS_TOKEN;
    </li>
    <li>
        ACCESS_SECRET.
    </li>
</ul>

<p>Файл config.php:</p>

<pre><code>
        // Consumer Key
        define('CONSUMER_KEY', 'Put CONSUMER_KEY here ');
        define('CONSUMER_SECRET', 'Put CONSUMER_SECRET here');

        // User Access Token
        define('ACCESS_TOKEN', 'Put ACCESS_TOKEN here');
        define('ACCESS_SECRET', 'Put ACCESS_SECRET here');
    </code></pre>

<h4>Локальное использование</h4>

<p>При запуске проекта с файловой системы плагин работать не будет, так как для работы плагина необходим PHP версии 5.2+.
    При использовании на локальном сервере, данные с сервиса Twitter не будут получены, так как сервис аутентификации твитера не может получить доступ к локальным данным.
    Вместо этого будут показаны тестовые данные, иентичные полученным из твитера. При загрузке проекта на рабочий сервер будут получены реальные данные.</p>

<h4>Настройка аккаунта Twitter</h4>

<p>Для того, чтобы указать пользователя, необходить записать имя пользователя сервиса в атрибут <b>data-twitter-username</b>. Например:</p>

<pre><code>
        &lt;div class="twitter" data-twitter-username="templatemonster"&gt;
    </code></pre>

<h4>Настройка вывода твитов по хештегу:</h4>

<p>Для того, чтобы отфильтровать твиты по хештегу, необходить записать его название в атрибут <b>data-twitter-hashtag</b>. Например:</p>
<pre><code>
        &lt;div class="twitter" data-twitter-hashtag="webdesign"&gt;
    </code></pre>

<p class="alert alert-warning">Внимание! Вывод твитов возможен только по хештегу или имени пользователя.</p>

<h4>Натройка вывода твитов из списка:</h4>

<p>Для того, чтобы отфильтровать твиты по списку, необходимо записать его название в атрибут <b>data-twitter-listname</b> и указать имя пользователя с помощью атрибута <b>data-twitter-username</b>. Например:</p>
<pre><code>
        &lt;div class="twitter" data-twitter-username="templatemonster" data-twitter-listname="templatemonster"&gt;
    </code></pre>
<p class="alert alert-warning">Внимание! Вывод твитов по списку возможен только  при наличии имени пользователя.</p>

<h4>Настройка формата вывода даты</h4>

<p>Если твит был добавлен недавно (до 2-х дней), найстройка формата вывода данных проводится следующим образом:</p>

<ol class="index-list">
    <li>
        <p>Если твит добавлен меньше минуты назад:
            Для того, чтобы настроить данный текст необходимо добавить атрибут <b>data-twitter-date-seconds</b>. Например:</p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-seconds="less 1m"&gt;
            </code></pre>
    </li>
    <li><p>Если твит добавлен меньше часа назад:
            Для того, чтобы настроить текст, выводимый возле количества минут (с момента добавления) необходимо добавить атрибут <b>data-twitter-date-minutes</b>. Например:
        </p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-minutes="m"&gt;
            </code></pre>
    </li>
    <li>
        <p>
            Если твит добавлен меньше суток назад.
            Для того, чтобы настроить текст, выводимый возле количества часов (с момента добавления) необходимо добавить атрибут <b>data-twitter-date-hours</b>. Например:
        </p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-hours="h"&gt;
            </code></pre>
    </li>
    <li>
        <p>
            Если твит добавлен вчера.
            Для того, чтобы настроить данный текст необходимо добавить атрибут <b>data-twitter-date-yesterday</b>. Например:
        </p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-yesterday="yd"&gt;
            </code></pre>
    </li>
    <li>
        <p>
            Если твитер добавлен более 2-х дней назад, чтобы настроить формат вывода данных необходимо добавить атрибут <b>data-date-format</b>. Например:
        </p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-format="%b/%d/%Y"&gt;
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
    </li>
</ol>

<h4>Создание корректной структуры элемента виджета</h4>

<p>Получить данные элемента возможно только внутри блока с атрибутом <b>data-type="tweet"</b>.  Например:</p>

<pre><code>
        &lt;div data-twitter-type="tweet"&gt;
            &lt;img data-media_url="src" alt="" src="#"/&gt;
            &lt;div data-tweet="text"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<h4>Логика работы виджета</h4>
<p>
    Для получение данных о твите необходимо прописать следующий атрибут:
    <b>data-(название данных)="target"</b> где <b>target</b> - атрибут, в который будут записаны данные. Если в target указать значение "text", данные будут выведены внутрь тега обычным текстом.
    Ниже указаны примеры для получение различных данных. Если необходимо записать значение данных в несколько аттрибутов, определите их через запятую.
</p>

<h4>Вывод картинки твита</h4>
<p>
    Для вывода картинки твита  необходимо указать аттрибут <b>data-media_url="src"</b>. Например:
</p>
<pre><code>
        &lt;img data-media_url="src" src="#" alt=""/&gt;
    </code></pre>

<p class="alert alert-info">Обратите внимание, если в твите отсутсвуте картинка, данный элемент будет удален с разметки. Если вы хотите вывести 2 или больше картинок продублируйте данный код необходимое количество раз.</p>

<h4>Вывод текста твита</h4>
<p>
    Для получения текста твита необходимо указать атрибут <b>data-tweet="text"</b>. Например:
</p>
<pre><code>
        &lt;p data-tweet="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Вывод даты добавления твита</h4>
<p>Для получения даты добавления необходимо указать атрибут <b>data-date="text"</b>. Например:</p>
<pre><code>
        &lt;div data-date="text"&gt;&lt;/div&gt;
    </code></pre>
<p>Для получения даты в формате атрибута datetime тега time необходимо указать атрибут <b>data-datetime="datetime"</b>. </p>

<h4>Вывод аватарки пользователя</h4>
<p>Для получения тегов аватара необходимо указать атрибут <b>data-avatar="src"</b>. Например:</p>
<pre><code>
        &lt;img data-avatar="src" src="#" alt=""/&gt;
    </code></pre>
<h4>Вывод ссылки на твит</h4>
<p>Для получения названия элемента необходимо указать атрибут <b>data-title="text"</b>. Например:</p>

<pre><code>
        &lt;a data-url="href,text"&gt;&lt;/a&gt;
    </code></pre>
<h4>Вывод логина пользователя</h4>
<p>Для получения логина пользователя в формате <b>"@templatemonster"</b> необходимо указать атрибут <b>data-screen_name="text"</b>. Например:</p>

<pre><code>
        &lt;div data-screen_name="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Вывод имени пользователя</h4>
<p>Для получения имени пользователя необходимо указать атрибут <b>data-user_name="text"</b>. Например:</p>
<pre><code>
        &lt;div data-user_name="text"&gt;&lt;/div&gt;
    </code></pre>