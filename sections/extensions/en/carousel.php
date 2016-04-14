<h3>Owl Carousel - Carousel</h3>

<figure class="img-polaroid">
    <img src="img/carousel.png" alt="">
</figure>

<h6>Intense Template use <b>Owl-carousel.js</b> extension for carousel functionality implementing to template pages with extended data-API for interaction.</h6>

<p>Carousel default code structure appears the following way:</p>

<pre><code>&lt;!-- Owl Carousel --&gt;
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

<h4>Carousel loop configuration</h4>
<p>In order to enable carousel loop you should use <b>data-loop</b> data attribute (true/false, by default is set to true) for target item with
    <b>.owl-carousel</b> class.</p>
<p>For example,</p>
<pre><code>&lt;div class="owl-carousel" data-loop="false"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Carousel autoplay configuration</h4>
<p>HTML Website templates Owl Carousel has autoplay disabled by default.  In order to enable this feature you should use
    <b>data-autoplay</b> data attribute with value set to ‘true’.</p>

<pre><code>&lt;div class="owl-carousel" data-autoplay="true"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Carousel items display configuration</h4>

<p>Owl carousel allows to display one or couple of items at once. In order to manage carousel items display you should use corresponding data attributes
    <b>data-items</b> and <b>data-*-items</b>.</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>data-items=”N”</dt>
            <dd>shows N carousel items by default (default value = 1).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-xs-items=”N”</dt>
            <dd>shows N carousel items, starting from XS screen dimensions.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-sm-items=”N”</dt>
            <dd>shows N carousel items, starting from SM screen dimensions.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-md-items=”N”</dt>
            <dd>shows N carousel items, starting from MD screen dimensions.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-lg-items=”N”</dt>
            <dd>shows N carousel items, starting from LG screen dimensions.</dd>
        </dl>
    </li>
</ol>

<p>For example,</p>

<pre><code>&lt;div class="owl-carousel" data-items="2" data-xs-items="3" data-lg-items="4"&gt;
    ...
&lt;/div&gt;
</code></pre>

<p>This example shows that by default there will appear 2 carousel items, for xs, sm and md dimensions - 3 items, for lg dimensions - 4 items.</p>


<h4>Carousel navigation setup</h4>

<p>In order to display “Previous”/”Next” navigation in Owl Carousel you should use corresponding <b>data-nav=”true”</b> data attribute for target carousel.</p>

<pre><code>&lt;div class="owl-carousel" data-nav="true"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Carousel pagination setup</h4>
<p>In order to display pagination in Owl Carousel you should use corresponding <b>data-dots=”true”</b> data attribute for target carousel.</p>

<pre><code>&lt;div class="owl-carousel" data-dots="true"&gt;
    ...
&lt;/div&gt;
</code></pre>

<p>In order to define pagination dots display step you should use <b>data-dots-each=”N”</b> data attribute.</p>

<pre><code>&lt;div class="owl-carousel" data-dots="true" data-dots-each="1"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Carousel scene padding configuration</h4>

<p>In order to define carousel scene padding  you should use <b>data-*-stage-padding=”N”</b> data attribute.</p>

<pre><code>&lt;div class="owl-carousel" data-xs-stage-padding="30"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Carousel items padding configuration</h4>

<p>In order to define carousel items padding you should use <b>data-*-margin=”N”</b> data attribute (by default = 30).</p>

<pre><code>&lt;div class="owl-carousel" data-xs-margin="15"&gt;
    ...
&lt;/div&gt;
</code></pre>