<h3>Flex Grid System</h3>
<p>HTML Website Template uses the specially developed Flex Grid system. This system in a more multipurpose and flexible solution, in comparison to Bootstrap Grid. </p>
<p>Different aspects of default Flex Grid functionality are covered in the following table:</p>

<table class="table table--skin-1">
    <tr>
        <th></th>
        <th>XXS Devices <br>(< 480px)</th>
        <th>XS Devices <br>(≥ 480px)</th>
        <th>SM Devices <br>(≥ 768px)</th>
        <th>MD Devices <br>(≥ 992px)</th>
        <th>LG Devices <br>(≥ 1200px)</th>
        <th>Xl Devices <br>(≥ 1800px)</th>
    </tr>
    <tr>
        <td>Grid conduct</td>
        <td>Instant flow</td>
        <td colspan="5">Collapsed to start, horizontal above breakpoints</td>
    </tr>
    <tr>
        <td>Container width</td>
        <td colspan="2">300~450px, Fluid</td>
        <td>750px</td>
        <td>970px</td>
        <td>1170px</td>
        <td>1770px</td>
    </tr>
    <tr>
        <td>Prefix class</td>
        <td>.cell-</td>
        <td>.cell-xs-</td>
        <td>.cell-sm-</td>
        <td>.cell-md-</td>
        <td>.cell-lg-</td>
        <td>.cell-xl-</td>
    </tr>
    <tr>
        <td># of column</td>
        <td>1</td>
        <td colspan="5">12</td>
    </tr>
    <tr>
        <td>Column width</td>
        <td>100%</td>
        <td>~25 → ~37px</td>
        <td>~62px</td>
        <td>~81px</td>
        <td>~97px</td>
        <td>~149px</td>
    </tr>
    <tr>
        <td>Gutter width</td>
        <td colspan="6">30px (15px on each column side)</td>
    </tr>
    <tr>
        <td>Nesting</td>
        <td colspan="6">Yes</td>
    </tr>
    <tr>
        <td>Offset</td>
        <td>No</td>
        <td colspan="5">Yes</td>
    </tr>
    <tr>
        <td>Columns order control</td>
        <td>No</td>
        <td colspan="5">Yes</td>
    </tr>
    <tr>
        <td>Horizontal align control</td>
        <td>No</td>
        <td colspan="5">Yes</td>
    </tr>
    <tr>
        <td>Vertical align contro</td>
        <td>No</td>
        <td colspan="5">Yes</td>
    </tr>
    <tr>
        <td>Reverse</td>
        <td>No</td>
        <td colspan="5">Yes</td>
    </tr>
</table>

<h4>Nested columns</h4>
<p>To create nested columns in Grid system, add a new .range and <b>.cell-*-*</b> target columns to an existing column.</p>

<table class="table table--skin-2">
    <tr>
        <td colspan="6">
            Level  1: .cell-*-9
            <table class="table">
                <tr>
                    <td>Level  2: .cell-*-6</td>
                    <td>Level  2: .cell-*-6</td>
                </tr>
            </table>
        </td>
        <td>Lvl.1: .cell-*-1</td>
        <td>Lvl.1: .cell-*-1</td>
        <td>Lvl.1: .cell-*-1</td>
    </tr>
</table>

<p>E.g.:</p>

<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-9"&gt;
                Level 1: .cell-md-9
                &lt;div class="range"&gt;
                    &lt;div class="cell-md-6"&gt;
                        Level 2: .cell-md-6
                    &lt;/div&gt;
                    &lt;div class="cell-md-6"&gt;
                        Level 2: .cell-md-6
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">
    Attention: nested columns width is determined based on parent column width, not the container width.
</p>

<h4>Columns offset</h4>
<p>To add offset for a column, use the <b>.cell-*-preffix-*</b> class:</p>

<table class="table">
    <tr>
        <td class="col-4"></td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td class="col-4"></td>
    </tr>
</table>

<p>E.g.,</p>

<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-4 cell-md-preffix-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Columns reverse</h4>
<p>To reverse columns order in a .range, add the <b>.range-*</b> class or <b>.range-*-reverse</b> class:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-reverse</dt>
            <dd>inverts columns order, starting from the specified resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.range-*</dt>
            <dd>restores the initial columns order, if <b>.range-*-reverse</b> is used for a smaller resolution.</dd>
        </dl>
    </li>
</ul>
<p>E.g.:</p>

<pre><code>
        &lt;div class="range range-xs-reverse range-sm"&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Disabling gutter</h4>

<p>To disable column gutter, add the <b>.range-condensed</b> class to the parent block with <b>.range</b> class.</p>
<p>E.g.:</p>
<pre><code>
        &lt;div class="range range-condensed"&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Vertical alignment control</h4>
<p>To align columns vertically, use one if the following classes:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-middle</dt>
            <dd>aligns all the nested columns of the 1st level in the middle;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-1">.cell-*-6</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>
<p>E.g.:</p>
<pre><code>
        &lt;div class="range range-md-middle"&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-bottom</dt>
            <dd>aligns all the nested 1st-level columns in the bottom;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-1">.cell-*-6</td>
    </tr>
</table>
<p>E.g.:</p>
<pre><code>
        &lt;div class="range range-md-bottom"&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-top</dt>
            <dd> aligns all the nested 1st-level columns on top;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6 bg-1">.cell-*-6</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>
<p>E.g.:</p>
<pre><code>
        &lt;div class="range range-md-top"&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.cell-*-middle</dt>
            <dd>aligns the target column in the middle;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-2">.cell-*-6.cell-*-middle</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>

<p>E.g.:</p>

<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6 cell-md-middle"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>



<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.cell-*-top</dt>
            <dd>aligns the target column on top;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6 bg-2">.cell-*-6.cell-*-top</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>

<p>E.g.:</p>
<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6 cell-md-top"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.cell-*-bottom</dt>
            <dd>aligns the target column to the bottom.</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-2">.cell-*-6.cell-*-bottom</td>
    </tr>
</table>

<p>E.g.:</p>
<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-6"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6 cell-md-bottom"&gt;
                Level 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Horizontal align control</h4>

<p>To align columns horizontally, use one of the following classes:</p>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-left</dt>
            <dd>aligns nested columns to the left;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-4 bg-1" >.cell-*-4</td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td class="col-4">&nbsp;</td>
    </tr>
</table>
<p>E.g.:</p>
<pre><code>
        &lt;div class="range range-md-left"&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-center</dt>
            <dd>aligns 1-st-level nested columns in the middle;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td></td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td></td>
    </tr>
</table>
<p>E.g.:</p>

<pre><code>
        &lt;div class="range range-md-center"&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-right</dt>
            <dd>aligns 1st-level nested columns to the right;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td class="col-4">&nbsp;</td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td class="col-4 bg-1">.cell-*-4</td>
    </tr>
</table>
<p>E.g.:</p>

<pre><code>
        &lt;div class="range range-md-right"&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-justify </dt>
            <dd> justifies the nested 1st level columns;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td class="col-4 bg-1" >.cell-*-4</td>
        <td class="col-4">&nbsp;</td>
        <td class="col-4 bg-1">.cell-*-4</td>
    </tr>
</table>
<p>E.g.:</p>

<pre><code>
        &lt;div class="range range-md-justify"&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-around </dt>
            <dd>justifies the nested 1st-level columns and adds an offset on both sides:</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td></td>
        <td class="col-4 bg-1" >.cell-*-4</td>
        <td class="col-3">&nbsp;</td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td></td>
    </tr>
</table>
<p>E.g.:</p>

<pre><code>
        &lt;div class="range range-md-around">
            &lt;div class="cell-md-4">
                Level 1: .cell-md-4
            &lt;/div>
            &lt;div class="cell-md-4">
                Level 1: .cell-md-4
            &lt;/div>
        &lt;/div>
    </code></pre>

<h4>Column order control</h4>
<p>To change grid elements order, use the <b>.cell-RS-push-X</b> class, where <b>RS</b> - the target screen resolution, <b>X</b> - order. E.g.:</p>
<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-4 cell-md-push-2"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4 cell-md-push-1"&gt;
                Level 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Attention: if you use classes to control column order, define the order of all elements in  the row.</p>