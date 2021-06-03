<h3>Progress Bar - горизонтальные и радиальные прогресс бары</h3>
<p>
  HTML Website Templates используют расширение <b>ProgressBar.js</b> для реализации горизонтальных и радиальных прогресс баров.
</p>

<p>Базовая HTML разметка для создания прогресс бара выглядит следующим образом:</p>

<pre>
  <code>
      &lt;!-- Progress-bar --&gt;
      &lt;div class="progress-bar progress-bar-type progress-bar-style"
           data-value="70" data-stroke="30" data-trail="15"
           data-easing="linear" data-counter="true" data-duration="600"&gt;&lt;/div&gt;
</code>
</pre>

<p>, где</p>

<ul class="marked-list">
  <li>
    <dl class="inline-term">
      <dt>progress-bar-type</dt>
      <dd>тип прогресс бара (обязательный класс)</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>progress-bar-style</dt>
      <dd>тиль прогресс бара</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-value</dt>
      <dd>значение прогресс бара (обязательный атрибут)</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-stroke</dt>
      <dd>толщина хвоста прогресс бара (обязательный атрибут)</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-trail</dt>
      <dd>толщина тропы прогресс бара</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-easing</dt>
      <dd>функция затухания анимации прогресс бара</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-counter</dt>
      <dd>флаг отображения счетчика прогресс бара</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-duration</dt>
      <dd>время анимации прогресс бара в милисекундах</dd>
    </dl>
  </li>
</ul>

<h4>Настройка значения прогресс бара</h4>

<p>Для того, чтобы указать процент заполнености прогресс бара, необходимо воспользовать дата атрибутом data-value.</p>
<pre>
  <code>
     &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
         data-value="70" data-stroke="30"&gt &lt;/div&gt
  </code>
</pre>

<h4>Настройка толщины хвоста прогресс бара</h4>

<p>Для того, чтобы указать толщину хвоста прогресс бара необходимо воспользоваться дата атрибутом data-stroke.</p>
<pre>
  <code>
     &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
         data-value="70" data-stroke="30"&gt &lt;/div&gt
  </code>
</pre>

<h4>Настройка толщины пути прогресс бара</h4>

<p>Для того, чтобы указать толщину пути прогресс бара необходимо воспользоваться дата атрибутом data-trail.</p>
<pre>
  <code>
     &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
         data-value="70" data-stroke="30" data-trail="15" &gt &lt;/div&gt
  </code>
</pre>

<h4>Настройка анимации заполнения прогресс бара</h4>

<p>Для того, чтобы включить анимацию заполнения прогресс бара, необходимо воспользоваться дата атрибутом data-easing, указав соответствующую функцию затухания анимации.</p>
<pre>
  <code>
     &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
         data-value="70" data-stroke="30" data-trail="15" data-easing="linear" &gt &lt;/div&gt
  </code>
</pre>

<p>Поддерживаются следующие функции затухания:</p>
<ol class="index-list">
  <li>linear</li>
  <li>easeIn</li>
  <li>easeOut</li>
  <li>easeInOut</li>
</ol>

<h4>Настройка времени анимации прогресс бара</h4>

<p>Для того, чтобы изменить время анимации заполнения прогресс бара (по-умолчанию 800 милисекунд), необходимо воспользоваться дата атрибутом data-duration.</p>
<pre>
  <code>
    &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
    data-value="70" data-stroke="30" data-trail="15" data-easing="linear" data-duration="1000"&gt &lt;/div&gt
  </code>
</pre>
