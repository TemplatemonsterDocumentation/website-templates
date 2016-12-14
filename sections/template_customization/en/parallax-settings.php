<h3>Parallax Setup</h3>



<p>HTML Website Template comes with <b>RD Parallax</b> plugin for implementing  <a href="https://en.wikipedia.org/wiki/Parallax">parallax</a> effect.
        You can find more detailed information about the plugin and its setup in  <b><a href="index.php?lang=en&section=extensions#rd-parallax">Extensions > RD Parallax</a></b> section.
</p>

<h4>Adding a section with background image parallax</h4>
<p>To create a section with background image parallax, please use the following marking, in which you should replace the image path in <b>data-url</b> attribute:</p>

<pre><code>
        &lt;div class="rd-parallax"&gt;
        &lt;div data-speed="0.35" data-type="media" data-url="path/to/your-image.jpg" class="rd-parallax-layer"&gt;&lt;/div&gt;
          &lt;div data-speed="0" data-type="html" class="rd-parallax-layer"&gt;
            ...
          &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
