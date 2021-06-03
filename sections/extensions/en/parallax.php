<h3>RD Parallax. Parallax script</h3>

<p>HTML Website Template Template use <b>RD Parallax</b> extension to implement parallax effects to page.</p>

<p>Basic script code structure appears as follows:</p>

<pre><code>&lt;!-- RD Parallax --&gt;
&lt;section class="rd-parallax"&gt;
    &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media"
         data-url="path/to/your-image.jpg"&gt;&lt;/div&gt;
    &lt;div class="rd-parallax-layer" data-speed="0.3" data-type="html" data-fade="true"&gt;
        ...
    &lt;/div&gt;
&lt;/section&gt;
&lt;!-- END RD Parallax--&gt;
</code></pre>

<p>Each parallax item is set as separate layer. There can be an unlimited number of layers.</p>


<h4>Layer type configuration</h4>

<p>In order to configure type of layer you should use <b>data-type</b> data attribute.</p>

<p><b>Data-type</b> data attribute can take media and html values.</p>

<p>It defines parallax layer type. If it’s set to media, layer size calculation will be based on parallax section height, if html - size is based on content included.</p>

<p>For example,</p>

<code>&lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media"&gt;</code>


<h4>Layer speed configuration</h4>

<p>In order to configure speed of layer you should use <b>data-speed</b> data attribute.</p>

<p><b>Data-speed</b> data attribute can take values from 0 to 2.</p>

<p>It defines parallax scrolling speed compared to scrollbar. For better understanding, if the speed is set to 1 you get emulation of background-attachment: fixed css property.</p>

<p>For example,</p>

<code>&lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media"&gt;</code>


<h4>Layer blur configuration</h4>

<p>In order to configure layer blur you should use <b>data-blur</b> data attribute.</p>

<p><b>Data-blur</b> attribute can take true, false values.</p>

<p>If it’s set to true image blur is enabled, in case it’s size is not enough for correct image appearing in parallax section.</p>

<p>For example,</p>

<code>&lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-blur="true"&gt;</code>


<h4>Layer scrolling direction setup</h4>

<p>In order to set layer scrolling direction you should use <b>data-direction</b> data attribute.</p>

<p><b>Data-direction</b> attribute can take inverse, normal values.</p>

<p>It defines scrolling direction of parallax layer. It it’s set to normal parallax will move parallel to page scroll, if to inverse - in the opposite direction.</p>

<p>For example,</p>

<code>&lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-direction="inverse"&gt;</code>


<h4>Media layer background image setup</h4>

<p>In order to set background image to media layer, just specify <b>data-url</b> data attribute.</p>

<p>For example,</p>

<code>&lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-url="path/to/your-image.jpg"&gt;</code>


<h4>HTML layer appearance effect configuration</h4>

<p>In order to customize HTML layer appearance effect you should use <b>data-fade</b> data attribute.</p>

<p>Data-fade attribute can take values true, false.</p>

<p>If it’s set to true, layer will gradually emerge from the full transparency to full opacity depending on layer scroll position.</p>

<p>For example,</p>

<code>&lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-fade="true"&gt;</code>


<h4>Custom layer content management</h4>

<p>Block with <b>data-type="media"</b> data attribute can include any custom content inside, like various slider scripts, background video, etc. In order to place custom content inside of media object, just do not specify data-url data attribute.</p>

<p>For example,</p>

<code>&lt;div class="rd-parallax-layer vide" data-speed="0.2" data-type="media"&gt;</code>