<h3>RD Range</h3>
<h6>HTML Website Templates используют плагин <b>RD Range</b> для возможности выбора диапазона.</h6>

<p>Плагин поддерживает следующие настройки:</p>

<ul class="marked-list">
  <li>
    <dl class="inline-term">
      <dt>data-min</dt>
      <dd>Задает минимальное значение диапазона</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-max</dt>
      <dd>Задает максимальное значение диапазона</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-step</dt>
      <dd>Устанавливает размер шага.</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-start</dt>
      <dd>Задает начальную позицию. Пример: [10,20]</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-min-diff</dt>
      <dd>Задает минимально допустимое растояние между двумя указателями.</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-input</dt>
      <dd>В качестве значения передается CSS селектор HTML елемента в который нужно выводить первое значение (обязательный атрибут)</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-input-2</dt>
      <dd>В качестве значения передается CSS селектор HTML елемента в который нужно выводить второе значение</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-precision</dt>
      <dd>Задает для значений количество символов после запятой. Пример: (0,01)</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-tooltip</dt>
      <dd>Включает \ выключает тултипы с текущими значениями для каждого указателя.</dd>
    </dl>
  </li>
</ul>

<p>Базовая разметка для создания выбора диапазона выглядит следующим образом:</p>

<pre>
  <code>
        &lt;!-- RD Range--&gt;
        &lt;input type="text" name="value-1" class="rd-range-input-value-1"/&gt;
        &lt;input type="text" name="value-2" class="rd-range-input-value-2"/&gt;

        &lt;div class="rd-range" data-min="50" data-max="1000" data-start="[75, 244]" data-step="1"
          data-tooltip="true" data-min-diff="10"
          data-input=".rd-range-input-value-1" data-input-2=".rd-range-input-value-2"&gt;&lt;/div&gt;
    </code>
</pre>

<p>Так же можно создать простой слайдер выбора:</p>

<pre>
  <code>
         &lt;!-- RD Range single line--&gt;
         &lt;div class="rd-range-input-value-3"&gt; &lt;/div&gt;

         &lt;div class="rd-range" data-min="1" data-max="100" data-start="[15]" data-step="1"
                data-min-diff="10" data-input=".rd-range-input-value-3" &gt; &lt;/div&gt;
    </code>
</pre>