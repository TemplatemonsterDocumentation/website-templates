<h3>Vide - Background video</h3>

<h6>HTML Website Templates use <b>Vide.js</b> extension to implement background video functionality.</h6>

<h4>Files requirements</h4>

<h6>To ensure cross-browser functionality video should be prepared in several formats, such as:</h6>

<ul class="marked-list">
    <li><b>*.webm</b></li>
    <li><b>*.mp4</b></li>
    <li><b>*.ogv</b></li>
</ul>

<p>Please also prepare an image with <b>*.jpg</b>  extension to display it on mobile devices.</p>
<p>Feel free to follow this video tutorial to convert video:</p>
<ul class="marked-list">
    <li><a href="http://www.templatemonster.com/help/how-to-convert-video-to-web-formats.html">How to convert video to WEB formats;</a></li>
</ul>

<h4>Background video replacing</h4>
<p>In order to replace background video at the existing  HTML code section you should change path to video file in <b>data-vide-bg</b> data attribute. There is no need to specify video file extension, just file name is enough as script will automatically pick correct video format to play.</p>

<p>For example,</p>
<code>data-vide-bg="video/video-bg"</code>

<h4>Creating new section with background video</h4>

<p>In order to add video to section background you should edit target section code to appear the following way:</p>

<pre><code>&lt;section data-vide-bg="video/video-bg" class="vide"&gt;
    ...
&lt;/section&gt;</code></pre>