<h3>Owl Carousel</h3>
<p>HTML Website Template uses <b>Owl-carousel.js</b> extension on the template pages with the advanced <b>data-API</b> user interface.</p>

<pre><code>
        &lt;!-- Owl Carousel --&gt;
        &lt;div class="owl-carousel"&gt;
            &lt;div class="owl-item"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="owl-item"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="owl-item"&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Carousel loop setup</h4>
<p>To set up carousel loop, use <b>'data-loop'</b> attribute (true/false, ‘true’ by default) for the target element with <b>.owl-carousel</b> class.</p>
<p>Например,</p>
<pre><code>
        &lt;div class="owl-carousel" data-loop="false"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Carousel autoplay setup</h4>
<p>    Owl Carousel autoplay is disabled by default. To enable it, use the <b>'data-autoplay</b> attribute with the <b>'true'</b> value: </p>
<pre><code>
        &lt;div class="owl-carousel" data-autoplay="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Carousel items display setup</h4>
<p>    Owl carousel supports displaying one or several carousel elements at the same time. To set up the carousel items display, use the corresponding <b>'data-items'</b> and <b>'data-*-items'</b> attributes.</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>data-items="N"</dt>
            <dd>displays N carousel items by default (default value = 1).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-xs-items="N"</dt>
            <dd>displays N carousel items, starting from XS screen resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-sm-items="N"</dt>
            <dd>displays N carousel items, starting from SM screen resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-md-items="N"</dt>
            <dd>displays N carousel items, starting from MD screen resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-lg-items="N"</dt>
            <dd>displays N carousel items, starting from LG screen resolution.</dd>
        </dl>
    </li>
</ol>

<p>where N the number of the items displayed.</p>
<p>E.g.: </p>
<pre><code>
        &lt;div class="owl-carousel" data-items="2" data-xs-items="3" data-lg-items="4"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<p>In this example, the default carousel will display 2 elements, on xs, sm and md screen resolutions - 3 elements, on lg screen resolution - 4 elements.</p>
<h4>Carousel navigation setup</h4>
<p>    To display the navigation elements "Prev"/"Next" in Owl Carousel, use the data attribute <b>data-nav="true"</b> for the target carousel:</p>


<pre><code>
        &lt;div class="owl-carousel" data-nav="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Carousel pagination setup</h4>

<p>To display pagination in Owl Carousel, use data attribute <b>data-dots="true"</b> for the target carousel:</p>
<pre><code>
        &lt;div class="owl-carousel" data-dots="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>To define the pagination step, please use the attribute <b>data-dots-each="N"</b>.</p>
<pre><code>
        &lt;div class="owl-carousel" data-dots="true" data-dots-each="1"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>Where N - is the number of the elements needed.</p>

<h4>Carousel stage padding setup</h4>

<p>    To define the carousel stage padding, please use the <b>data-*-stage-padding="N"</b> attribute:</p>

<pre><code>
        &lt;div class="owl-carousel" data-xs-stage-padding="30"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Carousel margin setup</h4>

<p>    To set up a carousel margin, please use the data attribute <b>data-*-margin="N"</b> (by default = 30).</p>
<pre><code>
        &lt;div class="owl-carousel" data-xs-margin="15"&gt;
            ...
        &lt;/div&gt;
    </code></pre>