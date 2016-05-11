<h3>RD Flickr Gallery</h3>
<h6>Intense uses <b>RD Flickrgallery</b> extension to display data from <a href="https://www.flickr.com/">https://www.flickr.com/</a> service on the web-page.</h6>

<h4>Adding widget to the page</h4>
<p>The basic HTML marking for the widget looks the following way:</p>
<pre><code>
        &lt;div class="flickr" data-flickr-id="47302490@N05"&gt;
            &lt;div data-type="flickr-item"&gt;
                &lt;img data-image_q="src" data-title="alt" src="images/_blank.png" alt=""/&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<p>You can display an unlimited number of items and use this widget several times on one page.
    Moreover, you can integrate this extension with any third-party scripts (e.g.: carousel, gallery, etc.)  HTML structure inside the widget is up to you. For example,
    you can use ТМ Grid system for handy placing of the elements. Only the <b>data-type="flickr-item"</b> attribute is required.</p>

<h4>Flickr account setup</h4>
<p>To set up the user, specify the user ID in <b>'data-id'</b> attribute. E.g.:</p>
<pre><code>
        &lt;div class="flickr" data-flickr-id="47302490@N05"&gt;
    </code></pre>
<p>You can get the user ID by the following link:</p>
<p><a href="http://idgettr.com/">http://idgettr.com/.</a></p>
<p>To get data from several accounts, specify them in <b>'data-id'</b> attribute, separated by commas. </p>
<h4>Data filtering setup</h4>

<p>To filter data by tags, add the <b>'data-tags'</b> attribute. To specify several tags, point them out, separated by commas. E.g.:</p>

<pre><code>
        &lt;div class="flickr" data-flickr-id="47302490@N05,48444528@N07"
                            data-flickr-tags="webdesign, baseball" data-flickr-tagmode="any"&gt;
    </code></pre>
<p>Where the <b>'data-flickr-tagmode'</b> defines the filtration type and can take 2 values:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>any</dt>
            <dd>displaying the element, if it corresponds to at least one tag;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>all</dt>
            <dd>displaying the element, if it corresponds to all tags.</dd>
        </dl>
    </li>
</ul>

<h4>Date format setup</h4>
<p>To set up the date format, add the <b>'data-flickr-date-format'</b> attribute. E.g.:</p>
<pre><code>
        &lt;div class="twitter" data-flickr-date-format="%b/%d/%Y"&gt;
    </code></pre>

<p>where
</p>

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
<p>By default, the date has the Oct/30/2015 format.
</p>

<h4>Language setup</h4>
<p>To change the language, add the <b>'data-lang'</b> attribute. E.g.:</p>

<pre><code>
        &lt;div class="flickr" data-flickr-id="47302490@N05,48444528@N07" data-flickr-lang="en-us"&gt;
    </code></pre>
<p>Allowed values:</p>












<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>de-de</dt>
            <dd>German;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>en-us</dt>
            <dd>English;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>es-us</dt>
            <dd>Spanish;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>fr-fr</dt>
            <dd>French;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>it-it</dt>
            <dd>Italian;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ko-kr</dt>
            <dd>Korean;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>pt-br</dt>
            <dd>Portuguese;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>zh-hk</dt>
            <dd>Chinese.</dd>
        </dl>
    </li>
</ul>

<h4>Creating the valid element structure</h4>


<p>You can get the element data only inside the block with <b>data-type="flickr-item"</b> attribute. E.g.:</p>

<pre><code>
        &lt;div data-type="flickr-item"&gt;
            &lt;img data-image_q="src" data-title="alt" src="images/_blank.png" alt=""/&gt;
        &lt;/div&gt;
    </code></pre>

<p>Widget logics</p>

<p>To obtain widget element data, add the following attribute: </p>
<p><b>data-(data name)="target"</b></p>
<p>Where <b>'target'</b> is the attribute to insert the data into. If <b>'target'</b> has <b>'text'</b> value, the data inside the tag will be displayed as regular text. You can find some examples
    on getting data of different types below. If you need to enter the data values to several attributes, specify them, separated by commas.</p>

<h4>Item image display</h4>
<p>To add a link to the service image, specify the <b>data-image_(image suffix)="src"</b> attribute. E.g.:</p>

<pre><code>
        &lt;img data-image_q="src" data-title="alt" src="images/_blank.png" alt=""/&gt;
    </code></pre>

<p>With the help of the image suffix, you can specify the desired image size. You can use the following values:</p>

<ul class="marked-list">
    <li>s: 75px75px;</li>
    <li>q: 150pх150px;</li>
    <li>t: 100px on the larger side;</li>
    <li>m: 240px on the larger side;</li>
    <li>n: 320px on the larger side;</li>
    <li>-: 500px on the larger side;</li>
    <li>z: 640px on the larger side;</li>
    <li>c: - 800px on the larger side;</li>
    <li>b: - 1024px on the larger side;</li>
    <li>h: - 1600px on the larger side;</li>
    <li>k: - 2048px on the larger side;</li>
    <li>o: - original image.</li>
</ul>

<h4>Item link display</h4>

<p>To display the service image link, add the <b>data-link="href,text"</b> attribute. For example, to display a link with text, use the following markup:</p>

<pre><code>
        &lt;a href="#" data-link="href,text"&gt;&lt;/a&gt;
    </code></pre>

<h4>Item author display</h4>

<p>To display the element author and specify the e-mail, add the <b>data-author_name="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;p data-author_name="text"&gt;&lt;/p&gt;
    </code></pre>

<p>To display the author without the e-mail, please use the <b>data-author="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;p data-author="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Item tags display</h4>

<p>To display item tags, add the <b>data-tags="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;p data-tags="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Item title display</h4>

<p>To display item title, add the <b>data-title="text"</b> attribute. E.g.:</p>

<pre><code>
        &lt;p data-title="text"&gt;&lt;/p&gt;
    </code></pre>

<h4>Adding date display</h4>
<p>To display the item adding date, add the <b>data-dating="text"</b> attribute. To display the date in <b>YY-MM-DD</b>, specify the  <b>data-datetime="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;time data-dating="text" data-datetime="datetime"&gt;&lt;/time&gt;
    </code></pre>

<h4>Item description display    </h4>
<p>To display the item description, specify the <b>data-description="text"</b> attribute. E.g.:</p>
<pre><code>
        &lt;p data-description="text"&gt;&lt;/p&gt;
    </code></pre>