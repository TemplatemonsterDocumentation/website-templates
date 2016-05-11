<h3>RD Parallax</h3>
<h6>Intense uses <b>RD Parallax</b> extension for implementing parallax effect on the page.</h6>
<p>Basic script marking looks the following way:</p>
<pre><code>
        &lt;!-- RD Parallax --&gt;
        &lt;section class="rd-parallax"&gt;
            &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media"
                 data-url="path/to/your-image.jpg"&gt;&lt;/div&gt;
            &lt;div class="rd-parallax-layer" data-speed="0.3" data-type="html" data-fade="true"&gt;
                ...
            &lt;/div&gt;
        &lt;/section&gt;
        &lt;!-- END RD Parallax--&gt;
    </code></pre>

<p>Each parallax element constitutes a separate layer. The number of layers is unlimited.</p>
<h4>Layer type setup</h4>

<p>To set up the layer type, use the <b>'data-type'</b> attribute.
  <b>'data-type'</b> attribute can take <b>'media',</b> <b>'html'</b> values.
  It defines the parallax layer type. If it's defined as <b>'media',</b> layer size will
  be defined in relation to the parallax section height. If it's defined as <b>'html'</b> the size will be defined by the content.
</p>
<p>E.g.:</p>
<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media"&gt;
    </code></pre>

<h4>Layer speed setup</h4>

<p>To set up the layer speed, use the  <b>'data-speed'</b> attribute. <b>'data-speed'</b> attribute can have values from 0 to 2.
  It defines the parallax speed in relation to scrollbar movement. For instance, if the speed value equals 1, you'll get the css property  <b>'background-attachment: fixed'</b> emulated.
</p>
<p>E.g.:</p>
<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media"&gt;
    </code></pre>

<h4>Layer blur setup</h4>
<p>To set up layer blur, please use <b>'data-blur'</b> attribute.
  <b>'data-blur'</b> can have values <b>'true'</b>, <b>'false'</b>.
    If set to  <b>'true'</b>, the image will be blurred,in case it's size is too small for good-quality display in parallax section. </p>
<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-blur="true"&gt;
    </code></pre>

<h4>Layer direction setup</h4>
<p>To set up layer direction, use the <b>'data-direction'</b> attribute.</p>
<p><b>'data-direction'</b> attribute can have the following values <b>'inverse'</b>, <b>'normal'</b>.
   </p>

<p>It defines the parallax direction. If set to 'normal', parallax will move in the same direction as the scroll. If set to 'inverse', it'll move in the opposite direction.</p>

<p>E.g.:</p>

<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-direction="inverse"&gt;
    </code></pre>

<h4>Background image setup</h4>

<p>To set a background image inside the media-object, just specify the <b>'data-url'</b> attribute. </p>

<p>E.g.:</p>

<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-url="path/to/your-image.jpg"&gt;
    </code></pre>

<h4>HTML layer fade effect</h4>

<p>To set up fade effect for the HTML layer, please use the <b>'data-fade'</b> attribute.</p>

<p><b>'data-fade'</b> attribute can have <b>'true'</b>, <b>'false'</b> values.</p>
<p>If set to 'true', the layer will gradually emerge from the full transparency to full opacity, depending on the position of the scroll layer.</p>
<p>E.g.:</p>
<pre><code>
        &lt;div class="rd-parallax-layer" data-speed="0.2" data-type="media" data-fade="true"&gt;
    </code></pre>

<h4>Managing layer custom content</h4>
<p>The block with the <b>data-type="media"</b> attribute can contain any custom content, for example,
  different slider scripts, background videos, etc. To place custom content inside the media-object, do not specify the <b>'data-url'</b> attribute. </p>

<p>E.g.:</p>

<pre><code>
        &lt;div class="rd-parallax-layer vide" data-speed="0.2" data-type="media"&gt;
    </code></pre>