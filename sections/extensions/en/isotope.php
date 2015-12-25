<h3>Isotope. Layout filter</h3>

<figure class="img-polaroid">
    <img src="img/isotope.png" alt="">
</figure>

<h6>HTML Website Templates use <b>Isotope</b> extension for layout filters creating.</h6>

<h4>Implementing Isotope to page</h4>

<p>In order to implement isotope to target page corresponding layout you should just add <b>data-isotope-layout</b> data attribute to the target HTML structure, specifying needed layout type.</p>

<pre><code>&lt;div class="row" data-isotope-layout="masonry"&gt;
    &lt;div class="col-sm-6 col-md-4"&gt;
        Item 1
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4"&gt;
        Item 2
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>The following layout types are available:</p>

<ol class="index-list">
    <li><b>masonry;</b></li>
    <li><b>fitRows;</b></li>
    <li><b>vertical.</b></li>
</ol>

<p>In order to implement isotope to layouts that do not include grid elements, you should additionally define <b>.isotope-item</b> class for each isotope item.</p>

<pre><code>&lt;div data-isotope-layout="masonry"&gt;
    &lt;div class="isotope-item"&gt;
        Item 1
    &lt;/div&gt;
    &lt;div class="isotope-item"&gt;
        Item 2
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p class="alert alert-warning">Please, note: in this case, Isotope items sizes have to be defined manually. HTML Website Template include ready-to-use functionality for grid items only.</p>

<h4>Isotope items filtering</h4>

<p>In order to implement isotope filters to page you should define group of isotope items by using <b>data-isotope-group</b> data attribute and corresponding filter types for each item.</p>

<pre><code>&lt;div data-isotope-group="gallery" data-isotope-layout="masonry"&gt;
    &lt;div class="isotope-item" data-filter="type-1"&gt;
        Item 1
    &lt;/div&gt;
    &lt;div class="isotope-item" data-filter="type-2"&gt;
        Item 2
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>In order to filter items you should just define corresponding filter control buttons at target Isotope items group.</p>

<pre><code>
&lt;div class="isotope-filters">
    &lt;button data-isotope-filter="*" data-isotope-group="gallery"&gt;
        Show All
    &lt;/button&gt;
    &lt;button data-isotope-filter="type-1" data-isotope-group="gallery"&gt;
        Type 1
    &lt;/button&gt;
    &lt;button data-isotope-filter="type-2" data-isotope-group="gallery"&gt;
        Type 2
    &lt;/button&gt;
&lt;/div&gt;
</code></pre>
