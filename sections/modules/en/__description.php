<h2 class="item5">Modules</h2>

<h3>TM Box System</h3>
<p>HTML Website Templates include specially prepared TM Box system, which is an enhanced and expanded version of .media object in Bootstrap.</p>
<p>TM Box system is a complex of classes, prepared for easy control of the target content  layout, namely, changing the order of the output elements from vertical to horizontal and vice versa.</p>
<p>TM BOX system work principle is built on using <b>.box</b>, <b>.box-*</b>, <b>.box-*-clear</b>, <b>.box__left</b>,
    <b>.box__body</b> and <b>.box__right</b> classes.</p>
<p>You can find the list of classes available below:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.box, .box-xs, .box-sm, .box-md, .box-lg</dt>
            <dd>enables horizontal output mode for 1st level  nested elements .box__body, .box__left, .box__right.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.box-xs-clear, .box-sm-clear, .box-md-clear, .box-lg-clear</dt>
            <dd>disables horizontal output mode for 1st level  nested elements .box__body, .box__left, .box__right.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.box-*-rtl, .box-*-ltr</dt>
            <dd>controls the order of the output elements in .box item to target resolution: from left to the right, or from right to the left.</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-4 bg-1">.box__left</td>
        <td class="bg-1">.box__body</td>
    </tr>
</table>

<p>For example,</p>

<pre><code>&lt;div class="box box-xs-clear box-sm"&gt;
        &lt;div class="box__left"&gt;
        Box Left Content
        &lt;/div&gt;
        &lt;div class="box__body"&gt;
        Box Body Content
        &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>In this example, <b>.box__left</b> and <b>.box__right</b> blocks will be displayed in horizontal row on screens with width
    <b>< 480px</b>, for screens with width <b>≥ 480px</b> - in vertical row, for screens <b>≥ 768px</b> - in horizontal row again.</p>