<h3>RD Mailform</h3>

<p class="alert alert-info">Обратите внимание: В RD Mailform <b>&lt;input type="email" name="email"&gt; </b> является
    обязательным для работы формы. В случае отсутствия данного поля - будет выведена соответствующая ошибка при попытке
    отправки формы.
</p>
<p>Базовая разметка для создания стандартной формы поиска выглядит следующим образом:</p>

<pre><code>
&lt;!-- RD Mailform--&gt;
&lt;form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform"&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label for="contact-name" class="form-label"&gt;Name&lt;/label&gt;
    &lt;input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-input"&gt;
  &lt;/div&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label for="contact-phone" class="form-label"&gt;Phone&lt;/label&gt;
    &lt;input id="contact-phone" type="text" name="phone" data-constraints="@Required" class="form-input"&gt;
  &lt;/div&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label for="contact-email" class="form-label"&gt;E-Mail&lt;/label&gt;
    &lt;input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-input"&gt;
  &lt;/div&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label for="contact-message" class="form-label"&gt;Message&lt;/label&gt;
    &lt;textarea id="contact-message" name="message" data-constraints="@Required" class="form-input"&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;button type="submit" class="button button-primary"&gt;Send&lt;/button&gt;
&lt;/form&gt;

&lt;!-- Елемент в который будет выводиться информация об ошибке--&gt;
&lt;div class="form-output-global"&gt;
</code></pre>

<h3>Настройка типа почтовой формы</h3>
<p>RD Mailform поддерживает три типа почтовой формы:</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Контактная форма </dt>
            <dd>contact;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Форма заказа </dt>
            <dd>order;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Форма подписки </dt>
            <dd>subscribe;</dd>
        </dl>
    </li>
</ol>

<p>Для того, чтобы изменить тип контактной формы необходимо в HTML разметке целевой формы добавить атрибут <b>data-form-type</b>, где в качестве значения указывается тип формы.</p>

<pre><code>
        &lt;form class='rd-mailform' data-form-type="contact" method="post" action="bat/rd-mailform.php"&gt;
            ...
        &lt;/form&gt;
    </code></pre>

<h3>Настройка полей формы</h3>

<p>Почтовая форма RD Mailform поддерживает следующие типы полей:</p>

<ol class="index-list">
    <li><p>Текстовое поле</p>
        <pre><code>
                ...
                &lt;div class="form-wrap"&gt;
                    &lt;label for="contact-us-name" class="form-label"&gt;Name:&lt;/label&gt;
                    &lt;input id="contact-us-name" type="text" name="name"
                            data-constraints="@Required" class="form-input"&gt;
                &lt;/div&gt;
                ...
            </code></pre>
    </li>
    <li>
        <p>Меню выбора даты и времени.
            Данное меню поддерживает 3 вида отображения:</p>
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Выбор времени</dt>
                    <dd>time;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Выбор даты</dt>
                    <dd>date;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Выбор даты и времени</dt>
                    <dd>datetime.</dd>
                </dl>
            </li>
        </ul>
            <p>Для того чтобы указать один из видов отображения воспользуйтесь атрибутом <b>date-time-picker</b> с необходимым вам значением.
            </p>

                <pre><code>
                        ...
                        &lt;div class="form-wrap"&gt;
                         &lt;label for="rd-mailform-time" class="form-label"&gt;Time:&lt;/label&gt;
                             &lt;input id="rd-mailform-time" type="text" name="time"
                        date-time-picker="time" class="form-input"&gt;
                        &lt;/div&gt;
                        ...
                    </code></pre>
    </li>
    <li><p>Простое меню выбора</p>
        <pre><code>
                ...
                &lt;div class="form-wrap"&gt;
                    &lt;label for="select" class="form-label"&gt;Gender:&lt;/label&gt;
                    &lt;select id="select" data-placeholder="Select an option"
                            data-minimum-results-for-search="Infinity" class="form-input"&gt;
                        &lt;option&gt;Male&lt;/option&gt;
                        &lt;option&gt;Female&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
                ...
            </code></pre>
    </li>
    <li>
        <p>Меню выбора c подкатегориями</p>
            <pre><code>
                ...
                &lt;div class="form-wrap"&gt;
                    &lt;select data-placeholder="Select an option"
                            data-minimum-results-for-search="Infinity" class="form-input select-filter"&gt;
                        &lt;optgroup label="Category 1"&gt;
                            &lt;option&gt;Demo Item 1-1&lt;/option&gt;
                            &lt;option&gt;Demo Item 1-2&lt;/option&gt;
                            &lt;option&gt;Demo Item 1-2&lt;/option&gt;
                        &lt;/optgroup&gt;
                        &lt;optgroup label="Category 2"&gt;
                            &lt;option&gt;Demo Item 2-1&lt;/option&gt;
                            &lt;option&gt;Demo Item 2-2&lt;/option&gt;
                            &lt;option&gt;Demo Item 2-3&lt;/option&gt;
                        &lt;/optgroup&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
                ...
            </code></pre>
    </li>
    <li>
        <p>Текстовая область</p>

        <pre><code>
        ...
        &lt;div class="form-wrap"&gt;
            &lt;label for="message" class="form-label"&gt;Message:&lt;/label&gt;
            &lt;textarea id="message" name="message" data-constraints="@Required"
                                                    class="form-input"&gt;&lt;/textarea&gt;
        &lt;/div&gt;
        ...
        </code></pre>
    </li>
</ol>

<h4>Настройка валидации полей формы</h4>
<p>Для динамической валидации полей формы используется библиотека <b>Regula</b>. Ссылка на документацию по даной библиотеке вы можете найти в разделе <b>Credits</b>.
</p>
<h4>Настройка информационных сообщений формы</h4>
<p>Почтовая форма <b>RD Mailform</b> поддерживает кастомизацию информационных сообщений о успешной/неуспешной отправке формы.</p>

<p>Для того, чтобы изменить некоторые информационные сообщения по-умолчанию, необходимо в файле инициализации скриптов <b>script.js</b> в модуле <b>RD Mailform</b> внести соответствующие правки в поле msg целевого типа валидации.</p>
<pre><code>
        msg = {
          'MF000': 'Successfully sent!',
          'MF001': 'Recipients are not set!',
          'MF002': 'Form will not work locally!',
          'MF003': 'Please, define email field in your form!',
          'MF004': 'Please, define type of your form!',
          'MF254': 'Something went wrong with PHPMailer!',
          'MF255': 'Aw, snap! Something went wrong.'
        };
    </code></pre>

<h4>Настройка SMTP сервера</h4>

<p>Настройка SMTP сервера никоим образом не относится к настройке почтовой формы RD Mailform.</p>
<p>Для отправки почты с помощью SMTP сервера вам необходимо обратиться к оффициальной документации <b>PhpMailer</b> (библиотеки, которая используется для отправки почты) или воспользоваться туториалом из оффиальной документации.</p>
<a href="http://phpmailer.worxware.com/?pg=examplebsmtp">http://phpmailer.worxware.com</a>

<p class="alert alert-info">Обратите внимание: расширение почтовой формы не работает на локальном сервере. Для отправки почты, необходимо загрузить ваш сайт на соответствующий хостинг сервер.</p>


<h4>Настройка защиты от спама и злоупотреблений.</h4>

<p><b>RD Mailform</b> использует расширение <b>Google reCAPTCHA</b> для защити от спама. </p>
<p class="alert alert-info"> Обратите внимание: для того что бы убрать Google reCAPTCHA, достаточно удалить область html разметки, выделенную комментариями "&lt;!--Google captcha--&gt;" - "&lt;!-- End google captcha--&gt;".</p>
<h6>Начало работы с Google ReCaptcha.</h6>

<p>Для работы с Google ReCaptcha Вам необходимо:</p>


<ol class="index-list">
  <li>
    <p>Зарегистрировать Ваш домен на <a href="https://www.google.com/recaptcha/admin#list">сайте Google reCaptcha</a> и получить пару API ключей (пара ключей состоит из <b>site key</b> и <b>secret</b>). </p>
  </li>
  <li>
    <p>Указать ваши API ключи в файле <b>bat/reCaptcha.php</b> в соответствующих переменных <b>$siteKey</b> и <b>$secret</b> в начале файла:</p>
    <pre><code>
        $siteKey = 'You site key here';
        $secret = 'You secret key here';
      </code></pre>
  </li>
  <li>
    <p> Вставить разметку в html, указав в дата-атрибуте <b>data-sitekey=""</b> в ваш <b>site key</b>. </p>
  </li>
</ol>
<p> Более детальную информацию Вы можете получить на официальном сайте <a href="https://developers.google.com/recaptcha/docs/start">Google ReCaptcha.</a> </p>

<h4>Разметка Google ReCaptch</h4>
<p>Базовая разметка для ReCaptcha выглядит следующим образом:</p>
<pre><code>
&lt;!--Google captcha--&gt;
  &lt;div class="form-wrap"&gt;
    &lt;div id="captcha1" data-sitekey="You site key here" class="recaptcha"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;!-- End google captcha--&gt;
  </code></pre>

<p class="alert alert-info">Обратите внимание: наличие атрибута <b>id</b> и класса <b>.recaptcha</b> является обязательным.</p>

<h4>Настройка Google ReCaptcha</h4>
<p>Google Recaptcha поддерживает следующие настройки:</p>
<ul class="marked-list">
  <li>Изменение размера;</li>
  <li>Изменение цветовой схемы.</li>
</ul>

<h4>Изменение размера Google ReCaptcha</h4>
<p>Для измения размера виджета, необходимо указать в дата-атрибуте <b>data-size</b> один из возможных вариантов размера:</p>

<ul class="marked-list">
  <li>compact;</li>
  <li>normal (значение по умолчанию).</li>
</ul>
<p> Пример кода выглядит следующим образом:</p>

<pre><code>
&lt;!--Google captcha--&gt;
  &lt;div class="form-wrap"&gt;
  &lt;div id="captcha1" data-sitekey="You site key here" data-size="compact" class="recaptcha"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;!-- End google captcha--&gt;
  </code></pre>

<h4>    Изменение цветовой схемы виджета Google ReCaptcha</h4>
<p> Для изменения цветовой схемы виджета, необходимо указать в дата-атрибуте <b>data-theme</b> один из возможных вариантов:</p>

<ul class="marked-list">
  <li>dark;</li>
  <li>light (значение по умолчанию).</li>
</ul>

<p> Пример кода выглядит следующим образом:</p>
<pre><code>
&lt;!--Google captcha--&gt;
  &lt;div class="form-wrap"&gt;
  &lt;div id="captcha1" data-sitekey="You site key here" data-theme="dark" class="recaptcha"&gt;&lt;/div&gt; &lt;/div&gt;
&lt;!-- End google captcha--&gt;
  </code></pre>
