<h3>Responsive Units</h3>
<h6>HTML Website Template has a new content management system, based on Flex. It’s called Responsive Units. Using these units, you can easily manage the
    layout of the elements: embed them in a horizontal or vertical way at any resolution, manage their location relative to each other, etc.</h6>
<p>Responsive Units operating principle is somewhat  similar to the operating principle of Media in Bootstrap.</p>
<p>Responsive Units logics meets the requirements of Mobile First.
    The basic Responsive Unit markup looks the following way:</p>
<pre><code>
        &lt;div class="unit unit-horizontal"&gt;
            &lt;div class="unit-left"&gt;
                Unit Left
            &lt;/div&gt;
            &lt;div class="unit-body"&gt;
                Unit Body
            &lt;/div&gt;
            &lt;div class="unit-right"&gt;
                Unit Right
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>How to align elements relative to each other</h4>
<p>To align elements relative to each other, use the <b>.unit-*-middle</b>, <b>.unit-*-top</b>, <b>.unit-*-bottom</b> classes.
    So, if you need to align elements in a Unit relative to each other in the middle starting from <b>XS</b> resolution, use the following code:</p>

<pre><code>
        &lt;div class="unit unit-horizontal unit-xs-middle"&gt;
            &lt;div class="unit-left"&gt;
                Unit Left
            &lt;/div&gt;
            &lt;div class="unit-body"&gt;
                Unit Body
            &lt;/div&gt;
            &lt;div class="unit-right"&gt;
                Unit Right
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>How to change layout from horizontal to vertical </h4>
<p>To change the layout of elements in a Responsive Unit from horizontal to vertical
    for different resolutions, use the corresponding combination of *,<b> unit-*-horizontal</b> or <b>unit-</b>*, <b>unit-*-vertical</b> for the target resolution.
    So, if you need the default Responsive Units layout to be vertical, but become horizontal at the <b>SM</b> screen resolution, use the following example:</p>

<pre><code>
        &lt;div class="unit unit-vertical unit-sm unit-sm-horizontal">
            &lt;div class="unit-left">
                Unit Left
            &lt;/div>
            &lt;div class="unit-body">
                Unit Body
            &lt;/div>
            &lt;div class="unit-right">
                Unit Right
            &lt;/div>
        &lt;/div>
    </code></pre>

<h4>How to reverse the layout of the elements</h4>
<p>You can also invert the layout of the elements in a Responsive Unit. So, if you need a Responsive Unit to be vertical and to have direct display order of elements, and starting
    from <b>SM</b> resolution become horizontal and have the reverse order of elements <b>(right-body-left)</b>, use the following example:</p>
<pre><code>
        &lt;div class="unit unit-vertical unit-sm unit-sm-horizontal unit-sm-inverse"&gt;
            &lt;div class="unit-left"&gt;
                Unit Left
            &lt;/div&gt;
            &lt;div class="unit-body"&gt;
                Unit Body
            &lt;/div&gt;
            &lt;div class="unit-right"&gt;
                Unit Right
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>