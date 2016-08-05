<h3>RD Range. Range selection</h3>


<h6>HTML Website Templates use <b>RD Range</b> plugin to enable range selection.</h6>

<p>The plugin supports the following settings:</p>

<ul class="marked-list">
  <li>
    <dl class="inline-term">
      <dt>data-min</dt>
      <dd>sets min range value.</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-max</dt>
      <dd>sets max range value.</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-step</dt>
      <dd>sets step value.</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-start</dt>
      <dd>sets start position. For example: [10,20].</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-min-diff</dt>
      <dd>sets min acceptable difference between 2 values.</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-input</dt>
      <dd>you should specify CSS selector of the HTML element, in which the value should be displayed (required).</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-input-2</dt>
      <dd>you should specify CSS selector of the HTML element, in which the second value should be displayed.
      </dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-precision</dt>
      <dd>data-precision - sets the number of characters after the decimal point for values. For example: (0,01).</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-tooltip</dt>
      <dd>data-tooltip - enables\disables tooltips with current values for each indicator.</dd>
    </dl>
  </li>
</ul>

<p>The basic range selection marking looks the following way:</p>

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

<p>You can create a simple range selection slider:</p>

<pre>
  <code>
         &lt;!-- RD Range single line--&gt;
         &lt;div class="rd-range-input-value-3"&gt; &lt;/div&gt;

         &lt;div class="rd-range" data-min="1" data-max="100" data-start="[15]" data-step="1"
                data-min-diff="10" data-input=".rd-range-input-value-3" &gt; &lt;/div&gt;
    </code>
</pre>