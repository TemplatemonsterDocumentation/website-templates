<h3>CountTo - Counter</h3>

<figure class="img-polaroid">
    <img src="img/counter.png" alt="">
</figure>

<h6>HTML Website Templates use <b>countTo.js</b> extension to add counters to webpage.</h6>

<h4>Creating new counter</h4>

<p>In order to create new counter the following HTML code should be added to page content:</p>

<code>&lt;div class="counter" data-from="25" data-to="125"&gt;&lt;/div&gt;</code>

<p>where, data-from attribute is responsible for counter origin, and <b>data-to</b> attribute - for the final result that will be displayed on page.</p>

<h4>Counter working time correction</h4>

<p>In order to change speed of counting you should add <b>data-speed</b> attribute and set time interval to the end of counting, in milliseconds.</p>
<p>For example,</p>
<code>&lt;div class="counter" data-from="25" data-to="125" data-speed="5000"&gt;&lt;/div&gt;</code>

<h4>Counter update interval</h4>

<p>in order to change time interval between counter updates you should add <b>data-refresh-interval</b> attribute and set needed time interval in milliseconds.</p>

<p>For example,</p>
<code>&lt;div class="counter" data-from="25" data-to="125" data-speed="5000" data-refresh-interval="300"&gt;&lt;/div&gt;</code>