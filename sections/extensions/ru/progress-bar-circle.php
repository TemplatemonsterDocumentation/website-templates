<h3>Circle-progress - радиальныйе прогресс бары c градиентом</h3>
<p>
  HTML Website Templates используют расширение <b>jquery-circle-progress.js</b> для реализации радиальных прогресс баров с градиентом.
</p>

<p>Базовая HTML разметка для создания прогресс бара выглядит следующим образом:</p>

<pre>
  <code>
      &lt;!-- Circle-progress-bar --&gt;
      &lt;div class="progress-bar-circle" data-value="0.8" data-gradient="#5aba67, #78c157"
              data-empty-fill="rgb(245,245,245)" data-size="150"&gt;&lt;/div&gt;
</code>
</pre>

<p>, где</p>

<ul class="marked-list">
  <li>
    <dl class="inline-term">
      <dt>data-value</dt>
      <dd>значение прогресс бара (обязательный атрибут)</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-gradient</dt>
      <dd>цвет заполненной тропы прогресс бара (обязательный атрибут)</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-size</dt>
      <dd>размер прогресс бара в px</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-empty-fill</dt>
      <dd>цвет не заполненной тропы прогресс бара</dd>
    </dl>
  </li>
</ul>

<h4>Настройка значения прогресс бара</h4>

<p>Для того, чтобы указать процент заполнености прогресс бара, необходимо воспользовать дата атрибутом <b>data-value</b>.</p>
<pre>
  <code>
    &lt;div class="progress-bar-circle" data-value="0.8" data-gradient="#5aba67, #78c157"
      data-empty-fill="rgb(245,245,245)" data-size="150"&gt;&lt;/div&gt;
  </code>
</pre>

<h4>Настройка заполненной тропы прогресс бара</h4>
<p>Для того, чтобы указать цвет заполненной тропы прогресс бара необходимо воспользоваться дата атрибутом <b>data-gradient</b>.</p>
<pre>
  <code>
    &lt;div class="progress-bar-circle" data-value="0.8" data-gradient="#5aba67, #78c157"
      data-empty-fill="rgb(245,245,245)" data-size="150"&gt;&lt;/div&gt;
  </code>
</pre>

<h4>Настройка размера прогресс бара</h4>
<p>Для того, чтобы указать высоту прогресс бара необходимо воспользоваться дата атрибутом <b>data-size</b>.</p>
<pre>
  <code>
    &lt;div class="progress-bar-circle" data-value="0.8" data-gradient="#5aba67, #78c157"
      data-empty-fill="rgb(245,245,245)" data-size="150"&gt;&lt;/div&gt;
  </code>
</pre>

<h4>Настройка цвета не заполненой тропы прогресс бара</h4>
<p>
  Для того, чтобы задать цвет не заполненой тропы прогресс бара, необходимо воспользоваться дата атрибутом <b>data-empty-fill</b>, указав соответствующий цвет.
</p>
<pre>
  <code>
    &lt;div class="progress-bar-circle" data-value="0.8" data-gradient="#5aba67, #78c157"
      data-empty-fill="rgb(245,245,245)" data-size="150"&gt;&lt;/div&gt;
  </code>
</pre>
