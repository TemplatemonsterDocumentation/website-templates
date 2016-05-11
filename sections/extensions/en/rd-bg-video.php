<h3>RD Background Video</h3>
<p>Intense uses <b>RD Background Video</b> for adding a page background video.
  The basic marking looks the following way:</p>

<pre><code>
        &lt;div
                data-rd-video-path="video/bg-video-1/bg-video-1"
                data-rd-video-image-xs="26"
                data-rd-video-image-sm="26"
                data-rd-video-image-md="37"
                data-rd-video-image-lg="74"
                data-rd-video-image-xlg="100"
                class="rd-video"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>File requirements</h4>
<p>This plugin can adopt the video quality to Internet speed. To achieve this, prepare 5 versions of the video with different extensions for the correct functioning of the script.
  Moreover, prepare 5 version of the image with <b>*.jpg</b> extension for image
  display on mobile devices or PCs with low Internet speed.</p>
<p>Please name the files the following way:</p>
<p>video-(suffix).mp4 <br>
    video-image-(suffix).jpg</p>
<p>Here is the list of extensions, which you should prepare, and their suffixes:</p>

<ul class="marked-list">
    <li>
      1920х1080 - xlg (video-xlg.mp4);
    </li>
    <li>
      1280х720 - lg (video-lg.mp4);
    </li>
    <li>
      854х480 - md (video-md.mp4);
    </li>
    <li>
      640х360 - sm (video-sm.mp4);
    </li>
    <li>
      380х240 - xs (video-xs.mp4).
    </li>
</ul>

<p>As a result, you should have 10 files: 5 video files and 5 images.</p>

<h4>Changing the background video</h4>

<p>To change the background video in the existing section of HTML marking, change the video path in <b>'data-rd-video-path'</b> data attribute.
  You shouldn’t specify the video extension, just specify the filename, and the script will automatically select the right format.</p>
<p>E.g.:</p>

<pre><code>
        &lt;div data-rd-video-path="video/bg-video-1/bg-video-1"&gt;&lt;/div&gt;
    </code></pre>
<p>Moreover, to correctly determine Internet speed, specify the size of each image in KB with the help of attributes. Attribute suffixes are specified in <b>"File requirements"</b> section.</p>
<p>E.g.:</p>

<pre><code>
        &lt;div
                data-rd-video-path="video/bg-video-1/bg-video-1"
                data-rd-video-image-xs="26" data-rd-video-image-sm="26"
                data-rd-video-image-md="37"
                data-rd-video-image-lg="74"
                data-rd-video-image-xlg="100"
                class="rd-video"&gt;
            ...
        &lt;/div&gt;
    </code></pre>