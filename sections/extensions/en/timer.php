<h3>Countdown - Timer</h3>

<figure class="img-polaroid">
    <img src="img/timer.png" alt="">
</figure>

<h6>Intense Template use <b>Countdown.js</b> extension to implement timer functionality.</h6>

<h4>Adding timer to page</h4>

<p>To add countdown timer to target HTML page you should use the following code.</p>

<code>&lt;div class="countdown" data-type="until" data-time="24 Dec 2015 15:00"&gt;</code>

<h6>Data-type attribute can take the following values:</h6>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>until</dt>
            <dd>the timer counts the time up to date, specified in the data-time attribute.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>since</dt>
            <dd>timer counts the time since the date, specified in the data-time attribute</dd>
        </dl>
    </li>
</ol>

<p>For example,</p>
<code>&lt;div class="countdown" data-type="until" data-time="24 Dec 2016 15:00"&gt;</code>

<p>Countdown will take place till <b>3.00 PM, December 24, 2016</b>.</p>

<code>&lt;div class="countdown" data-type="since" data-time="24 Dec 2014 15:00"&gt;</code>

<p>In this case countdown will start on <b>3.00 PM, December 24, 2014</b>.</p>

<p>Date should be specified in <b>data-time</b> attribute in the following format.</p>

<code>DD month YYYY HH:MM</code>

<p>where month can take the following values:</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Jan</dt>
            <dd>January,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Feb</dt>
            <dd>February,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Mar</dt>
            <dd>March,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Apr</dt>
            <dd>April,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>May</dt>
            <dd>May,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Jun</dt>
            <dd>June,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Jul</dt>
            <dd>July,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Aug</dt>
            <dd>August,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sep</dt>
            <dd>September,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Oct</dt>
            <dd>October,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Nov</dt>
            <dd>November,</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Dec</dt>
            <dd>December.</dd>
        </dl>
    </li>
</ol>

<p>For example,</p>
<code>&lt;div class="countdown" data-type="until" data-time="24 Aug 2016 12:00"&gt;</code>

<p>This example shows countdown till <b>12:AM, August 24, 2016</b>.</p>

<h4>Timer display format configuration</h4>

<p>In order to set timer display format  you should use <b>data-format</b> attribute.</p>
<p>Use the following symbols (in the indicated order) to specify time periods to display: <b>'Y'</b> during years, <b>"O"</b> during few month,
    <b>"W"</b> during couple of weeks, <b>"D"</b> during few days, <b>"H"</b> during several hours, <b>"М"</b> during few minutes,
    <b>"S"</b> for few seconds.</p>

<p>For example,</p>
<code>&lt;div class="countdown" data-type="until" data-time="24 Aug 2016 12:00" data-format="wdh"&gt;</code>

<p>In this case timer will take the following format:</p>
<p><b>During few weeks</b>, <b>couple of days</b>, <b>several hours</b>.</p>