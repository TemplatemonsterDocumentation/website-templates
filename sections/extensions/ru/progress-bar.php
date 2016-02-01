<h3>Progress Bar - horizontal and circular progress bars</h3>

<p>HTML Website Templates use <b>ProgressBar.js</b> extension to implement horizontal and circular progress bars functionality.</p>

<p>Basic HTML code structure for progress bar creating appears as follows:</p>

<pre><code>&lt;div class="progress-bar progress-bar-type progress-bar-style"
    data-value="70" data-stroke="30" data-trail="15"
    data-easing="linear" data-counter="true" data-duration="600"&gt;&lt;/div&gt;
</code></pre>

<p>, where</p>

<ul>
    <li>
        <dl class="inline-term">
            <dt>progress-bar-type</dt>
            <dd>progress bar class (mandatory class)</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>progress-bar-style</dt>
            <dd>progress bar style,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-value</dt>
            <dd>progress bar value (mandatory attribute),</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-stroke</dt>
            <dd>progress bar data stroke (mandatory attribute),</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-trail</dt>
            <dd>progress bar data trail,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-easing</dt>
            <dd>progress bar animation easing function,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-counter</dt>
            <dd>progress bar counter display checkbox,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-duration</dt>
            <dd>progress bar animation duration in milliseconds.</dd>
        </dl>
    </li>
</ul>

<h4>Progress bar value configuration</h4>

<p>In order to define progress bar fill level you should use <b>data-value</b> data attribute.</p>

<pre><code>&lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
    data-value="70" data-stroke="30"&gt;&lt;/div&gt;
</code></pre>

<h4>Progress bar data stroke configuration</h4>

<p>In order to define progress bar data stroke you should use <b>data-stroke</b> data attribute.</p>

<pre><code>&lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
    data-value="70" data-stroke="30"&gt;&lt;/div&gt;
</code></pre>

<h4>Progress bar data trail configuration</h4>

<p>In order to define progress bar data trail you should use <b>data-trail</b> data attribute.</p>

<pre><code>&lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
    data-value="70" data-stroke="30" data-trail="15"&gt;&lt;/div&gt;
</code></pre>

<h4>Progress bar animation easing setup</h4>

<p>In order to define progress bar fill animation you should use <b>data-easing</b> attribute, specifying corresponding animation easing function.</p>

<pre><code>&lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
    data-value="70" data-stroke="30" data-easing="linear"&gt;&lt;/div&gt;
</code></pre>

<p>The following animation easing functions are available:</p>

<ol class="index-list">
    <li><b>linear</b></li>
    <li><b>easeIn</b></li>
    <li><b>easeOut</b></li>
    <li><b>easeInOut</b></li>
</ol>

<h4>Progress bar animation duration setup</h4>

<p>In order to change animation duration (by default it is set to 800 milliseconds), you should use
    <b>data-duration</b> data attribute.</p>

<pre><code>&lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
    data-value="70" data-stroke="30" data-easing="linear"
    data-duration="1000"&gt;&lt;/div&gt;
</code></pre>

<h4>Progress bar counter display setup</h4>

<p>In order to display progress bar counter you should use <b>data-counter=”true”</b> data attribute at the target progress bar HTML code structure.</p>

<pre><code>&lt;div class="progress-bar progress-bar-horizontal progress-bar-default"
    data-value="70" data-stroke="30" data-counter="true"&gt;&lt;/div&gt;
</code></pre>