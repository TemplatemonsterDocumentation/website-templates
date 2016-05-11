<h3>Icons</h3>
<h6>Intense contains more than 2500 ready-made icons.
    A list of all icons can be found on the <b>Components > Toolkit Components > Icons</b> page. To add an icon to the target page, use the following marking:</h6>
<pre><code>
        &lt;span class="your-icon-class"&gt;&lt;/span&gt;
    </code></pre>
<p>    A list of classes for adding target icons is also available on the <b>Components > Toolkit Components > Icons</b> page.</p>
<p>In Intense, icon styling is defined as button styling:</p>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.icon</dt>
            <dd>the basic icon class;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.icon-xs, .icon-sm, .icon-md, .icon-lg, .icon-xl</dt>
            <dd>icon layout classes, responsible for its size;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.icon-default, .icon-primary, ...</dt>
            <dd>icon styling classes, responsible for its color and background.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>fa-*, glyph-*, mdi-* ...</dt>
            <dd>classes, responsible for icon code (symbol) insert.</dd>
        </dl>
    </li>
</ul>
<p>Here is an example:</p>
<pre><code>
         &lt;span href="#" class="icon icon-md icon-default"&gt;&lt;/span&gt;
    </code></pre>

<p>In this example, one creates a middle-sized icon  with primary template color styling.</p>