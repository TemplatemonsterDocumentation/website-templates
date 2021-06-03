<h3>CountTo</h3>

<p>HTML Website Template uses <b>jQuery CountTo</b> extension for implementing countdown timers on web-pages.</p>
<h4>Adding countdown timer to the page</h4>
<p>To add a countdown timer, paste the following HTML code string to the page:</p>
<pre><code>
    &lt;div class="counter" data-from="25" data-to="125"&gt;&lt;/div&gt;
  </code></pre>
<p>where <b>'data-from'</b> attribute stands for the starting point of the counter, and <b>'data-to'</b> attribute stands for the final point, required for displaying the countdown on the page. </p>

<h4>Adjusting the countdown time</h4>

<p>To change the counting speed, add <b>data-speed</b> attribute and specify the time period in milliseconds before the countdown end.</p>
<p>For example,</p>
<pre><code>
    &lt;div class="counter" data-from="25" data-to="125" data-speed="5000"&gt;&lt;/div&gt;
  </code></pre>
<h4>Countdown refresh interval</h4>
<p>To change the countdown timer refresh interval, add <b>data-refresh-interval</b> attribute and set the time span in milliseconds.</p>
<p>E.g.:
</p>

<pre><code>
    &lt;div class="counter" data-from="25" data-to="125" data-speed="5000" data-refresh-interval="300"&gt;&lt;/div&gt;
  </code></pre>
