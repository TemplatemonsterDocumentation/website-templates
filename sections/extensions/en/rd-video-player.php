<h3>RD Video Player</h3>
<p>Intense uses <b>RD Video Player</b> extension for implementing a video player.</p>

<h4>Adding video player to the page</h4>
<p>To add the video player to the target HTML page, use the following markup:</p>

<pre><code>
        &lt;div data-rd-video-path="path/to/video" class="rd-video-player"&gt;
            &lt;div class="rd-video-wrap embed-responsive-16by9"&gt;
                &lt;div class="rd-video-preloader"&gt;< /div&gt;
                &lt;video preload="metadata"&gt;/video&gt;
                &lt;div class="rd-video-preview"&gt;/div&gt;
                &lt;div class="rd-video-top-controls"&gt;
                    &lt;span class="rd-video-title"&gt;&lt;/span&gt;
                    &lt;a href="#" class="rd-video-fullscreen mdi mdi-fullscreen rd-video-icon"&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="rd-video-controls"&gt;
                    &lt;div class="rd-video-controls-buttons"&gt;
                        &lt;a href="#" class="rd-video-prev mdi mdi-fast-forward rd-video-icon"&gt;&lt;/a&gt;
                        &lt;a href="#" class="rd-video-play-pause mdi mdi-play"&gt;&lt;/a&gt;
                        &lt;a href="#" class="rd-video-next mdi mdi-fast-forward rd-video-icon"&gt;&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="rd-video-progress-bar"&gt;<  /div&gt;
                    &lt;div class="rd-video-time"&gt;
                        &lt;span class="rd-video-current-time"&gt;< /span&gt;
                        &lt;span class="rd-video-time-divider"&gt;:&lt;/span&gt;
                        &lt;span class="rd-video-duration"&gt;< /span&gt;<  /div&gt;
                    &lt;div class="rd-video-volume-wrap"&gt;
                        &lt;a href="#" class="rd-video-volume mdi mdi-volume-high rd-video-icon"&gt;/a&gt;
                        &lt;div class="rd-video-volume-bar-wrap"&gt;

                            &lt;div class="rd-video-volume-bar"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
    </code></pre>

<p>You can alter this markup in order to change the appearance of the video player.
  To make player work, you just need to add classes for certain elements. You will find a list of these classes below in a class map:</p>

<h4>Video player class map</h4>
<ul class="marked-list">
    <li><dl class="inline-term">
            <dt>.rd-video-prev</dt>
            <dd> the player switches to the previous video;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-play-pause</dt>
            <dd>play/pause button;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-next</dt>
            <dd> the player switches to the next video;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-stop</dt>
            <dd> stop button;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-progress-bar</dt>
            <dd> playback progress bar;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-progress-bar-slider</dt>
            <dd> video progress bar slider;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-duration</dt>
            <dd> displays video duration;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-current-time</dt>
            <dd> displays current playback time;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-title</dt>
            <dd> displays video title;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-fullscreen</dt>
            <dd> a button to enable\disable fullscreen mode;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-volume</dt>
            <dd> a button to enable\disable sound;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-volume-bar</dt>
            <dd> volume bar;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-volume-bar-slider</dt>
            <dd> volume bar slider;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-playlist</dt>
            <dd>playlist.</dd>
        </dl></li>
</ul>

<h4>Changing video in video player</h4>

<p>To change the video, specify the new video path without the format in <b>'data-rd-video-path'</b> attribute. This attribute won’t work, if you have a playlist:</p>

<pre><code>
        &lt;div data-rd-video-path="path/to/video" class="rd-video-player"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Changing video title in video player</h4>

<p>To change the tilt of the video, specify the video title in <b>'data-rd-video-title'</b> attribute. This attribute won’t work, if you have a playlist:</p>

<pre><code>
        &lt;div data-rd-video-title="Your title" class="rd-video-player"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Disabling video volume in the video player by default</h4>

<p>To disable the video player volume, add the <b>'data-rd-video-muted'</b> attribute with <b>'true'</b> value:</p>
<pre><code>
        &lt;div data-rd-video-muted="true" class="rd-video-player"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Setting up the default video player volume</h4>

<p>To change the default video player volume, add the <b>data-rd-video-volume</b> attribute. It can take values from 0 to 1:</p>

<pre><code>
        &lt;div data-rd-video-path="path/to/video" class="rd-video-player" data-rd-video-volume="0.5"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Adding a playlist to the video player</h4>
<p>HTML marking for creating a playlist looks the following way:</p>
<pre><code>
        &lt;ul data-rd-video-play-on="li" class="rd-video-playlist"&gt;
            &lt;li data-rd-video-src="path/to/video1" data-rd-video-title="title 1"&gt;
                ...
            &lt;/li&gt;
            &lt;li data-rd-video-src="path/to/video2" data-rd-video-title="title 2"&gt;
                ...
            &lt;/li&gt;
        &lt;/ul&gt;
    </code></pre>
<p>The marking inside the element can take any form.
  To add a url of a video file with list elements, use the following attributes:
</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>data-rd-video-src</dt>
            <dd>path to the video file without format;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-rd-video-title</dt>
            <dd>video title (an additional attribute, necessary for displaying the video title in the player).</dd>
        </dl>
    </li>
</ul>










