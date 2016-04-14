<h3>Twitter Feed</h3>

<h6>Intense Template use <b>jquery.rd-twitter-feed.js</b> extension to obtain data from <a href="https://twitter.com/">https://twitter.com/</a> service on a webpage.</h6>

<h4>Inserting widget to page</h4>

<p>Basic widget HTML code structure for single item display appears as follows:</p>

<pre><code>&lt;div class="twitter" data-twitter-username="templatemonster"&gt;
    &lt;div data-twitter-type="tweet"&gt;
        &lt;img data-media_url="src" src="images/_blank.png" alt=""/&gt;
        &lt;p data-tweet=text&gt;&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>You can display unlimited number of items or use this widget for few times on same page. You can also integrate this extension to any external script (like carousel, gallery, etc.).  Any HTML structure is available for widget content. For example, you can use ТМ Grid system for convenient items arrangement. The only requirement is to have an item with
    <b>data-twitter-type=”tweet”</b> data attribute.</p>


<h4>Setting the project to work with Twitter API</h4>

<p>To work with Twitter API you should create an application at your Twitter account, generate keys and record them in
    <b>bat/twitter_api/config.php</b> file. List of keys required:</p>

<ul class="marked-list">
    <li><b>CONSUMER_KEY;</b></li>
    <li><b>CONSUMER_SECRET;</b></li>
    <li><b>ACCESS_TOKEN;</b></li>
    <li><b>ACCESS_SECRET.</b></li>
</ul>

<p><b>Config.php</b> file:</p>

<pre><code>// Consumer Key
define('CONSUMER_KEY', 'Put CONSUMER_KEY here ');
define('CONSUMER_SECRET', 'Put CONSUMER_SECRET here');

// User Access Token
define('ACCESS_TOKEN', 'Put ACCESS_TOKEN here');
define('ACCESS_SECRET', 'Put ACCESS_SECRET here');
</code></pre>


<h4>Local usage</h4>

<p>Plugin won’t work if you run the project from the file system, as it requires PHP version 5.2+ to operate correctly. Twitter service data will not be received on local server as well, as twitter authentication service can not gain access to local data. Instead it will show test data, identical to the one from twitter. After uploading site to live server real data will be received.</p>


<h4>Twitter account configuration</h4>

<p>In order to define user, you should specify twitter username to <b>data-twitter-username</b> data attribute. For example:</p>

<code>&lt;div class="twitter" data-twitter-username="templatemonster"&gt;</code>


<h4>Tweets output by hashtag:</h4>

<p>In order to filter tweets by hashtag, you should specify it at <b>data-twitter-hashtag</b> attribute. For example:</p>

<code>&lt;div class="twitter" data-twitter-hashtag="webdesign"&gt;</code>

<p class="alert alert-danger">Attention! Tweet output is available by hashtag or username only.</p>


<h4>List tweets output configuration:</h4>

<p>In order to filter tweets by list, you should specify it at <b>data-twitter-listname</b> attribute and set user name by using
    <b>data-twitter-username attribute</b>. For example:</p>

<code>&lt;div class="twitter" data-twitter-username="templatemonster" data-twitter-listname="templatemonster"&gt;</code>

<p class="alert alert-danger">Attention! List tweets output is available with username specified only.</p>


<h4>Output date format configuration</h4>

<p>In case tweet was recently added (up to 2 days), output date format is configured the following way:</p>

<ol class="index-list">
    <li>
        <p>If the tweet was added less than a minute ago:</p>
        <p>In order to configure this text you should use <b>data-twitter-date-seconds</b> attribute. For example:</p>
        <code>&lt;div class="twitter" data-twitter-date-seconds="less 1m"&gt;</code>
    </li>
    <li>
        <p>If the tweet was added less than an hour ago:</p>
        <p>In order to configure text, displayed next to number of minutes (since tweet adding) you should use <b>data-twitter-date-minutes</b> attribute. For example:</p>
        <code>&lt;div class="twitter" data-twitter-date-minutes="m"&gt;</code>
    </li>
    <li>
        <p>If the tweet was added less than a day ago:</p>
        <p>In order to configure text, displayed next to number of hours (since tweet adding) you should use <b>data-twitter-date-hours</b> attribute. For example:</p>
        <code>&lt;div class="twitter" data-twitter-date-hours="h"&gt;</code>
    </li>
    <li>
        <p>If the tweet was added yesterday:</p>
        <p>In order to configure this text, you should use <b>data-twitter-date-yesterday</b> attribute. For example:</p>
        <code>&lt;div class="twitter" data-twitter-date-yesterday="yd"&gt;</code>
    </li>
</ol>

<p>If the tweet was added more than two days ago, you should use <b>data-date-format</b> attribute to configure date output format. For example:</p>

<code>&lt;div class="twitter" data-twitter-date-format="%b/%d/%Y"&gt;</code>

<p>where</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term"><dt>%d</dt> <dd>number output(1,2,3);</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>%Y</dt> <dd>full year format output(2011, 2013, 2015);</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>%y</dt> <dd>2 last digits of year output(11, 13, 15);</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>%m</dt> <dd>month number output(1,2,3);</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>%B</dt> <dd>full month name output(January,February, March);</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>%b</dt> <dd>short month name output(Jan, Feb, Mar).</dd></dl>
    </li>
</ul>

<p>By default date is displayed in <b>Oct/30/2015</b> format.</p>


<h4>Correct widget item structure creating</h4>

<p>Item data can be obtained only if it’s inside of  block with <b>data-type=”tweet”</b> attribute specified.  For example:</p>

<pre><code>&lt;div data-twitter-type="tweet"&gt;
    &lt;img data-media_url="src" alt="" src="#"/&gt;
    &lt;div data-tweet="text"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>


<h4>Widget operating logic</h4>

<p>In order to gain tweet data you should define the following attribute:</p>

<p class="text-center"><b>data-(data title)=”target”</b></p>

<p>where target stands for attribute to record data to. If target is set to “<b>text</b>”, data will be recorded by using plain text. Below you can find examples of various data types obtaining. In case you need to record data to several attributes, you should separate them by commas.</p>


<h4>Tweet image output</h4>

<p>In order to display tweet image you should specify <b>data-media_url=”src”</b> attribute. For example:</p>

<code>&lt;img data-media_url="src" src="#" alt=""/&gt;</code>

<p class="alert alert-warning">Please, note, if there is no image in this tweet, item won’t be displayed. If you need to show 2 or more images, just duplicate this code for a required number of times.</p>


<h4>Tweet text output</h4>

<p>In order to get tweet text you should use <b>data-tweet=”text”</b> attribute. For example:</p>

<code>&lt;p data-tweet="text"&gt;&lt;/p&gt;</code>


<h4>Tweet creation date output</h4>

<p>In order to show tweet creation date you should use <b>data-date=”text”</b> attribute. For example:</p>

<code>&lt;div data-date="text"&gt;&lt;/div&gt;</code>

<p>In order to get date in time tag <b>datetime</b> attribute format you should use <b>data-datetime=”datetime”</b> attribute.</p>


<h4>User avatar output</h4>

<p>In order to get avatar tags you should use <b>data-avatar=”src”</b> attribute. For example:</p>

<code>&lt;img data-avatar="src" src="#" alt=""/&gt;</code>


<h4>Tweet link output</h4>

<p>In order to get item title you should specify <b>data-title=”text”</b> attribute. For example:</p>

<code>&lt;a data-url="href,text"&gt;&lt;/a&gt;</code>


<h4>Login output</h4>

<p>In order to show user login in “<b>@templatemonster</b>” format you should use <b>data-screen_name=”text”</b> attribute. For example:</p>

<code>&lt;div data-screen_name="text"&gt;&lt;/div&gt;</code>


<h4>Username output</h4>

<p>In order to show username you should specify <b>data-user_name=”text”</b> attribute. For example:</p>

<code>&lt;div data-user_name="text"&gt;&lt;/div&gt;</code>