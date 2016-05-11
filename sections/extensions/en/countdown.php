<h3>Countdown</h3>
<p>Intense uses <b>jQuery Countdown</b> for implementing the countdown timer.
</p>

<h4>Adding timer to the page</h4>
<p>To add a countdown timer to the target HTML page, please use the following marking:</p>

<pre><code>
        &lt;div class="countdown" data-type="until" data-time="24 Dec 2015 15:00"&gt;
    </code></pre>

<p><b>data-type</b> attribute may have the following values:
</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>until</dt>
            <dd>the timer counts the time until the date specified in the  <b>data-time</b> attribute;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>since </dt>
            <dd>the timer counts the time starting from the date specified in the <b> data-time</b> attribute.</dd>
        </dl>
    </li>
</ol>




<p>E.g.:  </p>
<pre><code>
        &lt;div class="countdown" data-type="until" data-time="24 Dec 2016 15:00"&gt;
    </code></pre>
    <p>The countdown will take place until 15:00 December 24, 2016.</p>

<pre><code>
        &lt;div class="countdown" data-type="since" data-time="24 Dec 2014 15:00"&gt;
    </code></pre>
    <p>In this case, the count will start at 15:00 December 24, 2014.</p>

    <p>The countdown date should be specified in <b>data-time</b> attribute, using the following format:</p>
<pre>
    <code>
        DD month YYYY HH:MM
    </code>
</pre>
<p>where <b>"month"</b> is the month, which can take the following values:</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Jan</dt>
            <dd>January</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Feb</dt>
            <dd>February</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Mar</dt>
            <dd>March</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Apr</dt>
            <dd>April</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>May</dt>
            <dd>May</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Jun</dt>
            <dd>June</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Jul</dt>
            <dd>July</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Aug</dt>
            <dd>August</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sep</dt>
            <dd>September</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Oct</dt>
            <dd>October</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Nov</dt>
            <dd>November</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Dec</dt>
            <dd>December</dd>
        </dl>
    </li>
</ol>
<p>E.g:</p>
<pre><code>
        &lt;div class="countdown" data-type="until" data-time="24 Aug 2016 12:00"&gt;
    </code></pre>
<p>In this case, the countdown will take place until 12:00 August 24, 2016.</p>

<h4>Timer display format setup</h4>
<p>To set the timer display format, add the <b>data-format</b> attribute.  </p>
<p>Use the following symbols (respectively) to specify, which time spans you want to display: <b>"Y"</b> for many years, <b>"O"</b> for several month, <b>"W"</b> for several weeks, <b>"D"</b> for
    several days, <b>"H"</b> for several hours, <b>"М"</b> for several minutes, <b>"S"</b> for several seconds.</p>
<p>E.g.:</p>
<pre><code>
        &lt;div class="countdown" data-type="until" data-time="24 Aug 2016 12:00" data-format="wdh"&gt;
    </code></pre>

<p>In this case, the timer will have the following format:</p>
<p>for several weeks, for several days, for several hours.</p>