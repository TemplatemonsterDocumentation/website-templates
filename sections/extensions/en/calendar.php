<h3>RD Calendar. Events calendar</h3>

<figure class="img-polaroid">
    <img src="img/calendar.png" alt="">
</figure>

<h6>HTML Website Template Template use <b>RD Calendar</b> extension to implement event calendar functionality.</h6>

<p>Basic calendar HTML code structure is</p>

<pre><code>&lt;div class="rd-calendar"&gt;
    &lt;div class="rdc-panel"&gt;
        &lt;a class="rdc-next"&gt;&lt;/a&gt;
        &lt;a class="rdc-prev"&gt;&lt;/a&gt;
        &lt;div class="rdc-today_day"&gt;&lt;/div&gt;
        &lt;div class="rdc-today_date"&gt;&lt;/div&gt;
        &lt;div class="rdc-today_month"&gt;&lt;/div&gt;
        &lt;div class="rdc-today_fullyear"&gt;&lt;/div&gt;
        &lt;div class="rdc-month"&gt;&lt;/div&gt;
        &lt;div class="rdc-fullyear"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="rdc-table"&gt;&lt;/div&gt;
    &lt;div class="rdc-events"&gt;
        &lt;a class="rdc-events_close"&gt;&lt;/a&gt;
        &lt;ul&gt;
            &lt;li class="rdc-event" data-date="10/28/2015"&gt;
                Event 1
            &lt;/li&gt;
            &lt;li class="rdc-event" data-date="10/31/2015"&gt;
                Event 2
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Map of classes for HTML structure</h4>

<p>RD Calendar includes the following structural items for creating the calendar.</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_day</dt>
            <dd>Shows current day of the week;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_date</dt>
            <dd>Shows current day of the month;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_month</dt>
            <dd>Shows current month;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_fullyear</dt>
            <dd>Shows current year;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-panel</dt>
            <dd>Shows informing panel;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-prev</dt>
            <dd>Shows previous month switcher;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-next</dt>
            <dd>Shows next month switcher;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-month</dt>
            <dd>Shows a month;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-fullyear</dt>
            <dd>Shows a year;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table</dt>
            <dd>Shows month days table;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_day</dt>
            <dd>Shows single day of the week;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_date</dt>
            <dd>Shows single day of the month;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_events</dt>
            <dd>Shows day’s events;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_has-events</dt>
            <dd>Shows dates with events assigned;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_events-count</dt>
            <dd>Shows number of events, assigned to specific date;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_event</dt>
            <dd>Shows day’s event;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_today</dt>
            <dd>Shows today’s date;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_prev</dt>
            <dd>Shows previous month dates;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_next</dt>
            <dd>Shows next month dates;</dd>
        </dl>
    </li>
</ul>

<h4>Days output configuration</h4>

<p>By default RD Calendar displays days as</p>
<p class="text-center"><b>Sun</b>, <b>Mon</b>, <b>Tue</b>, <b>Wed</b>, <b>Thu</b>, <b>Fri</b>, <b>Sat</b></p>

<p>In order to specify custom days output format you should use <b>data-days</b> data attribute for target calendar. Specify it as a line of days, separated by commas in HTML code structure.</p>

<pre><code>&lt;div class="rd-calendar" data-days="Sn, Mn, Te, Wd, Th, Fr, St"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Months output configuration</h4>
<p>By default RD Calendar displays months as</p>

<p class="text-center"><b>January</b>, <b>February</b>, <b>March</b>, <b>April</b>, <b>May</b>, <b>June</b>,
    <b>July</b>, <b>August</b>, <b>September</b>, <b>October</b>, <b>November</b>, <b>December</b></p>

<p>In order to specify custom month output format you should use <b>data-months</b> data attribute for target calendar. Specify it as a line of months titles, separated by commas in HTML code structure.</p>

<pre><code>&lt;div class="rd-calendar" data-months="Jan, Feb, Mar, Apr, May,
        Jun, Jul, Aug, Sep, Oct, Nov, Dec"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Calendar events management</h4>
<p>In order to assign an event to specific date you should use the following event code structure at target calendar events list.</p>

<pre><code>&lt;!-- RD Calendar --&gt;
&lt;div class="rd-calendar"&gt;
    ...
    &lt;!-- Events List Holder --&gt;
    &lt;div class="rdc-events"&gt;
        …
        &lt;!-- Events List --&gt;
        &lt;ul&gt;
            &lt;!-- Create Event --&gt;
            &lt;li class="rdc-event" data-date="10/28/2015"&gt;
                Event 1
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>Please note, <b>data-date="10/28/2015"</b> data attribute at <b>.rdc-event</b> event item is a mandatory one. it should be set in
    <b>MM/DD/YYYY</b> format, otherwise script will ignore it and won’t display this event in calendar. An event itself can have any code structure included.</p>