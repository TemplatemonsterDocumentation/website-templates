<h3>Isotope layout filter</h3>
<p>HTML Website Template uses Isotope for creating a layout filter.</p>

<h4>Adding Isotope to the page</h4>
<p>To insert <b>isotope</b> to the corresponding layout of the target page, you should just add the
  <b>'data-isotope-layout'</b> attribute to the target HTML marking and specify the corresponding layout mode:</p>
<pre><code>
        &lt;div class="row" data-isotope-layout="masonry"&gt;
            &lt;div class="col-sm-6 col-md-4"&gt;
                Item 1
            &lt;/div&gt;
            &lt;div class="col-sm-6 col-md-4"&gt;
                Item 2
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<p>Supported layout modes are the following:
</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>masonry </dt>
            <dd>elements are grouped randomly;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>fitRows </dt>
            <dd>elements are grouped horizontally;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>vertical </dt>
            <dd>elements are grouped vertically.</dd>
        </dl>
    </li>
</ol>

<p>To insert isotope to the layouts, which do not contain grid elements, you should define the <b>.isotope-item</b> class for every isotope element.
</p>
<pre><code>
        &lt;div data-isotope-layout="masonry"&gt;
            &lt;div class="isotope-item"&gt;
                Item 1
            &lt;/div&gt;
            &lt;div class="isotope-item"&gt;
                Item 2
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Attention: in this case, dimensions of Isotope elements should be set up manually. HTML Website Template offers the ready-made functionality only for the grid elements.</p>

<h4>Isotope item filter</h4>

<p>To add Isotope filters to a page, you should define a group of Isotope items with the help of the <b>'data-isotope-group'</b> attribute and define the corresponding filter types for each item:</p>

<pre><code>
        &lt;div data-isotope-group="gallery" data-isotope-layout="masonry"&gt;
            &lt;div class="isotope-item" data-filter="type-1"&gt;
                Item 1
            &lt;/div&gt;
            &lt;div class="isotope-item" data-filter="type-2"&gt;
                Item 2
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<p>Now, for items filtering it’s enough just to define the corresponding filter control buttons for the target group of Isotope items.</p>
<pre><code>
        &lt;button data-isotope-filter="*" data-isotope-group="gallery"&gt;
            Show All
        &lt;/button&gt;
        &lt;button data-isotope-filter="type-1" data-isotope-group="gallery"&gt;
            Type 1
        &lt;/button&gt;
        &lt;button data-isotope-filter="type-2" data-isotope-group="gallery"&gt;
            Type 2
        &lt;/button&gt;
    </code></pre>