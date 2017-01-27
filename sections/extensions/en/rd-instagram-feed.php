<h3>RD Instafeed</h3>
<p>Intense uses <b> RD Instafeed</b> extension to display data from  <a
        href="https://www.instagram.com/">https://www.instagram.com/</a> on the website.</p>

<h4>Adding widget to the page</h4>
<p>The basic widget HTML markup to display one element looks the following way:</p>

<pre><code>
      &lt;section class="instafeed" data-instafeed-accesstoken="..." data-instafeed-clientid="..." data-instafeed-user="..."
                      data-instafeed-get="user"&gt;
          &lt;div data-instafeed-item&gt;
              &lt;img src="images/_blank.png" alt="" data-images-low_resolution-url="src" /&gt;
          &lt;/div&gt;
      &lt;/section&gt;
    </code></pre>

<p>You can display an unlimited number of items and use this widget several times on one page.
  Moreover, you can integrate this extension with any third-party scripts (e.g.: carousel, gallery, etc.)
  HTML structure inside the widget is up to you. For example, you can use ТМ Grid system for handy placing of the elements. Only the <b>'data-instafeed-item'</b> attribute is required.
</p>


<h4>How to get access_token</h4>

<p>
  <a href="https://elfsight.com/blog/2016/05/how-to-get-instagram-access-token/">Instruction Link</a>
</p>

<img src="http://192.168.9.182/rd-instafeed/documentation/img/img-1.jpg" alt="">

<p>Received options from <a href="https://elfsight.com/blog/2016/05/how-to-get-instagram-access-token/">this instruction</a> you need to set into html attribute - <strong>data-instafeed-accesstoken</strong></p>

<p>The string consists of three parts separated by a dot</p>

<ul>
  <li>1 part of the string should be inserted into <strong>data-instafeed-user</strong></li>
  <li>3 part of the string should be inserted into <strong>data-instafeed-clientid</strong></li>
</ul>

<p><strong>Please note:</strong> after Instagram API update, you can output contents only from your account (account you have accessed too).</p>


<h4>Instagram images display from the user page</h4>

<p>To display images from a user page, use the <b>data-instafeed-get="user"</b> and specify the user ID to the <b>'data-instafeed-user'</b>. E.g.:</p>

<pre><code>
        &lt;section class="instafeed" data-instafeed-get="user" data-instafeed-accesstoken="..." data-instafeed-clientid="..." data-instafeed-user="..."&gt;
            ...
        &lt;/section&gt;
    </code></pre>

<p>You can find out the user ID with the help of multiple services. Here is <a
        href="http://jelled.com/instagram/lookup-user-id">one of them</a> .</p>

<h4>Instagram images display by a tag</h4>

<p>To display images by tag, add the <b>data-instafeed-get="tagged"</b> attribute and specify the tag name in the <b>'data-instafeed-tagname'</b> attribute. E.g.:</p>

<pre><code>
&lt;section class="instafeed" data-instafeed-tagname="food" data-instafeed-get="tagged" data-instafeed-accesstoken="..." data-instafeed-clientid="..." data-instafeed-user="..."&gt;
    ...
&lt;/section&gt;
    </code></pre>

<h4>Instagram user profile display</h4>

<p>To display a user profile, add the <b>data-instafeed-get="profile"</b> attribute and specify user Id in the <b>'data-instafeed-user'</b> attribute. E.g.:</p>

<pre><code>
        &lt;section class="instafeed" data-instafeed-get="profile" data-instafeed-accesstoken="..." data-instafeed-clientid="..." data-instafeed-user="..."&gt;
            ...
        &lt;/section&gt;
    </code></pre>

<h4>Date format setup</h4>

<p>To set up the date display format, add the <b>'data-instafeed-date-format'</b> attribute. E.g.:</p>

<pre><code>
        &lt;div class="instafeed" data-instafeed-date-format="%b/%d/%Y"&gt;
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
<p>    You can get the item data only inside the block with <b>'data-instafeed-item'</b> attribute. E.g.:</p>

<pre><code>
        &lt;div data-instafeed-item&gt;
            &lt;img src="images/_blank.png" alt="" data-images-low_resolution-url="src" /&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Widget logics</h4>

<p>To obtain widget item data, add the following attribute:
  <b>data-(data name)="target"</b>
  Where <b>'target'</b> is the attribute to insert the data to. If <b>'target'</b> has ‘text’ value, the data inside the tag will be displayed as regular text. You can find some examples on displaying data of different types below. If you need to enter data values to several attributes, specify them and separate them by commas.
</p>

<h4>Item image display</h4>

<p>To display service image, use the <b>data-images_(image resolution)="src"</b> attribute. E.g.:</p>

<ul class="marked-list">
    <li>
        320х320 image:
        <pre><code>
            &lt;img data-images_low_resolution-url="src" src="images/_blank.png" alt=""/&gt;
            </code></pre>
    </li>
    <li>
        640х640 image:
        <pre><code>
            &lt;img data-images_standard_resolution-url="src" src="images/_blank.png" alt=""/&gt;
            </code></pre>
    </li>
    <li>
        150х150 image:
        <pre><code>
            &lt;img data-images_thumbnail-url="src" src="images/_blank.png" alt=""/&gt;
            </code></pre>
    </li>
</ul>

<h4>Item link display</h4>

<p>To display item link, add the <b>data-link="href,text"</b> attribute. E.g., to display the link with the text, use:</p>

<pre><code>
        &lt;a href="#" data-link="href,text"&gt;&lt;/a&gt;
    </code></pre>

<h4>Item tags display</h4>

<p>To display item tags, add the <b>data-tags_full="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;p data-tags_full="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Adding date display</h4>
<p>To display the item adding date, add the <b>data-dating="text"</b> attribute. To display the date in <b>YY-MM-DD</b>, specify the  <b>data-created_time="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;time data-created_time="text"&gt;&lt;/time&gt;
    </code></pre>

<h4>Item description display    </h4>
<p>To display the item description, please add the <b>data-caption-text="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;p data-caption-text="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Likes count display</h4>
<p>To display likes count for an image, please use the <b>data-likes-count="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;p data-likes-count="text"&gt;&lt;/p&gt;
    </code></pre>
<h4>Comments count display</h4>
<p>To display the comments count for an image, please use the <b>data-comments-count="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;p data-comments-count="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Username display</h4>
<p>To display a username, please use the <b>data-username="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;p data-username="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Full user name display</h4>
<p>To display a full user name, please add the <b>data-full_name="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;p data-full_name="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>User bio display</h4>
<p>To display user bio, please use the <b>data-bio="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;p data-bio="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Followers count display</h4>
<p>To display followers count, please use the <b>data-counts-follows="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;p data-counts-follows="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Count of the pages, followed by a certain user</h4>
<p>To display count of the pages, followed by a certain user, use the <b>data-counts-followed_by="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;p data-counts-followed_by="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>User website display</h4>
<p>To display a user website, please add the <b>data-counts-followed_by="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;a href="#" data-website="href,text"&gt;&lt;/a&gt;
    </code></pre>