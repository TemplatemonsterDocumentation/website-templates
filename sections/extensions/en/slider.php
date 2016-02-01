<h3>Swiper - Slider</h3>

<figure class="img-polaroid">
    <img src="img/slider.png" alt="">
</figure>

<h6>HTML Website Templates use <b>Swiper.js</b> extension to implement slider functionality to template pages with extended data-API for interaction.</h6>

<p>Default slider code structure appears as follows:</p>

<pre><code>&lt;!-- Swiper --&gt;
&lt;div class="swiper-container swiper-slider"&gt;
    &lt;div class="swiper-wrapper"&gt;
        &lt;div class="swiper-slide"&gt;
            &lt;div class="swiper-slide-caption"&gt;
                Slide 1
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="swiper-slide"&gt;
            &lt;div class="swiper-slide-caption"&gt;
                Slide 2
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="swiper-slide"&gt;
            &lt;div class="swiper-slide-caption"&gt;
                Slide 3
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Swiper Pagination --&gt;
    &lt;div class="swiper-pagination"&gt;&lt;/div&gt;

    &lt;!-- Swiper Navigation --&gt;
    &lt;div class="swiper-button-prev"&gt;&lt;/div&gt;
    &lt;div class="swiper-button-next"&gt;&lt;/div&gt;

    &lt;!-- Swiper Scrollbar --&gt;
    &lt;div class="swiper-scrollbar"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Slide background image configuration</h4>
<p>In order to set corresponding slide background image for target slider you should use <b>data-slide-bg</b> data attribute.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;div class="swiper-wrapper"&gt;
        &lt;div class="swiper-slide" data-slide-bg="link/to/yourslide.jpg"&gt;
            &lt;div class="swiper-slide-caption"&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Slider height configuration</h4>
<p>Swiper slider height is set by using corresponding <b>data-height</b> and <b>data-min-height</b> attributes to target slider.</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>data-height</dt>
            <dd>defines requires slider height;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-min-height</dt>
            <dd>defines slider height minimum;</dd>
        </dl>
    </li>
</ol>

<p>You can set slider height (<b>data-height</b>, <b>data-min-height</b>) value in 3 formats:</p>
<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>*px</dt>
            <dd>defines static height, it will stay unchanged on screen resize;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>*%</dt>
            <dd>defines slider height as a percent of its width;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>*vh</dt>
            <dd>defines slider height as a percent of window height.</dd>
        </dl>
    </li>
</ol>

<p>Static height example.</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-height="500px"&gt;
    ...
&lt;/div&gt;
</code></pre>

<p>Slider percent example</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-height="50%" data-min-height="300px"&gt;
    ...
&lt;/div&gt;
</code></pre>

<p>Window height example</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-height="100vh" data-min-height="300px"&gt;
    ...
&lt;/div&gt;
</code></pre>

<p>In case you do not specify slider height, it will be calculated based on the embedded content.</p>


<h4>Slider autoplay configuration</h4>

<p>By default Swiper slider in HTML Website template has autoplay enabled. In order to disable it or change slides switching time you should use
    <b>data-autoplay</b> attribute by using false key or time value in milliseconds. It should be added to target item with
    <b>.swiper-slider</b> class.</p>

<p>For example,</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-autoplay="false"&gt;
    ...
&lt;/div&gt;
</code></pre>

<p>or,</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-autoplay="3000"&gt;
    ...
&lt;/div&gt;
</code></pre>


<h4>Slider loop configuration</h4>

<p>To loop the slide display in slider you should use the <b>data-loop</b> data attribute (true/false, by default it’s set to true) for target item with
    <b>.swiper-slider</b> class.</p>

<p>For example,</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-loop="false"&gt;
    ...
&lt;/div&gt;
</code></pre>


<h4>Sliding direction setup</h4>
<p>Swiper slider allows you to change direction of slides switching from horizontal to vertical. In order to do this you should use
    <b>data-direction</b> data attribute (“horizontal”/”vertical”, by default it’s set to “horizontal”) for target item with
    <b>.swiper-slider</b> class.</p>

<p>For example,</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-direction="vertical"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Slider navigation setup</h4>

<p>Swiper supports the display of “<b>Previous</b>” and “<b>Next</b>” buttons to manage slides appearance. In order to show them you should use the following code structure for target slider.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;!-- Slider Navigation --&gt;
    &lt;div class="swiper-button-prev"&gt;&lt;/div&gt;
    &lt;div class="swiper-button-next"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Slider pagination setup</h4>

<p>Swiper supports slider pagination display.  In order to show it you should use the following code structure for target slider.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;!-- Slider Pagination --&gt;
    &lt;div class="swiper-pagination"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>By default slider pagination is clickable. If you need to disable this feature you should define
    <b>data-clickable</b> attribute for corresponding slider pagination.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;!-- Slider Pagination --&gt;
    &lt;div class="swiper-pagination" data-clickable="false"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>To show the numeric value for corresponding pagination point you should use <b>data-index-bullet=”true”</b> data attribute for target slider pagination.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;!-- Slider Pagination --&gt;
    &lt;div class="swiper-pagination" data-index-bullet="true"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>


<h4>Scrollbar configuration</h4>
<p>Swiper slider supports scrollbar display. In order to show them you should use the following code structure for target slider.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;!-- Slider Scrollbar --&gt;
    &lt;div class="swiper-scrollbar"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>By default interaction with scrollbar is enabled.  If you need to disable this feature you should define <b>data-draggable=”false”</b> data attribute for corresponding scrollbar in target slider code.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;!-- Slider Scrollbar --&gt;
    &lt;div class="swiper-scrollbar" data-draggable="false"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>


<h4>Arrows management</h4>

<p>Swiper slider allows to manage slides appearance by using keypad arrow buttons. In order to enable this option you should use
    <b>data-keyboard</b> data attribute for target slider.</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-keyboard="true"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Mouse management</h4>

<p>Swiper slider supports slider management by using mouse.  In order to enable this option you should use <b>data-mousewheel</b> data attribute for target slider.</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-mousewheel="true"&gt;
    ...
&lt;/div&gt;
</code></pre>

<p>By default this option blocks further page scrolling when first or last slide is reached. In order to disable page scrolling in this case you should use
    <b>data-mousewheel-release=”true”</b> data attribute for target slider.</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-mousewheel="true"
        data-mousewheel-release="true"&gt;
    ...
&lt;/div&gt;
</code></pre>

<h4>Slide parallax integration</h4>

<p>В HTML Website Templates allow you to integrate <b>RD Parallax</b> parallax effect to target slide of your Swiper
        slider. In order to do this you should define additional .rd-parallax class at target slide and specify corresponding
    <b>data-url</b> , etc. data attributes to configure parallax effect.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;div class="swiper-wrapper"&gt;
        &lt;div class="swiper-slide rd-parallax"&gt;
            &lt;div class="rd-parallax-layer" data-speed="0.6" data-type="media"
                 data-url="images/page-1_img01.jpg"&gt;&lt;/div&gt;
            &lt;div class="rd-parallax-layer" data-speed="0.7" data-type="html"
                 data-fade="true"&gt;
                &lt;div class="swiper-slide-caption"&gt;
                    ...
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Slide background video integration</h4>

<p>HTML Website Templates allow you to integrate <b>Vide.js</b> background video to target slide of your Swiper slider. In order to do this you should define additional
    <b>.vide</b> class at target slide and specify corresponding <b>data-vide-bg</b>, etc. data attributes to configure background video effect.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;div class="swiper-wrapper"&gt;
        &lt;div class="swiper-slide vide"
             data-vide-bg="path/to/video"&gt;
            &lt;div class="swiper-slide-caption"&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Animate.css integration to slide elements</h4>

<p>HTML Website Templates allow you to integrate <b>Animate.css</b> to slider elements. In order to do this you should define corresponding data attributes:
    <b>data-caption-animate</b> and <b>data-caption-delay</b> (to set delay if needed) for target slide. Delay time for
    <b>data-caption-delay</b> is set in milliseconds. You can use any animation effect, available in <b>Animate.css</b> as a target animation.</p>

<pre><code>&lt;div class="swiper-container swiper-slider"&gt;
    &lt;div class="swiper-wrapper"&gt;
        &lt;div class="swiper-slide"&gt;
            &lt;div class="swiper-slide-caption"&gt;
                &lt;h2 data-caption-animate="fadeUp"&gt;Your text goes here&lt;/h2&gt;
                &lt;p data-caption-animate="fadeUp" data-caption-delay="200"&gt;
                    Some other text goes here
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>Sliding effect configuration</h4>

<p>Swiper slider has few sliding effects available:</p>

<ol class="index-list">
    <li><b>fade</b></li>
    <li><b>slide</b></li>
    <li><b>coverflow</b></li>
    <li><b>cube</b></li>
</ol>

<p>To change sliding effect, you should use corresponding <b>data-slide-effect</b> data attribute for target slider.</p>

<pre><code>&lt;div class="swiper-container swiper-slider" data-slide-effect="fade"&gt;
    ...
&lt;/div&gt;
</code></pre>