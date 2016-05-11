<h3>RD Twitterfeed</h3>
<p>Intense uses <b>jquery.rd-twitter-feed.js</b> to get data from <a
        href="https://twitter.com/">https://twitter.com/</a> service on the website.</p>

<h4>Adding widget to the page</h4>
<p>The basic widget HTML markup to display one element looks the following way:</p>

<pre><code>
        &lt;div class="twitter" data-twitter-username="templatemonster"&gt;
            &lt;div data-twitter-type="tweet"&gt;
                &lt;img data-media_url="src" src="images/_blank.png" alt=""/&gt;
                &lt;p data-tweet=text&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>You can display an unlimited number of elements and use this widget several times on one page.
    Moreover, you can integrate this extension with any third-party script (e.g.: carousel, gallery, etc.)
    HTML structure inside the widget is up to you. For example, you can use ТМ Grid system for handy placing of the elements. Only the <b>data-twitter-type="tweet"</b> attribute is required.
</p>

<h4>Project setup to work with Twitter API</h4>

<p>    To work with <b>Twitter API</b>, create an application in your Twitter account, generate the keys and specify the in <b>bat/twitter_api/config.php file</b>. Here is the list of the necessary keys:</p>

<ul class="marked-list">
    <li>
        CONSUMER_KEY;
    </li>
    <li>
        CONSUMER_SECRET;
    </li>
    <li>
        ACCESS_TOKEN;
    </li>
    <li>
        ACCESS_SECRET.
    </li>
</ul>

<p>config.php file:</p>

<pre><code>
        // Consumer Key
        define('CONSUMER_KEY', 'Put CONSUMER_KEY here ');
        define('CONSUMER_SECRET', 'Put CONSUMER_SECRET here');

        // User Access Token
        define('ACCESS_TOKEN', 'Put ACCESS_TOKEN here');
        define('ACCESS_SECRET', 'Put ACCESS_SECRET here');
    </code></pre>

<h4>Local use</h4>

<p>If you run the project from files, the plugin won’t work as it requires PHP 5.2+.
    If used on the local server, Twitter date won’t be received as Twitter authentication service can’t access local data.
    You will see text data instead, that are identical to what you get from Twitter. When you load the template to a live server, you’ll get the real data.</p>

<h4>Twitter account setup</h4>

<p>To set up the user, specify the username in <b>data-twitter-username</b> attribute. E.g.:</p>

<pre><code>
        &lt;div class="twitter" data-twitter-username="templatemonster"&gt;
    </code></pre>

<h4>Displaying tweets by a hashtag</h4>

<p>To filter tweets by hashtags, specify its name in <b>'data-twitter-hashtag'</b> attribute.</p>
<pre><code>
        &lt;div class="twitter" data-twitter-hashtag="webdesign"&gt;
    </code></pre>

<p class="alert alert-warning">Attention! You can display tweets only by a hashtag or by a username</p>

<h4>Displaying tweets from a list</h4>

<p>    To filter tweets by a list, specify its name in <b>data-twitter-listname</b> attribute and specify the username with the help of <b>data-twitter-username</b> attribute. E.g.:</p>
<pre><code>
        &lt;div class="twitter" data-twitter-username="templatemonster" data-twitter-listname="templatemonster"&gt;
    </code></pre>
<p class="alert alert-warning">Attention! You can display tweets by a list, only if you specify the username.</p>

<h4>Date format setup</h4>

<p>If the tweet was added recently (up to 2 days), set up the date format in the following way:</p>

<ol class="index-list">
    <li>
        <p>If the tweet was added less than a minute ago:
            To configure this text, add the <b>'data-twitter-date-seconds'</b> attribute. E.g.:
        </p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-seconds="less 1m"&gt;
            </code></pre>
    </li>
    <li><p>If the tweet was added less than an hour ago:
            To configure the text that is displayed next to the number of minutes (after the tweet was added), add the <b>'data-twitter-date-minutes'</b> attribute. E.g.:
        </p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-minutes="m"&gt;
            </code></pre>
    </li>
    <li>
        <p>If the tweet was added less than 24 hours ago:
            To configure the text that is displayed next to the number of minutes (after the tweet was added), add the <b>'data-twitter-date-hours'</b> attribute. E.g.:
        </p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-hours="h"&gt;
            </code></pre>
    </li>
    <li>
        <p>If the tweet was added yesterday:
            To configure the text that is displayed next to the number of minutes (after the tweet was added), add the <b>'data-twitter-date-yesterday'</b> attribute. E.g.:
        </p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-yesterday="yd"&gt;
            </code></pre>
    </li>
    <li>
        <p>If the tweet was added more than 2 days age, add the <b>'data-date-format'</b> attribute to set up the date display format. E.g.:
        </p>
        <pre><code>
                &lt;div class="twitter" data-twitter-date-format="%b/%d/%Y"&gt;
            </code></pre>
        <p>where</p>


        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>%d</dt>
                    <dd>displays a digit (1,2,3);</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>%Y</dt>
                    <dd>displays full year format (2011, 2013, 2015);</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>%y</dt>
                    <dd>displays 2 last digits of the year (11, 13, 15);</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>%m</dt>
                    <dd>displays month number (1,2,3);</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>%B</dt>
                    <dd>displays full month name (January, February, March);</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>%b</dt>
                    <dd>displays shortened month name (Jan, Feb, Mar).</dd>
                </dl>
            </li>
        </ul>
        <p>By default, the date has the Oct/30/2015 format.</p>
    </li>
</ol>

<h4>Creating the valid element structure</h4>

<p>    You can get the element data only inside the block with <b>data-type="tweet"</b> attribute. E.g.:</p>

<pre><code>
        &lt;div data-twitter-type="tweet"&gt;
            &lt;img data-media_url="src" alt="" src="#"/&gt;
            &lt;div data-tweet="text"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<h4>Widget logics</h4>
<p>To obtain widget item data, add the following attribute: <b>data-(data name)="target"</b> Where <b>'target'</b> is the attribute to insert the data to. If <b>'target'</b> has ‘text’ value, the data inside the tag will be displayed as regular text.
    You can find some examples on displaying data of different types below. If you need to enter data values to several attributes, specify them, separated by a comma.</p>

<h4>Tweet image display</h4>
<p>To add a link to the tweet image, specify the <b>data-media_url="src"</b> attribute. E.g.:</p>
<pre><code>
        &lt;img data-media_url="src" src="#" alt=""/&gt;
    </code></pre>

<p class="alert alert-info">Attention: if there is no image in the tweet, this element will be deleted from markup. If you want to display 2 or more images, copy-paste this string of code as many times as needed.</p>

<h4>Tweet text display</h4>
<p>To display tweet text, specify the <b>data-tweet="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;p data-tweet="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Adding date display</h4>
<p>To display the item adding date, add the <b>data-date="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;div data-date="text"&gt;&lt;/div&gt;
    </code></pre>
<p>To get the date in <b>'datetime'</b> attribute format of the <b>'time'</b>, add the <b>data-datetime="datetime"</b> attribute.</p>

<h4>User avatar display</h4>
<p>To display avatar tags, add the <b>ata-avatar="src"</b> attribute. E.g.:</p>
<pre><code>
        &lt;img data-avatar="src" src="#" alt=""/&gt;
    </code></pre>
<h4>Tweet link display</h4>
<p>To display the tweet link, please use the <b>data-url="href,text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;a data-url="href,text"&gt;&lt;/a&gt;
    </code></pre>
<h4>User login display</h4>
<p>To display user login in <b>"@templatemonster"</b> format, specify the <b>data-screen_name="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;div data-screen_name="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Username display</h4>
<p>To display the username, specify the <b>data-user_name="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;div data-user_name="text"&gt;&lt;/div&gt;
    </code></pre>