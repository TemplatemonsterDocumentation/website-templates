<h3>LightGallery</h3>
<p>We use <b>LightGallery</b> plugin in our templates to implement functional mobile-friendly galleries.</p>

<p>
	This script supports galleries with:

<ul class="marked-list">
	<li>Thumbnails</li>
	<li>YouTube/Vimeo/HTML5 video</li>
	<li>iframe</li>
	<li>Photo captions</li>
	<li>HTML markup</li>
	<li>Social network sharing</li>
	<li>Custom CSS3 animation</li>
</ul>
</p>

<h4>Creating a modal window for a single image</h4>

<p>To insert a modal window with a certain image, you need to paste a link with <mark>data-lightgallery="item"</mark>  and <mark>href</mark> attributes. In the latter, specify a link to the full-size image.</p>

<p>You can also use an alternative variant: add div with <mark>data-lightgallery="item"</mark> and <mark>data-src="path/to/image.jpg"</mark> attributes</p>

<pre><code>&lt;a data-lightgallery="item" href="path/to/image.jpg"&gt;
  &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
&lt;/a&gt;</code></pre>

<h4>Creating a gallery of multiple images</h4>

<p>To paste a gallery from multiple images, use <mark>data-lightgallery="group"</mark> attribute for a parent element of a proper group, which includes separate images.</p>


<pre><code>&lt;div data-lightgallery="group"&gt;
  &lt;a data-lightgallery="item" href="path/to/image.jpg"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
  &lt;/a&gt;
  &lt;a data-lightgallery="item" href="path/to/image.jpg"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>

<h4>Adding a thumbnail to the gallery made of multiple images</h4>

<img src="img/lightGallery-1.jpg" alt="">

<p>Open script.js file and add <mark>thumbnail: true</mark> setting in the section with lightGallery script initialization.</p>
<p>
	<a href="http://sachinchoolur.github.io/lightGallery/demos/index.html">See more information in the official documentation.</a>
</p>

<h4>Changing the photo transition</h4>

<p>Open script.js file and add <mark>mode: "animation name"</mark> setting in the section with lightGallery script initialization, for example: <b>lg-zoom-in-out</b></p>
<p><a href="http://sachinchoolur.github.io/lightGallery/demos/transitions.html">Types of available transitions</a></p>

<h4>Creating a gallery from multiple videos</h4>

<p>To create a video gallery, insert the video link into its href attribute.</p>


<pre><code>&lt;div data-lightgallery="group"&gt;
  &lt;a data-lightgallery="item" href="https://www.youtube.com/watch?v=meBbDqAXago"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
  &lt;/a&gt;
  &lt;a data-lightgallery="item" href="https://vimeo.com/1084537"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>

<p>
	<a href="http://sachinchoolur.github.io/lightGallery/demos/videos.html">See more information in the official documentation.</a>
</p>

<h4>Creating a gallery with iframe</h4>

<p>To create a gallery with iframe, insert your iframe link in <mark>data-src</mark> attribute and add <mark>data-iframe="true"</mark> and <mark>data-lightgallery="item"</mark></p>

<pre><code>&lt;!-- Opens w3schools website  --&gt;
&lt;button class="button button-primary" data-lightgallery="item" data-iframe="true" data-src="http://www.w3schools.com/"&gt;Opens w3schools.com&lt;/button&gt;
&lt;!-- Opens Google Maps --&gt;
&lt;button class="button button-primary" data-lightgallery="item" data-iframe="true" data-src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d248849.84916296514!2d77.6309395!3d12.9539974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1410805729331"&gt;Open Google Maps&lt;/button&gt;</code></pre>

<h4>Adding a photo caption</h4>

<p>To create a photo caption, insert the selector of the caption element into <mark>data-sub-html</mark> attribute.</p>
<p>Then, open script.js and add <mark>subHtmlSelectorRelative: true</mark> setting in the section with lightGallery script initialization.</p>

<pre><code>&lt;div data-lightgallery="group"&gt;
  &lt;a data-lightgallery="item" data-sub-html=".caption" href="path/to/image.jpg"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
    &lt;span style="display: none;" class="caption"&gt;Caption 1&lt;/span&gt;
  &lt;/a&gt;
  &lt;a data-lightgallery="item" data-sub-html=".caption" href="path/to/image.jpg"&gt;
    &lt;img class="img-responsive" src="path/to/image.jpg"&gt;
    &lt;span style="display: none;" class="caption"&gt;Caption 2&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>

<h4>Adding a social sharing button</h4>

<p>Open script.js file and add <mark>share: true</mark> setting in the section with lightGallery script initialization.</p>

<img src="img/lightGallery-2.jpg" alt="">

<h4>Adding Facebook commentaries</h4>

<p>
	<a href="http://sachinchoolur.github.io/lightGallery/demos/comment-box.html">See the detailed instruction on the developers’ website.</a>
</p>

<img src="img/lightGallery-3.jpg" alt="">