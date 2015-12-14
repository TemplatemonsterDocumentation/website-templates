<h3>TM Grid System</h3>
<p>HTML Website Templates include Flex-based TM Grid system, that is especially prepared. This system provides you with
    more complex and flexible solution,comparing to Bootstrap Grid. TM Grid class naming format is similar to Bootstrap
    Grid one for usability.</p>
<p>Table below presents various aspects of TM Grid system default way of working:</p>

<table class="table table--skin-1">
    <tr>
        <th></th>
        <th>XXS Devicesbr <br>(< 480px)</th>
        <th>XS Devices <br>(≥ 480px)</th>
        <th>SM Devices <br>(≥ 768px)</th>
        <th>MD Devices <br>(≥ 992px)</th>
        <th>LG Devices <br>(≥ 1200px)</th>
    </tr>
    <tr>
        <td>Grid behaviour</td>
        <td>Instant flow</td>
        <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
    </tr>
    <tr>
        <td>Container width</td>
        <td colspan="2">300~450px, Fluid</td>
        <td>750px</td>
        <td>970px</td>
        <td>1170px</td>
    </tr>
    <tr>
        <td>Class prefix</td>
        <td>.col-</td>
        <td>.col-xs-</td>
        <td>.col-sm-</td>
        <td>.col-md-</td>
        <td>.col-lg-</td>
    </tr>
    <tr>
        <td>columns #</td>
        <td>1</td>
        <td colspan="4">12</td>
    </tr>
    <tr>
        <td>Columns width</td>
        <td>100%</td>
        <td>~25 → ~37px</td>
        <td>~62px</td>
        <td>~81px</td>
        <td>~97px</td>
    </tr>
    <tr>
        <td>Gutter width</td>
        <td colspan="5">30px (2 x15px, at both column sides)</td>
    </tr>
    <tr>
        <td>Nesting</td>
        <td colspan="5">Yes</td>
    </tr>
    <tr>
        <td>Offsets</td>
        <td>No</td>
        <td colspan="4">Yes</td>
    </tr>
    <tr>
        <td>Columns output order control</td>
        <td>No</td>
        <td colspan="4">Yes</td>
    </tr>
    <tr>
        <td>Horizontal alignment control</td>
        <td>No</td>
        <td colspan="4">Yes</td>
    </tr>
    <tr>
        <td>Vertical alignment control</td>
        <td>No</td>
        <td colspan="4">Yes</td>
    </tr>
    <tr>
        <td>Inverting</td>
        <td>No</td>
        <td colspan="4">Yes</td>
    </tr>
</table>

<p class="alert alert-warning">Please note: grid behaviour and its corresponding breakpoints may differ from template to
    template.</p>

<h4>Columns nesting</h4>
<p>In order to implement columns nesting in Grid system, add a new <b>.row</b> and target <b>.col-*-*</b> columns set into existing
    column.</p>

<table class="table table--skin-2">
    <tr>
        <td colspan="6">
            Level 1: .col-*-9
            <table class="table">
                <tr>
                    <td>Level 2: .col-*-6</td>
                    <td>Level 2: .col-*-6</td>
                </tr>
            </table>
        </td>
        <td>Level 1: .col-*-1</td>
        <td>Level 1: .col-*-1</td>
        <td>Level 1: .col-*-1</td>
    </tr>
</table>

<p>For instance,</p>

<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-md-9"&gt;
        Level 1: .col-md-9
        &lt;div class="row"&gt;
            &lt;div class="col-md-6"&gt;
                Level 2: .col-md-6
            &lt;/div&gt;
            &lt;div class="col-md-6"&gt;
                Level 2: .col-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p class="alert alert-warning">Please note: nested columns width calculation is based on the parent column width instead of main container.</p>


<h4>Columns offset</h4>
<p>In order to add certain column offset you should use corresponding <b>.col-*-preffix-*</b> class.</p>

<table class="table">
    <tr>
        <td class="col-4"></td>
        <td class="col-4 bg-1">.col-*-4</td>
        <td class="col-4"></td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-md-4 col-md-preffix-4"&gt;
            Level 1: .col-md-4
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Columns inverting</h4>
<p>In order to invert columns display order you should add corresponding <b>.row-*</b> or <b>.row-*-reverse</b> class into parent
    <b>.row</b>  class:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.row-*-reverse</dt>
            <dd>inverts columns display order, starting from dimensions specified.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.row-*</dt>
            <dd>returns regular columns display order in case .row-*-reverse was applied to lower dimension.</dd>
        </dl>
    </li>
</ul>

<p>For example,</p>

<pre><code>&lt;div class="row row-xs-reverse row-sm"&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>


<h4>Gutter disabling</h4>
<p>In order to disable columns gutter you should just add <b>.row-no-gutter</b> class to parent container with
    <b>.row</b> class.</p>

<p>For example,</p>

<pre><code>&lt;div class="row row-no-gutter"&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Columns vertical alignment management</h4>
<p>Use one of the following classes to align columns vertically:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.row-*-middle</dt>
            <dd>aligns all 1st level columns to the middle;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.col-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-1">.col-*-6</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row row-md-middle"&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.row-*-bottom</dt>
            <dd>pushes all 1st level columns to the bottom;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.col-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-1">.col-*-6</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row row-md-bottom"&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.row-*-top</dt>
            <dd>pushes all 1st level columns to the top;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.col-*-6</td>
        <td class="col-6 bg-1">.col-*-6</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row row-md-top"&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.col-*-middle</dt>
            <dd>aligns target column to the middle;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.col-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-2">.col-*-6.col-*-middle</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
    &lt;div class="col-md-6 col-md-middle"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.col-*-top</dt>
            <dd>aligns target column to the top;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.col-*-6</td>
        <td class="col-6 bg-2">.col-*-6.col-*-top</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
    &lt;div class="col-md-6 col-md-top"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.col-*-bottom</dt>
            <dd>aligns target column to the bottom.</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.col-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-2">.col-*-6.col-*-bottom</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-md-6"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
    &lt;div class="col-md-6 col-md-bottom"&gt;
        Level 1: .col-md-6
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>


<h4>Columns horizontal alignment management</h4>
<h6>Use of the following classes to align columns horizontally:</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.row-*-left</dt>
            <dd>aligns 1st level columns to the left;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-4 bg-1">.col-*-4</td>
        <td class="col-4 bg-1">.col-*-4</td>
        <td class="col-4">&nbsp;</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row row-md-left"&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.row-*-center</dt>
            <dd>aligns 1st level columns to the middle;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td></td>
        <td class="col-4 bg-1">.col-*-4</td>
        <td class="col-4 bg-1">.col-*-4</td>
        <td></td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row row-md-center"&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.row-*-right</dt>
            <dd>aligns 1st level columns to the right;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-4">&nbsp;</td>
        <td class="col-4 bg-1">.col-*-4</td>
        <td class="col-4 bg-1">.col-*-4</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row row-md-right"&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.row-*-justify</dt>
            <dd>aligns 1st level columns by width;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-4 bg-1">.col-*-4</td>
        <td class="col-4"></td>
        <td class="col-4 bg-1">.col-*-4</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row row-md-justify"&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.row-*-around</dt>
            <dd>aligns 1st level columns by width with additional padding at the edges.</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td></td>
        <td class="col-4 bg-1">.col-*-4</td>
        <td class="col-3"></td>
        <td class="col-4 bg-1">.col-*-4</td>
        <td></td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="row row-md-around"&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Columns order display management</h4>
<p>In order to change grid items display order you should use <b>.col-RS-push-X</b> class, where RS stands for target dimensions, X stands for order. For example,</p>
<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-md-4 col-md-push-2"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
    &lt;div class="col-md-4 col-md-push-1"&gt;
        Level 1: .col-md-4
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p class="alert alert-warning">Please note: in case of using classes, responsible for columns display order management, you must determine each row  element order.</p>