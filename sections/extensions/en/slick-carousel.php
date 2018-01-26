<h3>Slick Carousel</h3>
<p>HTML Website Templates also use <b>Slick-carousel.js</b> for implementing carousel with extended data-API for interaction on template pages.
</p>

<pre>
  <code>
        &lt;!-- Slick Carousel --&gt;
        &lt;div class="slick-slider"&gt;
          &lt;div class="item"&gt;
            ...
          &lt;/div&gt;
          &lt;div class="item"&gt;
            ...
          &lt;/div&gt;
          &lt;div class="item"&gt;
            ...
          &lt;/div&gt;
        &lt;/div&gt;
  </code>
</pre>

<h4>Carousel autoplay setup</h4>
<p>Autoplay for Slick Carousel items in HTML Website templates is disabled by default. To enable the autoplay, use data-attribute <b>data-autoplay</b> with <b>true</b> value.</p>
<pre><code>
        &lt;div class="slick-slider" data-autoplay="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Carousel items display setup</h4>
<p>
  Owl carousel supports displaying one or several carousel items at the same time. To set up carousel items display, use the corresponding data-attributes: <b>data-items</b> and <b>data-*-items</b>.
</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>data-items="N"</dt>
            <dd>displays N items by default (default value = 1).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-xs-items="N"</dt>
            <dd>displays N carousel items, starting from XS resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-sm-items="N"</dt>
            <dd>displays N carousel items, starting from SM resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-md-items="N"</dt>
            <dd>displays N carousel items, starting from MD resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-lg-items="N"</dt>
            <dd>displays N carousel items, starting from LG resolution.</dd>
        </dl>
    </li>
</ol>
<p>, where N - a digit displaying a number of necessary elements.</p>

<p>For example: </p>
<pre><code>
        &lt;div class="slick-slider" data-items="2" data-xs-items="3" data-lg-items="4"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<p>In this example, the carousel will display 2 elements by default, on xs, sm and md resolutions - 3 elements, on lg resolution - 4 elements.
</p>

<h4>Carousel navigation setup</h4>

<p>To display "Back"/"Forward" controls in Slick Carousel, use  <b>data-nav="true"</b> data-attribute for the target carousel.</p>

<pre><code>
        &lt;div class="slick-slider" data-nav="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Carousel pagination setup</h4>

<p>
  To display pagination in Slick Carousel, use <b>data-dots="true"</b> data-attribute for the target carousel.
</p>
<pre><code>
        &lt;div class="slick-slider" data-dots="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Carousel navigation setup </h4>

<p>
  To display navigation in form of arrows in Slick Carousel, use data-attribute <b>data-arrows="true"</b> for the target carousel.
</p>
<pre>
  <code>
        &lt;div class="slick-slider" data-arrows="true"&gt;
            ...
        &lt;/div&gt;
    </code>
</pre>

<h4>Vertical carousel setup</h4>

<p>To create a vertical carousel with the help of Slick Carousel, use <b>data-vertical="true"</b> attribute for the target carousel.</p>
<pre>
  <code>
        &lt;div class="slick-slider" data-vertical="true"&gt;
            ...
        &lt;/div&gt;
    </code>
</pre>




