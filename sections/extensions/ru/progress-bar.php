<h3>Progress Bar. Горизонтальные полосы прогресса</h3>
<h6>Intense используют расширение <b>Bootstrap Progress Bars</b> для реализации горизонтальных полос прогресса.</h6>
<p>Базовая HTML разметка для создания полосы прогресса выглядит следующим образом:</p>
<pre><code>
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar"
           role="progressbar"
           aria-valuenow="60"
           aria-valuemin="0"
           aria-valuemax="100"&gt;
        &lt;span class="sr-only"&gt;60% Complete&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  </code></pre>
<p> гед:</p>
<ul class="marked-list">
  <li>
    <dl class="inline-term">
      <dt>aria-valuenow</dt>
      <dd> текущее значение полосы прогресса;</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>aria-valuemin</dt>
      <dd> минимальное значение полосы прогресса;</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>aria-valuemax</dt>
      <dd> максимальное значение полосы прогресса.</dd>
    </dl>
  </li>
</ul>

<p>Вы также можете использовать любые дополнительные настройки <b>Bootstrap</b>, связанные с <b>progress bars</b>, которые представлены на официальной странице
  <b><a href="http://getbootstrap.com/components/#progress">Bootstrap</a> </b>.</p>


