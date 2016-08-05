<h3>Swiper Slider</h3>
<p>HTML Website Template uses <b>Swiper Slider</b> extension to implement a slider on template pages with advanced <b>data-API</b> user interface.</p>

<pre><code>
        &lt;!-- Swiper --&gt;
        &lt;div class="swiper-container swiper-slider" data-height="" data-min-height=""&gt;
            &lt;div class="swiper-wrapper"&gt;
                &lt;div class="swiper-slide" data-slide-bg=""&gt;
                    &lt;div class="swiper-slide-caption"&gt;

                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="swiper-slide" data-slide-bg=""&gt;
                    &lt;div class="swiper-slide-caption"&gt;

                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="swiper-slide" data-slide-bg=""&gt;
                    &lt;div class="swiper-slide-caption"&gt;

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
        &lt;!-- END Swiper --&gt;
    </code></pre>

<h4>Slider height setup</h4>

<p>Swiper slider height is set with the help of the <b>'data-height'</b> and <b>'data-min-height'</b> attributes for the target slider:</p>
<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>data-height</dt>
            <dd>defines the desired slider height;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-min-height</dt>
            <dd>defines the minimal slider height.</dd>
        </dl>
    </li>
</ol>

<p>To define the slider height (data-height, data-min-height), use values in 3 formats:</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>*px</dt>
            <dd>sets a static height that won't change, when resizing a window;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>*%</dt>
            <dd>sets static height as a percentage of its width;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>*vh</dt>
            <dd>sets static slider height as a percentage of the window height.</dd>
        </dl>
    </li>
</ol>

<p>An example with static width:</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-height="500px"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>An example with height as a percentage of slider width:</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-height="50%" data-min-height="300px"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>An example with height as a percentage of the window height:</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider" data-height="100vh" data-min-height="300px"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<p>If you don't set the slider height, it will be counted based on inserted content.</p>

<h4>Slider autoplay setup</h4>

<p>Slider autoplay in Swiper for HTML Website template is enabled by default. To disable or change the period between switching the slides,
  please use the <b>'data-autoplay'</b> attribute with <b>'false'</b> value or with time span in milliseconds for the target element with <b>.swiper-slider</b> class. </p>
<p>E.g.:
</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-autoplay="false"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<p>or:</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-autoplay="3000"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Slider loop setup</h4>
<p>    To set up slider loop for the images, use the <b>'data-loop'</b> attribute (true/false, by default 'true') for the target element with the <b>.swiper-slider</b> class.</p>
<p>E.g.:</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-loop="false"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Slider direction setup</h4>
<p>In Swiper slider, you can change slides switching direction from horizontal to vertical. To do this, use the <b>'data-direction'</b>
  ("horizontal"/"vertical", by default "horizontal") for the target element with the <b>.swiper-slider</b> class.</p>

<p>E.g.:</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-direction="vertical"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Slider navigation setup</h4>

<p>Swiper supports 'Prev'/'Next' buttons display for managing slider display. To display these buttons, please add the following marking to the target slider:</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Navigation --&gt;
            &lt;div class="swiper-button-prev"&gt;&lt;/div&gt;
            &lt;div class="swiper-button-next"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Slider pagination setup</h4>
<p>Swiper supports slider pagination display. To display pagination, please add the following marking to the target slider:</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Pagination --&gt;
            &lt;div class="swiper-pagination"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>By default, slider pagination is clickable. To disable this, add the <b>'data-clickable'</b> attribute to the corresponding slider pagination:</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Pagination --&gt;
            &lt;div class="swiper-pagination" data-clickable="false"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>To display the serial number of the corresponding pagination point, use the <b>data-index-bullet = "true"</b> attribute for the corresponding slider pagination:</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
        &lt;!-- Slider Pagination --&gt;
        &lt;div class="swiper-pagination" data-index-bullet="true"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Slider scrollbar setup</h4>

<p>Swiper supports slider scrollbar display. To display it , add the following marking to the target slider:</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Scrollbar--&gt;
            &lt;div class="swiper-scrollbar"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>By default, the ability to interact with the scrollbar is enabled. To disable it, use the <b>data-draggable = "false"</b> attribute for the target slider scrollbar:</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider"&gt;
            &lt;!-- Slider Scrollbar--&gt;
            &lt;div class="swiper-scrollbar" data-draggable="false"&gt;&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Slider keyboard navigation</h4>
<p>    Swiper supports slider keyboard navigation. To enable it, please use the <b>'data-keyboard'</b> attribute for the target slider:</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider" data-keyboard="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Slider mousewheel navigation</h4>

<p>Swiper supports slider mousewheel navigation. To enable it, please use the <b>'data-mousewheel'</b> attribute for the target slider:</p>
<pre><code>
        &lt;div class="swiper-container swiper-slider" data-mousewheel="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p>By default, this option prevents further page scrolling, when you reach the last or the first slide in the slider.
  To enable the page scrolling in this situation, you must use the <b>data-mousewheel-release = "true"</b> attribute for the target slider:
</p>

<pre><code>
        &lt;div class="swiper-container swiper-slider" data-mousewheel="true" data-mousewheel-release="true"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Integrating parallax to the slider </h4>
<p><b>RD Parallax</b> is used for implementing the parallax effect.</p>

<p>To integrate parallax to the slider, use the slider inside the parallax by using the <b>rd-parallax-swiper</b> class. In this way, parallax effect will be used for slider content.
  To change the speed of an element in the slider, add the <b>swiper-parallax</b> class and the <b>data-speed</b> attribute to change the speed:</p>

<pre><code>
        &lt;div class="rd-parallax rd-parallax-swiper"&gt;
            &lt;div data-speed="0.3" data-sm-speed="1" data-type="html" class="rd-parallax-layer"&gt;
                &lt;div class="swiper-container swiper-slider"&gt;
                    ...
                    &lt;div data-speed="0.5" class="swiper-caption swiper-parallax"&gt;
                        ...
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
    </code></pre>

<h4>Background video integration</h4>
<p><b>RD Video Background</b> plugin is used for implementing a background video in the slider.</p>
<p>To add a background video to the slider, add the background video activation marking to the <b>'swiper-slide'</b> block :</p>
<pre><code>
        &lt;div class="swiper-slide"&gt;
            &lt;div data-rd-video-path="path/to/video" class="rd-video"&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>The path to the video should be specified without the extension.</p>