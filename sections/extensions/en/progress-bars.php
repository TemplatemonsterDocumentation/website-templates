<h3>Progress Bar. Horizontal and radial progress bars</h3>
<p>
  TML Website Templates use <b>ProgressBar.js</b> to implement horizontal and radial progress bars.
</p>

<p>The basic HTML marking for a progress bar looks the following way:</p>

<pre>
  <code>
      &lt;!-- Progress-bar --&gt;
      &lt;div class="progress-bar progress-bar-type progress-bar-style"
           data-value="70" data-stroke="30" data-trail="15"
           data-easing="linear" data-counter="true" data-duration="600"&gt;&lt;/div&gt;
</code>
</pre>

<p>, where:</p>

<ul class="marked-list">
  <li>
    <dl class="inline-term">
      <dt>progress-bar-type</dt>
      <dd>progress bar type (this class is required).</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>progress-bar-style</dt>
      <dd>progress bar styles.</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-value</dt>
      <dd>progress bar value (this attribute is required).
      </dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-stroke</dt>
      <dd>progress bar tail width (this attribute is required).
      </dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-trail</dt>
      <dd> progress bar trail width.</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-easing</dt>
      <dd>progress bar animation easing.
      </dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-counter</dt>
      <dd>progress bar counter.
      </dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>data-duration</dt>
      <dd>progress bar animation duration in milliseconds.</dd>
    </dl>
  </li>
</ul>

<h4>Progress bar value setup</h4>

<p>To specify the percentage of how much the progress bar is filled, use the data-attribute data-value.</p>
<pre>
  <code>
     &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
         data-value="70" data-stroke="30"&gt &lt;/div&gt
  </code>
</pre>

<h4> Progress bar tail width setup</h4>

<p>To specify progress bar tail width, use the data-attribute data-stroke.
</p>
<pre>
  <code>
     &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
         data-value="70" data-stroke="30"&gt &lt;/div&gt
  </code>
</pre>

<h4>Progress bar trail width setup</h4>

<p>To set up progress bar trail width, set the data-attribute data-trail.
</p>
<pre>
  <code>
     &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
         data-value="70" data-stroke="30" data-trail="15" &gt &lt;/div&gt
  </code>
</pre>

<h4>Progress bar animation easing setup</h4>

<p>To set up progress bar animation easing, use the data-attribute data-easing, using the corresponding animation easing function.</p>
<pre>
  <code>
     &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
         data-value="70" data-stroke="30" data-trail="15" data-easing="linear" &gt &lt;/div&gt
  </code>
</pre>

<p>The following animation easing functions are supported:</p>
<ol class="index-list">
  <li>linear</li>
  <li>easeIn</li>
  <li>easeOut</li>
  <li>easeInOut</li>
</ol>

<h4>Progress bar animation duration</h4>

<p>To set progress bar animation duration (800 milliseconds by default), use the data-attribute data-duration.
</p>
<pre>
  <code>
    &lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
    data-value="70" data-stroke="30" data-trail="15" data-easing="linear" data-duration="1000"&gt &lt;/div&gt
  </code>
</pre>
