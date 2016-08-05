<h3>RD Facebook Feed</h3>
<p>HTML Website Template uses <b>jquery.rd-facebook-feed.js</b> to display data from  <a
        href="https://facebook.com/">https://facebook.com/</a> service on the website.</p>
<h4>Adding widget to the page</h4>
<p>The basic widget HTML markup to display one element looks the following way:</p>
<pre><code>
        &lt;div class="facebook" data-fb-id="TemplateMonster" data-fb-access="..."&gt;
            &lt;div data-fb-post&gt;
                &lt;img src="images/_blank.png" alt="" data-picture="src" data-remove/&gt;
                &lt;p data-message="text"&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>You can display an unlimited number of items and use this widget several times on one page.
  Moreover, you can integrate this extension with any third-party scripts (e.g.: carousel, gallery, etc.)
  HTML structure inside the widget is up to you. For example, you can use ТМ Grid system for handy placing of the elements.
  Only the <b>'data-fb-post'</b> or <b>'data-fb-user'</b> attribute is required.</p>
<h4>Project setup to work with Facebook API</h4>
<p>To work with Facebook API, create an application in your Facebook account, generate the AccessToken and specify it the <b>'data-fb-access'</b> attribute:</p>

<pre><code>
        &lt;div class="facebook" data-fb-access="..."&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Facebook account setup</h4>

<p>To set up the user, specify the user ID in the <b>'data-fb-id'</b> attribute. E.g.:</p>
<pre><code>
        &lt;div class="facebook" data-fb-id="TemplateMonster"&gt;
    </code></pre>

<h4>Date format setup</h4>

<p>If the post was added more the 2 days ago, add the <b>'data-fb-date-format'</b> to set up the date display. E.g.:</p>

<pre><code>
        &lt;div class="facebook" data-fb-date-format="%b/%d/%Y"&gt;
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

<h4>Creating valid item structure</h4>

<p>    You can get the element data only inside the block with <b>'data-fb-post'</b> or <b>'data-fb-user'</b> attribute. E.g.:</p>

<pre><code>
        &lt;div data-fb-post&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Widget logics</h4>

<p>To obtain post data, add the following attribute:
  <b>data-(data name)="target"</b>
  Where <b>'target'</b> is the attribute to insert the data to. If <b>'target'</b> has ‘text’ value, the data inside the tag will be displayed as regular text.
  You can find some examples on displaying data of different types below. If you need to enter data values to several attributes, specify them, separated by a comma.
</p>

<h4>Post image display</h4>

<p>To display the post image, specify the <b>data-picture="src"</b> attribute. E.g.:</p>

<pre><code>
        &lt;img data-picture="src" src="_blank.png" alt=""/&gt;
    </code></pre>

<h4>Post text display</h4>

<p>To display the post text, specify the <b>data-message="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;p data-message="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Attachment name display</h4>

<p>To display the attachment name, add the <b>data-name="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;div data-name="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Attachment description display</h4>

<p>To display the attachment description, add the <b>data-description="text"</b>. attribute. E.g.:</p>

<pre><code>
        &lt;div data-description="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Likes count display</h4>

<p>To display likes count, please add the <b>data-likes-count="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;div data-likes-count="text"&gt;&lt;/div&gt;
    </code></pre>

<h4>Post link display</h4>

<p>To display post link, use the data-postlink=”href” attribute. E.g.:</p>


<pre><code>
        &lt;a href="#" data-postlink="href"&gt;&lt;/div&gt;
    </code></pre>

<h4>User avatar display</h4>

<p>To display user avatar, use the <b>data-from-picture="src"</b> attribute. E.g.:</p>

<pre><code>
        &lt;img data-from-picture="src" src="_blank.png" alt=""/&gt;
    </code></pre>

<h4>Username display</h4>

<p>To display username, add the <b>data-from-picture="src"</b> attribute. E.g.:</p>

<pre><code>
        &lt;div data-from-name="text"&gt;&lt;/div&gt;
    </code></pre>