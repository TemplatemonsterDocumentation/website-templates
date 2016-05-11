<h3>RD Calendar. A calendar with events support</h3>
<h6>Intense use <b>RD Calendar</b> extension for implementing calendar functionality.
    The basic HTML marking for a calendar looks the following way:</h6>

<pre><code>
        &lt;div class="rd-calendar"&gt;
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

<h4>Map of the classes for creating the HTML markup</h4>
<p>RD Calendar supports the following structural elements for creating a calendar markup:</p>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_day</dt>
            <dd>displays the current day of the week;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_date</dt>
            <dd>displays the current day of the month;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_month</dt>
            <dd>displays the current month;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-today_fullyear</dt>
            <dd>displays the current year;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-panel</dt>
            <dd>displays the info panel;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-prev</dt>
            <dd>displays the previous month switcher;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-next</dt>
            <dd>displays the next month switcher;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-month</dt>
            <dd>displays the calendar month;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-fullyear</dt>
            <dd>displays the calendar year;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table</dt>
            <dd>displays the days of the month table;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_day</dt>
            <dd>displays the day of the week in the calendar;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_date</dt>
            <dd>displays the day of the month in the calendar;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_events</dt>
            <dd>displays events  of the day of the month in the calendar;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_has-events</dt>
            <dd>displays a calendar day that contains events;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_events-count</dt>
            <dd>displays the amount of events in a calendar day;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_event</dt>
            <dd>displays an event in a day of a month in the calendar;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_today</dt>
            <dd>displays the current day of a month in the calendar;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_prev</dt>
            <dd>displays the days of the previous month of the calendar;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rdc-table_next</dt>
            <dd>displays the days of the next month of the calendar;</dd>
        </dl>
    </li>
</ul>

<h4>Days of the week display format setup    </h4>
<p>By default, days of the week are displayed in the following way in RD Calendar:</p>
<p> Sun, Mon, Tue, Wed, Thu, Fri, Sat</p>

<p>To setup a custom days of the week display format, please use the
    data attribute <b>'data-days'</b> for the target calendar in the HTML marking. The value should be represented as a line of the days, separated by commas:
</p>

<pre><code>
        &lt;div class="rd-calendar" data-days="Sn, Mn, Te, Wd, Th, Fr, St"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Attention: RD Calendar display format can take any form. You just need to
    specify the content you need: any text in any language in a format, shown in the example (text that is separated by commas).
</p>

<h4>Months of the year format setup</h4>
<p>By default moths of the year in RD Calendar are displayed in the following format:</p>

<p>January, February, March, April, May, June,
    July, August, September, October, November, December</p>

<p>To set up a custom months of the year format, use the <b>'data-months'</b>attribute for the target calendar in the HTML marking.  The value should be represented as a line of the months, separated by commas:
</p>
<pre><code>
        &lt;div class="rd-calendar" data-months="Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Attention: RD Calendar display format can take any form.
    You just need to specify the content you need: any text in any language in a format, shown in the example (text that is separated by commas).</p>

<h4>Managing events in the calendar</h4>
<p>To match a certain event with a certain day in the calendar, set the corresponding event marking in the events list of the target calendar:</p>

<pre><code>
        &lt;!-- RD Calendar --&gt;
        &lt;div class="rd-calendar"&gt;
            ...
            &lt;!-- Events List Holder --&gt;
            &lt;div class="rdc-events"&gt;
                ...
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

<p class="alert alert-info">Please pay attention that <b>data-date="10/28/2015"</b> attribute of the <b>.rdc-event</b> element
    is required and should have the <b>MM/DD/YYYY</b> format, otherwise the script will not display the day with the described event and will not show it in the calendar.
    The event itself can contain any nested marking.
</p>







