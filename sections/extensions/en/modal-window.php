<h3>Magnific Popup - Modal window</h3>
<figure class="img-polaroid">
    <img src="img/modal-window.png" alt="">
</figure>

<h6>HTML Website Template Template use <b>Magnific Popup</b> extension to implement modal windows functionality.</h6>

<h4>Inserting modal window to page</h4>

<p><b>Data-lightbox</b> attribute adding to any of page links or buttons will automatically convert it into modal window. You may also use different types of modal windows for a quick initialization.</p>

<h5>Separate image</h5>

<p>To insert modal window with separate image you should use <b>data-lightbox=”image”</b> attribute at the target link code.</p>

<pre><code>&lt;a href="link-to-popup-image.jpg" data-lightbox="image"&gt;
    &lt;img src="link-to-thumbnail-of-popup-image.jpg" alt="Image 1"/&gt;
&lt;/a&gt;
</code></pre>

<h5>Iframe</h5>

<p>To insert modal window with iframe you should use <b>data-lightbox=”iframe”</b> attribute at the target link code.</p>

<code>&lt;a href="http://yoursite.com/target-page/" data-lightbox="iframe"&gt;Open Page In Modal&lt;/a&gt;</code>

<h5>Youtube & Vimeo Video</h5>

<p>To insert modal window with  Youtube or Vimeo video you should use <b>data-lightbox=”iframe”</b> attribute at the target link code.</p>

<pre><code>&lt;a href="http://www.youtube.com/watch?v=0O2aH4XLbto" data-lightbox="iframe"&gt;Open Video&lt;/a&gt;

&lt;a href="https://vimeo.com/45830194" data-lightbox="iframe"&gt;Open Video&lt;/a&gt;
</code></pre>

<h5>Gallery</h5>

<p>To create modal gallery you should use <b>data-lightbox=”gallery”</b> attribute for parent item of target child modal items group.</p>

<pre><code>&lt;div data-lightbox="gallery"&gt;
    &lt;a href="http://yoursite.com/target-page/" data-lightbox="iframe"&gt;
        Gallery Iframe item
    &lt;/a&gt;
    &lt;a href="link-to-modal-image.jpg" data-lightbox="image"&gt;
        Gallery Image item
    &lt;/a&gt;
    &lt;a href="https://vimeo.com/45830194" data-lightbox="iframe"&gt;
        Gallery Video item
    &lt;/a&gt;
&lt;/div&gt;
</code></pre>


<h4>Adding captions to images</h4>

<p>To add corresponding image caption in modal window you should specify optional <b>title</b> attribute to target item with
    <b>data-lightbox</b> data attribute.</p>

<pre><code>&lt;a href="link-to-popup-image.jpg" data-lightbox="image" title="Image Caption"&gt;
    &lt;img src="link-to-thumbnail-of-popup-image.jpg" alt="Image 1"/&gt;
&lt;/a&gt;
</code></pre>