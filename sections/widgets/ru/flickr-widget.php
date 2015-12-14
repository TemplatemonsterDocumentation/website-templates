<h3>Flickr Widget</h3>

<h6>HTML Website Templates use <b>jflickrfeed.js</b> exetnsion to obtain data from <a href="https://www.flickr.com/">https://www.flickr.com/</a> service on a webpage.</h6>

<h4>Inserting widget to page</h4>

<p>Basic widget HTML code structure for single item display appears as follows:</p>

<pre><code>&lt;div class="flickr" data-flickr-id="47302490@N05"&gt;
    &lt;div data-type="flickr-item"&gt;
        &lt;img data-image_q="src" data-title="alt" src="images/_blank.png" alt=""/&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>You can display unlimited number of items or use this widget for few times on same page. You can also integrate this extension to any external script (like carousel, gallery, etc.).  Any HTML structure is available for widget content. For example, you can use ТМ Grid system for convenient items arrangement. The only requirement is to have an item with
    <b>data-type=”flickr-item”</b> data attribute.</p>

<h4>Flickr account setup</h4>

<p>In order to define user, you should specify user ID at <b>data-id</b> attribute. For instance:</p>

<code>&lt;div class="flickr" data-flickr-id="47302490@N05"&gt;</code>

<p>User ID can be found at the following link:</p>

<ul class="marked-list">
    <li><a href="http://idgettr.com/">http://idgettr.com/.</a></li>
</ul>

<p>In order to obtain data from several accounts you should specify several IDs in <b>data-id</b> attribute, separating them by commas.</p>

<h4>Data filtering configuration</h4>

<p>In order to filter data by certain tags you should add <b>data-tags</b> attribute. To specify couple of tags, they should be separated by commas. For example:</p>

<code>&lt;div class="flickr" data-flickr-id="47302490@N05,48444528@N07" data-flickr-tags="webdesign, baseball" data-flickr-tagmode="any"&gt;</code>

<p>where, <b>data-flickr-tagmode</b> attribute is responsible for the type of filtration by tags and takes 2 values:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>any</dt>
            <dd>display item if it is tagged at least by one of tags;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>all</dt>
            <dd>display item if it is tagged by all of tags listed.</dd>
        </dl>
    </li>
</ul>


<h4>Date output format configuration</h4>

<p>In order to configure date output format, you should add <b>data-flickr-date-format</b> data attribute. For example:</p>

<code>&lt;div class="twitter" data-flickr-date-format="%b/%d/%Y"&gt;</code>

<p>where</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>%d</dt>
            <dd>number output(1,2,3);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%Y</dt>
            <dd>full year format output(2011, 2013, 2015);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%y</dt>
            <dd>2 last digits of year output(11, 13, 15);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%m</dt>
            <dd>month number output(1,2,3);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%B</dt>
            <dd>full month name output(January,February, March);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>%b</dt>
            <dd>short month name output(Jan, Feb, Mar).</dd>
        </dl>
    </li>
</ul>

<p>By default date is displayed in <b>Oct/30/2015</b> format.</p>


<h4>Data language configuration</h4>

<p>In order to change content language, you should use <b>data-lang</b> attribute. For example:</p>

<code>&lt;div class="flickr" data-flickr-id="47302490@N05,48444528@N07" data-flickr-lang="en-us"&gt;</code>

<p>Valid values are:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term"><dt>de-de</dt> <dd>German language;</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>en-us</dt> <dd>English language;</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>es-us</dt> <dd>Spanish language;</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>fr-fr</dt> <dd>French language;</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>it-it</dt> <dd>Italian language;</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>ko-kr</dt> <dd>Korean language;</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>pt-br</dt> <dd>Portuguese language;</dd></dl>
    </li>
    <li>
        <dl class="inline-term"><dt>zh-hk</dt> <dd>Chinese language.</dd></dl>
    </li>
</ul>


<h4>Correct widget item item structure creating</h4>

<p>Item data can be obtained inside of block with <b>data-type=”flickr-item”</b> attribute only. For example:</p>

<pre><code>&lt;div data-type="flickr-item"&gt;
    &lt;img data-image_q="src" data-title="alt" src="images/_blank.png" alt=""/&gt;
&lt;/div&gt;
</code></pre>

<h4>Widget operating logic</h4>

<p>In order to obtain widget item data you should specify the following attribute:</p>

<p class="text-center"><b>data-(data name)=”target”</b></p>

<p>where target is an attribute, in which data will be written. If target is set to “<b>text</b>”, data will be written to tag by using plain text. Below you can find examples to obtain various data. If the data value has to be recorded in a number of attributes, they should be separated by commas.</p>


<h4>Item image output</h4>

<p>In order to get service image link you should use <b>data-image_(image suffix)=”src”</b> attribute. For example:</p>

<code>&lt;img data-image_q="src" data-title="alt" src="images/_blank.png" alt=""/&gt;</code>

<p>Image suffix allows us to define preferable image output size. Following values can be used:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>s:</dt>
            <dd>75px75px;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>q:</dt>
            <dd>150pх150px;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>t:</dt>
            <dd>100px for bigger side;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>m:</dt>
            <dd>240px for bigger side;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>n:</dt>
            <dd>320px for bigger side;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>-:</dt>
            <dd>500px for bigger side;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>z:</dt>
            <dd>640px for bigger side;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>c:</dt>
            <dd>800px for bigger side;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>b:</dt>
            <dd>1024px for bigger side;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>h:</dt>
            <dd>1600px for bigger side;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>k:</dt>
            <dd>2048px for bigger side;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>o:</dt>
            <dd>original image.</dd>
        </dl>
    </li>
</ul>


<h4>Item link output</h4>

<p>In order to get service item link you should use <b>data-link=”href,text”</b> attribute. For example, to display link with link text:</p>

<code>&lt;a href="#" data-link="href,text"&gt;&lt;/a&gt;</code>


<h4>Item author output</h4>

<p>In order to get item author info with e-mail specified, you should use <b>data-author_name=”text”</b> attribute. For example:</p>

<code>&lt;p data-author_name="text"&gt;&lt;/p&gt;</code>

<p>In order to get item author info without e-mail, you should use <b>data-author=”text”</b> attribute. For example:</p>

<code>&lt;p data-author="text"&gt;&lt;/p&gt;</code>


<h4>Item tags output</h4>

<p>In order to get item tags you should use <b>data-tags=”text”</b> attribute. For example:</p>

<code>&lt;p data-tags="text"&gt;&lt;/p&gt;</code>


<h4>Item title output</h4>

<p>In order to get item title you should use <b>data-title=”text”</b> attribute. For example:</p>

<code>&lt;p data-title="text"&gt;&lt;/p&gt;</code>


<h4>Item creating date output</h4>

<p>In order to get item creating date you should use <b>data-dating=”text”</b> attribute. To get date <b>YY-MM-DD</b> format attribute to use is data-datetime=”text”. For example:</p>

<code>&lt;time data-dating="text" data-datetime="datetime"&gt;&lt;/time&gt;</code>


<h4>Item description output</h4>

<p>In order to get item description you should use <b>data-description=”text”</b> attribute. For example:</p>

<code>&lt;p data-description="text"&gt;&lt;/p&gt;</code>

<p class="alert alert-warning">Please, note: item description is not always available in flickr service</p>